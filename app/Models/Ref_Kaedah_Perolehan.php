<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Kaedah_Perolehan extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'kaedah_perolehan',
    ];

    protected $table = 'ref_kaedah_perolehan';
    protected $primaryKey = 'id';
    public $incrementing = true; //untuk auto disable id
    public $timestamps = true;
}
