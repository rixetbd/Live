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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    {{-- CDN --}}
    {{-- Custom --}}

    <link rel="stylesheet" href="{{asset('final_front_assets/css/nav2.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/pro_and_faq.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/libs/neumorphism/neumorphism.css')}}">
    @yield('custom_css')
    {{-- Custom --}}
    <!-- Style Links || END -->

</head>

<body>

    <nav>
        <div class="container">
            <div class="logo">
                {{-- <a href="{{route('frontend.main')}}"><img src="{{asset('uploads/img/logo3.png')}}"
                        alt="Bangladesh Outsourcing Company" /></a> --}}
                <a href="{{route('frontend.main')}}">
                    <h2 class="text-white">DiMarz</h2>
                </a>
            </div>
            <input type="radio" name="slider" id="menu-btn" />
            <input type="radio" name="slider" id="close-btn" />
            <ul class="nav-links" style="margin-bottom: 0;margin-right:25%;">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li class="nav_item"><a class="shadow_one" href="{{route('frontend.main')}}">Home</a></li>

                <li class="nav_item">
                    <a class="desktop-item shadow_one" id="action_menu_item">Work <span class="icon"><i class="fas fa-angle-down"></i></span></a>
                    <input type="checkbox" id="showMega" />
                    <label for="showMega" class="mobile-item">Work</label>
                    {{-- <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <h4><a href="{{route('frontend.lead_generation')}}">Lead Generation</a></h4>
                                <ul class="mega-links">
                                    <li><a href="#">B2B lead Generation</a></li>
                                    <li><a href="{{route('frontend.leadgeneration')}}">PPC Lead Generation</a></li>
                                    <li><a href="#">B2B lead Generation</a></li>
                                    <li><a href="#">PPC Lead Generation</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <h4>Web Development</h4>
                                <ul class="mega-links">
                                    <li><a href="#">WordPress Development</a></li>
                                    <li><a href="#">MERN Development</a></li>
                                    <li><a href="#">Web Application</a></li>
                                    <li><a href="#">Custom Website</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <h4>Digital Marketing</h4>
                                <ul class="mega-links">
                                    <li><a href="{{route('frontend.graphics_design')}}">Graphics Design</a></li>
                                    <li><a href="{{route('frontend.search_engine_optimization')}}">Search Engine
                                            Optimization</a></li>
                                    <li><a href="#">Mailchimp</a></li>
                                    <li><a href="#">Campain</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <h4>Graphics Services</h4>
                                <ul class="mega-links">
                                    <li><a href="#">Photo Retoucing</a></li>
                                    <li><a href="#">Background Removal</a></li>
                                    <li><a href="#">Photo Manipulation</a></li>
                                    <li><a href="#">Banner Design</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </li>
                {{-- <li></li> --}}
                <li class="nav_item"><a class="shadow_one" href="{{route('frontend.blog')}}">Blog</a></li>
                <li class="nav_item"><a class="shadow_one" href="#">Pricing</a></li>
                <li class="nav_item"><a class="shadow_one" href="{{route('frontend.about')}}">About</a></li>
                <li class="nav_item"><a class="shadow_one" href="#footer">Contact</a></li>
                {{-- <div class="d-flex align-items-center color_mode_icon" style="margin-left: 20px;">
                    <input type="checkbox" class="BG_color_checkbox" id="BG_color_checkbox">
                    <label for="BG_color_checkbox" class="label">
                        <i class="fas fa-moon"></i>
                        <i class='fas fa-sun'></i>
                        <div class='ball'>
                    </label>
                </div> --}}
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
        <div class="container-fluid d-none p-0" id="action_menu_container" style="height: 100vh;background: #000000a3;">
            <div class="container-fluid p-0" style="background: #fff;border-top: 1px solid #e7e6e6;">
            <div class="container">
                <div class="row w-100" id="mega_menu_area">
                    <div class="col-sm-12 col-md-3 py-4">
                        <h3 class="service_group_title_two"><i class="fas fa-bullhorn text-success me-2"></i> Digital Marketing</h3>
                        <div class="mb-3">
                            <a href="{{route('frontend.search_engine_optimization')}}">
                                <span class="service_group_title">Search Engine Optimization (SEO)</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="{{route('frontend.lead_generation')}}">
                                <span class="service_group_title">Lead Generation Services</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">E-mail Marketing</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">Content Marketing</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">E-mail Marketing</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 py-4">
                        <h3 class="service_group_title_two"><i class="fas fa-bezier-curve text-success me-2"></i> Graphics Design</h3>
                        <div class="mb-3">
                            <a href="{{route('frontend.graphics_design')}}">
                                <span class="service_group_title">Photo Editing & Retouching</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">Vector Illustration & Digital Art</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">Printable Design</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">Motion Graphics</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 py-4">
                        <h3 class="service_group_title_two"><i class="fas fa-code text-success me-2"></i> Web Development</h3>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">WordPress Development</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">Web Application</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">Html Conversion</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">E-Commerce Development</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">Performance & Security</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 py-4">
                        <h3 class="service_group_title_two"><i class="fas fa-file-signature text-success me-2"></i> Data Entry</h3>
                        <div class="mb-3">
                            <a href="{{route('frontend.data_entry')}}">
                                <span class="service_group_title">Data Entry</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">Performance & Security</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="#">
                                <span class="service_group_title">Lead Generation & Data Entry</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                        <div class="mb-3">
                            <a href="{{route('frontend.lastatoct')}}">
                                <span class="service_group_title">New Home Page</span> <span class="title_arrow"><i class="fas fa-angle-double-right"></i></span>
                                <p>With Proper SEO campaign, you can boost your daily
                                    organic traffic and bring more conversions by organically
                                    ranking.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </nav>
    @yield('submenu')

    @yield('content')



    <!-- Footer || Start -->

    <!-- Footer || End -->
    <footer id="footer" class="light_mode_Sectoin" style="z-index: 30;">
        <div class="container d-flex align-items-end" style="">
            <div class="row w-100" id="contact_area_box" style="border: 1px solid #fff;padding:10px 0;">
                <div class="col-sm-12 col-md-5">
                    <form action="" method="POST">
                        @csrf
                        <div class="Nmb-2">
                            {{-- <h5 class="form_title sec_color mb-3">CONTACT US</h5> --}}
                        </div>
                        <div class="row Nmb-2">
                            <div class="col-sm-12 col-md-6">
                                {{-- <label for="name_first" class="form-label">First Name</label> --}}
                                <input type="email" id="name_first" name="name_first" class="form-control"
                                    placeholder="First Name">
                                <div class="form-text text-danger"><span class="d-none name_first">Please complete this
                                        required field.</span></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                {{-- <label for="name_last" class="form-label">Last Name</label> --}}
                                <input type="text" id="name_last" class="form-control" placeholder="Last Name">
                                <div class="form-text text-danger"><span class="d-none name_last">Please complete this
                                        required field.</span></div>
                            </div>
                        </div>

                        <div class="Nmb-2">
                            {{-- <label for="email" class="form-label">Email*</label> --}}
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            <div class="form-text text-danger"><span class="d-none email">Please complete this required
                                    field.</span></div>
                        </div>
                        <div class="row Nmb-2">
                            <div class="col-sm-12 col-md-6">
                                {{-- <label for="com_name" class="form-label">Company Name</label> --}}
                                <input type="text" id="com_name" name="com_name" class="form-control"
                                    placeholder="Company Name">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                {{-- <label for="phone" class="form-label">Phone (Skype)</label> --}}
                                <input type="text" id="phone" name="phone" class="form-control"
                                    placeholder="Phone (Skype)">
                                <div class="form-text text-danger"><span class="d-none phone">Please complete this
                                        required field.</span></div>
                            </div>
                        </div>
                        <div class="Nmb-2">
                            {{-- <label for="select_service" class="form-label">Type of Services</label> --}}
                            <select class="form-select" id="select_service" name="select_service"
                                aria-label="Type of Services*">
                                <option value="">-- Select a service</option>
                                <option value="">Discovery Strategy</option>
                                <option value="">User Experience (UX)</option>
                                <option value="">Website Design</option>
                                <option value="">Website Development</option>
                                <option value="">Application Development</option>
                                <option value="">Mobile Apps</option>
                                <option value="">E-Commerce</option>
                                <option value="">Marketing/Advertising</option>
                                <option value="">Social Media</option>
                            </select>
                            <div class="form-text text-danger"><span class="d-none select_service">Please complete this
                                    required field.</span></div>
                        </div>
                        <div class="Nmb-2">
                            {{-- <label for="message" class="form-label">Message</label> --}}
                            <textarea name="message" id="message" class="form-control" rows="5"
                                placeholder="Message"></textarea>
                            <div class="form-text text-danger"><span class="d-none message">Please complete this
                                    required field.</span></div>
                        </div>
                        <div class="Nmb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Receive monthly updates covering
                                marketing, strategy, design, and all things digital. No spam, we promise.</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-1 d-flex justify-content-center d-sm-none d-md-block">
                    <div style="width: 1px;background:#fff;height:100%"></div>
                </div>
                <div class="col-sm-12 col-md-6 contact_right">
                    <h3>We will reply back to your feedback as soon as possible.</h3>
                    <div style="min-height: 230px;">
                        <img src="{{asset('final_front_assets/contact.png')}}" alt="" class="img-fluid"
                            style="opacity: 60%;height:290px">
                    </div>

                    <div class="company_details">
                        <div class="row">
                            <div class="col-1"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                            <div class="col-11"><a target="_blank"
                                    href="https://www.google.com/maps?q=23.80224743742919,+90.3528942453915">Block-E,
                                    Zoo Road, Mirpur 01, Dhaka-1216<br>
                                    Bangladesh</a></div>
                        </div>
                        <div class="row">
                            <div class="col-1"><i class="fas fa-envelope fa-2x"></i></div>
                            <div class="col-11"><a href="mailto:contact@bdosc.com">contact@bdosc.com</a></div>
                        </div>
                    </div>

                    <div class="social-links mt-3">
                        <a class="facebook" target="_blank" href="#"><i class="bx bxl-facebook"></i> Facebook</a>
                        <a class="instagram" target="_blank" href="#"><i class="bx bxl-instagram"></i> Instagram</a>
                        <a class="twitter" target="_blank" href="https://twitter.com/bdosc22"><i
                                class="bx bxl-twitter"></i> Twitter</a>
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/company/bdosc/"><i
                                class="bx bxl-linkedin"></i>Linkedin</a>
                        <a class="whatsapp" target="_blank" href="#"><i class="bx bxl-whatsapp"></i>Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">Copyright &copy; {{date('Y')}} • <strong><a href="{{url('/')}}"
                        style="color: #e96b56;">DiMarz</a></strong>. All Rights
                Reserved </div>
        </div>
    </footer>

    <!-- Script Links || Start -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- Custom Script -->
    <script src="{{asset('final_front_assets/js/nav.js')}}"></script>
    <script src="{{asset('final_front_assets/js/header.js')}}"></script>
    <script src="{{asset('final_front_assets/js/fun-search.js')}}"></script>
    <script src="{{asset('final_front_assets/js/table.js')}}"></script>
    <script src="{{asset('final_front_assets/js/service.js')}}"></script>
    <script src="{{asset('final_front_assets/js/pro_and_faq.js')}}"></script>
    <!-- Custom Script -->

    @yield('custom_js')
    <!-- Script Links || END -->
    <script>
        const checkbox = document.getElementById('BG_color_checkbox');
        if (localStorage.getItem('color_mode') !== null) {
            // document.body.classList.toggle('light_mode');
            let color_mode = localStorage.getItem("color_mode");
            if (color_mode == "dark_mode") {
                // alert('dark_mode');
                $('#BG_color_checkbox').attr('checked', 'checked');
                $('BG_color_checkbox').click();
                document.body.classList.toggle('dark_mode');
            } else {
                // alert('light_mode');
                $('#BG_color_checkbox').removeAttr('checked');
                $('BG_color_checkbox').click();
                document.body.classList.toggle('light_mode');
            }
        }
        checkbox.addEventListener('change', () => {
            localStorage.clear();
            isChecked = $('#BG_color_checkbox').is(':checked');
            if (isChecked) {
                document.body.classList.remove('light_mode');
                document.body.classList.add('dark_mode');
                localStorage.setItem("color_mode", "dark_mode");
            } else {
                document.body.classList.remove('dark_mode');
                document.body.classList.add('light_mode');
                localStorage.setItem("color_mode", "light_mode");
            }
        })

    </script>
</body>

</html>
