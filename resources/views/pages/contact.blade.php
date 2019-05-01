@extends('index')

@if(app()->getLocale() == 'ar')
@section('title', 'تواصل معانا')
@else
@section('title', 'Contact Us')
@endif

@section('content')
 <!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>{{trans('lang.contact')}}</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/home')}}">{{trans('lang.home')}}</a></li>
                    <li>{{trans('lang.contact')}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">{{trans('lang.contact')}}</span>
                            <h2>{{trans('lang.contact')}}</h2>
                        </div>

                        <div class="contact-form">
                            <form class="form" action="{{url('/contact')}}">
                                <div id="form-results"></div>
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="username" placeholder="{{trans('lang.Name')}}" >
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="phone" placeholder="{{trans('lang.Phone num')}}">
                                    </div>


                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="email" name="email" placeholder="{{trans('lang.email')}}">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="{{trans('lang.Message')}}"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-three submit-btn" name="submit-form">{{trans('lang.send')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="contact-info">
                            <div class="row">
                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>{{trans('lang.Location')}}</h4>
                                        <p>
                                            @if(app()->getLocale() == 'ar')
                                            {{$site_data['address_ar']}}
                                            @else
                                            {{$site_data['address_en']}}
                                            @endif
                                        </p>
                                    </div>
                                </div>

                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>{{trans('lang.Call Us')}}</h4>
                                        <p>{{$site_data['phone']}}</p>
                                        
                                    </div>

                                </div>

                                <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner">
                                        <h4>{{trans('lang.email')}}</h4>
                                        <p><a >{{$site_data['email']}}</a></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="map col-lg-5 col-md-12 col-sm-12">
                  <iframe src="http://maps.google.com/maps?q={{ $site_data['map_lat']}}, {{ $site_data['map_lng']}}&z=15&output=embed" width="100%" height="100%"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->
@endsection    