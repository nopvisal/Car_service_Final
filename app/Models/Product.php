<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // Define the table name (optional if it matches the default plural name convention)
    protected $table = 'products';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'description',
        'price',
        'photo',
    ];

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
}
