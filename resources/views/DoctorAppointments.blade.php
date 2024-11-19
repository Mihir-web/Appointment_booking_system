@extends('layouts.app')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Appointments</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
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
											<li>
												<a href="doctor-request.html">
													<i class="fa-solid fa-calendar-check"></i>
													<span>Requests</span>
													<small class="unread-msg">2</small>
												</a>
											</li>
											<li class="active">
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
								<h3>Appointments</h3>
								<ul class="header-list-btns">
									<li>
										<div class="input-block dash-search-input">
											<input type="text" class="form-control" placeholder="Search">
											<span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
										</div>
									</li>
									<li>
										<div class="view-icons">
											<a href="appointments.html"><i class="fa-solid fa-list"></i></a>
										</div>
									</li>
									<li>
										<div class="view-icons">
											<a href="doctor-appointments-grid.html" class="active"><i class="fa-solid fa-th"></i></a>
										</div>
									</li>
									<li>
										<div class="view-icons">
											<a href="#"><i class="fa-solid fa-calendar-check"></i></a>
										</div>
									</li>
								</ul>
							</div>
							<div class="appointment-tab-head">
								<div class="appointment-tabs">
									<ul class="nav nav-pills inner-tab " id="pills-tab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="pills-upcoming-tab" data-bs-toggle="pill" data-bs-target="#pills-upcoming" type="button" role="tab" aria-controls="pills-upcoming" aria-selected="false">Upcoming<span>21</span></button>
										</li>	
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="pills-cancel-tab" data-bs-toggle="pill" data-bs-target="#pills-cancel" type="button" role="tab" aria-controls="pills-cancel" aria-selected="true">Cancelled<span>16</span></button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-complete" type="button" role="tab" aria-controls="pills-complete" aria-selected="true">Completed<span>214</span></button>
										</li>
									</ul>
								</div>
								<div class="filter-head">
									<div class="position-relative daterange-wraper me-2">
										<div class="input-groupicon calender-input">
											<input type="text" class="form-control  date-range bookingrange" placeholder="From Date - To Date ">
										</div>
										<i class="fa-solid fa-calendar-days"></i>
									</div>
									<div class="form-sorts dropdown">
										<a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i class="fa-solid fa-filter me-2"></i>Filter By</a>
										<div class="filter-dropdown-menu">
											<div class="filter-set-view">
												<div class="accordion" id="accordionExample">
													<div class="filter-set-content">
														<div class="filter-set-content-head">
															<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Name<i class="fa-solid fa-chevron-right"></i></a>
														</div>
														<div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
															<ul>
																<li>
																	<div class="input-block dash-search-input w-100">
																		<input type="text" class="form-control" placeholder="Search">
																		<span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="filter-set-content">
														<div class="filter-set-content-head">
															<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Appointment Type<i class="fa-solid fa-chevron-right"></i></a>
														</div>
														<div class="filter-set-contents accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																			<span class="check-title">All Type</span>
																		</label>
																	</div>																
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="check-title">Video Call</span>
																		</label>
																	</div>																
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="check-title">Audio Call</span>
																		</label>
																	</div>																
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="check-title">Chat</span>
																		</label>
																	</div>																
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="check-title">Direct Visit</span>
																		</label>
																	</div>																
																</li>
															</ul>
														</div>
													</div>												
													<div class="filter-set-content">
														<div class="filter-set-content-head">
															<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Visit Type<i class="fa-solid fa-chevron-right"></i></a>
														</div>
														<div class="filter-set-contents accordion-collapse collapse show" id="collapseThree" data-bs-parent="#accordionExample">
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																			<span class="check-title">All Visit</span>
																		</label>
																	</div>
																	
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="check-title">General</span>
																		</label>
																	</div>
																	
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="check-title">Consultation</span>
																		</label>
																	</div>
																	
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="check-title">Follow-up</span>
																		</label>
																	</div>
																	
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="check-title">Direct Visit</span>
																		</label>
																	</div>
																	
																</li>
															</ul>
														</div>
													</div>
												</div>
												
												<div class="filter-reset-btns">
													<a href="#" class="btn btn-light">Reset</a>
													<a href="#" class="btn btn-primary">Filter Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-content appointment-tab-content">
								<div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
									<div class="row">
										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0001</p>
																	<h6><a href="doctor-upcoming-appointment.html">Adrian</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>11 Nov 2024 10.45 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="doctor-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-start">
															<a href="doctor-appointment-start.html" class="start-link">Start Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0002</p>
																	<h6><a href="doctor-upcoming-appointment.html">Kelly Stevens</a><span class="badge new-tag">New</span></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>05 Nov 2024 11.50 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="doctor-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-start">
															<a href="doctor-appointment-start.html" class="start-link">Start Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-03.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0003</p>
																	<h6><a href="doctor-upcoming-appointment.html">Samuel James</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="telephone-icon"><a href="#"><i class="fa-solid fa-phone"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>27 Oct 2024 09.30 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="doctor-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-start">
															<a href="doctor-appointment-start.html" class="start-link">Start Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-04.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0004</p>
																	<h6><a href="doctor-upcoming-appointment.html">Catherine Gracey</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>18 Oct 2024 12.20 PM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="doctor-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-start">
															<a href="doctor-appointment-start.html" class="start-link">Start Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-05.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0005</p>
																	<h6><a href="doctor-upcoming-appointment.html">Robert Miller</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>10 Oct 2024 11.30 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="doctor-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-start">
															<a href="doctor-appointment-start.html" class="start-link">Start Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-06.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0006</p>
																	<h6><a href="doctor-upcoming-appointment.html">Anderea Kearns</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>26 Sep 2024 10.20 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="doctor-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-start">
															<a href="doctor-appointment-start.html" class="start-link">Start Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-07.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0007</p>
																	<h6><a href="doctor-upcoming-appointment.html">Peter Anderson</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>14 Sep 2024 08.10 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="doctor-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-start">
															<a href="doctor-appointment-start.html" class="start-link">Start Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-08.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0008</p>
																	<h6><a href="doctor-upcoming-appointment.html">Emily Musick</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>03 Sep 2024 06.00 PM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="doctor-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-start">
															<a href="doctor-appointment-start.html" class="start-link">Start Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0009</p>
																	<h6><a href="doctor-upcoming-appointment.html">Darrell Tan</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>25 Aug 2024 10.45 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="doctor-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-start">
															<a href="doctor-appointment-start.html" class="start-link">Start Now</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<div class="col-md-12">
											<div class="loader-item text-center">
												<a href="javascript:void(0);" class="btn btn-load">Load More</a>
											</div>
										</div>	

									</div>
								</div>
								<div class="tab-pane fade" id="pills-cancel" role="tabpanel" aria-labelledby="pills-cancel-tab">
									<div class="row">
										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-cancelled-appointment-2.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0001</p>
																	<h6><a href="doctor-cancelled-appointment-2.html">Adrian</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>11 Nov 2024 10.45 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-cancelled-appointment-2.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-cancelled-appointment-2.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0002</p>
																	<h6><a href="doctor-cancelled-appointment-2.html">Kelly Stevens</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>05 Nov 2024 11.50 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-cancelled-appointment-2.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-cancelled-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-03.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0003</p>
																	<h6><a href="doctor-cancelled-appointment.html">Samuel James</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>27 Oct 2024 09.30 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-cancelled-appointment.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->
										<div class="col-md-12">
											<div class="loader-item text-center">
												<a href="javascript:void(0);" class="btn btn-load">Load More</a>
											</div>
										</div>									
									</div>
								</div>
								<div class="tab-pane fade" id="pills-complete" role="tabpanel" aria-labelledby="pills-complete-tab">
									<div class="row">
										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0001</p>
																	<h6><a href="doctor-completed-appointment.html">Adrian</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>11 Nov 2024 10.45 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-completed-appointment.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-02.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0002</p>
																	<h6><a href="doctor-completed-appointment.html">Kelly Stevens</a><span class="badge new-tag">New</span></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>05 Nov 2024 11.50 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-completed-appointment.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-03.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0003</p>
																	<h6><a href="doctor-completed-appointment.html">Samuel James</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="telephone-icon"><a href="#"><i class="fa-solid fa-phone"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>27 Oct 2024 09.30 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-completed-appointment.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-04.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0004</p>
																	<h6><a href="doctor-completed-appointment.html">Catherine Gracey</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>18 Oct 2024 12.20 PM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-completed-appointment.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-05.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0005</p>
																	<h6><a href="doctor-completed-appointment.html">Robert Miller</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>10 Oct 2024 11.30 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-completed-appointment.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="doctor-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-06.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0006</p>
																	<h6><a href="doctor-completed-appointment.html">Anderea Kearns</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>26 Sep 2024 10.20 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-completed-appointment.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="patient-profile.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-07.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0007</p>
																	<h6><a href="patient-profile.html">Peter Anderson</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>14 Sep 2024 08.10 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-appointment-details.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="patient-profile.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-08.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0008</p>
																	<h6><a href="patient-profile.html">Emily Musick</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>03 Sep 2024 06.00 PM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-appointment-details.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="patient-profile.html">
																	<img src="{{asset('assets/img/doctors-dashboard/profile-01.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0009</p>
																	<h6><a href="patient-profile.html">Darrell Tan</a></h6>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-clock"></i>25 Aug 2024 10.45 AM</p>
														<ul class="d-flex apponitment-types">
															<li>General Visit</li>
														</ul>
													</li>
													<li class="appointment-detail-btn">
														<a href="doctor-appointment-details.html" class="start-link w-100">View Details</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Appointment Grid -->

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

				</div>

			</div>		
			<!-- /Page Content -->

@endsection