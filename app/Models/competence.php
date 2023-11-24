<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competence extends Model
{

    protected $fillable = [
        'name',
        'cv_id',
    ];
    use HasFactory;
}
