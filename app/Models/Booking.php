<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    // Define the mass assignable attributes (fields you want to allow for mass-assignment)
    protected $fillable = [
        'customer_id', 
        'phone', 
        'email', 
        'service_id', 
        'service_date', 
        'special_request',
    ];

    // Define relationships

    // Define the relationship with the customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Define the relationship with the service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
