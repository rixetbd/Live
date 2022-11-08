@extends('frontend.final.master2')

@section('custom_css')
<style>
    section.each_part {
        padding: 5vh 0;
    }

    section.each_part .card {
        background-color: transparent;
        border: 0;
    }
    section.each_part .card .card-body {min-height: 120px;}
    section.each_part .card .card-title {font-size: 1.15rem;}
    section.each_part .card .card-text {font-size: .95rem;}

    section.each_part .card .card-img {
        height: 200px;
        overflow: hidden;
    }

</style>
@endsection

@section('content')

<section style="padding-top:10vh;">
    <div class="text-white d-flex flex-column align-items-center justify-content-center"
        style="background-color: #94949499;min-height: 20vh;">
        <a href="{{route('frontend.hhh')}}" style="font-size: 1rem;color:#fff;"><i class="fas fa-arrow-left"></i> Back
            to Home</a>
        <h1 class="mb-4 mt-2 font-weight-bold text-center" style="font-size: 4rem;">Blog</h1>
        <div class="text-center">
        </div>
    </div>
</section>

<section class="each_part">
    <div class="container">
        <div class="row w-100">
            <div class="col-sm-12 col-md-4">
                <div class="card" >
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="">Read More</a>
                        <span class="float-end">16 Oct, 2022</span>
                    </div>
                  </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card" >
                    <div class="card-img">
                        <img src="{{asset('final_front_assets/img/why-us-bg.jpg')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="">Read More</a>
                        <span class="float-end">16 Oct, 2022</span>
                    </div>
                  </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card" >
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="">Read More</a>
                        <span class="float-end">16 Oct, 2022</span>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>


@endsection
