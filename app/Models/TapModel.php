<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TapModel extends Model
{
    use HasFactory;
    protected $table = "tap_rfid";
    protected $fillable = [
        'status',
    ];
}
