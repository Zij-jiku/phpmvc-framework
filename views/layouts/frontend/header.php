<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Unicode -->
    <meta charset="UTF-8">
    <!-- Website Description -->
    <meta name="description" content="Free Web tutorials">
    <!-- keywords use -->
    <meta name="keywords" content="HTML5,CSS3,SCSS,SASS,LESS,BootStrap4,JavaScript,Jaquery,Fontawsome,Favicon">
    <!-- Author Name -->
    <meta name="author" content="MD Jahidul Islam Jiku">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Web Site Name -->
    <title>Zij - Personal Portfolio</title>
    <!-- After Website icon -->
    <link rel="icon" href="google.png" type="<?php echo assets('frontend'); ?>/<?php echo assets('frontend'); ?>/images/google.png" sizes="16x16">
    <!-- Main Css With Responsive -->
    <link rel="stylesheet" href="<?php echo assets('frontend'); ?>/css/main.css">
</head>

<body data-spy="scroll" data-target="#scroll_spy">

    <!-- Preloader Part Start-->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- Preloader Part End -->

    <!-- Header Part Start -->
    <header id="header_part">
        <nav id="scroll_spy" class="navbar navbar-expand-md p-0">
            <div class="container p-0 head_cont">
                <a class="navbar-brand p-0" href="#">
                    <img src="<?php echo assets('frontend'); ?>/images/logo-zij.png" alt="logo" class="img-fluid w-100">
                </a>
                <button class="navbar-toggler bg-dark navbar-dark ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse wow fadeInRight" id="navbarSupportedContent" data-wow-duration="1.5s">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#banner_part">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about_part">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services_part">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#price_part">Pricing Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team_part">Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact_part">Contact</a>
                        </li>
                    </ul>
                </div>
            </div><!-- /.container -->
        </nav>
    </header>
    <!-- Header Part End -->

    <!-- Banner Part Start -->
    <section id="banner_part">
        <div class="slider_active" style="background: url(<?php echo assets('frontend'); ?>/images/home-bg.jpg);">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="banner_imgs">
                            <img src="<?php echo assets('frontend'); ?>/images/profile_image.png" class="img-fluid" alt="My_imge">
                        </div><!-- /.banner_img -->

                        <div class="banner_text text-center">
                            <h1> MD. Zij </h1>
                            <h2><span>I'm a
                                    <span class="typewrite" data-period="2000" data-type='["Web Designer","Web Developer","Freelancer"]'>
                                        <span class="wrap"></span></span></span>
                            </h2>
                            <p>Hi, I'm Zij Zahidul Islam Jiku. I'm a Professional Front-end &amp; Back-end PHP Laravel Developer with more than 3 years of experience.</p>

                            <div class="banner_button">
                                <a href="#">View Portfolio</a>
                            </div>
                        </div><!-- /.banner_text -->
                    </div><!-- /.col-lg -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.slider_active -->
    </section><!-- /.section end -->
    <!-- Banner Part End -->

    <!-- About Part Start -->
    <section id="about_part">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="2s">
                <div class="col-lg-12 text-center">
                    <div class="class_head">
                        <h2>About Me</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-duration="3s">
                <div class="col-lg-12 text-center">
                    <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link margin_left" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Skills</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-12 hire_two_text">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 order-1 order-md-0">
                                    <div class="about_img">
                                        <img src="<?php echo assets('frontend'); ?>/images/about.jpg" class="img-fluid w-100" alt="about_img">
                                    </div><!-- /.about_img -->
                                </div><!-- /.col-lg-4 -->
                                <div class="col-lg-8 col-md-6 order-0 order-md-1">
                                    <div class="about_ditl">
                                        <div class="about_text">
                                            <h3 class="title">About Me</h3>
                                            <h6 class="sub_title">Hi, I am Zij Zahidul Islam Jiku</h6>
                                            <p>I'm a Professional Front-end &amp; Back-end PHP Developer with more than 4 years of experience.My proficiency includes HTML5/CSS3/SASS/LESS/BOOTSTRAP4/JavaScript/Jquery/ES6 &amp; Modern Vue Js Frontend Developer &amp; Laravel, core PHP development, RestApi, Responsive Web Templates &amp; much more. I'll install WordPress on your server and set up your choice premium themes.I'll also upload demo data your logo, banner, slider, and content. I look forward to helping any web solution through Wordpress and other CMS. </p>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="about_add">
                                                        <ul>
                                                            <li><span>Date of birth : </span> 10 - 02 - 2000</li>
                                                            <li><span>Degree : </span> Diploma-Engineer</li>
                                                        </ul>
                                                    </div><!-- /.about_add -->
                                                </div><!-- /.col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="about_add">
                                                        <ul>
                                                            <li><span>Email : </span> safzahidul.cse&#64;gmail.com</li>
                                                            <li><span>Phone : </span> +88-017-148-950-74</li>
                                                        </ul>
                                                    </div><!-- /.about_add -->
                                                </div><!-- /.col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="about_add">
                                                        <ul>
                                                            <li><span>Freelance : </span> Available</li>
                                                            <li><span>Skype : </span> Zij</li>
                                                        </ul>
                                                    </div><!-- /.about_add -->
                                                </div><!-- /.col-lg-4 -->
                                            </div><!-- /.row -->
                                            <div class="about_botton">
                                                <a href="#" class="about_botton1">Download C.V</a>
                                                <a href="#" class="about_botton2">Hire Me</a>
                                            </div>
                                        </div><!-- /.about_text -->
                                    </div><!-- /.about_ditl -->
                                </div><!-- /.col-lg-8 -->
                            </div><!-- /.row -->
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 hire_text">
                                    <h3>Why hire me for your next project?</h3>
                                    <p>I'm a Professional Front-end &amp; Back-end PHP Developer with more than 4 years of experience.My proficiency includes HTML5/CSS3/SASS/LESS/BOOTSTRAP4/JavaScript/Jquery/ES6 &amp; Modern Vue Js Frontend Developer &amp; Laravel, core PHP development, RestApi, Responsive Web Templates &amp; much more. I'll install WordPress on your server and set up your choice premium themes.I'll also upload demo data your logo, banner, slider, and content. </p>

                                    <p>I'm a Professional Front-end &amp; Back-end PHP Developer with more than 4 years of experience.My proficiency includes HTML5/CSS3/SASS/LESS/BOOTSTRAP4/JavaScript/Jquery/ES6 &amp; Modern Vue Js Frontend Developer &amp; Laravel, core PHP development, RestApi, Responsive Web Templates &amp; much more. I'll install WordPress on your server and set up your choice premium themes.I'll also upload demo data your logo, banner, slider, and content. </p>

                                    <a href="#">Learn More</a>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">

                                    <div class="about-content">
                                        <h3>Education &amp; Qualification : </h3>
                                    </div>

                                    <!-- Skills Part Start -->
                                    <div class="skills">
                                        <div class="bochor">2019</div>
                                        <div class="line"></div>
                                        <div class="direction">
                                            <span>Frontend Developer Vue Js & RestApi</span>
                                            <div class="bar">
                                                <div class="progress">
                                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Skills Part Start End -->

                                    <!-- Skills Part Start -->
                                    <div class="skills">
                                        <div class="bochor">2019</div>
                                        <div class="line"></div>
                                        <div class="direction">
                                            <span>Web Development &amp; Laravel</span>
                                            <div class="bar">
                                                <div class="progress">
                                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Skills Part Start End -->

                                    <!-- Skills Part Start -->
                                    <div class="skills">
                                        <div class="bochor">2018</div>
                                        <div class="line"></div>
                                        <div class="direction">
                                            <span>WordPress Theme Customization</span>
                                            <div class="bar">
                                                <div class="progress">
                                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Skills Part Start End -->

                                    <!-- Skills Part Start -->
                                    <div class="skills">
                                        <div class="bochor">2016</div>
                                        <div class="line"></div>
                                        <div class="direction">
                                            <span>Web Design &amp; PHP</span>
                                            <div class="bar">
                                                <div class="progress">
                                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Skills Part Start End -->

                                    <!-- Skills Part Start -->
                                    <div class="skills">
                                        <div class="bochor">2017</div>
                                        <div class="line"></div>
                                        <div class="direction">
                                            <span>Diploma of Computer</span>
                                            <div class="bar">
                                                <div class="progress">
                                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Skills Part Start End-->
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- /.col-lg-12 -->
            </div> <!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section end -->
    <!-- About Part End -->

    <!-- Services-area -->
    <section id="services_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Services and Solutions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xm-12">
                    <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                        <i class="fab fa-html5"></i>
                        <h3>Web Designer</h3>
                        <p>
                            I can convert any PSD into HTML.My designed website is Fully Responsive,Optimized for all browsers & devices.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xm-12">
                    <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.4s">
                        <i class="fab fa-php"></i>
                        <h3>Web Developer</h3>
                        <p>
                            I am skilled in Back-end (PHP, Laravel, MVC) & Database (MYSQL, MYSQLI).
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xm-12">
                    <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.6s">
                        <i class="fab fa-vuejs"></i>
                        <h3>Frontend Vue Js</h3>
                        <p>
                            I have the experience of working on PHP Laravel with Vue JS, VUEX and Vue router.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xm-12">
                    <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                        <i class="fab fa-laravel"></i>
                        <h3>Backend Laravel</h3>
                        <p>
                            Full stack developer expert with hands on Laravel Applications with RESTful APIs and Vuejs for fronted.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xm-12">
                    <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.4s">
                        <i class="fab fa-wordpress"></i>
                        <h3>WordPress Theme</h3>
                        <p>
                            I'll install WordPress on your server and set up your choice premium themes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xm-12">
                    <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.6s">
                        <i class="fal fa-headset"></i>
                        <h3>Supper Support</h3>
                        <p>
                            24/7 support <br />
                            Weekly Five days
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-area-end -->

    <!--Price Part Start -->
    <div id="price_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="work_head">
                        <h2>Pricing Plan</h2>
                    </div><!-- /.work_head -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                    <div class="planing_one wow fadeInLeft" data-wow-delay="0.2s">
                        <h3 class="heading_color">Html5,Css3</h3>
                        <div class="circle_one">
                            <div class="circle">
                                <h3>200<span>.00</span>$</h3>
                                <h6>Per Month</h6>
                            </div>
                        </div><!-- /.circle_one -->
                        <div class="paragraph_area">
                            <p class="paragraph_one">One User</p>
                            <p class="paragraph_two">8 Hours Work</p>
                            <p class="paragraph_three">1 Hour Support</p>
                            <p class="paragraph_four">Backup 70%</p>
                        </div>
                        <div class="sing_in">
                            <a href="#">Buy Now</a>
                        </div>
                    </div><!-- /.planing_one -->
                </div><!-- /.col-lg-3 -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                    <div class="planing_one wow fadeInLeft" data-wow-delay="0.4s">
                        <h3 class="heading_color">PHP,OOP</h3>
                        <div class="circle_one">
                            <div class="circle">
                                <h3>300<span>.00</span>$</h3>
                                <h6>Per Month</h6>
                            </div>
                        </div><!-- /.circle_one -->
                        <div class="paragraph_area">
                            <p class="paragraph_one">One User</p>
                            <p class="paragraph_two">8 Hours Work</p>
                            <p class="paragraph_three">2 Hours Support</p>
                            <p class="paragraph_four">Backup 40%</p>
                        </div>
                        <div class="sing_in">
                            <a href="#">Buy Now</a>
                        </div>
                    </div><!-- /.planing_one -->
                </div><!-- /.col-lg-3 -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                    <div class="planing_one wow fadeInLeft" data-wow-delay="0.6s">
                        <h3 class="heading_color">Vue JS</h3>
                        <div class="circle_one">
                            <div class="circle">
                                <h3>400<span>.00</span>$</h3>
                                <h6>Per Month</h6>
                            </div>
                        </div><!-- /.circle_one -->
                        <div class="paragraph_area">
                            <p class="paragraph_one">Multiple User</p>
                            <p class="paragraph_two">8 Hours Work</p>
                            <p class="paragraph_three">1 Hour Support</p>
                            <p class="paragraph_four">Backup 60%</p>
                        </div>
                        <div class="sing_in">
                            <a href="#">Buy Now</a>
                        </div>
                    </div><!-- /.planing_one -->
                </div><!-- /.col-lg-3 -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xm-12">
                    <div class="planing_one wow fadeInLeft" data-wow-delay="0.8s">
                        <h3 class="heading_color">Laravel</h3>
                        <div class="circle_one">
                            <div class="circle">
                                <h3>600<span>.00</span>$</h3>
                                <h6>Per Month</h6>
                            </div>
                        </div><!-- /.circle_one -->
                        <div class="paragraph_area">
                            <p class="paragraph_one">Multiple User</p>
                            <p class="paragraph_two">10 Hours Work</p>
                            <p class="paragraph_three">2 Hour Support</p>
                            <p class="paragraph_four">Backup 70%</p>
                        </div>
                        <div class="sing_in">
                            <a href="#">Buy Now</a>
                        </div>
                    </div><!-- /.planing_one -->
                </div><!-- /.col-lg=-3 -->
            </div><!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /.price_part -->
    <!--Price Part End -->

    <!-- Team Part Start -->
    <section id="team_part">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="team_head">
                        <h2>Meet My Team</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12 text-center">
                    <div class="team_main wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="team_img">
                            <a href="#"><img src="<?php echo assets('frontend'); ?>/images/team1.png" alt="team1" class="img-fluid w-100"></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="team_text">
                            <h3>Zij Zahidul</h3>
                            <h4>CEO / Founder</h4>
                        </div>

                    </div><!-- /. -->
                </div><!-- /. -->

                <div class="col-lg-4 col-sm-6 col-12 text-center">
                    <div class="team_main wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="team_img">
                            <a href="#"><img src="<?php echo assets('frontend'); ?>/images/team1.png" alt="team1" class="img-fluid w-100"></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="team_text">
                            <h3>Jiku</h3>
                            <h4>Web Designer</h4>
                        </div>

                    </div><!-- /. -->
                </div><!-- /. -->

                <div class="col-lg-4 col-sm-6 col-12 text-center">
                    <div class="team_main wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="team_img">
                            <a href="#"><img src="<?php echo assets('frontend'); ?>/images/team1.png" alt="team1" class="img-fluid w-100"></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="team_text">
                            <h3>Zahidul</h3>
                            <h4>Web Developer</h4>
                        </div>

                    </div><!-- /. -->
                </div><!-- /. -->

                <div class="col-lg-4 col-sm-6 col-12 text-center d-lg-none">
                    <div class="team_main wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="team_img">
                            <a href="#"><img src="<?php echo assets('frontend'); ?>/images/team1.png" alt="team1" class="img-fluid w-100"></a>
                            <a href="https://www.facebook.com/Zijzahidul"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="team_text">
                            <h3>Zij Jiku</h3>
                            <h4>Vue Js</h4>
                        </div>

                    </div><!-- /. -->
                </div><!-- /. -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section end -->
    <!-- Team Part End -->

    <!-- Feedback Part Start -->
    <section id="feedback_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 col-sm-12 text-center">
                    <div class="text_slider wow fadeInUp" data-wow-delay="0.2s">
                        <div class="text_one">
                            <p>It is the is very good. I never use such as good app ever. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text <span class="span_none"> of the printing and typesetting industry.Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s. So I highly recomended it.</span></p>
                            <img src="<?php echo assets('frontend'); ?>/images/star.png" alt="star" class="img-fluid m-auto">
                            <h3>John Doe</h3>
                        </div>
                        <div class="text_one">
                            <p>It is the is very good. I never use such as good app ever. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text <span class="span_none"> of the printing and typesetting industry.Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s. So I highly recomended it.</span></p>
                            <img src="<?php echo assets('frontend'); ?>/images/star.png" alt="star" class="img-fluid m-auto">
                            <h3>Harman Miller</h3>
                        </div>
                        <div class="text_one">
                            <p>It is the is very good. I never use such as good app ever. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text <span class="span_none"> of the printing and typesetting industry.Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s. So I highly recomended it.</span></p>
                            <img src="<?php echo assets('frontend'); ?>/images/star.png" alt="star" class="img-fluid m-auto">
                            <h3>Morgan Doe</h3>
                        </div>
                        <div class="text_one">
                            <p>It is the is very good. I never use such as good app ever. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text <span class="span_none"> of the printing and typesetting industry.Lorem Ipsum has been the indusy's standard dummy text ever since the 1500s. So I highly recomended it.</span></p>
                            <img src="<?php echo assets('frontend'); ?>/images/star.png" alt="star" class="img-fluid m-auto">
                            <h3>John Toi</h3>
                        </div>

                    </div><!-- /. -->
                </div><!-- /.text_slider -->
            </div><!-- /.row -->

            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-12 col-sm-12">
                    <div class="row client_slider">
                        <div class="col-lg-4">
                            <div class="circle_img">
                                <img src="<?php echo assets('frontend'); ?>/images/user_img01.png" alt="user_img01" class="img-fluid w-100">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="circle_img">
                                <img src="<?php echo assets('frontend'); ?>/images/user_img02.png" alt="user_img02" class="img-fluid w-100">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="circle_img">
                                <img src="<?php echo assets('frontend'); ?>/images/user_img03.png" alt="user_img01" class="img-fluid w-100">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="circle_img">
                                <img src="<?php echo assets('frontend'); ?>/images/user_img04.png" alt="user_img04" class="img-fluid w-100">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.section end -->
    <!-- Feedback Part End -->

    <!-- Company Part Start -->
    <section id="company_part">
        <div class="container">
            <h6 class="company_text">Company Partner</h6>
            <div class="row slide_main">

                <div class="col-lg-12 wow fadeInUp" data-wow-duration="6s">
                    <div class="slider_img">
                        <a href="#"><img src="<?php echo assets('frontend'); ?>/images/3docean.png" alt="slide1" class="img-fluid w-100"></a>
                    </div><!-- /. -->
                </div><!-- /. -->
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="5s">
                    <div class="slider_img">
                        <a href="#"><img src="<?php echo assets('frontend'); ?>/images/audiojungle.png" alt="slide1" class="img-fluid w-100"></a>
                    </div><!-- /. -->
                </div><!-- /. -->
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="4s">
                    <div class="slider_img">
                        <a href="#"><img src="<?php echo assets('frontend'); ?>/images/codecanyon.png" alt="slide1" class="img-fluid w-100"></a>
                    </div><!-- /. -->
                </div><!-- /. -->
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="3s">
                    <div class="slider_img">
                        <a href="#"><img src="<?php echo assets('frontend'); ?>/images/Envato.png" alt="slide1" class="img-fluid w-100"></a>
                    </div><!-- /. -->
                </div><!-- /. -->
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="2s">
                    <div class="slider_img">
                        <a href="#"><img src="<?php echo assets('frontend'); ?>/images/videohive.png" alt="slide1" class="img-fluid w-100"></a>
                    </div><!-- /. -->
                </div><!-- /. -->
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="slider_img">
                        <a href="#"><img src="<?php echo assets('frontend'); ?>/images/photodune.png" alt="slide1" class="img-fluid w-100"></a>
                    </div><!-- /. -->
                </div><!-- /. -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section end -->
    <!-- Company Part Start -->

    <!-- Counter Part Start -->
    <section id="counter_part">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="counter_text wow fadeInUp" data-wow-duration="1.5s">
                        <h3 class="counter">140</h3>
                        <p>Satisfied Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="counter_text wow fadeInUp" data-wow-duration="2s">
                        <h3 class="counter">72</h3>
                        <p>Reviewed Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="counter_text wow fadeInUp" data-wow-duration="2.5s">
                        <h3 class="counter">31</h3>
                        <p>Cup of Tea</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="counter_text wow fadeInUp" data-wow-duration="3s">
                        <h3 class="counter">261</h3>
                        <p>Milestone Clients</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Counter Part End -->

    <!-- Contact Part Start -->
    <section id="contact_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="contact-heading mb-20">
                        <span>information</span>
                        <h2>Contact Information</h2>
                    </div>
                    <div class="contact-text">
                        <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                        <h5>OFFICE IN <span>MUNSHIGANJ</span></h5>
                        <div class="contact-list">
                            <ul>
                                <li><i class="fas fa-map-marker"></i><span>Address :</span>Patuakhali,Barisal.</li>
                                <li><i class="fas fa-headphones"></i><span>Phone :</span>+88-017-148-950-74</li>
                                <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>safzahidul&#64;gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="contact-form">
                        <form action="#">
                            <input type="text" placeholder="Enter Name">
                            <input type="email" placeholder="Enter Email">
                            <textarea name="message" id="message" placeholder="Enter Message "></textarea>
                            <button class="btn btn_button">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Part End -->