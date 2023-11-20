<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class creationController extends Controller
{
    public function create_show(Request $request) {
        $temp_id = $request->template;
        return view("creation",compact("temp_id"));
    }
}
