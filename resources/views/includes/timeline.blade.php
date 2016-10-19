<div class="tab-pane" id="activity">
							<ul class="timeline collapse-lg timeline-hairline">
								@foreach($posts as $post)
									<li>
									<div class="timeline-circ circ-xl style-primary-dark"><i class="md md-access-time"></i></div>
									<div class="timeline-entry">
										<div class="card style-default-light">
											<div class="card-body small-padding">
												<img class="img-circle img-responsive pull-left width-1" src="public/img/uploads/avatars/{{ $post->user->avatar }}?1404026449" alt="" />
													<span class="text-medium">{{ $post->user->name }} at <span class="text-primary">8:15 pm</span></span><br/>
															<span class="opacity-50">
																{{ $post->created_at }}
															</span>

												<p>{{ $post->body }}</p>
												@if(count($post->image)>0)
												<img class="img-responsive" src="public/img/icon/{{ $post->image }}?1404589160" alt="" />
													@endif
											</div>
											<div class="collapse" id="comment{{ $post->id }}">
												<div class="card-body height-12 scroll style-default-bright">
												<ul class="list-comments" style="margin-right: 20px;">
													<li>
														<div class="card">
															<div class="comment-avatar"><i class="glyphicon glyphicon-user opacity-50"></i></div>
															<div class="card-body small-padding">
																<h4 class="comment-title">Jim Peters <small>20/06/2013 at 4:02 pm</small></h4>
																<a class="btn btn-default-dark stick-top-right" href="#respond">Reply</a>
																<p>Etiam dui libero, tempor quis congue in, interdum eget tortor. Vivamus aliquam dictum lacus quis tincidunt. Phasellus rhoncus ante sollicitudin nisl consectetur ultricies. Sed rhoncus ullamcorper mauris, ac condimentum metus egestas ut. Nam et urna ante, vitae pretium lacus.</p>
															</div>
														</div><!--end .card -->
													</li><!-- end comment -->
													<li>
														<div class="card">
															<div class="comment-avatar"><span class="glyphicon glyphicon-user opacity-50"></span></div>
															<div class="card-body">
																<h4 class="comment-title">CarolSharp <small>20/06/2013 at 4:14 pm</small></h4>
																<a class="btn btn-default-dark stick-top-right" data-toggle="collapse" data-target="#respond">Reply</a>
																<p>Integer ac magna lacinia velit bibendum ornare. Morbi eget dui lectus, eget eleifend mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

															</div>
															<div id="respond" class="collapse" style="margin-left: 15px; margin-bottom: 15px; border-top: 1px #ccceca solid;">
																<form class="form form-validate" action="" accept-charset="utf-8" novalidate="novalidate" method="post">
																	<div class="form-group floating-label" style="margin-top: 0px;">
																		<div class="input-group">
																			<div class="input-group-content">
																				<input type="text" class="form-control" id="groupbutton10">
																				<label for="groupbutton10">Reply</label>
																			</div>
																			<div class="input-group-btn">
																				<button class="btn btn-success ink-reaction" type="button">Reply</button>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														</div><!--end .card -->
														<ul>
															<li>
																<div class="card">
																	<div class="comment-avatar"><img class="img-circle" src="{{URL::to('public/img/icon/avatar1.jpg?1403934956')}}" alt="" /></div>
																	<div class="card-body">
																		<h4 class="comment-title">Daniel Johnson <small>20/06/2013 at 4:38 pm</small></h4>
																		<p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer ac magna lacinia velit bibendum ornare. Morbi eget dui lectus, eget eleifend mi.</p>
																	</div>
																</div><!--end .card -->
															</li><!-- end sub-comment -->
															<li>
																<div class="card">
																	<div class="comment-avatar"><span class="glyphicon glyphicon-user opacity-50"></span></div>
																	<div class="card-body">
																		<h4 class="comment-title">Amber Page <small>20/06/2013 at 4:41 pm</small></h4>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in tempus lorem. Vivamus ullamcorper leo risus, non vehicula odio.</p>
																	</div>
																</div><!--end .card -->
															</li><!-- end sub-comment -->
														</ul>
													</li><!-- end comment -->
												</ul>
													</div>
											</div>
											<div class="card-actionbar">
												<div class="card-actionbar-row">
													<a href="javascript:void(0);" class="btn btn-icon-toggle btn-danger ink-reaction pull-left"><i class="fa fa-heart"></i></a>
													<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default ink-reaction pull-left collapsed" data-toggle="collapse" data-target="#reaction{{ $post->id }}"><i class="fa fa-reply"></i></a>
													<a href="javascript:void(0);" class="ink-reaction pull-right collapsed" data-toggle="collapse" data-target="#comment{{ $post->id }}">Comments</a>

												</div>
											</div><!--end .card-actionbar -->
											      <!-- card action -->
											<div id="reaction{{ $post->id }}" class="collapse" style="margin-left: 15px; margin-bottom: 15px; border-top: 1px #ccceca solid;">
												<form class="form form-validate" action="" accept-charset="utf-8" novalidate="novalidate" method="post">
													<div class="form-group floating-label" style="margin-top: 0px;">
														<div class="input-group">
															<div class="input-group-content">
																<input type="text" class="form-control" id="groupbutton10">
																<label for="groupbutton10">Reply</label>
															</div>
															<div class="input-group-btn">
																<button class="btn btn-success ink-reaction" type="button">Reply</button>
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