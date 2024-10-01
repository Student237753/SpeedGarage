<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['brand', 'model', 'year_of_manufacture', 'odometer', 'fuel_type', 'description'];
}
