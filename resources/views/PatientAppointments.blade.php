@extends('layouts.app')

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Patient Appointments</h2>
							
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content doctor-content">
				<div class="container">

					<div class="row">
						
						<!-- Profile Sidebar -->
						<div class="col-lg-4 col-xl-3 theiaStickySidebar">
							
							<!-- Profile Sidebar -->
							<div class="profile-sidebar patient-sidebar profile-sidebar-new">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="profile-settings.html" class="booking-doc-img">
											<img src="{{asset('assets/img/doctors-dashboard/profile-06.jpg')}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="profile-settings.html">Hendrita</a></h3>
											<div class="patient-details">
												<h5 class="mb-0">Patient ID : PT254654</h5>
											</div>
											<span>Female <i class="fa-solid fa-circle"></i> 32 years 03 Months</span>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="patient-dashboard.html">
													<i class="fa-solid fa-shapes"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li class="active">
												<a href="patient-appointments.html">
													<i class="fa-solid fa-calendar-days"></i>
													<span>My Appointments</span>
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
						<!-- / Profile Sidebar -->
						
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
											<a href="patient-appointments.html"><i class="fa-solid fa-list"></i></a>
										</div>
									</li>
									<li>
										<div class="view-icons">
											<a href="patient-appointments-grid.html" class="active"><i class="fa-solid fa-th"></i></a>
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
													<a href="appointments.html" class="btn btn-light">Reset</a>
													<a href="appointments.html" class="btn btn-primary">Filter Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-content appointment-tab-content appoint-patient">
								<div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
									<div class="row">
										<!-- Appointment Grid -->
										<div class="col-xl-4 col-lg-6 col-md-12 d-flex">
											<div class="appointment-wrap appointment-grid-wrap">
												<ul>
													<li>
														<div class="appointment-grid-head">
															<div class="patinet-information">
																<a href="patient-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-21.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0001</p>
																	<h6><a href="patient-upcoming-appointment.html">Dr Edalin Hendry</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>11 Nov 2024</p>
														<p><i class="fa-solid fa-clock"></i>10.45 AM</p>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="patient-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-detail-btn">
															<a href="#" class="start-link"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
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
																<a href="patient-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-13.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0002</p>
																	<h6><a href="patient-upcoming-appointment.html">Dr.Shanta Nesmith</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>05 Nov 2024</p>
														<p><i class="fa-solid fa-clock"></i>11.50 AM</p>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="patient-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-detail-btn">
															<a href="#" class="start-link"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
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
																<a href="patient-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-14.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0003</p>
																	<h6><a href="patient-upcoming-appointment.html">Dr.John Ewel</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="telephone-icon"><a href="#"><i class="fa-solid fa-phone"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>27 Oct 2024</p>
														<p><i class="fa-solid fa-clock"></i>09.30 AM</p>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="patient-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-detail-btn">
															<a href="#" class="start-link"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
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
																<a href="patient-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-15.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0004</p>
																	<h6><a href="patient-upcoming-appointment.html">Dr.Susan Fenimore</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>18 Oct 2024</p>
														<p><i class="fa-solid fa-clock"></i>12.20 PM</p>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="patient-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-detail-btn">
															<a href="#" class="start-link"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
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
																<a href="patient-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-16.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0005</p>
																	<h6><a href="patient-upcoming-appointment.html">Dr.Juliet Rios</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>10 Oct 2024</p>
														<p><i class="fa-solid fa-clock"></i>11.30 AM</p>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="patient-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-detail-btn">
															<a href="#" class="start-link"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
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
																<a href="patient-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-17.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0006</p>
																	<h6><a href="patient-upcoming-appointment.html">Dr.Joseph Engels</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>26 Sep 2024</p>
														<p><i class="fa-solid fa-clock"></i>10.20 AM</p>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="patient-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-detail-btn">
															<a href="#" class="start-link"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
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
																<a href="patient-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-18.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0007</p>
																	<h6><a href="patient-upcoming-appointment.html">Dr.Victoria Selzer</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>14 Sep 2024</p>
														<p><i class="fa-solid fa-clock"></i>08.10 AM</p>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="patient-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-detail-btn">
															<a href="#" class="start-link"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
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
																<a href="patient-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-19.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0008</p>
																	<h6><a href="patient-upcoming-appointment.html">Dr.Benjamin Hedge</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>03 Sep 2024</p>
														<p><i class="fa-solid fa-clock"></i>06.00 PM</p>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="patient-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-detail-btn">
															<a href="#" class="start-link"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
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
																<a href="patient-upcoming-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-21.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0009</p>
																	<h6><a href="patient-upcoming-appointment.html">Dr.Kristina Lepley</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>25 Aug 2024</p>
														<p><i class="fa-solid fa-clock"></i>10.45 AM</p>
													</li>
													<li class="appointment-action">
														<ul>
															<li>
																<a href="patient-upcoming-appointment.html"><i class="fa-solid fa-eye"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-comments"></i></a>
															</li>
															<li>
																<a href="#"><i class="fa-solid fa-xmark"></i></a>
															</li>
														</ul>
														<div class="appointment-detail-btn">
															<a href="#" class="start-link"><i class="fa-solid fa-calendar-check me-1"></i>Attend</a>
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
																<a href="patient-cancelled-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-21.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0001</p>
																	<h6><a href="patient-cancelled-appointment.html">Dr Edalin Hendry</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>11 Nov 2024</p>
														<p><i class="fa-solid fa-clock"></i>10.45 AM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-cancelled-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-cancelled-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-13.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0002</p>
																	<h6><a href="patient-cancelled-appointment.html">Dr.Shanta Nesmith</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>05 Nov 2024</p>
														<p><i class="fa-solid fa-clock"></i>11.50 AM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-cancelled-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-cancelled-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-14.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0003</p>
																	<h6><a href="patient-cancelled-appointment.html">Dr.John Ewel</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>27 Oct 2024</p>
														<p><i class="fa-solid fa-clock"></i>09.30 AM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-cancelled-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-cancelled-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-15.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0004</p>
																	<h6><a href="patient-cancelled-appointment.html">Dr.Susan Fenimore</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>18 Oct 2024</p>
														<p><i class="fa-solid fa-clock"></i>12.20 PM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-cancelled-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-cancelled-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-16.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0005</p>
																	<h6><a href="patient-cancelled-appointment.html">Dr.Juliet Rios</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>10 Oct 2024</p>
														<p><i class="fa-solid fa-clock"></i>11.30 AM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-cancelled-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-cancelled-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-17.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0006</p>
																	<h6><a href="patient-cancelled-appointment.html">Dr.Joseph Engels</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>26 Sep 2024</p>
														<p><i class="fa-solid fa-clock"></i>10.20 AM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-cancelled-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-21.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0001</p>
																	<h6><a href="patient-completed-appointment.html">Dr Edalin Hendry</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>11 Nov 2024</p>
														<p><i class="fa-solid fa-clock"></i>10.45 AM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-completed-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-13.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0002</p>
																	<h6><a href="patient-completed-appointment.html">Dr.Shanta Nesmith</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>05 Nov 2024</p>
														<p><i class="fa-solid fa-clock"></i>11.50 AM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-completed-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-14.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0003</p>
																	<h6><a href="patient-completed-appointment.html">Dr.John Ewel</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="telephone-icon"><a href="#"><i class="fa-solid fa-phone"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>27 Oct 2024</p>
														<p><i class="fa-solid fa-clock"></i>09.30 AM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-completed-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-15.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0004</p>
																	<h6><a href="patient-completed-appointment.html">Dr.Susan Fenimore</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="hospital-icon"><a href="#"><i class="fa-solid fa-hospital"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>18 Oct 2024</p>
														<p><i class="fa-solid fa-clock"></i>12.20 PM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-completed-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-16.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0005</p>
																	<h6><a href="patient-completed-appointment.html">Dr.Juliet Rios</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>10 Oct 2024</p>
														<p><i class="fa-solid fa-clock"></i>11.30 AM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-completed-appointment.html" class="start-link w-100">View Details</a>
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
																<a href="patient-completed-appointment.html">
																	<img src="{{asset('assets/img/doctors/doctor-thumb-17.jpg')}}" alt="User Image">
																</a>
																<div class="patient-info">
																	<p>#Apt0006</p>
																	<h6><a href="patient-completed-appointment.html">Dr.Joseph Engels</a></h6>
																	<p class="visit">General Visit</p>
																</div>
															</div>
															<div class="grid-user-msg">
																<span class="video-icon"><a href="#"><i class="fa-solid fa-video"></i></a></span>
															</div>
														</div>
													</li>
													<li class="appointment-info">
														<p><i class="fa-solid fa-calendar-check"></i>26 Sep 2024</p>
														<p><i class="fa-solid fa-clock"></i>10.20 AM</p>
													</li>
													<li class="appointment-detail-btn">
														<a href="patient-completed-appointment.html" class="start-link w-100">View Details</a>
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