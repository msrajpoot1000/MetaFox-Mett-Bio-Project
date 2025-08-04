

@extends('layouts.frontend.master')

@section('title', 'Mett Bio | information')

@section('write')
 
 
  <style>
      .about .col-right .content-about p {
        padding-bottom: 26px;
        font-weight: 500;
        font-size: 19px;
        text-align: justify;
        }
    
        .text-p, p {
        color: #282a2c !important;
        }
        
            
        .icon img {
        max-width: 25%;
         }
    
    .title p {
    color: #36393e !important;
    font-size: 17px;
    text-align: justify;
    }
    
    .service-page .service {
     padding: 45px 0 0px;
    }
    
    .rounded-ends {
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
    
}

  .col-right::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('assets/images/img/galvanics.png') }}'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.40;
            z-index: 0; 
            pointer-events: none; 
        }
    
  </style>

    <section class="flat-title-page inner">
        <div class="overlay"></div>
        <div class="container-TFL">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="heading">Information Page</h1>
                        <ul class="text-color-2 breadcrumbs">
                            <li><a href="index.html">Home</a></li>
                            <li class="action">Information Page</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="about h2">
        <div class="overlay"></div>
        <div class="container-TFL">
            
            <div class="title-section style2 mb29 tfanimated text-center">
                <h1 class="title" style="color:black;">Galvanic Corrosion – Medical Implants</h1>
            </div>
            
            <div class="row">
                 
                <div class="wrap-abouth2">
                 <div class="col-left col-style wow zoomIn">
                    <img src="{{ asset('assets/images/img/infoss.png') }}" alt="Labaid" class="img-fluid rounded-ends">
                </div>
                    <div class="col-right col-style wow fadeInUp">
                        
                        <div class="content-about tfanimated">
                           
                            <p class="txt-transform">
                                The test method is a standardized procedure used to 
                                evaluate galvanic corrosion between dissimilar metals in 
                                medical devices, particularly in modular implants such as 
                                orthopedic joint replacements. This test is significant 
                                because it simulates physiological conditions to assess the 
                                potential for corrosion when different metallic components 
                                come into contact within the human body. Galvanic corro
                                sion can compromise the structural integrity and biocom
                                patibility of implants, potentially leading to device failure or 
                                adverse biological reactions. 
                            </p>
                            
                              <p class="txt-transform">
                                    Manufacturers can ensure device safety, longevity, and 
                                    regulatory compliance through reliable, reproducible 
                                    corrosion testing.
                            </p>
                            
                            <p class="txt-transform">
                                 The test method for evaluating the potential for galvanic corrosion in implantable medical devices made from 
                                 dissimilar metals. This test is essential as such devices may experience electrical contact between different 
                                metal components, which can lead to galvanic corrosion. This phenomenon can result in the release of harmful 
                                corrosion products or compromise the structural integrity of the device, posing significant risks to patient safety. 
                            </p>
                            
                              <p class="txt-transform">
                                 The test  standard provides a systematic approach to assess the susceptibility of these devices to galvanic 
                                corrosion, thereby informing manufacturers about potential risks and guiding them in designing safer medical 
                                implants. 
                            </p>
                        </div>
                          
                    </div>
                </div>
              
            </div>
            
            <div class="service h2">
                <div class="overlay"></div>
                <div class="container-TFL">
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-12 col-sm-12 ">
                            <div class="wrap-service wow fadeInUp">
                                <div class="icon"><img src="{{ asset('assets/images/img/bone.png') }}" alt="Labaid" id="serve"></div>
                                <div class="title">
                                    <h4>Orthopedic Implants </h4>
                                    <p>Hip and knee replacements using different metals are assessed to prevent galvanic reactions.</p>
                                </div>
                            </div>
                        </div>   
                        
                        <div class="col-lg-4 col-md-12 col-sm-12 ">
                           <div class="wrap-service wow fadeInUp">
                                <div class="icon"><img src="{{ asset('assets/images/img/dental.png') }}" alt="Labaid" id="serve"></div>
                                <div class="title">
                                    <h4>Dental Implants</h4>
                                    <p>Dental metal alloys are tested to ensure compatibility and avoid corrosion issues.</p>
                                </div>
                            </div>
                        </div>   
                        
                        <div class="col-lg-4 col-md-12 col-sm-12 ">
                            <div class="wrap-service wow fadeInUp">
                                <div class="icon"><img src="{{ asset('assets/images/img/defibrillator.png') }}" alt="Labaid" id="serve"></div>
                                <div class="title">
                                    <h4>Cardiovascular Devices</h4>
                                    <p>Stents and pacemakers are tested to prevent corrosion-related failures and risks.</p>
                                </div>
                            </div>
                         </div>    
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

 @endsection         
   

