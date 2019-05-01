@extends('admin.index')
@section('content')
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
        <li class="active">Contacts</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box" id="users-list">
                <div class="box-header with-border">
                  <h3 class="box-title">Contacts</h3>
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  @if(session()->has('message'))
				    <div class="alert alert-success">
				        {{ session()->get('message') }}
				    </div>
				 @endif
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th style="width: 16%">Action</th>

                    </tr>
                    @foreach($contacts as $contact) 
                    <tr>
                      <td>{{$contact['id']}}</td>
                      <td>{{$contact['name']}}</td>
                      <td>{{$contact['phone']}}</td>
                      <td>{{$contact['email']}}</td>
                      <td>{{$contact['msg']}}</td>
                      <td>
                        <a href="{{url('/admin/contact/delete/'.$contact['id'])}}" class="btn btn-danger delete" >Delete   <span class="fa fa-trash"></a></td>

                    </tr>
                  @endforeach
                    
                  </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  <!-- <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul> -->
                </div>
              </div>
          </div>
      </div>
    </section>
    @endsection
