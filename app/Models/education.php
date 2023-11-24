<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education extends Model
{

    protected $fillable = [
        'institut',
        'degree',
        'started',
        'ended',
        'cv_id',
    ];
    
    use HasFactory;
}
