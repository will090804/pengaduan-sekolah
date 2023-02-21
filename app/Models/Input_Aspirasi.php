<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input_Aspirasi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['siswa'];
    // public function aspirasi()
    // {
    //     return $this->belongsTo(Aspirasi::class, 'id_aspirasi');
    // }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis', 'nis');
    }
}
