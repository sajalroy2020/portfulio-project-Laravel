
@extends('layouts/admin_layout')
    @section('content')


        <!-- start Page Content -->
        <main>
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Home</h1>
                </div>
                <div class="col-md-6">
                    @if(session('msg'))
                        <p class="alert alert-success">{{ session('msg')}} </p>
                    @endif 
                    <form class="user" method="POST" action="{{ route('admin.dashboard.update') }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('put') }}
                        <div class="form-group">
                            <label class="text-dark"><b>name</b></label>
                            @error('name')
                                <span class="alert alert-danger">{{$message}}</span>
                            @enderror  
                            <input name="name" type="text" value="{{($home->name)}}" class="form-control py-4" id="exampleInputEmail">
                        </div>
                        <div class="form-group">
                            <label class="text-dark"><b>Main Title</b></label>
                            @error('main_title')
                                <span class="alert alert-danger">{{$message}}</span>
                            @enderror  
                            <input name="main_title" type="text" value="{{($home->main_title)}}" class="form-control py-4" id="exampleInputPassword">
                        </div>
                        <div class="form-group">
                            <label class="text-dark"><b>sub Title</b></label>
                            @error('sub_title')
                                <span class="alert alert-danger">{{$message}}</span>
                            @enderror  
                            <input name="sub_title" type="text" value="{{($home->sub_title)}}" class="form-control py-4" id="exampleInputPassword">
                        </div>
                        <label class="text-dark"><b>Image</b></label>
                        <div class="border mb-3">
                            <img class="w-50 h-75" src="{{asset('storage/'.$home->bg_img)}}" alt="">
                        </div>
                        <input type="file" name="bg_img">
                        <div class="mt-3">
                            <button class="btn btn-primary px-4">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>



    @endsection

                
            