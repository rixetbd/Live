@extends('frontend.final.master2')

@section('meta_tag')
@include('meta::manager',[
'title' => 'Graphics Design',
'author' => 'DiMarz',
'description' => 'Graphics Design is the process of producing new sales leads through developing interest in a service
or product.',
'keywords' => 'Graphics Design, service',
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
    #work_up_content h2 {
        font-size: 2rem !important;
        font-weight: 500 !important;
        margin-bottom: .6rem;
    }

    #work_up_content h3 {
        font-size: 1.6rem !important;
        font-weight: 500 !important;
        margin-bottom: .6rem;
    }

    #work_up_content h5 {
        font-size: 1.4rem !important;
        font-weight: 500 !important;
        margin-bottom: .6rem;
    }

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

    /* .industry_26_css_top{
        border: 0;
        position: relative;
    }
    .industry_26_css_top h6{
        position: absolute;
        top: -15px;
        left: -130px;
        white-space: nowrap;
        transform-origin: right;
        transform: rotate(-90deg);
        font-size: 20px;
    } */

    .industry_26_css {
        margin: 0;
        margin-bottom: 4rem;
    }

    #img_box_graphics div {
        border: 1px solid #000;
        height: 400px;
        overflow: hidden;
    }

    #img_box_graphics div img {
        padding: 0;
        margin: 0;
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

    .industry_26_css_bottom p {
        color: #5a5a5ae5;
    }


    @media (min-width: 1400px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            max-width: 1320px !important;
        }
    }

    .whitespace_pre {
        white-space: nowrap;
        padding-left: 20px;
        padding-bottom: 20px;
    }

    .whitespace_pre div:nth-child(1) {
        padding-bottom: 10px;
    }

</style>

<script src="https://cdn.tailwindcss.com"></script>

