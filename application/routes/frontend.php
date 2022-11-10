<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\IPController;
use App\Models\Country;
use App\Models\Lead;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function(){
//     return view('frontend.tal');
// });


Route::middleware('auth')->group(function(){

    Route::controller(FrontendController::class)->group(function(){

        Route::get('/hhh', 'index')->name('frontend.index');
        Route::get('/2', 'index2')->name('frontend.index2');
        Route::get('/3', 'index3')->name('frontend.index3');
        Route::get('/getCityName', 'getCityName')->name('frontend.getCityName');
        Route::get('/test/data', function(){
            $data = Lead::all();
            return response()->json($data);
        });
        Route::get('/test', function(){
            return view('frontend.test');
        });
        // Route::get('/betheme', function(){
        //     return view('frontend.betheme.index');
        // });
        Route::get('/mainpage', 'index_mainpage')->name('frontend.home');
        Route::get('/home2', 'index_home2')->name('frontend.leadgeneration');

    });


    Route::controller(FrontendController::class)->group(function(){
        Route::get('/', 'index_d')->name('frontend.main');
        Route::get('/lastatoct', 'lastatoct')->name('frontend.lastatoct');
        Route::get('/000', 'index_0')->name('frontend.0');
        Route::get('/hhhh', 'index_hhh')->name('frontend.hhh');
        Route::post('/getservicedata', 'getservicedata')->name('frontend.getservicedata');
        Route::post('/getservicedata/first', 'getservicedata_first')->name('frontend.getservicedata_first');
        Route::post('/getservicedata/selected', 'getservicedata_selected')->name('frontend.getservicedata_selected');
        Route::post('/servicedetails', 'servicedetails')->name('servicedetails');
        Route::post('/servicedetailsauto', 'servicedetailsauto');
        Route::get('/terms-and-conditions', 'terms_and_conditions');
        Route::post('/servicelistmenu', 'servicelistmenu');


        Route::get('/lead-generation', 'lead_generation')->name('frontend.lead_generation');
        Route::get('/graphics-design', 'graphics_design')->name('frontend.graphics_design');
        Route::get('/search-engine-optimization', 'search_engine_optimization')->name('frontend.search_engine_optimization');
        Route::get('/data-entry', 'data_entry')->name('frontend.data_entry');

    });



    Route::controller(SearchController::class)->group(function(){

        Route::post('/getcities', 'search')->name('getcities.search');
        // Route::post('/getalldata', 'getalldata')->name('getcities.getalldata');
        // Route::post('/getcitiesdata', 'searchCitiesData')->name('searchCitiesData.search');
        // Route::post('/getdataindustries', 'getdataindustries')->name('getdataindustries.search');

        Route::post('/searchall', 'searchall')->name('search.searchall');
        Route::post('/searchcountryonly', 'searchcountryonly')->name('search.searchcountryonly');
        Route::post('/searchcityonly', 'searchcityonly')->name('search.searchcityonly');
        Route::post('/searchindustryonly', 'searchindustryonly')->name('search.searchindustryonly');
        Route::post('/searchcountryandcity', 'searchcountryandcity')->name('search.searchcountryandcity');
        Route::post('/searchcountryandindustry', 'searchcountryandindustry')->name('search.searchcountryandindustry');
        Route::post('/searchcityandindustry', 'searchcityandindustry')->name('search.searchcityandindustry');

    });

    Route::controller(ContactController::class)->group(function(){
        Route::get('/contact', 'showpage')->name('frontend.contact');
        Route::get('/contact/index', 'index')->name('frontend.contact.index');
        Route::post('/contact/create', 'create')->name('frontend.contact.post');

    });

    Route::controller(IPController::class)->group(function(){
        Route::get('/ip', 'create');
    });


    Route::get('/work', function(){
        return view('frontend.final.work');
    });

    Route::get('/about', function(){
        return view('frontend.final.about');
    })->name('frontend.about');

    Route::get('/blog', function(){
        return view('frontend.final.blog');
    })->name('frontend.blog');


    Route::controller(ContactController::class)->group(function(){

        Route::get('/order/{id}/{feature_index}', 'main_index')->name('order.index');
        Route::post('/selectedpackageorder', 'selectedpackageorder');

    });

    Route::post('/service-searchon-pricing', [ContactController::class, 'service_searchon_pricing']);
    Route::get('/index001nov', [ContactController::class, 'pricing_index']);



    Route::controller(HomePageController::class)->group(function(){

        Route::get('/home-nov', 'index')->name('front.index');
        Route::get('/pricing-page', 'pricing_page')->name('front.pricing_page');

    });



});
