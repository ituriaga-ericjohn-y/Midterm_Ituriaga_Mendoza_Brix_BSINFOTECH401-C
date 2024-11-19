<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify the table name (if it's not the plural form of the model name)
    protected $table = 'products';

    // Allow mass assignment for the following fields
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];

    // Define any relationships here if necessary (e.g., category, user)
}