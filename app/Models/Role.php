<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'hak_akses'];
    
    public function karyawan(){
        return $this->hasMany(Karyawan::class);
    }
}