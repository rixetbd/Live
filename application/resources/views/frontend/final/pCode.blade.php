
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
                    <ul>
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
