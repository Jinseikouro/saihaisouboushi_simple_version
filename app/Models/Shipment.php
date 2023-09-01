<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    //groupeを親とした一対多のリレーションです
    public function groupe()
    {
        return $this->belongsTo(Groupe::class,'groupe_id');
    }

    //driverを親とし一対多のリレーションです。
    public function driver()
    {
        return $this->belongsTo(Driver::class,'driver_id');
    }
}
