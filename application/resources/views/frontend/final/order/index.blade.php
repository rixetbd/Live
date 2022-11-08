@extends('frontend.final.master2')

@section('custom_css')
<style>
    body {
        background: #f1f1f1;
    }

    #contact_area_box {
        display: none;
    }

    .border_1x {
        border: 1px solid #b0b4bb;
    }

    form {
        box-shadow: none;
    }

    #card_badge_list .col {
        text-align: center;
        border: 1px solid #b0b4bb;
        border-radius: 8px;
        padding: 10px;
        cursor: pointer;
        margin: 5px 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 600;
        color: #ffffff96;
        letter-spacing: 1px;
    }

    #card_badge_list .active {
        background: #5a557c;
        border-color: #7ED321!important;
        color: #fff;
    }


    form input.form-control,
    form select.form-select,
    form textarea.form-control,
    .form-control:disabled,
    .form-control[readonly] {
        background-color: transparent;
        opacity: 1;
        border: 1px solid #b0b4bbd0;
        box-shadow: none;
    }

    form input:focus,
    form input.form-control:focus,
    form select.form-select:focus,
    form textarea.form-control:focus {
        box-shadow: none;
        border: 1px solid #b0b4bbd0;
    }

    input,
    textarea {
        margin-top: .4rem;
    }

    .inline_input {
        display: flex;
        align-items: center;
    }

    .inline_input label {
        min-width: 100px;
    }

    .inline_input .input {
        width: -webkit-fill-available;
    }

    /* .inline_input.justify-content-end label{font-weight: 700;} */
    .inline_input.justify-content-end label span {
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif !important;
    }

    .inline_input label.default {
        /* font-weight: 700; */
    }

    .inline_input input.default {
        border: none;
        font-weight: 600;
        font-size: 17px;
        padding: 0;
    }

    .radio-button{
        width: 22px;
        background: #7ed321;
        height: 22px;
        display: inline-flex;
        border-radius: 50%;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }

    #card_badge_list .col.active i{display: block;}

    .radio-button  i{
        display: none;
        width: 14px;
        height: 7px;
        background: #7ED321;
        /* display: block; */
        border-left: 2px solid #000;
        border-bottom: 2px solid #000;
        transform: rotate(310deg);
    }
    #section_service_menu {
        background-color: #c1ccdb;
        border-bottom: 1px solid #ffffff40;
        color: #383838;
        position: fixed;
        z-index: 50;
        top: 60px;
        height: 40px;
        padding-top: 10px;
        width: 100%;
    }
    .service_grp_hover {
        position: relative;
    }

    .service_grp_names:first-child {
        padding-left: 0px;
    }
    .service_grp_names:last-child {
        border: none !important;
    }

    .service_grp_names {
        cursor: pointer;
        padding-right: 20px;
        border-right: 1px solid #383838;
        font-weight: 500;
        padding-left: 20px;
    }
    .service_style_20::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 1px;
        /* background-color: #383838; */
        bottom: 0;
        border-radius: 50%;
    }

    #section_service_menu:hover #service_grp_hover_part {
        display: block;
    }

    .service_grp_names{
        position: relative;
    }
    .service_grp_names::after{
        border-bottom: 0.75rem solid #f00;
        border-left: 0.75rem solid transparent;
        border-right: 0.75rem solid transparent;
        bottom: 0;
        content: "";
        height: 0;
        left: auto;
        position: absolute;
        right: 50%;
        top: auto;
        visibility: hidden;
        width: 0;
        z-index: 99999999999999;
    }

</style>
@endsection




@section('submenu')

<section style="padding-top:6rem;background:red;">
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-10">
                <input type="text">
            </div>
        </div>
    </div>
</section>



{{-- <section class="d-none" id="section_pagination">
    <div class="container">
        <ul>
            <li><a href="#">One</a></li>
            <li><a href="#">Two</a></li>
            <li><a href="#">Three</a></li>
            <li><a href="#">Four</a></li>
            <li><a href="#footer">Contact</a></li>
        </ul>
    </div>
</section> --}}
<!--

