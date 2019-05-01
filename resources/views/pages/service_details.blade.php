@extends('index')

@if(app()->getLocale() == 'ar')
@section('title', 'تفاصيل الخدمة')
@else
@section('title', 'Service Details')
@endif

@section('content')
<!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>{{trans('lang.service Details')}}</h1>
                    <span class="title">
                        @if(app()->getLocale() == 'ar')
                            {{$service['name_ar']}}
                            @else
                            {{$service['name_en']}}
                            @endif
                    </span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/home')}}">{{trans('lang.home')}}</a></li>
                    <li>{{trans('lang.service Details')}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Project Detail Section-->
    <section class="project-details-section">
        <div class="project-detail">
            <div class="auto-container">
                <!-- Upper Box -->
                <div class="upper-box">
                    <!--Project Tabs-->
                    <div class="project-tabs tabs-box clearfix">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-1" class="tab-btn active-btn"><img src="{{ asset('assets/images/'.$service['img'])}}" alt=""></li>
                           
                        </ul>

                        <!--Tabs Container-->
                        <div class="tabs-content">
                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="tab-1">
                                <figure class="image"><a href="{{ asset('assets/images/'.$service['img'])}}" class="lightbox-image" data-fancybox="images"><img src="{{ asset('assets/images/'.$service['img'])}}" alt=""></a></figure>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!--Lower Content-->
                <div class="lower-content">
                    <div class="row clearfix">
                        <!--Content Column-->
                        <div class="content-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h3>{{trans('lang.service Details')}}</h3>
                                <p>
                                    @if(app()->getLocale() == 'ar')
                                    {{$service['desc_ar']}}
                                    @else
                                    {{$service['desc_en']}}
                                    @endif
                                </p>
                            </div>
                        </div>

                        <!--Info Column-->
                        <div class="info-column col-lg-4 col-md-12 col-sm-12 ">
                            <div class="inner-column wow fadeInRight">
                                <!--Help Box-->
                                <div class="help-box-two">
                                    <div class="inner">
                                        <span class="title">{{trans('lang.Quick Contact')}}</span>
                                        <h2>{{trans('lang.Get Solution')}}</h2>
                                        <div class="text">{{trans('lang.message fast contact')}}</div>
                                        <a class="theme-btn btn-style-two" href="{{url('/contact')}}">{{trans('lang.send')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio Details-->
@endsection