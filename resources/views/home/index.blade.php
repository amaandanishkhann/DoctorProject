
        @extends('layouts.base')
      

		@section('containt')
			
	
        <section class="home_banner_area">
            	
				<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider"> 
               @foreach ($banner as $banners)
				
				<img src="{{ asset('banner/'.$banners->image) }}" alt="">

			   @endforeach
			</div>            
        </div>


		<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">

              
                {{-- <img src="{{ asset('') }}assets/img/b1.jpg" data-thumb="img/b1.jpg" alt="" title="">
                <img src="{{ asset('') }}assets/img/b2.jpg" data-thumb="img/b2.jpg" alt="" title="">
                <img src="{{ asset('') }}assets/img/b3.jpg" data-thumb="img/b3.jpg" alt="" title="">
                <img src="{{ asset('') }}assets/img/b4.jpg" data-thumb="img/b4.jpg" alt="" title=""> --}}
            </div>
        </div>
            
            
            
            <div class="donation_area">
				<div class="container">
					<div class="row donation_inner">
                    <div class="col-lg-4">
							<div class="dontation_item green">
								<div class="media">
									<div class="media-body">
										<h4>Contact Us</h4>

										<p><strong>{{ $about->name	}}</strong></p>
										<p>{{ $about->title }}</p>

<p><strong>{{ $about->phone }}</strong> </p>

										
                                       </p>
									</div>									
								</div>
							</div>
						</div>
                        
						<div class="col-lg-4">
							<div class="dontation_item yellow">
								<div class="media">
									<div class="media-body">
										<h4>Consultation Timing</h4>
										<p>@php echo $about->address; @endphp</p>

										<p>@php echo $about->Consultation_Timing; @endphp</p>

									<!-- 	<p><strong>Hope Oncocare Cancer Consultancy:</strong> 14/73, Shipra Path, Mansarovar Sector 1, Mansarovar, Jaipur, Rajasthan 302020 </p>

										<p>Mon to Sat: 5pm to 7pm, Sun: Off</p> -->

									</div>
								</div>
							</div>
						</div>
                        
						<div class="col-lg-4">
							<div class="dontation_item pink">
								<div class="media">
									<div class="media-body">
										<!--<h4>Contact</h4>-->
										     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14236.536341498751!2d75.769532!3d26.8674807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5ad06a86fdb%3A0xef2c9d6a3dbd292d!2sHCG%20Cancer%20Hospital%20-%20(Mansarovar%2C%20Jaipur)!5e0!3m2!1sen!2sin!4v1715593549219!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

										<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14235.50264747511!2d75.75336629625033!3d26.875691215008008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe7cf09b93a2b005e!2sHope%20Oncocare%20Clinic!5e0!3m2!1sen!2sin!4v1634820599360!5m2!1sen!2sin" width="100%" height="120" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 -->
									</div>									
								</div>
							</div>
						</div>
                        
						
                        
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area">
        	<div class="container">
        		<div class="row welcome_inner">
                <div class="col-lg-12">
                <h1>About Us</h1>
                </div>
                
                <div class="col-lg-4">
                	     <!--  <div class="welcome_img">
                            <img class="img-fluid" src="img/doctor.jpg" alt="">
                        </div> -->
        				<div class="welcome_img">
        					<img class="img-fluid" src="{{ asset('') }}assets/img/1.jpg" alt="">
        				</div>
        		</div>
                    
        			<div class="col-lg-8">
        				<div class="welcome_text">
        					<h4>Dr. BS Ankit Nehra</h4>
<h5>MBBS, MD (General Medicine), DM (Medical Oncology), ECMO, PDCR<br>
Consultant - Medical Oncology at HCG Cancer Hospital, Jaipur</h5>

<p>Dr. BS Ankit is a renowned Oncologist in Jaipur and currently practices at HCG Cancer Hospital, Jaipur. For the past 8 years, Dr. BS Ankit has worked as a Medical Oncologist and gained proficient skills and knowledge in the segments. Dr. BS Ankit pursued degree of MBBS from Sardar Patel Medical College, Bikaner, India in 2011, MD - Internal Medicine from Sardar Patel Medical College, Bikaner, India in 2016 and DM - Oncology Medicine from Sri Aurobindo Institute of Medical Sciences, Indore, India.</p>

