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
        <li class="active">Project Images</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box" id="users-list">
                <div class="box-header with-border">
                  <h3 class="box-title">Project Images</h3>
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  @if(session()->has('message'))
				    <div class="alert alert-success">
				        {{ session()->get('message') }}
				    </div>
				 @endif
              <div class="container">
                <form class="form" action="{{url('/admin/project/images/add')}}" class="form-modal form" method="POST" enctype='multipart/form-data'>
                  {{csrf_field()}}
                  <div id="form-results"></div>

                   <div class="form-group col-sm-6">
                    <label for="image">Images :</label>
                    <input type="file" class="form-control" id="image" 
                    name="images[]" multiple="multiple">
                  </div>
                    <input type="hidden" name="project_id" value="{{$project_id}}">
                    <div class="form-group col-sm-6" id="img">
                   </div>

                  <div class="clearfix"></div>
                  <button class="btn btn-info submit-btn" >Save Images</button>
                </form>
              </div>
              <br><br><br><br><br>

                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>project_id</th>
                        
                        <th style="width: 16%">Action</th>

                    </tr>
                    @foreach($images as $image) 
                    <tr>
                      <td>{{$image['id']}}</td>
                      <td>
                        <img style="width: 100px; height:80px;" src="{{asset('assets/images/'.$image['img'])}}" alt="">
                      </td>
                      <td>{{$image['project_id']}}</td>
                      <td>
                        <a href="{{url('/admin/project/image/delete/'.$image['id'])}}" class="btn btn-danger delete" >Delete   <span class="fa fa-trash"></a></td>

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
