<?php

namespace App\Http\Controllers;

use App\Models\cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


    function open_cv(Request $resquest){
        $cv_id = $resquest->id;
        $user = DB::table('cvs')->select('user_id')->where('id', $cv_id)->get();
        $user_id = $user[0]->user_id;
        $template = $resquest->template;
        if($user_id == auth()->id()){
            $experiences = DB::table('experiences')->where('cv_id', $cv_id)->get();
            $educations = DB::table('educations')->where('cv_id', $cv_id)->get();
            $competences = DB::table('competences')->where('cv_id', $cv_id)->get();
            $cv = DB::table('cvs')->where('id', $cv_id)->first();
            $languages = explode(",",$cv->languages);
            $hobbies = explode(",",$cv->hobbies);
            return view("templates.$template",compact([
               'experiences',
               'educations',
               'cv_id',
               'competences',
               'cv',
               'languages',
               'hobbies'
           ]));
        }else{
            abort(404);
        }
        }


}
