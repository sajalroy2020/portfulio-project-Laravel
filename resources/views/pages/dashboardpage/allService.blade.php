@extends('layouts/admin_layout')
    @section('content')


        <!-- start Page Content -->
        <main>
            <div class="container-fluid pb-5">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">All Service</h1>
                </div>
                <hr>

                @if(session('status')) 
                    <h6 class="alert alert-danger">{{session('status')}}</h6>
                @endif
                
                <div class="row">
                       <div class="col-md-12">
                        <table class="table table-bordered table-dark text-center">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($service as $key => $item)
                                <tr>
                                   <th>{{ $key +1 }}</th>
                                   <td>{{ $item->icon }}</td>
                                   <td>{{ $item->title }}</td>
                                   <td>{{ $item->description }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{url('admin/dashboard_page/serviceEdit/'.$item->id)}}">Edit</a> 
                                        <a class="btn btn-danger" onclick="return confirm('are you sure')" href="{{url('admin/dashboard_page/serviceDelete/'.$item->id)}}">Delete</a>
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