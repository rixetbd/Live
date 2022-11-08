<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta charset="UTF-8"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('meta_tag')
    @yield('schema_code')

    <!-- Style Links || Start -->
    {{-- CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend_assets/dist/semantic-ui-Icon/icon.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/fixed_css/master.css')}}">

    {{-- CDN --}}
    {{-- Custom --}}
    @yield('custom_css')
    {{-- Custom --}}
    <!-- Style Links || END -->



</head>

<body>

    <section class="main_section">
        <div class="left_part stiky_nav" style="background: url({{asset('uploads/img/nav_bg.jpg')}});">
            <div>
                <div class="logo text-center">
                    <a href="#" class="site_name">DiMarz</a>
                </div>
                <div class="nav_aria">
                    <ul>
                        <li><a href="#" class="nav-item">Home</a></li>
                        <li><a href="#" class="nav-item">Work</a></li>
                        <li><a href="{{route('front.pricing_page')}}" class="nav-item">Pricing</a></li>
                        <li><a href="#" class="nav-item">Blog</a></li>
                        <li><a href="#" class="nav-item">About</a></li>
                        <li><a href="#" class="nav-item">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="social_links">
                <a class="facebook" target="_blank" href="#"><i class="fab fa-facebook"></i></a>
                <a class="instagram" target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                <a class="twitter" target="_blank" href="https://twitter.com/bdosc22"><i
                        class="fab fa-twitter"></i></a>
                <a class="linkedin" target="_blank" href="https://www.linkedin.com/company/bdosc/"><i
                        class="fab fa-linkedin"></i></a>
                <a class="whatsapp" target="_blank" href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="right_part content_part">
            @yield('content')
        </div>
    </section>


    <!-- Footer || Start -->

    <!-- Script Links || Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>

    <!-- Custom Script -->

    <!-- Custom Script -->

    @yield('custom_js')
    <!-- Script Links || END -->

</body>

</html>
