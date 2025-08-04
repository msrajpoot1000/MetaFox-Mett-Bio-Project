@php
    $companyinfos = DB::table('companyinfos')->first();
    $company = \DB::table('companyinfos')->first();
    $categories = DB::table('productcategorys')->get();
    $serves = DB::table('serves')->get();
@endphp

<style>
    /* Submenu positioning */
    .menu-item-has-children {
        position: relative;
    }

    /* First level dropdown */
    .sub-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: white;
        min-width: 200px;
        z-index: 999;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Show submenu on hover */
    .menu-item-has-children:hover>.sub-menu {
        display: block;
    }

    /* Sub-submenu flyout (to right) */
    .sub-menu .menu-item-has-children>.sub-menu {
        top: 0;
        left: 100%;
    }

    /* Ensure sub-submenu is hidden by default */
    .sub-menu .menu-item-has-children>.sub-menu {
        display: none;
    }

    /* Show sub-submenu on hover */
    .sub-menu .menu-item-has-children:hover>.sub-menu {
        display: block;
    }

    .subsubmenu-arrow {
        font-size: 2rem;
        color: black;
        margin-right: 0.5rem;
    }

    .SubSubItems {
        display: none;
        position: absolute;
        top: 0;
        left: 100%;
        min-width: 200px;
        background: white;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        z-index: 999;
    }

    /* Show the SubSubItems when hovering on the <a> */
    .subCat:hover+.SubSubItems {
        display: block;
    }
</style>

@if ($companyinfos)
    <div id="top-bar-bt">
        <div class="container-TFL">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="inner flex-one">
                        <div id="site-logo-left" class="clearfix">
                            <div id="site-logo-inner">
                                <a href="index.html" rel="home" class="main-logo">
                                    <img id="logo_header" src="{{ asset('assets/images/logo/' . $companyinfos->logo) }}"
                                        alt="img" width="146" height="65">
                                </a>
                            </div>
                        </div>
                        <div class="top-bar-content">
                            <h5 class="content-center" style="diaplay:flex;flex-direction:row"><a class="text-color-3"
                                    href="#">
                                    <div class="social">
                                        <div class="wrap-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <!--<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>

                                                <li style=""><a href="tel:{{ $companyinfos->phone }}"
                                                        style="">
                                                        <span>Call Me At </span><span
                                                            style="font-weight: bold">{{ $companyinfos->phone }}</span></a>
                                                </li>

                                            </ul>

                                        </div>

                                    </div>
                                    {{-- <div class="wrap-call">
                                        <h4>Call Me <a href="tel:{{ $companyinfos->phone }}">+
                                                {{ $companyinfos->phone }}</a></h4>
                                    </div> --}}
                                </a></h5>

                            {{-- <h5 class="content-center"><a class="text-color-3" href="#">Accreditation</a></h5> --}}
                        </div>
                        <div class="top-bar-right bt">

                            {{-- <h6 class="content-right"><a class="text-color-4 bf" href="cart.html">My Cart</a>
                            </h6> --}}

                        </div>
                        <div class="flat-button-top">
                            <a href="contact.html" class="sc-button btn-1"><span>+ Get Appointed
                                </span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <header id="header_main" class="header_1 js-header">
        <div class="container-TFL">
            <div class="row">
                <div class="col-md-12">
                    <div id="site-header-inner">
                        <div class="wrap-box relative">
                            <div class="logo-mobile"><img src="{{ asset('assets/images/logo/' . $companyinfos->logo) }}"
                                    alt="Labaid"></div>
                            <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                            <nav id="main-nav" class="main-nav">
                                <ul id="menu-primary-menu" class="menu">

                                    <li class="menu-item">
                                        <a href="/">Home</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="/">About Us</a>
                                    </li>

                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Our Business</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="shop.html">Testing</a></li>
                                            <li class="menu-item"><a href="shopdetail.html">Inspection & Survey</a></li>
                                            <li class="menu-item"><a href="checkout.html">Failure Analysis</a></li>
                                            <li class="menu-item"><a href="cart.html">Research & Development</a></li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="cart.html" class="subCat">Bespoke Product</a>
                                                <ul Class="SubSubItems">
                                                    <li class="menu-item"><a href="custom-design.html">Custom Design</a>
                                                    </li>
                                                    <li class="menu-item"><a href="material-selection.html">Material
                                                            Selection</a></li>
                                                    <li class="menu-item"><a href="prototype-development.html">Prototype
                                                            Development</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item">
                                        <a href="/">Sustainabilty</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="/">Quality Policy</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('website.frontend.information') }}"><span>
                                                Industry-Certified</span></a>
                                    </li>

                                    {{-- <li class="menu-item">
                                        <a href="{{ route('website.frontend.information') }}">Information</a>
                                    </li> --}}


                                    {{-- <li class="menu-item menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="service-page.html">Service</a></li>
                                            <li class="menu-item"><a href="service-detail.html">Service
                                                    Details</a></li>
                                        </ul>
                                    </li> --}}

                                    {{-- <li class="menu-item menu-item-has-children">
                                        <a href="#">Research</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="research.html">Research</a></li>
                                            <li class="menu-item"><a href="research-single.html">Research-single</a>
                                            </li>

                                        </ul>
                                    </li> --}}

                                    {{-- <li class="menu-item menu-item-has-children  ">
                                        <a href="#">Page</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item "><a href="about.html">About</a>
                                            </li>
                                            <li class="menu-item"><a href="faq.html">FAQ Page</a></li>
                                            <li class="menu-item"><a href="team-mb.html">Team Member</a></li>
                                            <li class="menu-item"><a href="journal.html">Journal Article</a>
                                            </li>
                                            <li class="menu-item"><a href="our-book.html">Our Books</a>
                                            </li>
                                            <li class="menu-item"><a href="testimonials.html">Testimonials</a>
                                            </li>
                                            <li class="menu-item"><a href="whychoose.html">Why Choose</a></li>
                                            <li class="menu-item"><a href="careerspage.html">Careers</a>
                                            </li>
                                        </ul>
                                    </li> --}}

                                    {{-- <li class="menu-item menu-item-has-children ">
                                        <a href="#">Blogs</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="bloggrid.html">Blog</a></li>
                                            <li class="menu-item"><a href="blogdetail.html">Blog Details</a>
                                            </li>
                                            <li class="menu-item"><a href="blogstandard.html">Blog Standard</a>
                                            </li>
                                        </ul>
                                    </li> --}}



                                    <li class="menu-item">
                                        <a href="contact.html">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Career</a>
                                    </li>
                                </ul>
                            </nav><!-- /#main-nav -->


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
@endif
