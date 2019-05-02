
<!-- /.content -->
  </div>
<!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019 <a href="http://www.aymanelash.com">Ebtisam Nasr</a>.</strong> All rights
    reserved.
  </footer>
<!-- ./wrapper -->


<!-- jQuery 2.2.0 -->
<script src="{{ asset('admin/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- ckeditor-->
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('admin/plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{asset('admin/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{asset('admin/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js') }}"></script>

<script >
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
</script>
<script type="text/javascript">

	 CKEDITOR.replaceAll('message');
   CKEDITOR.replaceAll('CKEDITOR');
     //steps to sit activw class on sidebar links
     var currenturl = window.location.href;
     //get the last segment of url
     var segment = currenturl.split('/').pop();
     
     $('#' + segment + '-link').addClass('active');     
     

	$(document).on('click', '.submit-btn', function(){
     
		btn = $(this);
		form = btn.parents('.form');
     
		if(form.find('#details').length)
		{  
			//ckeditor input
			form.find('#details').val(CKEDITOR.instances.details.getData());
		}
    if(form.find('#desc_ar').length)
    {  
      //ckeditor input
      form.find('#desc_ar').val(CKEDITOR.instances.desc_ar.getData());
    }
    if(form.find('#desc_en').length)
    {  
      //ckeditor input
      form.find('#desc_en').val(CKEDITOR.instances.desc_en.getData());
    }

		url  = form.attr('action');

		data = new FormData(form[0]);

		formResults = form.find('#form-results');
		$.ajax({
				url : url,
				type : 'POST',
				data : data,
				dataType : 'json',
				beforeSend : function(){
                    formResults.removeClass().addClass('alert alert-info').html('loading...');
				},
				success : function(results){

					if(results.errors)
					{
						formResults.removeClass().addClass('alert alert-danger').html(results.errors);
					}else{
						formResults.removeClass().addClass('alert alert-success').html(results.success);
            $('.form')[0].reset();

					}
					if(results.redirectTo)
					{
						window.location.href = results.redirectTo;
					}
				},
				cache : false,
				processData : false,
				contentType : false,
		    });
		return false;
	});

	//delete alert
	$('.delete').on('click',function(e){
		var result = confirm("Are you sure you want to delete ?");
        if(!result) {
            e.preventDefault();
        }
	});
</script>
<script>
      var map;
      var marker;
      var infowindow;
      var messagewindow;
      function initMap() {
        var latlng = {lat: 28.0641233, lng: 31.4088828};
        map = new google.maps.Map(document.getElementById('map'), {
          center: latlng,
          zoom: 7
        });
        google.maps.event.addListener(map, 'click', function(event) {
          
          marker = new google.maps.Marker({
            position: event.latLng,
            map: map
          });

          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
          });

         var latlng = marker.getPosition();
            document.getElementById("lat").value= latlng.lat();
            document.getElementById("lon").value= latlng.lng();
         
       });
     
 var input = document.getElementById('pac-input');

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

       

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
     

      }

 
    </script>
    </body>
</html>