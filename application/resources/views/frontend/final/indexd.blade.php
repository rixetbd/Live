@extends('frontend.final.master2')

@section('meta_tag')
@include('meta::manager',[
'title' => 'Home || DiMarz',
'author' => 'Digital Marketing Zone',
'description' => 'Lead generation is the process of producing new sales leads through developing interest in a service
or product.',
'keywords' => 'Lead generation, service',
'image' => asset('uploads/banners/lead_generation.png'),
])
@endsection

@section('custom_css')
<link href="http://fonts.cdnfonts.com/css/neue-haas-grotesk-display-pro" rel="stylesheet">
<link rel="stylesheet" href="{{asset('final_front_assets/css/home/home-header2.css')}}">
<link rel="stylesheet" href="{{asset('final_front_assets/css/home/home-header2-responsive.css')}}">
<link rel="stylesheet" href="{{asset('final_front_assets/css/home/home-services2.css')}}">
<link rel="stylesheet" href="{{asset('final_front_assets/css/home/home-faq.css')}}">

<style>
    .table {
        border-color: transparent;
    }

    .table tr td {
        font-size: 15px;
        line-height: 25px;
        padding: 20px 20px;
        /* box-shadow: inset 3px 3px 6px #a2a3ab, inset -3px -3px 6px #ffffff; */
    }

    .table tr {
        background: rgb(255 255 255 / 42%)
    }

    .table tr:nth-child(1) {
        background: transparent
    }

    .focus_content h1 {
        font-size: 2.3rem;
        text-align: center
    }

    .focus_content .heading {
        font-size: 1.6rem;
    }

    #img_replace {
        background-size: cover;
        box-shadow: 3px 3px 6px #a2a3ab, -3px -3px 6px #ffffff;
        width: 100%;
        min-height: 150px;
        height: 150px;
        overflow: hidden;
        padding: 0;
    }

</style>

@endsection

@section('submenu')
<section class="d-none" id="section_pagination">
    <div class="container">
        <ul class="padding_l1">
            <li><a href="#">One</a></li>
            <li><a href="#">Two</a></li>
            <li><a href="#">Three</a></li>
            <li><a href="#">Four</a></li>
            <li><a href="#footer">Contact</a></li>
        </ul>
    </div>
</section>
@endsection

@section('content')
<!-- Home Header || Start -->
<section class="hero_area">
    <div class="container-fluid p-0" style="position: fixed;">
        <div class="top_div" style="background-color:#5A80A0">
            <div class="container">
                <h3>EMPLOYE SHORTAGE ?</h3>
                <h5>Think outside the corporate boundary.</h5>
                {{-- <a href="#" class="btn">Contact us</a> --}}
                <p class="text-white mt-4">We are ready to support you right away. <a href="#" class="btn">Contact
                        now</a></p>

            </div>
        </div>
        <div class="container-fluid submenu d-none" id="">
            <div class="container">
                {{-- <ul class="mb-0" style="list-style: none;">
                    <li><a href="#">One</a></li>
                    <li><a href="#">Two</a></li>
                    <li><a href="#">Three</a></li>
                    <li><a href="#">Four</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul> --}}
            </div>
        </div>
    </div>
</section>
<!-- Home Header || End -->



