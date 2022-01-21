<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    protected $table = "pdfs";

    protected $guarded = ['id'];

    public function task(){
        return $this->belongsTo(Task::class);
    }
    use HasFactory;
}