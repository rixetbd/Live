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
