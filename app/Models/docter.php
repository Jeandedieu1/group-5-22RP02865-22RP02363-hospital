<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class docter extends Model
{
    protected $fillable = [
        'names', 
        'email', 
        'phone', 
        'address'
    ];
}