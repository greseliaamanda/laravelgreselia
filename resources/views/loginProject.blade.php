<!doctype html>
<html lang="en">
  	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!--menghubngkan ke CSS-->
	<link rel="stylesheet" type="text/css" href="style.css">

    <title>Login</title>
	</head>

	<!--body-->
	<body>
	<div class="jumbotron">
	<div class="container">
	
	<!--wrapper-->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="auth-box">
				<div class="col float-center">
				<div class="box">
					<div class="content">
						<div class="header">
							<center><br><br><br><br><br>
							<div class="logo text-center"><img src="{{asset('img/logogr.jpg')}}" alt="gr logo"></div>
							<div class="table_login text-center" >
							<h3>Login as Admin</h3>
							<hr>
						
						<form action="/postlogin" class="form-auth-small" method=POST>
							{{csrf_field()}}
							<div class="form-group">
								<label for="signin-email" class="control-label sr-only">Email</label>
								<input name="email" type="email" class="form-control" id="signin-email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="signin-password" class="control-label sr-only">Password</label>
								<input name="password" type="password" class="form-control" id="thisisthepassword" placeholder="Password">
							</div>
							<div class="form-group clearfix">
							
							</div>
							<button type="submit" class="btn btn-dark btn-lg btn-block">Login</button>
						
						</form>
						</div>
						</div>
						<div class="footer text-center">&copy; Copyright-Greselia 2020</div>
						</center>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Wrapper-->

	</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
 	</body>
</html>