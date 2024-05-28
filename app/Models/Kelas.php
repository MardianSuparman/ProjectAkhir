<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['kelas', 'wali_kelas'];
    protected $visible = ['kelas', 'wali_kelas'];

    public function Guru(){
        return $this->belongsTo(Guru::class, 'wali_kelas');
    }

    public function Siswa(){
        return $this->hashOne(Siswa::class, 'kelas');
    }

}