<!-- Home Scetion - Section Three || Start -->
<section class="section_part" style="padding-bottom: 10rem;">
    <div id="text2" class="container-fluid second_part">
        <div class="container-fluid focus_content">
            <div class="container content_text p-0">
                <div class="text_area pb-5">
                    <h1 class="py-5 mb-2" style="background: #c1ccdb;">DiMarz | Welcome To The Next-Gen BPO Services
                    </h1>
                    <div class="px-5 py-3">
                        <p>DiMarz provides next-gen BPO & Digital Services that help entrepreneurs and industries to
                            build
                            or expand their businesses. Our innovative solutions will soon become an essential part of
                            your
                            business arsenal, helping you to grow and succeed. We focus on client satisfaction – always
                            striving to exceed customer expectations.</p>

                        <p>With DiMarz, you'll have the power to develop custom solutions that address your clients'
                            specific needs. Our cutting-edge technology will help you streamline your process and
                            minimize
                            costs. Plus, our experienced team is dedicated to providing you with the most efficient
                            service
                            possible.</p>
                        <h2 class="mt-5">We Made Everything Smooth | Transparent | Easy To Use</h2>
                        <p>We built the system in a way that you will never feel any complexity while exploring our
                            site. We
                            tried to design and manage every industry, services and prices on our website in a way that
                            you
                            will feel comfortable to understand every aspect more easily and fluently.</p>
                        <p>We left everything transparent. Here we have briefly discussed every industry, service and
                            original prices so that you can compare our services with others and decide which is the
                            best
                            service for you. We believe in full transparency instead of playing hide n seek.</p>

                        <h2 class="mt-5">Top-Grade Support System | Welcome To DiMarz Family</h2>
                        <p>We have built a top-grade support and eco system considering our clients' needs. You will
                            get;
                            <ul class="padding_l1">

                                <li>24/7 Support System</li>
                                <li>Safe Payment</li>
                                <li>Free Consultation</li>
                                <li>Easy Understanding & Transparency</li>
                                <li>Clear-Cut Reporting</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"
            style="position: relative;display: flex;justify-content: center;align-items: center;z-index:1;">
            <div style="min-height: 2px;width:100%;background:#fff;"></div>
            <div class="arrows-container">
                <i class="fa fa-angle-down"></i>
                <div class="arrow-1 animated hinge infinite zoomIn"></div>
            </div>
        </div>

        <div class="container-fluid focus_content pb-5">
            <div class="container content_text mt-0">
                <div class="text_area p-5">
                    <h1 class="py-4">Safe || Committed || Sustainable Business Process Outsourcing Services</h1>
                    <p>DiMarz is well committed to the goal to provide the best possible business process services to
                        the
                        businesses. We serve several trendy industries; Software Industries, Health & Beauty Industries
                        and
                        more.</p>
                    <h2 class="mt-5">World-Class Digital Marketing Services</h2>
                    <p>Our Digital Marketing Services can help you to grow your revenue and engage more traffic to your
                        products
                        and make them come back to you for more. Our in-house Digital Marketers, SEO Experts and
                        Graphics
                        Designers are always ready to serve you in any industry you ask for!</p>
                    <h3 class="mt-5">Serving Competitive Industries with The Insurance of Growth</h3>
                    <p>We serve the most trending industries like Software Industry, Healthcare industry, Legal
                        Industry,
                        Fashion & Beauty, Retail Industry, E-Commerce Industry or Finance industry, we got everything
                        covered.
                        Though the industries are too much competitive and hard to survive for a business specially if
                        they are
                        new. Even big companies also have to spend a lot to survive the competition. But, don’t worry.
                        Our
                        modern solutions and ideas will help you to climb the ladder with ease.</p>
                    <h3 class="mt-5">Your Business is at Capable Hands</h3>
                    <p>Our modern and updated Business Process Outsourcing (BPO) services will help you grow your
                        business on a
                        multiple scale at a very affordable cost. If you are short on labor or a startup company wanting
                        to grow
                        your business to the next level, you can count on us. We will take care of your burden with our
                        professional outsourcers so that you don’t have to worry!
                    </p>

                </div>
            </div>
        </div>

        <div id="industry" style="padding-top:4rem;">
            <div class="container-fluid col-sm-12 col-md-12 mb-5" style="background-color: #C1CCDB;padding:4rem 0;">
                <div class="container">
                    <h3 class="text-uppercase style_text_2" style="font-size: 35px;">Industries We Serve</h3>
                </div>
            </div>
        </div>

        <div class="container" style="padding-bottom: 5.5rem;">
            <div class="row">
                <div class="col-sm-12 col-md-3 px-4 py-2  vh_150px">
                    <div class="glow-on-hover">
                        <div class="home_service_box">
                            <div class="img_box">
                                <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" alt="">
                                {{-- <h4>Software Industry</h4> --}}
                            </div>
                            <div class="content_box">
                                <h4>Software Industry</h4>
                                <p>We offer marketing services that will help your software industry prosper! Our
                                    services include but are not limited to: market research, website design, social
                                    promotion, and more. We know how to build a successful business. </p>
                            </div>
                            <div class="footer_box">
                                <a href="#" class="btn btn-sm button_slider_effect"><span>Read More...</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 px-4 py-2  vh_150px">
                    <div class="glow-on-hover">
                        <div class="home_service_box">
                            <div class="img_box">
                                <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-02.png')}}" alt="">
                            </div>
                            <div class="content_box">
                                <h4>Healthcare Industry</h4>
                                <p>We support the core elements of your healthcare IT infrastructure to keep you up and
                                    running
                                    when and where it matters most. We are proud to be a leading provider of outsourced
                                    healthcare IT services</p>
                            </div>
                            <div class="footer_box">
                                <a href="#" class="btn btn-sm button_slider_effect"><span>Read More...</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 px-4 py-2  vh_150px">
                    <div class="glow-on-hover">
                        <div class="home_service_box">
                            <div class="img_box">
                                <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-03.png')}}" alt="">
                            </div>
                            <div class="content_box">
                                <h4>Legal Industry</h4>
                                <p>We offer a multitude of services that can grow your law firm into a thriving
                                    practice!
                                    Our
                                    team can customize a multi-channel digital marketing strategy to achieve your
                                    specific
                                    firm
                                    goals.</p>
                            </div>
                            <div class="footer_box">
                                <a href="#" class="btn btn-sm button_slider_effect"><span>Read More...</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 px-4 py-2  vh_150px">
                    <div class="glow-on-hover">
                        <div class="home_service_box">
                            <div class="img_box">
                                <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-04.png')}}" alt="">
                            </div>
                            <div class="content_box">
                                <h4>Real Estate Industry</h4>
                                <p>Our experience and understanding of real estate help us leverage technology to
                                    provide
                                    Services like leads list Building, Graphics Design, Digital marketing, responsive
                                    website,
                                    and SEO, which will significantly enhance your ROI.</p>
                            </div>
                            <div class="footer_box">
                                <a href="#" class="btn btn-sm button_slider_effect"><span>Read More...</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 px-4 py-2  vh_150px">
                    <div class="glow-on-hover">
                        <div class="home_service_box">
                            <div class="img_box">
                                <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-05.png')}}" alt="">
                            </div>
                            <div class="content_box">
                                <h4>Fashion & Beauty</h4>
                                <p>Nowadays fashion & beauty industries are nothing without an online presence.
                                    Our expertise can help you to build a stunning website for your business and improve
                                    your
                                    online presence through our digital marketing services.
                                </p>
                            </div>
                            <div class="footer_box">
                                <a href="#" class="btn btn-sm button_slider_effect"><span>Read More...</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 px-4 py-2  vh_150px">
                    <div class="glow-on-hover">
                        <div class="home_service_box">
                            <div class="img_box">
                                <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-06.png')}}" alt="">
                            </div>
                            <div class="content_box">
                                <h4>Retail Industry</h4>
                                <p>Meet your customer needs and maintain online activities with our digital marketing
                                    and
                                    web-related Services. Find the right maintenance programs to keep you steady as you
                                    grow
                                    your customer base.</p>
                            </div>
                            <div class="footer_box">
                                <a href="#" class="btn btn-sm button_slider_effect"><span>Read More...</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 px-4 py-2  vh_150px">
                    <div class="glow-on-hover">
                        <div class="home_service_box">
                            <div class="img_box">
                                <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-07.png')}}" alt="">
                            </div>
                            <div class="content_box">
                                <h4>E-commerce Industry</h4>
                                <p>For more than 5 years, we have been helping So many clients improve their
                                    business-to-consumer marketing efforts and exceed their online goals.</p>
                            </div>
                            <div class="footer_box">
                                <a href="#" class="btn btn-sm button_slider_effect"><span>Read More...</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 px-4 py-2  vh_150px">
                    <div class="glow-on-hover">
                        <div class="home_service_box">
                            <div class="img_box">
                                <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-08.png')}}" alt="">
                            </div>
                            <div class="content_box">
                                <h4>Finance Industry</h4>
                                <p>Since differentiation in financial services is driven by technologies, we create
                                    incredibly
                                    compelling Websites for various banking and finance groups worldwide to help them
                                    create
                                    loyal engagements with consumers through mobile devices.</p>
                            </div>
                            <div class="footer_box">
                                <a href="#" class="btn btn-sm button_slider_effect"><span>Read More...</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Home Scetion - Section Three || End -->

