@extends('layouts.frontend.master')

@section('title', 'Allied Print Pack | Solutions-details')

@section('write')
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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s"> Solutions Details</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ route('website.frontend.index') }}">Home</a></span></li>
                                    <li class="active"><span> Solutions Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service details area start -->
    <section class="section-space service-details__area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="service-details-content">
                        <div class="service-details-content-thumb mb-30">
                             <img src="{{ asset($product->productimage) }}" alt="image not found" class="img-fluid">
                        </div>

                        <h2 class="service-details-content-title">{{ $product->heading }}</h2>

                        <p> {!! $product->description !!} </p>

                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- service details area end -->
</main>
@endsection   




