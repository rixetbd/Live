@extends('frontend.final.master2')

@section('meta_tag')
@include('meta::manager',[
'title' => 'Data Entry',
'author' => 'Bangladesh Outsourcing Company',
'description' => 'Data Entry is the process of producing new sales leads through developing interest in a service
or product.',
'keywords' => 'Data Entry, service',
'image' => asset('uploads/banners/lead_generation.png'),
])
@endsection

@section('custom_css')
<link href="http://fonts.cdnfonts.com/css/neue-haas-grotesk-display-pro" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
<link rel="stylesheet" href="{{asset('final_front_assets/css/home/home-header2.css')}}">
<link rel="stylesheet" href="{{asset('final_front_assets/css/home/home-header2-responsive.css')}}">
<link rel="stylesheet" href="{{asset('final_front_assets/css/services/lead-home.css')}}">
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

    .industry_26_css_bottom p {
        text-align: justify;
    }

    .industry_26_css_bottom ul {
        padding-left: 1rem;
    }

    .industry_26_css_bottom {
        position: relative;
    }

    .industry_26_css_bottom .in_title {
        font-size: 40px;
        padding-top: 20px;
        padding-right: 5px;
        color: #484a7d;
    }

    .service_rotate_box {
        position: absolute;
        transform: rotate(-90deg);
        left: -70px;
        top: 50px;
    }

    .service_rotate_box h6 {
        /* text-transform: uppercase; */
        font-size: 20px;
        text-align: right;
        overflow: inherit;
        position: relative;
        background: #D8DBE1;
        z-index: 2;
        width: fit-content;
        padding-left: 10px;
        color: #00000061;
    }

    .industry_26_css_bottom {
        border-left: 1px solid #00000061;
    }

    .industry_26_css .industry_26_css_bottom img {
        transition: all 800ms ease-in-out;
    }

    .industry_26_css:hover .industry_26_css_bottom img {
        filter: invert(100%);
        transform: rotate(360deg);
    }

</style>

@endsection

