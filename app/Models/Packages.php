<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $fillable = [
        'package_name',
        'commission_rate',
        'minimum_amount',
        'number_of_tasks',
        'bg_color',
        'user_id',
        'status'
    ];


    public function packages()
    {
        return $this->hasMany(UpgradePackage::class,'package_id','id');
    }

}
