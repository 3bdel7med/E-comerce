<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillablel=[
        'fname',
        'lname',
        'email',
        'phone',
        'qouantry',
        'city',
        'address',
        'tracking_no',
        'message'
    ];
}
