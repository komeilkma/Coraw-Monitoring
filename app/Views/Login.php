<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ورود به داشبورد مدیریت قطارهای حومه ای</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?=base_url()?>/assets/media/image/favicon.svg">

	<!-- Theme Color -->
	<meta name="theme-color" content="#5867dd">

	<!-- Plugin styles -->
	<link rel="stylesheet" href="vendors/bundle.css" type="text/css">

	<!-- App styles -->
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/app.css" type="text/css">
</head>

<body class="form-membership">

	<!-- begin::page loader-->
	<div class="page-loader">
		<div class="spinner-border"></div>
	</div>
	<!-- end::page loader -->

	<div class="form-wrapper">

		<!-- logo -->
		<div class="logo">
			<img src="<?=base_url()?>/assets/media/image/logo-shape.svg" width="70px" alt="image">
		</div>
		<!-- ./ logo -->

		<h5>ورود به داشبورد مدیریت قطارهای حومه ای</h5>

		<!-- form -->
		<form onsubmit="return false" >
			<div class="form-group">
				<input type="text" id="username" class="form-control text-left" placeholder="نام کاربری " dir="ltr" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" id="Password" class="form-control text-left" placeholder="رمز عبور" dir="ltr" required>
			</div>
			<div class="form-group d-sm-flex justify-content-between text-left mb-4">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" checked id="customCheck1">
					<label class="custom-control-label" for="customCheck1">به خاطر سپاری</label>
				</div>
				<a class="d-block mt-2 mt-sm-0 line-height-28" href="recover-password.html">بازنشانی رمز عبور</a>
			</div>
			<button class="btn btn-primary btn-block" onclick="login()">ورود</button>
	
		</form>
		<!-- ./ form -->

	</div>

	<!-- Plugin scripts -->
	<script src="vendors/bundle.js"></script>

	<!-- App scripts -->
	<script src="<?=base_url()?>/assets/js/examples/sweet-alert.js"></script>
	<script src="<?=base_url()?>/assets/js/app.js"></script>
	<script src="<?=base_url()?>/assets/js/coraw.js"></script>
</body>

</html>