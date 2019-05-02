@extends('index')

@if(app()->getLocale() == 'ar')
@section('title', 'نبذه عنا')
@else
@section('title', 'About Us')
@endif

@section('content')
<!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>{{trans('lang.aboutus')}}</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/home')}}">{{trans('lang.home')}}</a></li>
                    <li>{{trans('lang.aboutus')}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section about">
        <div class="auto-container">
            <div class="row no-gutters">
                <!-- Image Column -->
                <div class="image-column col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                            <h2>{{trans('lang.aboutus')}}</h2>
                        </div>
                        <div class="image-box">
                            <figure class="alphabet-img wow fadeInRight"><img src="assets/images/resource/alphabet-image.png" alt=""></figure>
                            <figure class="image wow fadeInRight" data-wow-delay='600ms'><img src="assets/images/resource/image-1.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-8 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="content-box">
                            <div class="title">
                                <h2>{{trans('lang.who we are')}}</h2>
                            </div>
                            <div class="about-text">
                            @if(app()->getLocale() == 'ar')
                            {{strip_tags(html_entity_decode($site_data['about_ar']))}}
                            @else
                            {{strip_tags(html_entity_decode($site_data['about_en']))}}
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->
@endsection