@section('submenu')
<section class="d-none" id="section_pagination">
    <div class="container">
        <ul>
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
        <div class="top_div" style="background-color:#383838">
            <div class="container">
                <h5>We Provide Accurate</h5>
                <h3>Data Entry</h3>
                <h5>Services</h5>
                {{-- <a href="#" class="btn">Contact us</a> --}}
                {{-- <p class="text-white mt-4">Data Entry is the process of producing new sales leads through
                    developing interest in a service or product. Data Entry services are a fundamental part of
                    growing your business’s revenue.</p> --}}

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
<section class="section_part">
    <div id="text2" class="container-fluid second_part">
        <div class="container-fluid focus_content">
            <div class="container content_text p-0">
                <div class="text_area pb-5">
                    <h1 class="py-5 mb-2" style="background: #c1ccdb;">We Will Be Your Personal Data Entry Assistant
                    </h1>
                    <div class="px-5 py-3">
                        <p>As the world becomes increasingly data-driven, businesses need a personal data entry
                            assistant to help them manage their data. Whether you're a small business or a large
                            company, hiring a personal data entry assistant will make your life easier. With our data
                            entry services, you will not only save time and money, but also you will achieve more
                            accuracy.</p>
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

        <div class="container-fluid focus_content">
            <div class="container content_text mt-0">
                <div class="text_area p-5">
                    <h1 class="py-4">Your All in One Solutions For Any Kinds of Data Entry Works</h1>
                    <p>Do you need someone to do data entry for your business? Our experienced professionals can help
                        with whatever tasks you need to be completed. From filling out customer files to entering data
                        into online forms, our experts are qualified to get the job done right. When you hire us, you
                        can relax knowing that we have years of experience in data entry work. We are reliable and
                        affordable, which means that you can focus on what you do best - running your business!</p>
                </div>
            </div>
        </div>

        <div id="industry" style="padding-top:8rem;">
            <div class="container-fluid col-sm-12 col-md-12 mb-2">
                <!-- background-color: #C1CCDB; -->
                <div class="container pb-1" style="border-bottom:1px solid #484a7d">
                    <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Industries ! <span
                            style="font-size: 35px;color:#000;font-weight: 500;">We Serve<span></h3>
                </div>
            </div>
        </div>

        <div class="container" style="">


            <div class="row">
                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Data Entry</h3>
                        <h4 class="in_sub_title"><span class="in_title">Healthcare</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" class="img-fluid"
                            alt="">
                        <p>The healthcare industry is facing a large number of challenges today because of the growing
                            number of uninsured patients, unreasonable costs, and strain on capacity due to increased
                            demands. We offer healthcare data management services that reduce your administration costs.
                            Our Complete Healthcare Data Management Service offerings include:
                            <ul>
                                <li>Patient Records</li>
                                <li>Medical Data Entry</li>
                                <li>Maintaining your Medical Files and Documents etc.</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Data Entry</h3>
                        <h4 class="in_sub_title"><span class="in_title">Legal</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-02.png')}}" class="img-fluid"
                            alt="">
                        <p>Informative legal data sets are essential for attorneys & lawyers to prepare for most legal
                            proceedings. There exists a lot of legal data out there, which is kept in tons of
                            unstructured data files. This unsorted data can be misplaced easily in your storage area.
                            For keeping your data safe we provide</p>
                        <ul>
                            <li>Property Documents Entry</li>
                            <li>Data Entry of Case Details</li>
                            <li>Data Entry of Legal Document</li>
                            <li>legal Forms Entry</li>
                        </ul>
                        <p>We integrate strict quality checks at every step to ensure the best quality result.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Data Entry</h3>
                        <h4 class="in_sub_title"><span class="in_title">Real Estate</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-03.png')}}" class="img-fluid"
                            alt="">
                        <p>Real estate is amongst the most competitive sectors globally. Needless to say, There have a
                            lot of data in the form of property documents, rent/sale agreements, legal documents, deeds,
                            loans, tax and insurance documents, and many more. Don’t worry. We provide the best Real
                            Estate Data Entry services for you
                            <ul>
                                <li>Data entry for consolidating buyer/seller</li>
                                <li>Data entry of non-commercial and commercial</li>
                                <li>Data entry from hard copies</li>
                                <li>Online/offline data entry</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Data Entry</h3>
                        <h4 class="in_sub_title"><span class="in_title">E-commerce</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" class="img-fluid"
                            alt="">
                        <p>Data entry is one of the main aspects of any E-commerce Sector and should be handled with
                            care. It is important that the product data is highly accurate and displayed to attract
                            customers for buying. Our vast experience enables us to handle any kind of data entry
                            request for your e-commerce Business.</p>
                        <ul>
                            <li>Product Data Sourcing</li>
                            <li>Collecting Digital/Physical Catalogs</li>
                            <li>Product Data Entry for Cross-selling</li>
                            <li>Adding/Removing Product Information</li>
                        </ul>
                        <p>Agility, Quality, and Experts – We will handle your data needs with ease.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Data Entry</h3>
                        <h4 class="in_sub_title"><span class="in_title">Retail</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-02.png')}}" class="img-fluid"
                            alt="">
                        <p>With the growing appearance of online stores and market chains, the retail industry is at an
                            all-time high. Nowadays Everyone needs retail services, making it quite full of data and
                            information. We ensure to offer the best retail data entry solutions across the different
                            retail verticals including:
                            <ul>
                                <li>Invoice data entry</li>
                                <li>Product data entry</li>
                                <li>Product data management</li>
                                <li>Catalog management</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Data Entry</h3>
                        <h4 class="in_sub_title"><span class="in_title">Educational</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-03.png')}}" class="img-fluid"
                            alt="">
                        <p>Educational institutions today face tough challenges dealing with too much data in too many
                            formats – providing too little information, making it hard to streamline the process of data
                            and document management to improve educational outcomes. Our Data Entry service will provide
                            <ul>
                                <li>Digital Content Conversion Services</li>
                                <li>Data Entry/Data Capture Services</li>
                                <li>Academic Research entry</li>
                            </ul>
                        </p>
                        <p>Our Data entry services will ensure 100% accuracy and help you to take your business to the
                            next level.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Data Entry</h3>
                        <h4 class="in_sub_title"><span class="in_title">Finance</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" class="img-fluid"
                            alt="">
                        <p>Are you worried about your Financial business improvement? Data entry service puts an end to
                            all your worries by playing a critical and essential role in various financial sectors and
                            investment industries. Every detail is speculated in the financial sector. For your
                            financial business, we serve</p>
                        <ul>
                            <li>Outsourcing Financial data entry</li>
                            <li>Financial aid data entry</li>
                            <li>verification & validation of data</li>
                        </ul>
                        <p>Agility, Quality, and Experts – We will handle your data needs with ease.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Data Entry</h3>
                        <h4 class="in_sub_title"><span class="in_title">Logistics &</span> Transportation</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-02.png')}}" class="img-fluid"
                            alt="">
                        <p>Most logistics companies find themselves overwhelmed by the incoming volumes of
                            transportation paperwork, they start searching for logistics data entry solutions that can
                            help them process this data faster and more perfectly to ensure that all the requisite
                            details are uploaded into the system. That's why we are here to serve
                            <ul>
                                <li>Driver log entry</li>
                                <li>Purchase order entry</li>
                                <li>Bill of leading verification and data entry</li>
                                <li>Contract/ Rate Management</li>

                            </ul>
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Data Entry</h3>
                        <h4 class="in_sub_title"><span class="in_title">Manufacturing</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-03.png')}}" class="img-fluid"
                            alt="">
                        <p>Don’t fall behind. With our data entry services, take your financial Institute to the next
                            level.
                            Data is the lifeblood needed for the business success of manufacturers and suppliers. Our
                            data entry and data capture services can serve the data management needs of all
                            manufacturing industries. We provide the following services :
                            <ul>
                                <li>Document data entry services </li>
                                <li>Data capture services</li>
                                <li>Database development & migration services</li>

                            </ul>
                        </p>
                        <p>From our data entry services, you can expect top-notch servicing competencies delivered at a
                            low cost.</p>
                    </div>
                </div>


            </div>

        </div>

    </div>
