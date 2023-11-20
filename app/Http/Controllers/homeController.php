<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function index() {
        $users = user::paginate(10);
        return view("home",compact("users"));
    }
}
