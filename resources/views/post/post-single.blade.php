<x-layout>
	<x-slot name="title">Post</x-slot>
<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Inner intro START -->
<section class="pt-2">
	<div class="container">
		<div class="row">
      <div class="col-12">
        <div class="card bg-dark-overlay-5 overflow-hidden card-bg-scale h-400 text-center" style="background-image:url({{ Storage::url($post->background_image) }}); background-position: center left; background-size: cover;">
          <!-- Card Image overlay -->
          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
            <div class="w-100 my-auto">
              <!-- Card category TODO-->
              <a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>{{ $post->category->name }}</a>
              <!-- Card title -->
              <h2 class="text-white display-5">{{ $post->title }}</h2>
              <!-- Card info -->
              <ul class="nav nav-divider text-white-force align-items-center justify-content-center">
                <li class="nav-item">
                  <div class="nav-link">
                    <div class="d-flex align-items-center text-white position-relative">
						@if ($post->author->image)
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="{{ Storage::url($post->author->image) }}" alt="avatar">
						  	</div>	
						@endif
                      <span class="ms-3">By <a href="{{ route('user.show',$post->author) }}" class="stretched-link text-reset btn-link">{{ $post->author->username }}</a></span>
                    </div>
                  </div>
                </li>
                <li class="nav-item">{{ $post->created_at->format('M d, Y') }}</li>
                <li class="nav-item">{{ $post->read_time }} min read</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main START -->
<section class="pt-0">
	<div class="container position-relative" data-sticky-container>
		<div class="row">
			<!-- Main Content START -->
			<div class="col-lg-9 mb-5">
				<p class="mb-5">
					<span class="dropcap bg-dark text-white px-2">{{ $post->content[0] }}</span>
					{{ substr($post->content, 1) }}
				</p>
				@foreach(unserialize($post->gallery) as $image)
					<img class="card-img" src="{{ Storage::url($image) }}" alt="Image">
				@endforeach

				@foreach (unserialize($post->tags) as $tag)
					<p class="p-2 mt-3 badge {{ $post->randomTag() }}">#{{ $tag }}</p>
				@endforeach
				<!-- Author info START -->
				<x-author-info :user="$post->author"/>
				<!-- Author info END -->
				@if($post->comments->count())
				<div class="mt-5">
					<h3>{{ $post->comments->count() .' '. Str::plural('comment', $post->comments->count()) }}</h3>
					<!-- Comment-->
					@foreach ($post->comments as $comment)
						@if(auth()->user()?->canAny(['im-author','admin'], $comment))
							<x-comment :comment="$comment" :canDelete="true"/>
						@else
							<x-comment :comment="$comment"/>
						@endif
					@endforeach
				</div>
				@else
				<div class="mt-5">
					There are no comments
				</div>
				@endif
				@auth
					<!-- Reply START -->
					<div>
						<h3>Leave a comment</h3>
						<form class="row g-3 mt-2" method="post" action="{{ route('comment.store', ['type'=>'post','id'=>$post->id]) }}">
						@csrf
						<div class="col-12">
							<label class="form-label">Your Comment *</label>
							<textarea name="content" class="form-control" rows="3"></textarea>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary">Post comment</button>
						</div>
						</form>
					</div>
					<!-- Reply END -->
				@else
				<br>
					<div class="">
						<h3>Sign In to leave a comment!</h3>
					</div>
				@endauth
			</div>
			<!-- Main Content END -->
			
			<!-- Right sidebar START -->
			<div class="col-lg-3">
				<div data-sticky data-margin-top="80" data-sticky-for="991">
          <!-- Categories -->
	      	<div class="row g-2">
						<h5>Categories</h5>
						@php $classes = ['warning','info','danger','success','primary']; @endphp
						@foreach ($categories as $category)
						<div class="d-flex justify-content-between align-items-center bg-@php echo $classes[$loop->index] @endphp-soft rounded p-2 position-relative">
							<h6 class="m-0 text-@php echo $classes[$loop->index] @endphp">{{ $category->name }}</h6>{{-- TODO --}}
							<a href="#" class="badge bg-@php echo $classes[$loop->index] @endphp text-dark stretched-link">09</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- Right sidebar END -->
		</div>
	</div>
</section>
<!-- =======================
Main END -->

<!-- =======================
Sticky post START -->
<div class="sticky-post bg-light border p-4 mb-5 text-sm-end rounded d-none d-xxl-block">
  <div class="d-flex align-items-center">
    <!-- Title -->
    <div class="me-3">
      <span>Next post<i class="bi bi-arrow-right ms-3"></i></span>
      <h6 class="m-0"> <a href="javascript:void(0)" class="stretched-link btn-link text-reset">Bad habits that people in the industry need to quit</a></h6>
    </div>
    <!-- image -->
    <div class="col-4 d-none d-md-block">
      <img src="assets/images/blog/4by3/05.jpg" alt="Image">
    </div>
  </div>
</div>
<!-- =======================
Sticky post END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
</x-layout>