<?php

namespace App\Http\Controllers;

use App\Models\cv;
use Illuminate\Http\Request;

class myResumesController extends Controller
{

    function resumes_show(){
        $cvs = cv::join('modele_cvs', 'cvs.modele_cv_id', '=', 'modele_cvs.id')
        ->where('cvs.user_id', auth()->id())
        ->select("cvs.*", "modele_cvs.name")
        ->orderBy('cvs.created_at', 'desc')
        ->get();
        return view("resumes", compact("cvs"));
    }

    function remove_cv(Request $request){
        $cv = $request->cvId;
        cv::where('id', $cv)->delete();
        return redirect()->route("resumes.show");
    }

    function edit_cv(Request $resquest){
        $id = $resquest->id;
        return redirect()->route("create.show",[
            'cv' => $id,
        ]);
    }

}
