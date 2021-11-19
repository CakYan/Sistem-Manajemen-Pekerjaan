<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'karyawans';

    public function scopeFilter($query, array $filters){

        $query->when($filters['cari'] ?? false, function($query, $cari) {
        return $query->where(function($query) use ($cari) {
                $query->where('nama','like',"%".$cari."%")
        ->orWhere('username','like',"%".$cari."%")
        ->orWhere('email','like',"%".$cari."%")
        ->orWhere('unit','like',"%".$cari."%")
        ->orWhere('jabatan','like',"%".$cari."%")
        ->orWhere('id','like',"%".$cari."%");
        });
        });
    }

    public function proyek(){
        return $this->hasMany(Proyek::class);
    }
}