@extends('adminlayouts.base')
@section('content')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1 class="h1 no-margin-bottom"><a href="{{ route('admin.dashboard') }}">About Updation</a></h1>

            <section class="no-padding-top">
               
            
                        <section class="no-padding-top">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Basic Form-->
                                <div class="col-lg-12">
                                    <div class="block">
                                        
                                        <div class="block-body">
                                            
                                            <form action="{{ route('admin.addabout',$about->id ) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
            
            
                                                <div class="form-group">
                                                    <label class="form-control-label">Name</label>
                                                    <input type="text" placeholder="Enter Name" value="{{ $about->name }}" class="form-control
                                                        @error('name') is-invalid @enderror" name="name">
                                                    @error('name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Title</label>
                                                    <input type="text" value="{{ $about->title }}" class="form-control
                                                        @error('title') is-invalid @enderror" name="title">
                                                    @error('title')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Email</label>
                                                    <input type="text" placeholder="email" value="{{ $about->email }}" class="form-control
                                                        @error('email') is-invalid @enderror" name="email">
                                                    @error('email')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Contact.No</label>
                                                    <input type="text" placeholder="phone" value="{{ $about->phone }}" class="form-control
                                                        @error('phone') is-invalid @enderror" name="phone">
                                                    @error('phone')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
            
                                                <div class="form-group">
                                                    <label class="form-control-label">Qualification</label>
                                                    <textarea name="qualification"  id="editor5">{{ $about->qualification }}</textarea>
            
            
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Work Experience</label>
                                                    <textarea name="work_experience" id="editor4">{{ $about->work_experience }}</textarea>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="form-control-label">Short Description</label>
                                                    <textarea name="short_description" id="editor1">{{ $about->short_description }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">long Description</label>
                                                    <textarea name="long_description" id="editor2">{{ $about->long_description }}</textarea>
            
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Address</label>
                                                    <textarea name="address" id="editor3">{{ $about->address }}</textarea>
            
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Consultation Timing</label>
                                                    <textarea name="Consultation_Timing" id="editor">{{ $about->Consultation_Timing }}</textarea>
            
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Image</label>
                                                    <input type="file" value="{{ $about->image }}" class="form-control @error('image') is-invalid @enderror "
                                                        name="image">
                                                    @error('image')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Add" class="btn btn-primary">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                    </section>
@endsection
       







                    