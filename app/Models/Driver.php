<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;


class Driver extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    //shipmentを子とした一対多のリレーションです
    public function shipment()
    {
        return $this->belongsTo(Shipment::class,'driver_id');
    }

    protected $fillable =
    [
        'name',
        'email',
        'password'
    ];
    protected $hidden =
    [
        'password',
        'remember_token'
    ];
    protected $casts =
    [
        'email_verified_at' => 'datetime',
        'password' => 'hashed'
    ];
}
