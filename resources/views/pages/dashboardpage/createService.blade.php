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
                            @if(session('status')) 
                                <h6 class="alert alert-danger">{{session('status')}}</h6>
                            @endif
                            
                            <form class="user" method="POST" action="{{url('admin/dashboard_page/serviceStore')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="text-dark"><b>Icon</b></label>
                                    <input name="icon" type="text" class="form-control py-4" id="exampleInputEmail">
                                </div>
                                <div>
                                    @error('icon')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror  
                                </div>

                                <div class="form-group">
                                    <label class="text-dark"><b>Title</b></label>
                                    <input name="title" class="form-control py-4" id="exampleInputEmail">
                                </div>
                                <div>
                                    @error('title')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror  
                                </div>

                                <div class="form-group">
                                    <label class="text-dark"><b>Description</b></label>
                                    <textarea name="description" type="text-" class="form-control py-4" rows="4" cols="50"></textarea>
                                </div>
                                <div>
                                    @error('description')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror  
                                </div>
                                
                                <div class="mt-3">
                                    <button class="btn btn-primary px-4" type="submit" >Submit</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </main>


    @endsection