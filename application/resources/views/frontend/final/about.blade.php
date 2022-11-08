@extends('frontend.final.master2')

@section('custom_css')
<style>
    section.each_part{
        padding: 5vh 0;
    }
    section.each_part div{

    }
</style>
@endsection

@section('content')

<section style="padding-top:10vh;">
    <div class="text-white d-flex flex-column align-items-center justify-content-center" style="background-color: #94949499;min-height: 50vh;">
        <span style="font-size: 2rem;">About</span>
        <h1 class="mb-4 mt-2 font-weight-bold text-center" style="font-size: 4rem;">Know About Us</h1>
        <div class="text-center">
            <!-- hover background-color: white; color: black; -->
            <a href="#" id="filled" class="btn px-5 py-3 text-white mt-3 mt-sm-0 mx-1"
                style="border-radius: 30px; border: 2px solid #b6fac5;">Read More</a>
        </div>
    </div>
</section>

<section class="each_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, reprehenderit harum, voluptatibus explicabo voluptatum ipsum aspernatur enim, qui quod quis corporis totam ad! Alias temporibus voluptatibus soluta fuga deleniti, aliquid, asperiores illum officia magni eligendi voluptas quibusdam ipsum cumque. Recusandae vitae ad porro non earum asperiores, repellendus quasi dignissimos nulla esse facere voluptatibus eaque culpa ea nesciunt neque sunt tempore quibusdam similique ipsa magnam? Possimus asperiores porro culpa deserunt pariatur nesciunt quos fuga, autem amet sint libero, laudantium ipsam quam rerum omnis.</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <img class="img-fluid" src="{{asset('final_front_assets/img/portfolio/branding-3.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="each_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <img class="img-fluid" src="{{asset('final_front_assets/img/portfolio/branding-2.jpg')}}" alt="">
            </div>
            <div class="col-sm-12 col-md-6">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, reprehenderit harum, voluptatibus explicabo voluptatum ipsum aspernatur enim, qui quod quis corporis totam ad! Alias temporibus voluptatibus soluta fuga deleniti, aliquid, asperiores illum officia magni eligendi voluptas quibusdam ipsum cumque. Recusandae vitae ad porro non earum asperiores, repellendus quasi dignissimos nulla esse facere voluptatibus eaque culpa ea nesciunt neque sunt tempore quibusdam similique ipsa magnam? Possimus asperiores porro culpa deserunt pariatur nesciunt quos fuga, autem amet sint libero, laudantium ipsam quam rerum omnis.</p>
            </div>
        </div>
    </div>
</section>

<section class="each_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, reprehenderit harum, voluptatibus explicabo voluptatum ipsum aspernatur enim, qui quod quis corporis totam ad! Alias temporibus voluptatibus soluta fuga deleniti, aliquid, asperiores illum officia magni eligendi voluptas quibusdam ipsum cumque. Recusandae vitae ad porro non earum asperiores, repellendus quasi dignissimos nulla esse facere voluptatibus eaque culpa ea nesciunt neque sunt tempore quibusdam similique ipsa magnam? Possimus asperiores porro culpa deserunt pariatur nesciunt quos fuga, autem amet sint libero, laudantium ipsam quam rerum omnis.</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <img class="img-fluid" src="{{asset('final_front_assets/img/portfolio/branding-1.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection
