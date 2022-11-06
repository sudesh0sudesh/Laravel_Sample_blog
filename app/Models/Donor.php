<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    public function emergencyDetails(){

        return $this->belongsTo(EmergencyDetails::class,"bloodgroup");
    }
}
