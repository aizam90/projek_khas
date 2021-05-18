<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Kelulusan extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'kelulusan',
    ];

    protected $table = 'ref_kelulusan';
    protected $primaryKey = 'id';
    public $incrementing = true; //untuk auto disable id
    public $timestamps = true;
}
