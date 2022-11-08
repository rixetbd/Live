@extends('frontend.final.master2')

@section('meta_tag')
@include('meta::manager',[
'title' => 'Search Engine Optimization',
'author' => 'DiMarz',
'description' => 'Search Engine Optimization is the process of producing new sales leads through developing interest in
a service
or product.',
'keywords' => 'Search Engine Optimization, service',
'image' => asset('uploads/banners/lead_generation.png'),
])
@endsection


@section('schema_code')
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "Dimaz",
        "url": "{{url('/')}}",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{{url('/')}}/search/{search_term_string}",
            "query-input": "required name=search_term_string"
        }

</script>
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

    .industry_26_css_bottom ul {
        padding-left: 1rem;
    }

    #service_col_two p,
    #service_col_two li,
    #compare_packages li,
    #ser_pack_active li,
    #service_faq div {
        font-size: 14px;
        line-height: 25px !important;
        letter-spacing: 1px;
        font-weight: 500;
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
        <div class="top_div" style="background-color:#383838">
            <div class="container">
                <h5>We Provide Effective</h5>
                <h3>Search Engine Optimization</h3>
                <h5>Effective & Healthy SEO That Counts!</h5>

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
                    <h1 class="p-5 mb-2 text-center" style="background: #c1ccdb;font-size: 2.3rem;">We Provide
                        International SEO Services with Smart & Healthy Approaches</h1>
                    <div class="px-5 py-3">
                        <p>Ranking is the first priority of Search Engine Optimization but it should maintain the search
                            engine policies and regulations too. So, we will plan a SEO strategy which will ensure a
                            healthy and long-lasting ranking for your keywords & pages on search engine result pages
                            (SERP). Ranking is not enough! You must track your rankings to know how your keywords and
                            pages are performing on search engines. As an international SEO services provider, we will
                            ensure that your keywords, pages and websites rank, perform well and climb the top of SERP.
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

        <div class="container-fluid focus_content">
            <div class="container content_text mt-0">
                <div class="text_area p-5">
                    <h2 class="py-4 text-center" style="font-size: 2.3rem;">Stay Ahead in Competition with DiMarz</h2>
                    <p>The key to success in SEO is to beat your competitors to rank on the first page of search
                        engines. But it is not as easy as it seems. As an international SEO services provider, our team
                        is improvised with the latest trends and policies of SEO. We will analyze every bit of your
                        competitors’ strategies to create a SEO campaign plan to outsmart them. This way you will stay
                        one step ahead from your competitors in the top SERP positions and build your way to a better
                        ranking.</p>
                </div>
            </div>
        </div>

        <div id="industry" style="padding-top:8rem;">
            <div class="container-fluid col-sm-12 col-md-12 mb-2">
                <!-- background-color: #C1CCDB; -->
                <div class="container pb-1" style="border-bottom:1px solid #484a7d">
                    <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">SEO ! <span
                            style="font-size: 35px;color:#000;font-weight: 500;">5 Essential Aspects Of SEO<span></h3>
                </div>
            </div>
        </div>

        <div class="container" style="">
            {{-- <h4 class="mb-1 mt-4" style="font-size: 20px;color: #484a7d;">5 Essential Aspects Of SEO</h4> --}}
            <h3 class="m-0 mb-3" style="font-size: 35px;color: #484a7d;">Key To A Successful Seo Campaign</h3>

            <div class="row">
                <div class="col-sm-12 col-md-6 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">SEO</h3>
                        <h4 class="in_sub_title"><span class="in_title">Technical</span> Audit</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" class="img-fluid"
                            alt="">
                        <p>Before a SEO campaign takes place, it is very important to audit the website firsthand. A
                            technical audit on a website can reveal the faults and critical errors which are affecting
                            your website performance, perhaps the rank also. A good technical audit consists of</p>
                        <ul class="padding_l1">
                            <li>Site Performance Check</li>
                            <li>Site Speed Check</li>
                            <li>Sitemap and robots’ check</li>
                            <li>Crawlability Issues</li>
                            <li>Heavy and unused codes</li>
                            <li>Redirection error fixes and more.</li>
                        </ul>
                        <p>Before jumping right into SEO, Technical audit and fix is compulsory.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">SEO</h3>
                        <h4 class="in_sub_title"><span class="in_title">On-Page</span> {{-- Services --}}</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-02.png')}}" class="img-fluid"
                            alt="">
                        <p>Now we go to the next step of Search Engine Optimization or SEO. On-Page SEO is the key to a
                            healthy and successful SEO campaign. Properly maintaining a good On-Page SEO profile paves
                            the way to the highest rank of SERPs. On-Page SEO requires</p>
                        <ul class="padding_l1">
                            <li>Title and Tags Optimization</li>
                            <li>Meta Descriptions</li>
                            <li>Keyword Research & Implementation</li>
                            <li>Effective Content Planning</li>
                            <li>Schema Markup and more</li>
                        </ul>
                        <p>Always remember one thing, the performance of your keywords or pages on SERPs depends mostly
                            on On-page efforts.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">SEO</h3>
                        <h4 class="in_sub_title"><span class="in_title">OFF-Page</span> {{-- Services --}}</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-03.png')}}" class="img-fluid"
                            alt="">
                        <p>Off-Page efforts complete the total SEO campaign of a website. Off-Page is like marketing
                            your website in search engines to bring visitors to your websites. Besides, another main
                            cause behind Off-Page efforts is that it helps to build more authority for a website. And,
                            popular search engines like Google promote sites with good authority. Off-page SEO refers to
                        </p>
                        <ul class="padding_l1">
                            <li>Link Building</li>
                            <li>Social Media Optimizations</li>
                            <li>Brand Visibility Expansion</li>
                            <li>Quality Backlinking</li>
                        </ul>
                        <p>The better your website’s Off-page SEO is, the more chance you have to beat your competitors
                            and rank on first page of SERP.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">SEO</h3>
                        <h4 class="in_sub_title"><span class="in_title">Performance</span> & Ranking</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" class="img-fluid"
                            alt="">
                        <p>After you successfully fixed the technical issues and implemented On-Page & Off-Page SEO
                            efforts successfully, now is the time to check how your SEO strategy is working. This means
                            checking on the ranking of the keywords and pages you have worked on. The result depends on
                        </p>
                        <ul class="padding_l1">
                            <li>Website’s Overall Performance</li>
                            <li>Keywords Which are Ranking on 1st Page of SERP</li>
                            <li>Monthly Organic Visitors & KPIs</li>
                            <li>Bounce Rate Percentages etc.</li>
                        </ul>
                        <p>These metrics will help you to understand the overall SEO performance of your website.</p>

                    </div>
                </div>

                <div class="col-sm-12 col-md-12 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">SEO</h3>
                        <h4 class="in_sub_title"><span class="in_title">Optimize</span> {{-- Services --}}</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-02.png')}}" class="img-fluid"
                            alt="">
                        <p>Only implementing SEO strategies and ranking are not enough. To maintain a healthy and
                            long-lasting rank, it is important to keep track of your progress and of course fix and
                            optimize if any major issues are found. Regular optimization is required if you want to hold
                            your rank for a long time. Optimization means</p>
                        <ul class="padding_l1">
                            <li>Optimize Website performance & improve User Experience if having any technical issues or
                                others.</li>
                            <li>Track the ranks of your keywords and if any keywords or pages rank is falling, take
                                necessary steps as soon as possible</li>
                            <li>Check for any search engine updates or penalties</li>
                            <li>Check the Key Performance Indicators (KPIs)</li>
                            <li>Check the visitors’ behaviors and bounce rate closely. If the bounce rate increases;
                                update, modify or change the contents of your website.</li>
                        </ul>
                        <p>Following these simple steps, you can confirm a long lasting and healthy ranking position in
                            your desired search engine and achieve greater heights.</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- <div id="findyourleads" style="padding-top:4rem;">
            <div class="container-fluid col-sm-12 col-md-12 mb-2">
                <!-- background-color: #C1CCDB; -->
                <div class="container pb-1" style="border-bottom:1px solid #484a7d">
                    <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Leads ! <span
                            style="font-size: 35px;color:#000;font-weight: 500;">Find Your Leads<span></h3>
                </div>
            </div>
        </div> --}}

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
            </div>
        </div>
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
                    <ul class="padding_l1">
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

