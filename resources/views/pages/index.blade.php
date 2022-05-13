<!doctype html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
      <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <title>Personal Portfolio Template</title>
      <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
   </head>
   <body id="home" data-spy="scroll" data-offset="70">
      <nav class="navbar navbar-expand-lg navbar-light bg-gray-light bg-light navbar-style-two">
         <div class="container">
            <a class="navbar-brand" href="index-6.html"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                  <li class="nav-item"><a class="nav-link" href="#portfolio">Works</a></li>
                  <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="#feedback">Feedback</a></li>
                  <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="main-banner bg-gray-light">
         <div class="d-table">
            <div class="d-table-cell">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-6 col-md-12">
                        <div class="main-banner-content">
                           <span>Hello, my name is <b>{{ ($home->name) }}</b></span>
                           <div class="title">
                              <h5>I am a</h5>
                              <h1>{{ ($home->main_title) }}</h1>
                           </div>
                           <p>{{ ($home->sub_title) }}</p>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <div class="main-banner-image js-tilt">
                           <img height="500px" src="{{asset('storage/'.$home->bg_img)}}" alt="image">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section id="services" class="services-area ptb-120 bg-gray-black">
         <div class="container">
            <div class="section-title white-color">
               <h2>My Services</h2>
               <div class="back-text">
                  Services
               </div>
            </div>
            <div class="row">
               @foreach($service as $data)
               <div class="col-lg-4 col-md-6">
                  <div class="single-services-box bg-dark-color">
                     <div class="icon">
                        <i class="<?php echo $data->icon; ?>"></i>
                     </div>
                     <h3>{{($data->title)}}</h3>
                     <p>{{ $data->description }}</p>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <section id="portfolio" class="portfolio-area ptb-120 pb-0 bg-gray-light">
         <div class="container">
            <div class="section-title">
               <h2>My Works</h2>
               <div class="back-text">
                  Portfolio
               </div>
            </div>
            <div class="shorting-menu">
               <button class="filter" data-filter="all"><i class="flaticon-setup"></i> All</button>
               <button class="filter" data-filter=".design">Design</button>
               <button class="filter" data-filter=".development">Development</button>
               <button class="filter" data-filter=".marketing">Marketing</button>
            </div>
         </div>
         <div class="container-fluid">
            <div class="shorting">
               <div class="row">
                  <div class="col-lg-4 col-sm-6 col-md-6 mix design">
                     <div class="single-portfolio-box">
                        <img src="{{asset('img/portfolio-img1.jpg')}}" alt="image">
                        <div class="portfolio-content">
                           <h3><a href="#">The Headphone</a></h3>
                           <span>Design</span>
                        </div>
                        <a href="{{asset('img/portfolio-img1.jpg')}}" class="popup-btn"></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-md-6 mix design">
                     <div class="single-portfolio-box">
                        <img src="{{asset('img/portfolio-img2.jpg')}}" alt="image">
                        <div class="portfolio-content">
                           <h3><a href="#">The Fashion</a></h3>
                           <span>Photography</span>
                        </div>
                        <a href="{{asset('img/portfolio-img2.jpg')}}" class="popup-btn"></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-md-6 mix development">
                     <div class="single-portfolio-box">
                        <img src="{{asset('img/portfolio-img3.jpg')}}" alt="image">
                        <div class="portfolio-content">
                           <h3><a href="#">The Heart</a></h3>
                           <span>Development</span>
                        </div>
                        <a href="{{asset('img/portfolio-img3.jpg')}}" class="popup-btn"></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-md-6 mix marketing">
                     <div class="single-portfolio-box">
                        <img src="{{asset('img/portfolio-img4.jpg')}}" alt="image">
                        <div class="portfolio-content">
                           <h3><a href="#">Smart Car</a></h3>
                           <span>Design</span>
                        </div>
                        <a href="assets/img/portfolio-img4.jpg" class="popup-btn"></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-md-6 mix design marketing">
                     <div class="single-portfolio-box">
                        <img src="{{asset('img/portfolio-img5.jpg')}}" alt="image">
                        <div class="portfolio-content">
                           <h3><a href="#">Smart Headphone</a></h3>
                           <span>Development</span>
                        </div>
                        <a href="{{asset('img/portfolio-img5.jpg')}}" class="popup-btn"></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-md-6 mix photography development">
                     <div class="single-portfolio-box">
                        <img src="{{asset('img/portfolio-img6.jpg')}}" alt="image">
                        <div class="portfolio-content">
                           <h3><a href="#">Photography</a></h3>
                           <span>Fashion</span>
                        </div>
                        <a href="{{asset('img/portfolio-img6.jpg')}}" class="popup-btn"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="about" class="about-area ptb-120 bg-gray-light">
         <div class="container">
            <div class="section-title">
               <h2>About Me</h2>
               <div class="back-text">
                  About
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-12">
                  <div class="about-image js-tilt">
                     <img src="{{asset('img/man-2.png')}}" alt="image">
                     <img src="{{asset('img/shape.png')}}" class="shape-image wow zoomIn" data-wow-delay="0.5s" alt="image">
                  </div>
               </div>
               <div class="col-lg-6 col-md-12">
                  <div class="about-content gray-light-color">
                     <h3>Experience</h3>
                     <ul class="experience-list">
                        <li>
                           <span>2012</span>
                           Completed gradution studies at Oxford University of Art and Design
                        </li>
                        <li>
                           <span>2010</span>
                           Completed post-graduate studies at Cambridge University of Art and Design
                        </li>
                        <li>
                           <span>2008</span>
                           Completed Phd studies at Kyoto University of Art and Design
                        </li>
                     </ul>
                     <h3>Skills</h3>
                     <div class="skills-list">
                        <div class="skill-item">
                           <div class="skill-header">
                              <h4 class="skill-title">Web Design</h4>
                              <div class="skill-percentage">
                                 <div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div>
                              </div>
                           </div>
                           <div class="skill-bar">
                              <div class="bar-inner">
                                 <div class="bar progress-line" data-width="10"></div>
                              </div>
                           </div>
                        </div>
                        <div class="skill-item">
                           <div class="skill-header">
                              <h4 class="skill-title">Web Development</h4>
                              <div class="skill-percentage">
                                 <div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div>
                              </div>
                           </div>
                           <div class="skill-bar">
                              <div class="bar-inner">
                                 <div class="bar progress-line" data-width="90"></div>
                              </div>
                           </div>
                        </div>
                        <div class="skill-item">
                           <div class="skill-header">
                              <h4 class="skill-title">Photography</h4>
                              <div class="skill-percentage">
                                 <div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div>
                              </div>
                           </div>
                           <div class="skill-bar">
                              <div class="bar-inner">
                                 <div class="bar progress-line" data-width="85"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="funfacts-area gray-light-color">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-6">
                     <div class="single-funfact">
                        <h3><span class="odometer" data-count="377">00</span></h3>
                        <p>Project Completed</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-6">
                     <div class="single-funfact">
                        <h3><span class="odometer" data-count="333">00</span>K</h3>
                        <p>Lines of Code</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-6">
                     <div class="single-funfact">
                        <h3><span class="odometer" data-count="2500">00</span></h3>
                        <p>Happy Clients</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-6">
                     <div class="single-funfact">
                        <h3><span class="odometer" data-count="50">00</span></h3>
                        <p>My Awwards</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="feedback" class="testimonial-area ptb-120 bg-gray-black">
         <div class="container">
            <div class="section-title">
               <h2>Testimonial</h2>
               <div class="back-text">
                  Feedback
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6 offset-lg-2 offset-md-0">
                  <div class="single-feedback-item bg-dark">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                     <div class="client-info">
                        <img src="{{asset('img/author1.jpg')}}" alt="image">
                        <h3>Joe Root</h3>
                        <span>Founder at XYZ</span>
                     </div>
                     <i class="flaticon-left-quote"></i>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-feedback-item bg-dark">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                     <div class="client-info">
                        <img src="{{asset('img/author2.jpg')}}" alt="image">
                        <h3>Steven Smith</h3>
                        <span>Founder at XYZ</span>
                     </div>
                     <i class="flaticon-left-quote"></i>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-feedback-item bg-dark">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                     <div class="client-info">
                        <img src="{{asset('img/author3.jpg')}}" alt="image">
                        <h3>Saray Taylor</h3>
                        <span>Founder at XYZ</span>
                     </div>
                     <i class="flaticon-left-quote"></i>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-feedback-item bg-dark">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                     <div class="client-info">
                        <img src="{{asset('img/author4.jpg')}}" alt="image">
                        <h3>James Anderson</h3>
                        <span>Founder at XYZ</span>
                     </div>
                     <i class="flaticon-left-quote"></i>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                  <div class="single-feedback-item bg-dark">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                     <div class="client-info">
                        <img src="{{asset('img/client-img1.jpg')}}" alt="image">
                        <h3>Jason Roy</h3>
                        <span>Founder at XYZ</span>
                     </div>
                     <i class="flaticon-left-quote"></i>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="blog" class="blog-area ptb-120 bg-gray-light">
         <div class="container">
            <div class="section-title">
               <h2>Blog</h2>
               <div class="back-text">
                  News
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="single-blog-post gray-light-color">
                     <div class="post-image">
                        <a href="#"><img src="{{asset('img/blog-img1.jpg')}}" alt="image"></a>
                     </div>
                     <div class="post-content">
                        <h3><a href="#">4 Reasons to Leverage DIY Website Builders</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                        <a href="#" class="read-more-btn">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-blog-post gray-light-color">
                     <div class="post-image">
                        <a href="#"><img src="{{asset('img/blog-img2.jpg')}}" alt="image"></a>
                     </div>
                     <div class="post-content">
                        <h3><a href="#">10 Website Fails Your Business Is Making</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                        <a href="#" class="read-more-btn">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                  <div class="single-blog-post gray-light-color">
                     <div class="post-image">
                        <a href="#"><img src="{{asset('img/blog-img3.jpg')}}" alt="image"></a>
                     </div>
                     <div class="post-content">
                        <h3><a href="#">Top 20 Crucial WordPress Plugins</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
                        <a href="#" class="read-more-btn">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="cta-area ptb-120 bg-gray-light">
         <div class="container">
            <div class="cta-content">
               <h2>Have a project in mind?</h2>
               <span>Let’s chat about your goals</span>
               <a href="#" class="btn btn-primary">Let's Start</a>
            </div>
         </div>
      </section>
      <section id="contact" class="contact-area ptb-120 bg-gray-light">
         <div class="container">
            <div class="section-title">
               <h2>Contact Me</h2>
               <div class="back-text">
                  Contact
               </div>
            </div>
            <div class="row m-0">
               <div class="col-lg-5 col-md-12 p-0">
                  <div class="contact-info">
                     <h3>Get in Touch</h3>
                     <ul class="contact-info-list">
                        <li><span>Address:</span> <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">123 Qwerty Avenue NYC, USA</a></li>
                        <li><span>Email:</span> <a href="#"><span class="__cf_email__" data-cfemail="b5d4d9ccc6d4f5d2d8d4dcd99bd6dad8">[email&#160;protected]</span></a></li>
                        <li><span>Phone:</span> <a href="#">+44 7584 75489</a></li>
                        <li><span>Website:</span> <a href="#" target="_blank">www.example.com</a></li>
                     </ul>
                     <h3>Follow Me</h3>
                     <ul class="social">
                        <li><a href="https://facebook.com/" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                        <li><a href="https://instagram.com/" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                        <li><a href="https://youtube.com/" target="_blank"><i class="flaticon-youtube"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-7 col-md-12 p-0">
                  <form id="contactForm">
                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                           <div class="form-group">
                              <input type="text" class="form-control" name="name" placeholder="Your Name" id="name" required data-error="Please enter your name">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                           <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required data-error="Please enter your email">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                           <div class="form-group">
                              <input type="text" class="form-control" name="msg_subject" placeholder="Your Subject" id="msg_subject" required data-error="Please enter your subject">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                           <div class="form-group">
                              <textarea name="message" class="form-control" id="message" placeholder="Your Message" cols="30" rows="4" required data-error="Write your message"></textarea>
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                           <button type="submit" class="btn btn-primary main-color-btn">Send Message</button>
                           <div id="msgSubmit" class="h3 text-center hidden"></div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <div class="copyright-area">
         <div class="container">
            <p><i class="far fa-copyright"></i> Copyright 2019. All Rights are Reserved.</p>
         </div>
      </div>
      <div class="go-top"><i class="fas fa-arrow-up"></i></div>
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/mixitup.min.js') }}"></script>
      <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/jquery.appear.js') }}"></script>
      <script src="{{ asset('js/odometer.min.js') }}"></script>
      <script src="{{ asset('js/tilt.jquery.js') }}"></script>
      <script src="{{ asset('js/particles.min.js') }}"></script>
      <script src="{{ asset('js/parallax.min.js') }}"></script>
      <script src="{{ asset('js/wow.min.js') }}"></script>
      <script src="{{ asset('js/form-validator.min.js') }}"></script>
      <script src="{{ asset('js/contact-form-script.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
   </body>
   <!-- Mirrored from templates.envytheme.com/alysa/default/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Jul 2021 15:16:09 GMT -->
</html>