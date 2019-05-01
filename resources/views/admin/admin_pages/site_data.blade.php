@extends('admin.index')
@section('content')

@php
if(!empty($site_data))
{

$address_ar = $site_data['address_ar'];
$address_en = $site_data['address_en'];
$email = $site_data['email'];
$phone = $site_data['phone'];

$facebook = $site_data['facebook'];
$youtube = $site_data['youtube'];
$twitter = $site_data['twitter'];
$insta = $site_data['insta'];

$about_ar = $site_data['about_ar'];
$about_en = $site_data['about_en'];
$logo = $site_data['logo'];

$lat = $site_data['map_lat'];
$lng = $site_data['map_lng'];
}

if(isset($data['success']) ){
$success = $data['success'];
}

if(isset($data['errors']) ){
$err = implode('<br>',$data['errors']);
}

@endphp
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Site Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box" id="users-list">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-cog"></i> Site Data </h3>
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                   <form action="{{url('/admin/site_data/edit')}}" enctype="multipart/form-data"
                    method="POST">
                    {{csrf_field()}}
                     @if(isset($success))
                      <div class="alert alert-success"> {{$success}}</div>
                    @endif 
                    @if(isset($err))
                      <div class="alert alert-danger"> {{$err}}</div>
                    @endif
                       
                        <div class="form-group col-sm-12">
                          <label for="address_ar">Address in Arabic :</label>
                          <input type="text" class="form-control" id="address_ar" name="address_ar" placeholder="" value="@if(isset($address_ar)){{$address_ar}} @endif">
                        </div>

                        <div class="form-group col-sm-12">
                          <label for="address_en">Address in English :</label>
                          <input type="text" class="form-control" id="address_en" name="address_en" placeholder="" value="@if(isset($address_en)){{$address_en}} @endif">
                        </div>

                        <div class="form-group col-sm-12">
                          <label for="email">Site Email :</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Site email" value="@if(isset($email)){{$email}} @endif">
                        </div>

                        <div class="form-group col-sm-12">
                          <label for="phone">Phone Number :</label>
                          <input type="text" class="form-control" id="phone" name="phone" placeholder="phone Number" value="@if(isset($phone)){{$phone}} @endif">
                        </div>

                        <div class="form-group col-sm-12">
                          <label for="facebook">Facebook Link :</label>
                          <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook Link" value="@if(isset($facebook)){{$facebook}} @endif">
                        </div>

                        <div class="form-group col-sm-12">
                          <label for="twitter">Twitter Link :</label>
                          <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter Link" value="@if(isset($twitter)){{$twitter}} @endif">
                        </div>

                        <div class="form-group col-sm-12">
                          <label for="youtube">youtube Link :</label>
                          <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Youtube Link" value="@if(isset($youtube)){{$youtube}} @endif">
                        </div>

                        <div class="form-group col-sm-12">
                          <label for="insta">Instagram Link :</label>
                          <input type="text" class="form-control" id="insta" name="insta" placeholder="Instagram Link" value="@if(isset($insta)){{$insta}} @endif">
                        </div>

                        <div class="form-group col-sm-12">
	                    <label for="about_ar">About Us in Arabic :</label>
	                    <textarea id="about_ar" class="details form-control CKEDITOR validate_input" name="about_ar" cols="30" rows="10">@if(isset($about_ar)){{$about_ar}} @endif</textarea>
	                  </div>

	                  <div class="form-group col-sm-12">
	                    <label for="about_en">About Us in English :</label>
	                    <textarea id="about_en" class="details form-control CKEDITOR validate_input" name="about_en" cols="30" rows="10">@if(isset($about_en)){{$about_en}} @endif</textarea>
	                  </div>

	                  @if(isset($logo))
	                    <div class="form-group col-sm-12">
	                      <label for="logo">Logo :</label>
	                      <div id="logo">
	                        <img  src="{{asset('assets/images/'.$logo)}}" alt="" style="width: 200px;height: 100px;">
	                      </div>
	                  </div>
	                  @endif

	                  <div class="form-group col-sm-12">
	                    <label for="logo">Logo Change :</label>
	                    <input type="file" class="form-control" id="logo" 
	                    name="logo">
	                  </div>

                      <div class="form-group col-sm-12">
	                     <input type="hidden" name="lat" id="lat"  value="@if(isset($lat)){{$lat}} @endif"/>
		                 <input type="hidden" name="lng" id="lon"  value="@if(isset($lng)){{$lng}} @endif"/>
		                 <label for="inputEmail3">Locate your Location on Map  :</label>
		                 <div id="map" style="height: 400px ; width: 85% ;float: right;"> </div> 
	                  </div>

                      <button class="btn btn-info">Save</button>
                    </form>
                                   
                  
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div>
          </div>
      </div>
      

    </section>
      

@endsection
@section('script')
<script type="text/javascript" src="operations.js"></script>
              <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdB-OtsN9eywcvWkkR0XKrVD8HiIxBEDE&callback=initMap">
    </script>
@endsection