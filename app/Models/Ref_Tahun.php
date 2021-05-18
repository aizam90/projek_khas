<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Tahun extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'tahun',
    ];

    protected $table = 'ref_tahun';
    protected $primaryKey = 'id';
    public $incrementing = false; //untuk auto disable id
    public $timestamps = true;
}
