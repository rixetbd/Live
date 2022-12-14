<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageList;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\ServiceName;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{

    public function index()
    {
        $all_service = Service::all();
        return view('backend.services.index',[
            'all_service'=>$all_service,
        ]);
    }


    public function create()
    {
        $all_service_name = ServiceName::all();
        return view('backend.services.create',[
            'all_service_name'=>$all_service_name,
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'category'=>'required',
            'overview'=>'required',
            'description'=>'required',
            'why_choose_dimarz'=>'required',
            'faq'=>'required',
        ]);

        $id = Service::insertGetId([
            'name'=>$request->name,
            'title'=>$request->title,
            'category'=>$request->category,
            'overview'=>$request->overview,
            'description'=>$request->description,
            'why_choose_dimarz'=>$request->why_choose_dimarz,
            'faq'=>$request->faq,
            'author'=>Auth::user()->name,
            'created_at'=>Carbon::now(),
        ]);

        $files = $request->file('image');

        if($request->hasFile('image'))
        {
            foreach ($files as $key=>$file) {
                $img = $id.'_service_'.uniqid().'.'.$file->getClientOriginalExtension();
                Image::make($file)->fit(800, 300)->save(public_path('../../uploads/service_banner/'.$img));
                ServiceImage::insert([
                    'service_id'=>$id,
                    'banner_index'=>$key+1,
                    'banner'=>$img,
                    'created_at'=>Carbon::now(),
                ]);
            }
        }

        // return $request->all();

        if($request->input('action') == 'save'){
            Service::find($id)->update([
                'status'=>0,
            ]);
            return redirect()->route('admin.service.index');

        }elseif($request->input('action') == 'next'){
            return redirect()->route('admin.service.price.index', $id);
        }else{
            return back();
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $all_service_name = ServiceName::all();
        $service = Service::find($id);
        $service_img = ServiceImage::where('service_id', $id)->get();
        return view('backend.services.edit',[
            'service'=>$service,
            'service_img'=>$service_img,
            'all_service_name'=>$all_service_name,
        ]);
    }

    public function update(Request $request)
    {

        // return $request->all();
        // dd();

        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'category'=>'required',
            'overview'=>'required',
            'description'=>'required',
            'why_choose_dimarz'=>'required',
            'faq'=>'required',
        ]);

        Service::find($request->id)->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'category'=>$request->category,
            'overview'=>$request->overview,
            'description'=>$request->description,
            'why_choose_dimarz'=>$request->why_choose_dimarz,
            'faq'=>$request->faq,
            'author'=>Auth::user()->name,
        ]);

        $files = $request->file('image');

        if($request->hasFile('image'))
        {
            foreach ($files as $key=>$file) {
                $img = $request->id.'_service_'.uniqid().'.'.$file->getClientOriginalExtension();
                Image::make($file)->fit(800, 300)->save(public_path('../../uploads/service_banner/'.$img));

                ServiceImage::insert([
                    'service_id'=>$request->id,
                    'banner_index'=>$key+1,
                    'banner'=>$img,
                    'created_at'=>Carbon::now(),
                ]);
            }
        }

        if($request->input('action') == 'save'){
            return redirect()->route('admin.service.index');
        }elseif($request->input('action') == 'next'){
            return redirect()->route('admin.service.price.index', $request->id);
        }else{
            return back();
        }
    }


    public function destroy($id)
    {
        Service::find($id)->delete();
        $service_img = ServiceImage::where('service_id', $id)->get();

        foreach ($service_img as $service) {

            $img_path = public_path('../../uploads/service_banner/'.$service->banner);
            if(File::exists($img_path)) {
                File::delete($img_path);
            }

            ServiceImage::find($service->id)->delete();
        }


        return back();
    }

    public function status($id)
    {

        $service = Service::find($id);

        if ($service->status == 1) {
            Service::find($id)->update([
                'status'=>0,
            ]);
        } else {
            Service::find($id)->update([
                'status'=>1,
            ]);
        }

        return back();

    }


    public function price_index ($id)
    {
        $package_info = Package::where('service_id', $id)->orderBy('packages_index', 'asc')->get();

        // return count($package_info);
        // dd();

        if(count($package_info) != 0)
        {
            $feature_list = PackageList::where('package_id', $package_info[0]->id)->get();

            // return $feature_list;
            // dd();

            return view('backend.services.price_edit',[
                'id'=>$id,
                'package_info'=>$package_info,
                'feature_list'=>$feature_list,
            ]);
        }else{
            return view('backend.services.price',[
                'id'=>$id,
                'package_info'=>' ',
            ]);
        }
    }

    public function serviceimgdatadelete(Request $request)
    {

        $service_img = ServiceImage::find($request->imgeID);
        $img_path = public_path('../../uploads/service_banner/'.$service_img->banner);
        if(File::exists($img_path)) {
            File::delete($img_path);
        }
        ServiceImage::find($request->imgeID)->delete();

        // return response()->json([
        //     'imgeID'=>'hi',
        // ]);

    }

}
