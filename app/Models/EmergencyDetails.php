<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyDetails extends Model
{
    use HasFactory;

    public function hostel(){

        return $this->belongsTo(Hostel::class);
    }

    public function relatives(){

        return $this->hasMany(Relatives::class);
    }

}
