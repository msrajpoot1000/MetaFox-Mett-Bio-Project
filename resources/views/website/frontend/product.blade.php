@extends('layouts.frontend.master')

@section('title', 'Allied Print Pack | Solutions')

@section('write')

<style>
    .latest-service__item-icon img {
    width: 220px !important;
    height: 170px !important;
    }
    
    .latest-service__item-icon {
    height: 150px !important;
    }
</style>
<!-- Body main wrapper start -->
<main>

    <div class="breadcrumb__area breadcrumb-space overflow-hidden banner-home-bg ">
        <div class="banner-home__middel-shape inner-top-shape"></div>
        <div class="container">
            <div class="banner-all-shape-wrapper">
                <div class="banner-home__banner-shape-1 first-shape">
                    <img class="upDown-top" src="{{ asset('assets/imgs/banner-1/banner-shape-1.svg') }}" alt="img not found">
                </div>
                <div class="banner-home__banner-shape-2 second-shape">
                    <img class="upDown-bottom" src="{{ asset('assets/imgs/banner-1/banner-shape-2.svg') }}" alt="img not found">
                </div>
                <div class="right-shape">
                    <img class="zooming" src="{{ asset('assets/imgs/inner-img/inner-right-shape.svg') }}" alt="img not found">
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Our Solutions</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Solutions</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service area start -->
    <section class="latest-service__area pt-120 pb-90 p-relative overflow-hidden latest-service-bg">
        <div class="container p-relative">
            <div class="latest-service__all-shape">
                <div class="latest-service__right-shape">
                    <img class="upDown" src="assets/imgs/service/right-shape.svg" alt="img not found">
                </div>
                <div class="latest-service__bg-shape">
                    <img class="upDown" src="assets/imgs/service/service-bg-shape.png" alt="img not found">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="latest-service__title-box mb-40 text-center">
                        <div class="latest-service__title-box-subtitle wow fadeInLeft animated" data-wow-delay=".3s">
                            <h6>Our Main Services</h6>
                        </div>
                        <div class="latest-service__title-box-title wow fadeInLeft animated" data-wow-delay=".4s">
                            <h2>{{ $category->productcategory }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                  @if($products->count())
                  @foreach ($products as $product)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <a href="{{ route('website.frontend.product-details', $product->id) }}">
                        <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay=".4s">
                            <div class="latest-service__item-icon">
                                <img src="{{ asset($product->productimage) }}" alt="img not found">
                            </div>
                            <div class="latest-service__item-title">
                                <h4>{{ $product->heading }}</h4>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                    
                    @else
                        <div class="col-12 text-center">
                            <p>No products found in this category.</p>
                        </div>
                    @endif
            </div>
        </div>
    </section>
    <!-- service area end -->
    
</main>

@endsection   