<section id="work_up" style="padding:4rem 0;z-index: 26;" class="section_part">
    <div class="container-fluid col-sm-12 col-md-12 mb-2">
        <!-- background-color: #C1CCDB; -->
        <div class="container pb-1" style="border-bottom:1px solid #484a7d"> {{-- Increase Online Visibility  --}}
            <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Work ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Read Up<span></h3>
        </div>

        <div class="container mt-3" id="work_up_content">

            <h2>
            <span class="mb-1 mt-3" style="font-size: 20px;color: #484a7d;">International SEO Services</span>
            <br>
            <span class="m-0" style="font-size: 35px;color: #484a7d;">Step Up Your Online Visibility</span>
        </h2>


            <p class="pt-3">
                <strong>"Did you know that 40% of global consumers won't buy a product listed in a language other than
                    their native tongue?" (<a target="_blank"
                        href="https://phrase.com/blog/posts/international-seo/">phrase.com</a>)</strong>
            </p>

            <p class="mb-3">After that statement, you can already realize the importance of international SEO services.
                If you want your website to rank higher in search engine results pages (SERPs), increase visibility to
                international audiences, and generate more conversions in international markets, you need to include
                international SEO services in your marketing plan. International SEO is the process of improving your
                website's visibility outside your native country and targeting many countries through SEO strategies. By
                adding international SEO services to your online marketing plan, you can improve your website's
                visibility and bring potential customers worldwide to your site. Stay with us and learn how to master
                the art of international SEO.</p>
            <h2 class="mt-4">What is SEO and How Does it Work?</h2>
            <p class="mb-3">Well, when you are here, you already know or at least have a decent idea on what Search
                Engine Optimization or SEO is. But still, for those who don't know what SEO is, this section is just for
                them. Here I will try to clarify the basic concept of SEO, how it works, and other important parts you
                need to know before you start with SEO.</p>
            <p class="mb-3">In short, SEO or Search Engine Optimization is a process of improving your website's search
                rankings and visibility. It means that you improve the visibility of your website on search engines like
                Google, Yahoo, Bing, etc., through various techniques like website optimization, improving user
                experience, content creation, and link building. It is a process to gain more
                visitors/customers/consumers to your website through organic search rank without spending little to no
                money. Generally, we conduct an SEO campaign on our website to rank it on top of popular search engines
                like Google, Bing, Yahoo, and Yandex. Being top on SERP (Search Engine Result Page) means more visitors
                are likely to visit your website and learn about your products or services.
                We generally focus on Google because it is now a top search engine worldwide. It is used by 90% of
                online users around the world. But there are other international search engines also available on the
                internet which work almost like Google.
            </p>
            <p class="mb-3">So, SEO is the process of optimizing your website for these search engines to get visible to
                the people using them in various ways. The ways can be crafting an excellent content strategy, locally
                boosting your visibility through online entities, improving website user experience, using social media
                platforms, increasing authority in your website, and more. These methods are implemented step by step to
                rank high on the SERPs of any search engine.</p>
            <p class="mb-3">These methods are conducted in several parts and maintained with several procedures. We will
                talk about these methods some other day. Now let's get to the real part.
            </p>
            <h2 class="mt-4">What is International SEO?</h2>
            <p class="mb-3">Before we jump right into international SEO, we first must understand the market and target
                audience of our potential visitors. It will make it very clear to understand the motive and aspects of
                international SEO strategies & services.</p>

            <p class="pt-3">
                <strong>"While Google dominates global search, with a 92% of searches being conducted via a Google
                    search engine, this is not a universal constant." (<a target="_blank"
                        href="https://wellspringdigital.com/international-seo-services/">
                        wellspringdigital.com</a>)</strong>
            </p>

            <p class="mb-3">
                Seeing the statement, you can now clearly tell that almost 90% of internet users depend on google for
                their search queries. If you only target Google, you can target almost 80% of your audience online.
                Isn't it great? But, it also says that this is not a universal constant.
            </p>
            <p class="mb-3">The reason is very simple. After you see this next statement, it will become somewhat clear
                to you.</p>
            <p class="pt-3">
                <strong>"Google claims 80% market share in the United States, but only 53% in Russia and 6% in China."
                    (<a target="_blank" href="https://lokalise.com/blog/international-seo/"> lokalise.com</a>)</strong>
            </p>

            <p class="mb-3">Now things are getting interesting, right? Though you can earn a handsome amount of visitors
                through Google, there are some countries in which Google might not work as you may have expected. In
                that case, you may also need to optimize your website for other search engines too. To be more specific,
                you may have to SEO your website for different target countries & target markets and in most cases
                target different search engines also.</p>

            <p class="mb-3">International SEO services or efforts are not only about general SEO plans. There are also
                some other aspects which also greatly contribute to the term International SEO. Do you remember that
                statement earlier mentioning that 40% of the buyers don't buy your product if they don't find it in
                their native language? Yes, capturing the target region is what International SEO is all about.</p>

            <p class="mb-3">So, International SEO stands for creating and implementing international SEO strategies for
                different countries to target these local countries and expand your online presence worldwide. You must
                target the countries you want to rank for through extensive research and marketing strategy.</p>

            <h3 class="mt-4">Is SEO Different in Different Countries?</h3>
            <p class="mb-3">Well, the basic aspects of SEO are pretty much the same in every case, but there are some
                differences in SEO for different countries. If we list some of the differences, they are,
                <ul class="padding_l1">
                    <li>Local Country-Code-Top-Level Domain</li>
                    <li>Local Most Used Search Engines</li>
                    <li>Foreign Language</li>
                    <li>Local Device Users Comparisons</li>
                    <li>Local Content Writing Strategy</li>
                    <li>Local Top Competitors</li>
                    <li>Local Link Building Opportunities and so on.</li>
                </ul>
            </p>

            <p class="mb-3">So, if you want to target international countries or are considering operating international
                SEO services in other countries, you should bear these concepts in mind.</p>

            <h2 class="mt-4">Why is International SEO Important?</h2>
            <p class="mb-3"></p>
            <p class="mb-3">The most important thing about international SEO is gaining greater search volume from
                popular search engines worldwide.</p>
            <p class="mb-3">The approach to SEO is different from case to case. In international SEO, things are
                different because only the industries that want to expand their visibility and authority over other
                geographical regions and capture foreign audiences and foreign markets are likely to conduct
                international SEO efforts.</p>
            <p class="mb-3">Today, many industries are achieving immense success through international SEO services.
                Through international SEO, you can achieve a great number of audiences and have a good opportunity to
                know the geographic regions where your products and services are doing fine. This will open a door of
                possibilities & opportunities to expand your business.</p>
            <p class="mb-3">Many industries have mastered the art of international SEO and expanded their business
                further.</p>


            <h2 class="mt-4">How Much Does International SEO Services Cost?</h2>
            <p class="mb-3">Generally, SEO is a kind of task that brings organic traffic to your website by climbing the
                ranks of SERPs. But SEO is not everyone's forte. So, you may need professionals to conduct international
                SEO services for you.</p>

            <p class="mb-3">There are many SEO agencies or companies out there to provide global SEO services. Some of
                them are too costly, and some are pretty cheap. But, the main fact here is the impact you get from
                conducting such International SEO campaigns.</p>

            <p class="mb-3">If we talk about pricing, it differs because International SEO services are of various
                types, and each type has its own variations. So, this pricing differs from man to man.
                Generally, International SEO services may charge up to $2000-$4000 per month as there are many things to
                consider while providing the service, like On-Page SEO, Off-Page SEO, and other terms.</p>

            <p class="mb-3">Sometimes these prices may vary depending on the project. You may need to outreach some
                local sites for guest posting. This may cost you some extra bucks. Other things come into consideration
                when you take or provide international SEO services.</p>

            <p class="mb-3">You can cut costs sometimes by adding or removing some services from your menu. As in, your
                On-Page may be doing fine on your website, so you may consider removing on-page services and taking only
                Off-page SEO services, which will save some bucks. Or, you may hire some good content creators who will
                provide you with good content. It is only possible if your On-page, Technical, and Off-page SEO parts
                are doing fine.</p>

            <p class="mb-3">With this, you may save up to $500 to $2000 if you have good knowledge of SEO and know where
                you need the work. Sometimes you may not need to spend a single penny if you know how SEO works.</p>

            <h3 class="mt-4">Final Words</h3>
            <p class="mb-3"></p>

            <p class="mb-3">International SEO services can help your website stand out from the rest, increasing its
                visibility online. Using the right services ensures that your site is well-positioned for search engine
                ranking and online visibility.</p>
            <p class="mb-3">In case you are wondering from whom you will conduct the International SEO services or
                considering hiring an international SEO agency, you can try DiMarz!
                DiMarz is an international SEO company with an experienced SEO team who knows what type of SEO will work
                for your industry. We have a good reputation as SEO service providers and also offer global SEO
                services. Some of our strong International SEO services are as follows;

                <ul class="padding_l1">
                    <li>Monthly SEO Service</li>
                    <li>Business Plans</li>
                    <li>Economical Price Range</li>
                    <li>International Content Writing Service</li>
                    <li>ECommerce Expansion Efforts</li>
                    <li>Woo-Commerce SEO Services</li>
                    <li>YouTube SEO Service</li>
                    <li>Increase SEO Reputation</li>
                    <li>Increase Online Reputation</li>
                </ul>
            </p>
            <p class="mb-3">If you want to rank at the top of the SERP and beat your competition, DiMarz is the best
                choice. So, choose DiMarz and dominate the SERP!</p>

        </div>
    </div>
