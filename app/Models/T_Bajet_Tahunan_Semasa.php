<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Bajet_Tahunan_Semasa extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'tahun',
        'kos_peruntukan'
    ];

    protected $table = 't_bajet_tahunan_semasa';
    protected $primaryKey = 'id';
    public $incrementing = false; //untuk auto disable id
    public $timestamps = true;
}
