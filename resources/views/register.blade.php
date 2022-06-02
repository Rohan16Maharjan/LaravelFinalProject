<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script
			src="https://kit.fontawesome.com/64d58efce2.js"
			crossorigin="anonymous"
		></script>
		<link rel="stylesheet" href="css/login.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Rubik:wght@400;500;600&display=swap"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		/>

		<title>Sign in & Sign up Form</title>
	</head>
	<body>
		<!-- nav -->
		
		<nav class="container">
			<div class="context">
				<ul class="list">
					<li>
						<a class="logo" href="{{url('/')}}">E-Devices</a>
					</li>
					<li><a class="link" href="{{url('/shop')}}">SHOP</a></li>
					<li><a class="link" href="{{url('/about')}}">ABOUT</a></li>
					<!-- <li><a class="link" href="#">BLOG</a></li> -->
					<li><a class="link" href="{{url('/register')}}">SIGN UP</a></li>
					<li><a class="link" href="{{url('/login')}}">LOGIN</a></li>
					<li><a class="link" href="{{url('/cart')}}">CART</a></li>
				</ul>
			</div>
		</nav>

		<!-- register -->
		<div class="container1">
			<div class="left-container">
				<h2>Create Account</h2>
				<form action="{{url('/')}}/registered" method="post">
				@csrf
					<input
						type="text"
						class="form-control"
						name="name"
						placeholder="Name"
						required
					/>
					<input
						type="email"
						class="form-control"
						name="email"
						placeholder="Email"
						required
					/>
					<input
						type="password"
						class="form-control"
						name="password"
						placeholder="password"
						required
					/>
					<input
						type="password"
						class="form-control"
						name="password-confirmation"
						placeholder="Confirm Password"
						required
					/>
				</form>
				<div class="login-container">
					<button type="submit" class="button1">Create Account</button>

					<div class="login">
						<p>Already have an account?</p>
						<a href="#">Login</a>
					</div>
				</div>
			</div>

			<div class="right-container">
				<h2>New Customer</h2>

				<h4>Loyalty Program</h4>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut in quas
					ipsum illum exercitationem vitae. Vero exercitationem tempora ipsa!
					Fuga beatae esse cumque explicabo quod.
				</p>
			</div>
		</div>


<!-- 					
						<span class="text-danger">
								@error('email')
								{{$message}}
								@enderror
							</span>
						<div class="input-field">
							<i class="fas fa-lock"></i>
							<input type="text" placeholder="Password" name="password"/>
						</div>
						<span class="text-danger">
								@error('password')
								{{$message}}
								@enderror
							</span>
					<form action="{{url('/')}}/register" class="sign-up-form" method="POST">
						@csrf
						<h2 class="title">Register</h2>
						<div class="input-field">
							<i class="fas fa-user-circle"></i>
							<input type="text" placeholder="Name" name="name" />
							
						</div>
						<span class="text-danger">
								@error('name')
								{{$message}}
								@enderror
							</span>
						<!-- <div class="input-field">
							<i class="fas fa-user-circle"></i>
							<input type="text" placeholder="Last Name" />
						</div> -->
						<!-- <div class="input-field">
							<i class="fas fa-phone"></i>
							<input type="text" placeholder="Phone Number" name="number" />
							
						</div>
						<span class="text-danger">
								@error('number')
								{{$message}}
								@enderror
							</span>

						<div class="input-field">
							<i class="fas fa-envelope"></i>
							<input type="text" placeholder="Email" name="email"/>
							
						</div>
						<span class="text-danger">
								@error('email')
								{{$message}}
								@enderror
							</span>
						<div class="input-field">
							<i class="fas fa-lock"></i>
							<input type="text" placeholder="Password" name="password"/>
							
						</div>
						<span class="text-danger">
								@error('password')
								{{$message}}
								@enderror
							</span>
							<div class="input-field">
							<i class="fas fa-lock"></i>
							<input type="text" placeholder="Confirm Password" name="password_confirmation" />
		
						</div>
						<span class="text-danger">
								@error('password_confirmation')
								{{$message}}
								@enderror
						</span>
						</div> -->
					<!-- </form> -->
			
		<!-- footer -->
		<footer>
			<div class="footer-content">
				<div class="copy">Copy Right &copy; 2022</div>
				<ul class="ff">
					<li class="follow">Follow Us:</li>
					<li>
						<a class="tw" href="https://www.twitter.com" target="_blank"
							><i class="fab fa-twitter fa-2x tw"></i
						></a>
					</li>
					<li>
						<a class="ins" href="https://www.instagram.com" target="_blank"
							><i class="fab fa-instagram fa-2x"></i
						></a>
					</li>
					<li>
						<a class="fb" href="https://www.facebook.com" target="_blank"
							><i class="fab fa-facebook fa-2x"></i
						></a>
					</li>
					<li>
						<a class="you" href="https://www.youtube.com" target="_blank"
							><i class="fab fa-youtube fa-2x"></i
						></a>
					</li>
				</ul>
			</div>
		</footer>
		<script src="js/login.js"></script>
	</body>

</html>
