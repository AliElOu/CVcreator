<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{

    protected $fillable = [
        'user_id',
        'modele_cv_id',
    ];
    use HasFactory;
}
