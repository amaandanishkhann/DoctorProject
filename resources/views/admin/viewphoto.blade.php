@extends('adminlayouts.base')
@section('content')
    



<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        
        <!-- Breadcrumb-->
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><h2>Image</h2></a></li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block margin-bottom-sm">
                             <div class="table-responsive">
                                <table class="table">
                                    <thead>

                                        <tr>
                                            <th> ID</th>
                                            <th> Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($image as $images)
                                        <tr>

                                                <td>{{ $images->id }}</td>
                                                <td><img width="300px" height="300px" src="{{asset('image/'.$images->image)}}" alt=""></td>
                                                  <td>
                                      <a href="{{ route('admin.deleteimage',$images->id) }}" class="btn btn-danger m-2 p-2"><i class="bi bi-trash3"></i></a>
                                                        <a href="" class="btn btn-danger">Delete</a>
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
            </div>
        </div>
    </div>

        </section>

@endsection