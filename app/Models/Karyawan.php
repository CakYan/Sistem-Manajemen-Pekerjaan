<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'karyawans';

    public function proyek(){
        return $this->hasMany(Proyek::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
}