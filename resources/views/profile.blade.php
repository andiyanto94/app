@extends('layouts.master')
@section('title')
	Profile
	@endsection
	@section('style')
		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/bootstrap.css?1422792965')}}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/materialadmin.css?1425466319')}}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/font-awesome.min.css?1422529194')}}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="{{ URL::to('public/js/libs/utils/html5shiv.js?1403934957')}}"></script>
		<script type="text/javascript" src="{{ URL::to('public/js/libs/utils/respond.min.js?1403934956')}}"></script>
		<![endif]-->
	@endsection
@section('content')
			<!-- BEGIN CONTENT-->
			<div id="content">

				<!-- BEGIN PROFILE HEADER -->
				<section class="full-bleed">
					<div class="section-body style-default-dark force-padding text-shadow">
						<div class="img-backdrop" style="background-image: url('{{ URL::to('public/img/icon/img10.jpg')}}')"></div>
						<div class="overlay overlay-shade-top stick-top-left height-3"></div>
						<div class="row">
							<div class="col-md-2 col-sm-2 col-lg-2 col-xs-5">
								<img class="img-circle border-white border-xl img-responsive auto-width" src="public/img/uploads/avatars/{{ Auth::user()->avatar }}" alt="" />
								<h3 class="text-center">{{ Auth::user()->name }}<br/><small>{{ Auth::user()->email }}</small></h3>
							</div><!--end .col -->
							<div class="col-md-9 col-xs-7">
								<div class="width-3 text-center pull-right">
									<strong class="text-xl">643</strong><br/>
									<span class="text-light opacity-75">followers</span>
								</div>
								<div class="width-3 text-center pull-right">
									<strong class="text-xl">108</strong><br/>
									<span class="text-light opacity-75">following</span>
								</div>
							</div><!--end .col -->
						</div><!--end .row -->
						<div class="overlay overlay-shade-bottom stick-bottom-left force-padding text-right">
							<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Contact me"><i class="fa fa-envelope"></i></a>
							<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Follow me"><i class="fa fa-twitter"></i></a>
							<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Personal info"><i class="fa fa-facebook"></i></a>
						</div>
					</div><!--end .section-body -->
				</section>
				<!-- END PROFILE HEADER  -->

				<section>
					<div class="section-body no-margin">
						<div class="row">
							<div class="col-md-8">
								<h2>Timeline</h2>

								<!-- BEGIN ENTER MESSAGE -->
								<form class="form">
									<div class="card no-margin">
										<div class="card-body">
											<div class="form-group floating-label">
												<textarea name="status" id="status" class="form-control autosize" rows="1"></textarea>
												<label for="status">What's on your mind?</label>
											</div>
										</div><!--end .card-body -->
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<div class="pull-left">
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-camera-alt"></i></a>
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-location-on"></i></a>
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-attach-file"></i></a>
												</div>
												<a href="javascript:void(0);" class="btn btn-flat btn-accent ink-reaction">Post</a>
											</div><!--end .card-actionbar-row -->
										</div><!--end .card-actionbar -->
									</div><!--end .card -->
								</form>

								<!-- BEGIN ENTER MESSAGE -->

								<!-- BEGIN MESSAGE ACTIVITY -->
								<div class="tab-pane" id="activity">
									<ul class="timeline collapse-lg timeline-hairline">
										<li class="timeline-inverted">
											<div class="timeline-circ circ-xl style-primary"><i class="md md-event"></i></div>
											<div class="timeline-entry">
												<div class="card style-default-light">
													<div class="card-body small-padding">
														<span class="text-medium">Received a <a class="text-primary" href="../../html/mail/inbox.html">message</a> from <span class="text-primary">Ann Lauren</span></span><br/>
														<span class="opacity-50">
															Saturday, Oktober 18, 2014
														</span>
													</div>
												</div>
											</div><!--end .timeline-entry -->
										</li>
										<li>
											<div class="timeline-circ circ-xl style-primary-dark"><i class="md md-access-time"></i></div>
											<div class="timeline-entry">
												<div class="card style-default-light">
													<div class="card-body small-padding">
														<p>
															<span class="text-medium">User login at <span class="text-primary">8:15 pm</span></span><br/>
															<span class="opacity-50">
																Saturday, August 2, 2014
															</span>
														</p>
														Check out my new location.
													</div>
												</div>
											</div><!--end .timeline-entry -->
										</li>
										<li>
											<div class="timeline-circ circ-xl style-primary"><i class="md md-location-on"></i></div>
											<div class="timeline-entry">
												<div class="card style-default-light">
													<div class="card-body small-padding">
														<img class="img-circle img-responsive pull-left width-1" src="../../assets/img/avatar2.jpg?1404026449" alt="" />
														<span class="text-medium">Meeting in the <span class="text-primary">conference room</span></span><br/>
														<span class="opacity-50">
															Saturday, Juli 29, 2014
														</span>
													</div>
													<div class="card-body">
														<p><em>Walked all the way home...</em></p>
														<img class="img-responsive" src="../../assets/img/img14.jpg?1404589160" alt="" />
													</div>
												</div>
											</div><!--end .timeline-entry -->
										</li>
									</ul>
								</div><!--end #activity -->
							</div><!--end .col -->
							<!-- END MESSAGE ACTIVITY -->

							<!-- BEGIN PROFILE MENUBAR -->
							<div class="col-lg-4 col-md-4">
								<div class="card card-underline style-default-dark">
									<div class="card-head">
										<header class="opacity-75"><small>Friends</small></header>
										<div class="tools">
											<form class="navbar-search" role="search">
												<div class="form-group">
													<input type="text" class="form-control" name="friendSearch" placeholder="Enter your keyword">
												</div>
												<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
											</form>
										</div><!--end .tools -->
									</div><!--end .card-head -->
									<div class="card-body no-padding">
										<ul class="list">
											<li class="tile">
												<a class="tile-content ink-reaction" href="#2">
													<div class="tile-icon">
														<img src="../../assets/img/avatar2.jpg?1404026449" alt="" />
													</div>
													<div class="tile-text">Abbey Johnson<small>Lorem ipsum dolor sit amet, consectetur adipisicing</small></div>
												</a>
											</li>
											<li class="tile">
												<a class="tile-content ink-reaction">
													<div class="tile-icon">
														<img src="../../assets/img/avatar4.jpg?1404026791" alt="" />
													</div>
													<div class="tile-text">Alex Nelson<small>Proin nonummy, lacus eget pulvinar lacinia</small></div>
												</a>
											</li>
											<li class="tile">
												<a class="tile-content ink-reaction">
													<div class="tile-icon">
														<img src="../../assets/img/avatar11.jpg?1404026774" alt="" />
													</div>
													<div class="tile-text">Mary Peterson<small>Nulla gravida orci a odio</small></div>
												</a>
											</li>
											<li class="tile">
												<a class="tile-content ink-reaction">
													<div class="tile-icon">
														<img src="../../assets/img/avatar7.jpg?1404026721" alt="" />
													</div>
													<div class="tile-text">Trevor Hanson<small>Nullam varius, turpis et commodo pharetra</small></div>
												</a>
											</li>
										</ul>
									</div><!--end .card-body -->
								</div><!--end .card -->
								<div class="card card-underline style-default-dark">
									<div class="card-head">
										<header class="opacity-75"><small>Personal info</small></header>
										<div class="tools">
											<a class="btn btn-icon-toggle ink-reaction"><i class="md md-edit"></i></a>
										</div><!--end .tools -->
									</div><!--end .card-head -->
									<div class="card-body no-padding">
										<ul class="list">
											<li class="tile">
												<a class="tile-content ink-reaction">
													<div class="tile-icon">
														<i class="md md-location-on"></i>
													</div>
													<div class="tile-text">
														621 Johnson Ave, Suite 600
														<small>Street</small>
													</div>
												</a>
											</li>
											<li class="tile">
												<a class="tile-content ink-reaction">
													<div class="tile-icon"></div>
													<div class="tile-text">
														San Francisco, CA 54321
														<small>City</small>
													</div>
												</a>
											</li>
											<li class="divider-inset"></li>
											<li class="tile">
												<a class="tile-content ink-reaction">
													<div class="tile-icon">
														<i class="fa fa-phone"></i>
													</div>
													<div class="tile-text">
														(123) 456-7890
														<small>Mobile</small>
													</div>
												</a>
											</li>
											<li class="tile">
												<a class="tile-content ink-reaction">
													<div class="tile-icon"></div>
													<div class="tile-text">
														(323) 555-6789
														<small>Work</small>
													</div>
												</a>
											</li>
										</ul>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END PROFILE MENUBAR -->

						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->
	@endsection
	@section('js')

		<!-- BEGIN JAVASCRIPT -->
		<script src="{{ URL::to('public/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>
		<script src="{{ URL::to('public/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
		<script src="{{ URL::to('public/js/libs/bootstrap/bootstrap.min.js')}}"></script>
		<script src="{{ URL::to('public/js/libs/spin.js/spin.min.js')}}"></script>
		<script src="{{ URL::to('public/js/libs/autosize/jquery.autosize.min.js')}}"></script>
		<script src="{{ URL::to('public/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>
		<script src="{{ URL::to('public/js/core/source/App.js')}}"></script>
		<script src="{{ URL::to('public/js/core/source/AppNavigation.js')}}"></script>
		<script src="{{ URL::to('public/js/core/source/AppOffcanvas.js')}}"></script>
		<script src="{{ URL::to('public/js/core/source/AppCard.js')}}"></script>
		<script src="{{ URL::to('public/js/core/source/AppForm.js')}}"></script>
		<script src="{{ URL::to('public/js/core/source/AppNavSearch.js')}}"></script>
		<script src="{{ URL::to('public/js/core/source/AppVendor.js')}}"></script>
		<script src="{{ URL::to('public/js/core/demo/Demo.js')}}"></script>
		<!-- END JAVASCRIPT -->
@endsection
	</body>
</html>
