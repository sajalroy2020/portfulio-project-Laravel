@extends('layouts/admin_layout')
    @section('content')


        <!-- start Page Content -->
        <main>
            <div class="container-fluid pb-5">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Create Service</h1>
                </div>
                <hr>

                <div class="row">
                        <div class="col-md-4 mx-auto">
                            
                            <form class="user" method="POST" action="{{url('admin/dashboard_page/serviceUpdate/'.$service->id)}}">
                                @csrf
                                <div class="form-group">
                                    <label class="text-dark"><b>Icon</b></label>
                                    <input name="icon" value="{{$service->icon}}" type="text" class="form-control py-4" id="exampleInputEmail">
                                </div>
                                <div>
                                    @error('icon')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror  
                                </div>

                                <div class="form-group">
                                    <label class="text-dark"><b>Title</b></label>
                                    <input name="title" value="{{$service->title}}" class="form-control py-4" id="exampleInputEmail">
                                </div>
                                <div>
                                    @error('title')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror  
                                </div>

                                <div class="form-group">
                                    <label class="text-dark"><b>Description</b></label>
                                    <textarea name="description" type="text-" class="form-control py-4" rows="4" cols="50">{{$service->description}} </textarea>
                                </div>
                                <div>
                                    @error('description')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror  
                                </div>
                                
                                <div class="mt-3">
                                    <button class="btn btn-primary px-4" type="update" >Update</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </main>


    @endsection