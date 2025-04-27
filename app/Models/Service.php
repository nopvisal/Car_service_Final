<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Service extends Model
{
    use HasFactory;

    // Define the table if it's not the plural form of the model
    protected $table = 'services';

    // Mass assignable fields
    protected $fillable = ['name', 'description'];

    // A service has many bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
