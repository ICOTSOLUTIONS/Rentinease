   <style>
       .widthimg {
           width: 50%;
       }

       .fs32px {
           font-size: 32px;
       }

       .fa-facebook {
           color: rgb(39, 174, 96);
       }

       .fa-facebook:hover {
           color: white;
       }

       .fa-whatsapp {
           color: rgb(39, 174, 96);
       }

       .fa-whatsapp:hover {
           color: white;
       }

       .fa-instagram {
           color: rgb(39, 174, 96);
       }

       .fa-instagram:hover {
           color: white;
       }

       .fa-twitter {
           color: rgb(39, 174, 96);
       }

       .fa-twitter:hover {
           color: white;
       }

       .fa-linkedin {
           color: rgb(39, 174, 96);
       }

       .fa-linkedin:hover {
           color: white;
       }
   </style>
   <footer class="dark-footer skin-dark-footer style-2">
       <div class="footer-middle">
           <div class="container">
               <div class="row">

                   <div class="col-lg-5 col-md-5">
                       <div class="footer_widget">
                           <span class="w-100"><img class="widthimg m-4" src="{{ asset('assets/img/logo_white.png') }}"
                                   alt="" srcset=""></span>
                           <!-- <img src="{{ asset('./assetsclient/img/header.png') }}" class="img-footer small mb-2" alt="" /> -->
                           <!-- <h4 class="extream mb-3">Do You Really want Assistance With<br>Anything?</h4> -->
                           {{-- <h4 class="extream mb-3">Contact No: +971 54 383 6351</h4> --}}
                           <h4 class="extream mb-2">Social Media</h4>
                           <span class="col-md-6 mt-2 d-flex justify-content-between">
                               <a href='https://www.facebook.com/rentinease' target='_blank'>
                                   <i class="fs32px fa fa-facebook"></i>
                               </a>
                               <a href='https://www.instagram.com/rentinease/' target='_blank'>
                                   <i class="fs32px fa fa-instagram"></i>
                               </a>
                               <a href='https://twitter.com/Rentinease' target='_blank'>
                                   <i class="fs32px fa fa-twitter"></i>
                               </a>
                               <a href='https://www.linkedin.com/company/rentinease/' target='_blank'>
                                   <i class="fs32px fa fa-linkedin"></i>
                               </a>
                           </span>
                           <!-- <p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every month</p> -->
                           <!-- <div class="foot-news-last">
                    <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Email Address">
                                                    <div class="input-group-append">
                                                        <button type="button" class="input-group-text theme-bg b-0 text-light">Subscribe</button>
                                                    </div>
                                                    </div>
                                         </div> -->
                       </div>
                       <div class="col-md-10 foot-news-last pt-2">
                               <form class="">
                               <div class="input-group">
                                   <input type="text" class="form-control" placeholder="Email Address">
                                   <div class="input-group-append">
                                       <button type="button"
                                           class="input-group-text theme-bg b-0 text-light">Subscribe</button>
                                   </div>
                               </div>
                            </form>
                        </div>
                   </div>

                   <div class="col-lg-7 col-md-7 ml-auto">
                       <div class="row p-3">
                           <h4 class="col-md-4 widget_title text-center">Layouts</h4>
                           <h4 class="col-md-8 text-center widget_title">Company</h4>
                       </div>

                       <div class="row">
                           <div class="col-lg-3 col-md-3">
                               <div class="footer_widget">

                                   <ul class="footer-menu">
                                       <li><a href="#">Home</a></li>
                                       <li><a href="#">Buy</a></li>
                                       <li><a href="#">Rent</a></li>
                                       <li><a href="#">Index</a></li>
                                   </ul>

                               </div>
                           </div>
                           <div class="col-lg-3 col-md-3">
                               <div class="footer_widget">

                                   <ul class="footer-menu">
                                       {{-- <li><a href="#">Find an Agency</a></li> --}}
                                       <!-- <li><a href="#">Floor plans</a></li> -->
                                       <li><a href="#">Agent</a></li>
                                       <li><a href="#">Events</a></li>
                                       <li><a href="#">Blog</a></li>
                                       <li><a href="#">New project</a></li>
                                   </ul>

                               </div>
                           </div>
                           {{-- <div class="col-lg-4 col-md-4">
                               <div class="footer_widget">
                                   <h4 class="widget_title">All Sections</h4>
                                   <ul class="footer-menu">
                                       <!-- <li><a href="#">Headers<span class="new">New</span></a></li> -->
                                       <li><a href="#">Headers</a></li>
                                       <li><a href="#">Features<span class="new">New</span></a></li>
															<!-- <li><a href="#">Attractive<span class="new">New</span></a></li>
											<li><a href="#">Testimonials</a></li>
											<li><a href="#">Videos</a></li> -->
                                       <li><a href="#">Footers</a></li>
                                   </ul>
                               </div>
                           </div> --}}
                           <div class="col-lg-3 col-md-3">
                               <div class="footer_widget">
                                   <ul class="footer-menu">
                                       <li><a href="#">About</a></li>
                                       <li><a href="#">Blog</a></li>
                                       <li><a href="#">Listing</a></li>
                                   </ul>
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-3">
                               <div class="footer_widget">
                                   <ul class="footer-menu">

                                       <li><a href="#">Become a Member</a></li>
                                       <li><a href="#">Login</a></li>
                                       <li><a href="{{ url('/agentportal') }}">Register Agent<span
                                                   class="update">Update</span></a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <div class="footer-bottom">
           <div class="container">
               <div class="row align-items-center">
                   <div
                       class="col-lg-12 col-md-12 text-center fw-light  d-flex justify-content-center align-items-center">
                       {{-- <p class="mb-0 fw-light">© 2022 Rentinease. Designd By <a href="https://icotsolutions.com/" target="_blank"> ICOTSOLUTIONS</a>.</p> --}}
                       {{-- <p class="mb-0 fw-light">©All righty received Rentinease.com</p> --}}
                       <p class="fw-light">
                           <b> © 2023 </b>
                           <img src="{{ asset('assets/img/footer_copyright.png') }}" alt="logo" width="13%"
                               srcset="">
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!-- ============================ Footer End ================================== -->
