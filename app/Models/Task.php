<?php

namespace App\Models;

use App\Models\File;
use App\Models\Kelas;
use App\Models\Proyek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function proyek(){
        return $this->belongsTo(Proyek::class);
    }

    public function files(){
        return $this->hasMany(File::class);
    }
}