<?php

namespace App\Http\Controllers;

use App\Models\workDesignImg;
use App\Models\WorkDvelopmentImg;
use App\Models\WorkMarketintImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class WorkDesignImgController extends Controller
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



    //============= design-img Controller

    public function design(){
        return view('work.work-design');
    }

    public function design_store(Request $request){
        $rules = [
            'work_main_title' => 'required|max:20',
            'work_sub_title' => 'required',
            'design_img' => 'required',
        ];

        $this->validate($request, $rules);

        $design = new workDesignImg;
        $design->work_main_title = $request->input('work_main_title');
        $design->work_sub_title = $request->input('work_sub_title');
        
        if($request->hasFile('design_img')){

            $file = $request->file('design_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/public/design-img/', $filename);
            $design->design_img = $filename;
        }
        $design->save();
        Session::flash('msg');
        return redirect()->back()->with('msg', 'data added Successfully');
    }

    public function design_edit($id){
        $design = workDesignImg::find($id);
        return view('work/design_edit', compact('design'));
    }

    public function design_update(Request $request, $id){
        $rules = [
            'work_main_title' => 'required|max:20',
            'work_sub_title' => 'required',
        ];

        $this->validate($request, $rules);

        $design = workDesignImg::find($id);
        $design->work_main_title = $request->input('work_main_title');
        $design->work_sub_title = $request->input('work_sub_title');
        if($request->hasFile('design_img'))
        {
            $destination = 'storage/public/design-img/'.$design->design_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('design_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/public/design-img/', $filename);
            $design->design_img = $filename;
        }
        $design->update();
        return redirect('admin/works/all-work')->with('status','Image data Update sucessfully');
    }


    public function design_delete($id){
        $workImg = workDesignImg::find($id);
        $destination = 'storage/public/design-img/'.$workImg->design_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $workImg->delete();
        return redirect('admin/works/all-work')->with('status','Image data Deleted sucessfully');
    }






    //============= development-img Controller


    public function development(){
        return view('work.work-development');
    }


    public function development_store(Request $request){
        $rules = [
            'work_development_title' => 'required|max:20',
            'work_development_sub_title' => 'required',
            'development_img' => 'required',
        ];

        $this->validate($request, $rules);

        $development = new WorkDvelopmentImg;
        $development->work_development_title = $request->input('work_development_title');
        $development->work_development_sub_title = $request->input('work_development_sub_title');
        
        if($request->hasFile('development_img')){

            $file = $request->file('development_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/public/development-img/', $filename);
            $development->development_img = $filename;
        }
        $development->save();
        Session::flash('msg');
        return redirect()->back()->with('msg', 'Image added Successfully');
    }


    public function development_edit($id){
        $development = WorkDvelopmentImg::find($id);
        return view('work/development_edit', compact('development'));
    }


    public function development_update(Request $request, $id){
        $rules = [
            'work_development_title' => 'required|max:20',
            'work_development_sub_title' => 'required',
        ];

        $this->validate($request, $rules);

        $development = WorkDvelopmentImg::find($id);
        $development->work_development_title = $request->input('work_development_title');
        $development->work_development_sub_title = $request->input('work_development_sub_title');
        if($request->hasFile('development_img'))
        {
            $destination = 'storage/public/development-img/'.$development->development_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('development_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/public/development-img/', $filename);
            $development->development_img = $filename;
        }
        $development->update();
        return redirect('admin/works/all-work')->with('massage','Development Image Update sucessfully');
    }


    public function development_delete($id){
        $workImg = WorkDvelopmentImg::find($id);
        $destination = 'storage/public/development-img/'.$workImg->development_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $workImg->delete();
        return redirect('admin/works/all-work')->with('massage','Development Image data Deleted sucessfully');
    }




    //============= marketing_img Controller

    public function marketing(){
        return view('work.work-marketing');
    }


    public function marketing_store(Request $request){
        $rules = [
            'marketing_title' => 'required|max:20',
            'marketing_sub_title' => 'required',
            'marketing_img' => 'required',
        ];

        $this->validate($request, $rules);

        $marketing = new WorkMarketintImg;
        $marketing->marketing_title = $request->input('marketing_title');
        $marketing->marketing_sub_title = $request->input('marketing_sub_title');
        
        if($request->hasFile('marketing_img')){

            $file = $request->file('marketing_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/public/marketing-img/', $filename);
            $marketing->marketing_img = $filename;
        }
        $marketing->save();
        Session::flash('msg');
        return redirect()->back()->with('msg', 'Image added Successfully');
    }


    public function marketing_edit($id){
        $marketing = WorkMarketintImg::find($id);
        return view('work/marketing_edit', compact('marketing'));
    }

    public function marketing_update(Request $request, $id){
        $rules = [
            'marketing_title' => 'required|max:20',
            'marketing_sub_title' => 'required',
        ];

        $this->validate($request, $rules);

        $marketing = WorkMarketintImg::find($id);
        $marketing->marketing_title = $request->input('marketing_title');
        $marketing->marketing_sub_title = $request->input('marketing_sub_title');
        if($request->hasFile('marketing_img'))
        {
            $destination = 'storage/public/marketing-img/'.$marketing->marketing_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('marketing_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/public/marketing-img/', $filename);
            $marketing->marketing_img = $filename;
        }
        $marketing->update();
        return redirect('admin/works/all-work')->with('massage',' marketing Image Update sucessfully');
    }


    public function marketing_delete($id){
        $workImg = WorkMarketintImg::find($id);
        $destination = 'storage/public/marketing-img/'.$workImg->marketing_img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $workImg->delete();
        return redirect('admin/works/all-work')->with('massage','Development Image data Deleted sucessfully');
    }


    


    public function all_work(){
        $design = workDesignImg::all();
        $development = WorkDvelopmentImg::all();
        $marketing = WorkMarketintImg::all();
        return view('work.all-work', compact('design', 'development', 'marketing'));

    }
}
