<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class user extends Authenticatable   
{

    protected $fillable = [
        'username',
        'email',
        'password',
    ];


    use HasFactory;
}
