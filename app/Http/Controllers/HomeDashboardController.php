<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;


class HomeDashboardController extends Controller
{




       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }





    public function dashboard(){
        $home = Home:: first();
        return view('pages/dashboard', compact('home'));
    }


    public function update(Request $request){
        $rules = [
            'name' => 'required|max:20',
            'main_title' => 'required|max:20',
            'sub_title' => 'required|max:80',
        ];
        // $cv =[
        //     'name.required'=>'Enter your name',
        //     'name.max'=>'your name can not contain more than 20 ch',
        //     'main_title.required'=>'Enter your main_title',
        //     'main_title.max'=>'your main title can not contain more than 40 ch',
        //     'sub_title.required'=>'Enter your sub_title',
        //     'sub_title.max'=>'your sub title can not contain more than 80 ch',

        // ];
        $this->validate($request, $rules);
        $home = home::first();
        $home->name = $request->name;
        $home->main_title = $request->main_title;
        $home->sub_title = $request->sub_title;

        if($request->file('bg_img')){
            $home->bg_img = $request->file('bg_img')->store('images');
        }
        $home->save();
        return redirect()->route('dashboard')->with('msg', 'data added Successfully');
    }
}
