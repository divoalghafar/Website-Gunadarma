<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AspirasiModel extends Model
{
    use HasFactory;

    protected $table = 'aspirasi';
    protected $fillable = [
        'nama_lengkap',
        'npm',
        'kelas',
        'no_telp',
        'aspirasi',
        'image',
    ];
}
