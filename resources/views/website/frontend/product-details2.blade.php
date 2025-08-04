@extends('layouts.frontend.master')

@section('title', 'Anterra Commodities | Product Details')

@section('write')


    <div class="stricky-header stricked-menu main-menu">
       <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
    
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('website.frontend.index') }}">Home</a></li>
                    <li>/</li>
                    <li><span>Products Details</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>{{ $product->heading }}</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        
        <section class="container py-5">
            <div class="row align-items-center">
                <!-- Image Section -->
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    
                     <h3 class="mt-3">{{ $product->heading }}</h3>
                    <p class="mb-2"><strong>Botanical Name:</strong> <span style="color: #1f7f5c;">{{ $product->botanicalname }}</span></p>
                    
                    <img src="{{ asset($product->productimage) }}" alt="Cumin Seeds" class="img-fluid rounded shadow-sm">
                    
                    <div>
                        <a href="#" class="btn btn-outline-success mt-3">Get Quote!</a>
                    </div>
                    
                   
                </div>
        
                <!-- Table Section -->
                <div class="col-md-6">
                    <div class="table-responsive shadow-sm">
                        <table class="table table-bordered text-sm table-striped" style="font-size: 15px;">
                            <thead class="table-light">
                                <tr>
                                    <th colspan="2" class="text-center text-success fw-bold">
                                        {{ $product->heading }}  Specifications
                                    </th>
                                </tr>
                            </thead>
                           <tbody>
                               @if($product->botanicalname)
                                 <tr class="border-success"><td class="border-success">Botanical Name</td><td class="border-success">{{ $product->botanicalname }}</td></tr>
                               @endif
                                
                                @if($product->origin)
                                <tr class="border-success"><td class="border-success">Origin</td><td class="border-success">{{ $product->origin }}</td></tr>
                                @endif
                                
                                
                                @if($product->color)
                                    <tr class="border-success"><td class="border-success">Color</td><td class="border-success">{{ $product->color }}</td></tr>
                                @endif
                                
                                 @php $qualities = json_decode($product->quality, true); @endphp
                                      @if(is_array($qualities) && count($qualities))
                                         
                                <tr class="border-success">
                                    <td class="border-success">Quality</td>
                                    <td class="border-success"> 
                                        <ul class="list-unstyled mb-0">
                                             @foreach(json_decode($product->quality) as $q)
                                               <li>{{ $q }}</li>
                                             @endforeach
                                       </ul>
                                    </td>
                                </tr>
                                @endif
                                
                                
                              @php $purities = json_decode($product->purity, true); @endphp
                                 @if(is_array($purities) && count($purities))
                                <tr class="border-success"><td class="border-success">Purity</td>
                                    <td class="border-success">
                                        <ul class="list-unstyled mb-0">
                                            @foreach(json_decode($product->purity) as $p)
                                                <li>{{ $p }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                              @endif
                              
                              
                                @if($product->harvestseason)
                                <tr class="border-success"><td class="border-success">Harvest Season</td><td class="border-success">{{ $product->harvestseason }}</td></tr>
                                @endif
                                
                                 @if($product->shelflife)
                                <tr class="border-success"><td class="border-success">Shelf Life</td><td class="border-success">{{ $product->shelflife }}</td></tr>
                                 @endif
                                
                                
                                 @if($product->packagingoption)
                                <tr class="border-success"><td class="border-success">Packaging Options</td><td class="border-success">{{ $product->packagingoption }}</td></tr>
                                 @endif
                                 
                                 
                                @if($product->minimumorder)
                                <tr class="border-success"><td class="border-success">Minimum Order Quantity (MOQ)</td><td class="border-success">{{ $product->minimumorder }}</td></tr>
                                @endif
                                
                               @php $containers = json_decode($product->containerstuffing, true); @endphp
                               @if(is_array($containers) && count($containers))
                                <tr class="border-success"><td class="border-success">Container Stuffing</td>
                                    <td class="border-success">
                                        <ul class="list-unstyled mb-0">
                                            @foreach(json_decode($product->containerstuffing) as $cs)
                                                <li>{{ $cs }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                               @endif
                               
                                @if($product->producationcapacity)
                                 <tr class="border-success"><td class="border-success">Production Capacity</td><td class="border-success">{{ $product->producationcapacity }}</td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>



        <section class="service-details">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-15">
                        {!! $product->description !!}
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details -->
@endsection 

        