<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Daerah extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'daerah',
        'id_negeri'
    ];

    protected $table = 'ref_daerah';
    protected $primaryKey = 'id';
    public $incrementing = true; //untuk auto disable id
    public $timestamps = true;
}