</section>


<section id="process_up" style="padding-top:4rem;z-index: 26;" class="section_part">
    <div class="container-fluid col-sm-12 col-md-12 mb-2">
        <!-- background-color: #C1CCDB; -->
        <div class="container pb-1" style="border-bottom:1px solid #484a7d">
            <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Process ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Way we run<span></h3>
        </div>
        <div class="container py-3">
            <h4 class="mb-1" style="font-size: 20px;color: #484a7d;">Do You Know The Process ?</h4>
            <h3 class="m-0" style="font-size: 35px;color: #484a7d;">Before Ordering, You Must Know The Total Process of Our Service</h3>

            <p class="my-4">When a client reaches out to us, we maintain a standard process. In the process, we will go
                through these steps from the beginning of the project to the handover of the project.</p>
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
                <h3 data-index="0" class="spinx-acco-title current"><i class='bx bx-user'></i>Website Analysis</h3>
                <div class="spinx-acco-content" style="display: block;">
                    <p>We will run a deep analysis on your website to figure out the problems. We will list out the
                        issues which are affecting your website’s performance, user experience and ranking. Then we will
                        give you a report on the problems & recommendations associated with your website and SEO.</p>

                </div>
                <h3 data-index="1" class="spinx-acco-title"><i class='bx bx-user'></i>Plan SEO Strategy</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>INTELLIGENCE &amp; EXPERIENCE</h4> --}}
                    <p>After everything is finalized, we will create an SEO strategy checklist for your website which
                        will include all SEO aspects; Technical, On-page, Off-Page, Keyword Research, Link Building and
                        others. Then we will provide you with a copy of the checklist.</p>

                </div>
                <h3 data-index="2" class="spinx-acco-title"><i class='bx bx-user'></i>Meeting</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>We will conduct a 30-minute meeting to discuss the planning and strategy we made for your SEO
                        campaign. After your confirmation, we will acquire the important information we need from you to
                        get things started.</p>

                </div>
                <h3 data-index="3" class="spinx-acco-title"><i class='bx bx-user'></i>Reporting</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>Throughout the whole campaign, we will provide you a monthly/bi-monthly report in a PDF format
                        informing you on the progress of your website and the changes. The report will consist of
                        everything from top to bottom of your website including, website performance, keyword ranks,
                        traffic, etc.</p>
                </div>
                {{-- <h3 data-index="4" class="spinx-acco-title"><i class='bx bx-user'></i>Quality check & HANDOVER</h3>
                <div class="spinx-acco-content" style="display: none;">
                    <p>We always try to maintain the best quality for submitting error-free tasks. In this case, we
                        maintain a strict quality check for your Desire services. Then,<br>The final step is here ;
                        After final checking we deliver your project. We always assure the best quality service for you.
                    </p>
                </div> --}}
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
            <h4 class="mb-1" style="font-size: 20px;color: #484a7d;">We will explain everything simply</h4>
            <h3 class="m-0" style="font-size: 35px;color: #484a7d;">We understand it well enough</h3>

            <p class="my-4">In case you might have some common questions about the service, we tried to cover any kind
                of relative questions regarding International SEO Services.</p>
        </div>
    </div>
</section>



<section class="section_part" style="z-index: 26;">
    <div class="container">
        <div class="row faq_section">
            <div class="col-sm-12 col-md-12 mb-5">

                @php
                $serviceName = 'Search Engine Optimization';
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
                                        src="{{asset('final_front_assets/img/icons/faq_icon_ans2.png')}}" alt=""></div>
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
{{-- <script>
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

</script> --}}
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
