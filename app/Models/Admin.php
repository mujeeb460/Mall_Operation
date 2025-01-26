<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // This must be imported
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable // Extend Authenticatable, not Model
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'phone'];

    // If you have additional methods or relationships, you can add them here
}