<section class="" id="section_service_menu">
    <div class="container">
        <div class="service_style_20 service_grp_hover">
            <div class="d-flex" id="service_grp_names">
                @forelse ($faq_service_name as $key=> $service_name)
                <div class="service_grp_names me-2" onmouseover="service_grp_names(`{{$service_name->id}}`)">
                    {{$service_name->name}} <i class="fas fa-angle-down"></i></div>
                @empty
                <div class="grp_one" onclick="ServiceNameClick()">No Service Availeble Now</div>
                @endforelse
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #c1ccdb;">
        <div class="container">
            <div class="col-sm-12 col-md-12 py-4" id="service_grp_hover_part">
                <h4 style="font-size:20px;">Choose Your Service</h4>
                <hr style="margin: 0 0 10px 0;">
                <div class="row" id="service_grp_names_list">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="d-none" id="section_service_title_area">
    <div class="container">
        <p><span style="font-size:20px;" id="service_list_title">Background Removal Service </span></p>
    </div>
</section>

<section class="d-none" id="section_service_group_area">
    <div class="container">
        <div class="mb-0 tob_sec_bar" id="single_service_sub_nav">
            <ul class="m-0">
                <li id="btn_overview" class="btn_overview">Overview</li>
                {{-- <li class="service_list_description">Description of services</li>
                <li class="why_choose_dimarz">Why Choose DiMarz</li>
                <li class="service_faq">FAQ</li> --}}
                <li id="compare_packages_btn">Compare Package</li>
            </ul>
        </div>
    </div>
</section>

-->
@endsection





@section('content')

<div style="min-height:8rem;"></div>

@include('frontend.final.master_pricing')

