<div class="tab-pane" id="activity">
							<ul class="timeline collapse-lg timeline-hairline">
								@foreach($posts as $post)
									<li>
									<div class="timeline-circ circ-xl style-primary-dark"><i class="md md-access-time"></i></div>
									<div class="timeline-entry">
										<div class="card style-default-light">
											<div class="card-body small-padding">
												<img class="img-circle img-responsive pull-left width-1" src="public/img/uploads/avatars/{{ $post->user->avatar }}?1404026449" alt="" />
													<span class="text-medium">{{ $post->user->name }} at <span class="text-primary">{{ date_format($post->created_at, 'G:i') }}</span></span><br/>
															<span class="opacity-50">
																{{ date_format($post->created_at, 'l, F j, Y') }}
															</span>

												<p>{{ $post->body }}</p>
												@if(count($post->image)>0)
												<img class="img-responsive" src="public/img/icon/{{ $post->image }}?1404589160" alt="" />
													@endif
											</div>
											<div class="card-actionbar">
												<div class="card-actionbar-row ink-reaction">
													<a href="javascript:void(0);" class="btn btn-icon-toggle btn-danger ink-reaction pull-left"><i class="fa fa-heart"></i></a>
													<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default ink-reaction pull-left collapsed" data-toggle="collapse" data-target="#reaction{{ $post->id }}"><i class="fa fa-reply"></i></a>
													<a href="javascript:void(0);" class="pull-right collapsed" data-toggle="collapse" data-target="#comment{{ $post->id }}">Comments</a>

												</div>
											</div><!--end .card-actionbar -->
											@if(count($post->body)>0)
											<div class="card-body style-default-bright card-collapsed" id="comment{{ $post->id }}">
												@include('includes.comment')
											</div>
											@endif
											      <!-- card action -->
											<div id="reaction{{ $post->id }}" class="collapsed" style="margin-left: 15px; margin-bottom: 15px; border-top: 1px #ccceca solid;">
												<form class="form form-validate" action="" accept-charset="utf-8" novalidate="novalidate" method="post">
													<div class="form-group floating-label" style="margin-top: 0px;">
														<div class="input-group">
															<div class="input-group-content">
																<input type="text" class="form-control" id="groupbutton10">
																<label for="groupbutton10">Comment</label>
															</div>
															<div class="input-group-btn">
																<button class="btn btn-success ink-reaction" type="button">Comment</button>
															</div>
														</div>
													</div>
												</form>
											</div>

										</div>
									</div><!--end .timeline-entry -->
								</li>
								@endforeach
							</ul>
						</div><!--end #activity -->