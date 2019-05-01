@extends('index')

@if(app()->getLocale() == 'ar')
@section('title', 'الرئيسية')
@else
@section('title', 'Home')
@endif

@section('content')

    <!-- Bnner Section -->
        <section class="banner-section-four">
            <div class="banner-carousel-three owl-carousel owl-theme">
                @foreach($sliders as $slider)
                <div class="slide-item" style="background-image: url(assets/images/{{$slider['img']}});">
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>@if(app()->getLocale() == 'ar')
                            {{$slider['title_ar']}}
                            @else
                            {{$slider['title_en']}}
                            @endif
                            </h2>
                            @if($slider['show_details'] == 1)
                            <div class="text">@if(app()->getLocale() == 'ar')
                            {{$slider['details_ar']}}
                            @else
                            {{$slider['details_en']}}
                            @endif

                            </div>
                            @endif
                            <div class="link-box">
                                <a href="{{url('/gallery')}}" class="theme-btn btn-style-one">{{trans('lang.check_art')}}</a>
                            </div>
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>
        </section>
        <!-- End Bnner Section -->


        <!-- About Section -->
        <section class="about-section about-sec">
            <div class="auto-container">
                <div class="row no-gutters">
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
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
                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                            <div class="content-box">
                                <div class="title">
                                    <h2>{{trans('lang.who we are')}}</h2>
                                </div>
                                <div class="text">@if(app()->getLocale() == 'ar')
                                {{$site_data['about_ar']}}
                                @else
                                {{$site_data['about_en']}}
                                @endif</div>
                                <div class="link-box"><a href="{{url('/about')}}" class="theme-btn btn-style-one">{{trans('lang.aboutus')}}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Section -->

        <!-- Services Section -->
        <section class="services-section">
            <div class="upper-box">
                <div class="auto-container">
                    <div class="sec-title text-center light">
                        <span class="float-text">{{trans('lang.services')}}</span>
                        <h2>{{trans('lang.our services')}}</h2>
                    </div>
                </div>
            </div>

            <div class="services-box">
                <div class="auto-container">
                    <div class="services-carousel owl-carousel owl-theme">
                        @foreach($services as $service)
                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="{{url('/service_details/'.$service['id'])}}"><img src="assets/images/{{$service['img']}}" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{url('/service_details/'.$service['id'])}}">
                                    @if(app()->getLocale() == 'ar')
                                    {{$service['name_ar']}}
                                    @else
                                    {{$service['name_en']}}
                                    @endif
                                    </a></h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </section>
        <!--End Services Section -->

        <!-- Process Section -->
        <section class="process-section news-section alternate">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="float-text">{{trans('lang.CHOOSE US')}}</span>
                    <h2>{{trans('lang.WHY CHOOSE US')}}</h2>
                </div>
                <div class="row">
                    @foreach($whyus as $why)
                    <!-- Process Block -->
                    <div class="process-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <span class="count">0{{$why['id']}}</span>
                            <h4>
                                @if(app()->getLocale() == 'ar')
                                    {{$why['title_ar']}}
                                    @else
                                    {{$why['title_en']}}
                                    @endif
                            </h4>
                            <div class="text">
                                @if(app()->getLocale() == 'ar')
                                    {{$why['desc_ar']}}
                                    @else
                                    {{$why['desc_en']}}
                                    @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--End Process Section -->


        <!-- Project Section -->
        <section class="projects-section">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="float-text">{{trans('lang.projects')}}</span>
                    <h2>{{trans('lang.our projects')}}</h2>
                </div>
            </div>

            <div class="inner-container">
                <div class="projects-carousel owl-carousel owl-theme">
                    @foreach($projects as $project)
                    <!-- Project Block -->
                    <div class="project-block">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <h4><a href="{{url('/project_details/'.$project['id'])}}">
                                    @if(app()->getLocale() == 'ar')
                                    {{$project['name_ar']}}
                                    @else
                                    {{$project['name_en']}}
                                    @endif
                                </a></h4>
                                <div class="btn-box">
                                    <a href="assets/images/{{$project['img']}}" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                    <a href="{{url('/project_details/'.$project['id'])}}"><i class="fa fa-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </section>
        <!--End Project Section -->
@endsection