<section class="container-fluid slogan_box slogan_dark py-5 section_part" style="z-index: 20;padding-top:10rem;">
    <div class="container">
        <h3>Our front office function as your back office</h3>
        <h5>The collective experience of our 5 year-old BPO company</h5>
    </div>
</section>


<!-- Home Scetion - Section Four || Start -->
<section class="section_part" style="" id="pricing">
    <div class="container-fluid col-sm-12 col-md-12 pb-2"
        style="background-color: #C1CCDB;padding-top: 4rem!important;">
        <div class="container pt-5 pb-4">
            <h3 class="text-uppercase style_text_2">Pricing</h3>
        </div>
    </div>
</section>

<section class="section_part" id="sub_serve" style="z-index:;">
    <div class="container-fluid d-flex" style="background-color: #C1CCDB;">



        <div class="container service_style_20 service_grp_hover">


            <div class="d-flex" id="service_grp_names">
                @forelse ($faq_service_name as $key=> $service_name)
                    <div class="service_grp_names me-2"
                    onmouseover="service_grp_names(`{{$service_name->id}}`)"
                    {{-- onmouseout="service_grp_names_out(`grp_one_menu{{$key}}`)" --}}
                    >{{$service_name->name}}</div>
                @empty
                    <div class="grp_one" onclick="ServiceNameClick()">No Service Availeble Now</div>
                @endforelse

                {{-- @for ($i = 0; $i < count($faq_service_name); $i++) --}}
                <div class="col-sm-12 col-md-12 p-4" id="service_grp_hover_part">
                    <h4 style="font-size:20px;">Choose Your Service</h4>
                    <hr style="margin: 0 0 10px 0;">
                    <div class="row" id="service_grp_names_list">
                        {{-- <div class="col-sm-12 col-md-6">
                            <div class="grp_one grp_one{{$service->id}}"
                                onclick="ServiceNameClick('{{$service->id}}', 'grp_one{{$service->id}}')">{{$service->name}}
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- @endfor --}}
            </div>


            {{-- <ul class="mb-0" style="background-color: #C1CCDB;" id="service_hover_action">
                @forelse ($faq_service_name as $service_name)
                    <li class="grp_one" id="grp_one{{$service_name->id}}" onclick="ServiceNameClick()">{{$service_name->name}}</li>
                @empty
                    <li class="grp_one" onclick="ServiceNameClick()">No Service Availeble Now</li>
                @endforelse
            </ul> --}}

            {{-- <div class="col-sm-12 col-md-12 p-4" id="service_grp_hover_part">
                <h4 style="font-size:20px;">Choose Your Service</h4>
                <hr style="margin: 0 0 10px 0;">
                <div class="row">
                    @forelse ($service_list as $service)
                    <div class="col-sm-12 col-md-6">
                        <div class="grp_one grp_one{{$service->id}}"
                            onclick="ServiceNameClick('{{$service->id}}', 'grp_one{{$service->id}}')">{{$service->name}}
                        </div>
                    </div>
                    @empty
                    <li class="grp_one">No Service</li>
                    @endforelse
                </div>
            </div> --}}

        </div>
    </div>

</section>


