@extends('admin.index')
@section('content')

@php


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
        <li class="active">Setting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box" id="users-list">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-cog"></i> Setting </h3>
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                   <form action="{{url('/admin/setting/edit')}}" enctype="multipart/form-data"
                    method="POST">
                    {{csrf_field()}}
                     @if(isset($success))
                      <div class="alert alert-success"> {{$success}}</div>
                    @endif 
                    @if(isset($err))
                      <div class="alert alert-danger"> {{$err}}</div>
                    @endif
                       


                        <div class="form-group col-sm-12">
                          <label for="email">Email :</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{Auth::user()->email}}">
                        </div>

                        <div class="form-group col-sm-12">
                          <label for="password">Password :</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="" value="">
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
