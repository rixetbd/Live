<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Lead;
use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Industry;
use App\Models\Package;
use App\Models\PackageList;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\ServiceName;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        // $lead_data = Lead::paginate(20);
        // $all_cities =
        return view('frontend.index',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
        ]);
    }

    public function index2()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        // $lead_data = Lead::paginate(20);
        // $all_cities =
        return view('frontend.index2',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
        ]);
    }

    public function index3()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        // $lead_data = Lead::paginate(20);
        // $all_cities =
        return view('frontend.index3',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCityName()
    {

    }

    public function index_home2()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        return view('frontend.betheme.home2',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
        ]);
    }

    public function index_mainpage()
    {
        return view('frontend.betheme.mainpage');
    }

    // The Final Round

    public function index_0()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        $service_list = Service::where('status', 1)->get();
        return view('frontend.final.mainpage',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
            'service_list'=>$service_list,
        ]);
    }

    public function index_hhh()
    {
        // $all_countries = Country::all();
        // $all_city = City::orderby('name', 'asc')->get();
        // $all_industry = Industry::orderby('name', 'asc')->get();
        // $lead_data = Lead::paginate(100);
        $faq_service_name = ServiceName::all();
        $service_list = Service::where('status', 1)->get();
        return view('frontend.final.home',[
            // 'all_countries'=>$all_countries,
            // 'lead_data'=>$lead_data,
            // 'all_city'=>$all_city,
            // 'all_industry'=>$all_industry,
            'service_list'=>$service_list,
            'faq_service_name'=>$faq_service_name,

        ]);
    }

    public function index_d()
    {
        // $all_countries = Country::all();
        // $all_city = City::orderby('name', 'asc')->get();
        // $all_industry = Industry::orderby('name', 'asc')->get();
        // $lead_data = Lead::paginate(100);
        $faq_service_name = ServiceName::all();
        $service_list = Service::where('status', 1)->get();
        return view('frontend.final.indexd',[
            // 'all_countries'=>$all_countries,
            // 'lead_data'=>$lead_data,
            // 'all_city'=>$all_city,
            // 'all_industry'=>$all_industry,
            'service_list'=>$service_list,
            'faq_service_name'=>$faq_service_name,

        ]);
    }

    public function lastatoct()
    {
        // $all_countries = Country::all();
        // $all_city = City::orderby('name', 'asc')->get();
        // $all_industry = Industry::orderby('name', 'asc')->get();
        // $lead_data = Lead::paginate(100);
        $faq_service_name = ServiceName::all();
        $service_list = Service::where('status', 1)->get();
        return view('frontend.final.index31',[
            // 'all_countries'=>$all_countries,
            // 'lead_data'=>$lead_data,
            // 'all_city'=>$all_city,
            // 'all_industry'=>$all_industry,
            'service_list'=>$service_list,
            'faq_service_name'=>$faq_service_name,

        ]);
    }

    public function getservicedata_first(Request $request){
        $service = Service::where('status', '1')->first();
        $service_img = ServiceImage::where('service_id', $service->id)->get();
        $package = Package::where('service_id', $service->id)->orderBy('packages_index', 'asc')->get();
        $packageList = PackageList::where('package_id', $package[0]->id)->orderBy('status', 'desc')->get();
        $imgData = "";
        foreach ($service_img as  $img) {
            $imgData .= '<div class="slide"><img src="'.asset('uploads/service_banner/'.$img->banner).'" alt="'.$img->banner.'" class="img-fluid"></div>';
        }

        $packageData = "";
        foreach ($package as  $key=>$item) {
            $packageData .= '<div class="col col'.$key.'" onclick="selectedPackage(\''.$item->id.'\', \'.col'.$key.'\''.', \''.$key.'\')">'.$item->name.'</div>';
        }

        $packageListData = "";
        foreach ($packageList as  $item) {
            $packageListData .= '<li><i class="fas fa-check '.($item->status == "1"?"text-success":"").'"></i> '.$item->info.'</li>';
        }
        return response()->json([
            'service'=>$service,
            'service_img'=>$imgData,
            'package'=>$package,
            'packageData'=>$packageData,
            'packageListData'=>$packageListData,
        ]);
    }

    public function getservicedata(Request $request){
        $service = Service::find($request->ServiceID);
        $service_img = ServiceImage::where('service_id', $request->ServiceID)->get();
        $package = Package::where('service_id', $service->id)->orderBy('packages_index', 'asc')->get();
        $packageList = PackageList::where('package_id', $package[0]->id)->orderBy('status', 'desc')->get();

        $imgData = "";
        foreach ($service_img as  $img) {
            $imgData .= '<div class="slide2"><img src="'.asset('uploads/service_banner/'.$img->banner).'" alt="'.$img->banner.'" class="img-fluid"></div>';
        }

        $packageData = "";
        foreach ($package as  $key=> $item) {
            $packageData .= '<div class="col col'.$key.'" onclick="selectedPackage(\''.$item->id.'\', \'.col'.$key.'\''.', \''.$key.'\')">'.$item->name.'</div>';
        }

        $packageListData = "";
        foreach ($packageList as  $item) {
            $packageListData .= '<li><i class="fas fa-check '.($item->status == "1"?"text-success":"").'"></i> '.$item->info.'</li>';
        }

        return response()->json([
            'service'=>$service,
            'service_img'=>$imgData,
            'package'=>$package,
            'packageData'=>$packageData,
            'packageListData'=>$packageListData,
        ]);
    }



    public function getservicedata_selected(Request $request){
        $service = Service::find($request->ServiceID);
        $service_img = ServiceImage::where('service_id', $request->ServiceID)->get();
        $imgData = "";
        foreach ($service_img as  $img) {
            $imgData .= '<div class="slide"><img src="'.asset('uploads/service_banner/'.$img->banner).'" alt="'.$img->banner.'" class="img-fluid"></div>';
        }

        $package = Package::find($request->ServiceID);
        $packageList = PackageList::where('package_id', $package->id)->orderBy('feature_name_1', 'desc')->get();

        $feature_index = $request->feature_index;

        $packageListData = "";
        foreach ($packageList as  $item) {
            $name_gen = "feature_name_".$feature_index;
            $packageListData .= '<li><i class="fas fa-check '.($item->$name_gen == "1"?"text-success":"").'"></i> '.$item->feature_name.'</li>';
        }



        $confirm_order_link = route('order.index',['id'=>$request->parent_service_id, 'feature_index'=> $request->feature_index]);

        return response()->json([
            'service'=>$service,
            'service_img'=>$imgData,
            'package'=>$package,
            'packageListData'=>$packageListData,
            'confirm_order_link'=>$confirm_order_link,
        ]);
    }










    public function servicedetails(Request $request)
    {
        $service = Service::find($request->id);
        $service_category = $service->getCategory->name;

        $service_img = ServiceImage::where('service_id', $service->id)->first();
        $imgData = asset('uploads/service_banner/'.$service_img->banner);

        $package = Package::where('service_id', $service->id)->orderBy('packages_index', 'asc')->get();

        $packageData = "";
        foreach ($package as  $key=>$item) {
            $packageData .= '<div class="col col'.$key.'" onclick="selectedPackage(\''.$item->id.'\', \'.col'.$key.'\''.', \''.($key+1).'\',\''.$service->id.'\')">'.$item->name.'</div>';
        }

        $packageList = PackageList::where('package_id', $package[0]->id)->orderBy('feature_name_1', 'desc')->get();
        $packageListData = "";
        foreach ($packageList as  $item) {
            $packageListData .= '<li><i class="fas fa-check '.($item->feature_name_1 == "1"?"text-success":"").'"></i> '.$item->feature_name.'</li>';
        }

        $packageListData_th2 = "";
        foreach ($packageList as  $item) {
            $packageListData_th2 .= '<tr><td><i class="fas fa-check '.($item->feature_name_1 == "1"?"feature_list_sign_big":"feature_list_sign_big_disable").'"></i></td><td>'.$item->feature_name.'</td></tr>';
        }

        // $packageDataTable = "";

        $confirm_order_link = route('order.index',['id'=>$service->id,'feature_index'=>'1']);
        $confirm_order_link_2 = route('order.index',['id'=>$service->id,'feature_index'=>'2']);
        $confirm_order_link_3 = route('order.index',['id'=>$service->id,'feature_index'=>'3']);

        $packageTable_name = '<tr><td>Compare Packages</td><td>'.$package[0]->name.'</td><td>'.$package[1]->name.'</td><td>'.$package[2]->name.'</td></tr>';
        $packageTable_description = '<tr><td>Description</td><td>'.$package[0]->description.'</td><td>'.$package[1]->description.'</td><td>'.$package[2]->description.'</td></tr>';
        $packageTable_price = '<tr><td>Price</td><td class="text-center">$'.$package[0]->price.'</td><td class="text-center">$'.$package[1]->price.'</td><td class="text-center">$'.$package[2]->price.'</td></tr>';
        $packageTable_duration = '<tr><td>Delivery Time</td><td class="text-center">'.$package[0]->duration.' Days</td><td class="text-center">'.$package[1]->duration.' Days</td><td class="text-center">'.$package[2]->duration.' Days</td></tr>';
        $packageTable_button = '<tr style="background: #e8eaeea1;">
                                    <td class="text-left">Choose Your Package</td>
                                    <td class="text-center"><a href="'.$confirm_order_link.'" class="btn btn-dark btn_dark">Select Package</a></td>
                                    <td class="text-center"><a href="'.$confirm_order_link_2.'" class="btn btn-dark btn_dark">Select Package</a></td>
                                    <td class="text-center"><a href="'.$confirm_order_link_3.'" class="btn btn-dark btn_dark">Select Package</a></td>
                                </tr>';



        $packageListDataTable = "";
        foreach ($packageList as  $key=>$item) {
            $packageListDataTable .= '<tr><td class="text-left">'.$item->feature_name.'</td><td class="text-center"><i class="fas fa-check '.($item->feature_name_1 == "1"?"text-success":"").'"></i></td><td class="text-center"><i class="fas fa-check '.($item->feature_name_2 == "1"?"text-success":"").'"></i></td>
            <td class="text-center"><i class="fas fa-check '.($item->feature_name_3 == "1"?"text-success":"").'"></i></td></tr>';
        }

        $tableAllData = $packageTable_name.$packageTable_description.$packageListDataTable.$packageTable_duration.$packageTable_price.$packageTable_button;


        return response()->json([

            'service'=>$service,
            'service_category'=>$service_category,
            'service_img'=>$imgData,
            'package'=>$package,
            'packageTable_description'=>$packageTable_description,
            'packageData'=>$packageData,
            'packageListData'=>$packageListData,
            'packageListData_th2'=>$packageListData_th2,
            'packageListDataTable'=>$packageListDataTable,
            'confirm_order_link'=>$confirm_order_link,
            'confirm_order_link_2'=>$confirm_order_link_2,
            'confirm_order_link_3'=>$confirm_order_link_3,
            'tableAllData'=>$tableAllData,
        ]);
    }

    public function servicedetailsauto(Request $request)
    {
        $service = Service::where('status', '1')->first();
        $service_category = $service->getCategory->name;

        $service_img = ServiceImage::where('service_id', $service->id)->first();
        $imgData = asset('uploads/service_banner/'.$service_img->banner);
        $package = Package::where('service_id', $service->id)->orderBy('packages_index', 'asc')->get();
        $packageData = "";
        foreach ($package as  $key=>$item) {
            $packageData .= '<div class="col col'.$key.'" onclick="selectedPackage(\''.$item->id.'\', \'.col'.$key.'\''.', \''.($key+1).'\',\''.$service->id.'\')">'.$item->name.'</div>';
        }
        $packageList = PackageList::where('package_id', $package[0]->id)->orderBy('feature_name_1', 'desc')->get();
        $packageListData = "";
        foreach ($packageList as  $item) {
            $packageListData .= '<li><i class="fas fa-check '.($item->feature_name_1 == "1"?"text-success":"").'"></i> '.$item->feature_name.'</li>';
        }
        $confirm_order_link = route('order.index',['id'=>$service->id,'feature_index'=>'1']);
        $confirm_order_link_2 = route('order.index',['id'=>$service->id,'feature_index'=>'2']);
        $confirm_order_link_3 = route('order.index',['id'=>$service->id,'feature_index'=>'3']);

        $packageTable_name = '<tr><td>Compare Packages</td><td>'.$package[0]->name.'</td><td>'.$package[1]->name.'</td><td>'.$package[2]->name.'</td></tr>';
        $packageTable_description = '<tr><td>Description</td><td>'.$package[0]->description.'</td><td>'.$package[1]->description.'</td><td>'.$package[2]->description.'</td></tr>';
        $packageTable_price = '<tr><td>Price</td><td class="text-center">$'.$package[0]->price.'</td><td class="text-center">$'.$package[1]->price.'</td><td class="text-center">$'.$package[2]->price.'</td></tr>';
        $packageTable_duration = '<tr><td>Delivery Time</td><td class="text-center">'.$package[0]->duration.' Days</td><td class="text-center">'.$package[1]->duration.' Days</td><td class="text-center">'.$package[2]->duration.' Days</td></tr>';
        $packageTable_button = '<tr style="background: #e8eaeea1;">
                                    <td class="text-left">Choose Your Package</td>
                                    <td class="text-center"><a href="'.$confirm_order_link.'" class="btn btn-dark btn_dark">Select Package</a></td>
                                    <td class="text-center"><a href="'.$confirm_order_link_2.'" class="btn btn-dark btn_dark">Select Package</a></td>
                                    <td class="text-center"><a href="'.$confirm_order_link_3.'" class="btn btn-dark btn_dark">Select Package</a></td>
                                </tr>';

        $packageListDataTable = "";
        foreach ($packageList as  $key=>$item) {
            $packageListDataTable .= '<tr><td class="text-left">'.$item->feature_name.'</td><td class="text-center"><i class="fas fa-check '.($item->feature_name_1 == "1"?"text-success":"").'"></i></td><td class="text-center"><i class="fas fa-check '.($item->feature_name_2 == "1"?"text-success":"").'"></i></td>
            <td class="text-center"><i class="fas fa-check '.($item->feature_name_3 == "1"?"text-success":"").'"></i></td></tr>';
        }

        $tableAllData = $packageTable_name.$packageTable_description.$packageListDataTable.$packageTable_duration.$packageTable_price.$packageTable_button;


        return response()->json([
            'service'=>$service,
            'service_category'=>$service_category,
            'service_img'=>$imgData,
            'package'=>$package,
            'packageData'=>$packageData,
            'packageListData'=>$packageListData,
            'confirm_order_link'=>$confirm_order_link,
            'confirm_order_link_2'=>$confirm_order_link_2,
            'confirm_order_link_3'=>$confirm_order_link_3,
            'tableAllData'=>$tableAllData,
        ]);
    }

    public function servicelistmenu(Request $request)
    {
        $list = Service::where('category','=', $request->id)->where('status','=','1')->get();

        $data = "";
        foreach ($list as $value) {
            $data .= '<div class="col-sm-12 col-md-6"><div class="grp_one grp_one'.$value->id.'" onclick="ServiceNameClick(\''.$value->id.'\', \'grp_one'.$value->id.'\')">'.$value->name.'</div></div>';
        }
        return response()->json([
            'data'=>$data,
        ]);

    }



    public function fasfa()
    {
        return view('frontend.final.terms&conditions');
    }



















    // Lead Generation
    // lead_generation
    public function lead_generation()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        // $faq_service_name = ServiceName::all();
        $faq_service_name = Service::where('name', 'LIKE', '%' . 'lead' . '%')->get();
        // $service_list = Service::where('status', 1)->get();
        $service_list = Service::where('name', 'LIKE', '%' . 'lead' . '%')->get();

        return view('frontend.final.lead_generation.lead',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
            'service_list'=>$service_list,
            'faq_service_name'=>$faq_service_name,

        ]);
    }

    public function graphics_design()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        // $faq_service_name = ServiceName::all();
        $faq_service_name = Service::where('name', 'LIKE', '%' . 'marketing' . '%')->get();
        // $service_list = Service::where('status', 1)->get();
        $service_list = Service::where('name', 'LIKE', '%' . 'marketing' . '%')->get();

        return view('frontend.final.graphics_design.index',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
            'service_list'=>$service_list,
            'faq_service_name'=>$faq_service_name,

        ]);
    }

    public function search_engine_optimization()
    {
        $all_countries = Country::all();
        $all_city = City::orderby('name', 'asc')->get();
        $all_industry = Industry::orderby('name', 'asc')->get();
        $lead_data = Lead::paginate(100);
        // $faq_service_name = ServiceName::all();
        $faq_service_name = Service::where('name', 'LIKE', '%' . 'seo' . '%')->get();
        // $service_list = Service::where('status', 1)->get();
        $service_list = Service::where('name', 'LIKE', '%' . 'seo' . '%')->get();

        return view('frontend.final.search_engine_optimization.index',[
            'all_countries'=>$all_countries,
            'lead_data'=>$lead_data,
            'all_city'=>$all_city,
            'all_industry'=>$all_industry,
            'service_list'=>$service_list,
            'faq_service_name'=>$faq_service_name,

        ]);
    }

    public function data_entry()
    {

        // $faq_service_name = ServiceName::all();
        $faq_service_name = Service::where('name', 'LIKE', '%' . 'data entry' . '%')->get();
        // $service_list = Service::where('status', 1)->get();
        // $service_list = Service::where('name', 'LIKE', '%' . 'data entry' . '%')->get();

        return view('frontend.final.data_entry.index',[
            // 'service_list'=>$service_list,
            'faq_service_name'=>$faq_service_name,

        ]);
    }
}
