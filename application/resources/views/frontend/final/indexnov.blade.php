@extends('frontend.final.master2')

@section('custom_css')
<link rel="stylesheet" href="{{asset('final_front_assets/css/services/lead-home.css')}}">
<style>
    .table {
        border-color: transparent;
    }

    #img_replace {
        box-shadow: 3px 3px 6px #a2a3ab, -3px -3px 6px #ffffff;
        padding: 10px;
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

    #fixed_top_dropdown_btn_span {
        width: 200px;
    }

    #fixed_top_dropdown_btn {
        color: #fff;
        padding-top: 2px;
    }

    #mega_menu_area a.active .service_group_title {
        background-color: #5a80a0;
        color: #fff;
    }

    #mega_menu_area a.active .title_arrow {
        color: #fff;
        opacity: 100;
    }

    #mega_menu_area .service_group_title_two {
        color: #fff;
        padding: 5px;
        margin-bottom: 1rem;
        font-weight: 500;
    }

    #mega_menu_area .service_group_title {
        color: #fff;
        width: fit-content;
        margin-bottom: 0;
        padding: 5px;
        border-radius: 5px;
        letter-spacing: 1px;
        font-weight: 400;
    }

    #contact_area_box {
        display: none;
    }

    .fixed_top {
        background: #5A80A0;
        /* box-shadow: 1px 15px 10px 2px #a7a7a778; */
        position: fixed;
        z-index: 50;
        top: 4.25rem;
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

    .btn_dark {
        background: #383838 !important;
    }

    .table tr:first-child {
        background-color: #C1CCDB;
        color: #000;
    }

    .table tr:first-child td {
        text-align: center;
        font-size: 20px;
        font-weight: 500;
    }

    .table tr:first-child td:first-child {
        font-size: 30px;
    }

    #service_col_two ul,
    #compare_packages ul {
        padding-left: 1.2rem;
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

    #service_faq h5 {
        font-size: 16px;
        letter-spacing: 1px;
    }

    .price_table {
        width: 100%;
    }

    .price_table td {
        padding: 2px 10px;
        padding-left: 0;
        /* border: 1px solid #b0b4bbd0; */
    }



    .price_table input[type=checkbox] {
        margin-top: 0;
        position: relative;
        cursor: pointer;
    }

    .price_table input[type=checkbox]:before {
        content: "";
        display: block;
        position: absolute;
        width: 15px;
        height: 15px;
        top: -1px;
        left: -1px;
        border: 2px solid #5A80A0;
        border-radius: 3px;
        background-color: #5A80A0;
    }

    .price_table input[type=checkbox]:checked:after {
        content: "";
        display: block;
        width: 5px;
        height: 11px;
        border: solid #fff;
        border-width: 0 2px 2px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        position: absolute;
        top: 0px;
        left: 4px;
    }

    #search_box_input {
        background: #5a80a0;
        color: #ffffffe8;
    }

    #search_box_input::placeholder {
        color: rgba(255, 255, 255, 0.726);
    }

    #ser_pack_description {
        color: #000000a1;
    }

</style>

<style>
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
        border-color: #7ED321 !important;
        color: #fff;
    }


    form input.form-control,
    form select.form-control,
    form select.form-select,
    form textarea.form-control,
    .form-control:disabled,
    .form-control[readonly] {
        background-color: #ffffff8e;
        opacity: 1;
        border: 1px solid #b0b4bbd0;
        box-shadow: none;
    }

    form select.form-control:focus,
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

    .radio-button {
        width: 22px;
        background: #7ed321;
        height: 22px;
        display: inline-flex;
        border-radius: 50%;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }

    #card_badge_list .col.active i {
        display: block;
    }

    .radio-button i {
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

    .service_grp_names {
        position: relative;
    }

    .service_grp_names::after {
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

    .order_heading {
        color: #555;
        font-weight: 700;
        font-size: 22px;
    }

</style>

{{-- Modal CSS || Start --}}
<style>
    #confirm_order_btn,
    #make_a_deal_btn {
        color: #fff;
        background: #204ecf;
        font-weight: 500;
        letter-spacing: 1px;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 650px;
            margin: 1.75rem auto;
        }

        .modal-dialog .modal-content {
            padding: 3rem;
        }

        .modal-body .row {
            padding: 5px;
        }

        .modal-body .row input {
            border-radius: 0;
            border: none;
            border-bottom: 1px solid #38383867;
            padding-left: 0;
        }

        .btn-check:focus+.btn,
        .btn:focus {
            outline: 0;
            box-shadow: none;
        }

        .contact_group {
            margin-top: 10px !important;
        }
    }

