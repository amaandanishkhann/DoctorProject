@extends('layouts.base')
@section("containt")
    

        <section class="feature_area p_120">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="white_title">
                    <h2>Photo Gallery</h2>                  
                </div>
                
<div class="image-row">

    @foreach ($image as $images)
    <a class="example-image-link" href="{{ asset('image/'.$images->image) }}" data-lightbox="example-set" data-title="">
        <img class="example-image" src="{{ asset('image/'.$images->image) }}" alt=""></a> 		
     @endforeach





{{-- <a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g2.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g2.jpg" alt=""></a>

<a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g3.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g3.jpg" alt=""></a>

<a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g4.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g4.jpg" alt=""></a>

<a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g5.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g5.jpg" alt=""></a>

<a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g6.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g6.jpg" alt=""></a>

<a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g7.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g7.jpg" alt=""></a>

<a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g8.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g8.jpg" alt=""></a>

<a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g9.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g9.jpg" alt=""></a>

<a class="example-image-link" href="{{ asset('') }}assets/img/gallery/g10.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g10.jpg" alt=""></a>                       
</div> --}}
</div>
</section>
        
       
@endsection