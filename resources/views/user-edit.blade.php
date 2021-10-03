<x-layout>
	<x-slot name="title">Edit Profile</x-slot>
<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Inner intro START -->
<section>
	<div class="container">
		<div class="row">
      <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
        <div class="bg-primary-soft rounded p-4 p-sm-5">
			<h2>Edit your profile </h2>
			<x-errors/>
			<!-- Form START -->
			<form class="mt-4" method="POST" action="{{ route('user.update',$user) }}" enctype="multipart/form-data">
				@if($user->image)
					<small class="form-text">Current Profile Image</small><br>
					<img src="{{ $user->image_link }}" class="img-thumbnail" style="width:200px;height:200px;" >
				@endif
				
				@csrf
                @method('PUT')
                <div class="mb-3">
					<x-auth.input name="image" type="file">Profile Image</x-auth.input>
                    <small class="form-text">Accepted types: jpg, png, jpeg.</small>
				</div>

				<div class="mb-3">
					@if ($user->username_changed_at > now()->subDays(7))
						<x-auth.input name="username" value="{{ $user->username }}" disabled="disabled" type="text">Username</x-auth.input>
						<small class="form-text text-danger">Next change can't be done until {{ $user->username_changed_at->addDays(7)->format('d-m-Y H:i') }}</small>
					@else
						<x-auth.input name="username" value="{{ $user->username }}" type="text">Username</x-auth.input>
						<small class="form-text text-danger">You can change username once every 7 days.</small><br>
						<small class="form-text">The Username have to be unique.</small>
					@endif
				</div>

				<div class="mb-3">
					<x-auth.input name="description" type="text" value="{{ $user->description }}">Description</x-auth.input>
				</div>
				
				<!-- Button -->
				<div class="row align-items-center">
					<div class="col-sm-4">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
				</div>
			</form>
			<!-- Form END -->
        </div>
      </div>
    </div>
	</div>
</section>
<!-- =======================
Inner intro END -->
</main>
<!-- **************** MAIN CONTENT END **************** -->
</x-layout>