</style>
{{-- Modal CSS || End --}}

{{-- Service Card || Start --}}
<style>
    .service_card_07>* {
        font-family: 'Poppins', sans-serif;
    }

    .service_card_07 {
        background: #fff;
        /* background: #5a80a008; */
        /* background: #5A80A0; */
        /* padding: 15px; */
        font-family: 'Poppins', sans-serif;
    }

    .service_card_07 .service_card_07_div {
        font-family: 'Poppins', sans-serif;
        padding: 20px 30px;
        border: 1px solid #00000021;
    }

    .service_card_07 h4 {
        text-align: center;
        color: #ffff00;
        letter-spacing: 1px;
        font-size: 1.4rem;
        font-weight: 400;
    }

    .service_card_07 .col {
        cursor: pointer;
        background: #78a0c3;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        padding: 10px 0;
        border: 1px solid #fff;
        letter-spacing: 1px;
    }

    .service_card_07 .col.active,
    .service_card_07 .col:hover {
        background-color: #486c8b;
        color: #fff;
    }

    .discount_info,
    .discount_info p {
        color: #00000091;
        font-size: .9rem;
    }

    .discount_info sup {
        top: -1em;
        right: 0.3rem;
        font-size: 2rem;
    }

    .discount_info sub {
        font-size: 2rem;
    }

    #ser_pack_price {
        font-size: 5rem;
    }

    .got_discount_color,
    #ser_pack_price,
    .discount_info #got_discount {
        color: #5a80a0;
    }

    #got_discount {
        color: #000;
        font-size: 1.3rem;
        background: gold;
        padding: 0 5px;
    }


    /* ++++++++++++++++++++++++++++++++++++++++++++ */
    .easy-basket-filter {
        width: 100%;
        margin: 20px 0% 0;
        position: relative;
    }

    .easy-basket-lower {
        background: transparent;
        border: none;
        width: 60px;
        color: #5a80a0;
        text-align: center;
        font-size: 1.2rem;
    }

    .fill {
        height: 3px;
        width: 100%;
        background-color: #5a80a0;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
    }

    .easy-basket-filter-info {
        box-sizing: border-box;
        padding: 0;
        width: 100%;
        justify-content: space-between;
        position: absolute;
        top: -50px;
    }

    .easy-basket-filter-info p {
        color: #5a80a0;
        padding: 2px 6px;
        background-color: #01BAB0;
        border-radius: 4px;
        margin: 0;
    }

    .easy-basket-filter-info .iLower {
        float: left;
        display: inline-block;
    }

    .easy-basket-filter-info .iUpper {
        float: right;
        display: inline-block;
    }

    .easy-basket-filter-info input {
        width: inherit;
        border: none;
        color: #5a80a0;
        font: 11px Open Sans;
        background-color: #5a80a0;
        width: 30px;
        text-align: center;
    }

    /***** Position dual *****/
    .range {
        position: absolute;
        left: 0;
        top: 0;
    }

    /****** Style range ******/
    input[type=range] {
        -webkit-appearance: none;
        width: 100%;
        margin: 0;
        background: transparent;
    }

    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        cursor: pointer;
        position: relative;
        z-index: 3;
    }

    input[type=range]:focus,
    input[type=text]:focus {
        outline: none;
    }

    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        border: 5px solid #5a80a0;
        box-shadow: 0 1px 5px -1px rgba(0, 0, 0, 0.5);
        border-radius: 100%;
        background: #5A80A0;
        cursor: pointer;
        margin-top: -9px;
    }

    input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 3px;
        cursor: pointer;
        background: #707D7D;
        border-radius: 1.3px;
    }

    input[type=range].lower::-webkit-slider-runnable-track {
        background: red;
    }

    .easy-basket-filter-ticks {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        height: 15px;
        padding-top: 8px;
        font: 11px Open Sans;
        cursor: default;
        left: 0;
        bottom: 0;
        width: 100%;
    }

    .easy-basket-filter-ticks>div {
        width: 1px;
        background: #5a80a0;
        color: #5a80a0;
        height: 5px;
    }

    .easy-basket-filter-ticks>div:nth-child(10n - 9) {
        height: 150%;
    }

    .easy-basket-filter-ticks>div:nth-child(10n - 9)::before {
        display: block;
        content: attr(data-value);
        -webkit-transform: translate(-50%, 50%);
        transform: translate(-50%, 50%);
        text-align: center;
        width: 40px;
        padding-top: 5px;
    }


    /* Гистограмма	*/
    .easy-basket-filter-histogram {
        width: 100%;
        display: block;
        float: left;
        margin: 0;
        top: -51px;
        position: absolute;
    }

    .easy-basket-filter-histogram ul {
        display: inline-block;
        width: 100%;
        box-sizing: border-box;
        padding: 0;
    }

    .easy-basket-filter-histogram ul li {
        height: 35px;
        box-sizing: border-box;
        background-color: #f1f1f1;
        width: 20%;
        list-style: none;
        padding: 0;
        margin: 0;
        display: block;
        border-right: 1px solid #fff;
        float: left;
        position: relative;
        cursor: pointer;
    }

    .ui-histogram-active {
        background-color: rgba(1, 186, 176, 0.39) !important;
    }

    .easy-basket-filter-histogram ul li:last-child {
        border-right: 0px;
    }

    .easy-basket-filter-histogram ul li:hover {
        background-color: rgba(1, 186, 176, 0.39);
    }

    .easy-basket-filter-histogram ul li:hover>.histogram-ballon {
        display: none;
    }

    .easy-basket-filter-histogram ul li:hover>.histogram-ballon {
        display: block;
    }

    .easy-basket-filter-histogram .histogram-ballon {
        background-color: #f1f1f1;
        position: absolute;
        border-radius: 4px;
        font: 12px Arial;
        top: -40px;
        line-height: 18px;
        padding: 2px 6px;
        white-space: nowrap;
        display: none;
    }

    .easy-basket-filter-histogram .histogram-height {
        background-color: #fff;
    }

    .easy-basket-filter-histogram .easy-basket-filter-histogram-arrow {
        position: absolute;
        display: block;
        width: 10px;
        height: 10px;
        overflow: hidden;
        border: 1px solid #ccc;
        background: #FFF;
        -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.7071067811865475, M12=-0.7071067811865477, M21=0.7071067811865477, M22=0.7071067811865475, SizingMethod='auto expand')";
        filter: progid:DXImageTransform.Microsoft.Matrix(M11=.7071067811865475, M12=-.7071067811865477, M21=.7071067811865477, M22=.7071067811865475, SizingMethod='auto expand');
        -moz-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        left: 58px;
        bottom: -6px;
        border-left: none;
        border-top: none;
        box-shadow: 4px 1px 3px rgba(0, 0, 0, .09);
        left: 56px\9;
        bottom: -4px\9;
    }

    .custom_input_text {
        letter-spacing: 1px;
        color: #5A80A0;
    }

    .custom_input_text span {
        color: #5A80A0;
        font-weight: 600;
        font-size: 16px;
    }


    #custom_input {
        background: transparent;
        border: 1px solid #dadada;
        margin-left: 10px;
        padding: 5px;
        text-align: center;
        color: #fff;
        font-size: 1.4em;
        width: 125px;
        letter-spacing: 1px;
    }

    #custom_input::placeholder {
        color: #b6b6b6;
    }

    .yellow_color {
        color: #5A80A0;
    }

    .feature_list label {
        letter-spacing: 1px;
        color: #000;
        margin-left: 5px;
        margin-bottom: 10px;
    }

    .service_card_07 .confirm_btn_area {
        padding-top: 1.5rem;
    }

    .service_card_07 .confirm_btn_area button {
        width: 100%;
        background-color: #5a80a0;
        color: #fff;
        font-weight: 500;
        letter-spacing: 1px;
        padding: 8px 0;
        text-align: center;
        border: 1px solid #fff;
        border-radius: 5px;
    }

    .service_card_07 .confirm_btn_area button:hover {
        background-color: #416685;
        /* color:  */
    }

    .feature_list td {
        font-size: 12px;
        color: #000;
    }

    .feature_list tr {
        color: #000;
        font-size: 1rem;
        display: flex;
        letter-spacing: 1px;
        margin: 10px 0px;
    }

    .feature_list_sign_big {
        margin-right: 8px;
        font-size: 1.2rem;
        color: #5A80A0;
    }

    .feature_list_sign_big_disable {
        margin-right: 8px;
        font-size: 1.2rem;
        color: #99999977;
    }

    .gold_star {
        margin-left: .2rem;
        color: gold;
    }

    .card_default_text {
        color: #5A80A0;
        font-size: 1.2rem;
    }