<section class="section_part" id="">
    <div class="container" id="service_col_main">
        <div class="row m-0">
            <div class="col-sm-12 col-md-12 sct_heading" id="sct_heading" style="margin-top: 10px;padding-bottom: 5px;padding-left: 0;">
                @if (count($service_list) != 0)
                    <p class="pt-3" id="service_list_title">Service List Title</p>
                @else
                @endif
                <div class="mb-0" style="border-bottom:1px solid #fff;" id="single_service_sub_nav">
                    <ul class="padding_l1">
                        <li class="btn_overview">Overview</li>
                        <li class="service_list_description">Description of services</li>
                        <li class="why_choose_dimarz">Why Choose DiMarz</li>
                        <li class="service_faq">FAQ</li>
                        <a href="#compare_packages">Compare Package</a>
                    </ul>
                </div>
            </div>


            <div class="service_col_one_2 d-none">
                <ul class="service_all_list" id="menu">
                    @forelse ($service_list as $service)
                    <li class="grp_one grp_one{{$service->id}}"
                        onclick="ServiceNameClick('{{$service->id}}', 'grp_one{{$service->id}}')">{{$service->name}}
                    </li>
                    @empty
                    <li class="grp_one">No Service</li>
                    @endforelse
                </ul>
            </div>

            <div class="row m-0 w-100">
                <div class="col-sm-12 col-md-8" id="service_col_two"> {{-- style="background: green;" --}}
                    <div class="list_item_info">
                        <div class="sct_content">
                            <h3 class="pt-2">Overview</h3>
                            <div data-index="1" class="content_field_div" id="overview" class="mt-3 my-4"></div>
                            <h3 class="mt-2 pt-2">Description Of Services</h3>
                            <div data-index="2" class="content_field_div" id="service_list_description" class="mt-3 my-4"></div>
                            <h3 class="mt-2 pt-2">Why Choose DiMarz</h3>
                            <div data-index="3" class="content_field_div" id="why_choose_dimarz" class="mt-3 my-4"></div>
                            <h3 class="mt-2 pt-2">FAQ</h3>
                            <div data-index="4" class="content_field_div" id="service_faq" class="mt-3 my-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-0" id="service_col_three"
                    style="margin-top: -180px !important;z-index:22;">
                    <div class="service_col_three_main ps-3">
                        <div class="row m-0 pt-3" id="card_info">
                            {{-- <div style="border:1px solid #fff;padding:15px;margin-top:-65px;"> --}}
                            <div id="img_replace">
                                <img src="{{asset('final_front_assets/img/portfolio/branding-1.jpg')}}"
                                alt="slider1" class="img-fluid">
                            </div>
                            {{-- </div> --}}
                            <div class="my-3" style="box-shadow: 3px 3px 6px #a2a3ab, -3px -3px 6px #ffffff;">
                                <div class="text-center mt-3 py-2"
                                    style="border: 1px solid #B6FAC5;border-radius: 10px;">
                                    <h4 class="text-uppercase" style="font-size: 17px;">Packages</h4>
                                </div>
                                <div class="row m-0 my-3" id="card_badge">
                                    <div class="col">
                                        Silver
                                    </div>
                                    <div class="col">
                                        Gold
                                    </div>
                                    <div class="col">
                                        Diamond
                                    </div>
                                </div>
                                <div class="row m-0 mt-5 p-0 justify-content-between"
                                    style="box-shadow: inset 3px 3px 6px #a2a3ab, inset -3px -3px 6px #ffffff;">
                                    <div class="col-4 btn_right_shadow" id="ser_pack_price">US $ 50</div>
                                    <div class="col-7 card_info_heading" id="ser_pack_title">Packege Title Here</div>
                                </div>

                                <div class="col-12 mt-4" id="ser_pack_description"
                                    style="box-shadow: none;padding:10px;border: 1px solid #fff;margin-bottom: 15px;">
                                    LinkedIn, Facebook, Google Web Scraping, Email Collection, Formatting Included</div>
                            </div>

                            <div class="col-12"
                                style="padding: 25px 10px;margin: 2px 0 0 0;box-shadow:  3px 3px 6px #a2a3ab, -3px -3px 6px #ffffff;padding:10px;">
                                <div class="col-12 mb-3 py-2" style="text-align: center;border: 1px solid #fff;">
                                    <span id="ser_pack_duration">3</span> Days Delivery
                                </div>
                                <div class="col-12 mb-2"
                                    style="box-shadow: inset 3px 3px 6px #a2a3ab, inset -3px -3px 6px #ffffff;padding:10px;">
                                    <ul style="list-style: none;margin:0;padding:0;" id="ser_pack_active">
                                        <li><i class="fas fa-check"></i> 50 email sends</li>
                                    </ul>
                                </div>
                                <div class="row m-0 p-0 contact_group">
                                    <div class="col-6 ps-0">
                                        <a class="btn w-100" id="confirm_order_btn" href="">Confirm Order</a> {{-- {{route('order.index',['id'=>$service->id,'feature_index'=>'0'])}} --}}
                                    </div>
                                    <div class="col-6 pe-0">
                                        <button class="btn w-100">Custom Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- <section class="section_part" id="pricing">
    <div class="container" id="service_col_main">
        <div class="row justify-content-center">
            <div class="" id="service_col_full">
                <div class="p-0 m-0">
                    {{-- <h3 class="h_text_1">Services & Pricing</h3> --}}
                </div>
            </div>
            <div class="col-sm-12 col-md-3 p-2" id="service_col_one">
                <div class="service_col_one_1">
                    <input type="text" name="" class="form-control border_radius_none"
                        placeholder="Search Your Services">
                </div>
                <div class="service_col_one_2">
                    <ul class="service_all_list" id="menu">
                        @forelse ($service_list as $service)
                        <li class="grp_one grp_one{{$service->id}}"
                            onclick="ServiceNameClick('{{$service->id}}', 'grp_one{{$service->id}}')">{{$service->name}}
                        </li>
                        @empty
                        <li class="grp_one">No Service</li>
                        @endforelse
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6" id="service_col_two">
                <div class="list_item_info">
                    <div class="sct_heading" id="sct_heading">
                        @if (count($service_list) != 0)
                        <h3 id="service_list_title">Service List Title</h3>
                        <h6 id="service_list_category">Service List Category</h6>
                        @else
                        <h3 id="service_list_title">Service Title</h3>
                        <h6 id="service_list_category">Service Category</h6>
                        @endif
                    </div>
                    <div class="sct_content">
                        <div class="slider" id="slider_add">
                            <div class="slide_viewer">
                                <div class="slide_group" id="service_banner_slider">
                                    <div class="slide">
                                        <img src="http://127.0.0.1:8000/final_front_assets/img/portfolio/branding-1.jpg"
                                            alt="slider1" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slide_buttons"> </div>

                        <div class="directional_nav">
                            <div class="previous_btn" title="Previous">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px"
                                    height="40px" viewBox="-11 -11.5 65 66">
                                    <g>
                                        <g>
                                            <path fill="#474544"
                                                d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
                                        c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z" />
                                            <path fill="#474544"
                                                d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="next_btn" title="Next">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px"
                                    height="40px" viewBox="-11 -11.5 65 66">
                                    <g>
                                        <g>
                                            <path fill="#474544"
                                                d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z" />
                                            <path fill="#474544"
                                                d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div id="service_list_description" class="mt-4" style="margin-bottom:20rem;">
                            @if (count($service_list) != 0)
                            {!! $service_list[0]->description !!}
                            @else
                            Description Will be add here.
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3" id="service_col_three">
                <div class="service_col_three_main ps-3">

                    <div class="row m-0" id="card_info">
                        <div class="my-3" style="box-shadow: 3px 3px 6px #a2a3ab, -3px -3px 6px #ffffff;">
                            <div class="text-center mt-3 py-2" style="border: 1px solid #B6FAC5;border-radius: 10px;">
                                <h4 class="text-uppercase">Packages</h4>
                            </div>
                            <div class="row m-0 my-3" id="card_badge">
                                <div class="col">
                                    Silver
                                </div>
                                <div class="col">
                                    Gold
                                </div>
                                <div class="col">
                                    Diamond
                                </div>
                            </div>
                            <div class="row m-0 mt-5 p-0 justify-content-between"
                                style="box-shadow: inset 3px 3px 6px #a2a3ab, inset -3px -3px 6px #ffffff;">
                                <div class="col-4 btn_right_shadow" id="ser_pack_price">US $ 50</div>
                                <div class="col-7 card_info_heading" id="ser_pack_title">Packege Title Here</div>
                            </div>

                            <div class="col-12 mt-4" id="ser_pack_description"
                                style="box-shadow: none;padding:10px;border: 1px solid #fff;margin-bottom: 15px;">
                                LinkedIn, Facebook, Google Web Scraping, Email Collection, Formatting Included</div>

                        </div>

                        <div class="col-12"
                            style="padding: 25px 10px;margin: 2px 0 0 0;box-shadow:  3px 3px 6px #a2a3ab, -3px -3px 6px #ffffff;padding:10px;">
                            <div class="col-12 mb-3 py-2" style="text-align: center;border: 1px solid #fff;">
                                <span id="ser_pack_duration">3</span> Days Delivery
                            </div>
                            <div class="col-12 mb-2"
                                style="box-shadow: inset 3px 3px 6px #a2a3ab, inset -3px -3px 6px #ffffff;padding:10px;">
                                <ul style="list-style: none;margin:0;padding:0;" id="ser_pack_active">
                                    <li><i class="fas fa-check"></i> 50 email sends</li>
                                </ul>
                            </div>
                            <div class="row m-0 p-0 contact_group">
                                <div class="col-6 ps-0">
                                    <button class="btn w-100">Contact US</button>
                                </div>
                                <div class="col-6 pe-0">
                                    <button class="btn w-100">Custom</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> -->
