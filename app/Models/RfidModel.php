<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfidModel extends Model
{
    use HasFactory;
    protected $table = "rfid";
    protected $fillable = [
        'uid',
    ];
}
