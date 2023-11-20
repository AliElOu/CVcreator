<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class templateController extends Controller
{
    

    public function templates_show() { 
        return view("templates");   
    }

}
