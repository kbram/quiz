@extends('layouts.app')

@section('content')


<main id="main" data-aos="fade-in">

     <!-- ======= Breadcrumbs ======= -->
     <div class="breadcrumbs">
       <div class="container">
         <h2>Courses</h2>
         <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
       </div>
     </div><!-- End Breadcrumbs -->
 
     <!-- ======= Courses Section ======= -->
     <section id="courses" class="courses">
       <div class="container" data-aos="fade-up">
 
         <div class="row" data-aos="zoom-in" data-aos-delay="100">
 
           <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
             <div class="course-item">
               <img src="{{ asset('theme/img/course-1.jpg')}}" class="img-fluid" alt="...">
               <div class="course-content">
                 <div class="d-flex justify-content-between align-items-center mb-3">
                   <h4>Web Development</h4>
                   <p class="price">$169</p>
                 </div>
 
                 <h3><a href="course-details.html">Website Design</a></h3>
                 <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                 <div class="trainer d-flex justify-content-between align-items-center">
                   <div class="trainer-profile d-flex align-items-center">
                     <img src="{{ asset('theme/img/trainers/trainer-1.jpg')}}" class="img-fluid" alt="">
                     <span>Antonio</span>
                   </div>
                   <div class="trainer-rank d-flex align-items-center">
                     <i class="bx bx-user"></i>&nbsp;50
                     &nbsp;&nbsp;
                     <i class="bx bx-heart"></i>&nbsp;65
                   </div>
                 </div>
               </div>
             </div>
           </div> <!-- End Course Item-->
 
           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
             <div class="course-item">
               <img src="{{ asset('theme/img/course-2.jpg')}}" class="img-fluid" alt="...">
               <div class="course-content">
                 <div class="d-flex justify-content-between align-items-center mb-3">
                   <h4>Marketing</h4>
                   <p class="price">$250</p>
                 </div>
 
                 <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                 <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                 <div class="trainer d-flex justify-content-between align-items-center">
                   <div class="trainer-profile d-flex align-items-center">
                     <img src="{{ asset('theme/img/trainers/trainer-2.jpg')}}" class="img-fluid" alt="">
                     <span>Lana</span>
                   </div>
                   <div class="trainer-rank d-flex align-items-center">
                     <i class="bx bx-user"></i>&nbsp;35
                     &nbsp;&nbsp;
                     <i class="bx bx-heart"></i>&nbsp;42
                   </div>
                 </div>
               </div>
             </div>
           </div> <!-- End Course Item-->
 
           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
             <div class="course-item">
               <img src="{{ asset('theme/img/course-3.jpg')}}" class="img-fluid" alt="...">
               <div class="course-content">
                 <div class="d-flex justify-content-between align-items-center mb-3">
                   <h4>Content</h4>
                   <p class="price">$180</p>
                 </div>
 
                 <h3><a href="course-details.html">Copywriting</a></h3>
                 <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                 <div class="trainer d-flex justify-content-between align-items-center">
                   <div class="trainer-profile d-flex align-items-center">
                     <img src="{{ asset('theme/img/trainers/trainer-3.jpg')}}" class="img-fluid" alt="">
                     <span>Brandon</span>
                   </div>
                   <div class="trainer-rank d-flex align-items-center">
                     <i class="bx bx-user"></i>&nbsp;20
                     &nbsp;&nbsp;
                     <i class="bx bx-heart"></i>&nbsp;85
                   </div>
                 </div>
               </div>
             </div>
           </div> <!-- End Course Item-->
 
         </div>
 
       </div>
     </section><!-- End Courses Section -->
 
   </main><!-- End #main -->
 
 
@endsection