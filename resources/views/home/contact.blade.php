
@extends('layouts.base')
@section('containt')
    


        
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Contact</h2>                        
                    </div>
                </div>
            </div>
        </section>

        
       <section class="contact_area p_120">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6><strong>HCG Cancer Hospital</strong></h6>
                                <p>@php echo $about->address; @endphp</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><p>{{ $about->phone }}</p></h6>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><p>{{ $about->email }}</p></h6>
                            </div>
                            
                            <div class="info_item">
                                <i class="lnr lnr-clock"></i>
                                <h4>Consultation Timing</h4>
                                <h6><p>@php echo $about->address; 
                                 echo $about->Consultation_Timing; @endphp</p></h6>
                                <!--         
                                <h6><p><strong>Dr BS Ankit Nehra’s Cancer Clinic</strong><br>
                                        Mon to Fri : 4:30pm to 6:30pm<br>
                                        Sat-Sun : By Appointment Only</p></h6> -->
                            </div>

                        <!--     <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6><strong>Hope Oncocare Cancer Consultancy</strong></h6>
                                <p>14/73, Shipra Path, Mansarovar Sector 1, Mansarovar, Jaipur, Rajasthan 302020</p>
                            </div>

                            <div class="info_item">
                                <i class="lnr lnr-clock"></i>
                                <h4>Consultation Timing</h4>
                                <h6><p>Mon to Sat : 5pm to 7pm<br>
                                        sun : Off</p></h6>                                
                            </div> -->



                        </div>
                    </div>
                    
                    <div class="col-lg-8">
<form class="form" action="{{ route('home.usercontacts') }}" id="addform" method="POST">@csrf
<div class="row">
         <div class="col-lg-6">
         <div class="form-group">
            <input type="text" placeholder="Name" name="name" id="name" class="text err required">
          </div>
         
         <div class="form-group">   
            <input type="text" placeholder="Mobile/phone NO." name="phone" id="Phone" class="text err required" onkeypress="return isNumber(event);">
         </div>
         
         <div class="form-group">
            <input type="text" placeholder="City" name="city" id="city" class="text err required">
         </div>
         </div>
          
          <div class="col-lg-6">
         <div class="form-group">
            <textarea cols="47" rows="4" placeholder="Messege" name="message" id="message" class="text err required"></textarea>
         </div>
          <!-- <div class="form-group">
          <img src="captcha.png"><br>
             <input class="cap" name="captcha" type="text">
             </div>
             </div>
         </div> -->  
             
          <div class="form-group">   
            <button type="submit" class="send template-btn" value="Send" id="contact" name="submit"> Submit</button>
          </div>
          </form>
          
                        
                    </div>
                    
<div class="col-lg-6"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14236.536341498751!2d75.769532!3d26.8674807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5ad06a86fdb%3A0xef2c9d6a3dbd292d!2sHCG%20Cancer%20Hospital%20-%20(Mansarovar%2C%20Jaipur)!5e0!3m2!1sen!2sin!4v1715593549219!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>

 <div class="col-lg-6"> 
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.919235275013!2d75.75687831504412!3d26.874306983144134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5879d926c87%3A0xe7cf09b93a2b005e!2sHope%20Oncocare%20Clinic!5e0!3m2!1sen!2sin!4v1634363588586!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
</div>                   
                </div>
            </div>
        </section> 
        
           
        @endsection