
@extends('layouts.frontend.master')

@section('title', 'Achieve Grade 9 | Expert GCSE & A-Level Tutoring for Top Results')

@section('write')


<style>
    #heading1 {
    font-size: 25px;
    color: #dc0559;
    }
    
    #heading2 {
    font-size: 40px !important;
    color: black;
    }
    
    .hero-layout1 .hero-text {
    color: #000000 !important;
    }
    
    .hero-bg {
    background-size: contain !important;
    }
    
    .hero-inner {
    min-height: 499px !important;  
    }
    
    .vs-btn.style3 i, .vs-btn.style5 i {
        background-color:#dc0559 !important;
    }
    
    .vs-btn.style3, .vs-btn.style5 {
    outline: 2px solid #dc0559 !important;
    }
    
    .vs-btn:before, .vs-btn:after {
    background-color: #e313594a !important;
  
    }
    
    .vs-btn.style8 i {
    background-color: #e313594a !important;
    }
    
    .title-area3 .sec-subtitle {
    color: #dc0559 !important;
    }
    
    .sec-subtitle.style1::after {
    background-color: #dc0559 !important;

    }
    
    .sec-subtitle.style1::before {
    background-color:#dc0559 !important;
    }
    
    .category-style1 .category-img:before {
    background-color: #d5183899 !important;
    }
    
    #tssent {
    background-color: #da1144 !important;
    }
    
    .testi-style1 {
        background: linear-gradient(66.85deg, #8f278b 0%, #bd1fca 39%, #e5008d 100%) !important;
    }
    
    .cta-style2 .cta-title {
            color: #000000 !important;
    }
        
    .cta-layout1 .cart-subtitle {
    color: #2f2929 !important;
    }    
    
    .play-btn2:after, .play-btn2:before {
         border: 4px solid #e20842 !important;
    }
    
    .play-btn2 {
    background-color: #eb2764 !important;
    }
    
    
    .list-style4 li:before {
          background-color: #ffcc33e0 !important;
        }
        
    .blog-meta span i, .blog-meta a i {
    color: #ff3783 !important;
    }
    
    .blog-layout1 .blog-style2 .link-btn i {
    color: #ff3783 !important;

    }
    
    .blog-style2:hover {
    border-color: #ff3783 !important;
    }
    
    .team-style1:hover, .slick-center .team-style1 {
    border: 2px solid #ff3783 !important;
    }
    
    @media (max-width: 991px) {
    .hero-bg {
        background-size: cover !important;
    }
    
    }
</style>

 <section>
        <div class="vs-carousel hero-layout1 style2" data-fade="true" data-dots="true">
              @foreach($sliders as $slider)
            <div>
                <div class="hero-inner">
                    <div class="hero-bg" data-bg-src="{{ asset($slider->homesliderimage) }}"></div>
                    <div class="container">
                        <div class="hero-content">
                            <h1 class="hero-title animated" id="heading1">{{ $slider->heading1 }}</h1>
                            <h1 class="hero-title animated"id="heading2">{{ $slider->heading2 }}</h1>
                            <p class="hero-text animated">{{ $slider->description }}</p>
                            <div class="hero-btns animated">
                                <a href="course.html" class="vs-btn style5 text-dark"><i class="far fa-angle-right"></i>Explore Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    </section>
    <!--==============================
    About Area
    ==============================-->
     <section class="about-layout1 space-top space-bottom">
        <div class="container">
            <div class="row align-items-center align-items-xxl-start">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="picture-box2">
                        
                        <div class="picture-1 mega-hover"><img src="assets/img/about/class.png" alt="About Img"></div>
                        <div class="picture-2 mega-hover"><img src="assets/img/about/About-01-1.png" alt="About Img"></div>
                        <div class="picture-3 mega-hover"><img src="assets/img/about/About-02-1.png" alt="About Img"></div>
                        
                        <div class="vs-circle"></div>
                    </div>
                    <div class="shape-mockup jump d-none d-xxxl-block" style="top: 10%; right: 0%;">
                        <img src="assets/img/shape/about-shep2.png" alt="shep">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="about-box2">
                        <div class="title-area3">
                            <span class="sec-subtitle">WELCOME TO Achieve Grade 9</span>
                            <h2 class="about-title h1">ABOUT US <span></span></h2>
                        </div>
                        <div class="about-content style2">
                            <p class="fs-md">At<b> Achieve Grade 9</b>, we are committed to delivering high-quality education and empowering students to reach their full academic potential. Founded by an experienced UK-qualified teacher with over a decade of teaching expertise, our institute blends subject knowledge with deep insights into the examination process.
                            </p>
                            
                             <p class="fs-md">
                               With a strong foundation in <b>Physics, Chemistry, and Biology</b> , and a <b>First-Class Master's degree in Chemistry</b>, our founder has also worked as an examiner for one of the UK’s largest examination boards. This experience gives our team a unique understanding of how to guide students to achieve top marks.
                            </p>
                            
                              <p class="fs-md">
                                Since 2009, we have helped students excel in <b> GCSEs and A-Levels</b>, with a focus on clarity, confidence, and critical thinking. At Achieve Grade 9, we don’t just teach—we inspire. Our lessons go beyond the curriculum to accelerate learning and instill a lasting passion for knowledge.
                            </p>
                            
                            <p class="fs-md">
                                Whether you're preparing for GCSE Science, Maths, or A-Level Chemistry and Physics, <b> Achieve Grade 9</b> is here to support your academic journey every step of the way.
                            </p>

                            <div class="hero-btns animated">
                                <a href="course.html" class="vs-btn style5 text-dark"><i class="far fa-angle-right"></i>Get More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump-img d-none d-xxl-block" style="bottom: 10%; left: 8%;">
            <img src="assets/img/shape/about-shep1.png" alt="shep">
        </div>
        <div class="shape-mockup jump d-none d-xxxl-block" style="top: 10%; right: 16%;">
            <img src="assets/img/shape/about-shep3.png" alt="shep">
        </div>
    </section>
    
    
    <!--==============================
    Category Area
    ==============================-->
    <section class="category-layout1 space-bottom" data-bg-src="assets/img/bg/category-bg.png">
        <div class="container">
            <div class="title-area3 text-center wow fadeInUp" data-wow-delay="0.3s">
                <span class="sec-subtitle style1">our Top Courses</span>
                <h2 class="sec-title">Browse Popular Courses</h2>
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.4s" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="2" data-center-mode="true">
               @foreach($categories as $category)
                <div class="col-6 col-lg-4 col-xl-3">
                    <a href="course.html">
                        <div class="category-style1">
                            <div class="category-img">
                                <img class="w-100" src="{{ asset($category->productcategoryimage) }}" alt="category">
                            </div>
                            <div class="category-content">
                                <h5 class="category-title">{{ $category->productcategory }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--==============================
    CTA Area
    ==============================-->
    <section class="space-top cta-layout1 space-bottom" data-bg-src="assets/img/bg/tech.jpg">
        <div class="container">
            <div class="cta-style2">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="cta-content">
                            <p class="cta-text">Browse Top Courses​</p>
                            <h2 class="cta-title h1">online quality <span>tutors</span> affordable</h2>
                            <span class="cart-subtitle"><img src="assets/img/icon/arraw-ico.svg" alt="icon">Emphasize the importance of building a solid understanding of the basic concepts in triple science.</span>
                            <span class="cart-subtitle"><img src="assets/img/icon/arraw-ico.svg" alt="icon">
                                Teach students problem-solving strategies that will help them tackle complex scientific problems effectively.
                            </span>
                            <span class="cart-subtitle"><img src="assets/img/icon/arraw-ico.svg" alt="icon">Introduce mindfulness techniques to help students manage stress and maintain focus during their studies.</span>
                           <div class="hero-btns animated">
                                <a href="course.html" class="vs-btn style5 text-dark"><i class="far fa-angle-right"></i>Get More Info</a>
                            </div>
                        </div>
                        <div class="shape-mockup jump d-none d-xxxl-block" style="top: 10%; right: 2%;">
                            <img src="assets/img/shape/hero-shape-3-1.svg" alt="shep">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cta-img">
                            <img src="assets/img/bg/about1.png" alt="About Img">
                            <a href="https://www.youtube.com/watch?v=cf1du-K4qyU" class="play-btn2 popup-video position-center"><i class="fas fa-play"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump d-none d-xxxl-block" style="bottom: 30%; left: 10%;">
            <img src="assets/img/shape/cta-shep1.png" alt="shep">
        </div>
    </section>
    <!--==============================
    Course Area
    ==============================-->
    
    
    <!--==============================
      Testimonial Area
    ==============================-->
  <!-- =========================================
     Testimonials + Contact Form (side‑by‑side)
========================================== -->
<section class="testi-contact-area overflow-hidden space-top space-extra-bottom"
         data-bg-src="assets/img/bg/testi-bg-1-1.jpg">
    <div class="container">
        
         <div class="title-area3 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <span class="sec-subtitle style1">our testimonial</span>
                    <h2 class="sec-title">happy students feedback</h2>
                </div>
        <div class="row gy-5 gx-5 align-items-start">

            <!-- ===== Left: Testimonials ===== -->
            <div class="col-lg-7">
                <div class="vs-carousel"
                     data-dots="true"
                     data-slide-show="1"
                     data-lg-slide-show="1"
                     data-md-slide-show="1"
                     data-sm-slide-show="1">
            
                    <!-- Testimonial item 1 -->
                      @foreach ($testimonials as $testimonial)
                    <div class="testi-style1">
                        <div class="testi-content">
                            <span class="testi-icon2"><i class="fas fa-quote-left"></i></span>
                            <p class="testi-text">
                                {{ $testimonial->feedback }}
                            </p>
                        </div>
                        <div class="testi-client">
                            <!--<img src="assets/img/testimonial/testimonial-2-1.png" alt="author">-->
                            <h3 class="testi-name h5">{{ $testimonial->user }}</h3>
                            
                            <div class="testi-rating">
                               @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $testimonial->rating)
                                            <i class="fas fa-star text-warning"></i>
                                        @else
                                            <i class="far fa-star text-muted"></i>
                                        @endif
                                        
                                    @endfor
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>


            <!-- ===== Right: Contact form only ===== -->
            <div class="col-lg-5">
                <form action="{{ route('testimonial.store') }}" class="form-style5" method="POST" novalidate>
                     @csrf
                    <div class="vs-circle"></div>
                    <h3 class="form-title">Your Feedback</h3>

                    <div class="form-group">
                        <input type="text" name="user" id="user" placeholder="Your Name">
                    </div>
        
                    <div class="form-group">
                          <select name="rating" id="rating" class="form-control" required>
                            <option value="">Select Rating</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="feedback" id="feedback" placeholder="Write your message"></textarea>
                    </div>

                    <button type="submit" class="vs-btn style8 mt-2" id="tssent">
                        <i class="far fa-angle-right"></i>Send 
                    </button>

                    <p class="form-messages">
                        <span class="sr-only">For message will display here</span>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

    <section class="" data-bg-src="assets/img/bg/intro.jpg">
            <div class="container">
                <div class="row align-items-center text-center text-lg-start">
                    <div class="col-lg-5 col-xl-6 space-extra">
                        <h2 class="sec-title text-white mb-3">Expert instruction</h2>
                        <p class="fs-md text-white">Find the right instructor for you from over 10,000 teachers</p>
                        <div class="row gx-60 mb-4 pb-xl-3 text-start justify-content-center justify-content-lg-start">
                            <div class="col-auto col-lg-12 col-xl-auto">
                                <div class="list-style4 vs-list ">
                                    <ul class="list-unstyled m-0">
                                        <li>Hand-picked authors</li>
                                        <li>Easy to follow curriculum</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto col-lg-12 col-xl-auto">
                                <div class="list-style4 vs-list ">
                                    <ul class="list-unstyled m-0">
                                        <li>Free courses</li>
                                        <li>Money-back guarantee</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="team.html" class="vs-btn style5"><i class="far fa-angle-right"></i>Find Our Teachers</a>
                    </div>
                    <div class="col-lg-7 col-xl-6 align-self-end">
                        <div class="img-box2">
                            <div class="vs-circle"></div>
                            <img class="img-1" src="assets/img/about/expert.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!--<section class="faq-layout1 space">-->
    <!--    <div class="container">-->
    <!--        <div class="row gx-50">-->
    <!--            <div class="col-lg-12 col-xl-8 mb-40 mb-lg-0">-->
    <!--                <div class="title-area wow fadeInUp text-center text-lg-start" data-wow-delay="0.1s">-->
    <!--                    <span class="sec-subtitle">FAQ'S</span>-->
    <!--                    <h2 class="sec-title h1">Frequently Asked Questions</h2>-->
    <!--                </div>-->
    <!--                <div class="accordion-style1 wow fadeInUp" data-wow-delay="0.2s">-->
    <!--                    <div class="accordion" id="faqVersion1">-->
    <!--                        <div class="accordion-item">-->
    <!--                            <div class="accordion-header" id="headingOne">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What Makes Achieve Grade 9 different from others?</button>-->
    <!--                            </div>-->
    <!--                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqVersion1">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <p>We provide world-class science tutoring through live online and face-to-face sessions, designed to enhance students' comprehension of science at an accelerated pace. Our approach features interactive teaching methods, a robust support system, and a well-structured course that consistently attracts new students to choose our services. Rest assured, your child will be equipped with everything necessary for academic success.</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item">-->
    <!--                            <div class="accordion-header" id="headingTwo">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How I can enrol?</button>-->
    <!--                            </div>-->
    <!--                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqVersion1">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <p>There are 2 ways to enrol, there is an enrolment form on the website and through a phone call on mobile no 07405607000.</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item active">-->
    <!--                            <div class="accordion-header" id="headingThree">-->
    <!--                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do you do a trial?</button>-->
    <!--                            </div>-->
    <!--                            <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#faqVersion1">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <p>We do not offer trial lessons, but we do conduct free child assessments to determine knowledge gaps in various subjects. Based on the assessment results, I create a personalized learning program. Additionally, we offer a free feedback session of 30-40 minutes where I teach students how to fill the knowledge gaps. This feedback session serves as a type of trial lesson</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item">-->
    <!--                            <div class="accordion-header" id="headingFour">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Is this better than other online tuition providers?</button>-->
    <!--                            </div>-->
    <!--                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqVersion1">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <p>Our group tuition stands out from others in several key ways. Firstly, we provide small group lessons with a maximum of four students, unlike others who teach more than 15-20 students in a group, which is more like a school class where students are reluctant to ask questions. Our small group classes are interactive and reciprocal, and we provide a higher frequency of lessons each week to GSCE/A level students, enabling them to complete the content in a shorter timeframe.-->
                                            
    <!--                                        Our unique structure includes office hours for immediate help, regular assessment and feedback sessions, 1:1 mentoring on weak topics, and exam techniques, revision classes, predicted papers, free help to A-level subject guidance, and Uni identification based on the child's interest. Our emphasis on finishing content in advance transforms school into revision, placing students ahead of their peers. With our meticulously crafted syllabus, each week and lesson serves a specific purpose.-->
                                            
    <!--                                        Importantly, you're learning directly from me; I'm not associated with any other company and don’t engage other teachers to teach you.-->
    <!--                                        </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="accordion-item">-->
    <!--                            <div class="accordion-header" id="headingFive">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Is this mixed abilities?</button>-->
    <!--                            </div>-->
    <!--                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqVersion1">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <p>We work with students at the grade 5 level to help them get towards an 8/9*. Even if your child is at an 8, they'd still greatly benefit.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
                            
    <!--                        <div class="accordion-item">-->
    <!--                            <div class="accordion-header" id="headingFive">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">When should I start science Tuition to achieve grade 9?</button>-->
    <!--                            </div>-->
    <!--                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqVersion1">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <p>Enrolling your child immediately is very beneficial. The earlier they join, especially if it meets your preferences, the better. This will help them to quickly address any gaps in their knowledge and move efficiently through the course content. This will leave them with ample time to practice past papers and revise the material thoroughly.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
                            
    <!--                         <div class="accordion-item">-->
    <!--                            <div class="accordion-header" id="headingFive">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Will my child be able to ask questions?</button>-->
    <!--                            </div>-->
    <!--                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqVersion1">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <p>Certainly. Our lessons are designed to be interactive with direct questions being asked to each student. In our small group classes, students can ask questions at any time. Additionally, they can request help on any topic of science during our office hours and in their strategic one-on-one calls.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
                            
    <!--                         <div class="accordion-item">-->
    <!--                            <div class="accordion-header" id="headingFive">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What do you charge and how do I pay?</button>-->
    <!--                            </div>-->
    <!--                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqVersion1">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <p>Our fees depend on the age group of your child. To make it easier for parents, we offer the option to pay by standing order. This spreads out the payments evenly across the year. You will need to pay at the beginning of each month by either setting up a standing order or making a direct bank transfer.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
                            
    <!--                        <div class="accordion-item">-->
    <!--                            <div class="accordion-header" id="headingFive">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How long are the sessions?</button>-->
    <!--                            </div>-->
    <!--                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqVersion1">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <p>Standard tuition sessions are 1 hour long, but GCSE and A-level students receive 1.5 to 2 hours based on the program they enrolled in.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
                            
    <!--                         <div class="accordion-item">-->
    <!--                            <div class="accordion-header" id="headingFive">-->
    <!--                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Do you open in the holidays?</button>-->
    <!--                            </div>-->
    <!--                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqVersion1">-->
    <!--                                <div class="accordion-body">-->
    <!--                                    <p>Yes, we offer sessions during holidays except for Christmas. In addition, we provide extra tuition in the form of a crash course during the Easter holidays to help students who are struggling with particular topics.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
                        
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-7 col-lg-12"style="margin-top:120px;">-->
    <!--                        <div class="img-box5 mega-hover wow fadeInUp" data-wow-delay="0.3s">-->
    <!--                            <div class="img-1"><img class="w-100" src="assets/img/about/faq.jpg" alt="About Img"></div>-->
    <!--                            <div class="box-content">-->
    <!--                                <h3 class="img-title">Online Course Registration</h3>-->
    <!--                                <p class="img-text">Top 20 courses among our 1350+ free online courses by experts</p>-->
    <!--                                <a href="contact.html" class="vs-btn">Apply Today</a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-5 col-lg-12">-->
    <!--                        <div class="media-style5 mb-0 wow fadeInUp" data-wow-delay="0.4s">-->
    <!--                            <span class="icon"><img src="assets/img/icon/user-icon.svg" alt="icon"></span>-->
    <!--                            <h5 class="media-title">Admission Process</h5>-->
    <!--                            <a class="phone" href="+8156415000"><i class="fal fa-phone-alt"></i>815-641-5000</a>-->
    <!--                            <a class="mail" href="mailto:support@education.com"><i class="fal fa-envelope"></i>support@education.com</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section> -->
    
    
      <section class="space-top space-extra-bottom">
        <div class="container">
            
              <div class="title-area3 text-center">
                <span class="sec-subtitle style1">IDEAL TUTOR FOR EVERYONE</span>
                <h2 class="sec-title h1">Qualified Teachers</h2>
            </div>
            <div class="row vs-carousel wow fadeInUp gx-40" data-wow-delay="0.4s" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="2" data-center-mode="true">
                
                @foreach($teachers as $teacher)
                <div class="col-sm-6 col-lg-4">
                    <div class="team-style1">
                        <div class="team-img">
                            <img class="w-100" src="{{ asset($teacher->image) }}" alt="teacher">
                        </div>
                        <div class="team-content">
                            <div class="team-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <h4 class="team-name"><a href="team-details.html">{{ $teacher->name }}</a></h4>
                            <p class="team-degi">{{ $teacher->expert ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
    </section> 
    
     <!--==============================
      Blog Area
    ==============================-->
    <section class="blog-layout1 space" data-bg-src="assets/img/bg/blog-bg1.jpg">
        <div class="container">
            <div class="title-area3 text-center">
                <span class="sec-subtitle style1">BLOG AND UPDATES</span>
                <h2 class="sec-title h1">Our Blog</h2>
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.4s" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1">
                @foreach($allBlogs as $blog)
                <div class="col-sm-6 col-xl-4">
                    <div class="vs-blog blog-style2">
                        <div class="blog-img">
                            <a href="{{ route('blog.details', $blog->id) }}"><img class="w-100" src="{{ asset('uploads/' . $blog->image) }}" alt="Blog Img"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-user-circle"></i>{{ $blog->user }}</a>
                                <a href="blog.html"><i class="fal fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($blog->date)->format('F d, Y') }}</a>
                            </div>
                            <h4 class="blog-title h5"><a href="blog-details.html"> {{ Str::limit(strip_tags($blog->heading), 50) }}</a></h4>
                            <div class="blog-btn">
                                <a href="{{ route('blog.details', $blog->id) }}" class="link-btn">Read More<i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
    </section> 
    
    <section class="space-top space-extra-bottom" data-bg-src="assets/img/bg/blog-single-divider-bg-1-1.jpg">
        <div class="container">
            <div class="row justify-content-between text-center text-lg-start">
                <div class="col-lg-6 mb-40 mb-lg-0">
                    <h2 class="mt-n2 h2 mb-3">Future Learn’s Purpose is to transform access to education.</h2>
                    <p class=" mb-4 pb-2 fs-md col-xl-11">Sign up to our newsletter and we'll send fresh new courses and special offers direct to your inbox, once a week.</p>
                   
                    <div class="hero-btns animated">
                                <a href="course.html" class="vs-btn style5 text-dark"><i class="far fa-angle-right"></i>Get a Quote</a>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="sec-line2"></div>
                </div>
                <div class="col-lg-auto">
                    <h6 class="mt-n1">Academic Leadership Team</h6>
                    <div class="mini-avater">
                        <a href="team-details.html"><img src="assets/img/team/team-s-1-1.png" alt="avater"></a>
                        <a href="team-details.html"><img src="assets/img/team/team-s-1-2.png" alt="avater"></a>
                        <a href="team-details.html"><img src="assets/img/team/team-s-1-3.png" alt="avater"></a>
                        <a href="team-details.html"><img src="assets/img/team/team-s-1-4.png" alt="avater"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection  