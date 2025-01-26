<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Deposit;


class Deposit extends Model
{
     protected $fillable = [
        'deposit_amount',
        'deposit_date',
        'transaction_id',
        'bank',
        'deposit_slip',
        'user_id',
        'status'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
