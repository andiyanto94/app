<div class="card card-underline style-default-bright">
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
												<img src="public/img/uploads/avatars/{{ Auth::user()->avatar }}" alt="" />
											</div>
											<div class="tile-text">
												{{ Auth::user()->name }}
												<small>
													{{ Auth::user()->email }}
												</small>
											</div>
										</a>
									</li>
									<li class="tile">
										<a class="tile-content ink-reaction">
											<div class="tile-icon">
												<i class="md md-location-on"></i>
											</div>
											<div class="tile-text">
												{{ Auth::user()->address }}
												<small>Address</small>
											</div>
										</a>
									</li>
									<li class="divider-inset"></li>
									<li class="tile">
										<a class="tile-content ink-reaction">
											<div class="tile-icon">
												<i class="fa fa-mobile"></i>
											</div>
											<div class="tile-text">
												{{ Auth::user()->tlp }}
												<small>Mobile</small>
											</div>
										</a>
									</li>
								</ul>
							</div><!--end .card-body -->
						</div><!--end .card -->