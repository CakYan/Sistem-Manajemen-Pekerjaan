<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Unit;
use App\Models\Status;
use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyek extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'proyeks';

    public function karyawan(){
        return $this->hasMany(Karyawan::class);
    }

    public function task(){
        return $this->hasMany(Task::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}