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
        <li class="active">Projects</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box" id="users-list">
                <div class="box-header with-border">
                  <h3 class="box-title">Manage Your Projects</h3>
                  <button class="btn btn-danger pull-right open-popup-add"
                    type="button" data-target="{{url('/admin/project/modal')}}" data-modal-target="#add-project">Add New Project </button>
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
                        <th>Category</th>
                        <th>Name In Ar</th>
                        <th>Name In En</th>
                        <th>Project Images</th>
                        <th style="width: 16%">Action</th>

                    </tr>
                    @foreach($projects as $project) 
                    <tr>
                      <td>{{$project['id']}}</td>
                      <td>
                      	<img style="width: 100px; height:80px;" src="{{asset('assets/images/'.$project['img'])}}" alt="">
                      </td>
                      <td>{{$project['cat_id']}}</td>
                      <td>{{$project['name_ar']}}</td>
                      <td>{{$project['name_en']}}</td>
                      <td>
                        <a href="{{url('/admin/project/images/'.$project['id'])}}" class="btn btn-primary" >Add project Images </a>
                      </td>

                      <td><button class="btn btn-info open-popup-edit"  data-id= "$project['id']" type="button" data-target="{{url('/admin/project/edit/'.$project['id'])}}" data-modal-target="#edit-project{{$project['id']}}">Edit <span class="fa fa-edit"></button>
                        <a href="{{url('/admin/project/delete/'.$project['id'])}}" class="btn btn-danger delete" >Delete   <span class="fa fa-trash"></a></td>

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
                    <label for="category_id">Category</label>
                    <select id="cat_id"  class="form-control" name="cat_id">
                    
                    </select>
                  </div>
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

                  <div class="form-group col-sm-12">
                    <label for="title">Description In Arabic</label>
                    <textarea id="desc_ar" class="details form-control CKEDITOR validate_input" name="desc_ar" cols="30" rows="10"></textarea>
                  </div>

                  <div class="form-group col-sm-12">
                    <label for="title">Description In English</label>
                    <textarea id="desc_en" class="details form-control CKEDITOR validate_input" name="desc_en" cols="30" rows="10"></textarea>
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

					$('.modal').attr('id', data.json['target']);
					document.getElementById("heading").innerHTML= data.json['heading'];
					$('.form').attr('action',data.json['action']);
          $('.form').attr('method','POST');
					$('#saveBtn').html("Add Project");

          var $select = $('#cat_id');
            $.each(data.categories, function(i, category) {
                $('<option>', {
                    value: category.id
                }).html(category.name_ar).appendTo($select);
            });

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
         //alert(data.json['target']);
          $('.modal').attr('id', data.json['target']);
					document.getElementById("heading").innerHTML= data.json['heading'];
					$('.form').attr('action',data.json['action']);
					$('.form').attr('method','POST');

			        $('#saveBtn').html("Edit Project");
			        $('#id').val(data.json['id']);

               $.each(data.categories, function(k, cat) {
                $('#cat_id').append('<option value="' + cat.id + '" >' + cat.name_ar + '</option>');
              });
               $( '#cat_id' ).find('option[value="' + data.json['cat_id'] + '"]').attr('selected','selected');
              
                      
			        $('#name_ar').val(data.json['name_ar']);
			        $('#name_en').val(data.json['name_en']);
              CKEDITOR.instances.desc_ar.setData( data.json['desc_ar'] );
              CKEDITOR.instances.desc_en.setData( data.json['desc_en'] );
			        
			       
              var image_path="{{URL::asset('assets/images/')}}/";
			        $('#img').html('<img src='+image_path+data.json['img']+' alt="" style="width: 150px;height: 100px;">');
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
