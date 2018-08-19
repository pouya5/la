<html>
	<head>
		<meta name="_token" content="{{ csrf_token() }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	
	</head>
	<body>
		<form id="uploaddiamond" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
		     <div class="col-md-6">
		        <div class="block">
		            <div class="panel-body">
		              <div class="form-group">
		                    <label class="col-md-3 control-label">Upload Diamond <span class="required">*</span></label>
		                    <div class="col-md-9">
		                        <input required="" type="file" name="result_file" id="result_file" />
		                    </div>
		                </div>

		                <div class="btn-group pull-right">
		                    <button class="btn btn-primary" type="submit">Submit</button>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div id='errormessage'></div>
		</form>
		<script type='text/javascript'>
		jQuery(document).ready(function(){
			$("#uploaddiamond").on("submit", function(e) {
				e.preventDefault();
			    var extension = $('#result_file').val().split('.').pop().toLowerCase();
			    $('#errormessage').append('Uploading ....');
			    if ($.inArray(extension, ['jpeg', 'xls', 'xlsx']) == -1) {
			        $('#errormessage').html('Please Select Valid File... ');
			    } else {

			        var file_data = $('#result_file').prop('files')[0];
			        var supplier_name = $('#supplier_name').val();


			        var form_data = new FormData();
			        form_data.append('file', file_data);
			        form_data.append('supplier_name', supplier_name);
			        $.ajaxSetup({
			            headers: {
			                'X-CSRF-Token': $('meta[name=_token]').attr('content')
			            }
			        });

			        $.ajax({
			            url: "{{url('upload')}}", // point to server-side PHP script
			            data: form_data,
			            type: 'POST',
			            contentType: false, // The content type used when sending data to the server.
			            cache: false, // To unable request pages to be cached
			            processData: false,
			            success: function(data) {
			            	$('#errormessage').text('Successfully Uploaded');
			            }
			        });
			    }
			});
		});
		</script>
	</body>
</html>