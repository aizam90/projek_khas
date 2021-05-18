<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Dun extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'dun',
        'kod_spr',
        'id_parlimen',
        'id_negeri'
    ];

    protected $table = 'ref_dun';
    protected $primaryKey = 'id';
    public $incrementing = true; //untuk auto disable id
    public $timestamps = true;
}