<!-- Home Scetion - Section Four || End -->


<!-- Home Scetion - Section Five || Start -->
{{-- <section class="section_part">
    <div class="container" style="position: relative;z-index: 20;background-color:var(--bg-default)">
        <div class="row align-items-end justify-content-between">
            <div class="col-6 second_service" style="position: relative;z-index: 20;">
                <div class="IMG_01_1" style="left: 10px;bottom: 100px;height: 180px;">
                    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/1.png')}}" alt="">
</div>
<div class="IMG_01_1" style="left: 235px;bottom: 100px;height: 180px;">
    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/2.png')}}" alt="">
</div>
<div class="IMG_01_1" style="left: 460px;bottom: 100px;height: 180px;">
    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/3.png')}}" alt="">
</div>
<div class="IMG_01_1" style="left: 680px;bottom: 0;height: 280px;">
    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/4.png')}}" alt="">
</div>
<div class="IMG_01_1" style="left: 905px;bottom: 0;height: 280px;">
    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/5.png')}}" alt="">
</div>
<div class="IMG_01_1" style="left: 1115px;bottom: 0;height: 280px;">
    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/6.png')}}" alt="">
</div>
<div class="IMG_01">
    <div class="mid_div">
    </div>
</div>
</div>
<div class="col-12" style="z-index: 25;margin-top: -100px;">
    <h6 class="" style="margin-top: -50px;margin-bottom: 0;width:50%;
                color: #fff;
                font-size: 30px;
                background: #b6fac5;text-shadow: -3px 3px 10px rgb(113 113 113);
                padding: 5px 15px;text-transform:uppercase;">Know your <br>standard working procedure.</h6>
</div>
</div>
</div>
</section> --}}

{{-- <section class="section_part">
    <div class="container" style="position: relative;z-index: 20;background-color:var(--bg-default);padding-top:110px;">
        <div class="row service_icons_grp">
            <div class="col-sm-6 col-md-2">
                <div class="small_div">
                    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/1.png')}}" alt="">
</div>
</div>
<div class="col-sm-6 col-md-2">
    <div class="small_div">
        <img class="img-fluid" src="{{asset('final_front_assets/img/icons/2.png')}}" alt="">
    </div>
</div>
<div class="col-sm-6 col-md-2">
    <div class="small_div">
        <img class="img-fluid" src="{{asset('final_front_assets/img/icons/3.png')}}" alt="">
    </div>
</div>
<div class="col-sm-6 col-md-2">
    <div class="mid_div">
        <img class="img-fluid" src="{{asset('final_front_assets/img/icons/4.png')}}" alt="">
    </div>
</div>

<div class="col-sm-6 col-md-2">
    <div class="mid_div">
        <img class="img-fluid" src="{{asset('final_front_assets/img/icons/5.png')}}" alt="">
    </div>
</div>

<div class="col-sm-6 col-md-2">
    <div class="mid_div">
        <img class="img-fluid" src="{{asset('final_front_assets/img/icons/6.png')}}" alt="">
    </div>
</div>

<div class="col-sm-12 col-md-6">
    <h6>Know our <br>standard working procedure.</h6>
</div>
</div>
</div>
</section> --}}
<!-- Home Scetion - Section Five || End -->

