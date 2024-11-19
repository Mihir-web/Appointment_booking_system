@extends('layouts.app')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Requests</h2>
							
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content doctor-content">
				<div class="container">

					<div class="row">
						<div class="col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar doctor-sidebar profile-sidebar-new">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="doctor-profile.html" class="booking-doc-img">
											<img src="{{asset('assets/img/doctors-dashboard/doctor-profile-img.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="doctor-profile.html">Dr Edalin Hendry</a></h3>
											<div class="patient-details">
												<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
											</div>
											<span class="badge doctor-role-badge"><i class="fa-solid fa-circle"></i>Dentist</span>
										</div>
									</div>
								</div>
								<div class="doctor-available-head">
									<div class="input-block input-block-new">
										<label class="form-label">Availability <span class="text-danger">*</span></label>
										<select class="select form-control">
											<option>I am Available Now</option>
											<option>Not Available</option>
										</select>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="doctor-dashboard.html">
													<i class="fa-solid fa-shapes"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li class="active">
												<a href="doctor-request.html">
													<i class="fa-solid fa-calendar-check"></i>
													<span>Requests</span>
													<small class="unread-msg">2</small>
												</a>
											</li>
											<li>
												<a href="appointments.html">
													<i class="fa-solid fa-calendar-days"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="available-timings.html">
													<i class="fa-solid fa-calendar-day"></i>
													<span>Available Timings</span>
												</a>
											</li>
											<li>
												<a href="my-patients.html">
													<i class="fa-solid fa-user-injured"></i>
													<span>My Patients</span>
												</a>
											</li>
											<li>
												<a href="doctor-specialities.html">
													<i class="fa-solid fa-clock"></i>
													<span>Specialties & Services</span>
												</a>
											</li>
											<li>
												<a href="login.html">
													<i class="fa-solid fa-calendar-check"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						
						<div class="col-lg-8 col-xl-9">

							<div class="dashboard-header">
								<h3>Requests</h3>
								<ul>
									<li>
										<div class="dropdown header-dropdown">
											<a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown" href="javascript:void(0);">
												Last 7 Days
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Today
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													This Month
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 7 Days
												</a>
											</div>
										</div>
									</li>
								</ul>
							</div>
							
							<!-- Request List -->
							<div class="appointment-wrap">
								<ul>
									<li>
										<div class="patinet-information">
											<a href="patient-profile.html">
												<img src="{{asset('assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
											</a>
											<div class="patient-info">
												<p>#Apt0001</p>
												<h6><a href="patient-profile.html">Adrian</a><span class="badge new-tag">New</span></h6>
											</div>
										</div>
									</li>
									<li class="appointment-info">
										<p><i class="fa-solid fa-clock"></i>11 Nov 2024 10.45 AM</p>
										<p class="md-text">General Visit</p>
									</li>
									<li class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="fa-solid fa-video text-blue"></i>Video Call</p>
									</li>
									<li>
										<ul class="request-action">
											<li>
												<a href="#" class="accept-link" data-bs-toggle="modal" data-bs-target="#accept_appointment"><i class="fa-solid fa-check"></i>Accept</a>
											</li>
											<li>
												<a href="#" class="reject-link" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="fa-solid fa-xmark"></i>Reject</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- /Request List -->

							<!-- Request List -->
							<div class="appointment-wrap">
								<ul>
									<li>
										<div class="patinet-information">
											<a href="patient-profile.html">
												<img src="{{asset('assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
											</a>
											<div class="patient-info">
												<p>#Apt0002</p>
												<h6><a href="patient-profile.html">Kelly</a></h6>
											</div>
										</div>
									</li>
									<li class="appointment-info">
										<p><i class="fa-solid fa-clock"></i>10 Nov 2024 02.00 PM</p>
										<p class="md-text">General Visit</p>
									</li>
									<li class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="fa-solid fa-building text-green"></i>Direct Visit <i class="fa-solid fa-circle-info" data-bs-toggle="tooltip" title="Clinic Location Sofia’s Clinic"></i></p>
									</li>
									<li>
										<ul class="request-action">
											<li>
												<a href="#" class="accept-link" data-bs-toggle="modal" data-bs-target="#accept_appointment"><i class="fa-solid fa-check"></i>Accept</a>
											</li>
											<li>
												<a href="#" class="reject-link" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="fa-solid fa-xmark"></i>Reject</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- /Request List -->


							<!-- Request List -->
							<div class="appointment-wrap">
								<ul>
									<li>
										<div class="patinet-information">
											<a href="patient-profile.html">
												<img src="{{asset('assets/img/doctors-dashboard/profile-03.jpg')}}" alt="User Image">
											</a>
											<div class="patient-info">
												<p>#Apt0003</p>
												<h6><a href="patient-profile.html">Samuel</a></h6>
											</div>
										</div>
									</li>
									<li class="appointment-info">
										<p><i class="fa-solid fa-clock"></i>08 Nov 2024 08.30 AM</p>
										<p class="md-text">Consultation for Cardio</p>
									</li>
									<li class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="fa-solid fa-phone text-indigo"></i>Audio Call</p>
									</li>
									<li>
										<ul class="request-action">
											<li>
												<a href="#" class="accept-link" data-bs-toggle="modal" data-bs-target="#accept_appointment"><i class="fa-solid fa-check"></i>Accept</a>
											</li>
											<li>
												<a href="#" class="reject-link" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="fa-solid fa-xmark"></i>Reject</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- /Request List -->

							<!-- Request List -->
							<div class="appointment-wrap">
								<ul>
									<li>
										<div class="patinet-information">
											<a href="patient-profile.html">
												<img src="{{asset('assets/img/doctors-dashboard/profile-06.jpg')}}" alt="User Image">
											</a>
											<div class="patient-info">
												<p>#Apt0004</p>
												<h6><a href="patient-profile.html">Anderea</a></h6>
											</div>
										</div>
									</li>
									<li class="appointment-info">
										<p><i class="fa-solid fa-clock"></i>05 Nov 2024 11.00 AM</p>
										<p class="md-text">Consultation for Dental</p>
									</li>
									<li class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="fa-solid fa-phone text-indigo"></i>Audio Call</p>
									</li>
									<li>
										<ul class="request-action">
											<li>
												<a href="#" class="accept-link" data-bs-toggle="modal" data-bs-target="#accept_appointment"><i class="fa-solid fa-check"></i>Accept</a>
											</li>
											<li>
												<a href="#" class="reject-link" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="fa-solid fa-xmark"></i>Reject</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- /Request List -->

							<!-- Request List -->
							<div class="appointment-wrap">
								<ul>
									<li>
										<div class="patinet-information">
											<a href="patient-profile.html">
												<img src="{{asset('assets/img/doctors-dashboard/profile-05.jpg')}}" alt="User Image">
											</a>
											<div class="patient-info">
												<p>#Apt0005</p>
												<h6><a href="patient-profile.html">Robert</a></h6>
											</div>
										</div>
									</li>
									<li class="appointment-info">
										<p><i class="fa-solid fa-clock"></i>07 Nov 2024 11.00 AM</p>
										<p class="md-text">General Visit</p>
									</li>
									<li class="appointment-type">
										<p class="md-text">Type of Appointment</p>
										<p><i class="fa-solid fa-phone text-indigo"></i>Audio Call</p>
									</li>
									<li>
										<ul class="request-action">
											<li>
												<a href="#" class="accept-link" data-bs-toggle="modal" data-bs-target="#accept_appointment"><i class="fa-solid fa-check"></i>Accept</a>
											</li>
											<li>
												<a href="#" class="reject-link" data-bs-toggle="modal" data-bs-target="#cancel_appointment"><i class="fa-solid fa-xmark"></i>Reject</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- /Request List -->

							<div class="row">
								<div class="col-md-12">
									<div class="loader-item text-center">
										<a href="javascript:void(0);" class="btn btn-load">Load More</a>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->

@endsection