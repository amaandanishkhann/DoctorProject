@extends('adminlayouts.base')
@section('content')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1 class="h1 no-margin-bottom"><a href="{{ route('admin.dashboard') }}">Service Updation</a></h1>

            <section class="no-padding-top">
                <div class="page-content">
                    <!-- Page Header-->
                    <div class="page-header no-margin-bottom">
                        
                    </div>
                
                    
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Basic Form-->
                                <div class="col-lg-12">
                                    <div class="block">
                                        <div class="title"><strong class="d-block">Add</strong></div>
                                        <div class="block-body">
                                            <form action="{{ route('admin.addservice') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="form-control-label">Image</label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Name</label>
                                                    <input type="text" placeholder="Enter Name" class="form-control"
                                                        @error('name') is-invalid @enderror name="name">
                                                    @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label class="form-control-label">short Description</label>
                                                    <textarea placeholder="Short_description" id="editor1" class="form-control"
                                                    @error('short_Description') is-invalid @enderror name="short_Description"></textarea>
                                                        @error('short_Description')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="form-control-label">Long Description</label>
                                                    <textarea placeholder="long_description" class="form-control"
                                                     name="long_description" id="editor"></textarea>
                                                        @error('description')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    {{-- <input type="submit" value="Signin" class="btn btn-primary"> --}}
                                                    <button type="submit" class="btn btn-dark">Add</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>            
                              </div>
                        </div>
                    </section>
@endsection
       







      