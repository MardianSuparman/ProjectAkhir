<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = ['NIP', 'nama', 'jenis_kelmain','agama', 'tempat_lahir', 'tanggal_lahir','foto'];
    protected $visible = ['NIP', 'nama', 'jenis_kelmain','agama', 'tempat_lahir', 'tanggal_lahir','foto'];


}
