<?php

namespace App\Http\Controllers;

use App\Models\FaqTable;
use App\Models\ServiceName;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FaqController extends Controller
{

    public function index(){}
    public function create(){}

    public function show($id){
        $all_service_name = ServiceName::all();
        $all_faq = FaqTable::where('service_name_id',$id)->get();
        return view('backend.faq.view',[
            'all_faq'=>$all_faq,
            'all_service_name'=>$all_service_name,
        ]);
    }

    public function edit($id){}

    public function update(Request $request){

        $request->validate([
            'service_name_id'=>'required',
            'question'=>'required',
            'answer'=>'required',
        ]);

        FaqTable::find($request->id)->update([
            'service_name_id'=>$request->service_name_id,
            'question'=>$request->question,
            'answer'=>$request->answer,
        ]);

        return $request->all();

    }

    public function destroy($id){
        FaqTable::find($id)->delete();
        return back();
    }

    public function store(Request $request){

        $request->validate([
            'service_name_id'=>'required',
            'question'=>'required',
            'answer'=>'required',
        ]);

        FaqTable::insert([
            'service_name_id'=>$request->service_name_id,
            'question'=>$request->question,
            'answer'=>$request->answer,
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }


    public function home_faq()
    {
        $all_service_name = ServiceName::all();
        return view('backend.faq.create',[
            'all_service_name'=>$all_service_name,
        ]);
    }


    public function serviceadd(Request $request)
    {

        $request->validate([
            'serviceName'=>'required',
        ]);

        if (empty($request->id)) {
            ServiceName::insert([
                'name'=>$request->serviceName,
                'slug'=>Str::slug($request->serviceName),
                'created_at'=>Carbon::now(),
            ]);
        } else {
            ServiceName::find($request->id)->update([
                'name'=>$request->serviceName,
                'slug'=>Str::slug($request->serviceName),
            ]);
        }
        return back();
    }

























    public function get_faqlist(Request $request)
    {

        $name = ServiceName::find($request->id);
        $query = FaqTable::where('service_name_id', $request->id)->orderBy('id','asc')->get();
        $data = "";
        foreach ($query as $key => $value) {
            $data .= '<div class="accordion-item"><h2 class="accordion-header" id="heading'.$value->id.'"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$value->id.'" aria-expanded="true" aria-controls="collapse'.$value->id.'"><span><img class="img-fluid" src="'.asset('final_front_assets/img/icons/faq_icon.png').'" alt=""></span> '.$value->question.'</button></h2><div id="collapse'.$value->id.'" class="accordion-collapse collapse" aria-labelledby="heading'.$value->id.'" data-bs-parent="#accordionExample"><div class="accordion-body d-flex"><div class="accordion-body-img">
                        <img class="img-fluid" src="'.asset('final_front_assets/img/icons/faq_icon_ans2.png').'" alt=""></div><div>'.$value->answer.'</div></div></div></div>';
        };
        return response()->json([
            'data'=>$data,
        ]);
    }
}
