<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Status_Projek extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'status',
    ];

    protected $table = 'ref_status_projek';
    protected $primaryKey = 'id';
    public $incrementing = true; //untuk auto disable id
    public $timestamps = true;
}
