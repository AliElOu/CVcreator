<?php

namespace App\Http\Controllers;

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
             return view("creation",compact(["experiences", "educations", "cv_id"]));
         }else{
             abort(404);
         }
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
        $credential = ['company' => $company, 'position' => $position,'started'=> $started, 'ended' => $ended, 'desc' => $desc, 'cv_id' => $cv_id];    
        experience::create($credential);
        return redirect()->route("create.show",[
            'cv' => $request->cv,
        ]);       
    }
}
