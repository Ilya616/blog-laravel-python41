<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SignIn - Geex Dashboard</title>

	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- inject:css-->
	<link rel="stylesheet" href="/assets-admin/vendor/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="/assets-admin/css/style.css">
	<!-- endinject -->
	<link rel="icon" type="image/png" sizes="16x16" href="/assets-admin/img/favicon.svg">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
	
    <script>
		// Render localStorage JS:
		if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
		if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
		if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
    </script>	
</head>

<body class="geex-dashboard authentication-page">
	<main class="geex-content">
		<div class="geex-content__authentication">
			<div class="geex-content__authentication__content">
				<div class="geex-content__authentication__content__wrapper">
					<div class="geex-content__authentication__content__logo">
						<a href="index.html">
							<img class="logo-lite" src="/assets-admin/img/logo-dark.svg" alt="logo">
							<img class="logo-dark" src="/assets-admin/img/logo-lite.svg" alt="logo">
						</a>
					</div>

					@if(isset($msg))
						<div class="alert alert-danger" role="alert">
							{{ $msg }}
						</div>
					@endif

					<form method="POST" action="{{ route('registrationReqest') }}" id="signInForm" class="geex-content__authentication__form">
						@csrf
                        <h2 class="geex-content__authentication__title">Sing In to Your Account 👋</h2>
						<div class="geex-content__authentication__form-group">
							<label for="emailSignIn">Your Email</label>
							<input type="email" id="emailSignIn" name="email" placeholder="Enter Your Email" required>
							<i class="uil-envelope"></i>
						</div>
						<div class="geex-content__authentication__form-group">
							<label for="name">Your Name</label>
							<input type="text" id="name" name="name" placeholder="Enter Your name" required>
							<i class="uil-envelope"></i>
						</div>
						<div class="geex-content__authentication__form-group">
							<div class="geex-content__authentication__label-wrapper">
								<label for="loginPassword">Your Password</label>
							</div>
							<input type="password" id="loginPassword" name="password" placeholder="Password" required>
							<i class="uil-eye toggle-password-type"></i>
						</div>
						<div class="geex-content__authentication__form-group">
							<div class="geex-content__authentication__label-wrapper">
								<label for="repeat_password">Your repeat Password</label>
							</div>
							<input type="password" id="repeat_password" name="repeat_password" placeholder="repeat password" required>
							<i class="uil-eye toggle-password-type"></i>
						</div>
						<button type="submit" class="geex-content__authentication__form-submit">Sign In</button>
						
						<div class="geex-content__authentication__form-footer">
							Doesn't have any account? <a href="signup.html">Sign Up</a>
						</div>
					</form>
				</div>
			</div>	
			<div class="geex-content__authentication__img">
				<img src="/assets-admin/img/authentication.svg" alt="">
			</div>
		</div>
	</main>

	<!-- inject:js-->
	<script src="/assets-admin/vendor/js/jquery/jquery-3.5.1.min.js"></script>
	<script src="/assets-admin/vendor/js/jquery/jquery-ui.js"></script>
	<script src="/assets-admin/vendor/js/bootstrap/bootstrap.min.js"></script>
	<script src="/assets-admin/js/main.js"></script>
	<!-- endinject-->
</body>

</html>