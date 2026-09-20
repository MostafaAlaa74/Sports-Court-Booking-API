<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('court_id')->constrained('courts')->cascadeOnDelete();
            $table->time('start_time');
            $table->time('end_time');
            $table->date('date');
            $table->enum('status' , array_column(\App\Enums\BookingStatus::cases() , 'value'))->default(\App\Enums\BookingStatus::PENDING->value);
            $table->timestamps();
            $table->index(['court_id', 'date']); //! Composite Indexing
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
