<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\CV;
use App\Models\experience;
use App\Models\modele_cv;
use App\Models\user;
use Illuminate\Http\Request;

class templateController extends Controller
{
    

    public function templates_show() { 
        $models = modele_cv::all();
        return view("templates",compact("models"));   
    }


    public function template_create(Request $request) {
        $selected_template = $request->template;
        $credential = ['user_id' => auth()->id(), 'modele_cv_id' =>  $selected_template];
        $cv = cv::create($credential);
        
        return redirect()->route("create.show",[
            'cv' => $cv->id,
        ]);
    }

}
