<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function karyawans(){
        return $this->hasMany(Karyawan::class);
    }

    public function proyeks(){
        return $this->hasMany(Proyek::class);
    }

    use HasFactory;
}