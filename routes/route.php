<?php

use App\Base\Router;
use App\Controllers\HomeController;
use App\Controllers\FrontendController;
use App\Controllers\Backend\BannerController;
use App\Controllers\Backend\SkillsController;
use App\Controllers\Backend\AboutMeController;
use App\Controllers\Backend\ServicesController;
use App\Controllers\Backend\PricePlanController;
use App\Controllers\Backend\MeetMyTeamController;
use App\Controllers\Backend\ContactFormController;
use App\Controllers\Backend\ContactInfoController;
use App\Controllers\Backend\TestimonialController;
use App\Controllers\Backend\CollaborationController;
use App\Controllers\Backend\CompanyMilestoneController;
use App\Controllers\Backend\FooterSocialIconController;

// HomeController
Router::get('home', [HomeController::class, 'home']);

// FrontendController
Router::get('/', [FrontendController::class, 'frontendHome']);
Router::get('login', [FrontendController::class, 'loginPage']);
Router::get('register', [FrontendController::class, 'registerPage']);

// AboutController
Router::get('about', [AboutMeController::class, 'about']);

//BannerController 
Router::get('bannerView', [BannerController::class, 'bannerView']);

// CollaborationController
Router::get('collaboration', [CollaborationController::class, 'collaboration']);

// CompanyMilestoneController
Router::get('company-milestone', [CompanyMilestoneController::class, 'companyMilestone']);

// ContactFormController
Router::get('contact-form', [ContactFormController::class, 'contactForm']);

// ContactInfoController
Router::get('contact-info', [ContactInfoController::class, 'contactInfo']);

// FooterSocialIconController
Router::get('footer-social-icon', [FooterSocialIconController::class, 'footerSocialIcon']);

// MeetMyTeamController
Router::get('meet-my-team', [MeetMyTeamController::class, 'meetMyTeam']);

// PricePlanController
Router::get('pricePlan', [PricePlanController::class, 'pricePlan']);

// ServicesController
Router::get('services', [ServicesController::class, 'services']);

// SkillsController
Router::get('skills', [SkillsController::class, 'skills']);

//TestimonialController
Router::get('testimonial', [TestimonialController::class, 'testimonial']);
