<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageList;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }



    public function store(Request $request)
    {

        // return $request->all();
        // dd();

        $all_packageID = [];
        foreach ($request->name as $key => $value) {
            $packageID = Package::insertGetId([
                'service_id'=>$request->service_id,
                'packages_index'=>$key+1,
                'name'=>$request->name[$key],
                'title'=>$request->title[$key],
                'price'=>$request->price[$key],
                'duration'=>$request->duration[$key],
                'description'=>$request->info[$key],
                'created_at'=>Carbon::now(),
            ]);
            array_push($all_packageID, $packageID);
        }

        PackageList::insert([
            'package_id'=>$all_packageID[0],
            'feature_name'=>($request->feature_01_0 != ''?$request->feature_01_0:'0'),
            'feature_name_1'=>($request->feature_01_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_01_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_01_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        PackageList::insert([
            'package_id'=>$all_packageID[1],
            'feature_name'=>($request->feature_01_0 != ''?$request->feature_01_0:'0'),
            'feature_name_1'=>($request->feature_01_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_01_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_01_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        PackageList::insert([
            'package_id'=>$all_packageID[2],
            'feature_name'=>($request->feature_01_0 != ''?$request->feature_01_0:'0'),
            'feature_name_1'=>($request->feature_01_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_01_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_01_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);

        // --------------------------------------------- Two
        PackageList::insert([
            'package_id'=>$all_packageID[0],
            'feature_name'=>($request->feature_02_0 != ''?$request->feature_02_0:'0'),
            'feature_name_1'=>($request->feature_02_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_02_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_02_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        PackageList::insert([
            'package_id'=>$all_packageID[1],
            'feature_name'=>($request->feature_02_0 != ''?$request->feature_02_0:'0'),
            'feature_name_1'=>($request->feature_02_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_02_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_02_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        PackageList::insert([
            'package_id'=>$all_packageID[2],
            'feature_name'=>($request->feature_02_0 != ''?$request->feature_02_0:'0'),
            'feature_name_1'=>($request->feature_02_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_02_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_02_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);

        // --------------------------------------------- Three
        PackageList::insert([
            'package_id'=>$all_packageID[0],
            'feature_name'=>($request->feature_03_0 != ''?$request->feature_03_0:'0'),
            'feature_name_1'=>($request->feature_03_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_03_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_03_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        PackageList::insert([
            'package_id'=>$all_packageID[1],
            'feature_name'=>($request->feature_03_0 != ''?$request->feature_03_0:'0'),
            'feature_name_1'=>($request->feature_03_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_03_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_03_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        PackageList::insert([
            'package_id'=>$all_packageID[2],
            'feature_name'=>($request->feature_03_0 != ''?$request->feature_03_0:'0'),
            'feature_name_1'=>($request->feature_03_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_03_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_03_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        // --------------------------------------------- Four
        PackageList::insert([
            'package_id'=>$all_packageID[0],
            'feature_name'=>($request->feature_04_0 != ''?$request->feature_04_0:'0'),
            'feature_name_1'=>($request->feature_04_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_04_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_04_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        PackageList::insert([
            'package_id'=>$all_packageID[1],
            'feature_name'=>($request->feature_04_0 != ''?$request->feature_04_0:'0'),
            'feature_name_1'=>($request->feature_04_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_04_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_04_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        PackageList::insert([
            'package_id'=>$all_packageID[2],
            'feature_name'=>($request->feature_04_0 != ''?$request->feature_04_0:'0'),
            'feature_name_1'=>($request->feature_04_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_04_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_04_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        // --------------------------------------------- Four
        PackageList::insert([
            'package_id'=>$all_packageID[0],
            'feature_name'=>($request->feature_05_0 != ''?$request->feature_05_0:'0'),
            'feature_name_1'=>($request->feature_05_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_05_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_05_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        PackageList::insert([
            'package_id'=>$all_packageID[1],
            'feature_name'=>($request->feature_05_0 != ''?$request->feature_05_0:'0'),
            'feature_name_1'=>($request->feature_05_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_05_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_05_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);
        PackageList::insert([
            'package_id'=>$all_packageID[2],
            'feature_name'=>($request->feature_05_0 != ''?$request->feature_05_0:'0'),
            'feature_name_1'=>($request->feature_05_1 == 'on'?'1':'0'),
            'feature_name_2'=>($request->feature_05_2 == 'on'?'1':'0'),
            'feature_name_3'=>($request->feature_05_3 == 'on'?'1':'0'),
            'created_at'=>Carbon::now(),
        ]);



        // if (!empty($request->active_list_1)) {
        //     for ($i=0; $i < count($request->active_list_1); $i++) {
        //         PackageList::insert([
        //             'package_id'=>$all_packageID[0],
        //             'info'=>$request->active_list_1[$i],
        //             'status'=>1,
        //             'created_at'=>Carbon::now(),
        //         ]);
        //     }
        // }
        // if (!empty($request->deactive_list_1)) {
        //     for ($i=0; $i < count($request->deactive_list_1); $i++) {
        //         PackageList::insert([
        //             'package_id'=>$all_packageID[0],
        //             'info'=>$request->deactive_list_1[$i],
        //             'status'=>0,
        //             'created_at'=>Carbon::now(),
        //         ]);
        //     }
        // }

        // if (!empty($request->active_list_2)) {
        //     for ($i=0; $i < count($request->active_list_2); $i++) {
        //         PackageList::insert([
        //             'package_id'=>$all_packageID[1],
        //             'info'=>$request->active_list_2[$i],
        //             'status'=>1,
        //             'created_at'=>Carbon::now(),
        //         ]);
        //     }
        // }

        // if (!empty($request->deactive_list_2)) {
        //     for ($i=0; $i < count($request->deactive_list_2); $i++) {
        //         PackageList::insert([
        //             'package_id'=>$all_packageID[1],
        //             'info'=>($request->deactive_list_2[$i] == ""?" ":$request->deactive_list_2[$i]),
        //             'status'=>0,
        //             'created_at'=>Carbon::now(),
        //         ]);
        //     }
        // }
        // if (!empty($request->active_list_3)) {
        //     for ($i=0; $i < count($request->active_list_3); $i++) {
        //         PackageList::insert([
        //             'package_id'=>$all_packageID[2],
        //             'info'=>$request->active_list_3[$i],
        //             'status'=>1,
        //             'created_at'=>Carbon::now(),
        //         ]);
        //     }
        // }

        // if (!empty($request->deactive_list_3)) {
        //     for ($i=0; $i < count($request->deactive_list_3); $i++) {
        //         PackageList::insert([
        //             'package_id'=>$all_packageID[2],
        //             'info'=>($request->deactive_list_3[$i] == ""?" ":$request->deactive_list_3[$i]),
        //             'status'=>0,
        //             'created_at'=>Carbon::now(),
        //         ]);
        //     }
        // }


        return redirect()->route('admin.service.index');
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
        //
    }


    public function destroy($id)
    {
        //
    }



    public function packageList_del(Request $request)
    {

        PackageList::find($request->elementID)->delete();

        return response()->json([
            'success'=>'success',
        ]);
    }

    public function package_update(Request $request)
    {
        return $request->all();
    }
}
