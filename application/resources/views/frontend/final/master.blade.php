<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta charset="UTF-8"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('meta_tag')

    <!-- Style Links || Start -->

    {{-- CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend_assets/dist/semantic-ui-Icon/icon.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    {{-- CDN --}}
    {{-- Custom --}}

    <link rel="stylesheet" href="{{asset('final_front_assets/css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/table.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/services.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/pro_and_faq.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('final_front_assets/libs/neumorphism/neumorphism.css')}}">
    @yield('custom_css')
    {{-- Custom --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap');

        body.dark_mode,
        body.dark_mode .services-cards {
            color: #fff;
            background-color: #202020;
        }

        body.dark_mode .services-cards .card-item,
        body.dark_mode .team .team-member,
        body.dark_mode .testimonial-item,
        body.dark_mode #footer .footer-newsletter {
            background-color: #3e3e3e;
        }

        body.dark_mode #footer .footer-top {
            background: #2c2c2c;
            border: none
        }

        body.dark_mode .hero .btn-get-started {
            color: #3e3e3e;
        }

        body.dark_mode h1,
        body.dark_mode h2,
        body.dark_mode h3,
        body.dark_mode h4,
        body.dark_mode h5,
        body.dark_mode h6,
        body.dark_mode p,
        body.dark_mode a {
            color: #fff !important;
        }

        .BG_color_checkbox {
            opacity: 0;
            position: absolute;
            /* display: block !important;
            margin: 0 36px; */
        }

        body,
        body.light_mode {
            color: #292c35;
            background-color: #D8DBE1;
            /* background-color: #f9f9f9; */
        }
        .light_mode_Sectoin {
            position: relative;
            background-color: #D8DBE1;
        }

        .label {
            cursor: pointer;
            width: 35px;
            height: 17px;
            background-color: #111;
            display: flex;
            border-radius: 50px;
            align-items: center;
            justify-content: space-between;
            padding: 5px;
            position: relative;
            transform: scale(1.5);
        }

        body.dark_mode .color_mode_icon .label {
            background: #fff
        }

        body.dark_mode .color_mode_icon .ball {
            background-color: #000
        }


        .ball {
            width: 15px;
            height: 15px;
            background-color: white;
            position: absolute;
            top: 1px;
            left: 2px;
            border-radius: 50%;
            transition: transform 0.2s linear;
        }

        /*  target the elemenent after the label*/
        .BG_color_checkbox:checked+.label .ball {
            transform: translateX(17px);
        }

        .fa-moon {
            font-size: 10px;
            color: pink;
        }

        .fa-sun {
            font-size: 10px;
            color: yellow;
        }

    </style>
    <!-- Style Links || END -->

</head>

<body>

    <nav>
        <div class="container">
            <div class="logo">
                <a href="{{route('frontend.main')}}"><img src="{{asset('uploads/img/logo3.png')}}"
                        alt="Bangladesh Outsourcing Company" /></a>
            </div>
            <input type="radio" name="slider" id="menu-btn" />
            <input type="radio" name="slider" id="close-btn" />
            <ul class="nav-links" style="margin-bottom: 0">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li class="nav_item"><a class="shadow_one" href="{{route('frontend.main')}}">Home</a></li>

                <li class="nav_item">
                    <a href="#" class="desktop-item shadow_one">Services</a>
                    <input type="checkbox" id="showMega" />
                    <label for="showMega" class="mobile-item">Services</label>
                    <div class="mega-box">
                        <div class="content">
                            <!-- <div class="row">
                        <img
                          src="https://us.123rf.com/450wm/leowolfert/leowolfert1606/leowolfert160600007/60004020-engineer-is-pressing-it-services-on-an-interactive-touch-screen-business-metaphor-and-information-te.jpg?ver=6"
                          alt=""
                        />
                      </div> -->
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
                                <h4>Email Services</h4>
                                <ul class="mega-links">
                                    <li><a href="#">Email Template</a></li>
                                    <li><a href="#">Email Marketing</a></li>
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
                    </div>
                </li>
                {{-- <li></li> --}}
                <li class="nav_item"><a class="shadow_one" href="#">Blog</a></li>
                <li class="nav_item"><a class="shadow_one" href="{{route('frontend.about')}}">About</a></li>
                <li class="nav_item"><a class="shadow_one" href="{{route('frontend.contact.index')}}">Contact</a></li>
                <div class="d-flex align-items-center color_mode_icon" style="margin-left: 20px;">
                    <input type="checkbox" class="BG_color_checkbox" id="BG_color_checkbox">
                    <label for="BG_color_checkbox" class="label">
                        <i class="fas fa-moon"></i>
                        <i class='fas fa-sun'></i>
                        <div class='ball'>
                    </label>
                </div>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>

    <!--
    <header>
        <section class="container">

            <div class="row align-items-center position-relative hero_area">
                <div class="col-sm-12 col-md-7 hero_left">
                    {{-- <h4>Welcome</h4> --}}
                    <h1 style="padding-top: 110px;">We Provide Effective <br><strong>LEAD GENERATION</strong><br>
                        Services</h1>
                    <p class="description">Lead generation is the process of
                        producing new sales leads through developing interest in a service
                        or product. Lead Generation services are a fundamental part of growing your business’s revenue.
                    </p>
                </div>
                <div class="col-sm-12 col-md-5 hero_right">
                    {{-- <img src="{{asset('uploads/img/avater.png')}}" alt="" style="float:
                    right;height:250px;margin-right: 0px;"> --}}
                    <div class="row align-items-center" style="width: 490px;">
                        <div class="col-4">
                            {{-- <img src="{{asset('uploads/img/vector/demo001.png')}}" alt=""
                            style="width:480px;height:auto;"> --}}
                            {{-- <img src="{{asset('uploads/img/vector/avater.png')}}" alt=""
                            style="width:120px;height:auto;"> --}}
                        </div>
                        <div class="col-8">
                            {{-- <h6>Full Stack Developer </h6>
                        <h5 class="m-0">Muhammad Rabiul</h5> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 select_box">
                <div class="col-sm-12 col-md-4 d-flex align-items-center"
                    style="background: #f0dbc8;margin-right: -12px;">
                    <h3 class="input_h3">Choose your country to find Leads <i class='bx bx-caret-right'></i></h3>
                </div>

                <div class="col-sm-12 col-md-5 input_field">
                    <div class="ui fluid search selection dropdown" id="country_Name50">
                        <input type="hidden" name="country" id="country_Name_Input50">
                        <i class="dropdown icon"></i>
                        <div class="default text">Search Country</div>
                        <div class="menu">

                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 pt-5">
                    <p>For more than four years, our firm has provided high-quality data entry and other non-voice
                        services to
                        many sectors, with several successful projects. Our team's knowledge and skills may be put to
                        good use
                        in your organization. Take advantage of the following benefits provided by our skilled staff.
                    </p>
                </div>
            </div>

        </section>
    </header>

-->

    @yield('content')



    <!-- Footer || Start -->

    <!-- Footer || End -->
    <footer id="footer" class="light_mode_Sectoin" style="z-index: 1;">
        <div class="container d-flex align-items-end" style="min-height: 100vh;padding-top: 100px;">
            <div class="row" style="border: 1px solid #fff;padding:10px 0;">
                <div class="col-sm-12 col-md-5">
                    <form action="" method="POST">
                        @csrf
                        <div class="Nmb-2">
                            <h5 class="form_title sec_color">CONTACT US</h5>
                            {{-- <label for="name" class="form-label">First Name*</label>
                            <input type="text" class="form-control" name="name"> --}}
                        </div>
                        <div class="row Nmb-2">
                            <div class="col-6">
                                <label for="name_first" class="form-label">First Name</label>
                                <input type="email" id="name_first" name="name_first" class="form-control">
                                <div class="form-text text-danger"><span class="d-none name_first">Please complete this required field.</span></div>
                            </div>
                            <div class="col-6">
                                <label for="name_last" class="form-label">Last Name</label>
                                <input type="text" id="name_last" class="form-control">
                                <div class="form-text text-danger"><span class="d-none name_last">Please complete this required field.</span></div>
                            </div>
                        </div>
                        {{-- <div class="Nmb-2">
                            <label for="name" class="form-label">Last Name*</label>
                            <input type="text" class="form-control" name="name">
                        </div> --}}
                        <div class="Nmb-2">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" id="email" name="email" class="form-control">
                            <div class="form-text text-danger"><span class="d-none email">Please complete this required field.</span></div>
                        </div>
                        <div class="row Nmb-2">
                            <div class="col-6">
                                <label for="com_name" class="form-label">Company Name</label>
                                <input type="text" id="com_name" name="com_name" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="phone" class="form-label">Phone (Skype)</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                                <div class="form-text text-danger"><span class="d-none phone">Please complete this required field.</span></div>
                            </div>
                        </div>
                        <div class="Nmb-2">
                            <label for="select_service" class="form-label">Type of Services</label>
                            <select class="form-select" id="select_service" name="select_service" aria-label="Type of Services*">
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
                            <div class="form-text text-danger"><span class="d-none select_service">Please complete this required field.</span></div>
                        </div>
                        <div class="Nmb-2">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control" rows="5"></textarea>
                            <div class="form-text text-danger"><span class="d-none message">Please complete this required field.</span></div>
                        </div>
                        <div class="Nmb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Receive monthly updates covering marketing, strategy, design, and all things digital. No spam, we promise.</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-1 d-flex justify-content-center">
                    <div style="width: 1px;background:#fff;height:100%"></div>
                </div>
                <div class="col-sm-12 col-md-6 contact_right">
                    <h3>PARTICIPATE <br>& EXPERIENCE</h3>

                    <div style="min-height: 230px;">
                        <img src="{{asset('final_front_assets/contact.png')}}" alt="" class="img-fluid" style="opacity: 60%;height:290px">
                    </div>

                    <div class="company_details">
                        {{-- <div class="row">
                            <div class="col-1"><i class="fas fa-mobile-alt fa-2x"></i></div>
                            <div class="col-11">+1 5589 55488 55</div>
                        </div> --}}
                        <div class="row">
                            <div class="col-1"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                            <div class="col-11"><a target="_blank" href="https://www.google.com/maps?q=23.80224743742919,+90.3528942453915">Block-E, Zoo Road, Mirpur 01, Dhaka-1216<br>
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
                        <a class="twitter" target="_blank" href="https://twitter.com/bdosc22"><i class="bx bxl-twitter"></i> Twitter</a>
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/company/bdosc/"><i class="bx bxl-linkedin"></i>Linkedin</a>
                        <a class="whatsapp" target="_blank" href="#"><i class="bx bxl-whatsapp"></i>Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Newsletter</h4>
                        <p>Join with us to get updates.</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post"> <input type="email" name="email"><input type="submit"
                                value="Subscribe"> </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About BDOSC</h3>
                        <p>Bangladesh Outsourcing Company is a global business process outsourcing company. All of our
                            services satisfy stringent international standards. We have projections all around the US
                            and Western Europe.</p>
                        <div class="social-links mt-3">
                            <a class="facebook" target="_blank" href="#"><i class="bx bxl-facebook"></i></a>
                            <a class="instagram" target="_blank" href="#"><i class="bx bxl-instagram"></i></a>
                            <a class="twitter" target="_blank" href="https://twitter.com/bdosc22"><i
                                    class="bx bxl-twitter"></i></a>
                            <a class="linkedin" target="_blank" href="https://www.linkedin.com/company/bdosc/"><i
                                    class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p> Block-E, Zoo Road <br> Mirpur 01, Dhaka-1216<br> Bangladesh <br><br><strong>Phone:</strong>
                            +1 5589 55488 55<br> <strong>Email:</strong> <a href="mailto:contact@bdosc.com"
                                class="text-dark">contact@bdosc.com</a><br> </p>
                    </div>
                </div>
            </div>
        </div> --}}
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
