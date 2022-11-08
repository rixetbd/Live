@extends('frontend.final.master2')

@section('meta_tag')
@include('meta::manager',[
'title' => 'Lead Generation',
'author' => 'Bangladesh Outsourcing Company',
'description' => 'Lead generation is the process of producing new sales leads through developing interest in a service
or product.',
'keywords' => 'Lead generation, service',
'image' => asset('uploads/service_banner/lead-generation.png'),
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
                <h5>We Provide Effective</h5>
                <h3>Lead GENERATION</h3>
                <h5>Services</h5>
                {{-- <a href="#" class="btn">Contact us</a> --}}
                {{-- <p class="text-white mt-4">Lead generation is the process of producing new sales leads through
                    developing interest in a service or product. Lead Generation services are a fundamental part of
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
                    <h1 class="py-5 mb-2" style="background: #c1ccdb;">Top-Notch B2B Lead Generation Services by DiMarz
                    </h1>
                    <div class="px-5 py-3">
                        <p>Lead generation is a process of searching for people who are probably interested in your service and getting in contact with them to communicate further and convert . Repeat and Regular paying customers are every business’s sweetest
                            dream. You aren’t in business until then you find and retain paying customers. However,
                            achieving this dream isn’t a piece of cake in the park of other million businesses.
                            Thousands of businesses also compete for your target customers.</p>

                        <p>So, how do you get a competitive edge? Do you have any magic lamp to assist you in
                            prospecting and turning prospects into paying customers?</p>

                        <p>Thankfully, DiMarz is here to generate millions $$$ in revenue through our magic tools,
                            personalized email generator, and dedicated lead generation specialist team.</p>
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
                    <h1 class="py-4">Generate Leads With Professionals</h1>
                    <p>Lead Generation is our specialty, but it starts with your Discussion. We take your unique
                        business idea and understand your needs.
                        We tailor a marketing strategy with our lead generation services so that you get the most
                        effective return.</p>
                    <p>We provide you the best service on time, within the budget you allocate. We serve:
                        <ul class="li_style">
                            <li>B2B Lead generation</li>
                            <li>B2C lead generation</li>
                            <li>Product base lead generation</li>
                            <li>Service base lead generation</li>
                        </ul>
                    </p>
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
                        <h3 class="in_sub_title">Leads</h3>
                        <h4 class="in_sub_title"><span class="in_title">Software</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" class="img-fluid"
                            alt="">
                        <p>In order to get nonstop clients for a software development company, it is important to have
                            more clients. That’s how things work for software industries. Lead Generation can help you
                            in this fact. We offer leads on</p>
                        <ul>
                            <li>Tech Companies</li>
                            <li>Apps Users</li>
                            <li>Reputed Games Companies</li>
                        </ul>
                        <p>We research, verify and deliver every lead which will ensure 100% accurate and high-profile.
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Leads</h3>
                        <h4 class="in_sub_title"><span class="in_title">Healthcare</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-02.png')}}" class="img-fluid"
                            alt="">
                        <p>To keep a healthcare industry practice up and running, referrals are not enough now. So, you
                            need more clients from Lead generation. We offer healthcare industry-based lead generation
                            services in which we generate leads which will keep your industry running. We Provide</p>
                        <ul>
                            <li>Doctor Leads</li>
                            <li>Hospital & Clinic Leads</li>
                            <li>Medicine or Pharmaceuticals Leads</li>
                        </ul>
                        <p>We will provide each and every lead with proper research and 100% verified.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Leads</h3>
                        <h4 class="in_sub_title"><span class="in_title">Legal</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-03.png')}}" class="img-fluid"
                            alt="">
                        <p>Getting leads for a legal industry is crucial for a law firm or legal service provider to
                            keep the lights up. But it is also true that getting leads for legal industries are not that
                            easy as it seems. Don’t Worry. We provide leads on</p>
                        <ul>
                            <li>Law Firms</li>
                            <li>Specific Layers</li>
                            <li>Specific Clients</li>
                        </ul>

                        <p>
                            We will connect you and your clients with our lead generation services.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Leads</h3>
                        <h4 class="in_sub_title"><span class="in_title">Real Estate</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" class="img-fluid"
                            alt="">
                        <p>In the field of Real Estate Industry, lead generation can save your time, bring more clients
                            and helps you to grow your business more quickly. Our Real Estate lead generation team
                            will research, scrap and provide tons of leads on</p>
                        <ul>
                            <li>Client/Buyer</li>
                            <li>Agent</li>
                            <li>Owner & Property Rentals</li>
                        </ul>
                        <p>Let us generate your leads and help you take your business to the next level.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Leads</h3>
                        <h4 class="in_sub_title"><span class="in_title">Fashion</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-02.png')}}" class="img-fluid"
                            alt="">
                        <p>Most of the competitive niche in the market yet a fashion industry needs effective leads to
                            survive in market.</p>
                        <p>If you are looking for your require leads
                            <ul>
                                <li>Beauty Sector</li>
                                <li>Amazon & Shopify</li>
                                <li>Jewelry</li>
                                <li>Beauty Products</li>
                            </ul>
                            <p>Then we are the perfect fit for you. We offer effective leads based on your fashion!</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Leads</h3>
                        <h4 class="in_sub_title"><span class="in_title">Retail</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-03.png')}}" class="img-fluid"
                            alt="">
                        <p>Retail Industry leads are like a diamond! It’s helping thousands of retail industries to
                            grow! Our lead generation service can help retail businesses grow with leads on</p>
                        <ul>
                            <li>Multi-Chain Retail</li>
                            <li>Small Business</li>
                            <li>Small Business Customer</li>
                        </ul>
                        <p>Our leads will be 100% accurate and 0% bounce rate. You will also get free revisions if you
                            get any bounce.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Leads</h3>
                        <h4 class="in_sub_title"><span class="in_title">E-commerce</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" class="img-fluid"
                            alt="">
                        <p>E-Commerce businesses are now opting for lead generation services because many businesses
                            want to collaborate, survey on customers or re-market their niche. Our lead-generation
                            service will provide</p>
                        <ul>
                            <li>Small E-Commerce Business Leads</li>
                            <li>Multi-Chain E-Commerce Leads</li>
                            <li>Coffee Shop & Grocery Leads</li>
                        </ul>
                        <p>Our leads will ensure 100% accuracy and help you to take your business to the next level.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Leads</h3>
                        <h4 class="in_sub_title"><span class="in_title">Finance</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-02.png')}}" class="img-fluid"
                            alt="">
                        <p>Finance industry is a big market and requires a lot of marketing now. Lead generation is the perfect option for these financial institutes to gather more clients to help their firm grow. Our lead generation service will provide.</p>
                        <ul>
                            <li>Bank/Bank Owner Leads</li>
                            <li>Lenders Leads</li>
                            <li>Account Holders</li>
                        </ul>
                        <p>Don’t fall behind. With lead Generation, take your financial Institute to the next level.</p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 industry_26_css">
                    <div class="col-12 industry_26_css_top">
                        <h3 class="in_sub_title">Leads</h3>
                        <h4 class="in_sub_title"><span class="in_title">Sports</span> Industry</h4>
                    </div>
                    <div class="col-12 industry_26_css_bottom">
                        <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-03.png')}}" class="img-fluid"
                            alt="">
                        <p>Sports industry has become trendier these days. Lead generation has become a great interest for many clients in the sports industry.
                        </p>
                        <p>We offer lead generation services on
                            <ul>
                                <li>Club/Players</li>
                                <li>Sponsors</li>
                                <li>Sports Directors</li>
                            </ul>
                        </p>
                        <p>These leads are 100% accurate and have low bounce rate.</p>
                    </div>
                </div>


            </div>



            {{-- <div class="row">
                <div class="col-sm-12 col-md-4 px-4 py-2 mb-5">
                    <div class="glow-on-hoverj">
                        <div class="home_service_box">
                            <div class="img_box">
                                <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" alt="">
            <h4>Software Industry Leads</h4>
        </div>
        <div class="content_box">
            <p>We offer marketing services that will help your software industry prosper! Our
                services include but are not limited to: market research, website design, social
                promotion, and more. We know how to build a successful business. We offer marketing
                services that will help your software industry prosper! Our
                services include but are not limited to: market research, website design, social
                promotion, and more. We know how to build a successful business.website design,
                social
                promotion, and more. We know how to build a successful business.</p>
        </div>
        <div class="footer_box">
            <a href="#" class="btn btn-sm button_slider_effect"><span>Read More...</span></a>
        </div>
    </div>
    </div>
    </div>
    <div class="col-sm-12 col-md-4 px-4 py-2 mb-5 ">
        <div class="glow-on-hover">
            <div class="home_service_box">
                <div class="img_box">
                    <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-02.png')}}" alt="">
                    <h4>Healthcare Industry Leads</h4>
                </div>
                <div class="content_box">
                    <p>We support the core elements of your healthcare IT infrastructure to keep you up and
                        running
                        when and where it matters most. We are proud to be a leading provider of outsourced
                        healthcare IT services. We support the core elements of your healthcare IT
                        infrastructure to keep you up and
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
    <div class="col-sm-12 col-md-4 px-4 py-2 mb-5">
        <div class="glow-on-hoverj">
            <div class="home_service_box">
                <div class="img_box">
                    <img src="{{asset('final_front_assets/img/icons/set_2/Untitled-2-01.png')}}" alt="">
                    <h4>Software Industry Leads</h4>
                </div>
                <div class="content_box">
                    <p>We offer marketing services that will help your software industry prosper! Our
                        services include but are not limited to: market research, website design, social
                        promotion, and more. We know how to build a successful business. We offer marketing
                        services that will help your software industry prosper! Our
                        services include but are not limited to: market research, website design, social
                        promotion, and more. We know how to build a successful business.website design,
                        social
                        promotion, and more. We know how to build a successful business.</p>
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
                    <h4>Legal Industry</h4>
                </div>
                <div class="content_box">
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
    </div> --}}
    </div>

    <div id="findyourleads" style="padding-top:4rem;">
        <div class="container-fluid col-sm-12 col-md-12 mb-2">
            <!-- background-color: #C1CCDB; -->
            <div class="container pb-1" style="border-bottom:1px solid #484a7d">
                <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Leads ! <span
                        style="font-size: 35px;color:#000;font-weight: 500;">Find Your Leads<span></h3>
            </div>
        </div>
    </div>


    <div class="container" id="table_Area">
        <div class="pb-3">
            <div class="row justify-content-between align-items-end pt-4" style="padding-bottom:15px;">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <h4 style="font-size:25px;text-transform:uppercase;">Search Specific Leads</h4>
                    <div class="col-12 search_div" id="country_Name_Box">
                        <input type="hidden" id="country_Name_catch">
                        {{-- <label for="" class="w-100" style="text-transform:uppercase;">Country Name </label> --}}
                        <div class="ui fluid search selection dropdown" id="country_Name">
                            <input type="hidden" name="country" id="country_Name_Input">
                            <i class="dropdown icon"></i>
                            <div class="default text">SEARCH COUNTRY</div>
                            <div class="menu">
                                @foreach ($all_countries as $country)
                                <div class="item" data-value="{{$country->id}}"><i
                                        class="{{Str::lower($country->iso2)}} flag"></i>{{$country->name}}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9">
                    <button class="btn btn_city text-white float-end bg_theme_tomato" id="Filterreset">
                        <div class="ui toltip" data-content="You can reset filter" data-position="top center">
                            RESET ALL
                        </div>
                    </button>
                </div>
            </div>

            <div class="col-12 row" style="padding-bottom:15px;">
                <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
                    <div class="col-12 search_div" id="">
                        {{-- <label for="" class="w-100" style="text-transform:uppercase;">City Name</label> --}}
                        <div class="ui toltip" data-content="You can choose multiple cities as per your needs"
                            data-position="left center">
                            <select name="states" class="ui fluid search dropdown city_Name text_black" id="city_Name">
                                <option value="">ALL CITIES</option>
                                @foreach ($all_city as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 mt-325" id="city_name_display">
                    {{-- <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label> --}}
                </div>
            </div>

            <div class="col-12 row" style="padding-bottom: 15px;border-bottom:1px solid #fff">
                <div class="col-xs-12 col-sm-12 col-md-3" id="NullData">
                    <div class="col-12 search_div" id="">
                        {{-- <label for="" class="w-100" style="text-transform:uppercase;">Industry Name</label> --}}
                        <div class="ui toltip" data-content="You can choose multiple industry"
                            data-position="left center">
                            <select name="states" class="ui fluid search dropdown city_Name text_black"
                                id="industry_Name">
                                <option value="">ALL INDUSTRY</option>
                                @foreach ($all_industry as $industry)
                                <option value="{{$industry->id}}">{{$industry->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 mt-325" id="industry_Name_display">
                    {{-- <label for="" class="w-100" style="min-height: 24px;">&nbsp;</label> --}}
                </div>
            </div>

            {{-- Click Here to Select All (Default) --}}

            <div class="row my-3 filter_btn">
                {{-- <div class="col-2"><label class="btn btn_city w-100" id="table_refresh">All Tabs Selected <i
                    class="fas fa-redo-alt ms-3"></i></label></div> --}}
            </div>
            <div class="row my-3 filter_btn">
                <div class="col-2"> <label class="btn btn_city w-100" id="table_Name">Person Name <input type="checkbox"
                            disabled checked id="table_Name_IN"></label></div>
                <div class="col-2"><label class="btn btn_city w-100" id="table_Title">Job Title <input type="checkbox"
                            disabled checked id="table_Title_IN"></label></div>
                <div class="col-2"><label class="btn btn_city w-100" id="table_Company">Company Name <input
                            type="checkbox" disabled checked id="table_Company_IN"></label></div>
                <div class="col-2"><label class="btn btn_city w-100" id="table_City">City <input type="checkbox"
                            disabled checked id="table_City_IN"></label></div>
                <div class="col-2"><label class="btn btn_city w-100" id="">Industry <input type="checkbox" disabled
                            checked id="table_City_IN"></label></div>
                <div class="col-2">
                    <div class="ui toltip" data-content="Selected Tabs Action" data-position="top center">
                        <label class="btn btn_city w-100 bg_theme" id="table_refresh">All Tabs Selected</label>
                    </div>
                </div>

                {{-- <div class="col-2"><label class="btn btn_city w-100" id="">Text <i
                            class="fas fa-redo-alt"></i></label></div> --}}
                {{-- <div class="col-xs-12 col-sm-12 col-md-12 filter_btn"> --}}
            </div>

            <div class="row filter_btn">
                <div class="col-2">
                    <label class="btn btn_city w-100" id="table_Email">Email <input type="checkbox" checked
                            id="table_Email_IN"></label>
                </div>
                <div class="col-2">
                    <label class="btn btn_city w-100" id="table_Phone">Phone <input type="checkbox" checked
                            id="table_Phone_IN"></label>
                </div>
                <div class="col-2">
                    <label class="btn btn_city w-100" id="table_Company_Size">Company Size <input type="checkbox"
                            checked id="table_Company_Size_IN"></label>
                </div>
                <div class="col-2">
                    <label class="btn btn_city w-100" id="table_Revenue">Revenue <input type="checkbox" checked
                            id="table_Revenue_IN"></label>
                </div>
                <div class="col-2">
                    <label class="btn btn_city w-100" id="table_Zip_code">Zip Code <input type="checkbox" checked
                            id="table_Zip_code_IN"></label>
                </div>
                <div class="col-2">
                    <label class="btn btn_city w-100" id="table_URL">Website <input type="checkbox" checked
                            id="table_URL_IN"></label>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12" style="overflow-x:auto;">
            <table class="table table-responsive cell-border TableIDADD" id="myTableSimple">
                <thead>
                    <th style="min-width: 150px;">Person Name</th>
                    <th style="width: 59.7344px;">Job Title</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th style="min-width: 150px;">Company Name</th>
                    <th style="width: 105px;min-width: 105px;">Company Size</th>
                    <th>Revenue</th>
                    <th style="min-width: 140px">City</th>
                    <th style="min-width: 72px;">Zip Code</th>
                    <th>Website</th>
                </thead>
                <tbody id="lead_data">
                    @forelse ($lead_data as $key=> $lead)
                    <tr>
                        {{-- <td>{{$lead->industry}}</td> --}}
                        <td>{{$lead->person_name}}</td>
                        <td>{{($lead->title = "Managing Partner"?"Partner": Str::substr($lead->title, 0, 15)."...")}}
                        </td>
                        <td>{{Str::substr($lead->email, 0, 3)."****@*****".Str::substr($lead->email, -5)}}</td>
                        <td>{{Str::substr($lead->phone, -4)."****"}}</td>
                        <td>{{Str::substr($lead->company_name, 0, 15)."..."}}</td>
                        <td>{{$lead->company_size}}</td>
                        <td>{{$lead->revenue}}</td>
                        <td>{{$lead->city}}</td>
                        <td>{{$lead->zip_code}}</td>
                        <td>{{Str::substr($lead->website, 0, 10)."***.".Str::substr($lead->website, -3) }}</td>
                        @empty
                    <tr>
                        <td colspan="12" class="text-center">Not Found Any Data.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="custom_paginate">
            <div class="row d-none">
                <div class="col-sm-12 col-md-6">{{ $lead_data->links() }}</div>
            </div>
        </div>

    </div>

    {{-- <div id="findyourleads" style="padding-top:4rem;">
        <div class="container-fluid col-sm-12 col-md-12 mb-2" style="padding:4rem 0;">
            <!-- background-color: #C1CCDB; -->
            <div class="container pb-1" style="border-bottom:1px solid #484a7d">
                <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Pricing ! <span
                        style="font-size: 35px;color:#000;font-weight: 500;">Work & offer<span></h3>
            </div>
        </div>
    </div> --}}

    </div>
</section>
<!-- Home Scetion - Section Three || End -->

{{-- <section class="container-fluid slogan_box slogan_dark py-5 section_part" style="z-index: 20;padding-top:10rem;">
    <div class="container">
        <h3>Our front office function as your back office</h3>
        <h5>The collective experience of our 5 year-old BPO company</h5>
    </div>
</section> --}}


<!-- Home Scetion - Section Four || Start -->
<section class="section_part" style="padding-top:2rem;" id="pricing">
    <div class="container-fluid col-sm-12 col-md-12 pb-2"
        style="background-color: #C1CCDB;padding-top: 4rem!important;">
        {{-- <div class="container pt-5 pb-4">
            <h3 class="text-uppercase style_text_2">Pricing</h3>
        </div> --}}

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
            {{-- <h3 class="style_text_2" style="font-size: 90px;color: #484a7d;font-weight: 900;">Lead Generation Outsourcing <span
                    style="font-size: 35px;color:#000;font-weight: 500;">| The Definitive Guide To Outsource leads<span></h3> --}}

        </div>

        <div class="container mt-3" id="work_up_content">
            <h4 class="m-0" style="font-size: 20px;color: #484a7d;font-weight: 600;">The Definitive Guide To Outsource leads</h4>
            <h3 class="mt-0 style_text_2" style="font-size: 35px;color: #484a7d;font-weight: 900;">Lead Generation Outsourcing</h3>

            <p class="mb-3">Lead Generation Outsourcing is a great way to earn quality prospects and convert revenues
                within a short time with a few bucks, but without proper knowledge, you may waste more money than you
                need to. And you will get no result. But, with good command over lead generation outsourcing and the
                right person, you will get outstanding results that you didn't even imagine. This Lead Generation
                Outsourcing Definitive Guide will tell you how to do it. So, stay till the end, and you will discover
                the hidden gems of lead generation and how you can use it to get greater results.</p>
            <p class="mb-3">Lead generation outsourcing is a great way for businesses to get new leads from potential
                customers and create a healthy sales funnel. By outsourcing lead generation, businesses can save time
                and money while still getting the best possible results. Businesses need to consider a few things when
                outsourcing lead generation from a lead generation agency, including the type of leads they want to
                produce, their budget, and their desired outcome. Outsource leads if you want to increase your
                business's sales and reach new markets. But, of course, with proper knowledge!</p>
            <h2 class="mt-4">What is Lead Generation, and How Does it Work?</h2>
            <p class="mb-3">Lead generation is the process of generating sales leads from potential customers. Lead
                generation can be done through several different means. Some lead generation methods are more common
                than others. But all lead generation methods are successful in generating leads. The most common way is
                through contact with a salesperson. If you work for a company that makes products or services, your next
                interaction with customers is the best time to generate leads.</p>

            <p class="mb-3">If you are a salesperson or a customer service representative, you can ask prospects
                questions about your product or service. You can also use social media to generate leads. There are a
                few criteria for lead generation and types of leads.</p>
            <h3 class="mt-4">What are The Types of Lead Generations</h3>
            <p class="mb-3">All the lead-generation processes in the world fall under these two criteria;
                <ul class="li_style">
                    <li>Inbound Lead Generation</li>
                    <li>Outbound Lead Generation</li>
                </ul>
            </p>
            <h3 class="mt-4">Inbound Lead Generation Process</h3>
            <p class="mb-3">Inbound lead generation is a process that starts with identifying the needs of your target
                market and then coming up with a list of potential leads. Next, you need to create an email course that
                addresses those needs and offers information that will interest your potential customers. Finally, you
                must create a landing page that greets your new customers and sells them the products or services you
                offer.</p>
            <p class="mb-3">So in other words, this is a process of organic lead generation. Organic lead generation
                uses natural resources to generate leads for businesses. This process can include creating a website,
                conducting market research, and contacting potential customers. By using this process, businesses can
                increase their lead generation rate by up to 50%. These leads include prospects' email addresses,
                contact numbers, or other information.</p>
            <h3 class="mt-4">Outbound Lead Generation Process</h3>
            <p class="mb-3">Outbound lead generation is the process of creating leads for a business, and it is done
                through the use of traditional marketing channels. This process involves gathering information from
                prospects willing to buy your product or service. The marketing department or sales department does the
                process of outbound lead generation, it involves contacting prospects to gather information.</p>
            <p class="mb-3">This process involves contacting people who have an interest in your product or service.
                This lead is done through cold calling, telemarketing, and through direct mail. This process involves
                gathering information about the customer, and it is done to generate leads. Outbound lead generation
                starts with identifying who your target customers are, building a relationship with them, and developing
                a strategy to convert them. After developing a plan, you send marketing efforts to those identified
                customers to convert them.</p>
            <h3 class="mt-4">Who Needs Lead Generation?</h3>
            <p class="mb-3">Lead generation is a necessary function for any business. Not only do businesses need to
                generate leads, but they also need to keep them coming. Here, we tried to list out some needed companies
                or industries that need lead generation outsourcing to keep their business up and running;</p>
            <h4 class="mt-4">B2B Companies</h4>
            <p class="mb-3">Businesses that conduct business as the bulk of their operations, rather than consumers,
                usually require Business to Business or B2B lead generation services. They typically sell products or
                services to other businesses, not individual consumers. B2B businesses typically have longer sales
                cycles and higher prices, so they typically do not use traditional marketing strategies to generate
                leads. They thus need to use targeted lead generation.</p>
            <p class="mb-3">Lead generation services can assist B2B companies in honing in on their target customers,
                lead generation strategy and generating more leads. These services can include premium digital ads,
                commercial mailings, telesales, and more. Through lead generation services, B2B companies can increase
                the prospects of making a profit and reaching their business goals.</p>
            <h4 class="mt-4">B2C Companies</h4>
            <p class="mb-3">Lead generation is enormously critical for site owners and organizations since they want to
                sell their items to as many people as possible. Raising the number of leads theoretically enhances the
                number of customers in the target audience, making their interest in a brand product or service more
                noticeable. In the end, lead generation is a multibillion-dollar industry. A significant percentage of
                this industry is devoted to online marketing campaigns, along with the help of lead generation services.
            </p>
            <h4 class="mt-4">Online Businesses</h4>
            <p class="mb-3">A salesman wishing to earn money in an online business world wants lead generation for
                buyers' contact info to resell to them later. Most conventional retailers would like their clients to
                return repeatedly to patronize their services. However, this isn't possible in online services due to
                the broad distance and the large number of customers.</p>
            <p class="mb-3">So, small to big online business owners need lead generation outsourcing services to market
                their products or services to more customers.</p>
            <h3 class="mt-4">Is it Better To Outsource Lead Generation?</h3>
            <p class="mb-3">The decision to outsource lead generation is complex, with many factors to consider. The
                more important ones include the company's needs, the client's preferences, and the competition.
                Outsource lead generation if you think it will save your business money, improve your customer service
                scores, or take on a lessening role in your overall marketing efforts.</p>
            <p class="mb-3">Whether you need lead generation outsourcing services or not depends on your industry and
                how it will profit you. If you are in a business that sells services to businesses, then you surely need
                lead generation outsourcing services.</p>
            <p class="mb-3">If you are a multichain retailer or small online business owner, you need lead generation
                outsourcing to reach your potential clients. You can perform your marketing efforts to your leads and
                increase sales.</p>
            <p class="mb-3">Finally, lead generation is especially needed if you have a labor shortage or can't spend
                much on an extra employee to collect leads month after month. So, you can outsource lead generation
                service from a company to do your work at a small cost, and yes, lead generation outsourcing is pretty
                cost-effective too!</p>
            <h3 class="mt-4">Are Lead Generation Companies Worth it?</h3>
            <p class="mb-3">Well, it depends on your needs! Do you need to build a list of prospects? Or do you just
                want to reach some new potential customers? And last but not least, do you need to generate leads for
                different projects? Then lead generation companies are worth it!</p>
            <p class="mb-3">Lead generation companies are becoming more and more popular as a way to increase your
                online presence and create leads for new business opportunities. These companies have experienced teams
                and dedicated staff who know what they do. Besides, some companies are experts and have well-researched
                abilities in different industries, which may help your company to get more qualified prospects.</p>
            <p class="mb-3">These lead generation outsourcing companies have lots of potential customers under their
                piggy bank, which they can provide you quickly. They also take responsibility for these leads, and
                provide high-quality leads.</p>
            <p class="mb-3">Another reason you should outsource leads from these companies is that you can get them at a
                very affordable cost. So, it is a great opportunity to market your product to a whole bunch of potential
                clients without spending a big fortune!</p>
            <h3 class="mt-4">How Do You Choose a Lead Generation Company?</h3>
            <p class="mb-3">Many factors matter in this case, as there are many lead generation outsourcing companies
                worldwide.</p>
            <p class="mb-3">The first thing you need to consider before choosing a company for your lead generation
                outsourcing is the authority and trustworthiness of the company. It means that you should be sure that
                the company is reliable and trustworthy to get quality leads for your business. You have to ensure that
                the company is dedicated to helping businesses grow by providing them with the right guidance and
                training.</p>
            {{-- <h3 class="mt-4">Inbound Lead Generation Process</h3>
            <p class="mb-3"></p> --}}

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

            <p class="my-4">As our respective client, you have all the rights to know how we research, scrap, generate
                and deliver the leads for you. Here we have openly illustrated the step-by-step guide of our lead
                generation process from the starting to the handover of the project.</p>
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
                <h3 data-index="0" class="spinx-acco-title current"><i class='bx bx-user'></i>We collect the data</h3>
                <div class="spinx-acco-content" style="display: block;">
                    <p>First We will show you our sample work, If you like our sample work of b2b lead generation services, then we collect the main project details with all specifications and requirements.</p>

                </div>
                <h3 data-index="1" class="spinx-acco-title"><i class='bx bx-user'></i>Analyze Your Data</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>INTELLIGENCE &amp; EXPERIENCE</h4> --}}
                    <p>Before we start to collect your leads with high precision, our experts analyze your full project to find the most appropriate & easy method. They will transfer it to our Expert team with their appropriate method.</p>

                </div>
                <h3 data-index="2" class="spinx-acco-title"><i class='bx bx-user'></i>Our Editors service</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>After collecting your data our expert editors will revise all the files properly and if there needs any correction, the editor will make it unique. They will check the project many times if needed.</p>

                </div>
                <h3 data-index="3" class="spinx-acco-title"><i class='bx bx-user'></i>We assure quality</h3>
                <div class="spinx-acco-content" style="display: none;">
                    {{-- <h4>THE PAST &amp; THE FUTURE</h4> --}}
                    <p>We always try to maintain overall quality and submit error-free data. In this case, we maintain a strict quality check for any type of Lead collecting service. We always give you an error and bounce-free leads..</p>
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
                <p>Lead Generation is our specialty, but it starts with your Discussion. We take your unique
                    business idea and understand your needs. We tailor a marketing strategy with our lead generation
                    services so that you get the most effective return.</p>
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
                    $serviceName = 'Lead Generation';
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
@endsection