</section>


<!-- Home Scetion - Section Four || Start -->
<section class="section_part" style="padding-top:2rem;" id="pricing">
    <div class="container-fluid col-sm-12 col-md-12 pb-2"
        style="background-color: #C1CCDB;padding-top: 4rem!important;">

        <div class="container pt-3 pb-2">
            <h3 class="style_text_2" style="font-size: 60px;color: #484a7d;font-weight: 900;">Pricing ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Work & offer<span></h3>
        </div>
    </div>
</section>

<section class="section_part" id="sub_serve" style="z-index:;">
    <div class="container-fluid d-flex" style="background-color: #C1CCDB;">

        <div class="container service_style_20 service_grp_hover">
            <div class="d-flex" id="service_grp_names">
                @forelse ($faq_service_name as $key=> $service_name)
                <div class="service_grp_names me-2"
                    onclick="ServiceNameClick(`{{$service_name->id}}`, `grp_one1{{$service_name->id}}`)"
                    {{-- onmouseout="service_grp_names_out(`grp_one_menu{{$key}}`)" --}}>{{$service_name->name}}</div>
                @empty
                <div class="grp_one" onclick="ServiceNameClick()">No Service Availeble Now</div>
                @endforelse

                {{-- @for ($i = 0; $i < count($faq_service_name); $i++)
                <div class="col-sm-12 col-md-12 p-4" id="service_grp_hover_part">
                    <h4 style="font-size:20px;">Choose Your Service</h4>
                    <hr style="margin: 0 0 10px 0;">
                    <div class="row" id="service_grp_names_list">
                        <div class="col-sm-12 col-md-6">
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
                    <li class="grp_one" id="grp_one{{$service_name->id}}"
    onclick="ServiceNameClick()">{{$service_name->name}}</li>
    @empty
    <li class="grp_one" onclick="ServiceNameClick()">No Service Availeble Now</li>
    @endforelse
    </ul> --}}

    {{-- <div class="col-sm-12 col-md-12 p-4" id="service_grp_hover_part">
                <h4 style="font-size:20px;">Choose Your Service</h4>
                <hr style="margin: 0 0 10px 0;">
                <div class="row">
                    @forelse ($faq_service_name as $service)
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
            <div class="col-sm-12 col-md-12 sct_heading" id="sct_heading"
                style="margin-top: 10px;padding-bottom: 5px;padding-left: 0;">
                @if (count($faq_service_name) != 0)
                <p class="pt-3" id="service_list_title">Service List Title</p>
                @else
                @endif
                <div class="mb-0" style="border-bottom:1px solid #fff;" id="single_service_sub_nav">
                    <ul>
                        <li class="btn_overview">Overview</li>
                        {{-- <li class="service_list_description">Description of services</li>
                        <li class="why_choose_DiMarz">Why Choose DiMarz</li> --}}
                        <li class="service_faq">FAQ</li>
                        <a href="#compare_packages">Compare Package</a>
                    </ul>
                </div>
            </div>

            <div class="service_col_one_2 d-none">
                <ul class="service_all_list" id="menu">
                    @forelse ($faq_service_name as $service)
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
                            <div data-index="2" class="content_field_div" id="service_list_description"
                                class="mt-3 my-4"></div>
                            <h3 class="mt-2 pt-2">Why Choose DiMarz</h3>
                            <div data-index="3" class="content_field_div" id="why_choose_DiMarz" class="mt-3 my-4">
                            </div>
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
                                <img src="{{asset('final_front_assets/img/portfolio/branding-1.jpg')}}" alt="slider1"
                                    class="img-fluid">
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
                                <div id="package_offer">
                                    {{-- 10% Off --}}
                                </div>
                                <div class="row m-0 mt-2 p-0 justify-content-between"
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
                                        <button class="btn w-100">Confirm Order</button>
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
                        @forelse ($faq_service_name as $service)
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
                        @if (count($faq_service_name) != 0)
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
                            @if (count($faq_service_name) != 0)
                            {!! $faq_service_name[0]->description !!}
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
        {{-- <h3 class="mb-4" style="font-size:30px;">Compare Packages</h3> --}}
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
        <ul class="li_style">
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

<section id="work_up" style="padding:4rem 0;z-index: 26;" class="section_part">
    <div class="container-fluid col-sm-12 col-md-12 mb-2">
        <!-- background-color: #C1CCDB; -->
        <div class="container pb-1" style="border-bottom:1px solid #484a7d">
            <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Work ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Read Up<span></h3>
            {{-- <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Data Entry Outsourcing <span
                    style="font-size: 35px;color:#000;font-weight: 500;">| The Definitive Guide To Outsource leads<span></h3> --}}

        </div>

        <div class="container mt-3" id="work_up_content">
            {{-- <h4 class="m-0" style="font-size: 20px;color: #484a7d;font-weight: 600;">The Definitive Guide To Outsource
                leads</h4> --}}
            <h3 class="mt-0 style_text_2" style="font-size: 35px;color: #484a7d;font-weight: 900;">Importance of a Data
                Entry Assistant in a Company</h3>

            <p class="mb-3">A data entry assistant plays an important role in any office. They help employees with their
                work by helping to enter and edit data. They can also help to organize data by helping to group similar
                data. With the help of a data entry assistant, you can enter information more quickly and easily. In
                addition, a data entry assistant can also help with tasks such as organizing data, checking, and
                ensuring accuracy in data entry.</p>

            <h2 class="mt-4">What Type of Job is Data Entry?</h2>

            <p class="mb-3">Data entry assistants can be found in a variety of positions. For example, a data entry
                officer (also referred to as a data entry assistant or data entry clerk) is what it sounds like: someone
                who works in the data entry department of an organization. This person enters information into computers
                using a variety of different software programs. A data entry assistant also often works closely with
                other departments to ensure that all information entered into the computer system is accurate. In
                addition to data entry, data entry assistants can also be found in various other positions.</p>

            <p class="mb-3">In a large organization, there is often more than one person in charge of the entire
                database. A department head for the project team typically takes overall responsibility for the entire
                database and all the people working on it. There may also be a project manager, who takes responsibility
                for the overall project team, and a database specialist. Each individual is responsible for ensuring
                that the database is built under all company policies, regulations, and standards. A data entry
                assistant is responsible for the database and is typically a highly-skilled and experienced person who
                has been trained in data entry. A database administrator is responsible for the overall maintenance of
                the database, which includes upgrading and fixing any problems that may arise.</p>

            <h2 class="mt-4">What Does a Data Entry Assistant Do?</h2>

            <p class="mb-3">A data entry assistant is responsible for inputting the information that needs to be entered
                into the database. A data entry assistant will also ensure that all information entered into the
                database is entered accurately. For example, if a user must enter a transaction amount, it needs to be
                entered exactly as the transaction is debited from their account.</p>
            <p class="mb-3"><strong>Data Entry Assistant Responsibilities:</strong>
                <ul class="li_style">
                    <li>Input information into the database.</li>
                    <li>Submit order or inquiry forms to the manager.</li>
                    <li>Review and approve all customer orders, inquiries, and billing statements.</li>
                    <li>Review and update any errors that may occur in the database.</li>
                    <li>Ensure that information entered into the database is correct, accurate, and complete.</li>
                    <li>Receive, review, and approve all customer orders, inquiries, and billing statements.</li>
                    <li>Compile and prepare for shipping orders submitted by customers.</li>
                </ul>
            </p>
            <h2 class="mt-4">What are The Duties and Responsibilities of a Data Entry Clerk?</h2>
            <p class="mb-3">Data entry experts typically have a high school diploma or equivalent. Often, the position
                will require a high school diploma and training in several computer applications. Data Entry Skills
                Training: Must be able to read, write and use Microsoft Word and Excel. Some training may be required to
                learn how to use the other applications.</p>
            <p class="mb-3">A data entry assistant is responsible for entering data into computers. They also assist
                with other tasks, such as formatting or entering information into forms. The duties of a data entry
                clerk vary depending on the company they work for, but typically they will be responsible for the
                following:</p>

            <ul>
                <li>Knowledge of Office Equipment</li>
                <li>Loading and saving frequently accessed data</li>
                <li>Filing reports and forms</li>
            </ul>

            <p class="mb-3">Data entry can be tedious and time-consuming, so a data entry assistant must be able to
                handle intensive work well. They should also have strong typing skills to enter information into
                computer files easily. Many of the same skills employers look for in data entry assistants for other
                jobs, such as a good memory and fast typing speed, are also important to handle computer tasks.</p>
            <h2 class="mt-4">What Makes a Good Data Entry Assistant?</h2>
            <p class="mb-3">A data entry clerk will be able to handle a wide variety of tasks that require typing,
                including:
                <ul>
                    <li>Developing and maintaining a database of information to be entered into the computer files.</li>
                    <li>Basic understanding of Databases</li>
                    <li>Locating and retrieving data from databases.</li>
                    <li>Entering information into database files.</li>
                    <li>Format information (such as dates, times, and currency symbols).</li>
                    <li>Sending and receiving emails.</li>
                    <li>Setting up and maintaining the computer file system.</li>
                    <li>The job description may include other tasks, such as data entry for account records.</li>
                </ul>
            </p>
            <h2 class="mt-4">Why Choose DiMarz For Your Data Entry Works?</h2>
            <p class="mb-3">If you are looking for an experienced, optimistic, reliable data entry assistant, DiMarz has
                got you covered. We have decent experience in this field, allowing us to make reliable and accurate
                entries in your computer files on time, every time. Our staffs are highly trained and experienced in all
                aspects of data entry, including:</p>

            <ul>
                <li>Microsoft Word, Excel</li>
                <li>Google Docs, Spreadsheet Program</li>
                <li>Database and Web Based Applications</li>
            </ul>
            <p class="mb-3">We will also be able to assist you with your data entry needs. Your computer file system will be ready for your use as soon as we have loaded the program onto the computer. So, if you need any data entry services, choose DiMarz!</p>
        </div>
    </div>
</section>


{{-- <section class="container-fluid slogan_box slogan_dark py-5 section_part" style="z-index: 26;">
    <div class="container mt-3">
        <h3>We like to descrive what are doing as a process</h3>
        <h5>What get measured, gets managed</h5>
    </div>
</section> --}}

{{-- <section class="section_part" style="z-index: 26;">
    <div class="container-fluid col-sm-12 col-md-12 mb-5" style="background-color: #C1CCDB;padding:4rem 0;">
        <div class="container">
            <h3 class="text-uppercase style_text_2">KNOW OUR STANDARD WORKING PROCEDURE</h3>
        </div>
    </div>
</section> --}}




<section id="process_up" style="padding-top:4rem;z-index: 26;" class="section_part">
    <div class="container-fluid col-sm-12 col-md-12 mb-2">
        <!-- background-color: #C1CCDB; -->
        <div class="container pb-1" style="border-bottom:1px solid #484a7d">
            <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Process ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Way we run<span></h3>
        </div>
        <div class="container py-3">
            <h4 class="mb-1" style="font-size: 20px;color: #484a7d;">What get measured, gets managed</h4>
            <h3 class="m-0" style="font-size: 35px;color: #484a7d;">We like to descrive what are doing as a process</h3>

            <p class="my-4">DiMarz , is a customer satisfaction and work-quality-oriented company that strives to
                provide real value for its clients. One of the critical advantages of DiMarz is that they are technology
                and solutions-driven, allowing them to adapt to the fashionable demands of any industry</p>
        </div>
    </div>
</section>



<!-- Home Scetion - Section Six || Start -->
<section class="section_part" style="background:#D8DBE1;z-index: 26;">
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
                <h3 data-index="0" class="spinx-acco-title current"><i class='bx bx-user'></i>Data Collection</h3>
                <div class="spinx-acco-content" style="display: block;">
                    <p>First We will show you our sample work, If you like our sample work of Data entry services, then
                        we go for the main project details with all specifications and requirements.</p>

                </div>
                <h3 data-index="1" class="spinx-acco-title"><i class='bx bx-user'></i>Data Analyse</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>INTELLIGENCE &amp; EXPERIENCE</h4> --}}
                    <p>Before we start to collect your Data with high precision, our experts analyze your full project
                        to find the most appropriate & easy method. They will transfer it to our Expert team with their
                        appropriate method.</p>

                </div>
                <h3 data-index="2" class="spinx-acco-title"><i class='bx bx-user'></i>Editor Services</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>After collecting your data our expert editors will revise all the files properly and if there
                        needs any correction, the editor will make it unique. They will check the project many times if
                        needed.</p>

                </div>
                <h3 data-index="3" class="spinx-acco-title"><i class='bx bx-user'></i>Quality Assurance</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>We always try to maintain overall quality and submit error-free data. In this case, we maintain a
                        strict quality check for any type of data collecting service. We always try to give you
                        error-free Data.</p>
                </div>
                <h3 data-index="4" class="spinx-acco-title"><i class='bx bx-user'></i>Project Handover</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>We always try to maintain the best quality for submitting error-free tasks. In this case, we
                        maintain a strict quality check for your desired services. Then, The final step is here ; After
                        final checking we deliver your project. We always assure the best quality service for you.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq_section" style="padding-top:8rem;z-index: 26;" class="section_part">
    <div class="container-fluid col-sm-12 col-md-12 mb-2">
        <!-- background-color: #C1CCDB; -->
        <div class="container pb-1" style="border-bottom:1px solid #484a7d">
            <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">FAQ ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Ask & Discover<span></h3>
        </div>
        <div class="container py-3">
            {{-- <h4 class="mb-1" style="font-size: 20px;color: #484a7d;">We will explain everything simply</h4>
            <h3 class="m-0" style="font-size: 35px;color: #484a7d;">We understand it well enough</h3> --}}

            <p class="my-4"></p>

            <div class="col-12 industry_26_css_bottom">
                <div class="service_rotate_box">
                    <h6>DiMarz Studio</h6>
                </div>
                <h4 class="mb-1" style="font-size: 20px;color: #484a7d;">We will explain everything simply</h4>
                <h3 class="mt-0 mb-2" style="font-size: 35px;color: #484a7d;">We understand it well enough</h3>
                {{-- <h4 class="in_sub_title"><span class="in_title">Photo</span> Editing & Retouching</h4> --}}
                <p>Are you looking to outsource your work to a data entry service provider but have doubts about its
                    process? Here are a few FAQ asked by our customers, which may help you clear some of your doubts:
                </p>
            </div>
        </div>
    </div>
