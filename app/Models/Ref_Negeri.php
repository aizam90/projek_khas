<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Negeri extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'negeri',
        'singkatan'
    ];

    protected $table = 'ref_negeri';
    protected $primaryKey = 'id';
    public $incrementing = true; //untuk auto disable id
    public $timestamps = true;
}
