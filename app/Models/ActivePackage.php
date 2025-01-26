<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivePackage extends Model
{
    protected $fillable = ['user_id', 'upgrade_package_id'];

    public function upgrade_package()
    {
        return $this->belongsTo(UpgradePackage::class, 'upgrade_package_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
