<div class="col-sm-6 col-lg-4">
	<div class="card">
		<!-- Card img -->
		<div class="position-relative">
			<img class="card-img" src="{{ Storage::url($post->background_image) }}" alt="Card image">
			<div class="card-img-overlay d-flex align-items-start flex-column p-3">
				<!-- Card overlay bottom -->
				<div class="w-100 mt-auto">
					<!-- Card category todo -->
					<a href="#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{ $post->category->name }}</a>
				</div>
			</div>
		</div>
		<div class="card-body px-0 pt-3">
			<h4 class="card-title"><a href="{{ route('post.show',['id' => $post->id, 'slug' => $post->slug]) }}" class="btn-link text-reset fw-bold">{{ $post->title }}</a></h4>
			<p class="card-text">{{ substr($post->content, 0, 100) }}</p>
			<!-- Card info -->
			<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
				<li class="nav-item">
					<div class="nav-link">
						<div class="d-flex align-items-center position-relative">
                            @if($post->author->image)
                                <div class="avatar avatar-xs">
                                    <img class="avatar-img rounded-circle" src="{{$post->author->image_link}}" alt="avatar">
                                </div>
                            @endif
							<span class="ms-3">By <a href="{{route('user.show',$post->author)}}" class="stretched-link text-reset btn-link">{{$post->author->username}}</a></span>
						</div>
					</div>
				</li>
				<li class="nav-item">{{ $post->created_at->format('M d, Y') }}</li>
			</ul>
		</div>
	</div>
</div>