<!DOCTYPE html>
<html lang="en">
<head>        
	<!-- META SECTION -->
	<title>Login || The Kitchen</title>            

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('public/assets/css/login_page.css')}}" rel="stylesheet">

	<style>
		
	</style>                             
</head>
<body>

	<div class="container-fluid bodyback"> 
		<div id="errormsg"> <strong>Error!</strong> Check username or Password.
		</div>
		<div class="col-sm-12 topbody">

			<h1>The Kitchen</h1>
			<div class="col-sm-6">
				<div class="mainbody">

					<form id="login_form" method="post" name="form">       
						@csrf
						<div class="input-cont">
							<input type="text" autofocus="" autocomplete="off" name="username" required="" placeholder="Enter Username">
							<div class="border1"></div>
						</div>
						<div class="input-cont">
							<input type="password" autocomplete="off" name="password" required="" placeholder="Enter Password">
							<div class="border2"></div>
						</div>
						<div class="input-cont col-sm-12" style="padding-top: 30px;">
							<button type="submit" class="btn  col-sm-11" >Log In</button>

						</div>


					</form>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready( function () {

			$('#login_form').submit(function(e) {
				e.preventDefault();
				var formData = new FormData(this);
				$.ajax({
					type: "post",
					url: "{{url('check_login')}}",
					data:formData,
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					dataType: 'json',
					cache:false,
					contentType: false,
					processData: false,
					success: function(data) {
						if(data==1)
						{
							window.location.href = "{{Route('dashboard')}}";
						}
						else{
							var x = document.getElementById("errormsg");
							x.className = "show";
							setTimeout(function() {
								x.className = x.className.replace("show", "");
							}, 3000);
						}
					}
				});
			})
		} );

	</script>
</body>
</html>
