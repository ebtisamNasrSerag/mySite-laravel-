
<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-one">
            <div class="auto-container">
                <!--Header Top-->
                <div class="header-top header-lower">
                    <div class="auto-container">
                        <div class="inner-container clearfix">
                            <div class="top-left">
                                <ul class="contact-list clearfix">
                                    <li><i class="fa fa-volume-control-phone"></i> {{$site_data['phone']}}</li>
                                    <li><i class="fa fa-envelope"></i><a href="{{$site_data['email']}}">{{$site_data['email']}}</a></li>
                                </ul>
                            </div>
                            <div class="top-right">
                                <ul class="social-icon-four clearfix">
                                    <li><a href="{{$site_data['youtube']}}"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="{{$site_data['facebook']}}"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="{{$site_data['insta']}}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{$site_data['twitter']}}"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Header Top -->

                <div class="header-lower">
                    <div class="main-box clearfix">
                        <div class="logo-box">
                            <div class="logo"><a href="{{url('/home')}}"><img src="{{ asset('assets/images/'.$site_data['logo'])}}" alt="" title=""></a></div>
                        </div>

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md ">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu-button"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        @php
                                        $pages = ['home','about','services','projects','gallery','contact'];
                                        @endphp
                                        @foreach($pages as $page)
                                        <li class="{{ url()->current() ==  url('/'.$page)? 'current' : '' }}"><a href="{{url('/'.$page)}}"
                                        >{{trans('lang.'.$page)}}</a></li>
                                        @endforeach

                                        
                                    </ul>
                                </div>
                            </nav><!-- Main Menu End-->

                            <!-- Outer Box-->
                            <div class="outer-box">
                                <!--Search Box-->
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        @if(app()->getLocale() == 'en')
                                        <button id="lang" class="search-box-btn" type="button" onclick="window.location='{{url("lang/ar")}}'">
                                            <span>AR</span>
                                        </button>
                                        @else
                                        <button id="lang" class="search-box-btn" type="button" onclick="window.location='{{url("lang/en")}}'">
                                            <span>EN</span>
                                        </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header -->  
           