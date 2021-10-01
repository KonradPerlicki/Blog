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
			<h2>Reset your password</h2>
            Let us know your email address and we will email you a password reset link that will allow you to choose a new one
			<x-errors/>
			<!-- Form START -->
			<form class="mt-4" method="POST" action="{{ route('password.email') }}">
				@csrf
				<!-- Email -->
				<div class="mb-3">
					<x-auth.input name="email" type="email">Email address </x-auth.input>
				</div>
				<!-- Button -->
				<div class="row align-items-center">
					<div class="col-sm-4">
						<button type="submit" class="btn btn-success">Reset</button>
					</div>
					<div class="col-sm-8 text-sm-end">
						<span>Have an account already? <a href="{{ route('login') }}"><u>Sign in</u></a></span>
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
