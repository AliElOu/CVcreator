<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{

    protected $fillable = [
        "fullname",
        "Email",
        "objectif",
        "mob_num",
        "birth_date",
        "address",
        "gender",
        'hobbies',
        "languages",
        'user_id',
        'modele_cv_id',
    ];
    use HasFactory;
}
