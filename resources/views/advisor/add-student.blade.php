<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/images/favicon.png')}}" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Admin | Add student </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="{{asset('admin/assets/js/html5shiv.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/respond.min.js')}}"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/assets.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/vendors/calendar/fullcalendar.css')}}">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/typography.css')}}">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/shortcodes/shortcodes.css')}}">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/dashboard.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/color/color-1.css')}}">

</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">

	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="/" class="ttr-logo">
						{{-- <img alt="" class="ttr-logo-mobile" src="{{asset('admin/assets/images/logo-mobile.png')}}" width="30" height="30">
						<img alt="" class="ttr-logo-desktop" src="{{asset('admin/assets/images/logo-white.png')}}" width="160" height="27"> --}}
                        <p style="margin:auto">Evercare University</p>
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="../index.html" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="../courses.html">Our Courses</a></li>
								<li><a href="../event.html">New Event</a></li>
								<li><a href="../membership.html">Membership</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
						<div class="ttr-header-submenu noti-menu">
							<div class="ttr-notify-header">
								<span class="ttr-notify-text-top">9 New</span>
								<span class="ttr-notify-text">User Notifications</span>
							</div>
							<div class="noti-box-list">
								<ul>
									<li>
										<span class="notification-icon dashbg-gray">
											<i class="fa fa-check"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 02:14</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-yellow">
											<i class="fa fa-shopping-cart"></i>
										</span>
										<span class="notification-text">
											<a href="#">Your order is placed</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 7 Min</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-red">
											<i class="fa fa-bullhorn"></i>
										</span>
										<span class="notification-text">
											<span>Your item is shipped</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 2 May</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-green">
											<i class="fa fa-comments-o"></i>
										</span>
										<span class="notification-text">
											<a href="#">Sneha Jogi</a> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 14 July</span>
										</span>
									</li>
									<li>
										<span class="notification-icon dashbg-primary">
											<i class="fa fa-file-word-o"></i>
										</span>
										<span class="notification-text">
											<span>Sneha Jogi</span> sent you a message.
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close"></a>
											<span> 15 Min</span>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="{{asset('admin/assets/images/testimonials/pic3.jpg')}}" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="user-profile.html">My profile</a></li>
								<li><a href="list-view-calendar.html">Activity</a></li>
								<li><a href="mailbox.html">Messages</a></li>
								<li><a href="../login.html">Logout</a></li>
							</ul>
						</div>
					</li>
					<li class="ttr-hide-on-mobile">
						<a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
						<div class="ttr-header-submenu ttr-extra-menu">
							<a href="#">
								<i class="fa fa-music"></i>
								<span>Musics</span>
							</a>
							<a href="#">
								<i class="fa fa-youtube-play"></i>
								<span>Videos</span>
							</a>
							<a href="#">
								<i class="fa fa-envelope"></i>
								<span>Emails</span>
							</a>
							<a href="#">
								<i class="fa fa-book"></i>
								<span>Reports</span>
							</a>
							<a href="#">
								<i class="fa fa-smile-o"></i>
								<span>Persons</span>
							</a>
							<a href="#">
								<i class="fa fa-picture-o"></i>
								<span>Pictures</span>
							</a>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	@include('admin.sidebar')
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Add Student</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Add new student</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add student</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="POST" action="/admin/student/store">
                                @csrf
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic info</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Name</label>
										<div>
											<input class="form-control" name="name" type="text" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Email</label>
										<div>
											<input class="form-control" name="email" type="email" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Phone</label>
										<div>
											<input class="form-control" name="phone" type="number" value="">
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Birthdate</label>
										<div>
											<input class="form-control" name="birthdate" type="date" value="">
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">Fater's name</label>
										<div>
											<input class="form-control" name="fathers_name" type="text" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Mother's name</label>
										<div>
											<input class="form-control" name="mothers_name" type="text" value="">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">HSC year</label>
										<div>
											<input class="form-control" name="hsc_year" type="text" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">HSC gpa</label>
										<div>
											<input class="form-control" name="hsc_gpa" type="text" value="">
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">SSC year</label>
										<div>
											<input class="form-control" name="ssc_year" type="numeric" value="">
										</div>
									</div>
                                    <div class="form-group col-6">
										<label class="col-form-label">SSC gpa</label>
										<div>
											<input class="form-control" name="ssc_gpa" type="text" value="">
										</div>
									</div>
                                    <div class="form-group col-12">
										<label class="col-form-label">Address</label>
										<div>
											<textarea name="address" class="form-control"> </textarea>
										</div>
									</div>
									<div class="seperator"></div>

									{{--
                                    <div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									<div class="form-group col-12">
										<label class="col-form-label">Course description</label>
										<div>
											<textarea class="form-control"> </textarea>
										</div>
									</div>
									<div class="col-12 m-t20">
										<div class="ml-auto">
											<h3 class="m-form__section">3. Add Item</h3>
										</div>
									</div>
									<div class="col-12">
										<table id="item-add" style="width:100%;">
											<tr class="list-item">
												<td>
													<div class="row">
														<div class="col-md-4">
															<label class="col-form-label">Course Name</label>
															<div>
																<input class="form-control" type="text" value="">
															</div>
														</div>
														<div class="col-md-3">
															<label class="col-form-label">Course Category</label>
															<div>
																<input class="form-control" type="text" value="">
															</div>
														</div>
														<div class="col-md-3">
															<label class="col-form-label">Course Category</label>
															<div>
																<input class="form-control" type="text" value="">
															</div>
														</div>
														<div class="col-md-2">
															<label class="col-form-label">Close</label>
															<div class="form-group">
																<a class="delete" href="#"><i class="fa fa-close"></i></a>
															</div>
														</div>
													</div>
												</td>
											</tr>
										</table>
									</div>
									<div class="col-12">
										<button type="button" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Add Item</button>
										<button type="reset" class="btn">Save changes</button>
									</div>
                                    --}}
                                    <div class="col-12">
										<button type="submit" class="btn">Save changes</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('admin/assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{asset('admin/assets/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/counter/counterup.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{asset('admin/assets/vendors/masonry/masonry.js')}}"></script>
<script src="{{asset('admin/assets/vendors/masonry/filter.js')}}"></script>
<script src="{{asset('admin/assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('admin/assets/vendors/scroll/scrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/functions.js')}}"></script>
<script src="{{asset('admin/assets/vendors/chart/chart.min.js')}}"></script>
<script src="{{asset('admin/assets/js/admin.js')}}"></script>
<script src="{{asset('admin/assets/vendors/switcher/switcher.js')}}"></script>
<script>
// Pricing add
	function newMenuItem() {
		var newElem = $('tr.list-item').first().clone();
		newElem.find('input').val('');
		newElem.appendTo('table#item-add');
	}
	if ($("table#item-add").is('*')) {
		$('.add-item').on('click', function (e) {
			e.preventDefault();
			newMenuItem();
		});
		$(document).on("click", "#item-add .delete", function (e) {
			e.preventDefault();
			$(this).parent().parent().parent().parent().remove();
		});
	}
</script>
</body>
</html>