<style>
    .card.active {
        flex-grow: 3;
        max-width: 50%;
    }

    .card.active .label {
        transform: translateX(0.5rem);
    }

    .card.active .label .content>* {
        opacity: 1;
        transform: translateX(0);
    }

    .card.active .shadow {
        opacity: 0.75;
        transform: translateY(0);
    }

    .transition-base {
        transition-duration: 700ms;
        transition-property: all;
        transition-timing-function: cubic-bezier(0.2, 1, 0.25, 1);
    }

    .slider_style_ours .slider_style_ours_height {
        height: 28rem;
    }

    .collapse {
        visibility: unset !important;
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
                <h5>We Provide Effective</h5>
                {{-- Make Your Statement Loud & Clear Through Meaningful Graphic Designs --}}
                <h3>Graphics Design</h3>
                <h5>Services</h5>
                {{-- <a href="#" class="btn">Contact us</a> --}}
                {{-- <p class="text-white mt-4">Graphics Design is the process of producing new sales leads through
                    developing interest in a service or product. Graphics Design services are a fundamental part of
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
                    <h1 class="py-5 mb-2" style="background: #c1ccdb;font-weight:500;">Effective value in Graphic Design Services From DiMarz</h1>
                    <div class="px-5 py-3">
                        <p>In today’s world, visual representation is the best way to convey your message to your audiences. People love visual representation because it can represent your brand or identity in a lucrative and expressive way. Our Graphics design team will provide you a value in graphic design services. We will design according to your needs which will win both yours and your audience's hearts. We will make sure that your message gets loud and clear through our graphics design services.</p>
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
                    <h1 class="py-4" style="font-weight:500;">Unique | Lucrative | Different Graphics Design Experience</h1>
                    <p>As a motivated and passionate designer team, we strive to deliver the quality our clients want. We offer unique services and designs which will definitely win your heart. We designed the website to give you a taste of world-class design service which you and our valuable clients deserve! </p>
                    <p>We design stunning graphics that capture the essence of your brand. Our experienced designers will help you to create a distinctive look that will set your business apart from the rest.</p>
                </div>
            </div>
        </div>

        <div id="industry" style="padding-top:8rem;">
            <div class="container-fluid col-sm-12 col-md-12 mb-2">
                <!-- background-color: #C1CCDB; -->
                <div class="container pb-1" style="border-bottom:1px solid #484a7d">
                    <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">DiMarz Studio !
                        <span style="font-size: 35px;color:#000;font-weight: 500;">We do<span></h3>
                </div>
            </div>
        </div>

        <div class="container" style="">
            <div class="row">
                <div class="col-sm-12 col-md-12 industry_26_css pt-5">
                    <div class="col-12 industry_26_css_bottom">
                        <div class="service_rotate_box">
                            <h6>DiMarz Studio</h6>
                        </div>
                        <h4 class="in_sub_title mb-3"><span class="in_title">Photo</span> Editing & Retouching</h4>
                        <p>Our photo editing services are the perfect way to create beautiful and professional photos.
                            From basic editing to advanced photo manipulation. Photo editing is essential to make your
                            photos unique and lucrative on your social media platforms and for your business. People
                            always focus on eye-catching visual designs and if you can edit your images professionally,
                            it will be at the top of the list when it comes to your marketing initiatives. So, why you
                            are waiting for?</p>
                    </div>


                    <div
                        class="pt-5 slider_style_ours antialiased bg-gradient-to-b to-gray-900 flex font-sans items-center justify-center">
                        <div class="slider_style_ours_height flex items-stretch min-w-md overflow-hidden w-full">
                            <div
                                class="active bg-center bg-cover bg-red-500 bg-red-img bg-no-repeat card cursor-pointer flex-grow m-2 min-w-14 overflow-hidden relative rounded-3xl transition-base">
                                <div
                                    class="absolute bg-gradient-to-b bottom-0 from-transparent h-1/2 inset-x-0 opacity-0 shadow to-black transform transition-base translate-y-1/2 z-10">
                                </div>
                                <div class="absolute bottom-0 flex label left-0 mb-3 ml-2 transition-base z-20">
                                    <div
                                        class="bg-gray-900 flex h-10 icon items-center justify-center mr-3 rounded-full text-red-500 w-10">
                                        <i class="fas fa-walking"></i>
                                    </div>
                                    <div
                                        class="content flex flex-col justify-center leading-tight text-white whitespace_pre">
                                        <div
                                            class="font-bold opacity-0 relative transform transition-base translate-x-8">
                                            Background Removal Servic</div>
                                        <div
                                            class="delay-100 opacity-0 relative transform transition-base translate-x-8">
                                            Clipping Path Service, Ghost Mannequin Effect, <br>Photoshop Image Masking,
                                            Photoshop Shadow Service</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-center bg-cover bg-yellow-500 bg-yellow-img bg-no-repeat card cursor-pointer flex-grow m-2 min-w-14 overflow-hidden relative rounded-3xl transition-base">
                                <div
                                    class="absolute bg-gradient-to-b bottom-0 from-transparent h-1/2 inset-x-0 opacity-0 shadow to-black transform transition-base translate-y-1/2 z-10">
                                </div>
                                <div class="absolute bottom-0 flex label left-0 mb-3 ml-2 transition-base z-20">
                                    <div
                                        class="bg-gray-900 flex h-10 icon items-center justify-center rounded-full text-yellow-500 w-10">
                                        <i class="fas fa-apple-alt"></i>
                                    </div>
                                    <div
                                        class="content flex flex-col justify-center leading-tight ml-3 text-white whitespace_pre">
                                        <div
                                            class="font-bold opacity-0 relative transform transition-base translate-x-8">
                                            Professional Photo Retouching</div>
                                        <div
                                            class="delay-100 opacity-0 relative transform transition-base translate-x-8">
                                            Photo Restoration Service, Photoshop Color Correction, <br>High-End Photo
                                            Retouching, White & Light Balance, Lightroom Color Correction
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-center bg-cover bg-green-500 bg-green-img bg-no-repeat card cursor-pointer flex-grow m-2 min-w-14 overflow-hidden relative rounded-3xl transition-base">
                                <div
                                    class="absolute bg-gradient-to-b bottom-0 from-transparent h-1/2 inset-x-0 opacity-0 shadow to-black transform transition-base translate-y-1/2 z-10">
                                </div>
                                <div class="absolute bottom-0 flex label left-0 mb-3 ml-2 transition-base z-20">
                                    <div
                                        class="bg-gray-900 flex h-10 icon items-center justify-center rounded-full text-green-500 w-10">
                                        <i class="fas fa-tree"></i>
                                    </div>
                                    <div
                                        class="content flex flex-col justify-center leading-tight ml-3 text-white whitespace_pre">
                                        <div
                                            class="font-bold opacity-0 relative transform transition-base translate-x-8">
                                            Landscape</div>
                                        <div
                                            class="delay-100 opacity-0 relative transform transition-base translate-x-8">
                                            Explore the surroundings</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-blue bg-cover-500 bg-blue-img bg-center bg-no-repeat card cursor-pointer flex-grow m-2 min-w-14 overflow-hidden relative rounded-3xl transition-base">
                                <div
                                    class="absolute bg-gradient-to-b bottom-0 from-transparent h-1/2 inset-x-0 opacity-0 shadow to-black transform transition-base translate-y-1/2 z-10">
                                </div>
                                <div class="absolute bottom-0 flex label left-0 mb-3 ml-2 transition-base z-20">
                                    <div
                                        class="bg-gray-900 flex h-10 icon items-center justify-center rounded-full text-blue-500 w-10">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <div
                                        class="content flex flex-col justify-center leading-tight ml-3 text-white whitespace_pre">
                                        <div
                                            class="font-bold opacity-0 relative transform transition-base translate-x-8">
                                            Pools</div>
                                        <div
                                            class="delay-100 opacity-0 relative transform transition-base translate-x-8">
                                            Soak in tranquility</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="bg-center bg-cover bg-purple-500 bg-purple-img bg-no-repeat card cursor-pointer flex-grow m-2 min-w-14 overflow-hidden relative rounded-3xl transition-base">
                                <div
                                    class="absolute bg-gradient-to-b bottom-0 from-transparent h-1/2 inset-x-0 opacity-0 shadow to-black transform transition-base translate-y-1/2 z-10">
                                </div>
                                <div class="absolute bottom-0 flex label left-0 mb-3 ml-2 transition-base z-20">
                                    <div
                                        class="bg-gray-900 flex h-10 icon items-center justify-center rounded-full text-purple-500 w-10">
                                        <i class="fas fa-palette"></i>
                                    </div>
                                    <div
                                        class="content flex flex-col justify-center leading-tight ml-3 text-white whitespace_pre">
                                        <div
                                            class="font-bold opacity-0 relative transform transition-base translate-x-8">
                                            Reflect</div>
                                        <div
                                            class="delay-100 opacity-0 relative transform transition-base translate-x-8">
                                            Harness your potential</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 industry_26_css">
                    <div class="col-12 industry_26_css_bottom">
                        <div class="service_rotate_box">
                            <h6>DiMarz Studio</h6>
                        </div>
                        <h4 class="in_sub_title mb-3"><span class="in_title">Vector</span> Illustration & Digital Art
                        </h4>
                        <p>We offer vector illustration and digital art services that can help you create illustrations
                            and digital art from your sketches or your instructions. Vector art has no fixed resolution
                            it is a mathematically calculated resolution so you can export your art to any desired
                            resolution. We have expert illustration artists with 5+ years of experience, we know how to
                            capture ideas and get your vision clearly. You will understand the value of vector art and
                            how it can benefit you if you do a vector drawing. Here is a sample of vector art & hope you
                            can get a short response.</p>
                    </div>
                    <div class="col-12">
                        <div class="row my-5" id="img_box_graphics">
                            <div class="col-sm-12 col-md-3">
                                {{-- <img class="img-fluid" src="{{asset('uploads/service_banner/1_service_6358e1ee4b435.jpg')}}"
                                alt=""> --}}
                            </div>
                            <div class="col-sm-12 col-md-6">
                                {{-- <img class="img-fluid" src="{{asset('uploads/service_banner/1_service_6358e1ee4b435.jpg')}}"
                                alt=""> --}}
                            </div>
                            <div class="col-sm-12 col-md-3">
                                {{-- <img class="img-fluid" src="{{asset('uploads/service_banner/1_service_6358e1ee4b435.jpg')}}"
                                alt=""> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 industry_26_css">
                    <div class="col-12 industry_26_css_bottom">
                        <div class="service_rotate_box">
                            <h6>DiMarz Studio</h6>
                        </div>
                        <h4 class="in_sub_title mb-3"><span class="in_title">Printable</span> Design</h4>
                        <p>Looking for some professional high-quality printable designs? We are here! DiMarz offers
                            high-quality printable designs for personal business cards, flyers, banners, or brochures.
                            We ensure printable CMYK color grades with top-grade design quality. We use free fonts and
                            two color variations so you can print your design without any color confusion and use it
                            online without any problem. CMYK color schemes create a consistent visual that reinforces
                            your design for print.</p>
                    </div>
                    <div class="col-12">
                        <div class="row my-5" id="img_box_graphics">
                            <div class="col-sm-12 col-md-3">
                                <img class="" src="{{asset('uploads/demo_img/img_1.jpg')}}" alt="">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                {{-- <img class="img-fluid" src="{{asset('uploads/service_banner/1_service_6358e1ee4b435.jpg')}}"
                                alt=""> --}}
                            </div>
                            <div class="col-sm-12 col-md-3">
                                {{-- <img class="img-fluid" src="{{asset('uploads/service_banner/1_service_6358e1ee4b435.jpg')}}"
                                alt=""> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 industry_26_css">
                    <div class="col-12 industry_26_css_bottom">
                        <div class="service_rotate_box">
                            <h6>DiMarz Studio</h6>
                        </div>
                        <h4 class="in_sub_title mb-3"><span class="in_title">Motion</span> Graphics</h4>
                        <p>Motion graphic design is the process of creating graphics that represent motion or action in
                            a visual way. It can be used to convey information or to promote a product or service.
                            Motion graphic designers work on projects such as advertising, brochures, logos, and
                            illustrations. Here designers use a variety of software and techniques to create these
                            graphics, including Photoshop, Illustrator, After Effect and Premiere Pro.</p>
                    </div>
                    <div class="col-12">
                        <div class="row my-5" id="img_box_graphics">
                            <div class="col-sm-12 col-md-3">
                                {{-- <img class="img-fluid" src="{{asset('uploads/service_banner/1_service_6358e1ee4b435.jpg')}}"
                                alt=""> --}}
                            </div>
                            <div class="col-sm-12 col-md-6">
                                {{-- <img class="img-fluid" src="{{asset('uploads/service_banner/1_service_6358e1ee4b435.jpg')}}"
                                alt=""> --}}
                            </div>
                            <div class="col-sm-12 col-md-3">
                                {{-- <img class="img-fluid" src="{{asset('uploads/service_banner/1_service_6358e1ee4b435.jpg')}}"
                                alt=""> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="" style="padding-top:8rem;z-index: 26;" class="section_part">
    <div class="container-fluid col-sm-12 col-md-12 mb-2">
        <!-- background-color: #C1CCDB; -->
        <div class="container pb-1">
            <h3 class="style_text_2 text-center"
                style="text-transform:uppercase;font-size: 60px;color: #484a7d;font-weight: 900;">Order a Service</h3>
        </div>
        <div class="container py-3">
            <h4 class="mb-1 text-center" style="font-weight: 400;font-size: 20px;color: #484a7d;">This is a place where
                you can easily order what you require.</h4>
            <h3 class="m-0 text-center" style="font-weight: 400;font-size: 23px;color: #484a7d;">Choose one of our
                offers and fill out the fields</h3>
            <hr>

            {{-- <p class="my-4">Lead Generation is our specialty, but it starts with your Discussion. We take your unique
                business idea and understand your needs. We tailor a marketing strategy with our lead generation
                services so that you get the most effective return. Lead Generation is our specialty, but it starts with
                your Discussion. We take your unique business idea and understand your needs. We tailor a marketing
                strategy with our lead generation services so that you get the most effective return. Lead Generation is
                our specialty, but it starts with your Discussion. We take your unique business idea and understand your
                needs. We tailor a marketing strategy with our lead generation services so that you get the most
                effective return. Lead Generation is our specialty, but it starts with your Discussion. We take your
                unique business idea and understand your needs.</p> --}}
        </div>
    </div>
</section>

<!-- Home Scetion - Section Four || Start -->
<section class="section_part" style="" id="pricing">
    <div class="container-fluid col-sm-12 col-md-12 pb-2" style="padding-top: 2rem!important;">

        <div class="container pt-3 pb-2">
            <h3 class="style_text_2" style="font-size: 60px;color: #484a7d;font-weight: 900;">Pricing ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Work & offer<span></h3>
        </div>

    </div>
</section>

<section class="section_part" id="sub_serve" style="z-index:;">
    <div class="container-fluid d-flex">

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
            <div class="col-sm-12 col-md-12 sct_heading" id="sct_heading"
                style="margin-top: 10px;padding-bottom: 5px;padding-left: 0;">
                @if (count($service_list) != 0)
                <p class="pt-3" id="service_list_title">Service List Title</p>
                @else
                @endif
                <div class="mb-0" style="border-bottom:1px solid #fff;" id="single_service_sub_nav">
                    <ul>
                        <li class="btn_overview">Overview</li>
                        {{-- <li class="service_list_description">Description of services</li>
                        <li class="why_choose_dimarz">Why Choose DiMarz</li> --}}
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
                            <div data-index="2" class="content_field_div" id="service_list_description"
                                class="mt-3 my-4"></div>
                            <h3 class="mt-2 pt-2">Why Choose DiMarz</h3>
                            <div data-index="3" class="content_field_div" id="why_choose_dimarz" class="mt-3 my-4">
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
        <ul>
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
        </div>

        <div class="container mt-3" id="work_up_content">
            {{-- <h4 class="m-0" style="font-size: 20px;color: #484a7d;font-weight: 600;">The Definitive Guide To Outsource leads</h4> --}}
            <h3 class="mt-0 style_text_2" style="font-size: 35px;color: #484a7d;font-weight: 900;">Value in Graphic
                Design Services</h3>

            <p class="my-3">Nowadays, you may notice that many big industries are putting a lot of value in graphic
                design. Do you know why?</p>
            <p class="mb-3">Graphics design is a trendy sector in today's world. From personal needs to big businesses,
                everyone is putting their maximum value in graphic design and services. Graphic design is an effective
                way to express your words through visual representation, which conveys a deep and lasting message in
                people’s mind. This is why people are now understanding the effectiveness and value in graphic design.
            </p>
            <h2 class="mt-4">What is graphic design ?</h2>
            <p class="mb-3">Graphic design is a creation & art that communicates some idea or message in a visual way.
                These visuals can express your ideas & can be as simple as a business logo or as complex as a page
                layout on a website. If you use this for any type of online or offline purpose you will get effective
                value in graphic design.</p>
            <p class="mb-3">A company or an organization can use graphic design for branding and creating an identity.
                Graphic design can promote services and sell products through advertisements, social media, and
                websites, and convey complex information visually through infographics & promotional videos.</p>
            <p class="mb-3">We see many authentic graphical artistic things around the world but hidden in the corner of
                every magazine, newspaper, entertainment, and textbook is a set of graphic designs that influence our
                perception.</p>
            <h2 class="mt-4">Understanding the Value in Graphic Design</h2>
            <p class="mb-3">Simply defined, value is something about how worthy and useful you are and how important it
                will be in the present and future. If a graphic design has value, it can gain high visibility to the
                world for both you and your business and services through social media and websites which can increase
                your sales, your popularity and your audience. If you design something that has no meaning and you are
                not clear about what you want to convey, your design will be considered worthless. So, value in graphic
                design is important to understand.</p>
            <h2 class="mt-4">What does a graphic designer do?</h2>
            <p class="mb-3">A graphic designer designs something that is useful and has meaning and uses various
                technologies to create effective visual designs. A graphic designer's job is basically to work with a
                client or company to create and promote their company's identity, but common designer duties can include
                creating visual assets to support a marketing campaign and designing a graphic overlay for social media
                posts. A designer can express your ideas and your needs through animation videos and pictures created by
                art and illustrations. Digitally retouching photos for advertising & make designs that can be printed. A
                graphic designer studies trendy designs and understands the client's requirements. Competitors research
                one and a half designs and learn how to improve them.</p>
            <h2 class="mt-4">Types of graphic design</h2>
            <p class="mb-3">There are 8 main categories of graphic design. If you look further, you will find that there
                are many types of graphic design. The world of designing type is large, you cannot count it in one day.
                Not all designers can design this kind of one. Because everyone's skills and creativity are different.
                However, no matter what type of design we do, all designs have value in graphic design & fall into some
                main category. With a variety of different types of graphic design specialties available, below are four
                of the most common areas.</p>
            <h5 class="mt-4">Image Editing</h5>
            <p class="mb-3">Image editing is a digital software and technology that can be used to change and enhance or
                enhance your digital images. Image editing in digital image processing can be mainly divided into two
                types: pixel editing and parametric image editing. Pixel editing deals with changing an image at the
                pixel level. On the other hand, parametric image editing focuses on adjusting the appearance of the
                image without changing the source image.
            </p>
            <h5 class="mt-4">Vector Illustration & Digital Art</h5>
            <p class="mb-3">Vector artwork is a type of graphic design. Based on mathematical calculation, these images
                are made up of dots, lines, curves, and shapes. A vector picture file can be scaled to any size you
                desire because there is no loss of quality & resolution when it is scaled.</p>
            <h5 class="mt-4">Layout and Print Design</h5>
            <p class="mb-3">Layout basically refers to the arrangement of predefined items like images, text, shapes,
                and styles on a page. It establishes the overall look and relationship between graphic elements to
                achieve a smooth flow of message and eye movement for maximum effectiveness or impact.</p>
            <h5 class="mt-4">Motion Graphics</h5>
            <p class="mb-3">Motion graphics is a way to express your ideas or explanation in an animated video. motion
                graphics create a moving visual design by using digital software & technology.</p>
            <p class="mb-3">Motion graphic elements are arranged in a series of frames. For successful storytelling and
                communicating with people, motion graphics animation is used in various industries.</p>
            <h3>Principles of graphic design</h3>
            <p class="mb-3">The principles of graphic design mean the proper use of contrast, balance, emphasis,
                movement, white space, proportion, hierarchy, repetition, rhythm, pattern, unity, and variation are some
                aspects or guiding principles of visual design. Together, these design concepts can create an object
                that is visually beautiful and enhances the user experience. Good visual design improves readability,
                conveys information clearly and concisely, and directs the reader's attention to the most important
                details of the message.</p>
            <h3>Benefits of Graphic Design</h3>
            <p class="mb-3">There are many benefits to graphic design. Graphic Designing has its own merits which can
                help an individual or organization to convey their message to the world. In today's world, people like
                visual representations more than normal text contents. This explains why you should put your value in
                graphics design. Here are a few benefits of graphics designing:
                <ol style="list-style-type: number;padding-left:1rem;font-size:16px;">
                    <li>Graphic design can help with organization and communication.</li>
                    <li>It can add personality and style to any piece of content.</li>
                    <li>It can help you create a more engaging and visually appealing website or magazine.</li>
                    <li>Graphic design can help give your business an overall look that is easy to understand and
                        navigate.</li>
                    <li>It can also be used as a way to market your product or service to a larger audience.</li>
                </ol>
            </p>
            <p class="my-3">Graphic design is an ever-growing field, and the demand for skilled and specialized
                designers is on the rise. When you’re looking for the right person or any company to take for your
                design, knowing the different types of graphic design will help you identify the specialist you need</p>

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

            <p class="my-4">We follow a standard and step-by-step process when we proceed with graphics design services.
                The process are as follows;</p>
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
                <h3 data-index="0" class="spinx-acco-title current"><i class='bx bx-user'></i>We Will Require The
                    following Things From You</h3>
                <div class="spinx-acco-content" style="display: block;">
                    <p>Before we start with your project, we will require some details from you. These are; Company
                        details, Brand guidelines, Target audience, If there is one; define the problem the brand is
                        facing, What the final product should be (I.e. brochure, eBook, etc), Timeline expectations and
                        milestones, Budget, What you intend viewers to do when they see the final product, Examples of
                        similar work you like (and don’t)
                    </p>
                </div>
                <h3 data-index="1" class="spinx-acco-title"><i class='bx bx-user'></i>Research Competitors & Trending
                    Design</h3>
                <div class="spinx-acco-content" style="display: block;">
                    {{-- <h4>INTELLIGENCE &amp; EXPERIENCE</h4> --}}
                    <p>After we get the required things from you, we will conduct a research based on - Looking at competitor designs, Look at what the intended audience is engaging on channels like social media, Taking all of the knowledge they’ve learned and applying it to the project at hand</p>

                </div>
                <h3 data-index="2" class="spinx-acco-title"><i class='bx bx-user'></i>Present Some Ideas Before Designing</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>We will present some sample designs according to the research and ideas we found. Then we will discuss with you if you like them or need changes.</p>

                </div>
                <h3 data-index="3" class="spinx-acco-title"><i class='bx bx-user'></i>Step-By-Step Review</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>Now that our research is complete. We will design your product and give you the step-by-step report of the design.</p>
                </div>
                <h3 data-index="4" class="spinx-acco-title"><i class='bx bx-user'></i>Present the final product & Revision</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>Finally, we will present the final product in front of you. In case you need any change, we will provide revisions.</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{--
<section class="container-fluid slogan_box slogan_dark py-5 section_part" style="z-index: 26;">
    <div class="container mt-3">
        <h3>Ask the right question & you discover everyting</h3>
        <h5>We will explain everything simply, we understand it well enough</h5>
    </div>
</section> --}}

{{-- <section class="section_part" style="z-index: 25;padding-top:4rem;" id="">
    <div class="container-fluid col-sm-12 col-md-12 mb-5" style="background-color: #C1CCDB;padding:4rem 0;">
        <div class="container">
            <h3 class="style_text_2 py-3">FAQ ! Need Help ?</h3>
        </div>
    </div>
</section>
 --}}

<section id="faq_section" style="padding-top:8rem;z-index: 26;" class="section_part">
    <div class="container-fluid col-sm-12 col-md-12 mb-2">
        <!-- background-color: #C1CCDB; -->
        <div class="container pb-1" style="border-bottom:1px solid #484a7d">
            <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">FAQ ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Ask & Discover<span></h3>
        </div>
        <div class="container py-3">
            <h4 class="mb-1" style="font-size: 20px;color: #484a7d;">We will explain everything simply</h4>
            <h3 class="m-0" style="font-size: 35px;color: #484a7d;">We understand it well enough</h3>

            <p class="my-4">If you have more questions in mind, we have covered some frequently asked questions which
                many clients are asking;</p>
        </div>
    </div>
</section>



<section class="section_part" style="z-index: 26;">
    <div class="container">
        <div class="row faq_section">
            <div class="col-sm-12 col-md-12 mb-5">

                @php
                $serviceName = 'Graphics Design';
                $getServiceName = App\Models\ServiceName::where('name', '=', $serviceName)->first();
                if (!empty($getServiceName)) {
                $getFaqByServiceName = App\Models\FaqTable::where('service_name_id', '=', $getServiceName->id)->get();
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
</section>
<!-- Home Scetion - Section Six || End -->

{{-- <section class="container-fluid slogan_box slogan_dark py-5 section_part" style="z-index: 26">
    <div class="container mt-3">
        <h3>INNOVATIVE OUTSOURCING PLANS</h3>
        <h5>We will explain everything simply, we understand it well enough</h5>
    </div>
</section> --}}

{{-- <section class="container-fluid slogan_box slogan_dark py-5 section_part" style="z-index: 26">
    <div class="container mt-3">
        <h3>PARTICIPATE & EXPERIENCE</h3>
        <h5>We will explain everything simply, we understand it well enough</h5>
    </div>
</section> --}}

<section id="faq_section" style="padding:4rem 0;z-index: 26;" class="section_part">
    <div class="container-fluid col-sm-12 col-md-12 mb-2">
        <!-- background-color: #C1CCDB; -->
        <div class="container pb-1" style="border-bottom:1px solid #484a7d">
            <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Contact ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Let us know your needs<span></h3>
        </div>
    </div>
</section>

{{-- <section class="section_part" style="z-index: 25;">
    <div class="container-fluid col-sm-12 col-md-12 mb-5" style="background-color: #C1CCDB;padding:4rem 0;">
        <div class="container py-3">
            <h3 class="text-uppercase style_text_2">Contact us & Discover your needs</h3>
        </div>
    </div>
</section> --}}

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



<script>
    // let bg-cover = $('.bg-cover').length

    "use strict";

    const cards = document.querySelectorAll('.card');
    let activeCard = cards[0];
    cards.forEach(card => {
        card.addEventListener('click', () => {
            activeCard.classList.remove('active');
            activeCard = card;
            activeCard.classList.add('active');
        });
    });


    tailwind.config = {
        theme: {
            extend: {
                backgroundImage: {
                    'red-img': 'url("https://images.unsplash.com/photo-1519181245277-cffeb31da2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&h=341&q=80")',
                    'yellow-img': 'url("https://images.unsplash.com/photo-1485550409059-9afb054cada4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&h=341&q=80")',
                    'green-img': 'url("https://images.unsplash.com/photo-1488330890490-c291ecf62571?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&h=341&q=80")',
                    'blue-img': 'url("https://images.unsplash.com/photo-1523633589114-88eaf4b4f1a8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&h=341&q=80")',
                    'purple-img': 'url("https://images.unsplash.com/photo-1511800453077-8c0afa94175f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&h=341&q=80")'
                },
                colors: {
                    gray: {
                        '900': '#0f1011'
                    }
                },
                minWidth: {
                    '14': '4.5rem'
                }
            }
        }
    };

</script>
@endsection
