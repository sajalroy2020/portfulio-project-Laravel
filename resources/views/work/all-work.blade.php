
@extends('layouts/admin_layout')
@section('content')


<!-- start Page Content -->
<main>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Work All</h1>
        </div>
        <hr>
        <div class="row">
            @if(session('status')) 
                <h6 class="alert alert-danger">{{session('status')}}</h6>
            @endif
            <div class="col-md-12">
                <h2 class="text-center pb-3">All Design</h2>
    <table class="table table-bordered table-dark text-center">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Main Title</th>
            <th scope="col">Sub Title</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($design as $key => $item)
            <tr>
                <td>{{ $key +1 }}</td>
                <td>{{ $item->work_main_title }}</td>
                <td>{{ $item->work_sub_title }}</td>
                <td>
                    <img width="40" src="{{ asset('storage/public/design-img/'.$item->design_img) }}" alt="">
                </td>
                <td>
                    <a class="btn btn-success" href="{{ url('admin/works/design/design_edit/'.$item->id) }}">Edit</a> 
                    <a class="btn btn-danger" onclick="return confirm('are you sure')" href="{{ url('admin/works/design/design_delete/'.$item->id) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>




        <div class="row mt-5">
            @if(session('massage')) 
                <h6 class="alert alert-danger">{{session('massage')}}</h6>
            @endif
            <div class="col-md-12">
                <h2 class="text-center pb-3">All Development</h2>
    <table class="table table-bordered table-dark text-center">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Main Title</th>
            <th scope="col">Sub Title</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($development as $key => $item)
            <tr>
                <td>{{ $key +1 }}</td>
                <td>{{ $item->work_development_title }}</td>
                <td>{{ $item->work_development_sub_title }}</td>
                <td>
                    <img width="40" src="{{ asset('storage/public/development-img/'.$item->development_img) }}" alt="">
                </td>
                <td>
                    <a class="btn btn-success" href="{{ url('admin/works/design/development_edit/'.$item->id) }}">Edit</a> 
                    <a class="btn btn-danger" onclick="return confirm('are you sure')" href="{{ url('admin/works/design/development_delete/'.$item->id) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>





        <div class="row mt-5">
            @if(session('massage')) 
                <h6 class="alert alert-danger">{{session('massage')}}</h6>
            @endif
            <div class="col-md-12">
                <h2 class="text-center pb-3">All Marketing</h2>
    <table class="table table-bordered table-dark text-center">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Main Title</th>
            <th scope="col">Sub Title</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marketing as $key => $item)
            <tr>
                <td>{{ $key +1 }}</td>
                <td>{{ $item->marketing_title }}</td>
                <td>{{ $item->marketing_sub_title }}</td>
                <td>
                    <img width="40" src="{{ asset('storage/public/marketing-img/'.$item->marketing_img) }}" alt="">
                </td>
                <td>
                    <a class="btn btn-success" href="{{ url('admin/works/design/marketing_edit/'.$item->id) }}">Edit</a> 
                    <a class="btn btn-danger" onclick="return confirm('are you sure')" href="{{ url('admin/works/design/marketing_delete/'.$item->id) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>




    </div>
</main>

@endsection
