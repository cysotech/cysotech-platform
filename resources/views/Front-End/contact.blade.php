@extends('Front-End.layouts.app')
@section('content')
    



    <!--section displaying featured image for contacts page-->
    <section class="contact-featured w-100">
        <div class="container text-center text-dark">
            <h4>Contact</h4>
            <small>Home / Contact</small>
        </div>

    </section>

    <section class="contact-section">
       <div class="container">
           <div class="row">
                <!--col-1-->
               <div class="col-9">
                    <!--nested row-->
                  <div class="row">
                        <!--nested col-1-->
                      <div class="col-12 col-lg-7 contact-columns-mb">
                           <h5>Where We Are</h5><hr>
                           <a href="#"><img src="img/map.png" alt="map" class="img-fluid"></a>
                       </div>
                       <!--nested col-2-->
                       <div class="col-12 col-lg-5" id="">
                           <h5>Contact Information</h5><hr>
                           <div class="text-light" id="contact-info">
                               <div>
                                   <small>
                                   <span><b>Address: </b>18 babaponmille
                                    Mangoro, Ikeja, 10024
                                    Nigeria</span>
                                   </small>
                               </div>
                               <div class="mt-3">
                                   <small>
                                       <b>Phone: </b>+2347010249069
                                   </small>
                               </div>
                               <div class="mt-3">
                                   <small>
                                       <b>Email:</b> <a href="mailto:info@cysotech.com">info@cysotech.com</a>
                                   </small>
                               </div>
                               <div class="mt-3">
                                   <small>
                                       <b>Skype:</b> cysotech
                                   </small>
                               </div>
                           </div>
                       </div>
                   </div><br><br>
                    <!--contact form-->
                   <h5>Stay In Touch</h5><hr>
                   <form action="" method="post" class="contact-form  contact-columns-mb">
                      <label for="" class="w-100"> Your Name <star style="color: red;">*</star> <br>
                          <input type="text" class="contact-input">
                      </label>
                      <label for="" class="w-100"> Your Email <star style="color: red;">*</star> <br>
                          <input type="email" class="contact-input" placeholder="example@example.com">
                      </label>
                      <label for="" class="w-100"> Subject<br>
                          <input type="text" class="contact-input">
                      </label>
                      <label for="" class="w-100"> Your Message <star style="color: red;">*</star> <br>
                          <textarea name="" id="" cols="30" rows="5" class="contact-input"></textarea>
                      </label>
                      <button class="btn btn-primary btn-sm">Send</button>
                   </form>
                   
               </div>
                <!--col-2-->
               <div class="col col-lg-3" id="second-col">
                    <a href="#" class="btn btn-block btn-dark">
                        <!--j tag carries font awesome to avoid the styling-->
                        <j class="fab fa-adobe"></j> Download Product
                    </a>
                    <div class="container bg-dark text-light text-center mt-3">
                        <h6>Are you interested?</h6>
                        <hr class="bg-light">
                        <small class="">Request a qoute for app development, and get a huge discount.</small>
                        <a href="#" class="btn btn-sm btn-success text-light m-2 animate">REQUEST A QUOTE</a>
                    </div>

                    <div class="container text-light mt-3 lightgrey sitesearch">
                        <h6>
                            <j class="fas fa-search m-2"></j>Search Site
                        </h6>
                        <hr class="bg-light">
                        <input type="text" placeholder="Enter search query" class="m-3 text-center">
                    </div>
               </div>
           </div>
       </div>
    </section>
@endsection