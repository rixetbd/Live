@extends('frontend.november.masterNov')

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
<style>
    .card_nov {
        margin: 50px 0;
        background: #fff;
        /* font-family: 'Poppins', sans-serif; */

        font-family: 'Roboto', sans-serif;
        /* font-family: 'Poppins', sans-serif;
        font-family: 'Raleway', sans-serif; */

    }

    .card_header,
    .card_body {
        padding: 50px 70px;
    }

    .card_body {
        /* background-color: #5a80a01f; */
        border: 1px solid #ddd;
    }

    .card_header {
        background: #5A80A0;
        color: #000;
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        font-size: 2.2rem;
        font-weight: 500;
        /* text-transform: uppercase; */
    }

    .card_header h4 {
        color: #fff;
        font-size: 2.42rem;
        font-weight: 500;
        /* text-transform: uppercase; */
    }

    .card_body .card_nov_title {
        font-size: 1.3rem;
        font-weight: 500;
        margin: 0;
        padding-bottom: 50px;
    }

    .card_body h5.pb-3 {
        font-size: 1.5rem !important;
    }

    .card_body ul.ul_inline {
        margin-top: 50px;
    }

    .card_body ul.ul_inline li {
        display: inline-block;
        font-size: 13px;
        margin-right: 8px;
        letter-spacing: 1px;
    }

    .card_body ul.feature_ul li {
        margin: 8px 0;
        font-size: .75rem;
    }

    .card_body ul.feature_ul li svg {
        margin-right: 5px;
    }

    .card_body ul li .feature_list_sign_big {
        font-size: 1rem;
        color: #5A80A0;
    }

    .card_body #card_faq h5 {
        font-size: 1rem;
    }

    .card_body p {
        font-size: 14px;
        letter-spacing: 1px;
    }

    .side_sticky_dot {
        position: fixed;
        right: 5%;
        display: flex;
        align-items: center;
        height: 100%;
    }

    .side_sticky_dot li {
        margin: 50px 0;
        cursor: pointer;
        position: relative;
    }

    .side_sticky_dot ul li .icon_dot {
        font-size: 1rem;
        color: #0000007a;
    }

    .side_sticky_dot ul li:first-child .icon_dot,
    .side_sticky_dot ul li:last-child .icon_dot {
        font-size: .8rem;
        color: #0000007a;
    }

    .side_sticky_dot .icon_dot:hover {
        color: #5A80A0;
        scale: 120%;
    }

    .side_sticky_dot li:hover span {
        font-size: 14px;
        position: absolute;
        display: unset;
        width: 200px;
        right: 25px;
        text-align: end;
        letter-spacing: 1px;
        font-weight: 400;
    }

    .side_sticky_dot span {
        display: none;
    }

    .side_sticky_line {
        height: 250px;
        width: 1px;
        background: #00000014;
        margin-left: -50%;
    }

    .accordion-body,
    .accordion-body .accordion_answer {
        display: inline-block;
        /* letter-spacing: 1px; */
    }

    .accordion-body {
        background-color: #fff70036;
        font-size: .75rem;
        padding: 0.25rem 0.5rem;
    }

    .accordion-header img {
        /* width: 25px;
        margin-right: 15px; */
        /* display: none; */
    }

    .accordion-body-img svg {
        color: #0bb100;
    }

    .accordion-item svg {
        font-size: 1rem;
        color: #5a80a0;
    }

    .accordion-item {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #00000020;
    }

    .accordion-button {
        background: transparent;
        padding: 0.25rem 0.5rem;
        font-size: .75rem;
    }

    .accordion-button:not(.collapsed) {
        color: #5a80a0;
        background-color: transparent;
    }

    .accordion-button:focus {
        border: none;
        box-shadow: none;
    }

</style>

