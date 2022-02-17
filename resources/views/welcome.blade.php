@extends('layouts.app')

@section('content')
<!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
               <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row ">
                                 <div class="col-md">
                                    <div class="text-bg">
                                       <span>AUTOMATED FARMING SERVICES</span> 
                                       <h1 class="inovateGreen"> INNOVATIVE & PROFESSION</h1>
                                       <p class="mb-4 inovateGreen1">Domestic Farming systems for your home exist to make soiless gardening easy for any level of gardener, with any weather condition and less man power. </p>
                                       <a  href="#">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md">
                                    <div class="text-bg">
                                       <span>FARMING SERVICES</span> 
                                       <h1 class="inovateGreen"> INNOVATIVE & PROFESSION</h1>
                                       <p class="mb-4 inovateGreen1">Domestic Farming systems for your home exist to make soiless gardening easy for any level of gardener, with any weather condition and less man power. </p>
                                       <a href="#">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md">
                                    <div class="text-bg">
                                       <span>FARMING SERVICES</span> 
                                       <h1 class="inovateGreen"> INNOVATIVE & PROFESSION</h1>
                                       <p class="mb-4 inovateGreen1">Domestic Farming systems for your home exist to make soiless gardening easy for any level of gardener, with any weather condition and less man power. </p>
                                       <a href="#">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md">
                                    <div class="text-bg">
                                       <span>FARMING SERVICES</span> 
                                       <h1 class="inovateGreen"> INNOVATIVE & PROFESSION</h1>
                                       <p class="mb-4 inovateGreen1">Domestic Farming systems for your home exist to make soiless gardening easy for any level of gardener, with any weather condition and less man power. </p>
                                       <a  href="#">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </section>
      <!-- three box -->
      <div id="service" class="back_box">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_rile">
                  <div class="three_box" >
                     <span>01</span>
                     <h3>CONNECTED DEVICES</h3>
                     <p>Connect your device with your wifi and start your automated cultivation </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padding_l">
                  <div class="three_box darkGreen">
                     <span class="darkGreen" >02</span>
                     <h3>CLIMATE CONTROL</h3>
                     <p>The system is designed to control temperature, humidity, lighting, fan and vent and much more</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 padd_ri">
                  <div class="three_box">
                     <span>03</span>
                     <h3>STORE DATA</h3>
                     <p>For measurements and information are store in cloud storage. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end three box -->
      <!-- wellcome  -->
      <div class="videoResponse">
       
         <div class=" pr-5 pl-5   container1 d-inline-flex" style="">
            {{-- <iframe class=" responsive-iframe1" poster="images/slider_img2.jpg"  src="images/green.mp4" frameborder="0" allowfullscreen="" style="border: 0px outset #313131;"></iframe> --}}
            <video class="responsive-iframe1" poster="images/slider_img4.jpg"   frameborder="0" allowfullscreen="" style="border: 0px outset #313131;" controls>
               <source src="images/green.mp4" type="video/mp4">
               
               {{-- <object data="video.mp4" width="470" height="255">
               <embed src="video.swf" width="470" height="255">
               </object> --}}
           </video>
         </div> 
      
      </div>  
      <div id="clean" class="wellcome ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="row titlepage pb-5">
                     <h2 class="col-md-7 p-0 m-0 ">WELCOME TO OUR SYSTEM</h2>
                     <p class="col-md-5 p-2 m-0">It is the easiest way to go the biggest, freshes and healthiest produce in the least time possible.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="wellcome-box">
                     <figure><img src="images/wellcome3.jpeg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="wellcome-box">
                     <figure><img src="images/welcome5.jpeg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-xl col-lg col-md col-sm mt-4">
                  <div class="wellcome-box">
                     <figure><img src="images/wellcome4.jpeg" alt="#" /></figure>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end wellcome -->
      <!-- ourwork -->
      <div id="ourwork" class="ourwork">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>OUR SYSTEM PROCESS</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="main_slider1" class="carousel slide banner-main3" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="images/service_img1.png" alt="#"/></figure>
                                          <p>We provide the structure with seeds and nutrients.  </p>
                                       </div>
                                    </div>
                                    <div class="col-md-5">
                                       <div class="our">
                                          <figure><img src="images/service_img2.png" alt="#"/></figure>
                                          <p>Plant your first seeds in soil free hydroponics base . </p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="images/service_img3.png" alt="#"/></figure>
                                          <p>Architect the system design  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="images/service_img4.png" alt="#"/></figure>
                                          <p>Build the system </p>
                                       </div>
                                    </div>
                                    <div class="col-md-5">
                                       <div class="our">
                                          <figure><img src="images/service_img5.png" alt="#"/></figure>
                                          <p>Test the system and Finished the efficient system</p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="images/service_img6.png" alt="#"/></figure>
                                          <p> Fixed the farm with device</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="images/service_img7.png" alt="#"/></figure>
                                          <p>Get the plant data and store in web data base service </p>
                                       </div>
                                    </div>
                                    <div class="col-md-5">
                                       <div class="our">
                                          <figure><img src="images/service_img8.png" alt="#"/></figure>
                                          <p>Change the feathers and get the analysed data</p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="our">
                                          <figure><img src="images/service_img9.png" alt="#"/></figure>
                                          <p>Run the system with analyse efficient data rules</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#main_slider1" role="button" data-slide="prev"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                     <a class="carousel-control-next" href="#main_slider1" role="button" data-slide="next"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section id="why_us">
         <div class="container text-center">
             <div class="row">
                 <div class="col-md text-center">
                     <div class="head_title">
                         <h2>WHY CHOOSE US?</h2>
                         <p>Throughtout automated hydroponics system is help to grow healthy plants by giving correct automated characteristic.</p>

                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-3 col-sm-6">
                     <div class="why_us_item">
                         <span class="fa fa-gears"></span>
                         <h4>Climate Control</h4>
                         <p>The system is designed to control temperature, humidity, lighting, fan and vent and much more</p>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6">
                     <div class="why_us_item">
                         <span class="fa fa-tasks"></span>
                         <h4>Hydroponics System</h4>
                         <p>The plants take all nutrients they need straight from the water</p>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6">
                     <div class="why_us_item">
                         <span class="fa fa-signal"></span>
                         <h4>Connected Devices</h4>
                         <p>Connect your device with your wifi and start your cultivation </p>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6">
                     <div class="why_us_item">
                         <span class="fa fa-leaf"></span>
                         <h4>Nutrient Dosing System</h4>
                         <p>For measurements and nutrients formulas, throughtout knows exactly what to do</p>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- Why us end -->
     <section id="portfolio">
      <div class="container portfolio_area text-center pt-3">
          <h2 class="head_title_made">Made with love</h2>
          <p class="head_title2">
              Hydroponic gardening is a great way to grow your vegetables, fruits, and herbs under totally controlled conditions.
              You’ll hear many a naturalist extolling the virtues of growing food and perennials in the earth, under the sun.
              However, many of their arguments are misguided; defying logic and the great results obtained from hydroponic growers all over the world.
             They take up to 50% less land to grow the same amount of crops: Leaving more land for other uses such as wildlife reserves and also saving trees, which would otherwise be cleared for agricultural purposes.
              Less water usage: In fact, less than 10% the amount that would be required for growing in soil. The only water lost with hydroponics is through evaporation, or occasional changes to the feeding solution.
              60% less fertilizer is required: The hydroponic growing solution circulates through the plant’s roots, the plant absorbs what they need, and you never lose anything due to settling or crystallizing in the soil
          </p>

          <div id="filters">
              <button class="button is-checked" data-filter="*">Show All</button>
              <button class="button" data-filter=".buildings">Arcitecture Design</button>
              <button class="button" data-filter=".interior">Automated System</button>
              <button class="button" data-filter=".isolation">Isolated Devices</button>
              <button class="button" data-filter=".plumbing">Water Flowings</button>
          </div>
          <!-- Portfolio grid -->		
          <div class="grid">
              <div class="grid-sizer"></div>
              <div class="grid-item grid-item--width2 grid-item--height2 buildings plumbing interior">
                  <img alt="" src="images/highligh_img.jpg" >
                  <div class="portfolio_hover_area">
                      <a class="fancybox" href="images/highligh_img.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                      <a href="#"><span class="fa fa-link"></span></a>
                  </div>  
              </div>

              <div class="grid-item buildings interior isolation">
                  <img alt="" src="images/portfolio1.jpg" >
                  <div class="portfolio_hover_area">
                      <a class="fancybox" href="images/portfolio1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                      <a href="#"><span class="fa fa-link"></span></a>
                  </div>   
              </div>

              <div class="grid-item interior plumbing isolation">
                  <img alt="" src="images/portfolio2.jpg" >
                  <div class="portfolio_hover_area">
                      <a class="fancybox" href="images/portfolio2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                      <a href="#"><span class="fa fa-link"></span></a>
                  </div>  
              </div>

              <div class="grid-item isolation buildings">
                  <img alt="" src="images/portfolio3.jpg" >
                  <div class="portfolio_hover_area">
                      <a class="fancybox" href="images/portfolio3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                      <a href="#"><span class="fa fa-link"></span></a>
                  </div>  
              </div>

              <div class="grid-item plumbing isolation">
                  <img alt="" src="images/portfolio4.jpg" >
                  <div class="portfolio_hover_area">
                      <a class="fancybox" href="images/portfolio4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                      <a href="#"><span class="fa fa-link"></span></a>
                  </div>  
              </div>
          </div><!-- Portfolio grid end -->
      </div>
  </section><!-- Portfolio end -->

        <!-- Testimonial -->
        <section id="testimonial">
         <div class="container text-center testimonial_area">
             <h2 class="head_title_made">Customer Reviews</h2>
             <p class="head_title">
                 For no one rejects, dislikes, or avoids pleasure itself, because it is pleasure, 
                 but because they do not know how to pursue pleasure rationally encounter consequences that are the sorrows of those who have. 
             </p>

             <div class="row">
                 <div class="col-md">
                     <div class="testimonial_item">
                         <div class="testimonial_content text-left">
                             <p class="head_title">Really an impressive work on automation and agriculture binded together. Hydroponic will be an important technology in bio IT field very soon. The system fullfill neccery requirements for hydroponics. Wish your all the best THROUGHTOUT Into Green team.</p>
                         </div>
                         <img src="images/testimonial_img1.png" alt="Testimonial" />
                         <p class="worker_name">Shorubi</p>
                     </div>
                 </div>
                 <div class="col-md">
                     <div class="testimonial_item">
                         <div class="testimonial_content">
                             <p class="head_title">Really an impressive work on automation and agriculture binded together. Hydroponic will be an important technology in bio IT field very soon. The system fullfill neccery requirements for hydroponics. Wish your all the best THROUGHTOUT Into Green team.</p>
                         </div>
                         <img src="images/testimonial_img2.png" alt="Testimonial" />
                         <p class="worker_name">Shyam Ravi</p>
                     </div>
                 </div>
                 <div class="col-md">
                     <div class="testimonial_item">
                         <div class="testimonial_content">
                             <p class="head_title">Really an impressive work on automation and agriculture binded together. Hydroponic will be an importent technology in bio IT field very soon. The system fullfill neccery requirements for hydroponics. Wish your all the best THROUGHTOUT Into Green team.</p>
                         </div>
                         <img src="images/testimonial_img1.png" alt="Testimonial" />
                         <p class="worker_name">Amri</p>
                     </div>
                 </div>
             </div>
         </div>
     </section><!-- Testimonial end -->

        <!-- Contact form -->
        <section id="contact_form">
         <div class="container">
             <div class="row">
                 <div class="col">
                     <h2 class="head_title_made" >Do you have any questions?</h2>
                     <h2 class="head_title_made second_heading">Feel free to contact us!</h2>
                 </div>
                 <form name="" role="form" class="form-inline text-right col " >
                  <div class="row m-0 p-0">
                     <div class= "col-md-6 m-0 p-0 xx" >
                        <div class="form-group m-0 p-0">
                           <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                     </div>
                     <div class= "col-md-6 m-0 p-0 xx" >
                        <div class="form-group m-0 p-0">
                           <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                     </div>
                     <div class= "col-md-9 m-0 p-0 " >
                        <div class="form-group  m-0 p-0" >
                           <textarea class="form-control" rows="5" id="msg" placeholder="Message" style="overflow: hidden;"></textarea>
                        </div>
                     </div>
                     <div class= "col-md m-0 p-0" >
                     <button type="submit" class="btn submit_btn d-block" onclick="">Submit</button>
                     </div>
                  </div>
                  
                 </form>				
             </div>
         </div>
     </section><!-- Contact form end -->

     <script>
         $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('#scrollUp').fadeIn('slow');
        } else {
            $('#scrollUp]').fadeOut('slow');
        }
    });

    $('#scrollUp').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });
        </script>
@endsection
      