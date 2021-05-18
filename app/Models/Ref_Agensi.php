<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Agensi extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'agensi',
    ];

    protected $table = 'ref_agensi';
    protected $primaryKey = 'id';
    public $incrementing = true; //untuk auto disable id
    public $timestamps = true;
}
