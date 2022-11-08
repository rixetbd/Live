<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Models\ServiceName;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $all_service_name = ServiceName::all();
        return view('backend.services.category',[
            'all_service_name'=>$all_service_name,
        ]);
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
        ServiceName::find($id)->delete();
        return back();
    }
}
