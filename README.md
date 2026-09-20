# 🏟️ Sports Court Booking API

<p align="center">
  <strong>A production-oriented RESTful API for sports venue and court booking</strong>
</p>

<p align="center">
  Built with Laravel 12, with a focus on real-world backend engineering concepts.
</p>

---

## 📌 Overview

**Sports Court Booking API** is a backend system for managing sports venues, courts, availability, bookings, reviews, and online payments.

The project goes beyond basic CRUD operations and focuses on practical backend concerns such as:

- Authentication and role-based authorization
- Booking conflict prevention
- Eloquent relationships and query scopes
- Database indexing and query analysis
- Redis caching
- Background jobs and queues
- Stripe Checkout
- Stripe Webhooks
- Webhook signature verification
- Idempotent event processing
- Asynchronous booking confirmation emails

The goal is to simulate backend challenges that appear in real-world booking and payment systems.

---

## ✨ Key Features

### 🔐 Authentication & Authorization

- User registration and login
- Token-based authentication with Laravel Sanctum
- Protected API resources
- Role-based authorization
- Support for multiple user roles:
  - Member
  - Field Owner
  - Admin

---

### 🏟️ Venue & Court Management

The API manages sports venues and the courts belonging to them.

Supported operations include:

- Create and manage venues
- Create and manage courts
- Retrieve venue details
- Retrieve court details
- Manage court availability
- Associate courts with venue owners

---

### 📅 Booking System

The booking system manages the complete reservation lifecycle.

It handles:

- Creating bookings
- Cancelling bookings
- Retrieving bookings
- Retrieving authenticated user's bookings
- Checking court availability
- Detecting overlapping reservations
- Booking status management
- Upcoming and past booking filtering

---

# 💳 Payment Architecture

Payments are handled through **Stripe Checkout**.

The booking is **not confirmed simply because the user reaches the success page**.

Stripe is treated as the source of truth for payment confirmation.

### Payment Flow

```text
User
 │
 │ Create Booking
 ▼
Booking
 │
 │ Create Checkout Session
 ▼
Stripe Checkout
 │
 │ Payment
 ▼
Stripe
 │
 │ checkout.session.completed
 ▼
Webhook Endpoint
 │
 ▼
Signature Verification
 │
 ▼
Idempotency Check
 │
 ▼
Payment Verification
 │
 ▼
Booking → CONFIRMED
 │
 ▼
Queue Job
 │
 ▼
Confirmation Email
```

### Why Webhooks?

The browser success page is not considered a reliable payment confirmation mechanism.

A user can:

- Close the browser
- Lose connection
- Leave the success page
- Never return to the application

The Stripe webhook allows the backend to receive the payment event directly from Stripe regardless of what happens to the user's browser.

---

# 🔔 Stripe Webhooks

Webhook endpoint:

```http
POST /api/stripe/webhook
```

The application currently uses:

```text
checkout.session.completed
```

as the primary event for completing the booking payment flow.

Other Stripe events may reach the endpoint, but only the relevant event triggers the booking confirmation logic.

---

## 🔒 Webhook Signature Verification

Stripe webhook requests are verified using Stripe's signature mechanism before the application processes the event.

This prevents arbitrary clients from sending fake requests such as:

```http
POST /api/stripe/webhook
```

and pretending that a payment was completed.

The application therefore follows:

```text
Incoming Request
      ↓
Signature Verification
      ↓
Verified Stripe Event
      ↓
Event Processing
```

---

# ♻️ Webhook Idempotency

Stripe can deliver the same event more than once.

The application uses an idempotency middleware to prevent duplicate processing.

The Stripe **event ID** is used as the unique identifier.

```text
Stripe Event
     │
     ▼
Event ID
     │
     ├── Already processed
     │        ↓
     │      Ignore
     │
     └── New event
              ↓
        Process event
```

This protects against problems such as:

- Duplicate booking confirmation
- Duplicate email jobs
- Re-processing the same payment event

---

# ⚙️ Background Jobs & Queues

Booking confirmation emails are dispatched through Laravel Jobs and Queues.

After successful payment:

```text
Booking Confirmed
       │
       ▼
BookConfirmedJob
       │
       ▼
Confirmation Email
```

This prevents email delivery from blocking the Stripe webhook request.

Run the queue worker locally with:

```bash
php artisan queue:work
```

---

# ⚡ Caching

Redis is used as the application's cache backend.

Caching is used for data that can be reused without repeatedly querying the database.

The application communicates with Laravel's Cache abstraction instead of coupling business logic directly to Redis.

---

# 🗄️ Database & Query Optimization

The project uses Laravel Eloquent with relational database support.

Supported database configurations include:

- SQLite
- MySQL

Database and query performance were considered through:

- Foreign-key indexes
- Composite indexes where appropriate
- Selective column retrieval
- Eager loading
- Pagination
- Query scopes
- MySQL `EXPLAIN`

