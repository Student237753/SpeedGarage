<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id(); // auto-incrementing ID
            $table->string('brand'); // Brand name
            $table->string('model'); // Model name
            $table->year('year_of_manufacture'); // Year of manufacture (only year)
            $table->bigInteger('odometer'); // Odometer reading
            $table->string('fuel_type'); // Type of fuel
            $table->string('description')->nullable(); // Description (optional)
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars'); // Drop the 'cars' table if it exists
    }
};
