<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = "files";

    protected $guarded = ['id'];

    public function task(){
        return $this->belongsTo(Task::class);
    }
    use HasFactory;
}