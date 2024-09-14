@extends('adminlayouts.base')
@section('content')
    

<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
    
<!-- Breadcrumb-->
<div class="container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><h2>Banner</h2></a></li>
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
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th> Banner</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($banner as  $banners)
                                <tr>

                                        <td>{{$banners->id}}</td>
                                        <td>{{$banners->name}}</td>
                                        <td><img width="400px" height="200px" src="{{ asset('banner/'.$banners->image) }}" alt=""></td> 
                                        <td><a href="{{ route('admin.deletebanner', $banners->id) }}" class="btn btn-danger">Delete</a></td>
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
</section>


@endsection