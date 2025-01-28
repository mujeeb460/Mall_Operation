<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'reference_code',
        'phone',
        'email',
        'password',
        'withdraw_password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function deposits()
    {
        return $this->hasMany(Deposit::class,'user_id','id');
    }

    public function withdraws()
    {
        return $this->hasMany(Withdraw::class,'user_id','id');
    }

    public function upgrade_packages()
    {
        return $this->hasMany(UpgradePackage::class,'user_id','id');
    }

    public function active_packages()
    {
        return $this->hasOne(ActivePackage::class,'user_id','id');
    }

    public function bonus()
    {
        return $this->hasMany(Bonus::class,'user_id','id');
    }

    public function total_balance()
    {
        $totalDeposit = $this->deposits()->where('status',1)->sum('deposit_amount');
        // $totalUpgrade = $this->upgrade_packages()->sum('amount');
        $totalBonus = $this->bonus()->sum('amount');

        $totalWithdraw = $this->withdraws()->where('status',1)->sum('withdraw_amount');

        return $totalDeposit + $totalBonus - $totalWithdraw;

    }

    public function orders()
    {
        return $this->hasMany(Order::class,'user_id','id');
    }




}