Example:

```sql
EXPLAIN
SELECT ...
FROM bookings
WHERE user_id = ?
ORDER BY created_at DESC;
```

The project intentionally avoids adding indexes blindly. Query execution plans are inspected first to determine whether an index provides meaningful value.

---

# 🧩 Query Scopes

The `Booking` model contains reusable query scopes for common filtering logic.

Examples:

```php
upcoming()
past()
confirmed()
forUser()
```

Example usage:

```php
Booking::query()
    ->forUser(Auth::user())
    ->upcoming()
    ->paginate(10);
```

This keeps reusable query logic close to the model while keeping controllers focused on handling HTTP requests.

---

# 🏗️ Service Layer

Business logic that should not live directly inside controllers is extracted into dedicated services.

Example:

```text
app/
└── Services/
    └── Payment/
        └── PaymentConfirmationService.php
```

The payment confirmation service is responsible for:

- Checking Stripe payment status
- Reading booking metadata
- Finding the related booking
- Confirming the booking
- Dispatching the confirmation job

This keeps the webhook controller focused on HTTP-level responsibilities.

---

# 🧠 Architecture Overview

```text
                    ┌───────────────────────┐
                    │        Client         │
                    │   Mobile / Frontend   │
                    └───────────┬───────────┘
                                │
                                ▼
                    ┌───────────────────────┐
                    │     Laravel API       │
                    │ Controllers / Routes  │
                    └───────────┬───────────┘
                                │
             ┌──────────────────┼──────────────────┐
             │                  │                  │
             ▼                  ▼                  ▼
       ┌───────────┐      ┌───────────┐      ┌───────────┐
       │  Eloquent │      │  Services │      │   Cache   │
       │    ORM    │      │  Business │      │   Redis   │
       └─────┬─────┘      │   Logic   │      └───────────┘
             │            └─────┬─────┘
             ▼                  │
       ┌───────────┐            │
       │ Database  │            │
       │MySQL/SQLite│           │
       └───────────┘            │
                                ▼
                         ┌──────────────┐
                         │    Stripe    │
                         │   Checkout   │
                         └──────┬───────┘
                                │
                                ▼
                         ┌──────────────┐
                         │   Webhook    │
                         │ Verification │
                         └──────┬───────┘
                                │
                                ▼
                         ┌──────────────┐
                         │ Queue / Job  │
                         └──────┬───────┘
                                │
                                ▼
                         ┌──────────────┐
                         │ Confirmation│
                         │    Email    │
                         └──────────────┘
```

---

# 🔄 Booking Lifecycle

```text
                 ┌─────────────────┐
                 │ Booking Created │
                 └────────┬────────┘
                          │
                          ▼
                 ┌─────────────────┐
                 │ Payment Pending │
                 └────────┬────────┘
                          │
                    Stripe Payment
                          │
                          ▼
             ┌─────────────────────────┐
             │ checkout.session        │
             │       .completed       │
             └────────────┬────────────┘
                          │
                          ▼
             ┌─────────────────────────┐
             │ Signature Verification  │
             │     + Idempotency       │
             └────────────┬────────────┘
                          │
                          ▼
                 ┌─────────────────┐
                 │ Payment = Paid │
                 └────────┬────────┘
                          │
                          ▼
                 ┌─────────────────┐
                 │    Confirmed    │
                 └────────┬────────┘
                          │
                          ▼
                 ┌─────────────────┐
                 │ BookConfirmedJob│
                 └────────┬────────┘
                          │
                          ▼
                 ┌─────────────────┐
                 │ Confirmation    │
                 │     Email       │
                 └─────────────────┘
```

---

# 🔌 API Endpoints

## Authentication

| Method | Endpoint | Description | Auth |
|---|---|---|---|
| POST | `/api/register` | Register a user | Public |
| POST | `/api/login` | Login and receive token | Public |
| POST | `/api/logout` | Revoke current token | Required |

---

## Venues

| Method | Endpoint | Description |
|---|---|---|
| GET | `/api/venues` | List venues |
| GET | `/api/venues/{id}` | Get venue details |
| POST | `/api/venues` | Create venue |
| PUT/PATCH | `/api/venues/{id}` | Update venue |
| DELETE | `/api/venues/{id}` | Delete venue |

---

## Courts

| Method | Endpoint | Description |
|---|---|---|
| GET | `/api/courts` | List courts |
| GET | `/api/courts/{id}` | Get court details |
| POST | `/api/courts` | Create court |
| PUT/PATCH | `/api/courts/{id}` | Update court |
| DELETE | `/api/courts/{id}` | Delete court |

---

## Bookings

