<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceDashboardController extends Controller
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




    public function allService(){
        $service = Services:: all();
        return view('pages.dashboardpage.allService', compact('service'));
    }

    public function createService(){
        return view('pages.dashboardpage.createService');
    }

    public function serviceStore(Request $request)
    {
        $rules = [
            'icon' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ];
        $this->validate($request, $rules);
        $service = new Services;
        $service->icon = $request->input('icon');
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->save();
        Session::flash('msg');
        return redirect()->back()->with('status','Service data added sucessfully');

    }

    public function serviceEdit($id)
    {
        $service = Services::find($id);
        return view('pages.dashboardpage.serviceEdit', compact('service'));
    }


    public function serviceUpdate(Request $request, $id){
        $rules = [
            'icon' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ];
        $this->validate($request, $rules);
        $service = Services::find($id);
        $service->icon = $request->input('icon');
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->update();
        Session::flash('msg');
        return redirect('admin/dashboard_page/allService')->with('status','Service data Update sucessfully');
    }

    public function serviceDelete($id)
    {
        $service = Services::find($id);
        $service->delete();
        return redirect('admin/dashboard_page/allService')->with('status','Service data Deleted sucessfully');

    }


}
