@extends('layouts.frontend')
@section('title','Welcome')
@section('content')

    <!--Banner-->
    <!-- Jssor Slider Begin -->
    <div id="slider_container" style="width: 1190px; height: 600px;">
        <!-- Start loading Screen -->
        <div data-jssor="loading" class="jssor-loading">
            <div class="loading-overlay"></div>
            <div style="loading-image"></div>
        </div>
        <!-- End loading Screen -->

        <!-- Slides Container -->
        <div data-jssor="slides" class="jssor-slide" style="width: 1190px; height: 600px;">
            <div>
                <img data-jssor="image" src="{!! asset('images/slider/slider2.png') !!}" alt="" />
                {{--<div data-jssor="caption" data-trans="T|IB" class="jssor-caption captionHeadline1 captionCenter"  style="left:0; top: 230px; width:1170px">--}}
                    {{--We are a <span>Startup</span> Company--}}
                {{--</div>--}}
                {{--<div data-jssor="caption" data-trans="CLIP|LR" class="jssor-caption captionTextline1 captionCenter"  style="left:0; top: 310px; width:1170px">--}}
                    {{--Build web, graphic, app and brand identity--}}
                {{--</div>--}}
                <div data-jssor="caption" data-trans="MCLIP|T" class="jssor-caption captionButtonlink captionCenter"  style="left:0; top: 380px; width:1170px">
                    <a href="/portfolio" class="btn btn-default btn-icon">View Portfolio <i class="fa fa-link"></i></a> <a href="/services" class="btn btn-default btn-icon">Learn more <i class="fa fa-link"></i></a>
                </div>
            </div>
            <div>
                <img data-jssor="image" src="{!! asset('images/slider/3.jpg') !!}" alt="" />
                <div data-jssor="caption"  data-trans="T|IB" class="jssor-caption captionHeadline1 captionCenter " id="captionCustom" style="text-align:left;left:0; top: 170px; width:1170px">
                   Let us grow your<br>website traffic
                </div>
                <div data-jssor="caption" id="captionTextC" data-trans="CLIP|LR" class="jssor-caption captionTextline1 captionCenter"  style="text-align:left;left:0; top: 290px; width:1170px">
                    We use enterprise strategies to boost your local and worldwide<br> search rankings so your customers can find you when & where<br>they need
                </div>
                <div data-jssor="caption" data-trans="MCLIP|T" id="buttonLink" class="jssor-caption captionButtonlink captionCenter"  style="text-align:left;left:0; top: 400px; width:1170px">
                    <a href="/about-us" class="btn btn-default btn-icon">View our profile <i class="fa fa-user"></i></a> <a href="#" class="btn btn-default btn-icon">Get A Quote <i class="fa fa-link"></i></a>
                </div>
            </div>
        </div>
        <!-- End Container -->

        <!-- Start bullet navigator -->
        <div data-jssor="navigator" class="jssor-navigator">
            <div data-jssor="prototype"></div>
        </div>
        <!--End bullet Navigator -->

        <!-- Start arrow prev and next -->
        <span data-jssor="arrowleft" class="jessor-prev"></span>
        <span data-jssor="arrowright" class="jessor-next"></span>
        <!-- End arrow prev and next -->
    </div>
    <!--Services-->
    <section id="services" class="space one">
        <h4 class="rotate-heading animate-in left-out">services</h4>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 service-block animate-in fade-in">
                    <img src="{!! asset('images/pencil.png') !!}" alt="Six Graphic Design">
                    <h3><a href="#">Graphic Design</a> </h3>
                    <p>We create stunning and professional graphic design that gives your brand great and unique identity.</p>
                </div>
                <div class="col-sm-3 service-block animate-in fade-in">
                    <img src="{!! asset('images/learning.png') !!}" alt="Six App Design">
                    <h3><a href="#">UX & UI</a> </h3>
                    <p>
                        The consumer's first exposure to your brand. A well-executed website requires a perfect balance of innovative design and efficient user experience, driven by an effective branding strategy.</p>
                </div>
                <div class="col-sm-3 service-block animate-in fade-in">
                    <img src="{!! asset('images/computer.png') !!}" alt="Six Reponsive Web Design">
                    <h3><a href="#">Web & Mobile Development</a> </h3>
                    <p>We create highly functional applications for the web & mobile with modern technologies and open-source tools using an iterative, agile methodology.</p>
                </div>

                <div class="col-sm-3 service-block animate-in fade-in">
                    <img src="{!! asset('images/message.png') !!}" alt="Six Search Engine Optimization">
                    <h3><a href="#">Digital Marketing</a> </h3>
                    <p>We provide full service internet marketing for brands and agencies, including search, display, SMS and email advertising.</p>
                </div>
            </div>
        </div>
    </section>
    <!--About us-->
    <section id="about-us" class="one">
        <h4 class="rotate-heading animate-in left-out">About us</h4>
        <div class="container">
            <div class="row">
                <div class="col-sm-7 about-block space animate-in fade-in">
                    <h3>Awesome Strategy, Design & Development.</h3>
                    <p>At PearlStack we go the extra mile to provide excellent stack of software services, with a focus on web, mobile application development and digital marketing. Our offerings cover all stages of the software development life cycle: from business analysis, design, and prototyping to the actual development, quality assurance, and post-project maintenance and support.</p>
                    <a href="{!! url('about-us') !!}" class="btn orange-btn radius-2x hvr-bounce-to-right">Read more about us</a>
                </div>
                <div class="col-sm-5 about-block animate-in fade-in">
                    <img src="{!! asset('images/06.png') !!}" alt="About us">
                </div>
            </div>
        </div>
    </section>
    <!--work-->
    <section id="work" class="space bg orange-overlay" data-stellar-background-ratio="0.6">
        <h4 class="rotate-heading animate-in  left-out">how we work</h4>
        <div class="container">
            <!--main heading-->
            <div class="col-sm-12 main-heading no-padding animate-in move-up">
                <h3 style="color:#fff !important;">We work smartly with our clients</h3>
                <p style="color:#fff !important;">Providing a unique, creative, and technical vision.Beginning with your initial idea,
                    <br>we persevere with the same intensity all the way to the grand launch !</p>
            </div>
            <div class="row">
                <div class="col-sm-4 work-block animate-in move-up">
                    <div class="numbering">1.</div>
                    <div class="work-text">
                        <h4><a>Research</a> </h4>
                        <p> We carry out diligent and systematic inquiry for our clients’ business requirements and provide reliable solutions</p>
                    </div>
                </div>
                <div class="col-sm-4 work-block animate-in move-up">
                    <div class="numbering">2.</div>
                    <div class="work-text">
                        <h4><a>Design</a> </h4>
                        <p>We apply agile methodology ensuring  short time-to-market figures and iterative approach to software development,
                            particularly fit to win the competition in the dynamic online marketplace.</p>
                    </div>
                </div>
                <div class="col-sm-4 work-block animate-in move-up">
                    <div class="numbering">3.</div>
                    <div class="work-text">
                        <h4><a>Launch</a> </h4>
                        <p>After thorough QA has been done ,we launch your project into the digital space giving it a competitive advantage .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolio-->

    <section id="portfolio" class="space-top one">
        <h4 class="rotate-heading animate-in left-out">Our awesome works</h4>

        <div class="container">
            <div class=" col-sm-12 no-padding animate-in move-up">
                <h3>Our Latest Work</h3>
            </div>
            <div class="row">
                <div id="sp-simpleportfolio" class="sp-simpleportfolio sp-simpleportfolio-view-items layout-gallery-space">
                        {{--<div class="sp-simpleportfolio-filter">--}}
                            {{--<ul>--}}
                                {{--<li class="active" data-group="all"><a href="#">All </a></li>--}}
                                {{--<li data-group="graphic"><a href="#">Graphic Design</a></li>--}}
                                {{--<li data-group="web"><a href="#">Web Design </a></li>--}}
                                {{--<li data-group="app"><a href="#">App Design</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        <div class="sp-simpleportfolio-items sp-simpleportfolio-columns-3">
                            @foreach($portfolios as $portfolio)
                            <div class="sp-simpleportfolio-item" data-groups='["graphic"]'>
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img img-responsive" width="360px" height="360px"  src="{{asset('images/portfolios/'.$portfolio->portfolio_image_path)}}" alt="portfolio">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                    <a href="/portfolio">view project</a></h3>
                                                <div class="sp-simpleportfolio-tags">{{$portfolio->portfolioCat->portfolio_title}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-sm-12 button text-center animate-in move-up">
                        <a href="{{ url('portfolio') }}" class="btn radius-2x hvr-sweep-to-right">see more work</a>
                    </div>
                </div>
            </div>

    </section>
    <div class="clearfix one"></div>

    <!-- Testimonials-->
    <section class="testimonial-section sec-padding space">
        <h4 class="rotate-heading animate-in left-out">Testimonials</h4>

        <div class="auto-container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-text">
                        <div class="title animate-in move-up">
                            <h3>What Our<br><span>Customer Says</span></h3>
                            <p>Grow your business and save time experience</p>
                        </div>
                        <hr>
                        <ul class="testimonial-nav-btn list-inline">
                            <li><a href="#testimonial-home-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#testimonial-home-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div id="testimonial-home-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                        @php $count =0; @endphp
                        @foreach($testimonies as $testimony)

                                <div class="item @php if($count ==0) echo 'active' @endphp">
                                    @php ++$count; @endphp

                                <div class="single-testimonial-item animate-in move-up" >
                                    <p><span>{{$testimony->comment}}</span></p>
                                    <div class="info-box">
                                        <div class="img-box">
                                            <img class="img-responsive" width="65" height="65" src="{!! asset('images/testimonial/'.$testimony->thumbnail) !!}" alt="Awesome Image"/>
                                        </div>
                                        <div class="text-box">
                                            <h3>{{$testimony->name}}, {{$testimony->company}}</h3>
                                            <p>{{$testimony->title}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                               ...
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start contain wrapp -->
    <section class="sectioned action bg padding-bot60">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="h2 animate-in move-up animated">Let’s Get Started!</div>
                    <p>If you are looking for a reliable tech partner to kick-start your project or augment your team, let’s see if we could start a mutually beneficial relationship.</p>
                    <a class="btn orange-btn radius-2x hvr-bounce-to-right" href="/request-a-quote">Get a Free Quote </a>
                </div>
            </div>
        </div>
    </section>

    <!-- End contain wrapp -->
    <script type="text/javascript" src="{!! asset('js/jQuery.js') !!}"></script>
    <script src="{!! asset('js/jssor/jssor.slider.min.js') !!}"></script>
    <script src="{!! asset('js/jssor/setting.js') !!}"></script>
@endsection
