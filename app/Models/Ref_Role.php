<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'user', //kene sama dengan fill table
    ];

    protected $table = 'ref_role';
    protected $primaryKey = 'id';
    public $incrementing = true; //untuk auto disable id
    public $timestamps = true;
}
