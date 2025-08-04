    @extends('layouts.frontend.master')

    @section('title', 'Mett Bio')
    @section('style')
        <style>
            #serve {
                height: 250px;
            }

            .cat-service:hover {
                background-color: #3764EB !important;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.06) !important;
            }


            .service-page .service .wrap-service .title .h4 {
                color: #142441 !important;
            }

            .wrap-service.cat-service:hover .title a.h4 {
                color: #fff !important;
            }

            .service-page .service .wrap-service .title p {
                color: #9AA5B3 !important;
            }


            .desc a {
                font-size: 22px;
                font-weight: 500;
            }

            .about .col-right .content-about p {
                padding-bottom: 25px !important;
                text-align: justify !important;
            }

            .about-img {

                max-width: 70% !important;
            }


            .team-mb .wrap-team .image img {
                object-fit: contain !important;
            }


            #service-image {
                height: 100px !important;
            }


            .home2 .about {
                padding-bottom: 10px !important;
            }


            .service-page .service {
                padding: 70px 0 50px !important;
            }

            .about .team-mb {
                padding: 0px 0 50px !important;
            }

            .service-page .skill {
                padding: 0px 0 0px !important;
            }


            /* Blue color for Swiper navigation buttons */
            .swiper-button-next::after,
            .swiper-button-prev::after {
                color: blue;
                font-size: 24px;
                /* optional: make icons a bit larger */
            }

            @media (max-width: 767.98px) {
                .aboutcatagory {
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                }

                .desc {
                    margin-top: 10px !important;
                    margin-left: 0 !important;
                }

                .txt-transform {
                    text-align: center;
                }
            }

            .swiper-new img{
                 width:4rem;
            }
        </style>

    @endsection

    @section('write')

        <!-- title page -->
        <section class="slider home">
            <div class="swiper-container-TFL  mainslider">
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                        <div class="swiper-slide">
                            <div class="slider-item">
                                <div class="flat-slider">
                                    <div class="img-slider">
                                        <img class="img-item" src="{{ asset($slider->homesliderimage) }}" alt="Labaid">
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="container-TFL">
                                        <div class="row">
                                            <div class="content">
                                                <div class="heading">
                                                    <h1>{{ $slider->heading1 }} {{ $slider->heading2 }}</h1>
                                                    <p>{{ $slider->description }}</p>
                                                </div>
                                                <div class="flat-bt-slider">
                                                    <div class="sc-btn-slide">
                                                        <a href="contact.html" class="sc-button btn-1 btn-2"><span>+
                                                                Contact
                                                                Us
                                                            </span></a>
                                                        <p>Have A Nice
                                                            Day Save Jone!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="input-box flat-bt-slider">
                                                    <div class="wrap-title">
                                                        <h6>Contact Us and Get An Appointment.</h6>
                                                    </div>
                                                    <form action="#" class="book-app-select">
                                                        <select class="form-select1" aria-label="Default select example">
                                                            <option selected>Biochemics</option>
                                                            <option value="Biochemics">Biochemics</option>
                                                            <option value="Biochemics2">Biochemics 2</option>
                                                            <option value="Biochemics3">Biochemics 3</option>
                                                        </select>
                                                        <select class="form-select2" aria-label="Default select example">
                                                            <option selected>Location</option>
                                                            <option value="Biochemics1">Paris</option>
                                                            <option value="Biochemics2">London</option>
                                                        </select>
                                                        <select class="form-select2" aria-label="Default select example">
                                                            <option selected>05/08/2023-2</option>
                                                            <option value="Biochemics1">05/02/2023</option>
                                                            <option value="Biochemics2">02/08/2023-</option>
                                                        </select>
                                                        <input type="text" placeholder="infor@gmail.com">
                                                        <button class="btn-form" type="submit">+ Book
                                                            Appointment</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- about section  --}}
        <section class="about h2">
            <div class="overlay"></div>
            <div class="container-TFL">
                <div class="row">
                    @if ($about)
                        <div class="wrap-abouth2">
                            <div class="col-left col-style wow zoomIn"><img src="{{ asset($about->image1) }}"
                                    alt="Labaid">
                            </div>
                            <div class="col-right col-style wow fadeInUp">

                                <div class="content-about tfanimated">
                                    <div class="title-section style2 mb29 tfanimated">
                                        <h6 class="sub-title"><span>About us </span></h6>
                                        <h1 class="title">{{ $about->heading }}</h1>
                                    </div>
                                    <p class="txt-transform">
                                        {!! $about->description !!}
                                    </p>

                                    <div class="about">
                                        <div class="aboutsection d-flex">
                                            <div class="icon-box st1  col-lg-6">
                                                <div class="aboutcatagory">
                                                    <div class="img">
                                                        <img src="{{ asset($about->image2) }}" alt="Labaid"
                                                            class="about-img">
                                                    </div>
                                                    <div class="desc" style="margin-top:15px; margin-left: 5px;"><a
                                                            href="about.html">Our mission</a></div>
                                                </div>

                                                <p class="txt-transform">
                                                    {{ $about->our_mission_description }}
                                                </p>
                                            </div>
                                            <div class="icon-box st2  col-lg-6">
                                                <div class="aboutcatagory">
                                                    <div class="img style">
                                                        <img src="{{ asset($about->image3) }}" alt="Labaid"
                                                            class="about-img">
                                                    </div>
                                                    <div class="desc" style="margin-top:23px;"><a href="about.html">Our
                                                            Vision</a></div>
                                                </div>
                                                <p class="txt-transform">
                                                    {{ $about->our_vision_description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button wr">
                                        <a href="about.html">+ More About Us</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <section class="service-st wow fadeInUp">
            <div class="container-TFL">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="service-st-swiper box-shadow swiper-container swiper-new">
                            <div class="swiper-wrapper">
                                <div class="wrap-service swiper-slide">
                                    <div class="image"><img src="assets/images/icon/home/service-h1-1-hv.png"
                                            alt="Labaid">
                                    </div>
                                    <div class="title">
                                        <a href="service-detail.html" class="h6">Fast TurnAround</a>
                                    </div>
                                </div>
                                <div class="wrap-service action swiper-slide">
                                    <div class="image"><img src="assets/images/icon/home/service-h1-2.png" alt="Labaid">
                                    </div>
                                    <div class="title">
                                        <a href="service-detail.html" class="h6">Certified Accuracy</a>
                                    </div>
                                </div>
                                <div class="wrap-service swiper-slide">
                                    <div class="image"><img src="assets/images/icon/home/deep-insight.png"
                                            alt="Labaid">
                                    </div>
                                    <div class="title">
                                        <a href="service-detail.html" class="h6">Deep Insight</a>
                                    </div>
                                </div>
                                <div class="wrap-service swiper-slide">
                                    <div class="image"><img src="assets/images/icon/home/tail-sol.png"
                                            alt="Labaid">
                                    </div>
                                    <div class="title">
                                        <a href="service-detail.html" class="h6">Tailored Solutions</a>
                                    </div>
                                </div>
                                <div class="wrap-service swiper-slide">
                                    <div class="image"><img src="assets/images/icon/home/sus-focus.png"
                                            alt="Labaid">
                                    </div>
                                    <div class="title">
                                        <a href="service-detail.html" class="h6">Sustainability Focus</a>
                                    </div>
                                </div>
                                <div class="wrap-service swiper-slide">
                                    <div class="image"><img src="assets/images/icon/home/expert-focus.png"
                                            alt="Labaid">
                                    </div>
                                    <div class="title">
                                        <a href="service-detail.html" class="h6">Expert Focus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="service h2">
            <div class="overlay"></div>
            <div class="container-TFL">
                <div class="row">
                    @foreach ($serves as $serve)
                        <div class="col-lg-4 col-md-12 col-sm-12 ">
                            <div class="wrap-service wow fadeInUp">
                                <div class="icon"><img src="{{ asset($serve->image) }}" alt="Labaid"
                                        id="serve">
                                </div>
                                <div class="title">
                                    <h4>{{ $serve->name }}
                                    </h4>
                                    <p>{{ $serve->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="team-mb wow fadeInUp">
            <div class="container-TFL">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="group">
                                <h3>Your Quick Snapshot of Accreditations, Certifications & Quality Commitments.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="team-mb-swiper box-shadow swiper-container">
                            <div class=" swiper-wrapper">
                                @foreach ($certificates as $certificate)
                                    <div class="wrap-team swiper-slide">
                                        <div class="image"><img src="{{ asset($certificate->certificateimage) }}"
                                                alt="Labaid"></div>
                                        <div class="title">
                                            <a href="team-mb.html" class="h5">{{ $certificate->name }}</a>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="service">
            <div class="overlay"></div>
            <div class="container-TFL">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="group">
                                <h3>Our Services in Spotlight </h3>
                                <p>
                                    Our multidisciplinary team pairs field-proven methods with cutting-edge
                                    instrumentation to deliver clear, actionable insights at every stage of your
                                    material’s life cycle.
                                </p>
                            </div>
                        </div>

                    </div>
                    @foreach ($categories as $category)
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 d-flex">
                            <a href="service-detail.html">
                                <div
                                    class="wrap-service cat-service  flex-column justify-content-between p-3 border rounded w-100 shadow-sm">
                                    <div class="icon mb-3 text-center">
                                        <img src="{{ $category->productcategoryimage }}" alt="Labaid"
                                            class="img-fluid" style="max-height: 100px;">
                                    </div>
                                    <div class="title mt-auto text-center">
                                        <a href="service-detail.html"
                                            class="h4 d-block mb-2">{{ $category->productcategory }}</a>
                                        <p>{{ $category->product_category_description }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="choose">
            <div class="overlay"></div>
            <div class="container-TFL">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-left col-style wow fadeInUp">
                            <div class="content-choose tfanimated">
                                <div class="title-section style2 mb29 tfanimated">
                                    <h6 class="sub-title"><span>Why Choose Us?</span> </h6>
                                    <h1 class="title">
                                        Our Success Journey, Powered by Core Values.
                                    </h1>
                                </div>
                                <p class="txt-transform">
                                    At the heart of everything we do lies a commitment to excellence, innovation and
                                    integrity. By living these six
                                    core values every day, we deliver superior outcomes for our clients and partners.
                                </p>

                                <div class="wrap-icon-box">
                                    <div class="icon-box st1">
                                        <div class="img">
                                            <img src="assets/images/icon/home/chooseh1-1.png" alt="Labaid">
                                        </div>
                                        <div class="desc"><a href="about.html">Ingenuity</a></div>
                                    </div>
                                    <div class="icon-box st2">
                                        <div class="img style">
                                            <img src="assets/images/icon/home/chooseh1-2.png" alt="Labaid">
                                        </div>
                                        <div class="desc"><a href="about.html">Service First</a></div>
                                    </div>
                                </div>
                                <div class="wrap-icon-box">
                                    <div class="icon-box st1">
                                        <div class="img">
                                            <img src="assets/images/icon/home/chooseh1-3.png" alt="Labaid">
                                        </div>
                                        <div class="desc"><a href="about.html">Commitment</a></div>
                                    </div>
                                    <div class="icon-box st2">
                                        <div class="img style">
                                            <img src="assets/images/icon/home/chooseh1-4.png" alt="Labaid">
                                        </div>
                                        <div class="desc"><a href="about.html">Trust
                                            </a></div>
                                    </div>
                                </div>
                                <div class="wrap-icon-box">
                                    <div class="icon-box st1">
                                        <div class="img">
                                            <img src="assets/images/icon/home/chooseh1-5.png" alt="Labaid">
                                        </div>
                                        <div class="desc"><a href="about.html">Excellence</a></div>
                                    </div>
                                    <div class="icon-box st2">
                                        <div class="img style">
                                            <img src="assets/images/icon/home/chooseh1-6.png" alt="Labaid">
                                        </div>
                                        <div class="desc"><a href="about.html">Safety
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-right col-style wow zoomIn"><img src="assets/images/icon/home/latest.jpg"
                                alt="Labaid">
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="skill">
            <div class="container-TFL">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 tf-counter">
                        <div class="tf-counter ">
                            <div class="wrap-couter animated-effect tfanimated wrap-counter">
                                <div class="box-couter st1 flat-counter content counter">
                                    <div class="number-content">
                                        <span class="timer count-title number" data-to="10" data-speed="2000"
                                            data-inviewport="yes">31.2</span>+
                                    </div>
                                    <p>Years of excellence in metallurgical and corrosion testing.</p>
                                </div>

                                <div class="box-couter counter st3 flat-counter content counter">
                                    <div class="number-content">
                                        <span class="timer count-title number" data-to="150" data-speed="2000"
                                            data-inviewport="yes">2.3</span>+
                                    </div>
                                    <p>Specialized testing and analysis services under one roof.</p>
                                </div>
                                <div class="box-couter counter st2 content counter">
                                    <div class="number-content ">
                                        <span class="timer count-title number" data-to="10" data-speed="2000"
                                            data-inviewport="yes">50</span>K
                                    </div>
                                    <p>Satisfied clients across Energy, oil & gas, automotive, and more.</p>

                                </div>
                                <div class="box-couter counter st3 flat-counter content counter">
                                    <div class="number-content">
                                        <span class="timer count-title number" data-to="24" data-speed="2000"
                                            data-inviewport="yes">31.2</span>/7
                                    </div>
                                    <p>Dedicated support for testing and consultation.</p>

                                </div>

                                <div class="box-couter counter st3 flat-counter content counter">
                                    <div class="number-content">
                                        <span class="timer count-title number" data-to="99" data-speed="2000"
                                            data-inviewport="yes">31.2</span>.99%
                                    </div>
                                    <p>On-time delivery</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="lt-blog wow fadeInUp">
            <div class="container-TFL">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner">
                            <div class="group">
                                <h3>Industry we serve</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="post-box-swiper box-shadow swiper-container position-relative">
                            <div class="swiper-wrapper">
                                @foreach ($allBlogs as $blog)
                                    <div class="post-box swiper-slide">
                                        <div class="box-img">
                                            <a href="blogdetail.html">
                                                <img src="{{ asset('uploads/' . $blog->image) }}" alt="Labaid"
                                                    class="img-fluid" />
                                            </a>
                                        </div>
                                        <div class="content-post wr">
                                            <h5><a href="blogdetail.html">{{ $blog->heading }}</a></h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Pagination Dots -->
                            <div class="swiper-pagination"></div>

                            <!-- Navigation Buttons -->
                            <div class="swiper-button-prev" style="color: blue;"></div>
                            <div class="swiper-button-next" style="color: blue;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
