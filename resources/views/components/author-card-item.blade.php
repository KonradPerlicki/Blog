<div class="col-sm-6 col-lg-4">
	<div class="card">
		<!-- Card img -->
		<div class="position-relative">
			<img class="card-img" src="{{asset('assets/images/blog/4by3/14.jpg')}}" alt="Card image">
			<div class="card-img-overlay d-flex align-items-start flex-column p-3">
				<!-- Card overlay bottom -->
				<div class="w-100 mt-auto">
					<!-- Card category -->
					<a href="#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
				</div>
			</div>
		</div>
		<div class="card-body px-0 pt-3">
			<h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h4>
			<p class="card-text">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to</p>
			<!-- Card info -->
			<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
				<li class="nav-item">
					<div class="nav-link">
						<div class="d-flex align-items-center position-relative">
                            @if($user->image)
                                <div class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="{{$user->image_link}}" alt="avatar">
                                </div>
                            @endif
							<span class="ms-3">By <a href="{{route('user.show',$user->username)}}" class="stretched-link text-reset btn-link">{{$user->username}}</a></span>
						</div>
					</div>
				</li>
				<li class="nav-item">Jan 22, 2021</li>
			</ul>
		</div>
	</div>
</div>