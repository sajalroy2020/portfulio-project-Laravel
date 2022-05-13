<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Services;
use Illuminate\Http\Request;


class PagesController extends Controller
{

    public function index(){
        $home = Home:: first();
        $service = Services:: all();

        return view('pages/index', compact('home', 'service'));

    }

    
}
