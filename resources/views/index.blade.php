<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My1need | Home</title>

    <!-- favicon icon -->
    <!-- {{ asset('assets/images/my1need_logo.svg') }} -->
    <!-- <link rel="shortcut icon" href="{{ asset('landing_page_assets/images/my1_need_logo.svg') }}" type="image/x-icon"> -->
    <link rel="shortcut icon" href="{{ asset('assets/images/my1need_logo.svg') }}">

    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page_assets/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page_assets/vendors/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page_assets/vendors/elegant-icon/elegant-icon-style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page_assets/vendors/animation/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page_assets/vendors/flex/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page_assets/vendors/magnify-pop/magnific-popup.css') }}">

    <!-- custom -->
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/landing.css') }}">
    


</head>

<body>

    <div class="body_wrapper">
        <header class="oppi_header my1need_header oppi_header_transparent oppi_menu_center oppi_health_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <nav class="navbar navbar-expand-lg header_nav">
                            <a class="navbar-brand logo" href="home_business_apps.html">
                                <img src="{{ asset('landing_page_assets/images/my1_need_logo.svg') }}" alt="logo">
                                <img src="{{ asset('landing_page_assets/images/my1_need_logo.svg') }}" alt="logo">
                            </a>
                            <div class="my1need_header_menu mobile-button" id="oppi_header_menu">
                                <a class="oppi_try_for_free oppi_btn_right download_btn" href="{{ route('waitlist') }}">Download App</a>
                            </div>

                            <div class="collapse navbar-collapse oppi_header_menu my1need_header_menu"
                                id="oppi_header_menu">
                                <a class="oppi_try_for_free oppi_btn_right download_btn" href="{{ route('waitlist') }}">Download App</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- oppi_header -->


        <section class="oppi_banner oppi_health_banner my1need_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12 col-12">
                        <div class="oppi_banner_content my1need_banner_content">
                            <h1 class="banner_title wow fadeInUp" data-wow-delay="0.2s">Here, <br> Your Needs <br> Meet
                                Solutions Privately.</h1>
                            <p class="banner_para wow fadeInUp" data-wow-delay="0.3s">My1need connects you
                                pseudonymously to people who will provide solutions to your top need. <br><span
                                    style="color: #FE5430; font-style: italic;"> Solutions can be free or for a
                                    fee.</span></p>
                            <div class="oppi_btn_group my1_need_btn_group wow fadeInUp" data-wow-delay="0.4s">
                                <a href="{{ route('create-purpose') }}" class="oppi_dbtn post_need_btn"
                                    style="border: none !important;">Post Your
                                    #1need</a>
                                &nbsp;
                                <a href="{{ route('create-solutions') }}" 
                                    class="oppi_dbtn solve_need_btn" style="color: #070D2D; background: #fff;">Solve
                                    People’s
                                    #1need</a>
                            </div>
                            <p class="banner_para already_have" style="color: #070D2D;">Posted #1need? <a
                                    href="{{ route('create-offers') }}">View Offers</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-12 col-12">
                        <div class="oppi_health_banner_img my1need_banner_img">
                            <div class="img_inner">
                                <div class="img_mobile">
                                    <img src="{{ asset('landing_page_assets/images/my1need_banner.svg') }}" alt="iphone"
                                        width="100%" data-parallax='{"x": 0, "y": 20}'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- oppi_banner -->

        <section class="oppi_health_featured my1_need_section_2">
            <div class="container">
                <div class="row oppi_h_service_item d-flex align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 order_3">
                        <div class="oppi_h_service_item_img wow fadeInLeft"
                            style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="item_img_inner app_demo">
                                <img src="{{ asset('landing_page_assets/images/mobile_app_demo.svg') }}"
                                    alt="service img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 order_1">
                        <div class="oppi_h_service_item_content my1need_service_item_content wow fadeInRight"
                            style="visibility: visible; animation-name: fadeInRight;">
                            <h4 class="ser_title">my1need mobile app</h4>
                            <div class="h_ser_item">
                                <div class="h_ser_con">
                                    <h5 style="color: #070D2D;"><b> How It Works </b></h5>
                                    <ul class="app_features">
                                        <li><b> Post your #1need pseudonymously</b></li>
                                        <li><b> Connect with those who can help you</b></li>
                                        <li><b>Browse people’s #1needs and offer help</b></li>
                                        <li><b>Help might be for free or for the right pay</b></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-6 col-sm-12 col-12 order_2">
                        <div class="container get_the_app">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-12 available_soon">
                                    <div class="oppi_call_to_action_content my1need_call_to_action">
                                        <h4 class="call_title wow fadeInUp" data-wow-delay="0.2s"
                                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                            Available
                                            on Android and iOS Devices Soon</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="oppi_call_btn_group my1need_call_to_action_btn  text-center">
                                        <a href="{{ route('waitlist') }}" class="oppi_dbtn btn_solid_color wow fadeInUp"
                                            data-wow-delay="0.6s"
                                            style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Join
                                            Waitlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- oppi_health_featured -->

        <section class="oppi_fitness_wrap my1_need_section_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="oppi_fitness_content my1_need_section_3_left">
                            <h2 class="sec_title_2 wow fadeInUp" data-wow-delay="0.4s">OUR MISSION IS SIMPLE</h2>
                            <p class="f_sec_para wow fadeInUp" data-wow-delay="0.6s">Connect individuals who have
                                specific needs and those who can provide solutions,
                                whether through goods, services or information.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="oppi_fitness_img_content text-right ">
                            <div class="fitness_r_img wow fadeInRight my1_need_section_3_right" data-wow-delay="0.2s">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-4">
                                        <div class="text-center solutions_needs">
                                            <img src="{{ asset('landing_page_assets/images/play_station.svg') }}" alt=""
                                                width="30%">

                                            <p>Goods</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-4">
                                        <div class="text-center solutions_needs">
                                            <img src="{{ asset('landing_page_assets/images/money_bag.svg') }}" alt=""
                                                width="30%">
                                            <p>Services</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-4">
                                        <div class="text-center solutions_needs">
                                            <img src="{{ asset('landing_page_assets/images/information.svg') }}" alt=""
                                                width="30%">
                                            <p>Information</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-4">
                                        <div class="text-center solutions_needs">
                                            <img src="{{ asset('landing_page_assets/images/fast_food.svg') }}" alt=""
                                                width="30%">
                                            <p>Food</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-4">
                                        <div class="text-center solutions_needs">
                                            <img src="{{ asset('landing_page_assets/images/shelter.svg') }}" alt=""
                                                width="30%">
                                            <p>Shelter</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-4">
                                        <div class="text-center solutions_needs">
                                            <img src="{{ asset('landing_page_assets/images/health.svg') }}" alt=""
                                                width="30%">
                                            <p>Health</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 col-4">
                                        <div class="text-center solutions_needs">
                                            <img src="{{ asset('landing_page_assets/images/clothing.svg') }}" alt=""
                                                width="30%">
                                            <p>Clothing</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 col-4">
                                        <div class="text-center solutions_needs">
                                            <img src="{{ asset('landing_page_assets/images/logistics.svg') }}" alt=""
                                                width="30%">
                                            <p>Logistics</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-4">
                                        <div class="text-center solutions_needs">
                                            <img src="{{ asset('landing_page_assets/images/people-line.svg') }}" alt=""
                                                width="35%">
                                            <p>Social & Lifestyle</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                                        <div class="text-center" style=" margin-top: 1rem;">
                                            <p class="need_solution_p need_request">Do you need Something From People?</p>
                                            <a href="{{ route('create-purpose') }}"
                                                class="oppi_dbtn need_solution_btn"
                                                style="border: none !important;">Post #1need</a>
                                        </div>

                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                                        <div class="text-center" style=" margin-top: 1rem;">
                                            <p class="need_solution_p">Can you Do Something For People?</p>
                                            <a href="{{ route('create-solutions') }}"
                                                class="oppi_dbtn need_solution_btn"
                                                style="border: none !important; background: #fff; color: #070D2D;">Solve
                                                #1need</a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- oppi_fitness_wrap -->



        <footer class="oppi_footer_wrap oppi_footer_two footer_dark my1need_footer">
            <div class="oppi_footer_top">
                <div class="container">
                    <div class="oppi_footer_top_inner">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                                <div class="oppi_footer_widget my1need_footer_inner">
                                    <a href="#" class="oppi_footer_logo my1need_footer_logo">
                                        <img src="{{ asset('landing_page_assets/images/footer_logo.svg') }}" alt="logo">
                                    </a>
                                    <h3 class="footer_header"> The Foundations of Our Vision </h3>
                                    <ul class="app_features footer_app_features">
                                        <li><b> Everyone needs something </b></li>
                                        <li><b> Someone out there can provide a solution</b></li>
                                        <li><b>Finding this provider should be easier, faster</b></li>
                                        <li><b>And as private as possible</b></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-12 md_none">
                                <div class="middle_line"></div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                <div class="oppi_footer_widget my1need_footer_widget text-right">
                                    <h4 class="oppi_footer_title">Contact Us</h4>
                                    <ul class="oppi_footer_menu">
                                        <li><a href="#">hello@my1need.com</a></li>
                                    </ul>
                                </div>

                                <div class="oppi_footer_widget my1need_footer_widget text-right">
                                    <h4 class="oppi_footer_title">Follow Us</h4>
                                    <ul class="oppi_footer_menu">
                                        <li>
                                            <a class="socials" href="#"><img
                                                    src="{{ asset('landing_page_assets/images/instagram.svg') }}"
                                                    alt=""></a>
                                            <a class="socials" href="#"><img
                                                    src="{{ asset('landing_page_assets/images/twitter.svg') }}"
                                                    alt=""></a>
                                            <a class="socials" href="#"><img
                                                    src="{{ asset('landing_page_assets/images/facebook.svg') }}"
                                                    alt=""></a>
                                            <a class="socials"  href="#"><img
                                                    src="{{ asset('landing_page_assets/images/linkedin.svg') }}"
                                                    alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="oppi_footer_widget my1need_footer_widget text-right">
                                    <h4 class="oppi_footer_title">Legal Stuff</h4>
                                    <ul class="oppi_footer_menu">
                                        <li><a href="#">Terms of Service</a> <span
                                                style="font-weight: 500; font-size: 1.5rem;">|</span> <a
                                                href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="oppi_footer_bottom">
                <div class="container">
                    <div class="oppi_footer_bottom_inner">
                        <div class="row d-flex align-items-center col_reverse">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="oppi_copy_right">
                                    <p class="copy_right_text text-center">Copyright ©️ 2024 My1need - All Rights
                                        Reserved
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- oppi_footer_wrap -->
    </div>

    <script src="{{ asset('landing_page_assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('landing_page_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing_page_assets/vendors/slick/slick.min.js') }}"></script>
    <script src="{{ asset('landing_page_assets/vendors/simple-icon/iconify.min.js') }}"></script>
    <script src="{{ asset('landing_page_assets/vendors/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landing_page_assets/vendors/flex/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('landing_page_assets/vendors/sckroller/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('landing_page_assets/vendors/stellar/jquery.stellar.js') }}"></script>
    <script src="{{ asset('landing_page_assets/vendors/magnify-pop/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing_page_assets/js/main.js') }}"></script>

</body>

</html>
