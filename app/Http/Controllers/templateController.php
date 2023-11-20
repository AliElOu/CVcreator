<?php

namespace App\Http\Controllers;

use App\Models\modele_cv;
use Illuminate\Http\Request;

class templateController extends Controller
{
    

    public function templates_show() { 
        $models = modele_cv::all();
        return view("templates",compact("models"));   
    }

}
