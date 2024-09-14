@extends('layouts.base')
@section("containt")
    
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Video Gallery</h2>                      
                    </div>
                </div>
            </div>
        </section>

        
       <section class="video-area"> 
       
       <div class="container">
               
        <div class="row">


           @foreach ($video as $videos)
    <div class="col-lg-6">
        <iframe width="400px" height="200spx" src="{{ asset('video/'.$videos->video) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@endforeach



                
                    
                    {{-- <div class="col-lg-6">
                    <iframe width="100%" height="315" src="{{ asset('') }}assets/embed/aKBQtzPYa44.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> 
                    </div> --}}
                </div>
                </div>
       </section> 
       

@endsection