<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdiModel extends Model
{
    use HasFactory;
    protected $table = "prodi";
    protected $fillable = [
        'id_prodi',
        'nama',

    ];
}
