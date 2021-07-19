<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LedModel extends Model
{
    use HasFactory;
    protected $table = "led";
    protected $fillable = [
        'led_putih',
        'led_merah',
    ];
}
