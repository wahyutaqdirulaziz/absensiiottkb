<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenModel extends Model
{
    use HasFactory;
    protected $table = "absen";
    protected $fillable = [
        'rfid',
        'check_in',
        'check_out',
        'status_hadir',
        'status_pulang',

    ];
}
