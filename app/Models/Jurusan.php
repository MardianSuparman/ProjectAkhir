<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['jurusan', 'wali_kelas'];
    protected $visible = ['jurusan', 'wali_kelas'];

    public function Siswa(){
        return $this->hashOne(Siswa::class, 'jurusan');
    }

}
