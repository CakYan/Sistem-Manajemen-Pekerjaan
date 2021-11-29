<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function proyek(){
        return $this->hasMany(Proyek::class);
    }
}