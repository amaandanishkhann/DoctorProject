@extends('adminlayouts.base')
@section('content')

<div class="page-content">
  <div class="page-header">
    <div class="container-fluid">

      <div class="col-md-10"></div>
                <div class="col-m">
                    <div class="card border-0 shadow-lg my-4">
                        <div class="card-header bg-dark">
                            <h3 class="text-white">Services Info</h3>
                        </div>

                        <div class="card-body">
              <form action="" method="POST">@csrf
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>                                    
                                    <th>Service code</th>
                                    <th>Short Description</th>
                                    <th>Long  Description</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                  @foreach ($service as $services)
                                    
                                  <tr>
                                    <td>{{ $services->id }}</td>
                                    <td><img class="img-fluid" height="100px" width="100px" src="{{ asset('service/'.$services->image) }}"></td>
                                    <td>{{ $services->name }}</td>
                                    <td>{{ $services->service_code }}</td>
                                    <td><textarea>{{ $services->short_description }}</textarea></td>
                                    <td><textarea>{{ $services->long_description }}</textarea></td>
                                    <td>
                                      <a href="{{ route('admin.editservices',$services->id)}}" class="btn btn-info m-2 p-2"><i class="bi bi-pencil"></i></a>

                                        {{-- <a href="{{ route('admin.editservices') }}" class="btn btn-info m-2 p-2"><i class="bi bi-pencil"></i></a> --}}
                                      <a href="{{ route('admin.deleteservice',$services->id) }}" class="btn btn-danger m-2 p-2"><i class="bi bi-trash3"></i></a>
                                    </td>
                                </tr>

                                  @endforeach

                               </tbody>
                             </table>

                        </div>
                      </div>
                    </div>
                  </div>
                      </div>
                    </form> 
               

@endsection
       
