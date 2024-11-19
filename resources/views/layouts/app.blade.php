<html lang="en">
	
<!-- Mirrored from doccure.dreamstechnologies.com/html/template/search-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2024 02:57:12 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<meta name="description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
		<meta name="keywords" content="practo clone, doccure, doctor appointment, Practo clone html template, doctor booking template">
		<meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
		<meta property="og:url" content="https://doccure.dreamstechnologies.com/html/">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Doctors Appointment HTML Website Templates | Doccure">
		<meta property="og:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
		<meta property="og:image" content="assets/img/preview-banner.jpg">
		<meta name="twitter:card" content="summary_large_image">
		<meta property="twitter:domain" content="https://doccure.dreamstechnologies.com/html/">
		<meta property="twitter:url" content="https://doccure.dreamstechnologies.com/html/">
		<meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Doccure">
		<meta name="twitter:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
		<meta name="twitter:image" content="assets/img/preview-banner.jpg">
		<title>Doccure</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
				
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

		<!-- Feathericon CSS -->
    	<link rel="stylesheet" href="{{asset('assets/css/feather.css')}}">

    	<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

		<!-- Jquery CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/jquery-ui/jquery-ui.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

	</head>		
	<body>
        
    <!-- Main Wrapper -->
		<div class="main-wrapper search-page"> 

<!-- Header -->
<header class="header header-custom header-fixed header-one">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="index-2.html" class="navbar-brand logo">
                    <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index-2.html" class="menu-logo">
                        <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                <li class="">
                    <a href="{{route('homepage')}}">Home </a>
                    
                </li>
                    
                    
                    
                    
                    
                    
                    <li class="login-link"><a href="{{route('login')}}">Login / Signup</a></li>
                    <li class="register-btn">
                        <a href="{{route('register')}}" class="btn reg-btn"><i class="feather-user"></i>Register</a>
                    </li>
                    <li class="register-btn">
                        <a href="{{route('login')}}" class="btn btn-primary log-btn"><i class="feather-lock"></i>Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- /Header -->
    
    @yield('content')


    	<!-- Footer -->
			<footer class="footer footer-one">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-4">
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<a href="index-2.html"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-3 col-md-4">
										<div class="footer-widget footer-menu">
											<h2 class="footer-title">For Patients</h2>
											<ul>
												<li><a href="search.html">Search for Doctors</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="register.html">Register</a></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-3 col-md-4">
										<div class="footer-widget footer-menu">
											<h2 class="footer-title">For Doctors</h2>
											<ul>
												<li><a href="appointments.html">Appointments</a></li>
												<li><a href="chat.html">Chat</a></li>
												<li><a href="login.html">Login</a></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 col-md-4">
										<div class="footer-widget footer-contact">
											<h2 class="footer-title">Contact Us</h2>
											<div class="footer-contact-info">
												<div class="footer-address">
													<p><i class="feather-map-pin"></i> Humber Hospital</p>
												</div>
												<div class="footer-address">
													<p><i class="feather-phone-call"></i> +1 333 444 5678</p>
												</div>
												<div class="footer-address mb-0">
													<p><i class="feather-mail"></i> <a href="https://doccure.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="63070c000016110623061b020e130f064d000c0e">HumberHospital@gmail.com</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-7">
								<div class="footer-widget">
									<h2 class="footer-title">Join Our Newsletter</h2>
									<div class="subscribe-form">
										<form action="#">
		                                    <input type="email" class="form-control" placeholder="Enter Email">
		                                    <button type="submit" class="btn">Submit</button>
	                                    </form>
	                                </div>
									<div class="social-icon">
									<ul>
										<li>
											<a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
										</li>
										<li>
											<a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
										</li>
										<li>
											<a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
										</li>
										<li>
											<a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
										</li>
									</ul>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0"> Copyright © 2024 <a href="https://themeforest.net/user/dreamstechnologies/portfolio" target="_blank">Humber Hospital.</a> All Rights Reserved</p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="privacy-policy.html">Privacy Policy</a></li>
											<li><a href="terms-condition.html">Terms and Conditions</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->					
					</div>
				</div>
			</footer>
			<!-- /Footer -->

			<!-- Cursor -->
			<div class="mouse-cursor cursor-outer"></div>
			<div class="mouse-cursor cursor-inner"></div>
			<!-- /Cursor -->

		</div>		
		<!-- /Main Wrapper -->
	
		<!-- jQuery -->
		<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}" type="0e97bf237d50d3037873a483-text/javascript"></script>
		
		<!-- Bootstrap Bundle JS -->
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="0e97bf237d50d3037873a483-text/javascript"></script>
		
		<!-- Feather Icon JS -->
		<script src="{{asset('assets/js/feather.min.js')}}" type="0e97bf237d50d3037873a483-text/javascript"></script>

		<!-- Select2 JS -->
		<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}" type="0e97bf237d50d3037873a483-text/javascript"></script>

		<!-- Jquery UI -->
		<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="0e97bf237d50d3037873a483-text/javascript"></script>

		<!-- Sticky Sidebar JS -->
		<script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}" type="0e97bf237d50d3037873a483-text/javascript"></script>
		<script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}" type="0e97bf237d50d3037873a483-text/javascript"></script>	

		<!-- Map JS -->
		
		<script src="{{asset('assets/js/map.js')}}" type="0e97bf237d50d3037873a483-text/javascript"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets/js/script.js')}}" type="0e97bf237d50d3037873a483-text/javascript"></script>
	
	</body>

<!-- Mirrored from doccure.dreamstechnologies.com/html/template/search-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2024 02:57:18 GMT -->
</html>
    
