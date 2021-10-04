<x-layout>
	<x-slot name="title">Author</x-slot>
<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section class="pt-4">
	<div class="container">
		<div class="row">
      		<div class="col-12">
        	<!-- Author info START -->
				<div class="bg-primary-soft d-md-flex p-3 p-sm-4 my-3 text-center text-md-start rounded">
					@if($user->image)
						<div class=" me-0 me-md-4">
							<!-- Avatar -->
							<div class="avatar avatar-xxl">
								<img class="avatar-img rounded-circle" src="{{$user->image_link}}" alt="avatar">
							</div>
							<!-- Post count -->
							<div class="text-center mt-n3 position-relative">
							<span class="badge bg-danger fs-6">6 posts</span>
						</div>
					@else
						<div class=" me-0 me-md-4 mt-4">
							<!-- Post count -->
							<div class="text-center mt-n3 position-relative">
							<span class="badge bg-danger fs-6">6 posts</span>
						</div>
					@endif
        		</div>
				<!-- Info -->
				<div>
            		<h2 class="m-0">{{$user->username}}</h2>
					@if($user->description)
						<p class="my-2">{{$user->description}}</p>
					@else
						<p class="my-2 fst-italic fw-lighter">* This user doesn't have description *</p>
					@endif				
				</div>
			</div>
			<!-- Author info END -->
      		</div>
    	</div>
	</div>
</section>
<!-- =======================
Inner intro END -->

<!-- =======================
Main content START -->
<section class="position-relative pt-0">
	<div class="container">
		<div class="row">
      <div class="col-12 mb-3">
        <h2>The Latest from {{$user->username}}</h2>
      </div>
			<!-- Main Post START -->
			<div class="col-12">
				<div class="row gy-4">
					<!-- Card item START -->
					@forelse ($posts as $post)
						<x-author-card-item :post="$post"/>
					@empty
						This user does not have any posts
					@endforelse
					<!-- Card item END -->
				</div>
			</div>
			<!-- Main Post END -->
			@if($user->comments->count())
				<div class="mt-5">
					<h3>{{ $user->comments->count() .' '. Str::plural('comment', $user->comments->count()) }}</h3>
					<!-- Comment-->
					@foreach ($user->comments as $comment)
						@if(auth()->user()?->can('im-author', $comment))
							<x-comment :comment="$comment" :canDelete="true"/>
						@else
							<x-comment :comment="$comment"/>
						@endif
					@endforeach
				</div>
				@endif
			@auth
				@if (auth()->id() !== $user->id)
					<!-- Reply START -->
					<div class="mt-5">
						<h3>Leave a comment</h3>
						<form class="row g-3 mt-2" method="post" action="{{ route('comment.store', ['type'=>'user','id'=>$user->id]) }}">
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
					@endif
			@else
			<br>
				<div class="">
					<h3>Sign In to leave a comment about this user!</h3>
				</div>
			@endauth
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
</x-layout>