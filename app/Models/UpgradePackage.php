<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UpgradePackage extends Model
{
     protected $fillable = [
        'package_id',
        'user_id',
        'amount',
        'number_of_tasks',
        'remaining_tasks',
        'status'
    ];


 public function package()
{
    return $this->belongsTo(Packages::class);
}


}
