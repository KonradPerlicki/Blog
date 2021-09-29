<x-layout>
	<x-slot name="title">Register Now!</x-slot>
<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Inner intro START -->
<section>
	<div class="container">
		<div class="row">
      <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
        <div class="bg-primary-soft rounded p-4 p-sm-5">
			<h2>Create your free account </h2>
			<x-errors/>
			<!-- Form START -->
			<form class="mt-4" method="POST" action="{{ route('register.store') }}">
				@csrf
				<!-- Email -->
				<div class="mb-3">
					<x-auth.input name="email" value="{{ old('email') }}" type="email">Email Address</x-auth.input>
					<small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
				</div>
				<div class="mb-3">
					<x-auth.input name="username" value="{{ old('username') }}" type="text">Username</x-auth.input>
					<small class="form-text">The Username have to be unique.</small>
				</div>
				<!-- Password -->
				<div class="mb-3">
					<x-auth.input name="password" type="password">Password</x-auth.input>
				</div>
				<!-- Password -->
				<div class="mb-3">
					<x-auth.input name="password_confirmation" type="password">Confirm Password</x-auth.input>
				</div>
				<!-- Checkbox TODO
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Yes i'd also like to sign up for additional subscription</label>
				</div>-->
				<!-- Button -->
				<div class="row align-items-center">
					<div class="col-sm-4">
						<button type="submit" class="btn btn-success">Sign up</button>
					</div>
					<div class="col-sm-8 text-sm-end">
						<span>Have an account? <a href="{{ route('login') }}"><u>Sign in</u></a></span>
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