<section class="section_part" style="padding-bottom:10rem;z-index: 22;" id="compare_packages">
    <div class="container">
        {{-- <h3 class="mb-4 pt-5" style="font-size:30px;">Compare Packages</h3> --}}
        <table class="table table-bordered table-hover" style="border-color: #fff;">
            <tr style="background-color: #C1CCDB;color: #000;">
                <td class="text-left" style="width: 31%;font-size:30px;font-wieght:800;">Compare Packages</td>
                <td class="text-center" style="width: 23%;">
                    <h3>Small</h3>
                </td>
                <td class="text-center" style="width: 23%;">
                    <h3>Medium</h3>
                </td>
                <td class="text-center" style="width: 23%;">
                    <h3>Large</h3>
                </td>
            </tr>
            <tr>
                <td>Description</td>
                <td>Removal, Change Background; Re-size; Crop; Adjust Light+colorG</td>
                <td>Removal, Change Background; Re-size; Crop; Adjust light+color, Skin retouch</td>
                <td>Removal, Change Background; Re-size; Crop; Adjust light+color; Skin retouch, JPG, PNG, PSD</td>
            </tr>
            <tr>
                <td class="text-left">Commercial use</td>
                <td class="text-center"><i class="fas fa-check"></i></td>
                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                <td class="text-center"><i class="fas fa-check text-success"></i></td>
            </tr>
            <tr>
                <td class="text-left">Source file</td>
                <td class="text-center"><i class="fas fa-check"></i></td>
                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                <td class="text-center"><i class="fas fa-check text-success"></i></td>
            </tr>
            <tr>
                <td class="text-left">High-Resolution</td>
                <td class="text-center"><i class="fas fa-check"></i></td>
                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                <td class="text-center"><i class="fas fa-check text-success"></i></td>
            </tr>
            <tr>
                <td class="text-left">Include Figure</td>
                <td class="text-center"><i class="fas fa-check"></i></td>
                <td class="text-center"><i class="fas fa-check text-success"></i></td>
                <td class="text-center"><i class="fas fa-check text-success"></i></td>
            </tr>
            <tr style="background:#e8eaeea1;">
                <td class="text-left">Delivery Time</td>
                <td class="text-center">3 Days</td>
                <td class="text-center">5 Days</td>
                <td class="text-center">7 Days</td>
            </tr>
            <tr style="background: #e8eaeea1;">
                <td class="text-left">Price</td>
                <td class="text-center">$50 USD</td>
                <td class="text-center">$80 USD</td>
                <td class="text-center">$120 USD</td>
            </tr>
            <tr style="background: #e8eaeea1;">
                <td class="text-left">Choose Your Package</td>
                <td class="text-center"><a href="#" class="btn btn-dark">Select Package</a></td>
                <td class="text-center"><a href="#" class="btn btn-dark">Select Package</a></td>
                <td class="text-center"><a href="#" class="btn btn-dark">Select Package</a></td>
            </tr>
        </table>

        <p class="my-5">* Need customized services! Don’t Worry! Create a custom price for a service that is specific to
            your budget. You can change the price of your desired service depending on how much you need or want. Place
            a custom order with us and get an amazing customized offer!</p>

        <h5>In that case,</h5>
        <ul class="padding_l1">
            <li>Go to Contact Us</li>
            <li>Tell us your industry/service</li>
            <li>Fill up the contact form. Please put authentic and real information because we will contact you through
                this.</li>
            <li>Now in the message section, suggest your customized pricing & details</li>
            <li>Click send & your work is done!</li>
        </ul>
        <p>One of our professionals will contact you through your mail or contact details you have provided. We will
            contact with you as soon as possible.</p>


    </div>


</section>


<section class="container-fluid slogan_box slogan_dark py-5 section_part" style="z-index: 26;">
    <div class="container mt-3">
        <h3>We like to descrive what are doing as a process</h3>
        <h5>What get measured, gets managed</h5>
    </div>
</section>

<section class="section_part" style="z-index: 26;">
    <div class="container-fluid col-sm-12 col-md-12 mb-5" style="background-color: #C1CCDB;padding:4rem 0;">
        <div class="container">
            <h3 class="text-uppercase style_text_2">KNOW OUR STANDARD WORKING PROCEDURE</h3>
        </div>
    </div>
</section>

<!-- Home Scetion - Section Six || Start -->
<section class="section_part" style="background:#D8DBE1;padding-bottom:20rem;z-index: 26;">
    <div class="container section_part" style="padding-bottom:6rem">
        <!-- <div class="row align-items-center" style="padding-bottom: 80px;">
            {{-- <div class="col-sm-12 col-md-12 text-center">
                <h3>Our Working Process</h3>
                <h5><i class="fas fa-angle-down"></i></h5>
                <h5><i class="fas fa-arrow-down"></i></h5>
            </div>
            <div class="col-sm-12 col-md-5">
                <img src="{{asset('final_front_assets/work-process.gif')}}" alt="" style="width: 100%;margin-top:
            100px;"> --}}
        </div> -->
        <div class="col-sm-12 col-md-12">
            <div class="spinx-connect m-0">
                <h3 data-index="0" class="spinx-acco-title current"><i class='bx bx-user'></i>Connect</h3>
                <div class="spinx-acco-content" style="display: block;">
                    <p>Looking to enhance your digital platform? Contact with us today for a first free consultation to
                        determine the objectives of the transistion and decide the next steps of your digital journey.
                    </p>

                </div>
                <h3 data-index="1" class="spinx-acco-title"><i class='bx bx-user'></i>Agreement</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>INTELLIGENCE &amp; EXPERIENCE</h4> --}}
                    <p>We love to discuss about the project in details before making up an agreement. After a successful
                        discussion we go for an agreement with you.</p>

                </div>
                <h3 data-index="2" class="spinx-acco-title"><i class='bx bx-user'></i>Final Strategy</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>The initial step after getting the project is research & planning to make a final strategy. Our
                        experts analyze your project to find the most appropriate method for the project.</p>

                </div>
                <h3 data-index="3" class="spinx-acco-title"><i class='bx bx-user'></i>Implementation</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>An essential part of the Work process is implementation. While technology is a main factor, we
                        are also focusing on the people and your enterprise culture to make sure the project is
                        successful.</p>
                </div>
                <h3 data-index="4" class="spinx-acco-title"><i class='bx bx-user'></i>Quality check & HANDOVER</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>We always try to maintain the best quality for submitting error-free tasks. In this case, we
                        maintain a strict quality check for your Desire services. Then,<br>The final step is here ;
                        After final checking we deliver your project. We always assure the best quality service for you.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid slogan_box slogan_dark py-5 section_part" style="z-index: 26;margin-bottom:-4rem;">
    <div class="container mt-3">
        <h3>Ask the right question & you discover everyting</h3>
        <h5>We will explain everything simply, we understand it well enough</h5>
    </div>
</section>

<section class="section_part" style="z-index: 25;padding-top:4rem;" id="faq_section">
    <div class="container-fluid col-sm-12 col-md-12 mb-5" style="background-color: #C1CCDB;padding:4rem 0;">
        <div class="container">
            <h3 class="style_text_2 py-3">FAQ ! Need Help ?</h3>
        </div>
    </div>
</section>

