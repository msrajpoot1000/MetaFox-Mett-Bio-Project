@extends('layouts.frontend.master')

@section('title', 'Allied Print Pack | Our Team')

@section('write')


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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Our Team</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="index.html">Home</a></span></li>
                                    <li class="active"><span>Team</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- latest-team area start -->
    <section class="latest-team__area overflow-hidden main-team__area section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-team__title-wrapper text-center mb-40">
                        <h6 class="main-team__title-wrapper-subtitle">Our Team</h6>
                        <h2 class="main-team__title-wrapper-title">Meet Our Team Member</h2>
                    </div>    
                </div>
            </div>
            <div class="row p-relative mb-minus-30">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                        <div class="latest-team__item-media">
                            
                            <div class="latest-team__item-media-img-title title">
                                <h5>Designer</h5>
                                <h4>Arron Rodri</h4>
                            </div>
                          <div class="latest-item_thumb">
                                <img src="assets/imgs/latest-team/letest-team-img1.jpg" alt="images not found" class="img-fluid">
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class=" latest-team__item-slide wow fadeInLeft animated" data-wow-delay=".8s">
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

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class=" latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.2s">
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
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class=" latest-team__item-slide wow fadeInLeft animated" data-wow-delay=".8s">
                        <div class="latest-team__item-media">
                           
                            <div class="latest-team__item-media-img-title ">
                                <h5>Operator</h5>
                               <h4>Michael David</h4>
                            </div>
                            <div class="latest-item_thumb">
                        
                                   <img src="assets/imgs/latest-team/letest-team-img5.jpg" alt="images not found" class="img-fluid">
                                
                              </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="latest-team__item-slide item-3  wow fadeInLeft animated" data-wow-delay=".4s">
                        <div class="latest-team__item-media">
                           
                            <div class="latest-team__item-media-img-title title">
                                <h5>Designer</h5>
                               <h4>Savannah Zoe</h4>
                            </div>
                          <div class="latest-item_thumb">
                            
                                <img src="assets/imgs/latest-team/letest-team-img6.jpg" alt="images not found" class="img-fluid">
                            
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class=" latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.2s">
                        <div class="latest-team__item-media">
                           
                            <div class="latest-team__item-media-img-title ">
                                <h5>Senior Desinger</h5>
                                <h4>William Mark</h4>
                            </div>
                            <div class="latest-item_thumb">
                              
                                    <img src="assets/imgs/latest-team/letest-team-img7.jpg" alt="images not found" class="img-fluid">
                                
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
