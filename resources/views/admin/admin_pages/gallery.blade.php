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
        <li class="active">Gallery</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box" id="users-list">
                <div class="box-header with-border">
                  <h3 class="box-title">Manage Your Gallery</h3>
                  <button class="btn btn-danger pull-right open-popup-add"
                    type="button" data-target="{{url('/admin/gallery/modal')}}" data-modal-target="#add-gallery">Add New Image </button>
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
                        <th>Image</th>
                        <th>Name In Ar</th>
                        <th>Name In En</th>

                        <th style="width: 16%">Action</th>

                    </tr>
                    @foreach($galleries as $gallery) 
                    <tr>
                      <td>{{$gallery['id']}}</td>
                      <td>
                      	<img style="width: 100px; height:80px;" src="{{asset('assets/images/'.$gallery['url'])}}" alt="">
                      </td>
                      <td>{{$gallery['name_ar']}}</td>
                      <td>{{$gallery['name_en']}}</td>

                      <td><button class="btn btn-info open-popup-edit"  data-id= "$gallery['id']" type="button" data-target="{{url('/admin/gallery/edit/'.$gallery['id'])}}" data-modal-target="#edit-gallery{{$gallery['id']}}">Edit <span class="fa fa-edit"></button>
                        <a href="{{url('/admin/gallery/delete/'.$gallery['id'])}}" class="btn btn-danger delete" >Delete   <span class="fa fa-trash"></a></td>

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
     
      <!-- pop up modal -->
      <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" onclick="window.location.reload();" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="heading"></h4>
            </div>
            <div class="modal-body">
            	
            	<form action="" class="form-modal form" method="">
                
                	<input type='hidden' id="id" name='id' class='modal_hiddenid'>
                	{{csrf_field()}}
                  <div id="form-results"></div>
                  
                  <div class="form-group col-sm-12">
                    <label for="title">Name In Arabic</label>
                    <input type="text" class="form-control" id="name_ar" 
                    name="name_ar" placeholder="Name In Arabic">
                  </div>

                  <div class="form-group col-sm-12">
                    <label for="title">Name In English</label>
                    <input type="text" class="form-control" id="name_en" 
                    name="name_en" placeholder="Name In English">
                  </div>


                  <div class="clearfix"></div>


                   <div class="form-group col-sm-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" 
                    name="image">
                  </div>
                  
                    <div class="form-group col-sm-6" id="img">
                   </div>

                  <div class="clearfix"></div>
                  <button class="btn btn-info submit-btn" id="saveBtn">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" onclick="window.location.reload();" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    
@endsection
@section('script')
<script type="text/javascript">
    
	$('.open-popup-add').on('click', function(){
		btn = $(this);
		url = btn.data('target');
		modalTarget = btn.data('modal-target');

		//remove the target from page
		$(modalTarget).remove();
			$.ajax({
				url : url,
				type : 'GET',
				success : function(data){

					$('.modal').attr('id', data.target);
					document.getElementById("heading").innerHTML= data.heading;
					$('.form').attr('action',data.action);
					$('#saveBtn').html("Add Image");

					$('.modal').modal('show');
  				}
		    });
		
		return false;
	});

      //popup for edit
	$('.open-popup-edit').on('click', function(){
		btn = $(this);
		url = btn.data('target');
		modalTarget = btn.data('modal-target');

    var id = btn.data('id');
    $('.modal_hiddenid').val(id);
		
		$(modalTarget).remove();
		
			$.ajax({
				url : url,
				type : 'GET',
				success : function(data){

          $('.modal').attr('id', data.target);
					document.getElementById("heading").innerHTML= data.heading;
					$('.form').attr('action',data.action);
					$('.form').attr('method','POST');

			        $('#saveBtn').html("Edit Image");
			        $('#id').val(data.id);
              
                      
			        $('#name_ar').val(data.name_ar);
			        $('#name_en').val(data.name_en);
              
			        
			       
              var image_path="{{URL::asset('assets/images/')}}/";
			        $('#img').html('<img src='+image_path+data.url+' alt="" style="width: 150px;height: 100px;">');
			        $('.modal').modal('show');
			  	}
		    });
		
		return false;
	});

    </script>

    <script type="text/javascript" src="operations.js"></script>
              <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdB-OtsN9eywcvWkkR0XKrVD8HiIxBEDE&callback=initMap">
    </script>
@endsection
