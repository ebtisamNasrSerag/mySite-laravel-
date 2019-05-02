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
        <li class="active">Slider</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box" id="users-list">
                <div class="box-header with-border">
                  <h3 class="box-title">Manage Your Slider</h3>
                  <button class="btn btn-danger pull-right open-popup-add"
                    type="button" data-target="{{url('/admin/slider/modal')}}" data-modal-target="#add-slider">Add New Slider </button>
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
                        <th>Title In Arabic</th>
                        <th>Title In English</th>
                        <th>Details In Arabic</th>
                        <th>Details In English</th>
                        <th style="width: 16%">Action</th>

                    </tr>
                    @foreach($sliders as $slider) 
                    <tr>
                      <td>{{$slider['id']}}</td>
                      <td>
                      	<img style="width: 100px; height:80px;" src="{{asset('assets/images/'.$slider['img'])}}" alt="">
                      </td>
                      <td>{{$slider['title_ar']}}</td>
                      <td>{{$slider['title_en']}}</td>
                      <td>{{$slider['details_ar']}}</td>
                      <td>{{$slider['details_en']}}</td>
                      <td><button class="btn btn-info open-popup-edit"  data-id= "$slider['id']" type="button" data-target="{{url('/admin/slider/edit/'.$slider['id'])}}" data-modal-target="#edit-slider{{$slider['id']}}">Edit <span class="fa fa-edit"></button>
                        <a href="{{url('/admin/slider/delete/'.$slider['id'])}}" class="btn btn-danger delete" >Delete   <span class="fa fa-trash"></a></td>

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
            	
            	<form action="" class="form-modal form" method="" enctype='multipart/form-data'>
                
                	<input type='hidden' id="id" name='id' class='modal_hiddenid'>
                	{{csrf_field()}}
                  <div id="form-results"></div>
                  <div class="form-group col-sm-12">
                    <label for="title">Title In Arabic</label>
                    <input type="text" class="form-control" id="title_ar" 
                    name="title_ar" placeholder="Title In Arabic">
                  </div>

                  <div class="form-group col-sm-12">
                    <label for="title">Title In English</label>
                    <input type="text" class="form-control" id="title_en" 
                    name="title_en" placeholder="Title In English">
                  </div>

                  <div class="form-group col-sm-12">
                    <label for="title">Details In Arabic</label>
                    <input type="text" class="form-control" id="details_ar" 
                    name="details_ar" placeholder="details In Arabic">
                  </div>

                  <div class="form-group col-sm-12">
                    <label for="title">details In English</label>
                    <input type="text" class="form-control" id="details_en" 
                    name="details_en" placeholder="details In English">
                  </div>

                  <div class="form-group col-sm-12">
                    <label for="title">Show details on slider</label>
                    <input type="checkbox" id="show_details" name="show_details" checked data-toggle="toggle">
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
          $('.form').attr('method','POST');
					$('#saveBtn').html("Add Slider");
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

			        $('#saveBtn').html("Edit Slider");
			        $('#id').val(data.id);
                    
			        $('#title_ar').val(data.title_ar);
			        $('#title_en').val(data.title_en);
			        $('#details_ar').val(data.details_ar);
			        $('#details_en').val(data.details_en);
			        if(data.show_details == 1)
			        {
			           $('#show_details').attr('checked');
			        }else{
			           $('#show_details').removeAttr('checked');
			        }
                    var image_path="{{URL::asset('assets/images/')}}/";
			        $('#img').html('<img src='+image_path+data.img+' alt="" style="width: 150px;height: 100px;">');
			        $('.modal').modal('show');
			  	}
		    });
		
		return false;
	});

    </script>
@endsection
