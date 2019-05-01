@extends('index')

@if(app()->getLocale() == 'ar')
@section('title', 'المعرض')
@else
@section('title', 'Gallery')
@endif

@section('content')
 <!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>{{trans('lang.gallery')}}</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/home')}}">{{trans('lang.home')}}</a></li>
                    <li>{{trans('lang.gallery')}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

<div class="gallery">
  <div class="container">
<div class="row">
@foreach($gallery as $img)
@if( $img['type'] == 0)
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="grid">
      <figure class="effect-sadie">
        <a href="assets/images/{{$img['url']}}" class="lightbox-image" data-fancybox="gallery">
        <img src="assets/images/{{$img['url']}}" alt="img02"/>
        <figcaption>
          <h2><i class="fa fa-search-plus"></i></h2>
          <p>
          	@if(app()->getLocale() == 'ar')
                {{$img['name_ar']}}
                @else
                {{$img['name_en']}}
                @endif
          </p>
        </figcaption>
        </a>
      </figure>
    </div>
  </div>
@endif
@endforeach

@foreach($gallery as $video)
@if( $video['type'] == 1)
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="video-section">
      <div class="video-column">
        <div class="video-box ">
          <figure class="image">
          	<object width="350" height="260" data="{{ $video['url'] }}" type="application/x-shockwave-flash"><param name="src" value="{{ $video['url']}}" /></object>
          </figure>
        </div>
      </div>
    </div>
  </div>
@endif
@endforeach

</div>
  </div>
</div>
@endsection