<style>
    #fixed_top_dropdown_btn_span {
        width: 200px;
    }

    #fixed_top_dropdown_btn {
        color: #fff;
        padding-top: 2px;
    }

    .fixed_top {
        background: #5A80A0;
        /* box-shadow: 1px 15px 10px 2px #a7a7a778; */
        /* position: fixed;
        z-index: 50;
        top: 4.25rem; */
        /* left: 17%; */
        /* display: flex;
        align-items: center; */
        width: 100%;
    }

    .fixed_top .row div input {
        height: -webkit-fill-available;
        padding: 10px 50px 10px 70px;
        width: 100%;
        outline: none;
        border: none;
        font-size: 1.2rem;
        margin: 0;
    }

    .fixed_top .button {
        font-size: 15px;
        letter-spacing: 1px;
        font-weight: 400;
        cursor: pointer;
        height: 100%;
        background: #5A80A0;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        border-left: 1px solid #ffffff42;
        border-right: 1px solid #ffffff42;
    }

    .fixed_top .search_box {
        position: relative;
    }

    .search_box_sus {
        display: none;
        position: absolute;
        /* top: 4.55rem; */
        background: #f0f0f0;
        width: 100%;
        z-index: 9;
    }

    .search_box_sus ul {
        list-style: none;
        padding: 0;
        margin: 0 10px;
    }

    .search_box_sus ul li {
        cursor: pointer;
        padding: 10px 65px;
        border-bottom: 1px solid #ddd;
        font-size: 1rem;
        letter-spacing: 1px;
        font-weight: 500;
        color: #3e3e3e;
    }

    .search_box_sus ul li:hover {
        color: #000;
        background: #dbdbdb;
    }


    .fixed_top .search_box:hover .search_box_sus {
        display: block;
    }


    .fixed_top .row div .search_icon {
        position: absolute;
        top: 25px;
        left: 30px;
    }

    .icon_360_in {
        transform: rotate(-180deg);
        transition: 1s ease;
    }

    .icon_360_out {
        transform: rotate(0deg);
        transition: 1s ease;
    }

    .fixed_top_dropdown {
        background: #3d5f7c;
    }


    #search_box_input {
        background: #5a80a0;
        color: #ffffffe8;
    }

    #search_box_input::placeholder {
        color: rgba(255, 255, 255, 0.726);
    }

</style>

@endsection


@section('content')

<section class="side_sticky_dot d-none">
    <div>
        <ul>
            <li><i class="fas fa-dot-circle icon_dot"></i> <span>Overview</span></li>
            <li><i class="fas fa-dot-circle icon_dot"></i> <span>Description</span></li>
            <li><i class="fas fa-dot-circle icon_dot"></i> <span>Compare</span></li>
        </ul>
    </div>
    <div class="side_sticky_line">
    </div>
</section>

<section style="background:#5A80A0;color:#fff;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <h2 style="font-size:6rem;line-height: 100%;">We are ready to serve.</h2>
                <p>We are ready for Business Process Outsourcing Services. DiMarz is a global business process
                    outsourcing company. All of our services satisfy stringent international standards. We have
                    projections all around the US and Western Europe. </p>
            </div>
            <div class="col-sm-12 col-md-6">

            </div>
        </div>
    </div>
</section>

