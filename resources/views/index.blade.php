@extends('layouts.master')
@section('content')
    <!--End Main Header -->
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
                <img data-jssor="image" src="{!! asset('images/01/2.jpg') !!}" alt=""/>
                <div data-jssor="caption" data-trans="T|IB" class="jssor-caption captionHeadline1 captionCenter"  style="left:0; top: 230px; width:1170px">
                Welcome to <span>Sense of value Security</span> Services
                </div>
                <div data-jssor="caption" data-trans="CLIP|LR" class="jssor-caption captionTextline1 captionCenter"  style="text-align:center;left:0; top: 350px; width:1170px">
                    SECURITY IS NOT THE MEANING OF LIFE,<br> GREAT OPPORTUNITIES ARE WORTH THE RISK
                </div>
                <div data-jssor="caption" data-trans="MCLIP|T" class="jssor-caption captionButtonlink captionCenter"
                     style="left:0; top: 450px; width:1000px">
                     <a href="/portfolio" class="btn btn-default btn-icon">View Portfolio <i class="fa fa-link"></i></a> <a href="/services" class="btn btn-default btn-icon">Learn more <i class="fa fa-link"></i></a>
                </div>
            </div>
            <div>
                <img data-jssor="image" src="{!! asset('images/01/3.jpg') !!}" alt=""/>
                <div data-jssor="caption" data-trans="T|IB" class="jssor-caption captionHeadline1 captionCenter "
                     id="captionCustom" style="text-align:left;left:0; top: 170px; width:1170px">
                    Let us grow your<br>website traffic
                </div>
                <div data-jssor="caption" id="captionTextC" data-trans="CLIP|LR"
                     class="jssor-caption captionTextline1 captionCenter"
                     style="text-align:left;left:0; top: 290px; width:1170px">
                    We use enterprise strategies to boost your local and worldwide<br> search rankings so your customers
                    can find you when & where<br>they need
                </div>
                <div data-jssor="caption" data-trans="MCLIP|T" id="buttonLink"
                     class="jssor-caption captionButtonlink captionCenter"
                     style="text-align:left;left:0; top: 400px; width:1170px">
                    <a href="/about-us" class="btn btn-default btn-icon">View our profile <i class="fa fa-user"></i></a>
                    <a href="/request-a-quote" class="btn btn-default btn-icon">Get A Quote <i
                                class="fa fa-link"></i></a>
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
    <!-- Jssor Slider End -->

    <section class="kc-elm kc-css-974618 kc_row">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-959983 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container"><!--Inquiry Form-->
                        <section class="inquiry-section wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="auto-container">
                                <h3>CONTACT US FOR INQUIRY</h3>
                                <!--Inquiry Form-->
                                <div class="inquiry-form">
                                    <div role="form" class="wpcf7" id="wpcf7-f19-p7-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action=""
                                              method="post" class="wpcf7-form" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="19"/>
                                                <input type="hidden" name="_wpcf7_version" value="4.6.1"/>
                                                <input type="hidden" name="_wpcf7_locale" value="en_US"/>
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f19-p7-o1"/>
                                                <input type="hidden" name="_wpnonce" value="3507524e83"/>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                                    <div class="group-inner"><label class="icon-label"
                                                                                    for="field-one"><span
                                                                    class="flaticon-social"></span></label><span
                                                                class="wpcf7-form-control-wrap text-285"><input
                                                                    type="text" name="text-285" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    id="field-one" aria-required="true"
                                                                    aria-invalid="false" placeholder="Name *"/></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                                    <div class="group-inner"><label class="icon-label"
                                                                                    for="field-two"><span
                                                                    class="flaticon-business-1"></span></label><span
                                                                class="wpcf7-form-control-wrap email-12"><input
                                                                    type="email" name="email-12" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                    id="field-two" aria-required="true"
                                                                    aria-invalid="false" placeholder="Email *"/></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                                    <div class="group-inner"><label class="icon-label"
                                                                                    for="field-three"><span
                                                                    class="flaticon-smartphone"></span></label><span
                                                                class="wpcf7-form-control-wrap text-286"><input
                                                                    type="text" name="text-286" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text"
                                                                    id="field-three" aria-invalid="false"
                                                                    placeholder="Phone"/></span></div>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                                    <div class="group-inner"><span
                                                                class="wpcf7-form-control-wrap menu-607"><select
                                                                    name="menu-607"
                                                                    class="wpcf7-form-control wpcf7-select"
                                                                    aria-invalid="false"><option value="Interested In">Interested In</option><option
                                                                        value="Option One">Option One</option><option
                                                                        value="Option Two">Option Two</option><option
                                                                        value="Option Three">Option Three</option></select></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                                    <div class="group-inner"><label class="icon-label" for="field-four"><span
                                                                    class="flaticon-speech-bubble-1"></span></label><span
                                                                class="wpcf7-form-control-wrap textarea-751"><textarea
                                                                    name="textarea-751" cols="40" rows="10"
                                                                    class="wpcf7-form-control wpcf7-textarea"
                                                                    id="field-four" aria-invalid="false"
                                                                    placeholder="Your Comments"></textarea></span></div>
                                                </div>
                                                <div class="submit-btn form-group col-md-4 col-sm-12 col-xs-12"><input
                                                            type="submit" value="SEND INQUIRY"
                                                            class="wpcf7-form-control wpcf7-submit theme-btn btn-style-three"/>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div>
                                <!--End Inquiry Form-->
                            </div>
                        </section>
                        <!--End Inquiry Form--></div>
                </div>
            </div>
        </div>
    </section>
    <section class="kc-elm kc-css-518619 kc_row">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-373269 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">


                        <!--Services Section Two-->
                        <section class="services-section-two">
                            <div class="auto-container">
                                <div class="sec-title">
                                    <h2>OUR BEST SERVICES</h2>
                                    <div class="text">The Love Boat promises something for everyone now to beat every of
                                        just one
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <!--Service Block Three-->
                                    <div class="service-block-three col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="image-layer"
                                                 style="background-image: url({{asset('images/01/service-block-three-bg.jpg')}});"></div>
                                            <!--Icon Box-->
                                            <div class="icon-box">
                                                <span class="icon fa fa-renren"></span>
                                            </div>
                                            <h3><a href="#">SECURITY CONSULTING</a></h3>
                                            <div class="text">The Love Boat promises something for beat of just one drum
                                                a young loner on crusade to champion innocent.
                                            </div>
                                        </div>
                                    </div>
                                    <!--Service Block Three-->
                                    <div class="service-block-three col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="image-layer"
                                                 style="background-image: url({{asset('images/01/service-block-three-bg.jpg')}});"></div>
                                            <!--Icon Box-->
                                            <div class="icon-box">
                                                <span class="icon fa fa-eye"></span>
                                            </div>
                                            <h3><a href="#">CLOSE PROTECTIONS</a></h3>
                                            <div class="text">The Love Boat promises something for beat of just one drum
                                                a young loner on crusade to champion innocent.
                                            </div>
                                        </div>
                                    </div>
                                    <!--Service Block Three-->
                                    <div class="service-block-three col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="image-layer"
                                                 style="background-image: url({{asset('images/01/service-block-three-bg.jpg')}});"></div>
                                            <!--Icon Box-->
                                            <div class="icon-box">
                                                <span class="icon fa fa-user"></span>
                                            </div>
                                            <h3><a href="#">INVESTIGATIONS</a></h3>
                                            <div class="text">The Love Boat promises something for beat of just one drum
                                                a young loner on crusade to champion innocent.
                                            </div>
                                        </div>
                                    </div>
                                    <!--Service Block Three-->
                                    <div class="service-block-three col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="image-layer"
                                                 style="background-image: url({{asset('images/01/service-block-three-bg.jpg')}});"></div>
                                            <!--Icon Box-->
                                            <div class="icon-box">
                                                <span class="icon fa fa-lock"></span>
                                            </div>
                                            <h3><a href="#">PRIVATE SECURITY</a></h3>
                                            <div class="text">The Love Boat promises something for beat of just one drum
                                                a young loner on crusade to champion innocent.
                                            </div>
                                        </div>
                                    </div>
                                    <!--Service Block Three-->
                                    <div class="service-block-three col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="image-layer"
                                                 style="background-image: url({{asset('images/01/service-block-three-bg.jpg')}});"></div>
                                            <!--Icon Box-->
                                            <div class="icon-box">
                                                <span class="icon fa fa-mobile"></span>
                                            </div>
                                            <h3><a href="#">DEFENSE TRAINING</a></h3>
                                            <div class="text">The Love Boat promises something for beat of just one drum
                                                a young loner on crusade to champion innocent.
                                            </div>
                                        </div>
                                    </div>
                                    <!--Service Block Three-->
                                    <div class="service-block-three col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="image-layer"
                                                 style="background-image: url({{asset('images/01/service-block-three-bg.jpg')}});"></div>
                                            <!--Icon Box-->
                                            <div class="icon-box">
                                                <span class="icon fa fa-check-square-o"></span>
                                            </div>
                                            <h3><a href="#">GUARD HOUSE</a></h3>
                                            <div class="text">The Love Boat promises something for beat of just one drum
                                                a young loner on crusade to champion innocent.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--End Services Section Two-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<section class="kc-elm kc-css-709565 kc_row">--}}
        {{--<div class="kc-row-container">--}}
            {{--<div class="kc-wrap-columns">--}}
                {{--<div class="kc-elm kc-css-108834 kc_col-sm-12 kc_column kc_col-sm-12">--}}
                    {{--<div class="kc-col-container">--}}


                        {{--<!--Advantage Section-->--}}
                        {{--<section class="advantage-section"--}}
                                 {{--style="background-image:url('{{asset('images/01/1-1.jpg')}}');">--}}
                            {{--<div class="auto-container">--}}
                                {{--<!--Sec Title Two-->--}}
                                {{--<div class="sec-title-two">--}}
                                    {{--<h2>OUR ADVANTAGES</h2>--}}
                                    {{--<div class="text">The Love Boat promises something for everyone now to beat every of--}}
                                        {{--just one--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--End Sec Title Two-->--}}

                                {{--<div class="row clearfix">--}}

                                    {{--<!--Advantage Block-->--}}
                                    {{--<div class="advantage-block col-md-4 col-sm-6 col-xs-12">--}}
                                        {{--<div class="inner-box wow fadeIn" data-wow-delay="0ms"--}}
                                             {{--data-wow-duration="1500ms">--}}
                                            {{--<figure class="image-box">--}}
                                                {{--<a href="#"><img width="370" height="270"--}}
                                                                 {{--src="{{asset('images/01/adventure-1.jpg')}}"--}}
                                                                 {{--class="attachment-370x270 size-370x270 wp-post-image"--}}
                                                                 {{--alt=""--}}
                                                                 {{--srcset="{{asset('images/01/adventure-1.jpg')}} 370w,{{asset('images/1.jpg')}} 300w"--}}
                                                                 {{--sizes="(max-width: 370px) 100vw, 370px"/></a>--}}
                                                {{--<div class="icon-box"><span class="icon fa fa-headphones"></span></div>--}}
                                            {{--</figure>--}}
                                            {{--<div class="lower-content">--}}
                                                {{--<div class="inner">--}}
                                                    {{--<h3><a href="#">24/7 CONSTANT SUPPORT</a></h3>--}}
                                                    {{--<div class="text">The Love Boat promises something for the beat--}}
                                                        {{--every of just one drum.--}}
                                                    {{--</div>--}}
                                                    {{--<a class="read-more" href="#">READ MORE <span--}}
                                                                {{--class="icon fa fa-arrow-right"></span></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!--Advantage Block-->--}}
                                    {{--<div class="advantage-block col-md-4 col-sm-6 col-xs-12">--}}
                                        {{--<div class="inner-box wow fadeIn" data-wow-delay="0ms"--}}
                                             {{--data-wow-duration="1500ms">--}}
                                            {{--<figure class="image-box">--}}
                                                {{--<a href="#"><img width="370" height="270"--}}
                                                                 {{--src="{{asset('images/01/adventure-2.jpg')}}"--}}
                                                                 {{--class="attachment-370x270 size-370x270 wp-post-image"--}}
                                                                 {{--alt=""--}}
                                                                 {{--srcset="{{asset('images/01/adventure-2.jpg')}} 370w, {{asset('images/adventure-2-300x219.jpg')}} 300w"--}}
                                                                 {{--sizes="(max-width: 370px) 100vw, 370px"/></a>--}}
                                                {{--<div class="icon-box"><span class="icon fa fa-star-o"></span></div>--}}
                                            {{--</figure>--}}
                                            {{--<div class="lower-content">--}}
                                                {{--<div class="inner">--}}
                                                    {{--<h3><a href="#">BEST PROFESSIONAL</a></h3>--}}
                                                    {{--<div class="text">The Love Boat promises something for the beat--}}
                                                        {{--every of just one drum.--}}
                                                    {{--</div>--}}
                                                    {{--<a class="read-more" href="#">READ MORE <span--}}
                                                                {{--class="icon fa fa-arrow-right"></span></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!--Advantage Block-->--}}
                                    {{--<div class="advantage-block col-md-4 col-sm-6 col-xs-12">--}}
                                        {{--<div class="inner-box wow fadeIn" data-wow-delay="0ms"--}}
                                             {{--data-wow-duration="1500ms">--}}
                                            {{--<figure class="image-box">--}}
                                                {{--<a href="#"><img width="370" height="270"--}}
                                                                 {{--src="{{asset('images/01/adventure-3.jpg')}}"--}}
                                                                 {{--class="attachment-370x270 size-370x270 wp-post-image"--}}
                                                                 {{--alt=""--}}
                                                                 {{--srcset="https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/adventure-3.jpg 370w, https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/adventure-3-300x219.jpg 300w"--}}
                                                                 {{--sizes="(max-width: 370px) 100vw, 370px"/></a>--}}
                                                {{--<div class="icon-box"><span class="icon fa fa-times-circle-o"></span>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                            {{--<div class="lower-content">--}}
                                                {{--<div class="inner">--}}
                                                    {{--<h3><a href="#">ALWAYS HONEST</a></h3>--}}
                                                    {{--<div class="text">The Love Boat promises something for the beat--}}
                                                        {{--every of just one drum.--}}
                                                    {{--</div>--}}
                                                    {{--<a class="read-more" href="#">READ MORE <span--}}
                                                                {{--class="icon fa fa-arrow-right"></span></a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</section>--}}
                        {{--<!--End Advantage Section-->--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <section class="kc-elm kc-css-273615 kc_row">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-395501 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">


                        <!--Mixitup Gallery-->
                        <section class="fleet-gallery">
                            <div class="auto-container">
                                <!--Sec Title-->
                                <div class="sec-title">
                                    <h2>OUR FLEET GALLERY</h2>
                                    <div class="title">The Love Boat promises something for everyone now to beat every
                                        of just one
                                    </div>
                                </div>
                                <!--End Sec Title-->

                                <!--Mixitup Gallery-->
                                <div class="row clearfix mixitup-gallery">
                                    <div class="column col-md-3 col-sm-12 col-xs-12">

                                        <!--Filter-->
                                        <div class="filters">
                                            <ul class="filter-tabs filter-btns clearfix">
                                                <li class="active filter" data-role="button" data-filter="all">ALL
                                                    GALLERY
                                                </li>
                                                <li class="filter" data-role="button" data-filter=".access-controls">
                                                    Access Controls
                                                </li>
                                                <li class="filter" data-role="button"
                                                    data-filter=".physical-protections">Physical Protections
                                                </li>
                                                <li class="filter" data-role="button" data-filter=".commercial-guards">
                                                    Commercial Guards
                                                </li>
                                                <li class="filter" data-role="button" data-filter=".rapid-responses">
                                                    Rapid Responses
                                                </li>
                                                <li class="filter" data-role="button"
                                                    data-filter=".specialized-security">Specialized Security
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="column col-md-9 col-sm-12 col-xs-12">

                                        <!--Filter List-->
                                        <div class="filter-list row clearfix">
                                            <!--Default Gallery Item-->


                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 default-gallery-item mix mix_all access-controls physical-protections ">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <img width="390" height="310"
                                                             src="{{asset('images/01/1-2.jpg')}}"
                                                             class="attachment-390x310 size-390x310 wp-post-image"
                                                             alt=""
                                                             srcset="https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/1-2.jpg 390w, https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/1-2-300x238.jpg 300w"
                                                             sizes="(max-width: 390px) 100vw, 390px"/></div>
                                                    <!--Overlay Box-->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <h3><a href="#" title="Image Title Here">Gallery Image
                                                                        1</a></h3>
                                                                <a href="{{asset('images/01/1-2.jpg')}}"
                                                                   class="lightbox-image option-btn"
                                                                   title="Image Caption Here"
                                                                   data-fancybox-group="example-gallery"><span
                                                                            class="fa fa-search"></span></a>
                                                                <a href="#" class="option-btn"><span
                                                                            class="fa fa-link"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 default-gallery-item mix mix_all commercial-guards rapid-responses ">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <img width="390" height="310"
                                                             src="{{asset('images/01/2-2.jpg')}}"
                                                             class="attachment-390x310 size-390x310 wp-post-image"
                                                             alt=""
                                                             srcset="https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/2-2.jpg 390w, https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/2-2-300x238.jpg 300w"
                                                             sizes="(max-width: 390px) 100vw, 390px"/></div>
                                                    <!--Overlay Box-->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <h3><a href="#" title="Image Title Here">Gallery Image
                                                                        2</a></h3>
                                                                <a href="{{asset('images/01/1-2.jpg')}}"
                                                                   class="lightbox-image option-btn"
                                                                   title="Image Caption Here"
                                                                   data-fancybox-group="example-gallery"><span
                                                                            class="fa fa-search"></span></a>
                                                                <a href="#" class="option-btn"><span
                                                                            class="fa fa-link"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 default-gallery-item mix mix_all access-controls specialized-security ">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <img width="390" height="310"
                                                             src="{{asset('images/01/2-2.jpg')}}"
                                                             class="attachment-390x310 size-390x310 wp-post-image"
                                                             alt=""
                                                             srcset="https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/3-2.jpg 390w, https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/3-2-300x238.jpg 300w"
                                                             sizes="(max-width: 390px) 100vw, 390px"/></div>
                                                    <!--Overlay Box-->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <h3><a href="#" title="Image Title Here">Gallery Image
                                                                        3</a></h3>
                                                                <a href="{{asset('images/01/3-2.jpg')}}"
                                                                   class="lightbox-image option-btn"
                                                                   title="Image Caption Here"
                                                                   data-fancybox-group="example-gallery"><span
                                                                            class="fa fa-search"></span></a>
                                                                <a href="#" class="option-btn"><span
                                                                            class="fa fa-link"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 default-gallery-item mix mix_all commercial-guards physical-protections rapid-responses specialized-security ">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <img width="390" height="310"
                                                             src="{{asset('images/01/4-1.jpg')}}"
                                                             class="attachment-390x310 size-390x310 wp-post-image"
                                                             alt=""
                                                             srcset="https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/4-1.jpg 390w, https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/4-1-300x238.jpg 300w"
                                                             sizes="(max-width: 390px) 100vw, 390px"/></div>
                                                    <!--Overlay Box-->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <h3><a href="#" title="Image Title Here">Gallery Image
                                                                        4</a></h3>
                                                                <a href="{{asset('images/01/4-1.jpg')}}"
                                                                   class="lightbox-image option-btn"
                                                                   title="Image Caption Here"
                                                                   data-fancybox-group="example-gallery"><span
                                                                            class="fa fa-search"></span></a>
                                                                <a href="#" class="option-btn"><span
                                                                            class="fa fa-link"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <!--End Mixitup Gallery-->
                            </div>
                        </section>
                        <!--End Mixitup Gallery--></div>
                </div>
            </div>
        </div>
    </section>
    <section class="kc-elm kc-css-155479 kc_row">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-753790 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">


                        <!--Testimonial Section-->
                        <section class="testimonial-section">
                            <div class="auto-container">
                                <h2>OUR CLIENTS SAYS</h2>

                                <!--Three Item Carousel-->
                                <div class="three-item-carousel">
                                    <!--Testimonial Block One-->
                                    <div class="testimonial-block-one">
                                        <div class="inner-box">
                                            <div class="quote-icon"><span class="icon flaticon-left-quote"></span></div>
                                            <div class="text">The Love Boat promises something for everyone now to beat
                                                every of just one and his Skipper too will do their in their tropic
                                                island nest.
                                            </div>
                                            <!--Author Info-->
                                            <div class="author-info">
                                                <div class="author-image">
                                                    <img width="68" height="68"
                                                         src="{{asset('images/01/author-1.jpg')}}"
                                                         class="attachment-68x68 size-68x68 wp-post-image" alt=""/>
                                                </div>
                                                <h3>ANGEL JONES</h3>
                                                <div class="designation">Execfise</div>
                                                <!--Rating-->
                                                <div class="rating">
                                                    <span class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star-half-empty"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Testimonial Block One-->
                                    <div class="testimonial-block-one">
                                        <div class="inner-box">
                                            <div class="quote-icon"><span class="icon flaticon-left-quote"></span></div>
                                            <div class="text">The Love Boat promises something for everyone now to beat
                                                every of just one and his Skipper too will do their in their tropic
                                                island nest.
                                            </div>
                                            <!--Author Info-->
                                            <div class="author-info">
                                                <div class="author-image">
                                                    <img width="68" height="68"
                                                         src="{{asset('images/01/author-2.jpg')}}"
                                                         class="attachment-68x68 size-68x68 wp-post-image" alt=""/>
                                                </div>
                                                <h3>MATT MORGAN</h3>
                                                <div class="designation">Forge</div>
                                                <!--Rating-->
                                                <div class="rating">
                                                    <span class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Testimonial Block One-->
                                    <div class="testimonial-block-one">
                                        <div class="inner-box">
                                            <div class="quote-icon"><span class="icon flaticon-left-quote"></span></div>
                                            <div class="text">The Love Boat promises something for everyone now to beat
                                                every of just one and his Skipper too will do their in their tropic
                                                island nest.
                                            </div>
                                            <!--Author Info-->
                                            <div class="author-info">
                                                <div class="author-image">
                                                    <img width="68" height="68"
                                                         src="{{asset('images/01/author-3.jpg')}}"
                                                         class="attachment-68x68 size-68x68 wp-post-image" alt=""/>
                                                </div>
                                                <h3>PAUL VINCENT</h3>
                                                <div class="designation">Massi</div>
                                                <!--Rating-->
                                                <div class="rating">
                                                    <span class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star"></span><span
                                                            class="fa fa-star-half-empty"></span></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </section>
                        <!--End Testimonial Section-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="kc-elm kc-css-796502 kc_row">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-902747 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container"><!--Why Us Section-->
                        <section class="why-us-section">
                            <div class="auto-container">
                                <div class="row clearfix">
                                    <!--Content Column-->
                                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                                        <!--Sec Title Three-->
                                        <div class="sec-title-three">
                                            <h2>WHY CHOOSE US</h2>
                                            <div class="text">The Love Boat promises something for everyone now to beat
                                                every of one
                                            </div>
                                        </div>
                                        <!--End Sec Title Three-->
                                        <!--Service Block Two-->
                                        <div class="service-block-two style-two">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                    <span class="et-hourglass"></span>
                                                </div>
                                                <h3><a href="#">25 YEARS OF EXPERIENCES</a></h3>
                                                <div class="text">The Love Boat promises something for every the beat of
                                                    very best to make the others comfortable.
                                                </div>
                                            </div>
                                        </div>
                                        <!--Service Block Two-->
                                        <div class="service-block-two style-two">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                    <span class="et-lightbulb"></span>
                                                </div>
                                                <h3><a href="#">SELF MOTIVATED GUARDS</a></h3>
                                                <div class="text">The Love Boat promises something for every the beat of
                                                    very best to make the others comfortable.
                                                </div>
                                            </div>
                                        </div>
                                        <!--Service Block Two-->
                                        <div class="service-block-two style-two">
                                            <div class="inner-box">
                                                <div class="icon-box">
                                                    <span class="et-anchor"></span>
                                                </div>
                                                <h3><a href="#">LATEST SECURITY TECHNIQUES</a></h3>
                                                <div class="text">The Love Boat promises something for every the beat of
                                                    very best to make the others comfortable.
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!--Counter Column-->
                                    <div class="counter-column col-md-6 col-sm-12 col-xs-12"
                                         style="background-image:url('{{asset('images/01/choose-us.jpg')}}');">

                                        <div class="fact-counter">
                                            <div class="clearfix">
                                                <!--Column-->
                                                <div class="inner-column light-bg counter-column wow fadeIn"
                                                     data-wow-delay="0ms">
                                                    <div class="inner">
                                                        <div class="count-outer">
                                                            <span class="count-text" data-speed="4000" data-stop="3500">0</span>
                                                        </div>
                                                        <h4 class="counter-title">Total Guards</h4>
                                                    </div>
                                                </div>
                                                <!--Column-->
                                                <div class="inner-column  counter-column wow fadeIn"
                                                     data-wow-delay="0ms">
                                                    <div class="inner">
                                                        <div class="count-outer">
                                                            <span class="count-text" data-speed="4000" data-stop="2340">0</span>
                                                        </div>
                                                        <h4 class="counter-title">Happy Clients</h4>
                                                    </div>
                                                </div>
                                                <!--Column-->
                                                <div class="inner-column  counter-column wow fadeIn"
                                                     data-wow-delay="0ms">
                                                    <div class="inner">
                                                        <div class="count-outer">
                                                            <span class="count-text" data-speed="4000"
                                                                  data-stop="48">0</span>
                                                        </div>
                                                        <h4 class="counter-title">Awards</h4>
                                                    </div>
                                                </div>
                                                <!--Column-->
                                                <div class="inner-column light-bg counter-column wow fadeIn"
                                                     data-wow-delay="0ms">
                                                    <div class="inner">
                                                        <div class="count-outer">
                                                            <span class="count-text" data-speed="4000"
                                                                  data-stop="35">0</span>
                                                        </div>
                                                        <h4 class="counter-title">Branches</h4>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--Why Us Section--></div>
                </div>
            </div>
        </div>
    </section>
    <section class="kc-elm kc-css-838469 kc_row">
        <div class="kc-row-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-182367 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container"><!--Call to Action-->
                        <section class="call-to-action"
                                 style="background-image:url('{{asset('images/01/2-1.jpg')}}');">
                            <div class="auto-container">
                                <div class="row clearfix">
                                    <!--Content Column-->
                                    <div class="content-column col-md-9 col-sm-9 col-xs-12">
                                        <div class="inner-box">
                                            <div class="icon-box">
                                                <div class="icon flaticon-note"></div>
                                            </div>
                                            <div class="content">
                                                <h3>GET FREE CONSULTATION (OR) CALL US: +1-234-678-8900</h3>
                                                <div class="text">The Love Boat promises something for everyone now to
                                                    beat every of just one the others comfortable.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-column text-right col-md-3 col-sm-3 col-xs-12">
                                        <a href="#" class="theme-btn btn-style-one">GET INQUIRY</a>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <!--Call to Action-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
@endsection