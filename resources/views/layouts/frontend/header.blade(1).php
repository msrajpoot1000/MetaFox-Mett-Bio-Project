@php
    $companyinfos = DB::table('companyinfos')->first();
    $company = \DB::table('companyinfos')->first();
    $categories = DB::table('productcategorys')->get();
    $serves = DB::table('serves')->get();
@endphp
  
@if($companyinfos) 

  <style>
      .header-layout2 .sticky-active {
    
        background: linear-gradient(66.85deg, #8f278b 0%, #bd1fca 39%, #e5008d 100%) !important;
    
    .vs-btn.style6 {
        border: 2px solid #ed0c0cfa !important;
        background-color: #ed0c0cfa !important;
    }
    
    vs-btn:before, .vs-btn:after {
    background-color: #990c0c !important;
}
  </style>
  <!--==============================
    Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="{{ asset('assets/images/logo/' . $companyinfos->logo) }}" alt="Educino"></a>
            </div>
              
         
                        
            <div class="vs-mobile-menu">
                <ul>
                    <li>
                        <a href="{{ route('website.frontend.index') }}">Login</a>
                    </li>
                    
                    <li>
                        <a href="{{ route('website.frontend.index') }}">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="course.html">Courses</a>
                        <ul class="sub-menu">
                            <li><a href="course.html">Courses 1</a></li>
                            <li><a href="courses-2.html">Courses 2</a></li>
                            <li><a href="course-details.html">Courses Details 1</a></li>
                            <li><a href="course-details-2.html">Courses Details 2</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="team.html">Our Tutors</a></li>
                            <li><a href="team-details.html">Tutor Details</a></li>
                            <li><a href="become-tutor.html">Become Tutor</a></li>
                            <li><a href="find-tutor.html">Find Tutor</a></li>
                            <li><a href="academic.html">Academic</a></li>
                            <li><a href="academic-program.html">Academic Program</a></li>
                            <li><a href="program-details.html">Program Details</a></li>
                            <li><a href="find-program.html">Find Program</a></li>
                            <li><a href="event-details.html">Event Details</a></li>
                            <li><a href="login-register.html">Login Register</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
               
            </div>
        </div>
    </div>
    <!--==============================
    Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
    Header Area
    ==============================-->
    <header class="vs-header header-layout2">
       
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container position-relative z-index-common">
                    <div class="row gx-50 align-items-center justify-content-between">
                        <div class="col-auto col-xl align-self-stretch">
                            <div class="vs-logo style2">
                                <a href="index.html"><img src="{{ asset('assets/images/logo/' . $companyinfos->logo) }}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu menu-style3 d-none d-lg-block">
                                <ul>
                                    <li> <a href="{{ route('website.frontend.index') }}">Home</a> </li>
                                    <li> <a href="about.html">About Us</a> </li>
                                    <li class="menu-item-has-children">
                                        <a href="course.html">Courses</a>
                                        <ul class="sub-menu">
                                             @foreach($categories as $category)
                                            <li><a href="course.html">{{ $category->productcategory }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    
                                    <li> <a href="about.html">Mock Exam</a> </li>
                                    
                                    <li> <a href="about.html">Predicated Papers</a> </li>
                                    
                                    <li> <a href="about.html">Free Resources</a> </li>
                                    
                                    <li> <a href="about.html">Blogs</a> </li>
                                    
                                    <li> <a href="about.html">Contact</a> </li>
                                    
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-btns style2">
                                    <button type="button" class="searchBoxTggler"><i class="far fa-search"></i></button>
                                    <a href="{{ route('login') }}" class="vs-btn style6">Login</a>
                                
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </header>

 @endif   