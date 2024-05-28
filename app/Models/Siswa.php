<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;


    protected $fillable = ['nama', 'jenis_kelmain','agama', 'tempat_lahir', 'tanggal_lahir', 'kelas', 'jurusan', 'foto'];
    protected $visible = ['nama', 'jenis_kelmain','agama', 'tempat_lahir', 'tanggal_lahir', 'kelas', 'jurusan', 'foto'];

    public function Kelas(){
        return $this->belongsTo(Kelas::class, 'kelas');
    }

    public function Jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan');
    }

}
