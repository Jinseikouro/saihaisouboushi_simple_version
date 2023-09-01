<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    //userを子とした一対多のリレーションです
    public function user()
    {
        return $this->hasMany(User::class,'groupe_id');
    }

    //shipmentを子とした一対多のリレーションです。
    public function shipment()
    {
        return $this->hasMany(Shipment::class,'groupe_id');
    }

    protected $fillable = [
        'name',
        'post_code',
        'address'
    ];
}
