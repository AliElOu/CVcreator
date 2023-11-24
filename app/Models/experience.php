<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{

    protected $fillable = [
        'company',
        'position',
        'desc',
        'started',
        'ended',
        'cv_id',
    ];


    use HasFactory;
}
