<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Parlimen extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'parlimen',
        'kod_spr',
        'id_negeri'
    ];

    protected $table = 'ref_parlimen';
    protected $primaryKey = 'id';
    public $incrementing = true; //untuk auto disable id
    public $timestamps = true;
}