<p>Dr. BS Ankit is a well-known member of the Indian Society of Medical and Pediatric Oncology, The Teenage and Young Adult Cancer Foundation and European Society for Medical Oncology.</p>
        					
        					<a class="read btn" href="{{ route('home.abouts') }}">Read More</a>
        				</div>
        			</div>
        			
                    
        		</div>
                
                               
                
                
                
        	</div>
        </section>
        <!--================End Welcome Area =================-->
        
        
        
                
                
                
        <!--================Causes Area =================-->
        <section class="causes_area">
        	<div class="container">
        		<div class="main_title">
        			<h2>Services</h2>        			
        		</div>
        		<div class="causes_slider owl-carousel">

					
        					
					@foreach ($service as $services)
					<div class="item">
        			<div class="causes_item">
					<div class="causes_img">    
				
        						<img class="img-fluid" src="{{ asset('service/'.$services->image) }}">
        					</div>
        					<div class="causes_text">
        						<h4>{{ $services->name }}</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="">Read More</a>
							</div>
        				</div>
        			</div>


                      @endforeach



        			{{-- <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/head-and-neck-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Head & Neck Cancer</h4>
        						<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>-->
        					</div>
        					<div class="causes_bottom">
								<a href="head-neck-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
        			
        			<div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/throat-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Throat Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="throat-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/breast-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Breast Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="breast-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/gynecological-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Gynecological Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="gynecologic-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/gastro-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Gastrointestinal Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="gastrointestinal-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/lung-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Lung Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="lung-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/liver-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Liver Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="liver-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/bone-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Bone Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="bone-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/soft-tissue-sarcoma.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Soft Tissue Tumour</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="soft-tissue-tumour.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/kidney-tumor.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Kidney Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="kidney-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/urologic-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Urologic Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="urologic-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/prostate-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Prostate Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="prostate-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/hematological-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Hematological Cancer/Blood Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="hematological-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                    
                    <div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="{{ asset('') }}assets/img/services/brain-cancer.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4>Brain Cancer</h4>
        					</div>
        					<div class="causes_bottom">
								<a href="brain-cancer.php">Read More</a>
							</div>
        				</div>
        			</div>
                     --}}
                   
                    
        		</div>
        	</div>
        </section>
        <!--================End Causes Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area">
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



{{-- <a class="example-image-link" href="img/gallery/g2.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g2.jpg" alt=""></a>
<a class="example-image-link" href="img/gallery/g3.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g3.jpg" alt=""></a>
<a class="example-image-link" href="img/gallery/g4.jpg" data-lightbox="example-set" data-title="">
<img class="example-image" src="{{ asset('') }}assets/img/gallery/g4.jpg" alt=""></a>                       
</div> --}}



</div>
</section>
        
        
        
       <!-- <section class="video-area"> 
       
       <div class="container">        
        <div class="row">
                <div class="col-lg-6">
        			<iframe width="100%" height="315" src="embed/HoaxwSZXK0s.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>	
        			</div>
                    
        			<div class="col-lg-6">
        			<iframe width="100%" height="315" src="embed/aKBQtzPYa44.html" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>	
        			</div>
        		</div>
                </div>
       </section>  -->
        
        
        <!-- <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="row testimonials_inner">
        			<div class="col-lg-12">
        				<div class="testi_text">
        					<h2>Testimonial</h2>
        				</div>
        			</div>
        			<div class="col-lg-12">
        				<div class="testi_slider owl-carousel">
							<div class="item">
								<div class="testi_item">
									<img src="img/testimonials/testi-1.png" alt="">
									<p>Thanks to Dr. Ankit Sir and his wonderful Team. All the management and Staff of HCG Hospital. Very humble and amazing Doctor one of the best surgical oncologist in Rajasthan.</p>
									<h4>Kapil</h4>
								</div>
							</div>
							<div class="item">
								<div class="testi_item">
									<p>It is miraculous that whole bone marrow test has been done without pain and that patient is absolutely satisfied. Special thanks to Dr. Ankit ji. God bless you.</p>
									<h4>Poonam</h4>
								</div>
							</div>
							<div class="item">
								<div class="testi_item">
									<p>I had Head & Neck cancer surgery was performed by Dr. Ankit. On my first visit to him, he explained the pros and cons of the surgery. My surgery was successful. During post operative period care provided by team was excellent". His words were always encouraging. Very humble, caring, to me and family members. Thanks Dr. Ankit Sir</p>
									<h4>Naresh</h4>
								</div>
							</div>
							
							
						</div>
        			</div>
        		</div>
        	</div>
        </section> -->
        <!--================End Testimonials Area =================-->
        
        <!--================Clients Logo Area =================-->
        <!--<section class="clients_logo_area">
        	<div class="container">
        		<div class="clients_slider owl-carousel">
        			<div class="item">
        				<img src="img/clients-logo/c-logo-1.png" alt="">
        			</div>
        			<div class="item">
        				<img src="img/clients-logo/c-logo-2.png" alt="">
        			</div>
        			<div class="item">
        				<img src="img/clients-logo/c-logo-3.png" alt="">
        			</div>
        			<div class="item">
        				<img src="img/clients-logo/c-logo-4.png" alt="">
        			</div>
        			<div class="item">
        				<img src="img/clients-logo/c-logo-5.png" alt="">
        			</div>
        		</div>
        	</div>
        </section>-->
        <!--================End Clients Logo Area =================-->
        
        
        <!--================ start footer Area  =================-->	
   
		<!--================ End footer Area  =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		@endsection