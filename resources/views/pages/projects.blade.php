@extends('index')

@if(app()->getLocale() == 'ar')
@section('title', 'المشاريع')
@else
@section('title', 'Projects')
@endif

@section('content')
<!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>{{trans('lang.projects')}}</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/home')}}">{{trans('lang.home')}}</a></li>
                    <li>{{trans('lang.projects')}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Projects Section -->
    <section class="projects-section alternate projects">
        <div class="auto-container">
             <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">{{trans('lang.All')}}</li>
                        @foreach($categories as $category)
                        <li class="filter" data-role="button" data-filter=".cat{{$category['id']}}">
                        	@if(app()->getLocale() == 'ar')
                            {{$category['name_ar']}}
                            @else
                            {{$category['name_en']}}
                            @endif
                        </li>
                        @endforeach
                        
                    </ul>
                </div>

                <div class="filter-list row">
                	@foreach($projects as $project)
                    <!-- Project Block -->
                    <div class="project-block all mix cat{{$project['cat_id']}} col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/{{$project['img']}}" alt=""></figure>
                            <div class="overlay-box">
                                <h4><a href="project-detail.html">
                                	@if(app()->getLocale() == 'ar')
		                            {{$project['name_ar']}}
		                            @else
		                            {{$project['name_en']}}
		                            @endif
                                </a></h4>
                                <div class="btn-box">
                                    <a href="assets/images/gallery/2-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                    <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!--Post Share Options-->
            <div class="styled-pagination">
                <ul class="clearfix">
                    <li class="prev-post"><a href="#"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next-post"><a href="#"> Next <span class="fa fa-long-arrow-right"></span> </a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection