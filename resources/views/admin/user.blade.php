@extends('adminlayouts.base')
@section('content')

<div class="page-content">
  <div class="page-header">
    <div class="container-fluid">
      <section class="no-padding-top">
        <div class="container-fluid">
          <div class="row"> 
            <div class="col-lg-10">
              <div class="block margin-bottom-sm">
                <div class="title"><strong>User Updates</strong></div>
                <div class="table-responsive"> 
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>Message</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>


                      @foreach ($contact as $contacts)
                          


                      <tr>
                        <th>{{ $contacts->id }}</th>
                        <td>{{ $contacts->name }}</td>
                        <td>{{ $contacts->phone }}</td>
                        <td>{{ $contacts->city }}</td>  
                        <td><textarea style="hy-10 my-5 row-5">${{ $contacts->message }}</textarea></td>
                        <td>
                          <a href="#" class="btn btn-info m-2 p-2"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="btn btn-danger m-2 p-2"><i class="bi bi-telephone"></i></a>
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

  

@endsection
       
