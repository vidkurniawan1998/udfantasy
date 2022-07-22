<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>

	<!--begin::Base Path (base relative path for assets of this page) -->
	<base href=".<?php echo base_url() ?>.<?php echo base_url() ?>.<?php echo base_url() ?>.<?php echo base_url() ?>">

	<!--end::Base Path -->
	<meta charset="utf-8" />
	<title>Login - <?php echo $web_name ?></title>
	<meta name="description" content="Login page example">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!--end::Fonts -->

	<!--begin::Page Custom Styles(used by this page) -->
	<link href="<?php echo base_url() ?>assets/template_admin/css/demo1/pages/general/login/login-1.css" rel="stylesheet" type="text/css" />

	<!--end::Page Custom Styles -->

	<!--begin:: Global Mandatory Vendors -->
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

	<!--end:: Global Mandatory Vendors -->

	<!--begin:: Global Optional Vendors -->
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

	<!--end:: Global Optional Vendors -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="<?php echo base_url() ?>assets/template_admin/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<link href="<?php echo base_url() ?>assets/template_admin/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/template_admin/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />

	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/template_admin/images/favicon.png" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
	<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

			<!--begin::Aside-->
			<div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(<?php echo base_url() ?>assets/template_admin/media//bg/bg-7.jpg);">
				<div class="kt-grid__item">
					<a href="http://proweb.com" target="_blank" class="kt-login__logo">
						<img src="<?php echo base_url() ?>assets/template_admin/images/logo-proweb.png">
						<h1 style="color: white; padding-left: 10px;">Red System</h1>
					</a>
				</div>
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
					<div class="kt-grid__item kt-grid__item--middle">
						<h3 class="kt-login__title">Welcome <?php echo $web_name ?></h3>
						<h4 class="kt-login__subtitle">- from : <a href="http://www.redsystem.id" style="color: white" target="_blank">Red System</a> | Jasa Pembuatan Website, Android, iOS</h4>
					</div>
				</div>
				<div class="kt-grid__item">
					<div class="kt-login__info">
						<div class="kt-login__copyright">
							&copy 2013 - <?php echo date('Y') ?> <a href="https://www.redsystem.id" target="_blank" style="color: white">Red System</a>
						</div>
<!--						<div class="kt-login__menu">-->
<!--							<a href="#" class="kt-link">Privacy</a>-->
<!--							<a href="#" class="kt-link">Legal</a>-->
<!--							<a href="#" class="kt-link">Contact</a>-->
<!--						</div>-->
					</div>
				</div>
			</div>

			<!--begin::Aside-->

			<!--begin::Content-->
			<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">

				<!--begin::Body-->
				<div class="kt-login__body">

					<!--begin::Signin-->
					<div class="kt-login__form">
						<div class="kt-login__title">
							<h3>Sign In</h3>
						</div>

						<!--begin::Form-->
						<form class="kt-form form-send" action="<?php echo base_url().'proweb/login' ; ?>" method="post">
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Username" name="username" >
							</div>
							<div class="form-group">
								<input class="form-control" type="password" placeholder="Password" name="password">
							</div>

							<!--begin::Action-->
							<div class="kt-login__actions">
								<input type="submit" value="Sign In" class="btn btn-primary btn-elevate kt-login__btn-primary">
							</div>

							<!--end::Action-->
						</form>

						<!--end::Form-->
					</div>

					<!--end::Signin-->
				</div>

				<!--end::Body-->
			</div>

			<!--end::Content-->
		</div>
	</div>
</div>

<div class='container-loading hide'>
    <div class='loader'>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--text'></div>
        <div class='loader--desc'></div>
    </div>
</div>

<!-- end:: Page -->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
	var KTAppOptions = {
		"colors": {
			"state": {
				"brand": "#5d78ff",
				"dark": "#282a3c",
				"light": "#ffffff",
				"primary": "#5867dd",
				"success": "#34bfa3",
				"info": "#36a3f7",
				"warning": "#ffb822",
				"danger": "#fd3995"
			},
			"base": {
				"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
				"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
			}
		}
	};
</script>

<!-- end::Global Config -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/template_admin/js/jquery-3.4.1.min.js"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts(used by this page) -->
<!--<script src="--><?php //echo base_url() ?><!--assets/template_admin/js/demo1/pages/login/login-1.js" type="text/javascript"></script>-->
<script src="<?php echo base_url() ?>assets/template_admin/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/template_admin/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/template_admin/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/template_admin/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/template_admin/js/app.js" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
