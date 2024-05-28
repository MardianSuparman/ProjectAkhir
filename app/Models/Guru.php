<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = ['nip', 'nama', 'jenis_kelmain','agama', 'tempat_lahir', 'tanggal_lahir','foto'];
    protected $visible = ['nip', 'nama', 'jenis_kelmain','agama', 'tempat_lahir', 'tanggal_lahir','foto'];

    public function Kelas(){
        return $this->hashMany(Kelas::class, 'wali_kelas');
    }

    public function Mapel(){
        return $this->hashMany(Mapel::class, 'id_guru');
    }

}
