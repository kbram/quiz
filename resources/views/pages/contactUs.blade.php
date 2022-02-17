@extends('layouts.app')

@section('content')

<div class="container-contact100 pt-0 mt-0">
     <div class="wrap-contact100  mt-5  mb-5">
          <form class="contact100-form validate-form">
               <span class="contact100-form-title">
                    Send Us A Message
               </span>

               <label class="label-input100" for="first-name">Tell us your name *</label>
               <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                    <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
                    <span class="focus-input100"></span>
               </div>
               <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                    <input class="input100" type="text" name="last-name" placeholder="Last name">
                    <span class="focus-input100"></span>
               </div>

               <label class="label-input100" for="email">Enter your email *</label>
               <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                    <span class="focus-input100"></span>
               </div>

               <label class="label-input100" for="phone">Enter phone number</label>
               <div class="wrap-input100">
                    <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                    <span class="focus-input100"></span>
               </div>

               <label class="label-input100" for="message">Message *</label>
               <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                    <span class="focus-input100"></span>
               </div>

               <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                         Send Message
                    </button>
               </div>
          </form>

          <div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
               <div class="flex-w size1 p-b-47">
                    <div class="txt1 p-r-25">
                         <span class="lnr lnr-map-marker"></span>
                    </div>

                    <div class="flex-col size2">
                         <span class="txt1 p-b-20">
                              Address
                         </span>

                         <span class="txt2">
                              New Chemmany Road, Nallur North, Jaffna.
                         </span>
                    </div>
               </div>

               <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                         <span class="lnr lnr-phone-handset"></span>
                    </div>

                    <div class="flex-col size2">
                         <span class="txt1 p-b-20">
                              Lets Talk
                         </span>

                         <span class="txt3">
                            +94 (076) 7000-249
                         </span>
                    </div>
               </div>

               <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                         <span class="lnr lnr-envelope"></span>
                    </div>

                    <div class="flex-col size2">
                         <span class="txt1 p-b-20">
                              General Support
                         </span>

                         <span class="txt3">
                              nkbram95@gmail.com
                         </span>
                    </div>
               </div>
          </div>
     </div>
</div>
<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27232.906986141817!2d80.01914303928022!3d9.685172755250814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe543b00585a09%3A0x23d8090989865331!2sKalviyankadu!5e0!3m2!1sen!2slk!4v1623554168637!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" style="bottom:0"></iframe>


@endsection