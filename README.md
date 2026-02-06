<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Sports Court Booking API

A robust RESTful API for managing sports venues, courts, and user bookings. Built with Laravel 12, this application handles complex booking logic, availability checking, and secure payments via Stripe.

## 🚀 Features

- **Venue & Court Management**: Manage multiple sports venues and their specific courts.
- **Smart Booking System**:
    - Prevents double bookings with overlap detection.
    - Real-time availability checks.
    - Secure payment integration.
- **Authentication**: Secure Token-based authentication using **Laravel Sanctum**.
- **Payments**: Integrated **Stripe** checkout flow for booking confirmation.
- **Reviews**: User review system for venues/courts.

## 🛠 Tech Stack

- **Framework**: Laravel 12
- **Database**: SQLite / MySQL (Configurable)
- **Authentication**: Laravel Sanctum
- **Payments**: Stripe PHP SDK
- **Testing**: PHPUnit / Pest

## 📦 Installation

1. **Clone the repository**

    ```bash
    git clone https://github.com/yourusername/sports-court-booking-api.git
    cd sports-court-booking-api
    ```

2. **Install Dependencies**

    ```bash
    composer install
    ```

3. **Environment Setup**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure Database & Services**
   Update `.env` with your database credentials and Stripe keys:

    ```env
    DB_CONNECTION=sqlite
    # or mysql...

    STRIPE_KEY=your_stripe_public_key
    STRIPE_SECRET=your_stripe_secret_key
    ```

5. **Run Migrations & Seeders**

    ```bash
    php artisan migrate --seed
    ```

6. **Serve the Application**
    ```bash
    php artisan serve
    ```

## 🔌 API Endpoints

### Authentication

| Method | Endpoint        | Description                 |
| ------ | --------------- | --------------------------- |
| POST   | `/api/register` | Register a new user         |
| POST   | `/api/login`    | Login and receive API token |
| POST   | `/api/logout`   | Logout (revoke token)       |

### Venues & Courts

| Method | Endpoint           | Description       |
| ------ | ------------------ | ----------------- |
| GET    | `/api/venues`      | List all venues   |
| GET    | `/api/venues/{id}` | Get venue details |
| GET    | `/api/courts`      | List courts       |

### Bookings

| Method | Endpoint                     | Description                        |
| ------ | ---------------------------- | ---------------------------------- |
| GET    | `/api/bookings`              | List user's bookings               |
| POST   | `/api/bookings`              | Create a new booking               |
| POST   | `/api/bookings/{id}/confirm` | Confirm booking & get payment link |

## 🧪 Testing

Run the test suite to ensure everything is working correctly:

```bash
php artisan test
```

## 🔒 Security

If you discover a security vulnerability within this project, please treat it confidentially and open an issue or contact the maintainer.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
