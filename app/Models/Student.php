<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function pickupLogs()
    {
        return $this->hasMany(PickupLog::class);
    }
}
