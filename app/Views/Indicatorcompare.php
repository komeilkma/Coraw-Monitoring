<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> داشبورد مدیریت قطارهای حومه ای</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/media/image/favicon.svg">

	<!-- Theme Color -->
	<meta name="theme-color" content="#5867dd">

	<!-- Plugin styles -->
	<link rel="stylesheet" href="vendors/bundle.css" type="text/css">
		<link rel="stylesheet" href="vendors/range-slider/css/ion.rangeSlider.min.css" type="text/css">
			<link rel="stylesheet" href="vendors/tagsinput/bootstrap-tagsinput.css" type="text/css">
	<link rel="stylesheet" href="vendors/select2/css/select2.min.css" type="text/css">
	<!-- App styles -->
	<link rel="stylesheet" href="assets/css/app.css" type="text/css">
</head>

<body>


	<!-- begin::page loader-->
	<div class="page-loader">
		<div class="spinner-border"></div>
	</div>
	<!-- end::page loader -->

	<!-- begin::sidebar user profile -->
	<div class="sidebar" id="userProfile">
		<div class="text-center p-4">
			<figure class="avatar avatar-state-success avatar-lg mb-4">
				<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
			</figure>
			<h4 class="text-primary m-b-10">کمیل مجیدی</h4>
			<p class="text-muted d-flex align-items-center justify-content-center line-height-0 mb-0">
				توسعه دهنده <a href="#" class="ml-2" data-toggle="tooltip" title="تنظیمات" data-sidebar-open="#settings"> <i class="ti-settings"></i> </a>
			</p>
		</div>
		<hr class="m-0">
		<div class="p-4">

			<div class="mb-4">
				<h6 class="font-size-13 mb-3">تنظیمات اولیه</h6>
				<div class="form-group">
					<div class="form-item custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" id="customSwitch11">
						<label class="custom-control-label" for="customSwitch11">مسدود کردن</label>
					</div>
				</div>
				<div class="form-group">
					<div class="form-item custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" checked id="customSwitch12">
						<label class="custom-control-label" for="customSwitch12">بیصدا کردن</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end::sidebar user profile -->

	<!-- begin::sidebar settings -->
	<div class="sidebar" id="settings">
		<header>
			<i class="ti-settings"></i> تنظیمات
		</header>
		<div class="p-4">
			<div class="mb-3">
				<h6 class="font-size-13 mb-3 text-muted">سیستم</h6>
				<ul class="list-group list-group-flush">
					<li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
						<span>به روز رسانی خودکار</span>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
							<label class="custom-control-label" for="customSwitch1"></label>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
						<span>وضعیت کنونی</span>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
							<label class="custom-control-label" for="customSwitch2"></label>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
						<span>پیشنهادات کاربران</span>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
							<label class="custom-control-label" for="customSwitch3"></label>
						</div>
					</li>
				</ul>
			</div>
			<div class="mb-3">
				<h6 class="font-size-13 mb-3 text-muted">حساب کاربری</h6>
				<ul class="list-group list-group-flush">
					<li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
						<span>امنیت حساب کاربری ارشد</span>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch4">
							<label class="custom-control-label" for="customSwitch4"></label>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
						<span>حفاظت حساب کاربری</span>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch5" checked>
							<label class="custom-control-label" for="customSwitch5"></label>
						</div>
					</li>
				</ul>
			</div>
			<div class="mb-3">
				<h6 class="font-size-13 mb-3 text-muted">اعلان ها</h6>
				<ul class="list-group list-group-flush">
					<li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
						<span>اعلان های مرورگر</span>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch6">
							<label class="custom-control-label" for="customSwitch6"></label>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
						<span>اعلان های موبایل</span>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch7">
							<label class="custom-control-label" for="customSwitch7"></label>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
						<span>اشتراک ایمیل</span>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch8">
							<label class="custom-control-label" for="customSwitch8"></label>
						</div>
					</li>
					<li class="list-group-item d-flex justify-content-between p-l-r-0 p-t-b-5">
						<span>اعلان های sms</span>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch9" checked>
							<label class="custom-control-label" for="customSwitch9"></label>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end::sidebar settings -->

	<!-- begin::navigation -->
	<div class="navigation">
		<div class="navigation-icon-menu">
			<ul>
				<li class="active" data-toggle="tooltip" title="امکانات اولیه">
					<a href="#navigationDashboards" title="امکانات اولیه">
						<i class="icon ti-pie-chart"></i>
						<span class="badge badge-warning">2</span>
					</a>
				</li>
				
				<li data-toggle="tooltip" title="تنظیمات">
					<a href="#navigationApps" title="تنظیمات">
						<i class="icon ti-package"></i>
					</a>
				</li>
				<!--
				<li data-toggle="tooltip" title="پلاگین ها">
					<a href="#navigationPlugins">
						<i class="icon ti-brush-alt"></i>
					</a>
				</li>
				<li data-toggle="tooltip" title="عناصر">
					<a href="#navigationElements">
						<i class="icon ti-layers"></i>
					</a>
				</li>
				<li data-toggle="tooltip" title="صفحات">
					<a href="#navigationPages" title="صفحات کاربری">
						<i class="icon ti-user"></i>
					</a>
				</li>
			</ul>
			<ul>
				<li data-toggle="tooltip" title="ویرایش پروفایل">
					<a href="#" class="go-to-page">
						<i class="icon ti-settings"></i>
					</a>
				</li>
				<li data-toggle="tooltip" title="خروج">
					<a href="login.html" class="go-to-page">
						<i class="icon ti-power-off"></i>
					</a>
				</li>
				
				-->
			</ul>
		</div>
		<div class="navigation-menu-body">
			<ul id="navigationDashboards" class="navigation-active">
			
				<li>
					<a  href="Dashboard">داشبورد</a>
				</li>
			
				<li  class="navigation-divider">گزارش های کلی عملکرد</li>
				<li >
					<a  href="Indicator" >شاخص های کلیدی</a>
				</li>
					<li>
					<a  href="Indicatorcharts" >روند سالانه</a>
				</li>
					<li>
					<a class="active" href="Indicatorcompare" >مقایسه ها</a>
				</li>
				<li class="navigation-divider">گزارش های مسافری</li>
					<li>
					<a href="Passengers" >آمار های مسافری در یک نگاه</a>
				</li>
				
				<li>
					<a href="Passengersgeneral" >آمار های مسافری </a>
				</li>
					<li>
					<a href="#" onclick="alertsweer()">آمار ضریب اشغال</a>
				</li>
					<li>
					<a href="#" onclick="alertsweer()">آمار صندلی ایجادی</a>
				</li>
					<li>
					<a href="#" onclick="alertsweer()">آمار های مسافری در یک نگاه</a>
				</li>
				<li class="#">گزارش های مالی و اقتصادی</li>
					<li>
					<a href="#" onclick="alertsweer()">اطلاعات مالی در یک نگاه</a>
				</li>
					<li>
					<a href="#" onclick="alertsweer()">روند درآمد </a>
				</li>
					<li>
					<a href="#" onclick="alertsweer()">روند هزینه</a>
				</li>
			</ul>
			<ul id="navigationApps">
				<li class="navigation-divider">تنظیمات پلتفرم</li>
				<li>
					<a href="#" onclick="alertsweer()">تنظیمات اصلی</a>
				</li>
				<li>
					<a href="#" onclick="alertsweer()">اتصال وب هوک</a>
				</li>
				<li>
					<a href="#" onclick="alertsweer()">به روز رسانی اطلاعات</a>
				</li>
			
		
			</ul>
			<ul id="navigationPlugins">
				<li class="navigation-divider">پلاگین ها</li>
				<li><a href="#" onclick="alertsweer()">هشدار Sweet </a></li>
				<li><a href="#" onclick="alertsweer()">لایت باکس </a></li>
				<li><a href="toast.html">توست </a></li>
				<li><a href="tour.html">تور </a></li>
				<li><a href="slick-slide.html">اسلاید Slick </a></li>
				<li><a href="nestable.html">لیست تو در تو </a></li>
				<li>
					<a href="#" onclick="alertsweer()">نمودار ها</a>
					<ul>
						<li><a href="chart-apex.html">Apex</a></li>
						<li><a href="chartjs.html">Chartjs</a></li>
						<li><a href="chart-justgage.html">Justgage</a></li>
						<li><a href="chart-morris.html">Morris</a></li>
						<li><a href="chart-peity.html">Peity</a></li>
					</ul>
				</li>
				<li>
					<a href="#" onclick="alertsweer()">نقشه ها</a>
					<ul>
						<li><a href="google-map.html">نقشه گوگل</a></li>
						<li><a href="vector-map.html">نقشه وکتور</a></li>
					</ul>
				</li>
			</ul>
			<ul id="navigationElements">
				<li class="navigation-divider">عناصر</li>
				<li>
					<a href="#" onclick="alertsweer()">پایه</a>
					<ul>
						<li><a href="alerts.html">اعلان‌ها </a></li>
						<li><a href="badge.html">نشان </a></li>
						<li><a href="buttons.html">دکمه ها </a></li>
						<li><a href="pagination.html">صفحه‌بندی </a></li>
						<li><a href="dropdown.html">منوی کشویی </a></li>
						<li><a href="accordion.html">باز و بسته شونده </a></li>
						<li><a href="carousel.html">اسلایدر </a></li>
						<li><a href="typography.html">تایپوگرافی </a></li>
						<li><a href="list-group.html">گروه لیست </a></li>
						<li><a href="media-object.html">رسانه </a></li>
						<li><a href="images.html">تصاویر </a></li>
						<li><a href="progress.html">پیشرفت </a></li>
						<li><a href="modal.html">مودال </a></li>
						<li><a href="spinners.html">چرخنده ها </a></li>
						<li><a href="navs.html">ناوبری ها </a></li>
						<li><a href="tab.html">تب </a></li>
						<li><a href="tooltip.html">راهنما (تولتیپ) </a></li>
						<li><a href="popovers.html">پاپ اور </a></li>
					</ul>
				</li>
				<li>
					<a href="#" onclick="alertsweer()">فرم ها</a>
					<ul>
						<li><a href="basic-form.html">فرم پایه </a></li>
						<li><a href="custom-form.html">فرم سفارشی </a></li>
						<li><a href="advanced-form.html">فرم پیشرفته </a></li>
						<li><a href="datepicker.html">انتخاب گر تاریخ </a></li>
						<li><a href="timepicker.html">انتخاب گر زمان </a></li>
						<li><a href="colorpicker.html">انتخاب گر رنگ </a></li>
						<li><a href="form-validation.html">اعتبارسنجی فرم </a></li>
						<li><a href="form-wizard.html">فرم مرحله ای </a></li>
						<li><a href="file-upload.html">آپلود فایل </a></li>
						<li><a href="#" onclick="alertsweer()">ویرایشگر CK</a>
							<ul>
								<li><a href="ckeditor-article.html">ویرایشگر مقاله </a></li>
								<li><a href="ckeditor-inline.html">ویرایشگر درون خطی </a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="tables.html">جدول‌ها</a>
					<ul>
						<li>
							<a href="tables.html">جدول‌های پایه </a>
						</li>
						<li>
							<a href="data-table.html">جدول اطلاعات </a>
						</li>
						<li>
							<a href="responsive-table.html">جدول واکنشگرا </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" onclick="alertsweer()">کارت ها </a>
					<ul>
						<li><a href="basic-cards.html">کارت های پایه </a></li>
						<li><a href="image-cards.html">کارت های تصویری </a></li>
						<li><a href="card-scroll.html">کارت های اسکرول دار </a></li>
						<li><a href="other-cards.html">سایر </a></li>
					</ul>
				</li>
				<li><a href="colors.html">رنگ ها </a></li>
				<li>
					<a href="avatar.html">آواتار ها</a>
				</li>
				<li>
					<a href="icons.html">آیکن‌ها</a>
				</li>
			</ul>
			<ul id="navigationPages">
				<li class="navigation-divider">صفحات</li>
				<li><a href="profile.html">پروفایل </a></li>
				<li><a href="timeline.html">خط زمانی </a></li>
				<li><a href="invoice.html">صورتحساب </a></li>
				<li><a href="pricing-table.html">جداول قیمت ها </a></li>
				<li><a href="search-result.html">نتایج جستجو </a></li>
				<li><a href="login.html">ورود </a></li>
				<li><a href="register.html">ثبت نام </a></li>
				<li><a href="recover-password.html">بازیابی رمز عبور </a></li>
				<li><a href="lock-screen.html">قفل صفحه </a></li>
				<li>
					<a href="#" onclick="alertsweer()">قالب های ایمیل</a>
					<ul>
						<li><a href="email-template-basic.html">پایه</a></li>
						<li><a href="email-template-alert.html">هشدار</a></li>
						<li><a href="email-template-billing.html">صورتحساب</a></li>
					</ul>
				</li>
				<li>
					<a href="#" onclick="alertsweer()">صفحات خطا </a>
					<ul>
						<li><a href="404.html">404 </a></li>
						<li><a href="404-2.html">404 نسخه 2</a></li>
						<li><a href="503.html">503 </a></li>
						<li><a href="mean-at-work.html">تعمیرات </a></li>
					</ul>
				</li>
				<li><a href="blank-page.html">صفحه شروع</a></li>
				<li>
					<a href="#" onclick="alertsweer()">سطح منو</a>
					<ul>
						<li><a href="#" onclick="alertsweer()">سطح منو </a>
							<ul>
								<li><a href="#" onclick="alertsweer()">سطح منو </a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- end::navigation -->

	<!-- begin::header -->
	<div class="header">

		<!-- begin::header logo -->
		<div class="header-logo">
			<a href="index.html">
				<img class="large-logo" src="assets/media/image/logo.svg" alt="image">
				<img class="small-logo" src="assets/media/image/logo-sm.svg" alt="image">
				<img class="dark-logo" src="assets/media/image/logo-dark.svg" alt="image">
			</a>
		</div>
		<!-- end::header logo -->

		<!-- begin::header body -->
		<div class="header-body">

			<div class="header-body-left">

				<h3 class="page-title">مقایسه ی شاخص های کلیدی سال جاری</h3>

				<!-- begin::breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" onclick="alertsweer()">داشبورد</a></li>
						<li class="breadcrumb-item active" aria-current="page">  مقایسه ی شاخص های کلیدی سال جاری</li>
					</ol>
				</nav>
				<!-- end::breadcrumb -->

			</div>

			<div class="header-body-right">
				<!-- begin::navbar main body -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<form>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="جستجو">
								<div class="input-group-append">
									<button class="btn btn-light" type="button">
										<i class="ti-search"></i>
									</button>
								</div>
							</div>
						</form>
					</li>
					<li class="nav-item dropdown">
						<a href="#" onclick="alertsweer()" class="nav-link" data-toggle="dropdown">
							<i class="ti-plus"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
							<div class="p-3">
								<h6 class="font-size-13 m-b-15">دسترسی سریع</h6>
								<div class="row">
									<div class="col-6">
										<a href="#" onclick="alertsweer()">
											<div class="d-flex flex-column font-size-13 bg-danger-bright bg-hover pt-3 pb-3 border-radius-1 text-danger text-center mb-3">
												<i class="fa fa-sitemap mb-2 font-size-20"></i>
												دسته‌بندی ها
											</div>
										</a>
									</div>
									<div class="col-6">
										<a href="#" onclick="alertsweer()">
											<div class="d-flex flex-column font-size-13 bg-info-bright bg-hover pt-3 pb-3 border-radius-1 text-info text-center mb-3">
												<i class="ti-game mb-2 font-size-20"></i>
												محصولات
											</div>
										</a>
									</div>
									<div class="col-6">
										<a href="#" onclick="alertsweer()">
											<div class="d-flex flex-column font-size-13 bg-warning-bright bg-hover pt-3 pb-3 border-radius-1 text-warning text-center">
												<i class="ti-bar-chart-alt mb-2 font-size-20"></i>
												گزارشات
											</div>
										</a>
									</div>
									<div class="col-6">
										<a href="#" onclick="alertsweer()">
											<div class="d-flex flex-column font-size-13 bg-secondary-bright bg-hover pt-3 pb-3 border-radius-1 text-secondary text-center">
												<i class="fa fa-share mb-2 font-size-20"></i>
												سایر
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
			
					
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
							<div class="p-4 text-center" data-backround-image="assets/media/image/image1.png">
								<h6 class="m-b-0">پیام ها</h6>
								<small class="font-size-13 opacity-7 d-inline-block m-t-5">1 پیام خوانده نشده</small>
							</div>
							<div>
								<ul class="list-group list-group-flush">
									<li>
										<a href="#" onclick="alertsweer()" class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
											<div>
												<figure class="avatar avatar-sm m-r-15">
													<span class="avatar-title bg-success rounded-circle">آ</span>
												</figure>
											</div>
											<div class="flex-grow-1">
												<h6 class="mb-1 d-flex justify-content-between primary-font">
													استیو راجرز
													<i title="علامت خوانده نشده" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-13"></i>
												</h6>
												<span class="text-muted m-r-10 small">08:50 ب.ظ</span>
												<span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
											</div>
										</a>
									</li>
									<li>
										<a href="#" onclick="alertsweer()" class="p-3 list-group-item d-flex align-items-center link-1 bg-secondary-bright hide-show-toggler">
											<div>
												<figure class="avatar avatar-sm m-r-15">
													<span class="avatar-title bg-primary rounded-circle">ج</span>
												</figure>
											</div>
											<div class="flex-grow-1">
												<h6 class="mb-1 d-flex justify-content-between primary-font">
													جان اسنو
													<i title="علامت خوانده شده" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-13"></i>
												</h6>
												<span class="text-muted m-r-10 small">10:23 ب.ظ</span>
												<span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
											</div>
										</a>
									</li>
									<li>
										<a href="#" onclick="alertsweer()" class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
											<div>
												<figure class="avatar avatar-sm m-r-15">
													<span class="avatar-title bg-danger rounded-circle">ک</span>
												</figure>
											</div>
											<div class="flex-grow-1">
												<h6 class="mb-1 d-flex justify-content-between primary-font">
													استیو جابز
													<i title="علامت خوانده نشده" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-13"></i>
												</h6>
												<span class="text-muted m-r-10 small">08:50 ب.ظ</span>
												<span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
											</div>
										</a>
									</li>
									<li>
										<a href="#" onclick="alertsweer()" class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">
											<div>
												<figure class="avatar avatar-sm m-r-15">
													<span class="avatar-title bg-info rounded-circle">ن‌پ</span>
												</figure>
											</div>
											<div class="flex-grow-1">
												<h6 class="mb-1 d-flex justify-content-between primary-font">
													ناتالی پورتمن
													<i title="علامت خوانده نشده" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-13"></i>
												</h6>
												<span class="text-muted m-r-10 small">20:13 ب.ظ</span>
												<span class="text-muted small line-height-24">لورم ایپسوم متن ساختگی</span>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="p-3 text-right">
								<ul class="list-inline small">
									<li class="list-inline-item">
										<a href="#" onclick="alertsweer()">علامت خوانده شده به همه</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
	
					<li class="nav-item dropdown">
						<a href="#" onclick="alertsweer()" class="nav-link bg-none" data-sidebar-open="#userProfile">
							<div>
								<figure class="avatar avatar-state-success avatar-sm">
									<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
								</figure>
							</div>
						</a>
					</li>
				</ul>
				<!-- end::navbar main body -->

				<div class="d-flex align-items-center">
					<!-- begin::navbar navigation toggler -->
					<div class="d-xl-none d-lg-none d-sm-block navigation-toggler">
						<a href="#" onclick="alertsweer()">
							<i class="ti-menu"></i>
						</a>
					</div>
					<!-- end::navbar navigation toggler -->

					<!-- begin::navbar toggler -->
					<div class="d-xl-none d-lg-none d-sm-block navbar-toggler">
						<a href="#" onclick="alertsweer()">
							<i class="ti-arrow-down"></i>
						</a>
					</div>
					<!-- end::navbar toggler -->
				</div>
			</div>

		</div>
		<!-- end::header body -->

	</div>
	<!-- end::header -->

	<!-- begin::main content -->
	<main class="main-content">
	<div class="row">
	<div class="col-md-3">
	<div class="form-group">
							<input type="text" id="demo_5">
						</div>
						</div>
						
						
							<div class="col-md-3">
	<div class="form-group">
							<input type="text" id="demo_55">
						</div>
						</div>
						
										<div class="col-md-3">
										<p>فیلتر مسیر</p>
		<div class="form-group">
							<select class="js-example-basic-single" multiple>
								<option>فیلتر منطقه</option>
								<option value="France">تهران</option>
								<option  value="Brazil">شمال شرق 2</option>
								<option value="Yemen">جنوب</option>
								<option  value="United States">خراسان</option>
								<option value="China">زاگرس</option>
								<option value="Argentina">لرستان</option>
								<option value="Bulgaria">آذربایجان</option>
							</select>
						</div>
						</div>
						
						
	
						
						</div>
		<div class="row">
	
		
			<div class="col-md-8">
			<div class="card">
					<div class="card-header">مقایسه سال گذشته و سال جاری</div>
					<div class="card-body text-center">
						<h1 class="font-size-40 font-weight-bold primary-font line-height-50 m-b-10">تعداد کل مسافر</h1>
			
					
						<div class="row mb-4">
							<div class="col-6">
								<h2 class="text-success font-weight-bold primary-font line-height-30 mb-1">3,613,793</h2>
								<small class="font-size-13">سال گذشته</small>
							</div>
							<div class="col-6">
								<h2 class="text-warning font-weight-bold primary-font line-height-30 mb-1">5,296,512</h2>
								<small class="font-size-13">سال جاری</small>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
			<div class="card">
					<div class="card-header d-flex justify-content-between">
						درصد تغییر مسافر
						<small class="opacity-5 primary-font">نسبت به سال گذشته</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">46,6%</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-warning opacity-8">
								<i class="ti-layers-alt"></i>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			

				
			<div class="col-md-8">
			<div class="card">
					<div class="card-header">مقایسه سال گذشته و سال جاری</div>
					<div class="card-body text-center">
						<h1 class="font-size-40 font-weight-bold primary-font line-height-50 m-b-10">تعداد صندلی ایجادی</h1>
			
					
						<div class="row mb-4">
							<div class="col-6">
								<h2 class="text-success font-weight-bold primary-font line-height-30 mb-1">8,386,426</h2>
								<small class="font-size-13">سال گذشته</small>
							</div>
							<div class="col-6">
								<h2 class="text-warning font-weight-bold primary-font line-height-30 mb-1">9,310,637</h2>
								<small class="font-size-13">سال جاری</small>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
			<div class="card">
					<div class="card-header d-flex justify-content-between">
						درصد تغییر مسافر
						<small class="opacity-5 primary-font">نسبت به سال گذشته</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">11%</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-warning opacity-8">
								<i class="ti-layers-alt"></i>
							</div>
						</div>
					
					</div>
				</div>
			</div>

				
			<div class="col-md-8">
			<div class="card">
					<div class="card-header">مقایسه سال گذشته و سال جاری</div>
					<div class="card-body text-center">
						<h1 class="font-size-40 font-weight-bold primary-font line-height-50 m-b-10">میانگین ضریب اشغال</h1>
			
					
						<div class="row mb-4">
							<div class="col-6">
								<h2 class="text-success font-weight-bold primary-font line-height-30 mb-1">%44,3</h2>
								<small class="font-size-13">سال گذشته</small>
							</div>
							<div class="col-6">
								<h2 class="text-warning font-weight-bold primary-font line-height-30 mb-1">%58,7</h2>
								<small class="font-size-13">سال جاری</small>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
			<div class="card">
					<div class="card-header d-flex justify-content-between">
						درصد تغییر مسافر
						<small class="opacity-5 primary-font">نسبت به سال گذشته</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">32,5%</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-warning opacity-8">
								<i class="ti-layers-alt"></i>
							</div>
						</div>
				
					</div>
				</div>
			</div>
			

			<div class="col-md-8">
			<div class="card">
					<div class="card-header">مقایسه سال گذشته و سال جاری</div>
					<div class="card-body text-center">
						<h1 class="font-size-40 font-weight-bold primary-font line-height-50 m-b-10">تعداد سیر قطارها</h1>
			
					
						<div class="row mb-4">
							<div class="col-6">
								<h2 class="text-success font-weight-bold primary-font line-height-30 mb-1">22550</h2>
								<small class="font-size-13">سال گذشته</small>
							</div>
							<div class="col-6">
								<h2 class="text-warning font-weight-bold primary-font line-height-30 mb-1">23883</h2>
								<small class="font-size-13">سال جاری</small>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
			<div class="card">
					<div class="card-header d-flex justify-content-between">
						درصد تغییر مسافر
						<small class="opacity-5 primary-font">نسبت به سال گذشته</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">5,9%</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-warning opacity-8">
								<i class="ti-layers-alt"></i>
							</div>
						</div>
				
					</div>
				</div>
			</div>


			<div class="col-md-8">
			<div class="card">
					<div class="card-header">مقایسه سال گذشته و سال جاری</div>
					<div class="card-body text-center">
						<h1 class="font-size-40 font-weight-bold primary-font line-height-50 m-b-10">میانگین تاخیر در مقصد</h1>
			
					
						<div class="row mb-4">
							<div class="col-6">
								<h2 class="text-success font-weight-bold primary-font line-height-30 mb-1">4,39</h2>
								<small class="font-size-13">سال گذشته</small>
							</div>
							<div class="col-6">
								<h2 class="text-warning font-weight-bold primary-font line-height-30 mb-1">4,4</h2>
								<small class="font-size-13">سال جاری</small>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
			<div class="card">
					<div class="card-header d-flex justify-content-between">
						درصد تغییر مسافر
						<small class="opacity-5 primary-font">نسبت به سال گذشته</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">0,4%</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-warning opacity-8">
								<i class="ti-layers-alt"></i>
							</div>
						</div>
				
					</div>
				</div>
			</div>


			<div class="col-md-8">
			<div class="card">
					<div class="card-header">مقایسه سال گذشته و سال جاری</div>
					<div class="card-body text-center">
						<h1 class="font-size-40 font-weight-bold primary-font line-height-50 m-b-10">میانگین تقدم در مقصد</h1>
			
					
						<div class="row mb-4">
							<div class="col-6">
								<h2 class="text-success font-weight-bold primary-font line-height-30 mb-1">-2,52</h2>
								<small class="font-size-13">سال گذشته</small>
							</div>
							<div class="col-6">
								<h2 class="text-warning font-weight-bold primary-font line-height-30 mb-1">-2,11</h2>
								<small class="font-size-13">سال جاری</small>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
			<div class="card">
					<div class="card-header d-flex justify-content-between">
						درصد تغییر مسافر
						<small class="opacity-5 primary-font">نسبت به سال گذشته</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">16,3%</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-warning opacity-8">
								<i class="ti-layers-alt"></i>
							</div>
						</div>
				
					</div>
				</div>
			</div>



			
			<div class="col-md-8">
			<div class="card">
					<div class="card-header">مقایسه سال گذشته و سال جاری</div>
					<div class="card-body text-center">
						<h1 class="font-size-40 font-weight-bold primary-font line-height-50 m-b-10">درآمد کل</h1>
			
					
						<div class="row mb-4">
							<div class="col-6">
								<h2 class="text-success font-weight-bold primary-font line-height-30 mb-1">12,88</h2>
								<small class="font-size-13">سال گذشته</small>
							</div>
							<div class="col-6">
								<h2 class="text-warning font-weight-bold primary-font line-height-30 mb-1">18,71</h2>
								<small class="font-size-13">سال جاری</small>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
			<div class="card">
					<div class="card-header d-flex justify-content-between">
						درصد تغییر مسافر
						<small class="opacity-5 primary-font">نسبت به سال گذشته</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">45,3%</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-warning opacity-8">
								<i class="ti-layers-alt"></i>
							</div>
						</div>
				
					</div>
				</div>
			</div>



			
			<div class="col-md-8">
			<div class="card">
					<div class="card-header">مقایسه سال گذشته و سال جاری</div>
					<div class="card-body text-center">
						<h1 class="font-size-40 font-weight-bold primary-font line-height-50 m-b-10">هزینه ی کل</h1>
			
					
						<div class="row mb-4">
							<div class="col-6">
								<h2 class="text-success font-weight-bold primary-font line-height-30 mb-1">98,07</h2>
								<small class="font-size-13">سال گذشته</small>
							</div>
							<div class="col-6">
								<h2 class="text-warning font-weight-bold primary-font line-height-30 mb-1">151,02</h2>
								<small class="font-size-13">سال جاری</small>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			
			<div class="col-md-4">
			<div class="card">
					<div class="card-header d-flex justify-content-between">
						درصد تغییر مسافر
						<small class="opacity-5 primary-font">نسبت به سال گذشته</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">54,0%</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-warning opacity-8">
								<i class="ti-layers-alt"></i>
							</div>
						</div>
				
					</div>
				</div>
			</div>

		</div>

	</main>
	<!-- end::main content -->

	<!-- begin::global scripts -->
	<script src="vendors/bundle.js"></script>
	<!-- end::global scripts -->
	<script src="vendors/range-slider/js/ion.rangeSlider.min.js"></script>
	<script src="assets/js/examples/range-slider.js"></script>
	<!-- begin::custom scripts -->
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/app.js"></script>
	<!-- end::custom scripts -->
	<script src="vendors/select2/js/select2.min.js"></script>
	<script src="assets/js/examples/select2.js"></script>
</body>

</html>