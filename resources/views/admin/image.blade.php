@extends('adminlayouts.base')
@section('content')
    

<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">image Add </h2>
      </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>

      </ul>
    </div>
    <section class="no-padding-top">
      <div class="container-fluid">
        <div class="row">
          <!-- Basic Form-->
          <div class="col-lg-12">
            <div class="block">
              <div class="title"><strong class="d-block">image  </strong></div>
              <div class="block-body">
                <form action="{{ route('admin.addimage') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="form-group">
                    <label class="form-control-label">image</label>
                    <input type="file"  class="form-control" name="image">
                  </div>
                    <div class="form-group">
                    <input type="submit" value="Add" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>

@endsection