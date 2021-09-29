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
					<x-author-card-item :user="$user"/>
					<x-author-card-item :user="$user" />
					<x-author-card-item :user="$user" />
					<x-author-card-item :user="$user" />
					<!-- Card item END -->
					<!-- Load more START -->
					<div class="col-12 text-center mt-5">
						<button type="button" class="btn btn-primary-soft">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
					</div>
					<!-- Load more END -->
				</div>
			</div>
			<!-- Main Post END -->
		</div> <!-- Row end -->
	</div>
</section>
<!-- =======================
Main content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
</x-layout>