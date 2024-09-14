@extends('adminlayouts.base')
@section('content')
    

<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
      
<!-- Breadcrumb-->
<div class="container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><h2>Video</h2></a></li>
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
                                    <th> video</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($video as  $videos)
                                <tr>

                                        <td>{{$videos->id}}</td>
                                        <td><iframe width="250px" height="250px" src="{{ asset('video/'.$videos->video) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td> 

                                          <td>
                  
                                                <a href="{{ route('admin.deletevideo',$videos->id) }}" class="btn btn-danger">Delete</a>
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
</section>


@endsection