<section class="fixed_top" id="">
    <div class="container">
        <div class="row p-0 m-0">
            <div class="col-3 p-0 m-0">
                <div class="button" id="fixed_top_dropdown_btn">
                    <span id="fixed_top_dropdown_btn_span">Choose Services</span>
                    <span class="ms-2 icon"><i class="fas fa-angle-down"></i></span>
                </div>
            </div>
            <div class="col-9 m-0 px-0 search_box">
                <input type="text" placeholder="What are you looking for ?" value="" id="search_box_input">
                {{-- <i class="fas fa-search search_icon"></i> --}}
                <div class="search_box_sus">
                    <ul id="search_box_sus_ul">
                        @foreach ($all_service_gigs as $item)
                        <li
                            onclick="ServiceNameClick('{{$item->id}}', `grp_one{{$item->id}}`, `{{$item->getCategory->name}}`)">
                            {{$item->name}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="border-top:1px solid #ffffff42;background:#3d5f7c;">
        <div class="container">
            <div class="col-12 d-none fixed_top_dropdown" id="fixed_top_dropdown">
                <div class="row w-100 pt-4" id="mega_menu_area">
                    @foreach ($faq_service_name as $service_name)
                    <div class="col-sm-12 col-md-3 pt-2">
                        <h3 class="service_group_title_two"><i class="fas fa-bullhorn text-success me-2"></i>
                            {{$service_name->name}}</h3>
                        @php
                        $service_gigs = \App\Models\Service::where(['category' =>
                        $service_name->id])->where('status','1')->get();
                        @endphp

                        @foreach ($service_gigs as $service_gigs_item)
                        <div class="mb-3">
                            <a class="grp_one grp_one{{$service_gigs_item->id}}"
                                onclick="ServiceNameClick('{{$service_gigs_item->id}}', `grp_one{{$service_gigs_item->id}}`, `{{$service_name->name}}`)">
                                <span class="service_group_title">{{$service_gigs_item->name}}</span> <span
                                    class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                            </a>
                        </div>
                        @endforeach

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="service_section" id="card_nov_main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12">
                <div class="card_nov">
                    <div class="card_header">
                        <div>
                            <h4>Basic Package</h4>
                        </div>
                        <div><sup>$ </sup><span id="card_nov_amount">120</span></div>
                    </div>
                    <div class="card_body">
                        <p class="card_nov_title">Data cleaning & Reformatting</p>
                        <div class="row">
                            <div class="col-6" style="border-right: 1px solid #ddd;">
                                <p class="card_nov_description">Data cleaning is the process of fixing or removing
                                    corrupted,
                                    incorrect, incorrectly formatted, duplicate, or incomplete data within a dataset. If
                                    you are
                                    looking for a team who can help you to clean, merge and separate data in ms excel so
                                    you are
                                    in the right place.</p>
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                        {{-- <ul class="ul_inline">
                            <li><i class="fas fa-check feature_list_sign_big"></i> Shorting within your choice</li>
                            <li><i class="fas fa-check feature_list_sign_big"></i> Unlimited Revision</li>
                            <li><i class="fas fa-check feature_list_sign_big"></i> Duplicate checking & Formula Adding
                            </li>
                            <li><i class="fas fa-check feature_list_sign_big"></i> Real Time sheet checking</li>
                        </ul> --}}
                        <div class="text-center">
                            <h5 class="pt-5 ">Delivery Time : <span id="got_days">5</span></h5>
                        </div>
                        <hr>
                        <div id="card_faq" class="row pt-4">
                            <div class="col-sm-12 col-md-6" style="border-right: 1px solid #ddd;">
                                <h5 class="pb-3">Feature</h5>
                                <ul class="feature_ul">
                                    <li><i class="fas fa-check feature_list_sign_big"></i> Shorting within your choice
                                    </li>
                                    <li><i class="fas fa-check feature_list_sign_big"></i> Unlimited Revision</li>
                                    <li><i class="fas fa-check feature_list_sign_big"></i> Duplicate checking & Formula
                                        Adding
                                    </li>
                                    <li><i class="fas fa-check feature_list_sign_big"></i> Real Time sheet checking</li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-6 ps-4">
                                <h5 class="pb-3">FAQ !</h5>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span>
                                                    <i class="fas fa-question-circle me-2"></i>
                                                </span> What do i need to provide you to get started?
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body d-flex">
                                                <div class="accordion-body-img">
                                                    <i class="fab fa-adn me-2"></i>
                                                </div>
                                                <div class="accordion_answer">
                                                    You need to provide us images in any common format (JPG, JPEG, PNG,
                                                    RAW, TIF, PSD
                                                    etc.). You need to provide us images in any common format (JPG,
                                                    JPEG, PNG,
                                                    RAW, TIF, PSD
                                                    etc.).
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <span>
                                                    <i class="fas fa-question-circle me-2"></i>
                                                </span> Do you offer super fast delivery?
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body d-flex">
                                                <div class="accordion-body-img">
                                                    <i class="fab fa-adn me-2"></i>
                                                </div>
                                                <div>
                                                    Yes, we have a team, if you need urgent our all members will work
                                                    for you.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <span>
                                                    <i class="fas fa-question-circle me-2"></i>
                                                </span> I have complex images, do you rate price?</button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body d-flex">
                                                <div class="accordion-body-img">
                                                    <i class="fab fa-adn me-2"></i>
                                                </div>
                                                For complex image like jewelry, plants, needs lots of time. We charge a
                                                little bit more
                                                for this.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapse4">
                                                <span>
                                                    <i class="fas fa-question-circle me-2"></i>
                                                </span> I have complex images, do you rate same
                                                price?
                                            </button>
                                        </h5>
                                        <div id="collapse4" class="accordion-collapse collapse"
                                            aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                            <div class="accordion-body d-flex">
                                                <div class="accordion-body-img">
                                                    <i class="fab fa-adn me-2"></i>
                                                </div>
                                                For complex image like jewelry, plants, needs lots of time. We charge a
                                                little bit more
                                                for
                                                this.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <h2>READ MORE ABOUT</h2>
    <h3 class="pt-2">Overview</h3>
    <div data-index="1" class="content_field_div" id="overview">
        <p>We provide Background Removal services with our well-experienced graphic designers.
            100% manual working process and we do not use any artificial intelligence or other
            automation software for good quality in background removal, clipping path, and
            editing in Photoshop so that you will get high-quality services.</p>
        <p>Nowadays, businesses are using a background removal process for their desired product
            to give their product a unique look and take their marketing to the next level. So,
            what are you waiting for now?</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mt-2 pt-2">Description Of Services</h3>
            <div data-index="2" class="content_field_div" id="service_list_description">
                <ul>
                    <li>Background Remove &amp; Transparent</li>
                    <li>Clipping Path</li>
                    <li>Resize &amp; Crop</li>
                    <li>Adjust Lighting</li>
                    <li>Colour Correction</li>
                    <li>Amazon, eBay, or other Products Editing</li>
                    <li>Image Cutout</li>
                    <li>Shadow Creation</li>
                    <li>Retouching</li>
                    <li>Natural Shadow, Reflection Shadow, Drop Shadow &amp; Fix Light</li>
                </ul>
            </div>
            <h3 class="mt-2 pt-2">Why Choose DiMarz</h3>
            <div data-index="3" class="content_field_div" id="why_choose_dimarz">
                <ul>
                    <li>Professional finishing.</li>
                    <li>High-quality clipping path, 100% satisfaction.</li>
                    <li>On-time delivery with the best quality.</li>
                    <li>Unlimited revisions &amp; Unlimited services.</li>
                    <li>Image format: JPG, PNG, PSD, PDF.</li>
                    <li>24/7 customer support.</li>
                    <li>10+ team members.</li>
                    <li>Great communication.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <img class="img-fluid" src="{{asset('uploads/service_banner/lead-generation.png')}}" alt="">
        </div>
    </div>
</div>

<section class="section_part" style="padding-bottom:10rem;z-index: 22;" id="compare_packages">
    <div class="container">
        <h3 class="mb-4 pt-5" style="font-size:30px;">Compare Packages</h3>
        <table class="table table-bordered table-hover" style="border-color: #fff;">
            <tr style="background-color: #C1CCDB;color: #000;">
                <td class="text-left" style="width: 31%;font-size:30px;font-wieght:800;">Packages</td>
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

@endsection



@section('custom_js')

<script>
    // Side Dot Script || Start
    var card_nov_main_Top = $('#card_nov_main').offset().top;
    $(window).scroll(function () {

        var currentScroll = $(window).scrollTop();

        if (currentScroll > (card_nov_main_Top - 200)) {
            $('.side_sticky_dot').removeClass('d-none');
        } else {
            $('.side_sticky_dot').addClass('d-none');
        }

    });
    // Side Dot Script || End

</script>
<script>
    // ONClick Service Menu || Start
    $('#fixed_top_dropdown_btn').on('click', () => {
        if ($('#fixed_top_dropdown').hasClass('d-none') == true) {
            $('#fixed_top_dropdown').removeClass('d-none');
            $('#fixed_top_dropdown_btn .icon').removeClass('icon_360_out');
            $('#fixed_top_dropdown_btn .icon').addClass('icon_360_in');
        } else {
            $('#fixed_top_dropdown').addClass('d-none');
            $('#fixed_top_dropdown_btn .icon').removeClass('icon_360_in');
            $('#fixed_top_dropdown_btn .icon').addClass('icon_360_out');
        }
    });

</script>
// ONClick Service Menu || End


@endsection