</style>
{{-- Service Card || End --}}

@endsection

@section('submenu')

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

@endsection

@section('content')

<div class="blank_area" style="padding-top:5rem;">
</div>

<section style="background:#5A80A0;color:#fff;">
    <div class="container">
        <div class="row align-items-center" style="height: 50vh;">
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

<section class="pb-4">
    @include('frontend.final.master_pricing')
</section>

{{-- ======================================================================== --}}
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Make A Deal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row align-items-center mb-2">
                    <div class="col-4">First Name <span class="text-danger">*</span></div>
                    <div class="col-8">
                        <input type="text" name="" class="form-control" placeholder="Your name" id="clientFirstName">
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-4">Last Name <span class="text-danger">*</span></div>
                    <div class="col-8">
                        <input type="text" name="" class="form-control" placeholder="Your last name"
                            id="clientLastName">
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-4">Email <span class="text-danger">*</span></div>
                    <div class="col-8">
                        <input type="email" name="" id="clientEmail" class="form-control"
                            placeholder="Enter valid email">
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-4">Company Name</div>
                    <div class="col-8">
                        <input type="text" name="" id="clientCompanyName" class="form-control" placeholder="Optional">
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-4">Phone</div>
                    <div class="col-8">
                        <input type="tel" name="" id="clientCompanyPhone" class="form-control"
                            placeholder="Phone (Optional)">
                    </div>
                </div>

                <div class="row align-items-center mb-2">
                    <div class="col-4">Country <span class="text-danger">*</span></div>
                    <div class="col-8">
                        @php
                        $country_name_list = App\Models\Country::all();
                        @endphp
                        <select name="" id="" class="form-control">
                            <option value="">-- Select Your Country</option>
                            @foreach ($country_name_list as $name)
                            <option value="{{$name->name}}">{{$name->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-12">
                        <p class="">By submitting my information, We confirm that our .</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success" id="clientBasicDataSave">Next</button>
            </div>
        </div>
    </div>
</div>
{{-- ======================================================================== --}}

<section class="section_part" style="padding-bottom:10rem;z-index: 22;background:#D8DBE1;" id="compare_packages">
    <div class="container">
        {{-- <h3 class="mb-4 pt-5" style="font-size:30px;">Compare Packages</h3> --}}
        <table class="table table-bordered table-hover" style="border-color: #fff;">
            <tbody id="compare_packages_table">
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
                    <td id="packages_description_01">Removal, Change Background; Re-size; Crop; Adjust Light+colorG</td>
                    <td id="packages_description_02">Removal, Change Background; Re-size; Crop; Adjust light+color, Skin
                        retouch</td>
                    <td id="packages_description_03">Removal, Change Background; Re-size; Crop; Adjust light+color; Skin
                        retouch, JPG, PNG, PSD</td>
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
                    <td class="text-center" id="delivery_time_0">3 Days</td>
                    <td class="text-center" id="delivery_time_1">5 Days</td>
                    <td class="text-center" id="delivery_time_2">7 Days</td>
                </tr>
                <tr style="background: #e8eaeea1;">
                    <td class="text-left">Price</td>
                    <td class="text-center" id="price_pack_0">$50 USD</td>
                    <td class="text-center" id="price_pack_1">$80 USD</td>
                    <td class="text-center" id="price_pack_2">$120 USD</td>
                </tr>
                <tr style="background: #e8eaeea1;">
                    <td class="text-left">Choose Your Package</td>
                    <td class="text-center"><a href="#" class="btn btn-dark" id="confirm_order_btn_pack_0">Select
                            Package</a></td>
                    <td class="text-center"><a href="#" class="btn btn-dark" id="confirm_order_btn_pack_1">Select
                            Package</a></td>
                    <td class="text-center"><a href="#" class="btn btn-dark" id="confirm_order_btn_pack_2">Select
                            Package</a></td>
                </tr>
            </tbody>
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

<section>

    <div class="container">
        <div class="row">

            <!-- Regular Card || Start -->
            {{-- <div class="col-sm-12 col-md-5">
                <div class="service_card_07">
                    <div class="service_card_07_div">
                        <h4>For Lead Generation</h4>
                        <div class="row pb-4 pt-2">
                            <div class="col" onclick="inputCheck()">Basic</div>
                            <div class="col active">Medium</div>
                            <div class="col">Large</div>
                        </div>
                        <div class="text-center discount_info">
                            <p class="pt-5"><sup>$</sup><span id="amount_discount">1000</span><sub>US</sub></p>
                            <p>5 Keyword Research for 5 pages</p>
                            <p class="yellow_color">Days Delivery : <span id="got_days">5</span></p>
                        </div>

                        <div style="margin-top:2rem;border-left:1px solid #fff;border-bottom:1px solid #fff;">
                            <p class="ps-4 pb-4 text-white" style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id molestiae voluptate doloremque sapiente officiis maxime? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum amet, molestias aspernatur totam adipisci corporis odit beatae necessitatibus quo reiciendis assumenda</p>
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
                </div>
            </div> --}}
            <!-- Regular Card || End -->

            <!-- Lead Generation Card || Start -->
            {{-- <div class="col-sm-12 col-md-5">
                <div class="service_card_07" style="80%">
                    <div class="service_card_07_div">
                        <h4>For Lead Generation</h4>
                        <div class="row pb-4 pt-2">
                            <div class="col" onclick="inputCheck()">Basic</div>
                            <div class="col active">Medium</div>
                            <div class="col">Large</div>
                        </div>
                        <div class="text-center discount_info">
                            <p>You got <span id="got_discount">20</span><span class="got_discount_color">%</span>
                                Discount</p>
                            <p class="pt-2"><sup>$</sup><span id="amount_discount">1000</span><sub>US</sub></p>
                            <p>Leads : <span id="got_quantity"><input type="text" class="easy-basket-lower" value="100"
                                        min="0" max="10000" maxlength="6"></span> | Days Delivery : <span
                                    id="got_days">5</span>
                            </p>
                        </div>

                        <div class="easy-basket-filter">
                            <div class="easy-basket-filter-range">
                                <input type="range" class="lower range" step="any" min="0" max="10000" value="100" />
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

                        <div class="d-flex custom_input_text" style="margin-top: 3rem">
                            <div>
                                <span>OR</span>
                                <br>
                                <p style="font-size: 10px;">Enter the Leads Quantity</p>
                            </div>
                            <div>
                                <input type="text" id="custom_input" placeholder="">
                            </div>
                        </div>

                        <div class="row pt-5">
                            <div class="col-6">
                                <h6 class="yellow_color">Select your needs</h6>
                                <table class="price_table w-100 text-white"
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
                                <h6 class="yellow_color">Feature</h6>

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
                </div>
            </div> --}}
            <!-- Lead Generation Card || End -->
        </div>
    </div>

</section>


<div class="container" style="padding-top: 3rem;" id="place_a_order">
    <div class="py-5 text-center">
        <h2>Place a order</h2>
        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ad</p>
    </div>

    <div class="row pb-4">
        <div class="col-md-3 mb-4">
            <div class="border_1x p-3 mb-2">
                <h4 class="d-flex justify-content-between align-items-center">
                    <span class="text-muted">What is Pre Build Packages ?</span>
                </h4>
                <div class="row m-0 my-1 p-0 normal_text_p">
                    A service package is a collection of services offered as a unit by a business. At the customer's
                    request, a product can be customized by having one-time effects added. Contacting people on a
                    client's behalf is the focus of customer contact services.
                </div>
            </div>
            <div class="border_1x p-3 my-2">
                <h4 class="d-flex justify-content-between align-items-center">
                    <span class="text-muted">Why Custom Order ?</span>
                </h4>
                <div class="row m-0 my-1 p-0 normal_text_p">
                    <p class="ps-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate vel voluptatum
                        molestiae, quidem dolorum blanditiis?</p>
                    <p class="ps-0">Eos enim exercitationem aperiam, cumque laudantium, facere possimus aspernatur
                        voluptates consectetur, aliquid aut nemo explicabo provident vero.</p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="border_1x p-3">
                {{-- <div class="row m-0" id="card_badge_list">
                    <div class="col col1 {{($feature_index == '1'?'active':'')}}"
                onclick="selectedPackageOrder('{{$service->id}}', '.col1', '1', '{{$packages->id}}')">
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
        </div> --}}


        <form action="" method="POST">
            <h4 class="">{{-- $service->name --}} </h4>
            <div class="row">
                <div class="col-md-6 inline_input">
                    <label for="package_badge" class="default">Service Name : </label>
                    <div class="input">
                        <p id="package_badge">Package Badge</p>
                    </div>
                </div>
                <div class="col-md-6 inline_input justify-content-end">
                    <label for="package_price">Package Price : <span class="ms-4" id="package_price">$50
                            US</span></label>

                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                {{-- <div class="col-md-6 inline_input">
                    <label for="package_duration" class="default">Duration : </label>
                    <div class="input">
                        <input type="text" class="form-control form-control-sm default" id="package_duration"
                            placeholder="Package Badge" value="4 Days" disabled>
                    </div>
                </div> --}}
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

<h4 class="mb-3 order_heading">Billing Information</h4>

<div class="row">
    <div class="col-md-6 mb-3">
        <div class="col-md-12 mb-3 inline_input">
            {{-- <label for="firstName">First name</label> --}}
            <div class="input">
                <input type="text" class="form-control form-control-sm" id="firstName" placeholder="First name" value=""
                    required>
            </div>
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="col-md-12 mb-3 inline_input">
            {{-- <label for="firstName">First name</label> --}}
            <div class="input">
                <input type="text" class="form-control form-control-sm" id="firstName" placeholder="Last name" value=""
                    required>
            </div>
            <div class="invalid-feedback">
                Valid last name is required.
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-12 mb-3 inline_input">
            {{-- <label for="firstName">First name</label> --}}
            <div class="input">
                <input type="text" class="form-control form-control-sm" id="firstName" placeholder="Email" value=""
                    required>
            </div>
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-12 mb-3 inline_input">
            {{-- <label for="firstName">First name</label> --}}
            <div class="input">
                <input type="text" class="form-control form-control-sm" id="firstName" placeholder="Company Name"
                    value="" required>
            </div>
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-12 mb-3 inline_input">
            {{-- <label for="firstName">First name</label> --}}
            <div class="input">
                <input type="tel" class="form-control form-control-sm" id="firstName" placeholder="Phone" value=""
                    required>
            </div>
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-12 mb-3 inline_input">
            {{-- <label for="firstName">First name</label> --}}
            <div class="input">
                <input type="text" class="form-control form-control-sm" id="firstName" placeholder="Country Name"
                    value="" required>
            </div>
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
        </div>
    </div>

    <h4 class="mt-3 order_heading">Service Details</h4>

    <div class="col-md-12 mb-4">
        <textarea name="" class="form-control form-control-sm"
            placeholder="Working Description (Example - I need a service ... )" style="height:100px;"></textarea>
        <div class="invalid-feedback">
            Valid last name is required.
        </div>
    </div>

    <div class="col-md-2 mb-3 inline_input">
        <h4>Project Duration</h4>
    </div>
    <div class="col-md-5 mb-3 inline_input">
        {{-- <label for="phone">Phone (Skype)</label> --}}
        <input type="email" class="form-control form-control-sm" id="email" placeholder="When you want to start (Date)"
            onfocus="(this.type='date')" required>
        <div class="invalid-feedback">
            Email required.
        </div>
    </div>
    <div class="col-md-5 mb-3 inline_input">
        {{-- <label for="phone">Phone (Skype)</label> --}}
        <input type="text" class="form-control form-control-sm" id="company" placeholder="Before at (Date)"
            onfocus="(this.type='date')" required>
        <div class="invalid-feedback">
            Company required.
        </div>
    </div>
    <div class="col-md-7 mb-3 inline_input">
        {{-- <label for="firstName">First name</label>
        <div class="input">
            <input type="text" class="form-control form-control-sm" id="firstName" placeholder="What's your standard budget ?"
                value="" required>
        </div>
        <div class="invalid-feedback">
            Valid first name is required.
        </div> --}}
        <h4>What's your standard budget </h4>
    </div>
    <div class="col-md-5 mb-3 inline_input">
        {{-- <label for="phone">Phone (Skype)</label> --}}
        <input type="text" class="form-control form-control-sm" id="company" placeholder="$ USD " required>
        <div class="invalid-feedback">
            Company required.
        </div>
    </div>

    <h4 class="pt-4 mb-3 order_heading">Leads Custom Pricing</h4>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6 mb-3 inline_input">
                {{-- <label for="firstName">First name</label> --}}
                <div class="input">
                    <input type="text" class="form-control form-control-sm mt-0" id="firstName"
                        placeholder="Leads Quantity" value="" required>
                </div>
            </div>
            <div class="col-md-6 mb-3 inline_input">
                {{-- <label for="firstName">First name</label> --}}
                <div class="input">
                    <input type="text" class="form-control form-control-sm mt-0" id="firstName"
                        placeholder="Regular Price" value="" disabled>
                </div>
            </div>

            <div class="col-md-6 mb-3 inline_input">
                {{-- <label for="firstName">First name</label> --}}
                <div class="input">
                    <input type="text" class="form-control form-control-sm mt-0" id="firstName" placeholder="Discount %"
                        value="" disabled>
                </div>
            </div>
            <div class="col-md-6 mb-3 inline_input">
                {{-- <label for="firstName">First name</label> --}}
                <div class="input">
                    <input type="text" class="form-control form-control-sm mt-0" id="firstName"
                        placeholder="After Discount" value="" disabled>
                </div>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>
            <div class="col-md-12 mb-3 inline_input">
                {{-- <label for="firstName">First name</label> --}}
                <div class="input">
                    <input type="text" class="form-control form-control-sm mt-0" id="firstName"
                        placeholder="Offer Budget From You $" value="" required>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <p>Note : Enter your leads quantity, Regular & Discount price will calculate for you. <strong
                        class="me-2">Get 10% Discount on 1,000+ Leads.</strong> Don't worry ! You can offer your
                    standerd budget.</p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <table class="price_table">
            <tbody>
                <tr>
                    <td>Lead Colums</td>
                    <td>Price ( USD )</td>
                    <td>Checkbox</td>
                </tr>
                <tr>
                    <td>First & Last Name</td>
                    <td rowspan="6">0.50</td>
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
                    <td>Revenue</td>
                    <td>0.30</td>
                    <td><input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                    <td>Number Of Employee</td>
                    <td>0.20</td>
                    <td><input type="checkbox" name="" id=""></td>
                </tr>
                <tr>
                    <td>Source Link</td>
                    <td>Free</td>
                    <td><input type="checkbox" name="" id=""></td>
                </tr>
            </tbody>
        </table>
    </div>

    <h4 class="mb-3 pt-5 order_heading">Payment Method</h4>

    <div class="col-md-12 mb-3 inline_input">
        <p>Our payment method is in processing. So we will choose a <mark>payment gateway</mark> after discussing the
            project.</p>
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
<script src="{{asset('/final_front_assets')}}/js/scroll-function.js"></script>
<script src="{{asset('/final_front_assets')}}/js/auto_load/auto-service.js"></script>
<script>
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



<script>
    function ServiceNameClick(ID, ClassName, base_service) {
        $.ajax({
            type: 'POST',
            url: `/servicedetails`,
            data: {
                'id': `${ID}`
            },
            success: function (data) {
                if ($('#fixed_top_dropdown').hasClass('d-none') == false) {
                    $('#fixed_top_dropdown_btn').click();
                }
                // $('#fixed_top_dropdown_btn_span').html(base_service);
                let scrollTopValue = $("#overview").offset().top - 280;
                window.scrollTo({
                    top: scrollTopValue,
                    behavior: 'smooth'
                });

                $(`#service_list_description`).html(' ');
                $('.grp_one').removeClass('active');
                $(`.${ClassName}`).addClass('active');
                $('#search_box_input').val(data.service.title + ' || ' + base_service)
                $('#service_first_one').html(data.service.title)
                $('#service_first_two').html(base_service)
                $('#service_list_title').html(
                    `<span style="font-size:30px;">${data.service.title} </span>`
                ); // <span style="font-size:14px;"></span>
                $('#overview').html(data.service.overview);
                $('#service_list_description').html(data.service.description);
                $('#why_choose_dimarz').html(data.service.why_choose_dimarz);
                $('#service_faq').html(data.service.faq);
                $('#img_replace img').attr('src', data.service_img);
                $('#card_badge').html(data.packageData);
                $('#card_badge .col:first').addClass('active');
                $('#ser_pack_title').html(data.package[0]['title']);
                $('#ser_pack_price').html(data.package[0]['price']);
                $('#ser_pack_description').html(data.package[0]['description']);
                $('#ser_pack_duration').html(data.package[0]['duration']);
                $('#ser_pack_active').html(data.packageListData);
                $('#packageListData_th2').html(data.packageListData_th2);
                $('#compare_packages_table').html(data.tableAllData);

            }
        });
    }

    $('#search_box_input').keyup(() => {
        let inputValue = $('#search_box_input').val();
        $.ajax({
            type: 'POST',
            url: `/service-searchon-pricing`,
            data: {
                'inputValue': inputValue,
            },
            success: function (data) {
                $('#search_box_sus_ul').html(data.output);
            }
        });

    });

</script>

<script>
    function selectedPackage(ServiceID, classIndex, feature_index, parent_service_id) {
        $.ajax({
            type: 'POST',
            url: `/getservicedata/selected`,
            data: {
                'ServiceID': `${ServiceID}`,
                'feature_index': `${feature_index}`,
                'parent_service_id': `${parent_service_id}`,
            },

            success: function (data) {
                $('#card_badge').html(data.packageData);
                $('#ser_pack_title').html(data.package['title']);
                $('#ser_pack_price').html(data.package['price']);
                $('#ser_pack_description').html(data.package['description']);
                $('#ser_pack_duration').html(data.package['duration']);
                $('#ser_pack_active').html(data.packageListData);
                $(`#card_badge .col`).removeClass('active');
                $(`#card_badge ${classIndex}`).addClass('active');
                $(`#card_badge_price .col span`).addClass('active');
                $(`#card_badge_price ${classIndex} span`).removeClass('active');
                $('#confirm_order_btn').attr('href', data.confirm_order_link);
                // console.log(data.confirm_order_link);

            }
        });
    }


    $('#make_a_deal_btn').click(function () {

        getClientData();

    });

    var pricing_main = $('#place_a_order').offset().top;

    $('#clientBasicDataSave').click(function () {

        let clientFirstName = $('#clientFirstName').val();
        let clientLastName = $('#clientLastName').val();
        let clientEmail = $('#clientEmail').val();
        let clientCompanyName = $('#clientCompanyName').val();
        let clientCompanyPhone = $('#clientCompanyPhone').val();

        localStorage.setItem("clientFirstName", clientFirstName);
        localStorage.setItem("clientLastName", clientLastName);
        localStorage.setItem("clientEmail", clientEmail);
        localStorage.setItem("clientCompanyName", clientCompanyName);
        localStorage.setItem("clientCompanyPhone", clientCompanyPhone);

        $('.btn-close').click();

        console.log(localStorage.getItem("clientEmail"));
        console.log(localStorage.getItem("clientLastName"));

        window.scrollTo(pricing_main, 3700);

    });

</script>


<script>
    function saveClientData() {
        // localStorage.setItem("clientFirstName", clientFirstName);
        // localStorage.setItem("clientEmail", clientEmail);
        // localStorage.setItem("clientCompanyName", clientCompanyName);
        // localStorage.setItem("clientCompanyPhone", clientCompanyPhone);
    }

    function getClientData() {
        let clientFirstName = localStorage.getItem("clientFirstName");
        let clientEmail = localStorage.getItem("clientEmail");
        let clientCompanyName = localStorage.getItem("clientCompanyName");
        let clientCompanyPhone = localStorage.getItem("clientCompanyPhone");
    }

    function inputCheck() {
        alert($('.easy-basket-lower').val());
    }

</script>


<script>
    jQuery(document).ready(function () {
        $('.lower').on('input', setFill);

        var max = $('.upper').attr('max');
        var min = $('.lower').attr('min');

        function setFill(evt) {
            var valUpper = $('.upper').val();
            var valLower = $('.lower').val();
            if (parseFloat(valLower) > parseFloat(valUpper)) {
                var trade = valLower;
                valLower = valUpper;
                valUpper = trade;
            }

            var width = valUpper * 100 / max;
            var left = valLower * 100 / max;
            $('.fill').css('left', 'calc(' + left + '%)');
            $('.fill').css('width', width - left + '%');

            // Update info
            if (parseInt(valLower) == min) {
                $('.easy-basket-lower').val('0');
            } else {
                $('.easy-basket-lower').val(parseInt(valLower));
            }
            if (parseInt(valUpper) == max) {
                $('.easy-basket-upper').val('5000');
            } else {
                $('.easy-basket-upper').val(parseInt(valUpper));
            }
            $('.histogram-list li').removeClass('ui-histogram-active');
        }

        // изменяем диапазон цен вручную
        $('.easy-basket-filter-info p input').keyup(function () {
            var valUpper = $('.easy-basket-upper').val();
            var valLower = $('.easy-basket-lower').val();
            var width = valUpper * 100 / max;
            var left = valLower * 100 / max;
            if (valUpper > 10000) {
                var left = max;
            }
            if (valLower < 0) {
                var left = min;
            } else if (valLower > max) {
                var left = min;
            }
            $('.fill').css('left', 'calc(' + left + '%)');
            $('.fill').css('width', width - left + '%');
            // меняем положение ползунков
            $('.lower').val(valLower);
            $('.upper').val(valUpper);
        });
        $('.easy-basket-filter-info p input').focus(function () {
            $(this).val('');
        });
        $('.easy-basket-filter-info .iLower input').blur(function () {
            var valLower = $('.lower').val();
            $(this).val(Math.floor(valLower));
        });
        $('.easy-basket-filter-info .iUpper input').blur(function () {
            var valUpper = $('.upper').val();
            $(this).val(Math.floor(valUpper));
        });

        $('.histogram-list li').click(function () {
            $('.histogram-list li').removeClass('ui-histogram-active');
            var range_from = $(this).attr('price-range-from');
            var range_to = $(this).attr('price-range-to');
            var width = range_to * 100 / max;
            var left = range_from * 100 / max;
            $('.easy-basket-lower').val(range_from);
            $('.easy-basket-upper').val(range_to);
            $('.fill').css('left', 'calc(' + left + '%)');
            $('.fill').css('width', width - left + '%');
            $('.lower').val(range_from);
            $('.upper').val(range_to);
            $(this).addClass('ui-histogram-active');
        });
    });

</script>

@endsection
