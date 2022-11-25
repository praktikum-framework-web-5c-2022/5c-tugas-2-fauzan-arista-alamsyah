<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table='matakuliah';
    protected $fillable = [
        'kode_mk',
        'nama_mk',
    ];
    use HasFactory;
}
