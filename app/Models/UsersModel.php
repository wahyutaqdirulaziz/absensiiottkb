<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
    ];

    public function hasRole(){
        return $this->belongsTo('App\Models\HasRole', 'model_id', 'id');
    }
}
