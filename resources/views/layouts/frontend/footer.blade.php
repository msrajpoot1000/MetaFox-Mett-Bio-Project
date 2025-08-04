
@php
    $companyinfos = DB::table('companyinfos')->first();
    $company = \DB::table('companyinfos')->first();
@endphp
  
@if($companyinfos)  

    <footer id="footer" class="clearfix">
            <div class="container-TFL">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="widget widget-logo">
                            <div class="logo-footer" id="logo-footer">
                                <a href="index.html">
                                    <img id="logo_footer" src="{{ asset('assets/images/logo/' . $companyinfos->logo) }}" alt="">
                                </a>
                            </div>
                            <p class="sub-widget-logo">There are many variations of
                                passages of Lorem Ipsum
                                available, but the majority have suffered predefined
                                chunks as necessary tests with
                                nursing implications.</p>
                        </div>
                        <div class="widget-social style-1 mg-t32">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="style-2"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="style-2"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5 ">
                        <div class="widget widget-menu style-1">
                            <h5 class="title-widget">About Us</h5>
                            <ul>
                                <li><a href="about.html">Corporate Business</a></li>
                                <li><a href="about.html">SEO Agency</a></li>
                                <li><a class="active" href="testimonials.html"> Testimonial </a></li>
                                <li>
                                    <a href="careerspage.html"> Company Report </a>
                                </li>
                                <li><a href="service-page.html"> Marketing </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-7 ">
                        <div class="widget widget-menu style-2">
                            <h5 class="title-widget">Usefull Links</h5>
                            <ul>
                                <li><a href="#">Play Store</a></li>
                                <li><a href="#">Social Media</a></li>
                                <li><a href="#">App Development</a>
                                </li>
                                <li><a href="faq.html">Our Faq</a></li>
                                <li><a href="#">Privace Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="widget widget-menu fl-st-3">
                            <h5 class="title-widget">Information</h5>
                            <ul>
                                <li><a href="mailto:{{ $companyinfos->email }}">{{ $companyinfos->email }}
                                    </a></li>
                                <li><a href="tel:{{ $companyinfos->phone }}">Call Me + {{ $companyinfos->phone }}</a></li>
                                <li>
                                    <p> Mon - Friday :- ( 10:30 to 5:30)
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer><!-- /#footer -->
        <div id="bottom" class="bottom-type1 position-relative">
            <div class="container-TFL">
                <div class="bottom-wrap text-center">
                    <div id="wrap-bottom">
                        <span> © Copyright 2022</span>
                        <a href="#">Mett bio</a><span class="license">- All
                            Rights
                            Reserved.</span>
                    </div>
                </div>
            </div>
        </div>

  @endif   