| Method | Endpoint | Description |
|---|---|---|
| GET | `/api/bookings` | List bookings |
| POST | `/api/bookings` | Create booking |
| GET | `/api/bookings/{id}` | Get booking |
| PUT/PATCH | `/api/bookings/{id}` | Update booking |
| DELETE | `/api/bookings/{id}` | Delete booking |
| POST | `/api/bookings/{id}/confirm` | Start payment flow |
| POST | `/api/bookings/{id}/cancel` | Cancel booking |
| GET | `/api/my-bookings` | Get current user's bookings |

---

## Availability

| Method | Endpoint | Description |
|---|---|---|
| GET | `/api/availabilities` | List availability |
| GET | `/api/availabilities/{id}` | Get availability |
| POST | `/api/availabilities` | Create availability |
| PUT/PATCH | `/api/availabilities/{id}` | Update availability |
| DELETE | `/api/availabilities/{id}` | Delete availability |

---

## Reviews

| Method | Endpoint | Description |
|---|---|---|
| GET | `/api/reviews` | List reviews |
| GET | `/api/reviews/{id}` | Get review |
| POST | `/api/reviews` | Create review |
| PUT/PATCH | `/api/reviews/{id}` | Update review |
| DELETE | `/api/reviews/{id}` | Delete review |

---

## Stripe

| Method | Endpoint | Description |
|---|---|---|
| POST | `/api/stripe/webhook` | Receive Stripe events |

> The webhook endpoint is intentionally not protected by user authentication because it is called directly by Stripe.

---

# 🛠️ Installation

## 1. Clone the repository

```bash
git clone https://github.com/MostafaAlaa74/Sports-Court-Booking-API.git

cd Sports-Court-Booking-API
```

## 2. Install dependencies

```bash
composer install
```

## 3. Configure environment

```bash
cp .env.example .env
php artisan key:generate
```

---

## 4. Configure Database

### SQLite

```env
DB_CONNECTION=sqlite
```

Create the database file if needed:

```bash
touch database/database.sqlite
```

### MySQL

Configure your database credentials in `.env`.

---

## 5. Configure Stripe

Add your Stripe credentials:

```env
STRIPE_KEY=your_stripe_publishable_key
STRIPE_SECRET=your_stripe_secret_key
```

Configure the webhook signing secret used by the application.

> Never commit real Stripe credentials or webhook secrets to the repository.

---

## 6. Run migrations and seeders

```bash
php artisan migrate --seed
```

---

## 7. Start Laravel

```bash
php artisan serve
```

API:

```text
http://localhost:8000
```

---

## 8. Start Queue Worker

```bash
php artisan queue:work
```

---

# 🧪 Testing

PHPUnit is available through Laravel's testing environment.

Run:

```bash
php artisan test
```

> Comprehensive automated test coverage is intentionally left as a future improvement.

---

# 🛡️ Security

The application includes:

- Laravel Sanctum authentication
- Role-based authorization
- Request validation
- Stripe webhook signature verification
- Webhook idempotency
- Environment-based secret management
- Protected API resources

Sensitive credentials must always be stored in environment variables.

---

# 📦 Tech Stack

| Technology | Purpose |
|---|---|
| PHP 8.2+ | Backend language |
| Laravel 12 | API framework |
| Laravel Sanctum | Authentication |
| MySQL / SQLite | Database |
| Redis | Caching |
| Stripe PHP SDK | Payments |
| Laravel Queues | Background processing |
| Composer | Dependency management |
| PHPUnit | Testing framework |

---

# 📁 Project Structure

```text
app/
├── Http/
│   ├── Controllers/
│   ├── Middleware/
│   └── Requests/
│
├── Jobs/
│   └── BookConfirmedJob.php
│
├── Models/
│   ├── Booking.php
│   ├── Court.php
│   ├── Venue.php
│   └── ...
│
└── Services/
    └── Payment/
        └── PaymentConfirmationService.php
```

---

# 🎯 Engineering Focus

This project was built to explore practical backend engineering rather than CRUD alone.

Key concepts implemented include:

- RESTful API design
- Authentication & authorization
- Eloquent relationships
- Query scopes
- Service layer
- Dependency injection
- Database indexing
- Query optimization
- MySQL `EXPLAIN`
- Redis caching
- Background jobs
- Queues
- Stripe Checkout
- Third-party API integration
- Stripe Webhooks
- Webhook signature verification
- Idempotent event processing
- Asynchronous email delivery
- Payment lifecycle management

---

# 🚧 Future Improvements

The following areas are intentionally reserved for future development after studying the underlying concepts in depth:

- Automated unit and feature testing
- CI/CD with GitHub Actions
- Advanced system design
- Scalability improvements
- Monitoring and observability

The project intentionally avoids adding technologies or patterns simply for the sake of using them.

---

# 👨‍💻 Author

**Mostafa Alaa**

Backend Developer — PHP / Laravel

GitHub:  
https://github.com/MostafaAlaa74

---

# 📄 License

This project is open-sourced software licensed under the MIT License.
