<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">

    <div class="slimscroll-menu" id="remove-scroll">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="<?php echo url('home') ?>" class="logo">
                <span>
                    <img src="<?php echo assets('backend'); ?>/images/logo.png" alt="" height="22">
                </span>
                <i>
                    <img src="<?php echo assets('backend'); ?>/images/logo_sm.png" alt="" height="28">
                </i>
            </a>
        </div>

        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="<?php echo assets('backend'); ?>/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
            </div>
            <h5><a href="#">Maxine Kennedy</a> </h5>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Side-menu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="<?php echo url('/') ?>" target="_blank">
                        <i class="fa fa-firefox"></i><span> Frontend </span>
                    </a>
                </li>


                <li>
                    <a href="<?php echo url('home') ?>">
                        <i class="fa fa-desktop"></i><span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('about') ?>">
                        <i class="fa fa-info-circle"></i><span> AboutMe </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('bannerView') ?>">
                        <i class="fa fa-sliders"></i><span> Banner </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('collaboration') ?>">
                        <i class="fa fa-handshake-o"></i><span> Collaboration </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('company-milestone') ?>">
                        <i class="fa fa-building"></i><span> CompanyMilestone </span>
                    </a>
                </li>


                <li>
                    <a href="<?php echo url('contact-form') ?>">
                        <i class="fa fa-compress"></i><span> ContactForm </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('contact-info') ?>">
                        <i class="fa fa-compress"></i><span> ContactInfo </span>
                    </a>
                </li>


                <li>
                    <a href="<?php echo url('footer-social-icon') ?>">
                        <i class="fa fa-imdb"></i><span> FooterSocialIcon </span>
                    </a>
                </li>


                <li>
                    <a href="<?php echo url('meet-my-team') ?>">
                        <i class="fa fa-users"></i><span> Team Members </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('services') ?>">
                        <i class="fa fa-server"></i><span> Services </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('skills') ?>">
                        <i class="fa fa-skyatlas"></i><span> Skills </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo url('testimonial') ?>">
                        <i class="fa fa-user"></i><span> Testimonial </span>
                    </a>
                </li>


                <!-- <li>
                    <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Banner </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="">Banner View</a></li>
                    </ul>
                </li> -->


                <li>
                    <a href="index.html">
                        <i class="fi-power"></i><span> Logout </span>
                    </a>
                </li>


                <!-- <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">home</i>
                        <span class="menu-title">Dashboard</span>
                        <span class="badge badge-success">New</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logo.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">person</i>
                        <span class="menu-title">Logo</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="header.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">person</i>
                        <span class="menu-title">Header</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="social.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">people</i>
                        <span class="menu-title">Social Icon</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">account_circle</i>
                        <span class="menu-title">About Me</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="education.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">account_circle</i>
                        <span class="menu-title">Education</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="services_view.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">web_asset</i>
                        <span class="menu-title">Service View</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="protfolio_view.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">local_parking</i>
                        <span class="menu-title">Protfolio</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">build</i>
                        <span class="menu-title">Profile</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="exprience.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">weekend</i>
                        <span class="menu-title">Experience</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="customer.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">speaker_group</i>
                        <span class="menu-title">Customer Review</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="brand.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">streetview</i>
                        <span class="menu-title">Brand</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact_information.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">contacts</i>
                        <span class="menu-title">Contact Information</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="from.php">
                        <i class="material-icons" style="font-size:20px; margin-right: 7px; color:#999;">speaker_group</i>
                        <span class="menu-title">From Validation</span>
                    </a>
                </li>

                <li class="nav-item">
                    <i class="icon-person menu-icon"></i>
                    <a href="logout.php" class="btn btn-danger dtn-sm mx-5 my-2">LogOut</a>
                </li> -->







            </ul>

        </div>
        <!-- Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->