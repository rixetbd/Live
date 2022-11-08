<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceName;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {

        $faq_service_name = ServiceName::all();
        $service_list = Service::where('status', 1)->get();
        return view('frontend.november.index',[
            'service_list'=>$service_list,
            'faq_service_name'=>$faq_service_name,
        ]);

    }

    public function pricing_page()
    {

        $all_service_gigs = Service::where('status', 1)->get();
        $faq_service_name = ServiceName::all();
        $service_list = Service::where('status', 1)->get();
        return view('frontend.november.pricing',[
            'service_list'=>$service_list,
            'faq_service_name'=>$faq_service_name,
            'all_service_gigs'=>$all_service_gigs,
        ]);

    }
}
