<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    protected $fillable = ['package_id', 'order_id', 'amount'];

    // Define relationships if needed
}
