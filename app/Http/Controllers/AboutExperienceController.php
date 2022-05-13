<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutExperience;
use Illuminate\Support\Facades\File;

class AboutExperienceController extends Controller
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





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutExperience()
    {
        $aboutImg = AboutExperience::first();       
        return view('about.experience', compact('aboutImg'));
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutExperience_update(Request $request)
    {
        $rules = [
            'Year_1' => 'required',
            'Year_1_exprience' => 'required',
            'Year_2' => 'required',
            'Year_2_exprience' => 'required',
            'Year_3' => 'required',
            'Year_3_exprience' => 'required',
        ];

        $this->validate($request, $rules);

        $about = AboutExperience::first();
        $about->Year_1 = $request->input('Year_1');
        $about->Year_1_exprience = $request->input('Year_1_exprience');
        $about->Year_2 = $request->input('Year_2');
        $about->Year_2_exprience = $request->input('Year_2_exprience');
        $about->Year_3 = $request->input('Year_3');
        $about->Year_3_exprience = $request->input('Year_3_exprience');

        if($request->hasFile('about_img'))
        {
            $destination = 'storage/'.$about->about_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('about_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/', $filename);
            $about->about_img = $filename;
        }
        $about->update();
        return redirect()->back()->with('massage',' marketing Image Update sucessfully');
    }

}
