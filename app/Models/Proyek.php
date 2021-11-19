<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'proyeks';

    public function karyawan(){
        return $this->hasMany(Karyawan::class);
    }
}