@extends('index')

@if(app()->getLocale() == 'ar')
@section('title', 'الخدمات')
@else
@section('title', 'Services')
@endif

@section('content')
<!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>{{trans('lang.services')}}</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/home')}}">{{trans('lang.home')}}</a></li>
                    <li>{{trans('lang.services')}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar services-sidebar">
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul id="tabs" class="nav blog-cat" data-tabs="tabs">
                            	@foreach($services as $key=>$service)
                                <li class="{{$key == 0 ? 'active' : ''}}"><a href="#{{$key}}" data-toggle="tab">
                                	@if(app()->getLocale() == 'ar')
		                            {{$service['name_ar']}}
		                            @else
		                            {{$service['name_en']}}
		                            @endif
                                </a></li>
                                @endforeach
                                
                            </ul>
                        </div>

                        <!--Help Box-->
                        <div class="help-box" style="background-image:url(assets/images/resource/brochure-bg.jpg)">
                            <div class="inner">
                                <span class="title">{{trans('lang.Quick Contact')}}</span>
                                <h2>{{trans('lang.Get Solution')}}</h2>
                                <div class="text">{{trans('lang.message fast contact')}}</div>
                                <a class="theme-btn btn-style-three" href="{{url('/contact')}}">{{trans('lang.contact')}}</a>
                            </div>
                        </div>
                    </aside>
                </div>

                <!--Content Side-->
                
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail tab-content">
                    @foreach($services as $key=>$service)	
                      <div class="tab-pane {{$key == 0 ? 'active' : ''}}" id="{{$key}}">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <figure class="image"><img src="assets/images//{{$service['img']}}" alt="" /></figure>
                                    <figure class="image"><img src="assets/images/{{$service['img']}}" alt="" /></figure>
                                    <figure class="image"><img src="assets/images/{{$service['img']}}" alt="" /></figure>
                                </div>
                            </div>
                            <div class="text">
                                <h3>
                                	@if(app()->getLocale() == 'ar')
		                            {{$service['name_ar']}}
		                            @else
		                            {{$service['name_en']}}
		                            @endif
		                        </h3>
                                <p>
                                	@if(app()->getLocale() == 'ar')
		                            {{$service['desc_ar']}}
		                            @else
		                            {{$service['desc_en']}}
		                            @endif
		                        </p>
                            </div>
                        </div>
                      </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection