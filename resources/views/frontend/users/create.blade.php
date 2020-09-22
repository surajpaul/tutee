<!DOCTYPE html>
<html>
<head>
	<title>Insert user via API</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	
	<form class="container my-5" style="max-width: 600px;">
		<H3 class="pb-3">Insert user data via API</H3>
		<div>
		  <form id="form" action="" method="post">
		    <div class="row">
		      <div class="col-sm-12">
		        <div class="form-group">
		        	<input type="text" class="form-control" name="name" id="name" placeholder="name" />
		        </div>
		      </div>
		      <div class="col-sm-12">
		        <div class="form-group">
		        	<input type="email" class="form-control" name="email" id="email" placeholder="email" />
		        </div>
		      </div>
		      <div class="col-sm-12">
		        <div class="form-group">
		        	<input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="phone_number" />
		        </div>
		      </div>
		      <div class="col-sm-12">
		        <div class="form-group">
		        	<input type="password" class="form-control" name="password" id="password" placeholder="password" />
		        </div>
		      </div>
		      <div class="col-sm-12">
		        <div class="form-group">
		        	<input type="file" class="form-control" name="profile_image" id="profile_image" placeholder="profile_image"  />
		        </div>
		      </div>
		      <div class="col-sm-12">
		        <input id="submit" type="button" class="btn btn-success" name="submit" value="submit">
		      </div>
		    </div> <!-- / row -->
		  </form>
		  <ul id="infos"></ul>
		</div>
	</form>
	<div class="container my-5" style="max-width: 600px;">
		Here you can <a href="{{url('/login')}}">Login</a> and check !!
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
	    $(function (){
	    	var $name = $('#name');
	    	var $email = $('#email');
			var $phone_number = $('#phone_number');
			var $password = $('#password');
			var $profile_image = $('#profile_image');

	    	$('#submit').on('click', function() {
	    		var info = {
	    			name: $name.val(),
	    			email: $email.val(),
	    			phone_number: $phone_number.val(),
	    			password: $password.val(),
	    			profile_image: $profile_image.val(),
	    		};

	    		$.ajax({
	    			type: 'POST',
	    			url: 'http://localhost/tutee/tutee/public/api/user',
	    			data: info,
	    			success: function(newInfo) {
	    				alert('data inserted successfully. Go check your DB');
	    			},
	    			error: function(){
	    				alert('error while submitting');
	    			}
	    		});
	    	});
	    });
	</script>

</body>
</html>