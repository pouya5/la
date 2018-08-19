<html lang="en">
<head>
    <title>Laravel Ajax Validation Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>


<div class="container">
        <h3 class="jumbotron">Laravel Ajax Validation</h3>
    <form>
        <div class="form-group">
            <label>Footballer Name</label>
            <input type="text" name="footballername" class="form-control" placeholder="Enter Footballer Name" id="footballername">
        </div>


        <div class="form-group">
            <label>Club</label>
            <input type="text" name="club" class="form-control" placeholder="Enter Club" id="club">
        </div>


        <div class="form-group">
            <strong>Country</strong>
            <input type="text" name="country" class="form-control" placeholder="Enter Country" id="country">
        </div>


        <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div>

        <div class='alert-danger'></div>
    </form>
</div>
<script type="text/javascript">

         jQuery(document).ready(function(){
            jQuery('#submit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
				  headers: {
				    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				  }
				});
               jQuery.ajax({
                  url: "{{ url('/user') }}",
                  method: 'post',
                  data: {
                     name: jQuery('#footballername').val(),
                     type: jQuery('#club').val(),
                     price: jQuery('#country').val()
                  },
                  success: function(data){
                  		jQuery.each(data.errors, function(key, value){
                  			jQuery('.alert-danger').show();
                  			jQuery('.alert-danger').append('<p>'+value+'</p>');
                  		});
                	}
                    
                  });
               });
            });
</script>
</body>
</html>