<section class="section_part" style="padding-bottom:10rem;z-index: 26;">
    <div class="container">
        <div class="row faq_section">
            {{-- <div class="col-sm-12 col-md-12">
                <h3 class="text-center faq_section_heading">FAQ ! Need Help ?</h3>
                <p class="text-center">We've got you covered</p>
            </div> --}}
            {{-- <div class="col-sm-12 col-md-2 my-5" style="">
                <div class="w-100">
                </div>
            </div> --}}
            <div class="col-sm-12 col-md-12 mb-5" style="border-left: 2px solid #fff;">
                <div class="row mb-4">
                    @forelse ($faq_service_name as $item)
                    <div class="col-sm-6 col-md-2">
                        <div class="faq_box" onclick="FAQActive({{$item->id}})">
                            <h4 class="text-center">{{$item->name}}</h4>
                        </div>
                    </div>
                    @empty
                    <div class="col-sm-12 col-md-12">
                        <div class="faq_box">
                            <h4>No FAQ Available</h4>
                        </div>
                    </div>
                    @endforelse
                </div>


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>
                                    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/faq_icon.png')}}"
                                        alt="">
                                </span> What do i need to provide you to get started?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex">
                                <div class="accordion-body-img">
                                    <img class="img-fluid"
                                        src="{{asset('final_front_assets/img/icons/faq_icon_ans2.png')}}" alt="">
                                </div>
                                <div>
                                    You need to provide us images in any common format (JPG, JPEG, PNG, RAW, TIF, PSD
                                    etc.).
                                    If
                                    you give us a good resolution image we will receive a great result. Provide us the
                                    instructions for the image to edit so that we can provide you the expected result.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>
                                    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/faq_icon.png')}}"
                                        alt="">
                                </span> Do you offer super fast delivery?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex">
                                <div class="accordion-body-img">
                                    <img class="img-fluid"
                                        src="{{asset('final_front_assets/img/icons/faq_icon_ans2.png')}}" alt="">
                                </div>
                                <div>
                                    Yes, we have a team, if you need urgent our all members will work for you.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>
                                    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/faq_icon.png')}}"
                                        alt="">
                                </span> I have complex images like jewelry, do you rate same
                                price?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex">
                                <div class="accordion-body-img">
                                    <img class="img-fluid"
                                        src="{{asset('final_front_assets/img/icons/faq_icon_ans2.png')}}" alt="">
                                </div>
                                For complex image like jewelry, plants, needs lots of time. We charge a little bit more
                                for
                                this type of complex images. Please let us know before placing your order & give us
                                sample
                                so that we can give you a reasonable price.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <span>
                                    <img class="img-fluid" src="{{asset('final_front_assets/img/icons/faq_icon.png')}}"
                                        alt="">
                                </span> I have complex images like jewelry, do you rate same
                                price?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex">
                                <div class="accordion-body-img">
                                    <img class="img-fluid"
                                        src="{{asset('final_front_assets/img/icons/faq_icon_ans2.png')}}" alt="">
                                </div>
                                For complex image like jewelry, plants, needs lots of time. We charge a little bit more
                                for
                                this type of complex images. Please let us know before placing your order & give us
                                sample
                                so that we can give you a reasonable price.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <span>
                                </span> I have complex images like jewelry, do you rate same
                                price?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body d-flex">
                                <div class="accordion-body-img">
                                    <img class="img-fluid"
                                        src="{{asset('final_front_assets/img/icons/faq_icon_ans2.png')}}" alt="">
                                </div>
                                For complex image like jewelry, plants, needs lots of time. We charge a little bit more
                                for
                                this type of complex images. Please let us know before placing your order & give us
                                sample
                                so that we can give you a reasonable price.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Scetion - Section Six || End -->

<section class="container-fluid slogan_box slogan_dark py-5 section_part" style="z-index: 26">
    <div class="container mt-3">
        <h3>INNOVATIVE OUTSOURCING PLANS</h3>
        <h5>We will explain everything simply, we understand it well enough</h5>
    </div>
</section>

<section class="section_part" style="z-index: 26;" id="outsourcing">
    <div class="container-fluid col-sm-12 col-md-12 mb-5" style="background-color: #C1CCDB;padding-top:8rem;">
        <div class="container py-3">
            <h3 class="text-uppercase style_text_2">New to Outsourcing ?</h3>
        </div>
    </div>
