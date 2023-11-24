<?php

namespace App\Http\Controllers;

use App\Models\cv;
use App\Models\education;
use App\Models\experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class creationController extends Controller
{
    public function create_show(Request $request) {
        $cv_id = $request->cv;
        $user = DB::table('cvs')->select('user_id')->where('id', $cv_id)->get();
        $user_id = $user[0]->user_id;
         if($user_id == auth()->id()){
             $experiences = DB::table('experiences')->where('cv_id', $cv_id)->get();
             $educations = DB::table('educations')->where('cv_id', $cv_id)->get();
             $competences = DB::table('competences')->where('cv_id', $cv_id)->get();
             $cv = DB::table('cvs')->where('id', $cv_id)->first();
             return view("creation",compact([
                "experiences",
                "educations",
                "cv_id",
                "competences",
                "cv"
            ]));
         }else{
             abort(404);
         }
    }


    public function save(Request $request){
        $credential = [
            'fullname' => $request->fullname,
            'Email' => $request->Email,
            'objectif'=> $request->objectif,
            'mob_num' => $request->mob_num,
            'birth_date' => $request->birth_date,
            'address' => $request->address,
            'gender' => $request->gender,
            'hobbies' => $request->hobbies,
            'languages' => $request->languages,
        ];    
        cv::where('id', $request->id)->update($credential);
    

        return redirect()->route("resumes.show"); 
    }

    public function remove_exp(Request $request) {
        DB::table('experiences')->where('id', $request->exp)->delete();
        return redirect()->route("create.show",[
            'cv' => $request->cv,
        ]);
    }

    
    public function add_exp(Request $request) {
        $company = $request->company;
        $position = $request->position;
        $started = $request->started;
        $ended = $request->ended;
        $desc = $request->desc; 
        $cv_id = $request->cv; 
        $credential = [
            'company' => $company,
            'position' => $position,
            'started'=> $started,
            'ended' => $ended,
            'desc' => $desc,
            'cv_id' => $cv_id
        ];    
        experience::create($credential);
        return redirect()->route("create.show",[
            'cv' => $request->cv,
        ]);       
    }
    public function remove_edu(Request $request) {
        DB::table('educations')->where('id', $request->edu)->delete();
        return redirect()->route("create.show",[
            'cv' => $request->cv,
        ]);
    }

    
    public function add_edu(Request $request) {
        $institut = $request->institut;
        $degree = $request->degree;
        $started = $request->started;
        $ended = $request->ended;
        $cv_id = $request->cv; 
        $credential = ['institut' => $institut, 'degree' => $degree,'started'=> $started, 'ended' => $ended, 'cv_id' => $cv_id];    
        DB::table('educations')->insert([
            'institut' => $institut,
            'degree' => $degree,
            'started' => $started,
            'ended' => $ended,
            'cv_id' => $cv_id
        ]);
        
        return redirect()->route("create.show",[
            'cv' => $request->cv,
        ]);       
    }


    public function remove_com(Request $request) {
        DB::table('competences')->where('id', $request->com)->delete();
        return redirect()->route("create.show",[
            'cv' => $request->cv,
        ]);
    }

    
    public function add_com(Request $request) {
        $name = $request->name;
        $cv_id = $request->cv; 
        $credential = ['name' => $name, 'cv_id' => $cv_id];    
        DB::table('competences')->insert([
            'name' => $name,
            'cv_id' => $cv_id
        ]);
        
        return redirect()->route("create.show",[
            'cv' => $request->cv,
        ]);       
    }
}


    



