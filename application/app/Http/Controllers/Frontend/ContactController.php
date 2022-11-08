<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Industry;
use App\Models\Package;
use App\Models\PackageList;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\ServiceName;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function pricing_index(){

        $all_countries = Country::orderBy('name', 'ASC')->get();
        $faq_service_name = ServiceName::all();
        $all_service_gigs = Service::where('status', '1')->get();

        return view('frontend.final.indexnov',[
            'all_countries'=>$all_countries,
            'faq_service_name'=>$faq_service_name,
            'all_service_gigs'=>$all_service_gigs,
        ]);
    }

    public function main_index($id, $feature_index){
        $service = Service::find($id);
        $service_images = ServiceImage::where('service_id','=', $service->id)->first();
        $all_countries = Country::orderBy('name', 'ASC')->get();
        $packages = Package::where('service_id', $id)->where('packages_index', $feature_index)->first();

        $faq_service_name = ServiceName::all();

        if (!empty($service)) {
            return view('frontend.final.order.index',[
                'id'=>$id,
                'service'=>$service,
                'service_images'=>$service_images,
                'all_countries'=>$all_countries,
                'packages'=>$packages,
                'feature_index'=>$feature_index,
                'faq_service_name'=>$faq_service_name,
            ]);
        }else{
            return response('No Service Found');
        }
    }

    public function service_searchon_pricing(Request $request)
    {

        $data = Service::where('name', 'LIKE', "%".$request->inputValue."%")->where('status', '1')->orderBy('name')->get();

        $output = "";
        foreach ($data as $key => $value) {
            $output .= '<li onclick="ServiceNameClick(\''.$value->id.'\', `grp_one'.$value->id.'`, `Choose Services`)">'.$value->name.'</li>';
        }
        return response()->json([
            'output'=>$output,
        ]);

    }




    public function index()
    {
        $all_countries = Country::all();
        $all_city = City::all();
        $all_industry = Industry::all();
        return view('frontend.contact',[
            'all_countries'=>$all_countries,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
        ]);
    }

    public function create(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }


    public function showpage()
    {
        return view('frontend.final.contact');
    }








    public function selectedpackageorder(Request $request)
    {

        $package_data = Package::where('service_id', $request->service_id)->where('packages_index', $request->package_index)->first();
        // $package_data_list = PackageList::where('package_id', '=',$package_data->id)->get();

        // $package_data_list_html = [];
        // foreach ($package_data_list as $key => $value) {
        //     $package_data_list_html .= "<li>".$value->feature_name."</li>";
        // }

        return response()->json([
            'service_id'=>$request->service_id,
            'package_data'=>$package_data,
            // 'package_data_list_html'=>$package_data_list_html,
        ]);

    }




}
