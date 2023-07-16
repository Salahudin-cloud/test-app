<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{

    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'semester', 'prodi'];
    public $timestamps = true;

    
}
