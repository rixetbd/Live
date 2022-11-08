@extends('frontend.final.master2')

@section('custom_css')
<link href="http://fonts.cdnfonts.com/css/neue-haas-grotesk-display-pro" rel="stylesheet">
<link rel="stylesheet" href="{{asset('final_front_assets/css/home/home-header.css')}}">
<link rel="stylesheet" href="{{asset('final_front_assets/css/home/home-services.css')}}">
<link rel="stylesheet" href="{{asset('final_front_assets/css/home/home-faq.css')}}">
@endsection

@section('submenu')
<section class="d-none" id="section_pagination">
    <ul>
        <li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        <li><a href="#">Four</a></li>
        <li><a href="#footer">Contact</a></li>
    </ul>
</section>
@endsection

@section('content')
<!-- Home Header || Start -->
<section class="hero_area">
    <div class="container" style="position: fixed">
        <h1 class="c_name text-center animate_right pt-5">D<span style="color: var(--color-theme);">i</span>Marz <span
                class="small">PROVIDES</span></h1>
        <h4 class="text-left animate_right">BUSINESS</h4>
        <h4 class="text-end animate_left">PROCESS</h4>
        <h5 class="text-center last animate_right"><mark>OUTSOURCING</mark> SERVICES</h5>
        <div class="col-12 pt-5">
            <div class="mouse"></div>
        </div>
    </div>
</section>
<!-- Home Header || End -->


<!-- Home Scetion - Section Two || Start -->
<section class="section_part section_part_02 py-0">
    <div class="container">
        <div class="row align-items-end justify-content-between">
            <div class="col-6" style="position: relative;">
                <div class="IMG_01">
                    <div class="mid_div">
                        <div>
                            <h6 class="style_text_2">Labor Shortage?</h6>
                            <p>Think Outside the <br>Corporate Box.</p>
                        </div>
                        <div style="margin-top: 250px;">
                            <a class="button link_scroll" href="#footer">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="IMG_01_1">
                    <img class="img-fluid" src="{{asset('final_front_assets/service_05.png')}}" alt="">
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="IMG_02" style="position: relative">
                    <div>
                        <p class="IMG_02_line01">Our front office</p>
                        <p class="IMG_02_line02">functions as your back office.</p>
                        <p class="IMG_02_line03">The collective experience of our 5 year-old BPO company.</p>
                        <a class="button" href="#">Know Your Needs</a>
                    </div>
                </div>
                <div class="IMG_02_1">
                    <img class="img-fluid" src="{{asset('final_front_assets/service_03.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Scetion - Section Two || End -->

<!-- Home Scetion - Section Three || Start -->
<section class="section_part" id="industry">
    <div id="text2" class="container second_part" style="padding:6rem 0;">
        <div class="col-sm-12 col-md-12 mb-5">
            <h3 class="text-uppercase text-center style_text_2" style="font-size: 50px;">Industries We Serve</h3>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="home_service_box">
                    <div class="img_box">
                        <h4>Software Industry</h4>
                    </div>
                    <div class="content_box">
                        <p>Helping software companies grow their sales and close more deals. We’ll help you to operate
                            reliably so you can focus on your customers.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="home_service_box">
                    <div class="img_box">
                        <h4>Healthcare Industry</h4>
                    </div>
                    <div class="content_box">
                        <p>We support the core elements of your healthcare IT infrastructure to keep you up and running
                            when and where it matters most. We are proud to be a leading provider of outsourced
                            healthcare IT services</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="home_service_box">
                    <div class="img_box">
                        <h4>Legal Industry</h4>
                    </div>
                    <div class="content_box">
                        <p>We offer a multitude of services that can grow your law firm into a thriving practice! Our
                            team can customize a multi-channel digital marketing strategy to achieve your specific firm
                            goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="home_service_box">
                    <div class="img_box">
                        <h4>Real Estate Industry</h4>
                    </div>
                    <div class="content_box">
                        <p>Our experience and understanding of real estate help us leverage technology to provide
                            Services like leads list Building, Graphics Design, Digital marketing, responsive website,
                            and SEO, which will significantly enhance your ROI.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="home_service_box">
                    <div class="img_box">
                        <h4>Fashion & Beauty</h4>
                    </div>
                    <div class="content_box">
                        <p>Nowadays fashion & beauty industries are nothing without an online presence.
                            Our expertise can help you to build a stunning website for your business and improve your
                            online presence through our digital marketing services.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="home_service_box">
                    <div class="img_box">
                        <h4>Retail Industry</h4>
                    </div>
                    <div class="content_box">
                        <p>Meet your customer needs and maintain online activities with our digital marketing and
                            web-related Services. Find the right maintenance programs to keep you steady as you grow
                            your customer base.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="home_service_box">
                    <div class="img_box">
                        <h4>E-commerce Industry</h4>
                    </div>
                    <div class="content_box">
                        <p>For more than 5 years, we have been helping So many clients improve their
                            business-to-consumer marketing efforts and exceed their online goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="home_service_box">
                    <div class="img_box">
                        <h4>Finance Industry</h4>
                    </div>
                    <div class="content_box">
                        <p>Since differentiation in financial services is driven by technologies, we create incredibly
                            compelling Websites for various banking and finance groups worldwide to help them create
                            loyal engagements with consumers through mobile devices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Scetion - Section Three || End -->


