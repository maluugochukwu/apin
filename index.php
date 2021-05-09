<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 7oroof.com/demos/medcity/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 May 2021 14:39:06 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
  <link href="assets/images/favicon/favicon-150x150.png" rel="icon">
  <title>APIN</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .slick-arrow{
      color:#ffffff;
    }
    .member__img img{
      /* max-width:80%; */
      width:370px;
      height: 380px;
      border:1px solid #ccc;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <button class="miniPopup-emergency-trigger" type="button">24/7 Support</button>
                    <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                      <div class="emergency__icon">
                        <i class="icon-call3"></i>
                      </div>
                      <a href="tel:+201061245741" class="phone__number">
                        <i class="icon-phone"></i> <span>+2 01061245741</span>
                      </a>
                      <p>Please feel free to contact our friendly reception staff with any general or medical enquiry.
                      </p>
                      <a href="appointment.html" class="btn btn__secondary btn__link btn__block">
                        <span>Contact Us</span> <i class="icon-arrow-right"></i>
                      </a>
                    </div><!-- /.miniPopup-emergency -->
                  </li>
                  <li>
                    <i class="icon-phone"></i><a href="tel:+5565454117">Hot Line: (002) 01061245741</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="#">Location: AdoEkiti, Oyo State</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00 pm</a>
                  </li>
                </ul><!-- /.contact__list -->
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul><!-- /.social-icons -->
                  <form class="header-topbar__search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index-2.html">
            <img src="assets/images/logo/logo.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo.png" class="logo-dark" style="max-width:60%" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item">
                <a href="#" data-toggle="dropdown" class="nav__item-link active">Home</a>
                
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">About Us</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="about-us.html" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="services.html" class="nav__item-link">Board of Trustee/Director</a>
                  </li><!-- /.nav-item -->
                  
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="#"  class="nav__item-link">Practice</a>
                
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Expertise</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="blog.html" class="nav__item-link">IRB</a>
                  </li><!-- /.nav-item -->
                  
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Career</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="shop.html" class="nav__item-link">Working with APIN</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="shop-single-product.html" class="nav__item-link">Vacancies</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="cart.html" class="nav__item-link">Volunteer</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Media Center</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="shop.html" class="nav__item-link">News</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="shop-single-product.html" class="nav__item-link">Resources</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="cart.html" class="nav__item-link">Gallery</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="cart.html" class="nav__item-link">Events</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            
            <a href="appointment.html" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-calendar"></i>
              <span>Contct Us</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h">
          <div class="bg-img"><img src="assets/images/sliders/hepatitis-dark.png" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title" style="color:#b3d55e">APIN IS IN THE NEWS</h2>
                  <p class="slide__desc" style="color:#ffffff">The health and well-being of our patients and their health care team will
                    always be our priority, so we follow the best practices for cleanliness.</p>
                  
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h">
          <div class="bg-img"><img src="assets/images/sliders/2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title">All Aspects Of Medical Practice</h2>
                  <p class="slide__desc">The health and well-being of our patients and their health care team will
                    always be our priority, so we follow the best practices for cleanliness.</p>
                  <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                    <!-- feature item #1 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-heart"></i>
                      </div>
                      <h2 class="feature__title" style="color:#fff">Examination</h2>
                    </li><!-- /.feature-item-->
                    <!-- feature item #2 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-medicine"></i>
                      </div>
                      <h2 class="feature__title">Prescription </h2>
                    </li><!-- /.feature-item-->
                    <!-- feature item #3 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-heart2"></i>
                      </div>
                      <h2 class="feature__title">Cardiogram</h2>
                    </li><!-- /.feature-item-->
                    <!-- feature item #4 -->
                    <li class="feature-item">
                      <div class="feature__icon">
                        <i class="icon-blood-test"></i>
                      </div>
                      <h2 class="feature__title">Blood Pressure</h2>
                    </li><!-- /.feature-item-->
                  </ul><!-- /.features-list -->
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ============================
        contact info
    ============================== -->
  

    <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout2 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 ">
            <div class="heading-layout2">
              <h3 class="heading__title mb-60">Public Health NGO committed to reduced disease burden and impact mitigation in Nigeria and Africa.</h3>
            </div><!-- /heading -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="text-with-icon">
              <!-- <div class="text__icon">
                <i class="icon-doctor"></i>
              </div> -->
              <div class="text__content">
                <!-- <p class="heading__desc font-weight-bold color-secondary mb-30">Our mission is to provide cutting-edge, innovative & sustainable approaches to address the disease of public health importance through effective program management, service delivery, capacity building, research, strategic information & advocacy in partnership with other stakeholders. -->
                </p>
                <!-- <a href="doctors-timetable.html" class="btn btn__secondary btn__rounded mb-70">
                  <span>Find A Doctor</span> <i class="icon-arrow-right"></i>
                </a> -->
              </div>
            </div>
            <div class="video-banner-layout2 bg-overlay">
              <img src="assets/images/ceo-748x768.jpg" alt="about" class="w-100">
              <a class="video__btn video__btn-white popup-video" href="#">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <!-- <span class="video__btn-title color-white">Watch Our Video!</span> -->
              </a>
            </div><!-- /.video-banner -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="about__text bg-white">
              <p class="heading__desc mb-30">Our mission is to provide cutting-edge, innovative & sustainable approaches to address the disease of public health importance through effective program management, service delivery, capacity building, research, strategic information & advocacy in partnership with other stakeholders.
              </p>
              <p class="heading__desc mb-30">We will work with you to develop individualised care plans, including
                management of
                chronic diseases. We are committed to being the region’s premier healthcare network providing patient
                centered care that inspires clinical and service excellence.</p>
              <ul class="list-items list-unstyled">
                <li>We conduct a range of tests to help us work out why you're not feeling well and determine the
                  right
                  treatment for you.</li>
                <li>Our expert doctors, nurses and allied health professionals manage patients with a broad range of
                  medical issues.
                </li>
                <li>We offer a wide range of care and support to our patients, from diagnosis to treatment and
                  rehabilitation.
                </li>
              </ul>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout1 services-carousel">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-60">
              <h2 class="heading__subtitle">&nbsp;</h2>
              <h3 class="heading__title">Our core area of expertise.</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <!-- service item #1 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-head"></i>
                  <i class="icon-head"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">HEALTH MANAGEMENT INFORMATION SYSTEM</h4>
                  <p class="service__desc">Some neurologists receive subspecialty training focusing on a particular area
                    of
                    the fields, these training programs are called fellowships, and are one to two years.
                  </p>
                  <ul class="list-items list-items-layout1 list-unstyled">
                    <li>Neurocritical Care</li>
                    <li>Neuro Oncology</li>
                    <li>Geriatric Neurology</li>
                  </ul>
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              <!-- service item #2 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-heart"></i>
                  <i class="icon-heart"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">IMPLEMENTING AND TECHNICAL ASSISTANCE</h4>
                  <p class="service__desc">All cardiologists study the disorders of the heart, but the study of adult
                    and
                    child heart disorders are trained to take care of small children and adult heart disease.
                  </p>
                  <ul class="list-items list-items-layout1 list-unstyled">
                    <li>Neurocritical Care</li>
                    <li>Neuro Oncology</li>
                    <li>Geriatric Neurology</li>
                  </ul>
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              <!-- service item #3 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-microscope"></i>
                  <i class="icon-microscope"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">HUMAN RESOURCE FOR TRAINING AND CAPACITY BUILDING</h4>
                  <p class="service__desc">Pathology is the study of disease, it is the bridge between science and
                    medicine.
                    Also it underpins every aspect of patient care, from diagnostic testing and treatment.
                  </p>
                  <ul class="list-items list-items-layout1 list-unstyled">
                    <li>Surgical Pathology</li>
                    <li>Histopathology</li>
                    <li>Cytopathology </li>
                  </ul>
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              <!-- service item #4 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-dropper"></i>
                  <i class="icon-dropper"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">RESEARCH MONITORING AND EVALUATION</h4>
                  <p class="service__desc">Analyzing the radon or radon progeny concentrations with passive devices, or
                    the
                    act of calibrating radon or radon progeny measurement devices.
                  </p>
                  <ul class="list-items list-items-layout1 list-unstyled">
                    <li>Newborn Care</li>
                    <li>Umbilical Cord Appearance </li>
                    <li>Repositioning Techniques</li>
                  </ul>
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              <!-- service item #5 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-heart3"></i>
                  <i class="icon-heart3"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">COMMUNITY DIRECTED INTERVENTIONS</h4>
                  <p class="service__desc">Pediatric providers see patients from birth into early adulthood to make sure
                    children achieve stay healthy. Our care includes preventive health checkups.
                  </p>
                  <ul class="list-items list-items-layout1 list-unstyled">
                    <li>Clinical laboratory</li>
                    <li>Research Analyst</li>
                    <li>Quality Assurance</li>
                  </ul>
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
              <!-- service item #6 -->
              <div class="service-item">
                <div class="service__icon">
                  <i class="icon-heart2"></i>
                  <i class="icon-heart2"></i>
                </div><!-- /.service__icon -->
                <div class="service__content">
                  <h4 class="service__title">ORGANIZATION DEVELOPMENT FOR HOSPITALS, CSOS</h4>
                  <p class="service__desc">For people requiring additional follow up, the Cardiac Clinic provides rapid
                    access to professionals specialized in diagnosing and treating heart disease.
                  </p>
                  <ul class="list-items list-items-layout1 list-unstyled">
                    <li>Macular degeneration</li>
                    <li>Diabetic retinopathy</li>
                    <li>Excessive tearing</li>
                  </ul>
                  <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__content -->
              </div><!-- /.service-item -->
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    <!-- ========================
        Notses
    =========================== -->
    

    <!-- ======================
    Features Layout 2
    ========================= -->
    <section class="features-layout2 pt-130 bg-overlay bg-overlay-primary">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
            <div class="heading__layout2 mb-50">
              <h3 class="heading__title color-white">Medcity Has Touched The Lives Of Patients & Providing Care for The
                Sickest In Our Community.</h3>
            </div>
          </div><!-- /col-lg-5 -->
        </div><!-- /.row -->
        <div class="row mb-100">
          <div class="">
          <div class="slick-carousel"
              data-slick='{"slidesToShow": 2, "slidesToScroll": 2, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 1}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <div class="bg-white p-1">
                <img src="assets/images/team/1.jpg" alt="member img">
                <h3>Facebook</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut odit aliquam vitae, incidunt aperiam soluta eveniet debitis cupiditate laborum autem voluptate odio reprehenderit dolorum accusamus quas vero asperiores rerum dignissimos!</p>
              </div>
              <div class="bg-white p-1">
              <img src="assets/images/team/1.jpg" alt="member img">
                <h3>Twitter</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate eos similique nulla cum ad, voluptates laborum debitis temporibus, ut ea ipsum culpa exercitationem officiis itaque porro. Unde qui officiis maiores.</p>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
        
        <div class="row">
          <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
            <!-- <p class="font-weight-bold color-gray mb-0">We hope you will allow us to care for you and strive to be the
              first and best choice for healthcare.
              <a href="#" class="color-secondary">
                <span>Contact Us For More Information</span> <i class="icon-arrow-right"></i>
              </a>
            </p> -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 2 -->

    <!-- ======================
      Team
    ========================= -->
    <section class="team-layout2 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h3 class="heading__title">Meet Our Team</h3>
              <p class="heading__desc">Our administration and support staff all have exceptional people skills and
                trained to assist you with all medical enquiries.
              </p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <!-- Member #1 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/ceo.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">DR. PROSPER OKONKWO</a></h5>
                  <p class="member__job">CEO</p>
                  <!-- <p class="member__desc">Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane
                    University prior to attending St George's University School of Medicine</p> -->
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
              <!-- Member #2 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/dr_ify_ii.png" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">DR. IFEYINWA ONWUATUELO</a></h5>
                  <p class="member__job">Cardiology Specialist</p>
                  <!-- <p class="member__desc">Brian specializes in treating skin, hair, nail, and mucous membrane. He also
                    address cosmetic issues, helping to revitalize the appearance of the skin</p> -->
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
              <!-- Member #3 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/dr_jay_osi_samuels.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">DR. JAY OSI SAMUELS</a></h5>
                  <p class="member__job">Pediatrician</p>
                  <!-- <p class="member__desc">Andaloro graduated from medical school and completed 3 years residency program
                    in pediatrics. She passed rigorous exams by the American Board of Pediatrics.</p> -->
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
              <!-- Member #4 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/Eke-Ofuche.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">Dupree Black</a></h5>
                  <p class="member__job">Urologist</p>
                  <!-- <p class="member__desc">Black diagnose and treat diseases of the urinary tract in both men and women.
                    He
                    also diagnose and treat anything involving the reproductive tract in men.</p> -->
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
              <!-- Member #5 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/Mr-Femi-Owolagba_ii.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">Markus skar</a></h5>
                  <p class="member__job">Laboratory</p>
                  <!-- <p class="member__desc">Skar play a very important role in your health care. People working in the
                    clinical laboratory are responsible for conducting tests that provide crucial information.</p> -->
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
              <!-- Member #6 -->
              <div class="member">
                <div class="member__img">
                  <img src="assets/images/team/mrs-remi-olaitan.jpg" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <h5 class="member__name"><a href="doctors-single-doctor1.html">Kiano Barker</a></h5>
                  <p class="member__job">Pathologist </p>
                  <!-- <p class="member__desc">Barker help care for patients every day by providing their doctors with the
                    information needed to ensure appropriate care. He also valuable resources for other physicians.</p> -->
                  <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <ul class="social-icons list-unstyled mb-0">
                      <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                    </ul><!-- /.social-icons -->
                  </div>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Team -->

    <!-- ======================
     Work Process 
    ========================= -->
    

    <!-- ========================= 
      Testimonials layout 2
      =========================  -->
    <section class="testimonials-layout2 pt-130 pb-40">
      <div class="container">
        <div class="testimonials-wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="heading-layout2">
                <h3 class="heading__title">Inspiring Stories!</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
              </div><!-- /.slick-carousel -->
              <div class="slider-nav mb-60">
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sami Wade</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Ahmed</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sonia Blake</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
              </div><!-- /.slider-nav -->
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
        </div><!-- /.testimonials-wrapper -->
      </div><!-- /.container -->
    </section><!-- /.testimonials layout 2 -->

    <!-- ========================
       gallery
      =========================== -->
    

    <!-- ==========================
        contact layout 3
    =========================== -->
    <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
      <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="contact-panel mb-50">
              <form class="contact-panel__form" method="post" action="http://7oroof.com/demos/medcity/assets/php/contact.php" id="contactForm">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Contact Us Today</h4>
                    <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly reception staff
                      with any general or medical enquiry. Our doctors will receive or return any urgent calls.
                    </p>
                  </div>
                  
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-news form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-email form-group-icon"></i>
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea name=""  class="form-control" id="" ></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                      <span>Submit</span> <i class="icon-arrow-right"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div>
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading heading-light mb-30">
              <h3 class="heading__title mb-30">Helping Patients From Around the Globe!!</h3>
              <p class="heading__desc">Our staff strives to make each interaction with patients clear, concise, and
                inviting. Support the important work of Medicsh Hospital by making a much-needed donation today.
              </p>
            </div>
            <div class="d-flex align-items-center">
              <a href="contact-us.html" class="btn btn__white btn__rounded mr-30">
                <i class="fas fa-heart"></i> <span>Make A Gift</span>
              </a>
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title color-white">Play Video</span>
              </a>
            </div>
            <div class="text__block">
              <p class="text__block-desc color-white font-weight-bold">We provide a comprehensive range of plans for
                families and individuals at every stage of life, with annual limits ranging from £1.5m to unlimited.</p>
              <div class="sinature color-white">
                <span class="font-weight-bold">Martin Qube</span><span>, Medcity Manager</span>
              </div>
            </div><!-- /.text__block -->
            <div class="slick-carousel clients-light mt-20"
              data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="assets/images/clients/1.png" alt="client">
                <img src="assets/images/clients/1.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/2.png" alt="client">
                <img src="assets/images/clients/2.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/3.png" alt="client">
                <img src="assets/images/clients/3.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/4.png" alt="client">
                <img src="assets/images/clients/4.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/5.png" alt="client">
                <img src="assets/images/clients/5.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/6.png" alt="client">
                <img src="assets/images/clients/6.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/7.png" alt="client">
                <img src="assets/images/clients/7.png" alt="client">
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 3 -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <!-- <h2 class="heading__subtitle">Resource Library</h2> -->
              <h3 class="heading__title">APIN News Update</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/news-placeholder.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">General News</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 30, 2022</span>
                  <a class="post__meta-author" href="#">Dr Prosper Okonkwo</a>
                </div>
                <h4 class="post__title"><a href="#">PEPFAR and Health Systems Transformation in Nigeria</a></h4>

                <p class="post__desc">HIV diagnosis in Sub Saharan Africa in the nineties and early 2000s was literally a death sentence. This was either due to one or a combination of ignorance, denial, and weak health systems....
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Infectious</a><a href="#">Tips</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 30, 2022</span>
                  <a class="post__meta-author" href="#">John Ezak</a>
                </div>
                <h4 class="post__title"><a href="#">Unsure About Wearing a Face Mask? Here’s How and Why</a></h4>
                <p class="post__desc">That means that you should still be following any shelter-in-place orders in your
                  community. But when you’re venturing out to the grocery store, pharmacy or hospital..
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Life Style</a><a href="#">Nutrition</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 28, 2022</span>
                  <a class="post__meta-author" href="#">Saul Wade</a>
                </div>
                <h4 class="post__title"><a href="#">Tips for Eating Healthy When You’re Working From Home </a></h4>

                <p class="post__desc">It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a
                  condition that’s certainly true if you test positive for COVID-19, or are presumed to be positive...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
              <div class="footer-widget-about">
                <img src="assets/images/logo/logo.png" alt="logo" class="mb-30">
                <p class="color-gray">Our goal is to deliver quality of care in a courteous, respectful, and
                  compassionate manner. We hope you will allow us to care for you and strive to be the first and best
                  choice for your family healthcare.
                </p>
                <a href="appointment.html" class="btn btn__primary btn__primary-style2 btn__link">
                  <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Departments</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Neurology Clinic</a></li>
                    <li><a href="#">Cardiology Clinic</a></li>
                    <li><a href="#">Pathology Clinic</a></li>
                    <li><a href="#">Laboratory Analysis</a></li>
                    <li><a href="#">Pediatric Clinic</a></li>
                    <li><a href="#">Cardiac Clinic</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Links</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our CLinic</a></li>
                    <li><a href="#">Our Doctors</a></li>
                    <li><a href="#">News & Media</a></li>
                    <li><a href="#">Appointments</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="footer-widget-contact">
                <h6 class="footer-widget__title color-heading">Quick Contacts</h6>
                <ul class="contact-list list-unstyled">
                  <li>If you have any questions or need help, feel free to contact with our team.</li>
                  <li>
                    <a href="tel:01061245741" class="phone__number">
                      <i class="icon-phone"></i> <span>01061245741</span>
                    </a>
                  </li>
                  <li class="color-body">2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
                </ul>
                <div class="d-flex align-items-center">
                  <a href="contact-us.html" class="btn btn__primary btn__link mr-30">
                    <i class="icon-arrow-right"></i> <span>Get Directions</span>
                  </a>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <span class="fz-14">&copy; 2020 DataSoft, All Rights Reserved. With Love by</span>
              <a class="fz-14 color-primary" href="http://themeforest.net/user/7oroof">7oroof.com</a>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <nav>
                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Cookies</a></li>
                </ul>
              </nav>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from 7oroof.com/demos/medcity/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 May 2021 14:40:06 GMT -->
</html>