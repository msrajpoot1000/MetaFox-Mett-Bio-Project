@php
    $companyinfos = DB::table('companyinfos')->first();
    $company = \DB::table('companyinfos')->first();
     $categories = DB::table('productcategorys')->get();
@endphp

@if($companyinfos) 
 <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo/' . $companyinfos->logo) }}" alt="" height="16">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo/' . $companyinfos->logo) }}" alt="" height="80" width="180">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo/' . $companyinfos->logo) }}" alt="" height="30">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo/' . $companyinfos->logo) }}" alt="" height="26">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="bx bx-menu align-middle"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu">Dashboard</li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="bx bx-home-alt icon nav-icon"></i>
                                <span class="menu-item" data-key="t-dashboard">Company</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('dashboard') }}" data-key="t-ecommerce">Information</a></li>
                                <li><a href="{{ route('website.admin.homeslider') }}" data-key="t-sales">Home Slider</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="{{ route('website.admin.allbanner') }}">
                                <i class="bx bx-calendar-event icon nav-icon"></i>
                                <span class="menu-item" data-key="t-calendar">All Banner</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('serve') }}">
                                <i class="bi bi-building"></i>
                                <span class="menu-item" data-key="t-calendar">Industry Serve</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('testimonial') }}">
                                <i class="bi bi-chat-left-dots"></i>
                                <span class="menu-item" data-key="t-calendar">Testimonials</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contact.view') }}">
                                <i class="bi bi-telephone"></i>
                                <span class="menu-item" data-key="t-todo">Contact Us</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('website.admin.productcategory') }}">
                                <i class="bi bi-boxes"></i>
                                <span class="menu-item" data-key="t-filemanager">Services Type</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('website.admin.add-product') }}">
                               <i class="bi bi-boxes"></i>
                                <span class="menu-item" data-key="t-filemanager">Services</span>
                            </a>
                        </li>
                        
                         <li>
                           <a href="{{ route('view.about') }}">
                               <i class="bi bi-boxes"></i>
                                <span class="menu-item" data-key="t-filemanager">About Us</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('add.blog') }}">
                               <i class="bi bi-boxes"></i>
                                <span class="menu-item" data-key="t-filemanager">Add Blog</span>
                            </a>
                        </li>
                        
                         <li>
                            <a href="{{ route('add.teacher') }}">
                                <i class="bi bi-boxes"></i>
                                <span class="menu-item" data-key="t-filemanager">Teachers</span>
                            </a>
                        </li>
                        
                         <li>
                            <a href="{{ route('add.certificate') }}">
                                <i class="bi bi-file-earmark-richtext"></i>
                                <span class="menu-item" data-key="t-filemanager">Certifications</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

       <header class="ishorizontal-topbar">
                <div class="topnav">
                    
                </div>
        </header>
        
  @endif        