
@php
    $companyinfos = DB::table('companyinfos')->first();
    $company = \DB::table('companyinfos')->first();
@endphp
  
@if($companyinfos)  

 <style>
     .footer-layout1 {
       background: linear-gradient(66.85deg, #8f278b 0%, #bd1fca 39%, #e5008d 100%) !important;
    }
    
    .footer-layout1.style4 .copyright-wrap {
    background-color: #070707 !important;
    }
    
    .footer-text {
    color: #fffbfb !important;
    }
    
    .footer-layout1 {
    background-color: var(--vs-secondary-color);
    --title-color: #fff !important;
    --body-color: #fffcfc !important;
    }
    
    .footer-layout1.style4 .recent-course .recent-course-meta a {
    color: #ffffff !important;
    }

 </style>

<!-- Footer area start -->
    <footer class="footer-wrapper footer-layout1 style4">
        <div class="widget-area" data-bg-src="">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="vs-widget-about">
                                <div class="footer-logo"> <a href="index.html"><img src="{{ asset('assets/images/logo/' . $companyinfos->logo) }}" alt="logo"></a> </div>
                                <p class="footer-text">Unleash Your Child's Scientific Potential with Supriya's Science Lessons!</p>
                                <p class="footer-info"><i class="fal fa-phone-alt"></i><a class="text-inherit" href="tel:{{ $companyinfos->phone }}">+ {{ $companyinfos->phone }}</a></p>
                                <p class="footer-info"><i class="fal fa-envelope"></i><a class="text-inherit" href="mailto:{{ $companyinfos->email }}">{{ $companyinfos->email }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-xl-auto">
                        <div class="widget nav_menu footer-widget">
                            <h3 class="widget_title">Study Links</h3>
                            <div class="menu-all-pages-container footer-menu">
                                <ul class="menu">
                                    <li><a href="course.html">All Courses</a></li>
                                    <li><a href="blog.html">Summer Sessions</a></li>
                                    <li><a href="course.html">Best Courses</a></li>
                                    <li><a href="find-tutor.htm">Hire teachers</a></li>
                                    <li><a href="academic-program.html">Program FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-xl-auto">
                        <div class="widget nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container footer-menu">
                                <ul class="menu">
                                    <li><a href="about.html">Community</a></li>
                                    <li><a href="contact.html">Support</a></li>
                                    <li><a href="blog.html">Video Guides</a></li>
                                    <li><a href="event-details.html">Documentation</a></li>
                                    <li><a href="about.html">Security</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget  footer-widget">
                            <h3 class="widget_title">Recent Courses</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-course">
                                    <div class="media-img"><a href="course-details.html"><img src="assets/img/course/recent-course-2-1.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-course-meta"><a href="team-details.html">By alax dongle</a></div>
                                        <h4 class="post-title"><a class="text-inherit" href="course-details.html">Web Coding and Apache Basics theory</a></h4>
                                    </div>
                                </div>
                                <div class="recent-course">
                                    <div class="media-img"><a href="course-details.html"><img src="assets/img/course/recent-course-2-2.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-course-meta"><a href="team-details.html">By jon smith</a></div>
                                        <h4 class="post-title"><a class="text-inherit" href="course-details.html">Tadit Soul Can Tech Us About Web Docan</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="text-center col-lg-auto">
                         <p>© Copyright 2025 Achieve Grade9 , All Right Reserved. Designed by <b><a href="https://metafoxtechnologies.in/" target="_blank">MetaFox Technologies</a></b></p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="social-style1 footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                            <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                            <a href="#"><i class="fab fa-linkedin-in"></i>Linked In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>  


  @endif   