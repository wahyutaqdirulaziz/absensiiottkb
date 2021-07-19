<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'guard_name',
    ];
    public function hasRole(){
        return $this->belongsTo('App\Models\Role', 'id', 'role_id');
    }
  
}
