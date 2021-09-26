<x-layout>
	<x-slot name="title">Log In</x-slot>
<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Inner intro START -->
<section>
	<div class="container">
		<div class="row">
      <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
        <div class="p-4 p-sm-5 bg-primary-soft rounded">
					<h2>Log in to your account</h2>
					<x-errors/>
					<!-- Form START -->
					<form class="mt-4" method="POST" action="{{ route('login.store') }}">
						@csrf
						<!-- Email -->
						<div class="mb-3">
							<x-auth.input name="login" type="text">Email address / Username</x-auth.input>
						</div>
						<!-- Password -->
						<div class="mb-3">
							<x-auth.input name="password" type="password">Password</x-auth.input>
						</div>
						<!-- Checkbox -->
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" name="remember" id="remember">
							<label class="form-check-label" for="remember">Keep me signed in</label>
						</div>
						<!-- Button -->
						<div class="row align-items-center">
							<div class="col-sm-4">
								<button type="submit" class="btn btn-success">Sign in</button>
							</div>
							<div class="col-sm-8 text-sm-end">
								<span>Don't have an account? <a href="{{ route('register') }}"><u>Sign up</u></a></span>
							</div>
						</div>
					</form>
					<!-- Form END -->
					<hr>
					<!-- Social-media btn -->
					<div class="text-center">
						<p>Sign in with your social network for quick access</p>
						<ul class="list-unstyled d-sm-flex mt-3 justify-content-center">
							<li class="mx-2">
								<a href="#" class="btn bg-facebook d-inline-block"><i class="fab fa-facebook-f me-2"></i> Sign in with Facebook</a>
							</li>
							<li class="mx-2">
								<a href="#" class="btn bg-google d-inline-block"><i class="fab fa-google me-2"></i> Sign in with google</a>
							</li>
						</ul>
					</div>
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