<!-- Home Scetion - Section Four || Start -->
<section class="section_part" id="pricing">
    <div class="container" id="service_col_main">
        <div class="row justify-content-center">
            <div class="" id="service_col_full">
                <div class="p-0 m-0">
                    <h3 class="h_text_1">Services & Pricing</h3>
                </div>
                <hr style="color: #000;height: 1px;">
            </div>
            <div class="col-sm-12 col-md-3 p-2" id="service_col_one">
                <div class="service_col_one_1">
                    <input type="text" name="" class="form-control border_radius_none" placeholder="Search Your Services">
                </div>
                <div class="service_col_one_2">
                    <ul class="service_all_list" id="menu">
                        @forelse ($service_list as $service)
                            <li class="grp_one grp_one{{$service->id}}" onclick="ServiceNameClick('{{$service->id}}', 'grp_one{{$service->id}}')">{{$service->name}}</li>
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
                        </div><!-- End // .directional_nav -->

                        <div id="service_list_description" class="mt-4">
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
</section>
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

<section class="section_part">
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
</section>
<!-- Home Scetion - Section Five || End -->


<!-- Home Scetion - Section Six || Start -->
<section class="section_part" style="background:#D8DBE1;padding:0;z-index: 1;margin-top: -200px;">
    <div class="container" style="margin-top: 200px;">
        <div class="row align-items-center" style="border-bottom: 60px solid #b6fac5;
        padding-bottom: 80px;">
            {{-- <div class="col-sm-12 col-md-12 text-center">
                <h3>Our Working Process</h3>
                <h5><i class="fas fa-angle-down"></i></h5>
                <h5><i class="fas fa-arrow-down"></i></h5>
            </div>
            <div class="col-sm-12 col-md-5">
                <img src="{{asset('final_front_assets/work-process.gif')}}" alt="" style="width: 100%;margin-top:
            100px;">
        </div> --}}
        <div class="col-sm-12 col-md-12" style="padding-left:70px;">
            <div class="spinx-connect">
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

    <section style="min-height: 110vh;padding-top: 10vh;" id="faq">
        <div class="row faq_section mt-5">
            <div class="col-sm-12 col-md-12">
                <h3 class="text-center faq_section_heading">FAQ ! Need Help ?</h3>
                <p class="text-center">We've got you covered</p>
            </div>
            <div class="col-sm-12 col-md-2 my-5" style="border-right: 2px solid #fff;">
                <div class="w-100">
                </div>
            </div>
            <div class="col-sm-12 col-md-10 my-5">
                <div class="row mb-4">
                    @forelse ($faq_service_name as $item)
                    <div class="col-sm-6 col-md-2">
                        <div class="faq_box" onclick="FAQActive({{$item->id}})">
                            <h4>{{$item->name}}</h4>
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

    @endsection


    @section('custom_js')
    <script src="{{asset('final_front_assets/libs/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('final_front_assets/js/home-script.js')}}"></script>

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
        function submenu(){

            const sectionName = ['Industry','Pricing','FAQ','Footer'];

            let htmlData = "";

            for (let i = 0; i < sectionName.length; i++) {
                htmlData += `<li><a href="#${sectionName[i].toLowerCase()}">${sectionName[i]}</a></li>`;
            }


            $('#section_pagination').html(`<ul>${htmlData}</ul>`);
        }
        submenu();
    </script>
    <!-- Sub Menu Function || End -->
    @endsection
