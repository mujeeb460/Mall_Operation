<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $fillable = [
        'withdraw_amount',
        'withdraw_date',
        'transaction_id',
        'bank',
        'user_id',
        'status'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