</section>



<section class="section_part" style="z-index: 26;">
    <div class="container">
        <div class="row faq_section">
            <div class="col-sm-12 col-md-12 my-5">
                <div class="accordion" id="accordionExample">



                    @php
                    $serviceName = 'Data Entry';
                    $getServiceName = App\Models\ServiceName::where('name', '=', $serviceName)->first();
                    if (!empty($getServiceName)) {
                    $getFaqByServiceName = App\Models\FaqTable::where('service_name_id', '=',
                    $getServiceName->id)->get();
                    }else{
                    $getFaqByServiceName = [];
                    }
                    @endphp


                    <div class="accordion" id="accordionExample">
                        @foreach ($getFaqByServiceName as $item)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{$item->id}}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{$item->id}}" aria-expanded="true"
                                    aria-controls="collapse{{$item->id}}"><span><img class="img-fluid"
                                            src="{{asset('final_front_assets/img/icons/faq_icon.png')}}"
                                            alt=""></span>{{$item->question}}</button></h2>
                            <div id="collapse{{$item->id}}" class="accordion-collapse collapse"
                                aria-labelledby="heading{{$item->id}}" data-bs-parent="#accordionExample">
                                <div class="accordion-body d-flex">
                                    <div class="accordion-body-img">
                                        <img class="img-fluid"
                                            src="{{asset('final_front_assets/img/icons/faq_icon_ans2.png')}}" alt="">
                                    </div>
                                    <div>{{$item->answer}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq_section" style="padding:4rem 0;z-index: 26;" class="section_part">
    <div class="container-fluid col-sm-12 col-md-12 mb-2">
        <!-- background-color: #C1CCDB; -->
        <div class="container pb-1" style="border-bottom:1px solid #484a7d">
            <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Contact ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Let us know your needs<span></h3>
        </div>
    </div>
</section>

@endsection


@section('custom_js')
<script src="{{asset('final_front_assets/libs/swiper/swiper-bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="{{asset('final_front_assets/js/service-script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


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

    function service_grp_names(id) {

        // alert(id);

        $.ajax({
            type: 'POST',
            url: `/servicelistmenu`,
            data: {
                'id': `${id}`
            },
            success: function (data) {
                console.log(data);
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

    $("#pricing_section").click(function () {
        window.scrollTo(300, 3700);
    });

</script>
<!-- Sub Menu Function || End -->
@endsection
