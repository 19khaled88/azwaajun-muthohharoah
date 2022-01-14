<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/loginForm.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  
		<a  href="{{url('/')}}"><img style="margin: 0px; padding: 0px;" src="https://img.icons8.com/fluency/48/000000/circled-left-2.png"/></a>	
		<!-- <a href="https://icons8.com/icon/26191/back-arrow">Back Arrow icon by Icons8</a> -->
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="/register" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input class="signupLabel" type="text" name="name" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="number" name="phone" placeholder="phone number" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button >Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input class="signinLabel" type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>