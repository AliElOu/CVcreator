<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cvController extends Controller
{
    
public function download_cv(Request $resquest)
{
    $cv_id = $resquest->id;
    $user = DB::table('cvs')->select('user_id')->where('id', $cv_id)->get();
    $user_id = $user[0]->user_id;
    $template = $resquest->template;
    if($user_id == auth()->id()){
        $experiences = DB::table('experiences')->where('cv_id', $cv_id)->get();
        $educations = DB::table('educations')->where('cv_id', $cv_id)->get();
        $competences = DB::table('competences')->where('cv_id', $cv_id)->get();
        $cv = DB::table('cvs')->where('id', $cv_id)->first();
        $pdf = Pdf::loadView("templates.$template",compact([
            'experiences',
            'educations',
            'cv_id',
            'competences',
            'cv'
        ]));
    }else{
        abort(404);
    }
    return $pdf->stream();
}

}
