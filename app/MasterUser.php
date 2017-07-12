<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterUser extends Model
{
    protected $table = "masterUser";
    
    protected $fillable = [
    'name', 'email', 'type', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];	
}
