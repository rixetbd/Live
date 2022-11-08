<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Package;
use App\Models\PackageList;
use App\Models\Service;
use App\Models\ServiceName;
use Illuminate\Http\Request;

class GeneralController extends Controller
{

    public function index()
    {
        return view('backend.setting');
    }


    public function create()
    {
        //
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
        //
    }

    public function destroy($id)
    {
        //
    }













    public function database_turncate()
    {
        Blog::all()->delete();
        Service::all()->delete();
        ServiceName::all()->delete();
        Package::all()->delete();
        PackageList::all()->delete();

        return back();
    }
}
