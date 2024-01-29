<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\dimensi;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table = "pertanyaan";
    protected $guarded = [""];
    public function dimensi(){
        return $this->belongsTo(dimensi::class,"dimensiID");
    }
}
