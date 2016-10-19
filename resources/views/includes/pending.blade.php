<div class="card card-underline style-default-bright">
							<div class="card-head">
								<header class="opacity-75"><small>Pending</small></header>
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
								<ul class="list" data-sortable="true">
									@foreach($posts as $post)
									<li class="tile">
										<div class="checkbox checkbox-styled tile-text">
											<label>
												<input type="checkbox">
												<span>
													{{ $post->body }}
												</span>
											</label>
										</div>
										<a class="btn btn-flat ink-reaction btn-default" data-toggle="modal" data-target="#pending">
											<i class="fa fa-edit"></i>
										</a>
										<a class="btn btn-flat ink-reaction btn-default">
											<i class="md md-play-arrow"></i>
										</a>
									</li>
									@endforeach
								</ul>
							</div><!--end .card-body -->
						</div><!--end .card -->

<!-- BEGIN FORM MODAL MARKUP -->
				<div class="modal fade" id="pending" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="formModalLabel">Edit Planning</h4>
							</div>
							<form class="form form-validate" action="#" accept-charset="utf-8" method="post" novalidate="novalidate">
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
												<a href="javascript:void(0);" class="btn btn-flat btn-danger ink-reaction">Delete</a>
												<button type="submit" class="btn btn-success btn-rised ink-reaction">Post</button>
												<input type="hidden" value="{{ Session::token() }}" name="_token" >
											</div><!--end .card-actionbar-row -->
										</div><!--end .card-actionbar -->
									</div><!--end .card -->
								</form>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<!-- END FORM MODAL MARKUP -->