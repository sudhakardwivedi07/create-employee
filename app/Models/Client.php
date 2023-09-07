<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'address', 'city', 'state', 'country', 'email', 'phone_number'
    ];
}
