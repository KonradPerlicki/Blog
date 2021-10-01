<x-layout>
	<x-slot name="title">Reset your password</x-slot>
<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section>
	<div class="container">
		<div class="row">
      <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
        <div class="p-4 p-sm-5 bg-primary-soft rounded">
			<h2>Create your new password</h2>
			<x-errors/>
			<!-- Form START -->
			<form class="mt-4" method="POST" action="{{ route('password.update') }}">
				@csrf
                @method('PUT')
				<!-- Email -->
                <input type="hidden" name="token" value="{{ request()->route('token') }}">

				<div class="mb-3">
					<x-auth.input name="email" type="email" value="{{ request()->get('email') }}">Email address</x-auth.input>
				</div>
				<!-- Password -->
				<div class="mb-3">
					<x-auth.input name="password" type="password">Password</x-auth.input>
				</div>
				<!-- Password -->
				<div class="mb-3">
					<x-auth.input name="password_confirmation" type="password">Confirm Password</x-auth.input>
				</div>
				<!-- Button -->
				<div class="row align-items-center">
					<div class="col-sm-4">
						<button type="submit" class="btn btn-success">Reset password</button>
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
