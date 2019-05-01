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
        <li class="active"><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box" id="users-list">
                <div class="box-header with-border">
                  <h2 class="box-title" >welcome in admin panel dashboard</h2>
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                                   
                 
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div>
          </div>
      </div>
      

    </section>
@endsection    