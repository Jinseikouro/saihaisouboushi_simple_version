<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    //shipmentを子とした一対多のリレーションです
    public function shipment()
    {
        return $this->belongsTo(Shipment::class,'driver_id');
    }
}
