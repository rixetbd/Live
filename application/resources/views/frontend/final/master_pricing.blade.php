<section class="section_part" style="" id="pricing">
    <div class="container-fluid col-sm-12 col-md-12" style="background-color: #fff;">
        <div class="container pt-3">
            {{-- <h3 class="style_text_2" style="font-size: 60px;color: #484a7d;font-weight: 900;">Pricing ! <span
                    style="font-size: 35px;color:#000;font-weight: 500;">Work & offer<span></span></span></h3> --}}
            <h4 style="padding-top: 2rem;">
                <span id="service_first_one" style="font-size: 2.2rem;margin-right: .5rem;">Service Name </span> ||
                <span id="service_first_two" style="margin-left: .5rem;">Category Name</span>
            </h4>
        </div>

    </div>
</section>


<section class="section_part" id="" style="background:#fff;">
    <div class="container" id="service_col_main">
        <div class="row m-0">
            <div class="row m-0 w-100 p-0">
                <div class="col-sm-12 col-md-7" id="service_col_two">
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
                            <h3 class="mt-2 py-2">FAQ</h3>
                            <div data-index="4" class="content_field_div" id="service_faq" class="mt-3 my-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 p-0 service_three_fixed" id="service_col_three" style="">
                    {{-- <div class="service_col_three_main ps-3">
                        <div class="row m-0 pt-3" id="card_info">
                            <div id="img_replace">
                                <img src="https://bdosc.com/uploads/service_banner/12_service_635e9e4e37178.jpg"
                                    alt="slider1" class="img-fluid">
                            </div>

                            <div class="my-3" style="box-shadow: 3px 3px 6px #a2a3ab, -3px -3px 6px #ffffff;">
                                <div class="row m-0 my-3" id="card_badge">
                                    <div class="col col0 active" onclick="selectedPackage('34', '.col0', '1','12')">
                                        SMALL</div>
                                    <div class="col col1" onclick="selectedPackage('35', '.col1', '2','12')">MEDIUM
                                    </div>
                                    <div class="col col2" onclick="selectedPackage('36', '.col2', '3','12')">LARGE</div>
                                </div>

                                <div class="row m-0 mt-2 p-0 justify-content-between"
                                    style="box-shadow: inset 3px 3px 6px #a2a3ab, inset -3px -3px 6px #ffffff;">
                                    <div class="col-4 btn_right_shadow" id="ser_pack_price">US $ 10</div>
                                    <div class="col-7 card_info_heading" id="ser_pack_title">15 simple images</div>
                                </div>
                                <div class="col-12 mt-4" id="ser_pack_description"
                                    style="box-shadow: none;padding:10px;border: 1px solid #fff;margin-bottom: 15px;">
                                    Background
                                    Remove, Change Background, Re-size &amp; Crop, Adjust Light+color, Skin Retouch,
                                    JPG, PNG</div>
                            </div>

                            <div class="col-12"
                                style="padding: 25px 10px;margin: 2px 0 0 0;box-shadow:  3px 3px 6px #a2a3ab, -3px -3px 6px #ffffff;padding:10px;background:#D8DBE1;">
                                <div class="col-12 mb-3 py-2" style="text-align: center;border: 1px solid #fff;">
                                    <span id="ser_pack_duration">3</span> Days Delivery
                                </div>
                                <div class="col-12"
                                    style="box-shadow: inset 3px 3px 6px #a2a3ab, inset -3px -3px 6px #ffffff;padding:10px;">
                                    <ul style="list-style: none;margin:0;padding:0;" id="ser_pack_active">
                                        <li><i class="fas fa-check"></i> 50 email sends</li>
                                    </ul>
                                </div>
                                <div class="row m-0 p-0 contact_group">
                                    <a class="btn w-100" id="confirm_order_btn" href=""><i
                                            class="fas fa-cart-plus me-2"></i> Confirm Order</a>
                                </div>
                            </div>
                            <div class="col-12 mt-3"
                                style="margin: 2px 0 0 0;box-shadow:  3px 3px 6px #a2a3ab, -3px -3px 6px #ffffff;padding:10px;background:#D8DBE1;">
                                <button type="button" class="btn w-100" data-bs-toggle="modal" id="make_a_deal_btn"
                                    data-bs-target="#staticBackdrop"><i class="fas fa-headset me-2"></i> Or let's make a
                                    deal</button>
                            </div>

                        </div>

                    </div> --}}

                {{-- @php

                    $serviceName = 'Search Engine Optimization';
                    $getServiceName = App\Models\ServiceName::where('name', '=', $serviceName)->first();

                    if (!empty($getServiceName)) {
                    $getFaqByServiceName = App\Models\FaqTable::where('service_name_id', '=', $getServiceName->id)->get();
                    }else{
                    $getFaqByServiceName = [];
                    }
                @endphp --}}



                    <!-- Regular Card || Start -->
                    <div class="service_card_07">
                        <div class="service_card_07_div">
                            <div class="row pb-4" id="card_badge">
                                <div class="col" onclick="inputCheck()">Basic</div>
                                <div class="col active">Medium</div>
                                <div class="col">Large</div>
                            </div>
                            <div class="text-center discount_info">
                                <p class="pt-5"><sup>$</sup><span id="ser_pack_price">1000</span><sub>US</sub></p>
                                <p id="ser_pack_title">5 Keyword Research for 5 pages</p>
                                <p class="yellow_color">Days Delivery : <span id="ser_pack_duration">5</span></p>
                            </div>

                            <div style="margin-top:2rem;border-left:1px solid #00000021;border-bottom:1px solid  #00000021;">
                                <p class="ps-3 pb-3" id="ser_pack_description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Id molestiae voluptate doloremque sapiente
                                    officiis maxime? Lorem ipsum dolor sit amet consectetur elit.</p>
                            </div>
                            <div class="row pt-2">
                                <div class="col-12 feature_list">
                                    <h6 class="yellow_color">Feature</h6>

                                    <div>
                                        <table>
                                            <tbody id="packageListData_th2">
                                                <tr>
                                                    <td><i class="fas fa-check feature_list_sign_big"></i></td>
                                                    <td>On-Page Optimization</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-check feature_list_sign_big"></i></td>
                                                    <td>Content Strategy Planning</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-check feature_list_sign_big"></i></td>
                                                    <td>Keyword Research</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-check feature_list_sign_big_disable"></i>
                                                    </td>
                                                    <td>Backlinking</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-check feature_list_sign_big_disable"></i>
                                                    </td>
                                                    <td>Competitor Research</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>

                            <div class="row confirm_btn_area">
                                <div class="col-4">
                                    <button>Confirm</button>
                                </div>
                                <div class="col-8">
                                    <button>Let's Make A Deal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Regular Card || End -->

                    <!-- Lead Generation Card || Start -->
                    {{-- <div class="service_card_07">
                        <div class="service_card_07_div">
                            <div class="row pb-4 pt-2">
                                <div class="col" onclick="inputCheck()">Basic</div>
                                <div class="col active">Medium</div>
                                <div class="col">Large</div>
                            </div>
                            <div class="text-center discount_info">
                                <p class="pb-2">You got <span id="got_discount">20</span><span class="got_discount_color">%</span>
                                    Discount</p>
                                <p class="pt-2"><sup>$</sup><span id="ser_pack_price">1000</span><sub>US</sub></p>
                                <p>Leads : <span id="got_quantity"><input type="text" class="easy-basket-lower"
                                            value="100" min="0" max="10000" maxlength="6"></span> | Days Delivery :
                                    <span id="got_days">5</span>
                                </p>
                            </div>

                            <div class="easy-basket-filter">
                                <div class="easy-basket-filter-range">
                                    <input type="range" class="lower range" step="any" min="0" max="10000"
                                        value="100" />
                                    <div class="fill"></div>
                                </div>
                                <div class="easy-basket-filter-ticks">
                                    <div data-value="0"></div>
                                    <div data-value="100"></div>
                                    <div data-value="200"></div>
                                    <div data-value="300"></div>
                                    <div data-value="400"></div>
                                    <div data-value="500"></div>
                                    <div data-value="600"></div>
                                    <div data-value="700"></div>
                                    <div data-value="800"></div>
                                    <div data-value="900"></div>
                                    <div data-value="2000"></div>
                                    <div data-value="1100"></div>
                                    <div data-value="1200"></div>
                                    <div data-value="1300"></div>
                                    <div data-value="1400"></div>
                                    <div data-value="1500"></div>
                                    <div data-value="1600"></div>
                                    <div data-value="1700"></div>
                                    <div data-value="1800"></div>
                                    <div data-value="1900"></div>
                                    <div data-value="4000"></div>
                                    <div data-value="2100"></div>
                                    <div data-value="2200"></div>
                                    <div data-value="2300"></div>
                                    <div data-value="2400"></div>
                                    <div data-value="2500"></div>
                                    <div data-value="2600"></div>
                                    <div data-value="2700"></div>
                                    <div data-value="2800"></div>
                                    <div data-value="2900"></div>
                                    <div data-value="6000"></div>
                                    <div data-value="3100"></div>
                                    <div data-value="3200"></div>
                                    <div data-value="3300"></div>
                                    <div data-value="3400"></div>
                                    <div data-value="3500"></div>
                                    <div data-value="3600"></div>
                                    <div data-value="3700"></div>
                                    <div data-value="3800"></div>
                                    <div data-value="3900"></div>
                                    <div data-value="8000"></div>
                                    <div data-value="4100"></div>
                                    <div data-value="4200"></div>
                                    <div data-value="4300"></div>
                                    <div data-value="7000"></div>
                                    <div data-value="7500"></div>
                                    <div data-value="8000"></div>
                                    <div data-value="8500"></div>
                                    <div data-value="9000"></div>
                                    <div data-value="9500"></div>
                                    <div data-value="10000"></div>
                                </div>

                            </div>

                            <div class="d-flex custom_input_text" style="margin-top: 2rem">
                                <div>
                                    <span>OR</span>
                                    <br>
                                    <p style="font-size: 10px;">Enter the Leads Quantity</p>
                                </div>
                                <div>
                                    <input type="text" id="custom_input" placeholder="">
                                </div>
                            </div>

                            <div class="row pt-2">
                                <div class="col-6">
                                    <h6 class="card_default_text">Select your needs</h6>
                                    <table class="price_table w-100"
                                        style="border-top: 1px solid #fff;border-right: 1px solid #fff;">
                                        <tbody>
                                            <tr>
                                                <td>First & Last Name</td>
                                                <td><input type="checkbox" name="" id="" checked></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><input type="checkbox" name="" id="" checked></td>
                                            </tr>
                                            <tr>
                                                <td>Comapny Name</td>
                                                <td><input type="checkbox" name="" id="" checked></td>
                                            </tr>
                                            <tr>
                                                <td>Comapny Phone</td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>Website</td>
                                                <td><input type="checkbox" name="" id="" checked></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><input type="checkbox" name="" id="" checked></td>
                                            </tr>
                                            <tr>
                                                <td>Revenue <i class="fas fa-star gold_star"></i></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>Num. Employee <i class="fas fa-star gold_star"></i></td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>Source Link</td>
                                                <td><input type="checkbox" name="" id=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-6 feature_list">
                                    <h6 class="card_default_text">Feature</h6>

                                    <div>
                                        <table>
                                            <tbody id="feature">
                                                <tr>
                                                    <td><i class="fas fa-check feature_list_sign_big"></i></td>
                                                    <td>On-Page Optimization</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-check feature_list_sign_big"></i></td>
                                                    <td>Content Strategy Planning</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-check feature_list_sign_big"></i></td>
                                                    <td>Keyword Research</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-check feature_list_sign_big_disable"></i></td>
                                                    <td>Backlinking</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fas fa-check feature_list_sign_big_disable"></i></td>
                                                    <td>Competitor Research</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>

                            <div class="row confirm_btn_area">
                                <div class="col-6">
                                    <button>Confirm</button>
                                </div>
                                <div class="col-6">
                                    <button>Or Let's Make A Deal</button>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                    <!-- Lead Generation Card || End -->





                </div>
            </div>
        </div>
</section>
