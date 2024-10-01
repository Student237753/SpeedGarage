<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            // Mercedes
            ['brand' => 'Mercedes', 'model' => 'G65', 'year_of_manufacture' => 2019, 'odometer' => 150000, 'fuel_type' => 'Petrol', 'description' => 'A luxury SUV with high performance and comfort.'],
            ['brand' => 'Mercedes', 'model' => 'E-Class', 'year_of_manufacture' => 2020, 'odometer' => 50000, 'fuel_type' => 'Diesel', 'description' => 'A stylish sedan with advanced technology.'],
            ['brand' => 'Mercedes', 'model' => 'S-Class', 'year_of_manufacture' => 2021, 'odometer' => 30000, 'fuel_type' => 'Petrol', 'description' => 'A luxury sedan with unparalleled comfort.'],
            ['brand' => 'Mercedes', 'model' => 'A-Class', 'year_of_manufacture' => 2022, 'odometer' => 20000, 'fuel_type' => 'Petrol', 'description' => 'A compact hatchback with a sporty feel.'],
            ['brand' => 'Mercedes', 'model' => 'CLA-Class', 'year_of_manufacture' => 2019, 'odometer' => 60000, 'fuel_type' => 'Diesel', 'description' => 'A sleek sedan with a modern design.'],
            ['brand' => 'Mercedes', 'model' => 'GLC-Class', 'year_of_manufacture' => 2021, 'odometer' => 25000, 'fuel_type' => 'Petrol', 'description' => 'A versatile SUV with a high-quality interior.'],
            ['brand' => 'Mercedes', 'model' => 'SLS AMG', 'year_of_manufacture' => 2023, 'odometer' => 10000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance sports car with a powerful V8 engine.'],
            ['brand' => 'Mercedes', 'model' => 'Maybach S-Class', 'year_of_manufacture' => 2023, 'odometer' => 5000, 'fuel_type' => 'Petrol', 'description' => 'An ultra-luxury sedan with unmatched comfort and technology.'],
            ['brand' => 'Mercedes', 'model' => 'AMG GT', 'year_of_manufacture' => 2023, 'odometer' => 5000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance sports car with stunning design and speed.'],

            // Audi
            ['brand' => 'Audi', 'model' => 'Q7', 'year_of_manufacture' => 2020, 'odometer' => 120000, 'fuel_type' => 'Diesel', 'description' => 'A premium SUV known for its advanced technology and spacious interior.'],
            ['brand' => 'Audi', 'model' => 'A4', 'year_of_manufacture' => 2019, 'odometer' => 45000, 'fuel_type' => 'Petrol', 'description' => 'A stylish sedan with a smooth ride.'],
            ['brand' => 'Audi', 'model' => 'A6', 'year_of_manufacture' => 2021, 'odometer' => 30000, 'fuel_type' => 'Petrol', 'description' => 'A luxury sedan with advanced features.'],
            ['brand' => 'Audi', 'model' => 'Q5', 'year_of_manufacture' => 2022, 'odometer' => 15000, 'fuel_type' => 'Diesel', 'description' => 'A compact SUV with a refined interior.'],
            ['brand' => 'Audi', 'model' => 'A3', 'year_of_manufacture' => 2018, 'odometer' => 70000, 'fuel_type' => 'Petrol', 'description' => 'A sporty hatchback with a premium feel.'],
            ['brand' => 'Audi', 'model' => 'TT', 'year_of_manufacture' => 2021, 'odometer' => 10000, 'fuel_type' => 'Petrol', 'description' => 'A stylish sports car with exceptional handling.'],
            ['brand' => 'Audi', 'model' => 'RS7', 'year_of_manufacture' => 2023, 'odometer' => 5000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance sports sedan with a powerful V8 engine.'],
            ['brand' => 'Audi', 'model' => 'R8 V10', 'year_of_manufacture' => 2022, 'odometer' => 2000, 'fuel_type' => 'Petrol', 'description' => 'A luxury supercar with breathtaking performance and design.'],
            ['brand' => 'Audi', 'model' => 'Q8', 'year_of_manufacture' => 2023, 'odometer' => 8000, 'fuel_type' => 'Diesel', 'description' => 'A luxury SUV with advanced features and technology.'],

            // BMW
            ['brand' => 'BMW', 'model' => 'X5', 'year_of_manufacture' => 2021, 'odometer' => 90000, 'fuel_type' => 'Petrol', 'description' => 'A sporty and dynamic SUV with luxurious features.'],
            ['brand' => 'BMW', 'model' => '3 Series', 'year_of_manufacture' => 2020, 'odometer' => 40000, 'fuel_type' => 'Diesel', 'description' => 'A classic sports sedan with modern technology.'],
            ['brand' => 'BMW', 'model' => '5 Series', 'year_of_manufacture' => 2019, 'odometer' => 50000, 'fuel_type' => 'Petrol', 'description' => 'A luxury sedan with a focus on performance.'],
            ['brand' => 'BMW', 'model' => '7 Series', 'year_of_manufacture' => 2021, 'odometer' => 30000, 'fuel_type' => 'Petrol', 'description' => 'An executive sedan with high-end features.'],
            ['brand' => 'BMW', 'model' => 'X3', 'year_of_manufacture' => 2022, 'odometer' => 20000, 'fuel_type' => 'Diesel', 'description' => 'A compact luxury SUV with advanced technology.'],
            ['brand' => 'BMW', 'model' => 'M3', 'year_of_manufacture' => 2020, 'odometer' => 25000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance sports sedan with exceptional driving dynamics.'],
            ['brand' => 'BMW', 'model' => 'i8', 'year_of_manufacture' => 2022, 'odometer' => 10000, 'fuel_type' => 'Hybrid', 'description' => 'A plug-in hybrid sports car with cutting-edge technology.'],
            ['brand' => 'BMW', 'model' => 'M5 Competition', 'year_of_manufacture' => 2023, 'odometer' => 5000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance luxury sedan with immense power.'],
            ['brand' => 'BMW', 'model' => 'X7', 'year_of_manufacture' => 2023, 'odometer' => 6000, 'fuel_type' => 'Diesel', 'description' => 'A large luxury SUV with top-tier performance and comfort.'],

            // Volkswagen
            ['brand' => 'Volkswagen', 'model' => 'Golf GTI', 'year_of_manufacture' => 2018, 'odometer' => 80000, 'fuel_type' => 'Petrol', 'description' => 'A compact hatchback with sporty performance and practicality.'],
            ['brand' => 'Volkswagen', 'model' => 'Passat', 'year_of_manufacture' => 2019, 'odometer' => 60000, 'fuel_type' => 'Diesel', 'description' => 'A spacious sedan with a comfortable ride.'],
            ['brand' => 'Volkswagen', 'model' => 'Tiguan', 'year_of_manufacture' => 2020, 'odometer' => 45000, 'fuel_type' => 'Petrol', 'description' => 'A versatile SUV with ample cargo space.'],
            ['brand' => 'Volkswagen', 'model' => 'Arteon', 'year_of_manufacture' => 2021, 'odometer' => 30000, 'fuel_type' => 'Petrol', 'description' => 'A stylish fastback with premium features.'],
            ['brand' => 'Volkswagen', 'model' => 'Jetta', 'year_of_manufacture' => 2019, 'odometer' => 70000, 'fuel_type' => 'Diesel', 'description' => 'A sporty sedan with a refined interior.'],
            ['brand' => 'Volkswagen', 'model' => 'Atlas', 'year_of_manufacture' => 2022, 'odometer' => 20000, 'fuel_type' => 'Petrol', 'description' => 'A large SUV with three rows of seating.'],
            ['brand' => 'Volkswagen', 'model' => 'ID.4', 'year_of_manufacture' => 2023, 'odometer' => 10000, 'fuel_type' => 'Electric', 'description' => 'An electric SUV with modern features and great range.'],
            ['brand' => 'Volkswagen', 'model' => 'Golf R', 'year_of_manufacture' => 2023, 'odometer' => 5000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance version of the Golf with enhanced power and handling.'],
            ['brand' => 'Volkswagen', 'model' => 'ID.3', 'year_of_manufacture' => 2023, 'odometer' => 4000, 'fuel_type' => 'Electric', 'description' => 'A compact electric car with innovative technology and efficiency.'],

            // Lamborghini
            ['brand' => 'Lamborghini', 'model' => 'Huracan', 'year_of_manufacture' => 2022, 'odometer' => 30000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance supercar with stunning design and speed.'],
            ['brand' => 'Lamborghini', 'model' => 'Aventador', 'year_of_manufacture' => 2021, 'odometer' => 25000, 'fuel_type' => 'Petrol', 'description' => 'A powerful supercar with an iconic design.'],
            ['brand' => 'Lamborghini', 'model' => 'Urus', 'year_of_manufacture' => 2022, 'odometer' => 20000, 'fuel_type' => 'Petrol', 'description' => 'A luxury SUV with extreme performance.'],
            ['brand' => 'Lamborghini', 'model' => 'Gallardo', 'year_of_manufacture' => 2019, 'odometer' => 50000, 'fuel_type' => 'Petrol', 'description' => 'A classic Lamborghini with thrilling driving dynamics.'],
            ['brand' => 'Lamborghini', 'model' => 'Sián', 'year_of_manufacture' => 2023, 'odometer' => 5000, 'fuel_type' => 'Hybrid', 'description' => 'A hybrid supercar with cutting-edge technology and style.'],
            ['brand' => 'Lamborghini', 'model' => 'Centenario', 'year_of_manufacture' => 2021, 'odometer' => 3000, 'fuel_type' => 'Petrol', 'description' => 'A limited-edition hypercar with extraordinary performance.'],
            ['brand' => 'Lamborghini', 'model' => 'Revuelto', 'year_of_manufacture' => 2023, 'odometer' => 1000, 'fuel_type' => 'Petrol', 'description' => 'A cutting-edge supercar with futuristic design and high power.'],
            ['brand' => 'Lamborghini', 'model' => 'Egoista', 'year_of_manufacture' => 2024, 'odometer' => 500, 'fuel_type' => 'Petrol', 'description' => 'An exclusive supercar with a unique design and top-tier performance.'],
            ['brand' => 'Lamborghini', 'model' => 'SCV12', 'year_of_manufacture' => 2023, 'odometer' => 1000, 'fuel_type' => 'Petrol', 'description' => 'A track-focused hypercar with extraordinary performance and design.'],

            // Ferrari
            ['brand' => 'Ferrari', 'model' => 'LaFerrari', 'year_of_manufacture' => 2019, 'odometer' => 35000, 'fuel_type' => 'Petrol', 'description' => 'A powerful sports car with a focus on performance and style.'],
            ['brand' => 'Ferrari', 'model' => '488 GTB', 'year_of_manufacture' => 2020, 'odometer' => 25000, 'fuel_type' => 'Petrol', 'description' => 'A sleek and fast sports car with a V8 engine.'],
            ['brand' => 'Ferrari', 'model' => 'Portofino', 'year_of_manufacture' => 2021, 'odometer' => 15000, 'fuel_type' => 'Petrol', 'description' => 'A luxury convertible with refined performance.'],
            ['brand' => 'Ferrari', 'model' => 'F8 Tributo', 'year_of_manufacture' => 2022, 'odometer' => 10000, 'fuel_type' => 'Petrol', 'description' => 'A powerful sports car with advanced aerodynamics.'],
            ['brand' => 'Ferrari', 'model' => '812 Superfast', 'year_of_manufacture' => 2022, 'odometer' => 8000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance grand tourer with a V12 engine.'],
            ['brand' => 'Ferrari', 'model' => 'SF90 Stradale', 'year_of_manufacture' => 2023, 'odometer' => 5000, 'fuel_type' => 'Hybrid', 'description' => 'A hybrid supercar with cutting-edge technology and performance.'],
            ['brand' => 'Ferrari', 'model' => 'Monza SP1', 'year_of_manufacture' => 2023, 'odometer' => 3000, 'fuel_type' => 'Petrol', 'description' => 'A limited-edition open-top sports car with a classic design.'],
            ['brand' => 'Ferrari', 'model' => 'Roma', 'year_of_manufacture' => 2024, 'odometer' => 2000, 'fuel_type' => 'Petrol', 'description' => 'A stylish and luxurious coupe with advanced technology.'],
            ['brand' => 'Ferrari', 'model' => 'F295', 'year_of_manufacture' => 2024, 'odometer' => 1000, 'fuel_type' => 'Petrol', 'description' => 'A new addition to Ferrari’s lineup, offering breathtaking performance and style.'],

            // Porsche
            ['brand' => 'Porsche', 'model' => '911 Turbo', 'year_of_manufacture' => 2021, 'odometer' => 25000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance sports car with a classic design and modern technology.'],
            ['brand' => 'Porsche', 'model' => 'Cayenne', 'year_of_manufacture' => 2020, 'odometer' => 50000, 'fuel_type' => 'Petrol', 'description' => 'A luxury SUV with exceptional performance.'],
            ['brand' => 'Porsche', 'model' => 'Macan', 'year_of_manufacture' => 2019, 'odometer' => 40000, 'fuel_type' => 'Petrol', 'description' => 'A compact luxury SUV with sporty handling.'],
            ['brand' => 'Porsche', 'model' => 'Panamera', 'year_of_manufacture' => 2021, 'odometer' => 30000, 'fuel_type' => 'Petrol', 'description' => 'A luxury sedan with high-performance capabilities.'],
            ['brand' => 'Porsche', 'model' => '718 Cayman', 'year_of_manufacture' => 2022, 'odometer' => 15000, 'fuel_type' => 'Petrol', 'description' => 'A sleek and agile sports car with exceptional driving dynamics.'],
            ['brand' => 'Porsche', 'model' => 'Taycan', 'year_of_manufacture' => 2022, 'odometer' => 10000, 'fuel_type' => 'Electric', 'description' => 'An electric sports sedan with impressive acceleration and technology.'],
            ['brand' => 'Porsche', 'model' => '911 GT3', 'year_of_manufacture' => 2023, 'odometer' => 5000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance track-focused variant of the 911.'],
            ['brand' => 'Porsche', 'model' => '918 Spyder', 'year_of_manufacture' => 2023, 'odometer' => 2000, 'fuel_type' => 'Hybrid', 'description' => 'A hybrid supercar with cutting-edge technology and extraordinary performance.'],
            ['brand' => 'Porsche', 'model' => 'Cayman GT4 RS', 'year_of_manufacture' => 2023, 'odometer' => 2000, 'fuel_type' => 'Petrol', 'description' => 'A high-performance variant of the Cayman with track-ready capabilities.'],

            // Bugatti
            ['brand' => 'Bugatti', 'model' => 'Chiron', 'year_of_manufacture' => 2023, 'odometer' => 10000, 'fuel_type' => 'Petrol', 'description' => 'An ultra-luxury hypercar with exceptional speed and engineering.'],
            ['brand' => 'Bugatti', 'model' => 'Veyron', 'year_of_manufacture' => 2019, 'odometer' => 30000, 'fuel_type' => 'Petrol', 'description' => 'A classic hypercar with breathtaking performance.'],
            ['brand' => 'Bugatti', 'model' => 'Divo', 'year_of_manufacture' => 2021, 'odometer' => 15000, 'fuel_type' => 'Petrol', 'description' => 'A hypercar with unique design and outstanding performance.'],
            ['brand' => 'Bugatti', 'model' => 'Bolide', 'year_of_manufacture' => 2022, 'odometer' => 5000, 'fuel_type' => 'Petrol', 'description' => 'A track-focused hypercar with extreme performance.'],
            ['brand' => 'Bugatti', 'model' => 'Centodieci', 'year_of_manufacture' => 2023, 'odometer' => 2000, 'fuel_type' => 'Petrol', 'description' => 'A limited-edition hypercar with a design inspired by the EB110.'],
            ['brand' => 'Bugatti', 'model' => 'La Voiture Noire', 'year_of_manufacture' => 2023, 'odometer' => 1000, 'fuel_type' => 'Petrol', 'description' => 'An exclusive hypercar with a distinctive design and top performance.'],
            ['brand' => 'Bugatti', 'model' => 'Pur Sport', 'year_of_manufacture' => 2024, 'odometer' => 500, 'fuel_type' => 'Petrol', 'description' => 'A lightweight, track-focused version of the Chiron with incredible agility.'],
            ['brand' => 'Bugatti', 'model' => 'Chiron Super Sport 300+', 'year_of_manufacture' => 2024, 'odometer' => 300, 'fuel_type' => 'Petrol', 'description' => 'A high-performance variant of the Chiron with record-breaking speed.'],
            ['brand' => 'Bugatti', 'model' => 'Chiron Super Sport', 'year_of_manufacture' => 2024, 'odometer' => 500, 'fuel_type' => 'Petrol', 'description' => 'A hypercar with exceptional speed and engineering, featuring the latest advancements in automotive technology.'],
        ]);
    }
}
