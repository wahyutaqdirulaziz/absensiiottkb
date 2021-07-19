<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasRole extends Model
{
    use HasFactory;
    protected $table = 'model_has_roles';

    protected $fillable = [
        'role_id',
        'model_id',
    ];

    public function users(){
        return $this->hasOne('App\Models\UsersModel', 'id', 'model_id');
    }

    public function role(){
        return $this->hasOne('App\Models\Role', 'id', 'role_id');
    }
 

}
