@extends('layouts.frontend.master')

@section('title', 'Allied Print Pack | About Us')

@section('write')

<style>
    .services__item__thumb {
    background: #feffff !important;
    }
    
    .services__item__thumb img {
        max-width: 70% !important;
    }
    
    .rr-trend-product-5__btn-wrap .button-box .project-filter .list {
        font-size: 16px;
    }
    
    .rr-trend-product-5__thumb img {
        height: 300px !important;
        object-fit: contain !important;
    }
    
</style>

<style>
    .latest-item_thumb::after {
    background: rgb(255 61 0 / 0%) !important;
}
</style>

<main>

    <div class="breadcrumb__area breadcrumb-space overflow-hidden banner-home-bg ">
        <div class="banner-home__middel-shape inner-top-shape"></div>
        <div class="container">
            <div class="banner-all-shape-wrapper">
                <div class="banner-home__banner-shape-1 first-shape">
                    <img class="upDown-top" src="assets/imgs/banner-1/banner-shape-1.svg" alt="img not found">
                </div>
                <div class="banner-home__banner-shape-2 second-shape">
                    <img class="upDown-bottom" src="assets/imgs/banner-1/banner-shape-2.svg" alt="img not found">
                </div>
                <div class="right-shape">
                    <img class="zooming" src="assets/imgs/inner-img/inner-right-shape.svg" alt="img not found">
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">About Us</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="index.html">Home</a></span></li>
                                    <li class="active"><span>About Us</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--latest about start-->
    <section class="latest-about2__area section-space overflow-hidden">
        <div class="container p-relative z-index-1">
            <div class="latest-about2__all-shape">
                <div class="latest-about2__all-shape-bg-shape">
                    <img class="upDown-bottom" src="assets/imgs/latest-about/home-2/about2-bg-shape.svg" alt="img not found">
                </div>
                <div class="latest-about2__all-shape-circle-shape">
                    <img class="zooming" src="assets/imgs/latest-about/home-2/about2-circle-img1.svg" alt="img not found">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="latest-about2__content">
                        <h6 class="latest-about2__content-subtitle">About Us</h6>
                        <h2 class="latest-about2__content-title">Allied Print Pack.</h2>
                        <div class="latest-about2__content-description">
                            <p>
                            At Allied Print Pack, we don’t just print — we bring ideas to life. With decades of experience and a commitment to innovation, we are a leading provider of high-quality printing and packaging solutions serving diverse industries including Food, Pharmaceuticals, FMCG, Cosmetics & Personal Care, Education, Beverages, and Fashion.
                            </p>
                        </div>
                        <div class="latest-about2__content-text">
                            <ul>
                                <li><i class="fa-solid fa-check"></i>World Wide Shipping</li>
                                <li><i class="fa-solid fa-check"></i>Consistent high-quality printing</li>
                                <li><i class="fa-solid fa-check"></i>Assurel quality</li>
                                <li><i class="fa-solid fa-check"></i>Safe online payment</li>
                            </ul>
                            
                        </div>
                       
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="latest-about2__media">
                        <div class="latest-about2__media-img1">
                            <img src="assets/imgs/latest-about/about1.jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="latest-about2__media-img2">
                            <img src="assets/imgs/latest-about/about2.jpg" class="img-fluid" alt="img not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--latest about end-->
    
     <section class="owner__area overflow-hidden section-space question-bg">
    <div id="primary" class="content-area">
        <div class="container p-relative">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="owner-info">
                        <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".1s">Meet Our Founder</h6>
                        <h2 class="title mb-40 wow fadeInLeft animated" data-wow-delay=".2s">Driving Vision Behind Our Success</h2>

                        <div class="wow fadeInLeft animated" data-wow-delay=".3s">
                            <p>Mr. [Owner Name], the visionary behind our company, brings years of experience, innovation, and leadership to the forefront of our operations. With a passion for quality and client satisfaction, he has built a trusted brand in the industry.</p>
                        </div>

                        <ul class="wow fadeInLeft animated mt-3" data-wow-delay=".4s">
                            <li><strong>Experience:</strong> 20+ Years in the Industry</li>
                            <li><strong>Expertise:</strong> Printing, Packaging, & Strategic Planning</li>
                            <li><strong>Vision:</strong> To Deliver Excellence With Innovation</li>
                            <li><strong>Approach:</strong> Customer-Centric and Quality-Driven</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="media">
                        <img data-parallax='{"scale": 1.3, "smoothness": 15}' src="assets/imgs/owner/owner.jpg" alt="Owner Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

       <!-- services-5__area start -->
    <section class="services-5__area section-space position-relative">
          
            <div class="blog-top heading-space2 heading-space5">
                <div class="latest-blog__title-wrapper">
                    <h2 class="title wow fadeInLeft animated ms-4" data-wow-delay=".1s">Industry Served</h2>
                </div>
            </div>
        <div class="container custom-container">
            <div class="swiper services-5__active">
                <div class="swiper-wrapper">
                    @foreach($serves as $serve)
                    <div class="swiper-slide">
                        <div class="services-1__item">
                            <a href="#">
                                <div class="services__item__thumb-border">
                                    <div class="services__item__thumb">
                                        <img src="{{ asset($serve->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="services__item__text text-center">
                                    <h4 class="services__item__title">{{ $serve->name }}</h4>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                     @endforeach
                </div>

            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="banner__navigation banner__navigation-3 services-5__navigation d-none d-lg-block">
            <button class="banner__button-next services-5__button services-5__button-next">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 10H1" stroke="#001D08" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M10 1L1 10L10 19" stroke="#001D08" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <button class="banner__button-prev services-5__button services-5__button-prev">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 10H19" stroke="#001D08" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M10 1L19 10L10 19" stroke="#001D08" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>

        </div>
    </section>


    <!--latest Choose Us start-->
    <section class="latest-Choose-us__area section-space overflow-hidden latest-Choose-bg">
        <div class="container p-relative z-index-1">
            <div class="latest-Choose-us__all-shape">
                <div class="latest-Choose-us__bg-shape">
                    <img class="upDown img-fluid" src="assets/imgs/choose-us/bg-shape.svg" alt="img not found">
                </div>
                <div class="latest-Choose-us__bag-shape">
                    <img class="zooming img-fluid" src="assets/imgs/choose-us/bag-shape.png" alt="img not found">
                </div>
             
            </div>
            <div class="latest-Choose-us__media-experience-box d-flex" data-parallax='{"y": -160, "smoothness": 15}'>
                <div class="title">
                    <h3><span class="count">10</span>+</h3>
                    <h4>Years</h4>
                </div>
                <div class="description">
                    <p>Of experience in printing service</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="latest-Choose-us__content mb-40">
                        <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".3s">Why Choose Us</h6>
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Why People Choose Allied Print Pack?</h2>
                        <p class="wow fadeInLeft animated" data-wow-delay=".2s">
                         People choose Allied Print Pack for its commitment to quality, innovation, and timely delivery. With advanced technology, customized packaging solutions, and eco-friendly practices, the company stands out in the printing industry. Trusted by many brands, Allied Print Pack ensures excellence in every print, making it a preferred packaging partner.
                        </p>

                        <div class="latest-Choose-us__content-text d-flex">
                            <div class="latest-Choose-us__content-text-box wow fadeInLeft animated" data-wow-delay=".2s">
                                <ul>
                                    <li><i class="fa-solid fa-circle-check"></i>High-quality</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Timely Delivery</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Custom Packs</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Eco-Friendly</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Advanced Technology</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Trusted Brand</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <div class="latest-Choose-us__media d-flex flex-row">
                        <div class="latest-Choose-us__media-img1">
                            <img src="assets/imgs/choose-us/hands.jpg" alt="image not found" class="img-fluid">
                        </div>
                        <div class="latest-Choose-us__media-img2">
                            <img src="assets/imgs/choose-us/working.jpg" alt="image not found" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--latest Choose Us end-->
    
    <!-- latest-team area start -->
    <section class="latest-team__area overflow-hidden section-space latest-team-bg">
        <div class="container">
            <div class="team-top heading-space">
                <div class="latest-team__title-wrapper">
                    <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".2s">Our Team</h6>
                    <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Meet Our Team Member</h2>
                </div>
                <div class="latest-team__button-right  wow fadeInRight animated" data-wow-delay=".3s">
                    <button class="small-btn  right-icon team__slider-button-prev">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 17L1 9L9 1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="small-btn team__slider-button-next">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 17L9 9L1 1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="row p-relative">
                <div class="col-12">
                    <div class="latest-team__item margin-minus-400 mb-30">
                        <div class="swiper card-slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay=".4s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Designer</h5>
                                            <h4>Arron Rodri</h4>
                                        </div>
                                      <div class="latest-item_thumb">
                                      
                                            <img src="assets/imgs/latest-team/letest-team-img1.jpg" alt="images not found" class="img-fluid">
                                       
                                      </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay=".8s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Operator</h5>
                                            <h4>Stifen Simons</h4>
                                        </div>
                                        <div class="latest-item_thumb">
                                            
                                                <img src="assets/imgs/latest-team/letest-team-img2.jpg" alt="images not found" class="img-fluid">
                                            
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.2s">
                                    <div class="latest-team__item-media">
                                       
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Senior Desinger</h5>
                                           <h4>Josephine Ava</h4>
                                        </div>
                                        <div class="latest-item_thumb">
                                           
                                                <img src="assets/imgs/latest-team/letest-team-img3.jpg" alt="images not found" class="img-fluid">
                                          
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.6s">
                                    <div class="latest-team__item-media">
                                    
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Designer</h5>
                                           <h4>William Mark</h4>
                                        </div>
                                        <div class="latest-item_thumb">
                                           
                                                <img src="assets/imgs/latest-team/letest-team-img4.jpg" alt="images not found" class="img-fluid">
                                            
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Operator</h5>
                                            <h4>Stifen Simons</h4>
                                        </div>
                                        <div class="latest-item_thumb">
                                           
                                                <img src="assets/imgs/latest-team/letest-team-img2.jpg" alt="images not found" class="img-fluid">
                                            
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-team area end -->
</main>

@endsection   
