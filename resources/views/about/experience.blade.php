@extends('layouts/admin_layout')
    @section('content')


        <!-- start Page Content -->
        <main>
            <div class="container-fluid pb-5">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Update Exprience</h1>
                </div>
                <hr>

                <div class="row">
                        <div class="col-md-4 mx-auto">
                            @if(session('massage'))
                                <p class="alert alert-success">{{ session('massage')}} </p>
                            @endif 
                            
                            <form class="user" method="POST" action="{{ url('admin/dashboard_page/aboutExperience_update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <input name="about_img" type="file" class="form-control pb-1" id="exampleInputEmail1">  
                                    <img width="200" class="mt-2" src="{{ asset('storage/'.$aboutImg->about_img) }}" alt="">        
                                </div> 

                                <div class="form-group">
                                    <label class="text-dark"><b>Year-1</b></label>
                                    <input name="Year_1" value="{{$aboutImg->Year_1}}" type="text" class="form-control py-4" id="exampleInputEmail">
                                <div>
                                    @error('Year_1')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror  
                                </div>

                                    <label class="text-dark"><b>Year-1-Exprience</b></label>
                                    <input name="Year_1_exprience" value="{{$aboutImg->Year_1_exprience}}" type="text" class="form-control py-4" id="exampleInputEmail">
                                    <div>
                                        @error('Year_1_exprience')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror  
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="text-dark"><b>Year-2</b></label>
                                    <input name="Year_2" value="{{$aboutImg->Year_2}}" type="text" class="form-control py-4" id="exampleInputEmail">
                                    <div>
                                        @error('Year_2')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror  
                                    </div>
                                    
                                    <label class="text-dark"><b>Year-2-Exprience</b></label>
                                    <input name="Year_2_exprience" value="{{$aboutImg->Year_2_exprience}}" type="text" class="form-control py-4" id="exampleInputEmail">
                                    <div>
                                        @error('Year_2_exprience')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror  
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="text-dark"><b>Year-3</b></label>
                                    <input name="Year_3" value="{{$aboutImg->Year_3}}" type="text" class="form-control py-4" id="exampleInputEmail">
                                    <div>
                                        @error('Year_3')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror  
                                    </div>

                                    <label class="text-dark"><b>Year-3-Exprience</b></label>
                                    <input name="Year_3_exprience" value="{{$aboutImg->Year_3_exprience}}" type="text" class="form-control py-4" id="exampleInputEmail">
                                    <div>
                                        @error('Year_3_exprience')
                                            <span class="alert alert-danger">{{ $message }}</span>
                                        @enderror  
                                    </div>
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