<div class="container" style="padding-top: 3rem;">
    <div class="py-5 text-center">
        <h2>Place a order</h2>
        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ad</p>
    </div>

    <div class="row pb-4">
        <div class="col-md-3 mb-4">
            <div class="border_1x p-3 my-2">
                <h4 class="d-flex justify-content-between align-items-center">
                    <span class="text-muted">What is Pre Build Packages ?</span>
                </h4>
                <div class="row m-0 my-1 p-0" style="">
                    A service package is a collection of services offered as a unit by a business. At the customer's
                    request, a product can be customized by having one-time effects added. Contacting people on a
                    client's behalf is the focus of customer contact services.
                </div>
            </div>
            <div class="border_1x p-3 my-2">
                <h4 class="d-flex justify-content-between align-items-center">
                    <span class="text-muted">Why Custom Order ?</span>
                </h4>
                <div class="row m-0 my-1 p-0" style="">
                    <p class="ps-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate vel voluptatum
                        molestiae, quidem dolorum blanditiis?</p>
                    <p class="ps-0">Eos enim exercitationem aperiam, cumque laudantium, facere possimus aspernatur
                        voluptates consectetur, aliquid aut nemo explicabo provident vero.</p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="border_1x p-3">
                <div class="row m-0" id="card_badge_list">
                    <div class="col col1 {{($feature_index == '1'?'active':'')}}" onclick="selectedPackageOrder('{{$service->id}}', '.col1', '1', '{{$packages->id}}')">
                        <span class="radio-button"><i class="before-radio"></i></span> Small
                    </div>
                    <div class="col col2 {{($feature_index == '2'?'active':'')}}"
                        onclick="selectedPackageOrder('{{$service->id}}', '.col2', '2', '{{$packages->id}}')">
                        <span class="radio-button"><i class="before-radio"></i></span> Medium</div>
                    <div class="col col3 {{($feature_index == '3'?'active':'')}}"
                        onclick="selectedPackageOrder('{{$service->id}}', '.col3', '3', '{{$packages->id}}')">
                        <span class="radio-button"><i class="before-radio"></i></span> Large</div>
                    <div class="col col4 {{($feature_index == '3'?'active':'')}}"
                        onclick="selectedPackageOrder('{{$service->id}}', '.col4', '3', '{{$packages->id}}')">
                        <span class="radio-button"><i class="before-radio"></i></span> Custom Order</div>
                </div>


                <form action="" method="POST">
                    <h4 class="">{{$service->name}} </h4>
                    <div class="row">
                        <div class="col-md-6 inline_input">
                            <label for="package_badge" class="default">Package : </label>
                            <div class="input">
                                <input type="text" class="form-control form-control-sm default" id="package_badge"
                                    placeholder="Package Badge" value="{{$packages->name}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 inline_input justify-content-end">
                            <label for="package_price">Package Price : <span class="ms-4"
                                    id="package_price">${{$packages->price}}
                                    US</span></label>

                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 inline_input">
                            <label for="package_duration" class="default">Duration : </label>
                            <div class="input">
                                <input type="text" class="form-control form-control-sm default" id="package_duration"
                                    placeholder="Package Badge" value="{{$packages->duration}} Days" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 inline_input">
                        <label for="package_description">Description</label>
                        <div class="input">
                            <textarea name="" class="form-control" id="package_description"
                                placeholder="Package Description" disabled>{{$packages->description}}</textarea>
                        </div>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>
                    {{-- <div class="mb-3 inline_input">
                <label for="package_description">Description</label>
                <div class="input">
                    <textarea name="" class="form-control" id="package_description" placeholder="Package Description"
                        disabled>{{$packages->description}}</textarea>
            </div>
            <div class="invalid-feedback">
                Please enter your shipping address.
            </div>
        </div> --}}

        <hr class="mb-4">

        <h4 class="mb-3">Your Information</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-12 mb-3 inline_input">
                    {{-- <label for="firstName">First name</label> --}}
                    <div class="input">
                        <input type="text" class="form-control form-control-sm" id="firstName" placeholder="First name"
                            value="" required>
                    </div>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-12 mb-3 inline_input">
                    {{-- <label for="lastName">Last name</label> --}}
                    <input type="text" class="form-control form-control-sm" id="lastName" placeholder="Last name"
                        value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="col-md-12 mb-3 inline_input">
                    {{-- <label for="country">Country</label> --}}
                    <select class="form-select d-block w-100" id="country" required>
                        <option value="">Choose...</option>
                        @foreach ($all_countries as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>

                <div class="col-md-12 mb-3 inline_input">
                    {{-- <label for="phone">Phone (Skype)</label> --}}
                    <input type="text" class="form-control form-control-sm" id="phone" placeholder="Phone" required>
                    <div class="invalid-feedback">
                        Phone required.
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <textarea name="" class="form-control form-control-sm" placeholder="Message"
                    style="height:100px;"></textarea>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 mb-3 inline_input">
                    {{-- <label for="phone">Phone (Skype)</label> --}}
                    <input type="email" class="form-control form-control-sm" id="email" placeholder="Email" required>
                    <div class="invalid-feedback">
                        Email required.
                    </div>
                </div>
                <div class="col-md-12 mb-3 inline_input">
                    {{-- <label for="phone">Phone (Skype)</label> --}}
                    <input type="text" class="form-control form-control-sm" id="company" placeholder="Company" required>
                    <div class="invalid-feedback">
                        Company required.
                    </div>
                </div>
            </div>
        </div>



        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">I agree to the Terms and conditions</label>
        </div>

        <hr class="mb-4">
        <button class="btn btn-lg" type="submit" style="background: transparent;">Submit</button>
        </form>
    </div>
</div>

@endsection

















@section('custom_js')

<script>
    function selectedPackageOrder(service_id, className, package_index, package_id) {
        $.ajax({
            type: 'POST',
            url: `/selectedpackageorder`,
            data: {
                'service_id': `${service_id}`,
                'className': `${className}`,
                'package_index': `${package_index}`,
                'package_id': `${package_id}`,
            },
            success: function (data) {
                $('#card_badge_list div').removeClass('active');
                $(`#card_badge_list ${className}`).addClass('active');
                $(`#ser_pack_description`).html(data.package_data['description']);
                $(`#ser_pack_price`).html('$' + data.package_data['price']);
                $(`#package_name`).val(data.package_data['title']);
                $(`#package_badge`).val(data.package_data['name']);
                $(`#package_price`).val(data.package_data['price']);
                $(`#package_description`).html(data.package_data['description']);
                $('#package_duration').val(data.package_data['duration'] + " Days");

                console.log(data.package_data_list_html);
            }
        });
    }

</script>

@endsection
