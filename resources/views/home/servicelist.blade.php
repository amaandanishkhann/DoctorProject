@extends('layouts.base')
@section("containt")
    

<section class="welcome_area">
            <div class="container">
                @if ($service)
                <div class="row welcome_inner">
                <div class="col-lg-12">

              
                     
             
                                           
                <h1>{{ $service->name }}</h1>
                </div>
                
                <div class="col-lg-4">
                        <div class="welcome_img">
                            <img class="img-fluid" src="{{ asset('service/'.$service->image) }}" alt="">
                        </div>
                </div>
                    
                    <div class="col-lg-8">
                        <div class="welcome_text">
                          @php
                              
                          
                            echo "$service->long_description"@endphp
                            
                        </div>
                    </div>

                    <div class="col-lg-12"> 
                        <div class="text_part">
                            @php
                              
                          
                            echo    "$service->short_description" @endphp
                    </div> 
                </div>
           
                

                </div> 
                @endif  
            </div>
        </section>


        @endsection