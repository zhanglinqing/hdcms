@extends('layouts.web')
@section('menu')
    @include('edu.layouts._menu')
@endsection
@inject('presenter','App\Presenters\EduSystemLesson')
@section('content')
    <div class="card p-5">
        <div class="card-block">
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-9 mt-5">
                <h2 class="h1 font-weight-normal text-primary">快速掌握一门编程语言</h2>
                <p>
                    从零开始讲解，每节课都有针对性的自测题，结合每日直播和同学讨论，是可以很容易学会的。
                </p>
            </div>
            <div class="container {{route_class()}} mt-5">
                <div class="row">
                    @foreach($lessons as $lesson)
                        <article class="card border-0 shadow-sm transition-3d-hover">
                            <div class="card-body p-6">
                              <span class="btn btn-lg btn-icon btn-soft-primary rounded-circle mb-9">
                                <i class="{{$lesson['thumb']}} font-size-5 btn-icon__inner btn-icon__inner-bottom-minus" style="top:52%;"></i>
                              </span>
                                <small class="d-block text-primary text-uppercase mb-1">{{$lesson['description']}}</small>
                                <h3 class="h5 mb-3">
                                    <a href="{{route('edu.system.show',$lesson)}}">{{$lesson['title']}}</a>
                                </h3>
                                <a href="{{route('edu.system.show',$lesson)}}" class="btn btn-sm btn-soft-primary btn-pill transition-3d-hover">进入学习</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom: -50px;">
        <div id="SVGsubscribe1" class="w-lg-80 mx-lg-auto" style="">
            <figure class="ie-subscribe-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 536.9 191.2" style="enable-background:new 0 0 536.9 191.2;" xml:space="preserve"
                     class="injected-svg js-svg-injector" data-parent="#SVGsubscribe1">
                <style type="text/css">
                    .subscribe-1-0 {
                        fill: none;
                        stroke: #377DFF;
                    }

                    .subscribe-1-1 {
                        fill: none;
                        stroke: #FFFFFF;
                    }

                    .subscribe-1-2 {
                        fill: #377DFF;
                    }

                    .subscribe-1-3 {
                        fill: #19A0FF;
                    }

                    .subscribe-1-4 {
                        fill: #FFFFFF;
                    }
                </style>
                    <g id="subscribe1_392_">
                        <line id="subscribe1_397_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="531.9" y1="127" x2="536.2"
                              y2="127"></line>
                        <line id="subscribe1_396_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="534.1" y1="129.2" x2="534.1"
                              y2="124.9"></line>
                    </g>
                    <g id="subscribe1_366_">
                        <line id="subscribe1_384_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="398.5" y1="113.1" x2="402.8"
                              y2="113.1"></line>
                        <line id="subscribe1_383_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="400.6" y1="115.2" x2="400.6"
                              y2="111"></line>
                    </g>
                    <g id="subscribe1_360_">
                        <line id="subscribe1_365_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="490.5" y1="101.8" x2="493.5"
                              y2="98.8"></line>
                        <line id="subscribe1_364_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="493.5" y1="101.8" x2="490.5"
                              y2="98.8"></line>
                    </g>
                    <g id="subscribe1_344_">
                        <line id="subscribe1_359_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="359.3" y1="144.1" x2="362.3"
                              y2="141.1"></line>
                        <line id="subscribe1_358_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="362.3" y1="144.1" x2="359.3"
                              y2="141.1"></line>
                    </g>
                    <line id="subscribe1_322_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="501.6" y1="127" x2="519" y2="127"></line>
                    <line id="subscribe1_321_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="387.9" y1="96.7" x2="356.8" y2="96.7"></line>
                    <line id="subscribe1_320_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="450.8" y1="100.3" x2="488.6" y2="100.3"></line>
                    <line id="subscribe1_318_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="524.1" y1="127" x2="520.5" y2="127"></line>
                    <line id="subscribe1_297_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="424.8" y1="93.3" x2="442.2" y2="93.3"></line>
                    <line id="subscribe1_296_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="447.3" y1="93.3" x2="443.7" y2="93.3"></line>
                    <path id="subscribe1_287_" class="subscribe-1-2 fill-primary"
                          d="M370.1,126.2c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.3-0.6-1.3-1.3c0-0.7,0.6-1.3,1.3-1.3  C369.5,124.9,370.1,125.5,370.1,126.2z"></path>
                    <path id="subscribe1_282_" class="subscribe-1-2 fill-primary"
                          d="M384.2,107.5c0,0.5-0.4,0.8-0.8,0.8c-0.5,0-0.8-0.4-0.8-0.8c0-0.5,0.4-0.8,0.8-0.8  C383.8,106.7,384.2,107.1,384.2,107.5z"></path>
                    <circle id="subscribe1_272_" class="subscribe-1-2 fill-primary" cx="472.1" cy="93.3"
                            r="0.8"></circle>
                    <path id="subscribe1_271_" class="subscribe-1-2 fill-primary"
                          d="M505.3,149c0,0.7-0.6,1.3-1.3,1.3c-0.7,0-1.3-0.6-1.3-1.3s0.6-1.3,1.3-1.3  C504.7,147.7,505.3,148.3,505.3,149z"></path>
                    <path id="subscribe1_269_" class="subscribe-1-2 fill-primary"
                          d="M519.2,111.9c0,0.6-0.5,1.1-1.1,1.1s-1.1-0.5-1.1-1.1s0.5-1.1,1.1-1.1S519.2,111.3,519.2,111.9  z"></path>
                    <path id="subscribe1_268_" class="subscribe-1-3 fill-primary-lighter" opacity=".3"
                          d="M455.1,183.2L455.1,183.2l-0.7-0.1v0.1h-1.8v-50.7c0-1.5-1.2-2.7-2.7-2.7h-7.6v0.7H440v-0.7  h-5.4v0.7h-14.4v-0.7h-0.6V153h0.8v37.4h30.1c2.5,0,4.5-1.8,4.9-4.2l0.5-2.9L455.1,183.2L455.1,183.2z"></path>
                    <rect id="subscribe1_267_" x="422.4" y="109" class="subscribe-1-4 fill-white" width="64.6"
                          height="81.5"></rect>
                    <rect id="subscribe1_263_" x="422.4" y="109" class="subscribe-1-2 fill-primary-lighter" width="64.6"
                          height="13.3"></rect>
                    <rect id="subscribe1_262_" x="422.4" y="124.4" class="subscribe-1-2 fill-primary-lighter"
                          width="64.6" height="2.3"></rect>
                    <polyline id="subscribe1_261_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" points="422.4,153 422.4,109 487,109 487,165 "></polyline>
                    <path id="subscribe1_249_" class="subscribe-1-4 fill-white"
                          d="M431.7,116.2c0,1-0.8,1.9-1.9,1.9c-1,0-1.9-0.8-1.9-1.9c0-1,0.8-1.9,1.9-1.9  C430.9,114.3,431.7,115.1,431.7,116.2z"></path>
                    <line id="subscribe1_242_" class="subscribe-1-1 fill-none stroke-white" stroke-width="1.5"
                          stroke-miterlimit="10" x1="449.1" y1="116.2" x2="476" y2="116.2"></line>
                    <line id="subscribe1_241_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="431.1" y1="131.5" x2="478" y2="131.5"></line>
                    <line id="subscribe1_234_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="431.1" y1="135.7" x2="478" y2="135.7"></line>
                    <line id="subscribe1_233_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="431.1" y1="139.9" x2="478" y2="139.9"></line>
                    <line id="subscribe1_232_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="431.1" y1="144.2" x2="457" y2="144.2"></line>
                    <path id="subscribe1_230_" class="subscribe-1-3 fill-primary-lighter" opacity=".3"
                          d="M503.5,165.7h-37c-1.3,0-2.3,1-2.3,2.3v20.9c0,1.3,1,2.3,2.3,2.3h37c1.3,0,2.3-1,2.3-2.3V168  C505.8,166.8,504.8,165.7,503.5,165.7z"></path>
                    <path id="subscribe1_229_" class="subscribe-1-4 fill-white"
                          d="M505.5,190.5h-37c-0.9,0-1.6-0.7-1.6-1.6V168c0-0.9,0.7-1.6,1.6-1.6h37c0.9,0,1.6,0.7,1.6,1.6  v20.9C507.1,189.8,506.4,190.5,505.5,190.5z"></path>
                    <path id="subscribe1_227_" class="subscribe-1-4 fill-white"
                          d="M507.1,166.5L487.7,178c-0.4,0.3-1,0.3-1.4,0L467,166.5H507.1z"></path>
                    <polygon id="subscribe1_226_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                             points="507.1,166.5 467,166.5 474.1,170.7 500,170.7 "></polygon>
                    <polygon id="subscribe1_224_" class="subscribe-1-3 fill-primary-lighter" opacity=".3"
                             points="495.2,173.5 497.8,172 476.2,172 478.8,173.5 "></polygon>
                    <path id="subscribe1_223_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" d="M467.3,166.7l19,11.3c0.4,0.3,1,0.3,1.4,0l18.8-11.1"></path>
                    <path id="subscribe1_222_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10"
                          d="M467,183.9V168c0-0.9,0.7-1.6,1.6-1.6h37c0.9,0,1.6,0.7,1.6,1.6v5.9"></path>
                    <path id="subscribe1_220_" class="subscribe-1-4 fill-white"
                          d="M521.9,176.8v12.5c0,0.6-0.5,1.1-1.1,1.1H496c-0.6,0-1.1-0.5-1.1-1.1v-12.5  c0-0.6,0.5-1.1,1.1-1.1h24.7C521.4,175.7,521.9,176.2,521.9,176.8z"></path>
                    <rect id="subscribe1_219_" x="494.9" y="175.7" class="subscribe-1-3 fill-primary-lighter"
                          opacity=".5" width="27" height="5.2"></rect>
                    <rect id="subscribe1_218_" x="494.9" y="181.9" class="subscribe-1-3 fill-primary-lighter"
                          opacity=".3" width="27" height="1.2"></rect>
                    <path id="subscribe1_217_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10"
                          d="M521.9,176.8v12.5c0,0.6-0.5,1.1-1.1,1.1H496c-0.6,0-1.1-0.5-1.1-1.1v-12.5  c0-0.6,0.5-1.1,1.1-1.1h24.7C521.4,175.7,521.9,176.2,521.9,176.8z"></path>
                    <path id="subscribe1_215_" class="subscribe-1-3 fill-primary-lighter" opacity=".3"
                          d="M433.3,154h-9.2v0.7H422V154h-3.1v0.7H417V154h-1.9c-1.5,0-2.7,1.2-2.7,2.7v31.4  c0,1.5,1.2,2.7,2.7,2.7h18.2c1.5,0,2.7-1.2,2.7-2.7v-31.4C436.1,155.2,434.9,154,433.3,154z"></path>
                    <path id="subscribe1_214_" class="subscribe-1-4 fill-white"
                          d="M431.8,190.1h-18.2c-1.1,0-2-0.9-2-2v-31.4c0-1.1,0.9-2,2-2h18.2c1.1,0,2,0.9,2,2v31.4  C433.8,189.2,432.9,190.1,431.8,190.1z"></path>
                    <path id="subscribe1_211_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" d="M411.6,189.6v-32.9c0-1.1,0.9-2,2-2h1.9"></path>
                    <path id="subscribe1_209_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" d="M422.7,154.7h9.2c1.1,0,2,0.9,2,2v27.4"></path>
                    <line id="subscribe1_208_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="417.3" y1="154.7" x2="420.5" y2="154.7"></line>
                    <line id="subscribe1_207_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="419.4" y1="157.4" x2="426" y2="157.4"></line>
                    <path id="subscribe1_206_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10"
                          d="M423.8,187.2c0,0.6-0.5,1.1-1.1,1.1s-1.1-0.5-1.1-1.1s0.5-1.1,1.1-1.1  C423.3,186.1,423.8,186.6,423.8,187.2z"></path>
                    <rect id="subscribe1_204_" x="413.8" y="159.8" class="subscribe-1-3 fill-primary-lighter"
                          opacity=".5" width="17.8" height="25"></rect>
                    <rect id="subscribe1_203_" x="413.8" y="159.8" class="subscribe-1-3 fill-primary-lighter"
                          opacity=".5" width="17.8" height="7.9"></rect>
                    <rect id="subscribe1_202_" x="413.8" y="169.2" class="subscribe-1-3 fill-primary-lighter"
                          opacity=".5" width="17.8" height="1.8"></rect>
                    <g id="subscribe1_159_">
                        <path id="subscribe1_172_" class="subscribe-1-3 fill-primary-lighter" opacity=".3"
                              d="M481.9,190v-3.5c0-0.3-0.2-0.5-0.5-0.5h-50.6c-0.1,0-0.1,0-0.2,0l-3.8,1.8   c-0.4,0.2-0.4,0.7,0,0.9l3.8,1.8c0.1,0,0.1,0,0.2,0h50.6C481.7,190.5,481.9,190.3,481.9,190z"></path>
                        <rect id="subscribe1_171_" x="432.5" y="186" class="subscribe-1-4 fill-white" width="44.6"
                              height="4.5"></rect>
                        <rect id="subscribe1_170_" x="432.5" y="186" class="subscribe-1-3 fill-primary-lighter"
                              opacity=".8" width="44.6" height="2.1"></rect>
                        <path id="subscribe1_169_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10"
                              d="M481.9,190.5V186h-51.2l-4.3,2c-0.2,0.1-0.2,0.4,0,0.5l4.3,2H481.9z"></path>
                        <line id="subscribe1_167_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="432.5" y1="185.8" x2="432.5" y2="190.5"></line>
                    </g>
                    <g id="subscribe1_409_">
                        <g id="subscribe1_427_">
                            <path id="subscribe1_430_" class="subscribe-1-4 fill-white"
                                  d="M63,173l-21.5-6.8c-0.6-0.2-0.9-0.8-0.7-1.3l6.8-21.5c0.2-0.6,0.8-0.9,1.3-0.7l21.5,6.8    c0.6,0.2,0.9,0.8,0.7,1.3l-6.8,21.5C64.1,172.9,63.5,173.2,63,173z"></path>

                            <rect id="subscribe1_429_" x="47.3" y="147.8"
                                  transform="matrix(0.3006 -0.9537 0.9537 0.3006 -110.6652 163.1419)"
                                  class="subscribe-1-3 fill-primary-lighter" opacity=".5" width="17.3"
                                  height="18.4"></rect>
                            <path id="subscribe1_428_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                                  stroke-miterlimit="10"
                                  d="M45.4,150.4l2.1-6.6c0.2-0.8,1.1-1.2,1.9-1l20.6,6.5c0.8,0.3,1.2,1.1,1,1.9l-4.4,14"></path>
                        </g>
                        <g id="subscribe1_420_">
                            <path id="subscribe1_426_" class="subscribe-1-4 fill-white"
                                  d="M38.6,162.2l-23,5.2c-0.8,0.2-1.7-0.3-1.9-1.2L10.4,151c-0.2-0.8,0.3-1.7,1.2-1.9l23-5.2    c0.8-0.2,1.7,0.3,1.9,1.2l3.4,15.2C40,161.2,39.5,162,38.6,162.2z"></path>
                            <path id="subscribe1_425_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                                  d="M36,143.6l-10.5,11.6c-0.3,0.3-0.7,0.4-1.1,0.2l-14.4-6L36,143.6z"></path>
                            <path id="subscribe1_424_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                                  stroke-miterlimit="10"
                                  d="M10.3,149.6l14.2,5.8c0.4,0.2,0.8,0.1,1.1-0.2L35.7,144"></path>
                            <path id="subscribe1_423_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                                  stroke-miterlimit="10"
                                  d="M13.6,165.5l-3.4-14.9c-0.1-0.6,0.3-1.2,0.9-1.4l2.4-0.5"></path>
                            <path id="subscribe1_422_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                                  stroke-miterlimit="10" d="M19.9,147.2l15-3.4c0.6-0.1,1.2,0.3,1.4,0.9l1.3,5.7"></path>
                            <line id="subscribe1_421_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                                  stroke-miterlimit="10" x1="15.6" y1="148.2" x2="18.4" y2="147.6"></line>
                        </g>
                        <path id="subscribe1_419_" class="subscribe-1-4 fill-white"
                              d="M64.8,167.9h-0.2c-1-3.6-4.3-6.2-8.3-6.2c-1.7,0-3.3,0.5-4.6,1.4c-0.9-5.7-5.7-10-11.6-10   c-5.3,0-9.8,3.5-11.3,8.3c-0.7-0.2-1.4-0.3-2.1-0.3c-4,0-7.4,3-8,6.8h-1.3c-3.3,0-6,2.7-6,6v0.4c0,3.3,2.7,6,6,6h47.5   c3.3,0,6-2.7,6-6V174C70.8,170.7,68.1,167.9,64.8,167.9z"></path>
                        <path id="subscribe1_418_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10"
                              d="M70.8,174.4V174c0-3.3-2.7-6-6-6h-0.2c-1-3.6-4.3-6.2-8.3-6.2c-1.7,0-3.3,0.5-4.6,1.4   c-0.9-5.7-5.7-10-11.6-10c-5.3,0-9.8,3.5-11.3,8.3c-0.7-0.2-1.4-0.3-2.1-0.3c-4,0-7.4,3-8,6.8h-1.3c-3.3,0-6,2.7-6,6v0.4"></path>
                        <path id="subscribe1_417_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10"
                              d="M47.6,162.1c-1.8-2.7-4.8-4.5-8.2-4.5c-1.8,0-3.5,0.5-5,1.4"></path>
                        <path id="subscribe1_416_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" d="M26.7,161.1c2.3,0,4.2,1.9,4.2,4.2"></path>
                        <g id="subscribe1_410_">
                            <path id="subscribe1_415_" class="subscribe-1-4 fill-white"
                                  d="M40.2,138.2c0.2,0.9-0.8,1.8-2.1,2s-2.5-0.3-2.6-1.2c-0.2-0.9,0.8-1.8,2.1-2    C38.9,136.7,40,137.3,40.2,138.2z"></path>
                            <path id="subscribe1_414_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                                  stroke-miterlimit="10"
                                  d="M40.2,138.2c0.2,0.9-0.8,1.8-2.1,2s-2.5-0.3-2.6-1.2c-0.2-0.9,0.8-1.8,2.1-2    C38.9,136.7,40,137.3,40.2,138.2z"></path>
                            <path id="subscribe1_413_" class="subscribe-1-4 fill-white"
                                  d="M46.8,138.2c0.2,0.9-0.8,1.8-2.1,2s-2.5-0.3-2.6-1.2c-0.2-0.9,0.8-1.8,2.1-2    C45.5,136.7,46.7,137.3,46.8,138.2z"></path>
                            <path id="subscribe1_412_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                                  stroke-miterlimit="10"
                                  d="M46.8,138.2c0.2,0.9-0.8,1.8-2.1,2s-2.5-0.3-2.6-1.2c-0.2-0.9,0.8-1.8,2.1-2    C45.5,136.7,46.7,137.3,46.8,138.2z"></path>
                            <polyline id="subscribe1_411_" class="subscribe-1-0 fill-none stroke-primary"
                                      stroke-width="1.5" stroke-miterlimit="10"
                                      points="40.2,138.3 40.2,130 46.8,130 46.8,138.3   "></polyline>
                        </g>
                    </g>
                    <path id="subscribe1_252_" class="subscribe-1-4 fill-white"
                          d="M147.4,190.8l-0.2-28.9c0-2.2-2-4-4.5-4h-41.4l0.2,32.9L147.4,190.8z"></path>
                    <path id="subscribe1_251_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" d="M109.9,157.9h32.9c2.5,0,4.5,2,4.5,4.5l0.2,27.1"></path>
                    <path id="subscribe1_43_" class="subscribe-1-4 fill-white"
                          d="M142.8,190.8h4.6v-34.2c0-1.8-1.6-3.2-3.5-3.2h-1.1V190.8z"></path>
                    <path id="subscribe1_248_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" d="M147.4,190.8V157c0-2-1.6-3.5-3.5-3.5h-1.1v37.4"></path>
                    <path id="subscribe1_240_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                          d="M131.4,167.2c3.2,3.2,3.2,8.4,0,11.6c-3.2,3.2-8.4,3.2-11.6,0s-3.2-8.4,0-11.6  C123,164,128.2,164,131.4,167.2z"></path>
                    <g id="subscribe1_237_">
                        <g id="subscribe1_265_">
                            <circle id="subscribe1_266_" class="subscribe-1-0 fill-none stroke-primary"
                                    stroke-width="1.5" stroke-miterlimit="10" stroke-dasharray="1.9827,1.9827"
                                    cx="121.6" cy="176.9" r="8.2"></circle>
                        </g>
                    </g>
                    <path id="subscribe1_535_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                          d="M153,109.3h-0.3c-1.2-4.2-5.1-7.3-9.8-7.3c-2,0-3.9,0.6-5.5,1.6c-1-6.7-6.8-11.8-13.7-11.8  c-6.2,0-11.5,4.1-13.3,9.8c-0.8-0.2-1.6-0.3-2.5-0.3c-4.8,0-8.7,3.5-9.4,8.1H97c-3.9,0-7.1,3.2-7.1,7.1v0.5c0,3.9,3.2,7.1,7.1,7.1  h56c3.9,0,7.1-3.2,7.1-7.1v-0.5C160.2,112.5,157,109.3,153,109.3z"></path>
                    <path id="subscribe1_534_" class="subscribe-1-4 fill-white"
                          d="M146.5,111h-0.2c-1.1-3.7-4.5-6.5-8.6-6.5c-1.8,0-3.4,0.5-4.8,1.4c-0.9-5.9-6-10.4-12.1-10.4  c-5.5,0-10.2,3.6-11.7,8.6c-0.7-0.2-1.4-0.3-2.2-0.3c-4.2,0-7.7,3.1-8.3,7.1h-1.4c-3.5,0-6.3,2.8-6.3,6.3v0.5c0,3.5,2.8,6.3,6.3,6.3  h49.4c3.5,0,6.3-2.8,6.3-6.3v-0.5C152.8,113.9,149.9,111,146.5,111z"></path>
                    <path id="subscribe1_533_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10"
                          d="M132.8,102.4c-2.1-3.2-5.6-5.3-9.7-5.3c-2.2,0-4.2,0.6-5.9,1.6"></path>
                    <path id="subscribe1_40_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10"
                          d="M97,109.3c-3.9,0-7.1,3.2-7.1,7.1v0.5c0,3.9,3.2,7.1,7.1,7.1h25.8"></path>
                    <path id="subscribe1_39_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10"
                          d="M144.5,124.1h8.5c3.9,0,7.1-3.2,7.1-7.1v-0.5c0-3.9-3.2-7.1-7.1-7.1h-0.3  c-1.2-4.2-5.1-7.3-9.8-7.3c-2,0-3.9,0.6-5.5,1.6c-1-6.7-6.8-11.8-13.7-11.8c-4.3,0-8.1,1.9-10.6,5c-0.6,0.7-1.1,1.4-1.5,2.2  c-0.5,0.8-0.9,1.7-1.1,2.7c-0.8-0.2-1.6-0.3-2.5-0.3c-2.6,0-4.9,1-6.6,2.6"></path>
                    <path id="subscribe1_531_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" d="M108.2,101.2c2.7,0,5,2.2,5,5"></path>
                    <g id="subscribe1_184_">
                        <line id="subscribe1_186_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="168.6" y1="118.8" x2="172.9"
                              y2="118.8"></line>
                        <line id="subscribe1_185_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="170.8" y1="121" x2="170.8"
                              y2="116.7"></line>
                    </g>
                    <g id="subscribe1_179_">
                        <line id="subscribe1_183_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="26.6" y1="114.2" x2="30.9"
                              y2="114.2"></line>
                        <line id="subscribe1_180_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="28.7" y1="116.4" x2="28.7"
                              y2="112.1"></line>
                    </g>
                    <g id="subscribe1_174_">
                        <line id="subscribe1_176_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="129.1" y1="86.3" x2="132.1"
                              y2="83.3"></line>
                        <line id="subscribe1_175_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="132.1" y1="86.3" x2="129.1"
                              y2="83.3"></line>
                    </g>
                    <g id="subscribe1_35_">
                        <line id="subscribe1_37_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="8.8" y1="138.4" x2="11.8"
                              y2="135.4"></line>
                        <line id="subscribe1_36_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-linecap="round" stroke-miterlimit="10" x1="11.8" y1="138.4" x2="8.8"
                              y2="135.4"></line>
                    </g>
                    <line id="subscribe1_34_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="57.4" y1="90.3" x2="89.4" y2="90.3"></line>
                    <line id="subscribe1_201_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="74.9" y1="84.8" x2="125.6" y2="84.8"></line>
                    <line id="subscribe1_41_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="97.4" y1="90.3" x2="91.9" y2="90.3"></line>
                    <line id="subscribe1_162_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="150.1" y1="135" x2="167.5" y2="135"></line>
                    <line id="subscribe1_161_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="172.6" y1="135" x2="169" y2="135"></line>
                    <line id="subscribe1_33_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="0" y1="114.2" x2="17.4" y2="114.2"></line>
                    <line id="subscribe1_32_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="22.5" y1="114.2" x2="18.9" y2="114.2"></line>
                    <path id="subscribe1_160_" class="subscribe-1-2 fill-primary"
                          d="M30.3,91.8c0,0.6-0.5,1.1-1.1,1.1s-1.1-0.5-1.1-1.1s0.5-1.1,1.1-1.1  C29.9,90.7,30.3,91.2,30.3,91.8z"></path>
                    <path id="subscribe1_31_" class="subscribe-1-2 fill-primary"
                          d="M57.3,124c0,0.7-0.6,1.3-1.3,1.3s-1.3-0.6-1.3-1.3c0-0.7,0.6-1.3,1.3-1.3  C56.7,122.6,57.3,123.2,57.3,124z"></path>
                    <path id="subscribe1_212_" class="subscribe-1-2 fill-primary"
                          d="M162.7,94.6c0,0.7-0.6,1.3-1.3,1.3s-1.3-0.6-1.3-1.3c0-0.7,0.6-1.3,1.3-1.3  C162.1,93.2,162.7,93.8,162.7,94.6z"></path>
                    <path id="subscribe1_30_" class="subscribe-1-3 fill-primary-lighter" opacity=".3"
                          d="M70.2,148.6L59,145.1v35.4h5.7c3.3,0,6-2.7,6-6h0.7V174c0-3.4-2.4-6.2-5.7-6.7l0.6-2l0.7,0.2  l4.4-14C72,150.3,71.4,149,70.2,148.6z"></path>
                    <path id="subscribe1_29_" class="subscribe-1-3 fill-primary-lighter" opacity=".3"
                          d="M110.5,187v-29.8h-0.6v0.7h-8.5l0.2,32.9h6.9C109.7,190,110.5,188.6,110.5,187z"></path>
                    <g id="subscribe1_156_">
                        <path id="subscribe1_250_" class="subscribe-1-2 fill-primary-lighter"
                              d="M102.3,190.5H66.7c-2.7,0-4.9-2.2-4.9-4.9v-74.3c0-2.7,2.2-4.9,4.9-4.9h35.6   c2.7,0,4.9,2.2,4.9,4.9v74.3C107.2,188.3,105,190.5,102.3,190.5z"></path>
                        <line id="subscribe1_158_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="68.6" y1="106.3" x2="71.5" y2="106.3"></line>
                        <path id="subscribe1_199_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10"
                              d="M107.2,150.3v36.3c0,2.1-1.7,3.9-3.9,3.9H65.6c-2.1,0-3.9-1.7-3.9-3.9v-76.4   c0-2.1,1.7-3.9,3.9-3.9h1.1"></path>
                        <path id="subscribe1_193_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" d="M72.8,106.3h30.5c2.1,0,3.9,1.7,3.9,3.9v2.7"></path>
                        <line id="subscribe1_247_" class="subscribe-1-1 fill-none stroke-white" stroke-width="1.5"
                              stroke-miterlimit="10" x1="77.8" y1="111.9" x2="91.2" y2="111.9"></line>
                        <path id="subscribe1_246_" class="subscribe-1-1 fill-none stroke-white" stroke-width="1.5"
                              stroke-miterlimit="10"
                              d="M87.4,185.2c0,1.6-1.3,2.9-2.9,2.9s-2.9-1.3-2.9-2.9c0-1.6,1.3-2.9,2.9-2.9   S87.4,183.6,87.4,185.2z"></path>
                        <rect id="subscribe1_245_" x="64.2" y="114.6" class="subscribe-1-4 fill-white" width="40.1"
                              height="66"></rect>
                        <path id="subscribe1_244_" class="subscribe-1-3 fill-primary-lighter" opacity=".8"
                              d="M75.6,176.3h-6.9c-0.2,0-0.4-0.2-0.4-0.4V169c0-0.2,0.2-0.4,0.4-0.4h6.9   c0.2,0,0.4,0.2,0.4,0.4v6.9C76,176.1,75.8,176.3,75.6,176.3z"></path>
                        <path id="subscribe1_28_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                              d="M98.9,176.3H92c-0.2,0-0.4-0.2-0.4-0.4V169c0-0.2,0.2-0.4,0.4-0.4h6.9c0.2,0,0.4,0.2,0.4,0.4   v6.9C99.2,176.1,99.1,176.3,98.9,176.3z"></path>
                        <path id="subscribe1_27_" class="subscribe-1-2 fill-primary" opacity=".7"
                              d="M75.8,165h-6.9c-0.2,0-0.4-0.2-0.4-0.4v-6.9c0-0.2,0.2-0.4,0.4-0.4h6.9c0.2,0,0.4,0.2,0.4,0.4   v6.9C76.2,164.9,76,165,75.8,165z"></path>
                        <path id="subscribe1_26_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                              d="M87.5,165h-6.9c-0.2,0-0.4-0.2-0.4-0.4v-6.9c0-0.2,0.2-0.4,0.4-0.4h6.9c0.2,0,0.4,0.2,0.4,0.4   v6.9C87.8,164.9,87.7,165,87.5,165z"></path>
                        <path id="subscribe1_25_" class="subscribe-1-2 fill-primary" opacity=".7"
                              d="M99.1,165h-6.9c-0.2,0-0.4-0.2-0.4-0.4v-6.9c0-0.2,0.2-0.4,0.4-0.4h6.9c0.2,0,0.4,0.2,0.4,0.4   v6.9C99.5,164.9,99.3,165,99.1,165z"></path>
                        <path id="subscribe1_24_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                              d="M87.7,153.8h-6.9c-0.2,0-0.4-0.2-0.4-0.4v-6.9c0-0.2,0.2-0.4,0.4-0.4h6.9   c0.2,0,0.4,0.2,0.4,0.4v6.9C88.1,153.6,87.9,153.8,87.7,153.8z"></path>
                        <path id="subscribe1_23_" class="subscribe-1-2 fill-primary" opacity=".7"
                              d="M75.8,142.5h-6.9c-0.2,0-0.4-0.2-0.4-0.4v-6.9c0-0.2,0.2-0.4,0.4-0.4h6.9   c0.2,0,0.4,0.2,0.4,0.4v6.9C76.2,142.4,76,142.5,75.8,142.5z"></path>
                        <path id="subscribe1_235_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                              d="M87.2,131.3h-6.9c-0.2,0-0.4-0.2-0.4-0.4V124c0-0.2,0.2-0.4,0.4-0.4h6.9   c0.2,0,0.4,0.2,0.4,0.4v6.9C87.6,131.1,87.4,131.3,87.2,131.3z"></path>
                    </g>
                    <path id="subscribe1_22_" class="subscribe-1-3 fill-primary-lighter" opacity=".3"
                          d="M100.3,120.3c-5.9,5.9-7,15.2-2.7,22.2l-4.8,9.9c-0.2,0.4-0.1,0.9,0.2,1.2  c0.2,0.2,0.5,0.3,0.7,0.3s0.3,0,0.5-0.1l9.8-4.9c1,0.6,2.1,1.1,3.2,1.5V116C104.7,116.9,102.3,118.3,100.3,120.3z"></path>
                    <g id="subscribe1_157_">
                        <path id="subscribe1_21_" class="subscribe-1-4 fill-white"
                              d="M126,144c6.8-6.8,6.8-17.9,0-24.7c-6.8-6.8-17.9-6.8-24.7,0c-5.9,5.9-6.7,14.9-2.4,21.7   l-5,10.3c-0.1,0.3,0.2,0.5,0.4,0.4l10.2-5.1C111.3,150.7,120.2,149.8,126,144z"></path>
                        <path id="subscribe1_192_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10"
                              d="M127.8,121.5c-0.5-0.8-1.2-1.5-1.9-2.2c-6.8-6.8-17.9-6.8-24.7,0c-5.9,5.9-6.7,14.9-2.4,21.7   l-5,10.3c-0.1,0.3,0.2,0.5,0.4,0.4l10.2-5.1c6.7,4.1,15.6,3.3,21.4-2.6c0.8-0.8,1.5-1.7,2.1-2.6"></path>
                        <line id="subscribe1_163_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="101.4" y1="124.1" x2="106.5" y2="124.1"></line>
                        <line id="subscribe1_20_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="133.7" y1="124.1" x2="107.8" y2="124.1"></line>
                        <line id="subscribe1_166_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="113.6" y1="127.6" x2="104.5" y2="127.6"></line>
                        <line id="subscribe1_19_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="109.1" y1="131.2" x2="102.5" y2="131.2"></line>
                        <line id="subscribe1_18_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="111" y1="131.2" x2="135.3" y2="131.2"></line>
                        <line id="subscribe1_17_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="103.4" y1="135" x2="116.5" y2="135"></line>
                        <line id="subscribe1_190_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="103.4" y1="139.1" x2="109.1" y2="139.1"></line>
                        <line id="subscribe1_191_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="141.2" y1="139.1" x2="111" y2="139.1"></line>
                        <line id="subscribe1_16_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="125.3" y1="135" x2="118.1" y2="135"></line>
                        <line id="subscribe1_15_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="119.8" y1="127.6" x2="115.2" y2="127.6"></line>
                        <line id="subscribe1_164_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="135.3" y1="124.1" x2="141.2" y2="124.1"></line>
                    </g>
                    <g id="subscribe1_11_">
                        <path id="subscribe1_259_" class="subscribe-1-4 fill-white"
                              d="M66.1,189.1v-10.6c0-0.8-0.6-1.4-1.4-1.4H6.5c-0.8,0-1.4,0.6-1.4,1.4v10.6   c0,0.8,0.6,1.4,1.4,1.4h58.3C65.5,190.5,66.1,189.8,66.1,189.1z"></path>
                        <path id="subscribe1_258_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10"
                              d="M66.1,189.1v-10.6c0-0.8-0.6-1.4-1.4-1.4H6.5c-0.8,0-1.4,0.6-1.4,1.4v10.6   c0,0.8,0.6,1.4,1.4,1.4h58.3C65.5,190.5,66.1,189.8,66.1,189.1z"></path>
                        <line id="subscribe1_257_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="11.9" y1="177" x2="11.9" y2="185.2"></line>
                        <line id="subscribe1_256_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="17.7" y1="177" x2="17.7" y2="181.1"></line>
                        <line id="subscribe1_255_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="23.5" y1="177" x2="23.5" y2="181.1"></line>
                        <line id="subscribe1_254_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="29.3" y1="177" x2="29.3" y2="181.1"></line>
                        <line id="subscribe1_14_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="35" y1="177" x2="35" y2="185.2"></line>
                        <line id="subscribe1_239_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="40.8" y1="177" x2="40.8" y2="181.1"></line>
                        <line id="subscribe1_238_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="46.6" y1="177" x2="46.6" y2="181.1"></line>
                        <line id="subscribe1_13_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="52.4" y1="177" x2="52.4" y2="181.1"></line>
                        <line id="subscribe1_12_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                              stroke-miterlimit="10" x1="58.1" y1="177" x2="58.1" y2="185.2"></line>
                    </g>
                    <path id="subscribe1_273_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10"
                          d="M152.3,140.5c0,0,4.4,4.2,4.4,8c0,3.7-4.4,8-4.4,8s-4.4-4.2-4.4-8  C147.8,144.7,152.3,140.5,152.3,140.5z"></path>
                    <line id="subscribe1_10_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="152.3" y1="190.5" x2="152.3" y2="140.5"></line>
                    <line id="subscribe1_9_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="152.3" y1="147.8" x2="148.9" y2="144.3"></line>
                    <line id="subscribe1_8_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="152.2" y1="152.6" x2="147.8" y2="147.8"></line>
                    <line id="subscribe1_260_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="152.1" y1="147.8" x2="155.5" y2="144.3"></line>
                    <line id="subscribe1_253_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="1.5"
                          stroke-miterlimit="10" x1="152.2" y1="152.6" x2="156.6" y2="147.8"></line>
                    <path id="subscribe1_431_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M369.4,148.6h-32.1c-1.2,0-2.1,0.9-2.1,2.1v38.8h50.2c2.4,0,4.3-1.9,4.3-4.3v-34.4  c0-1.2-1-2.2-2.2-2.2h-3.4"></path>
                    <g id="subscribe1_53_">
                        <path id="subscribe1_57_" class="subscribe-1-4 fill-white"
                              d="M370.1,133.3l10.9,10.9v37.9c0,1.7-1.4,3.1-3.1,3.1h-32.4c-1.7,0-3.1-1.4-3.1-3.1v-45.7   c0-1.7,1.4-3.1,3.1-3.1H370.1z"></path>
                        <path id="subscribe1_55_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                              stroke-miterlimit="10" d="M381,144.2h-9.8c-0.6,0-1.1-0.5-1.1-1.1v-9.8"></path>
                        <path id="subscribe1_54_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                              stroke-miterlimit="10"
                              d="M342.3,151v-14.6c0-1.7,1.4-3.1,3.1-3.1h24.7l10.9,10.9v37.9c0,1.7-1.4,3.1-3.1,3.1h-32.4"></path>
                    </g>
                    <path id="subscribe1_52_" class="subscribe-1-4 fill-white"
                          d="M376.4,130.1l10.9,10.9v37.9c0,1.7-1.4,3.1-3.1,3.1h-32.4c-1.7,0-3.1-1.4-3.1-3.1v-45.7  c0-1.7,1.4-3.1,3.1-3.1L376.4,130.1L376.4,130.1z"></path>
                    <polygon id="subscribe1_51_" class="subscribe-1-4 fill-white"
                             points="376.4,141 376.4,130.1 387.3,141 "></polygon>
                    <path id="subscribe1_50_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" d="M387.3,141h-9.8c-0.6,0-1.1-0.5-1.1-1.1v-9.8"></path>
                    <line id="subscribe1_49_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" x1="382.1" y1="146.3" x2="354.5" y2="146.3"></line>
                    <line id="subscribe1_48_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" x1="382.1" y1="152.5" x2="354.5" y2="152.5"></line>
                    <line id="subscribe1_47_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" x1="382.1" y1="158.6" x2="354.5" y2="158.6"></line>
                    <line id="subscribe1_46_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" x1="382.1" y1="164.8" x2="354.5" y2="164.8"></line>
                    <path id="subscribe1_407_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M348.7,155.2v-21.9c0-1.7,1.4-3.1,3.1-3.1h24.7l10.9,10.9V179c0,1.7-1.4,3.1-3.1,3.1h-1.4"></path>
                    <path id="subscribe1_401_" class="subscribe-1-4 fill-white"
                          d="M382.8,134.9l10.9,10.9v37.9c0,1.7-1.4,3.1-3.1,3.1h-32.4c-1.7,0-3.1-1.4-3.1-3.1V138  c0-1.7,1.4-3.1,3.1-3.1H382.8z"></path>
                    <path id="subscribe1_393_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" d="M393.6,145.7h-9.8c-0.6,0-1.1-0.5-1.1-1.1v-9.8"></path>
                    <line id="subscribe1_45_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" x1="388.4" y1="151" x2="360.8" y2="151"></line>
                    <line id="subscribe1_390_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" x1="388.4" y1="157.2" x2="360.8" y2="157.2"></line>
                    <line id="subscribe1_389_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" x1="388.4" y1="163.4" x2="360.8" y2="163.4"></line>
                    <line id="subscribe1_388_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" x1="388.4" y1="169.5" x2="360.8" y2="169.5"></line>
                    <path id="subscribe1_387_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M355,155.2V138c0-1.7,1.4-3.1,3.1-3.1h24.7l10.9,10.9v37.9c0,1.7-1.4,3.1-3.1,3.1H385"></path>
                    <path id="subscribe1_385_" class="subscribe-1-4 fill-white"
                          d="M385.3,189.5h-52c-1.2,0-2.3-1-2.3-2.3V155c0-1,0.8-1.9,1.9-1.9h8.9c0.6,0,1.3,0.3,1.6,0.9  l2.3,3.6h33.1c1.2,0,2.2,1,2.2,2.2v25.4C380.9,187.2,382.4,189.5,385.3,189.5z"></path>
                    <path id="subscribe1_44_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                          d="M380.9,185.1v-3.7H331v5.8c0,1.2,1,2.3,2.3,2.3h52C382.4,189.5,380.9,187.2,380.9,185.1z"></path>
                    <path id="subscribe1_433_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M331,189.3V155c0-1,0.8-1.9,1.9-1.9h8.9c0.6,0,1.3,0.3,1.6,0.9l2.3,3.6h33.1  c1.2,0,2.2,1,2.2,2.2v25.4c0,2,1.5,4.4,4.4,4.4"></path>
                    <line id="subscribe1_81_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" x1="378.7" y1="69.4" x2="448" y2="69.4"></line>
                    <path id="subscribe1_442_" class="subscribe-1-2 fill-primary"
                          d="M383.8,33.7c0,0.8-0.6,1.4-1.4,1.4s-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4  C383.2,32.4,383.8,33,383.8,33.7z"></path>
                    <path id="subscribe1_75_" class="subscribe-1-4 fill-white"
                          d="M341.1,184.9H191.6c-4.2,0-7.5-3.4-7.5-7.5v-13.1c0-4.2,3.4-7.5,7.5-7.5h149.5  c4.2,0,7.5,3.4,7.5,7.5v13.1C348.7,181.5,345.3,184.9,341.1,184.9z"></path>
                    <ellipse id="subscribe1_299_" class="subscribe-1-4 fill-white" cx="218.3" cy="135.2" rx="21.5"
                             ry="21.5"></ellipse>
                    <path id="subscribe1_298_" class="subscribe-1-4 fill-white"
                          d="M203.3,138.4c0,4.7-3.8,8.5-8.5,8.5s-8.5-3.8-8.5-8.5s3.8-8.5,8.5-8.5S203.3,133.7,203.3,138.4  z"></path>
                    <path id="subscribe1_74_" class="subscribe-1-4 fill-white"
                          d="M199.2,148.1c0,6.9-5.6,12.6-12.6,12.6c-6.9,0-12.6-5.6-12.6-12.6c0-6.9,5.6-12.6,12.6-12.6  C193.6,135.6,199.2,141.2,199.2,148.1z"></path>
                    <path id="subscribe1_73_" class="subscribe-1-4 fill-white"
                          d="M201,167.9c0,9.4-7.6,17-17,17s-17-7.6-17-17s7.6-17,17-17C193.4,151,201,158.6,201,167.9z"></path>
                    <path id="subscribe1_278_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" d="M184,184.9c-9.4,0-17-7.6-17-17c0-5.8,2.9-10.8,7.2-13.9"></path>
                    <path id="subscribe1_72_" class="subscribe-1-4 fill-white"
                          d="M244.7,152.3c0,3.9-3.2,7.1-7.1,7.1c-3.9,0-7.1-3.2-7.1-7.1c0-3.9,3.2-7.1,7.1-7.1  S244.7,148.4,244.7,152.3z"></path>
                    <ellipse id="subscribe1_71_" class="subscribe-1-4 fill-white" cx="312" cy="134.3" rx="19.6"
                             ry="19.6"></ellipse>
                    <path id="subscribe1_435_" class="subscribe-1-4 fill-white"
                          d="M334.9,145.2c-0.6,6.9-5.6,12.5-12.5,12.5s-12.5-5.6-12.5-12.5s5.6-12.5,12.5-12.5  S335.6,138.3,334.9,145.2z"></path>
                    <path id="subscribe1_284_" class="subscribe-1-4 fill-white"
                          d="M322.4,153.9c-0.6,6.9-5.6,12.5-12.5,12.5s-12.5-5.6-12.5-12.5s5.6-12.5,12.5-12.5  C316.8,141.3,323,147,322.4,153.9z"></path>
                    <path id="subscribe1_285_" class="subscribe-1-4 fill-white"
                          d="M236.1,154c-1.2,6.9-10.7,12.5-23.9,12.5s-23.9-5.6-23.9-12.5s10.7-12.5,23.9-12.5  C225.4,141.5,237.3,147.1,236.1,154z"></path>
                    <path id="subscribe1_70_" class="subscribe-1-4 fill-white"
                          d="M360,148.2c-0.9,10.2-8.2,18.3-18.3,18.3c-10.1,0-18.3-8.2-18.3-18.3s8.2-18.3,18.3-18.3  S360.9,138.2,360,148.2z"></path>
                    <path id="subscribe1_69_" class="subscribe-1-4 fill-white"
                          d="M355,167.2c-0.9,9.8-7.9,17.7-17.7,17.7c-9.8,0-17.7-7.9-17.7-17.7s7.9-17.7,17.7-17.7  C347,149.5,355.8,157.5,355,167.2z"></path>
                    <path id="subscribe1_292_" class="subscribe-1-4 fill-white"
                          d="M306.8,147.3c0,6.4-5.2,11.5-11.5,11.5c-6.4,0-11.5-5.2-11.5-11.5s5.2-11.5,11.5-11.5  C301.6,135.7,306.8,140.9,306.8,147.3z"></path>
                    <path id="subscribe1_290_" class="subscribe-1-4 fill-white"
                          d="M291.9,157.4c0,3.7-3,6.7-6.7,6.7s-6.7-3-6.7-6.7s3-6.7,6.7-6.7  C288.9,150.6,291.9,153.6,291.9,157.4z"></path>
                    <path id="subscribe1_289_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" d="M277.9,158c0-3.7,3-6.7,6.7-6.7"></path>
                    <path id="subscribe1_288_" class="subscribe-1-4 fill-white"
                          d="M264.3,161.6c0,4.3-6,7.8-13.4,7.8s-13.4-3.5-13.4-7.8s6-7.8,13.4-7.8  C258.3,153.9,264.3,157.4,264.3,161.6z"></path>
                    <path id="subscribe1_434_" class="subscribe-1-4 fill-white"
                          d="M342,130.5c0,5-8.5,18.3-8.5,12.2c0-5-9-4-9-9s4-9,9-9C338.5,124.6,342,125.5,342,130.5z"></path>
                    <path id="subscribe1_68_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" d="M329.9,125.4c1.1-0.5,2.3-0.7,3.6-0.7c3.7,0,6.8,2.2,8.2,5.3"></path>
                    <path id="subscribe1_67_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M298,148.1c-3.5-3.5-5.7-8.4-5.7-13.9c0-5.4,2.2-10.3,5.7-13.9c3.5-3.5,8.4-5.7,13.9-5.7  c5.4,0,10.3,2.2,13.9,5.7c3.5,3.5,5.7,8.4,5.7,13.9"></path>
                    <rect id="subscribe1_449_" x="252.3" y="79.6" class="subscribe-1-4 fill-white" width="22.8"
                          height="9.6"></rect>
                    <rect id="subscribe1_710_" x="252.3" y="79.6" class="subscribe-1-0 fill-none stroke-primary"
                          stroke-width="2.7498" stroke-miterlimit="10" width="22.8" height="9.6"></rect>
                    <path id="subscribe1_516_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                          d="M228.6,79.7h21.6v-47l-8,10.8c-2.3,3.1-5,5.9-7.8,8.5c-3.7,3.6-5.9,8.6-5.9,13.9L228.6,79.7  L228.6,79.7z"></path>
                    <polygon id="subscribe1_714_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                             points="243.3,42.1 243.3,79.7 250.2,79.7 250.2,32.7 "></polygon>
                    <path id="subscribe1_513_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                          d="M297.7,80.6h-21.6v-47l8,10.8c2.3,3.1,5,5.9,7.8,8.5c3.7,3.6,5.9,8.6,5.9,13.9L297.7,80.6  L297.7,80.6z"></path>
                    <polygon id="subscribe1_712_" class="subscribe-1-3 fill-primary-lighter" opacity=".5"
                             points="283.6,41.3 283.6,79 276.7,79 276.7,32 "></polygon>
                    <path id="subscribe1_549_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M228.6,79.7h21.6v-47l-8,10.8c-2.3,3.1-5,5.9-7.8,8.5c-3.7,3.6-5.9,8.6-5.9,13.9L228.6,79.7  L228.6,79.7z"></path>
                    <path id="subscribe1_548_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M297.7,79.7h-21.6v-47l8,10.8c2.3,3.1,5,5.9,7.8,8.5c3.7,3.6,5.9,8.6,5.9,13.9L297.7,79.7  L297.7,79.7z"></path>
                    <path id="subscribe1_511_" class="subscribe-1-4 fill-white"
                          d="M278.2,84.4h-29.7V22.9c0-7.2,3.3-14,9-18.4l2.7-2c1.9-1.5,4.5-1.5,6.4,0l2.9,2.2  c5.5,4.3,8.8,10.9,8.8,17.9L278.2,84.4L278.2,84.4z"></path>
                    <path id="subscribe1_509_" class="subscribe-1-2 fill-primary"
                          d="M255.8,6.4l3.5-2.7c2.5-1.9,6-1.9,8.5,0l3.9,3L255.8,6.4z"></path>
                    <path id="subscribe1_715_" class="subscribe-1-3 fill-primary-lighter" opacity=".3"
                          d="M264.1,4.5l2.6-2l-0.1-0.1c-1.9-1.5-4.5-1.5-6.4,0l-2.7,2c-5.7,4.4-9,11.2-9,18.4v61.6h6.5  V22.9C255,15.7,258.4,8.9,264.1,4.5z"></path>
                    <path id="subscribe1_465_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" d="M255.8,35.6c0-4.2,3.4-7.6,7.6-7.6c4.2,0,7.6,3.4,7.6,7.6"></path>
                    <path id="subscribe1_517_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M278.2,84.4h-29.7V22.9c0-7.2,3.3-14,9-18.4l2.7-2c1.9-1.5,4.5-1.5,6.4,0l2.9,2.2  c5.5,4.3,8.8,10.9,8.8,17.9L278.2,84.4L278.2,84.4z"></path>
                    <path id="subscribe1_440_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M295.2,158.8c-6.4,0-11.5-5.2-11.5-11.5c0-5.3,3.6-9.8,8.6-11.1"></path>
                    <path id="subscribe1_279_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M196.8,135.2c0-11.9,9.6-21.5,21.5-21.5s21.5,9.6,21.5,21.5c0,8-4.4,15-10.9,18.7"></path>
                    <path id="subscribe1_66_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" d="M190.8,130.9c1.2-0.6,2.6-1,4-1c0.9,0,1.7,0.1,2.5,0.4"></path>
                    <path id="subscribe1_277_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" d="M237.5,145.2c3.9,0,7.1,3.2,7.1,7.1c0,3.9-3.2,7.1-7.1,7.1"></path>
                    <path id="subscribe1_276_" class="subscribe-1-4 fill-white"
                          d="M291.8,168.9h-50.7l14.7-16.5V91.2h15.7l-0.7,55.8c0,3.4,1.5,6.5,4.1,8.6L291.8,168.9z"></path>
                    <path id="subscribe1_514_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" d="M271.2,91.2v58.2c0,3.4,2.7,6.1,6.1,6.1h1.6"></path>
                    <path id="subscribe1_512_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10" d="M244.6,154h5.6c3.1,0,5.5-2.5,5.5-5.5V91.2"></path>
                    <path id="subscribe1_275_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M248.9,180.5c0-1.2,0.2-2.4,0.6-3.4c0.4-1.1,1.1-2.1,1.9-3c0.8-0.9,1.8-1.6,3-2.1  s2.4-0.7,3.6-0.8c1.2,0,2.4,0.2,3.4,0.6s2.1,1.1,3,1.9"></path>
                    <path id="subscribe1_65_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M203.3,158.5c0-1.2,0.2-2.4,0.6-3.4c0.4-1.1,1.1-2.1,1.9-3c0.8-0.9,1.8-1.6,3-2.1  s2.4-0.7,3.6-0.8c1.2,0,2.4,0.2,3.4,0.6c1.1,0.4,2.1,1.1,3,1.9"></path>
                    <path id="subscribe1_64_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M306.8,141.6c1.1-0.5,2.3-0.7,3.4-0.8s2.3,0.2,3.5,0.6c1.1,0.4,2.2,1.1,3.1,1.9  c0.9,0.9,1.6,1.9,2.1,3s0.7,2.3,0.8,3.4c0,1.2-0.2,2.3-0.6,3.5"></path>
                    <path id="subscribe1_63_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M259.2,171.6c0.2-1.2,0.6-2.3,1.2-3.4c0.6-1.1,1.5-2,2.4-2.7c1-0.7,2-1.2,3.2-1.5  c1.1-0.3,2.3-0.4,3.5-0.2"></path>
                    <path id="subscribe1_286_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M319.6,173.4c0.2-1.2,0.6-2.3,1.2-3.4c0.6-1.1,1.5-2,2.4-2.7c1-0.7,2-1.2,3.2-1.5  c1.1-0.3,2.3-0.4,3.5-0.2"></path>
                    <path id="subscribe1_62_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M290,183.6c-1.1-0.4-2.2-1-3.2-1.8s-1.7-1.8-2.2-2.9s-0.8-2.2-0.9-3.4s0.1-2.4,0.4-3.5"></path>
                    <path id="subscribe1_61_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M177.7,157c-2.3-2.3-3.7-5.4-3.7-8.9c0-6.9,5.6-12.6,12.6-12.6c3,0,5.8,1.1,8,2.9"></path>
                    <path id="subscribe1_60_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M337.3,130.4c1.4-0.3,2.8-0.5,4.3-0.5c10.1,0,19.2,8.2,18.3,18.3c-0.7,7.3-4.7,13.7-10.6,16.6"></path>
                    <path id="subscribe1_59_" class="subscribe-1-0 fill-none stroke-primary" stroke-width="2.7498"
                          stroke-miterlimit="10"
                          d="M354.4,161.5c0.6,1.8,0.8,3.7,0.6,5.7c-0.9,9.8-7.9,17.7-17.7,17.7"></path>
</svg>
            </figure>
        </div>
    </div>
@endsection
