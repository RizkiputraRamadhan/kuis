<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;
    protected $table = "responses";
    protected $guarded = [""];

    public function pertanyaan(){
        return $this->belongsTo(Pertanyaan::class,"pertanyaanID");
    }
}
