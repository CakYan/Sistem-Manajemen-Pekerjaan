<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Unit;
use App\Models\Proyek;
use App\Models\Jabatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}