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
        <li class="active">Why Us</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <div class="col-sm-12">
              <div class="box" id="users-list">
                <div class="box-header with-border">
                  <h3 class="box-title">Manage Your Why Us</h3>
                  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Name In Arabic</th>
                        <th>Name In English</th>
                        <th>description In Arabic</th>
                        <th>description In English</th>
                        <th>Action</th>

                    </tr>
                   
                    @foreach($whyus as $why) 
                    <tr>
                      <td>{{$why['id']}}</td>
                      <td>{{$why['title_ar']}}</td>
                      <td>{{$why['title_en']}}</td>
                      <td>{{$why['desc_ar']}}</td>
                      <td>{{$why['desc_en']}}</td>
                      
                      <td><button class="btn btn-info open-popup-edit" data-id ="{{$why['id']}}" type="button" data-target="{{url('/admin/whyus/edit/'.$why['id'])}}" data-modal-target="#edit-whyus-{{$why['id']}}">Edit  <span class="fa fa-edit"></span></button>
                      </td>

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
                	<input type='hidden' name='id' class='modal_hiddenid'>
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
                    <label for="title">description In Arabic</label>
                    <input type="text" class="form-control" id="desc_ar" 
                    name="desc_ar" placeholder="description In Arabic">
                  </div>

                  <div class="form-group col-sm-12">
                    <label for="title">description In English</label>
                    <input type="text" class="form-control" id="desc_en" 
                    name="desc_en" placeholder="description In English">
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

			        $('#saveBtn').html("Edit Why Us");
			        $('#id').val(data.id);
                    
			        $('#title_ar').val(data.title_ar);
			        $('#title_en').val(data.title_en);
			        $('#desc_ar').val(data.desc_ar);
			        $('#desc_en').val(data.desc_en);
			        
			        $('.modal').modal('show');
			  	}
		    });
		
		return false;
	});

</script>
@endsection