</section>
<section class="section_part" style="padding-bottom:10rem;z-index: 26;">
    <div class="container">
        <h2>Innovative Outsourcing Plan For New Companies | DiMarz</h2>
        <p>There are a number of ways to outsource services, but the most innovative plan is to outsource part of your
            business. This will minimize the need for workers and make it easier to manage your company. Outsourcing can
            be especially helpful if you are new to the business or if you have difficulty finding the right people to
            do the job. In other words, if you are having a shortage of labor or people to do your job, especially if
            you are a new or start-up company, then it's time you take some necessary innovative outsourcing plans in
            action.</p>

        <h3>What is Outsourcing?</h3>

        <p>Before you jump right into an outsourcing or Business Process Outsourcing BPO service you must know what
            actually outsourcing is. Outsourcing is basically a business process management concept that involves
            businesses putting their products and services to the market, where they are bought and sold by the
            customer. A small number of companies specialize in this type of work and make it one of their core business
            activities.</p>

        <p>So, basically what this means is that you take help from a third-party organization to help you promote your
            company's products or for the most part sell them in the market. And, to do that, you need a team of experts
            who will outsource your business to fulfill your demands. For instance, you need to sell your X product in
            the market. So, you need to market or promote your product in the market. But, it is a matter of sorrow that
            you don't have enough marketing experts to do it for you. If you even want to hire some marketers, it will
            cost you much. So, you purchase an Outsourcing company or BPO service provider to market your product. They
            will do it for you for a minimal cost and your product will be promoted accordingly. Isn't it a good
            solution?</p>

        <h3>How Outsourcing Can Help Your Business Grow?</h3>
        <p>There are many benefits of outsourcing. Outsourcing can make your business grow. It can also be a good
            solution for those companies who have not enough marketing human resources to market their products.
            Outsourcing is a way to get rid of all the problems associated with marketing and promotion. You can hire
            professional outsourcers and BPO service providers for outsourcing services to do your job. Here are some
            positive aspects of how these outsourcing services can help you to grow your business;</p>

        <ul class="padding_l1">
            <li>Innovative Outsourcing Plan</li>
            <li>Better company products promotion</li>
            <li>Technology solutions</li>
            <li>Team up with professionals</li>
            <li>Scalability and Flexibility</li>
            <li>Minimal cost rate than hiring a full-time member</li>
            <li>Build relationships</li>
            <li>Excellent Results</li>
            <li>Excellent customer service</li>
        </ul>

        <h3>How To Create an Innovative Outsourcing Plan For Your New Business</h3>

        <p>At first, what you need to do is analyze your business well. This means how your business is doing, how your
            products are performing in the market, your monthly revenue, etc. The best way to do this is by introducing
            the challenges that you face in your business. How can you overcome all these challenges and keep them
            alive?</p>

        <p>To do that, you need to make an innovative outsourcing plan for your business. Here is the step by step
            process towards a strategic outsourcing;
            <ul class="padding_l1">
                <li>Analyze your business and decide which part of your business need to be outsourced</li>
                <li>Research some BPO companies and see if they can solve your problems</li>
                <li>Confirm if your Outsourcer have the ability to provide digital solutions</li>
                <li>Open to provide innovative solutions</li>
            </ul>
        </p>

        <h3>How To Choose The Right BPO Company?</h3>
        <p>Choosing the right outsourcer can be a difficult task. But, if you follow the steps mentioned above, it will
            be easy for you to choose the right driver for your car.</p>
        <p>DiMarz is a Business Process Outsourcer BPO company who can provide you the best outsourcing experience you
            are looking for. We have all innovative outsourcing plan and solutions which will enable you to rank your
            startup business to the next level. We serve small or startup businesses to enterprise level businesses to
            achieve their goals.
        </p>

        <h2>Why Consider Choosing DiMarz? </h2>

        <h3>Strategic Outsourcing</h3>
        <p>We provide creative solutions for any kinds of businesses from startup to enterprise level companies. We
            always thrive to provide innovative solutions to our clients which helps them to reach their goal within the
            deadline. We are a team of outsourcing service providers who maintain a excellent company profile to deliver
            the best strategy at the right time</p>

        <h3>Innovative Solutions</h3>
        <p>We always try to provide the best strategic outsourcing solutions. We have all the necessary equipment and
            staff to deal with your task. Some mentionable sides of our company are;
            <ul class="padding_l1">
                <li>Technology Solutions</li>
                <li>Enhanced Profile of Our Company</li>
                <li>Advance Digital marketing</li>
                <li>Certified Social Media Marketer</li>
                <li>Effective Email Campaigns</li>
                <li>Maintain Good Outsourcing Company Profile & Outsourcing Employees</li>
                <li>Data management</li>
                <li>Digital Advertising</li>
            </ul>
        </p>
        <p>Want to know how we work & process your business? Schedule a free consultation now!</p>


    </div>
</section>

<section class="container-fluid slogan_box slogan_dark py-5 section_part" style="z-index: 26">
    <div class="container mt-3">
        <h3>PARTICIPATE & EXPERIENCE</h3>
        <h5>We will explain everything simply, we understand it well enough</h5>
    </div>
</section>

<section class="section_part" style="z-index: 25;">
    <div class="container-fluid col-sm-12 col-md-12 mb-5" style="background-color: #C1CCDB;padding:4rem 0;">
        <div class="container py-3">
            <h3 class="text-uppercase style_text_2">Contact us & Discover your needs</h3>
        </div>
    </div>
</section>

@endsection


@section('custom_js')
<script src="{{asset('final_front_assets/libs/swiper/swiper-bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="{{asset('final_front_assets/js/home-script.js')}}"></script>


<script>
    // $('#single_service_sub_nav a').click(()=>{
    //     alert($('#single_service_sub_nav a').attr("href"));
    // });

    // function service_grp_names(data){
    //     $(`.${data}`).removeClass('d-none');
    // }
    // function service_grp_names_out(data){
    //     // $(`.${data}`).addClass('d-none');
    // }

    $.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    function service_grp_names(id){
        $.ajax({
            type: 'POST',
            url: `/servicelistmenu`,
            data: {'id': `${id}`},
            success: function (data) {
                // console.log(data);
                $('#service_grp_names_list').html(data.data);
            }
        });
    }

</script>


<!-- Home Header || Scroll Animation || Start -->
<script>
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 5) {
            $('.animate_right').removeClass('animate_right_a_none');
            $('.animate_right').addClass('animate_right_a');
            $('.animate_left').removeClass('animate_left_a_none');
            $('.animate_left').addClass('animate_left_a');
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $('.animate_right').removeClass('animate_right_a');
            $('.animate_right').addClass('animate_right_a_none');
            $('.animate_left').removeClass('animate_left_a');
            $('.animate_left').addClass('animate_left_a_none');
        }
    });

</script>
<!-- Home Header || Scroll Animation || End -->


<!-- Sub Menu Function || Start -->
<script>
    function submenu() {

        // const sectionName = ['Industry', 'Pricing', 'FAQ', 'New to Outsourcing ?', 'Footer'];
        const sectionName = [{
            'id': 'industry',
            'name': 'Industries We Serve',
        }, {
            'id': 'pricing',
            'name': 'Pricing'
        }, {
            'id': 'faq_section',
            'name': 'FAQ'
        }, {
            'id': 'outsourcing',
            'name': 'New to Outsourcing ?'
        }, {
            'id': 'footer',
            'name': 'Email Us'
        }];

        let htmlData = "";

        for (let i = 0; i < sectionName.length; i++) {
            if (i == 1) {
                htmlData += `<li id="pricing_section" style="cursor:pointer;"><a>${sectionName[i]['name']}</a></li>`;
            } else {
                htmlData += `<li><a href="#${sectionName[i]['id']}">${sectionName[i]['name']}</a></li>`;
            }
        }
        $('#section_pagination').html(`<div class="container"><ul>${htmlData}</ul></div>`);
        // $('.submenu').html(`<div class="container"><ul class="ps-0">${htmlData}</ul></div>`);
    }
    submenu();

    $("#pricing_section").click(function() {
       window.scrollTo(300, 3700);
    });

</script>
<!-- Sub Menu Function || End -->



@endsection
