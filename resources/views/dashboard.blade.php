@extends('layouts.master')
@section('title')
		Home
		@endsection
@section('style')
	<!-- BEGIN STYLESHEETS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/bootstrap.css?1422792965')}}" />
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/materialadmin.css?1425466319')}}" />
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/font-awesome.min.css?1422529194')}}" />
	<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/libs/jquery-ui/jquery-ui-theme.css?1423393666')}}" />
		<link type="text/css" rel="stylesheet" href="{{ URL::to('public/css/theme-default/libs/nestable/nestable.css?1423393667')}}" />
		<!-- END STYLESHEETS -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="{{ URL::to('public/js/libs/utils/html5shiv.js?1403934957')}}"></script>
	<script type="text/javascript" src="{{ URL::to('public/js/libs/utils/respond.min.js?1403934956')}}"></script>
	<![endif]-->
	@endsection
	@section('content')
	<!-- BEGIN CONTENT-->
	<div id="content" style="margin-top: 20px;">

		<section>
			<div class="section-body no-margin">
				<div class="row">
					<div class="col-md-8">
						<!-- BEGIN ALERT - REVENUE -->
						<div class="col-md-12 col-sm-12 col-xs-12">

							@if (Auth::guest())
								<div class="alert alert-warning" role="alert">
									<strong>User!</strong> to use this website you must to <a href="{{ url('/login') }}">Login</a>.
								</div>

							@else
								<div class="alert alert-info" role="alert">
									<span class="text-lg text-bold"><i class="md md-alarm-on"></i> Carrent activity today.</span>
								</div>
							@endif
								@include('includes.message-block')
						</div><!--end .col -->
						<!-- END ALERT - REVENUE -->

						<!-- BEGIN MESSAGE ACTIVITY -->
						<div class="card panel ink-reaction" style="margin-bottom: 0px;">
							<a href="#">
								<div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion7" data-target="#accordion7-4">
								<header>Timeline</header>
								<div class="tools">
									<strong>Klick to add activity</strong> <a class="btn btn-lg btn-icon-toggle"><i class="fa fa-plus"></i></a>
								</div>
							</div></a>
							<div id="accordion7-4" class="collapse">
								<form class="form form-validate" action="{{ route('post.create') }}" accept-charset="utf-8" method="post" novalidate="novalidate">
									{{ csrf_field() }}
									<div class="card no-margin">
										<div class="card-body">
											<div class="floating-label form-group">
												<textarea name="body" id="body" class="form-control autosize" rows="1" required ></textarea>
												<label for="status">What's your planning?</label>
											</div>
										</div><!--end .card-body -->
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<div class="pull-left">
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-camera-alt"></i></a>
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-location-on"></i></a>
													<a class="btn btn-icon-toggle ink-reaction btn-default"><i class="md md-attach-file"></i></a>
												</div>
												<a href="javascript:void(0);" class="btn btn-flat btn-accent ink-reaction" data-toggle="collapse" data-parent="#accordion7" data-target="#accordion7-4">Cancel</a>
												<button type="submit" class="btn btn-flat btn-accent ink-reaction">Post</button>
												<input type="hidden" value="{{ Session::token() }}" name="_token" >
											</div><!--end .card-actionbar-row -->
										</div><!--end .card-actionbar -->
									</div><!--end .card -->
								</form>
							</div>
						</div><!--end .panel -->

						@include('includes.timeline')

					</div><!--end .col -->
					<!-- END MESSAGE ACTIVITY -->

					<!-- BEGIN PROFILE MENUBAR -->

					<div class="col-lg-4 col-md-4">
						@if(Auth::guest())
							test
						@else
							@include('includes.pending')

							@include('includes.personal-info')


						@endif
							@include('includes.copyright')
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
		<script src="{{ URL::to('public/js/libs/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/spin.js/spin.min.js')}}"></script>
<script src="{{ URL::to('public/js/libs/autosize/jquery.autosize.min.js')}}"></script>
		<script src="{{ URL::to('public/js/libs/nestable/jquery.nestable.js')}}"></script>
<script src="{{ URL::to('public/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/App.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppNavigation.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppOffcanvas.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppCard.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppForm.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppNavSearch.js')}}"></script>
<script src="{{ URL::to('public/js/core/source/AppVendor.js')}}"></script>
<script src="{{ URL::to('public/js/core/demo/Demo.js')}}"></script>
		<script src={{ URL::to('public/js/core/demo/DemoUILists.js')}}"></script>
<!-- END JAVASCRIPT -->
@endsection
