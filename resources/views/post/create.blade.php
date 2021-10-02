<x-layout>
	<x-slot name="title">Create a post!</x-slot>
<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Inner intro START -->
<section>
	<div class="container">
		<div class="row">
      <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
        <div class="bg-primary-soft rounded p-4 p-sm-5">
			<h2>Create new post </h2>
			<x-errors/>
			<!-- Form START -->
			<form class="mt-4" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
				@csrf
				<div class="mb-3">
					<x-auth.input name="title" value="{{ old('title') }}" type="text">Title</x-auth.input>
				</div>
				<div class="mb-3">
					<x-auth.input name="background_image" type="file">Background Image</x-auth.input>
				</div>
				<div class="mb-3">
					<x-auth.input name="read_time" value="{{ old('read_time') }}"  type="number">Read time (minutes)</x-auth.input>
				</div>
				<div class="mb-3">
					<label class="form-label">Category</label>
					<select class="form-control" name="category_id">
						<option disabled selected hidden>Select...</option>
						@foreach ($categories as $category)
							<option {{ old('category')==$category->name ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="mb-3">
					<label class="form-label">Tags</label>
					<select class="form-control" name="tags[]" multiple>
						<option disabled selected hidden>Select multiple...</option>
						@foreach ($tags as $tag)
							<option {{ (collect(old('tags'))->contains($tag->name)) ? 'selected':'' }} value="{{ $tag->name }}">{{ $tag->name }}</option>
						@endforeach
					</select>
				</div>
                <div class="mb-3">
					<label class="form-label">Content</label>
                    <textarea class="form-control" name="content" placeholder="Content of the post">{{ old('content') }}</textarea>
				</div>
				<div class="mb-3">
					<x-auth.input name="gallery[]" type="file" disabled="multiple">Gallery</x-auth.input>
				</div>

				<!-- Button -->
				<div class="row align-items-center">
					<div class="col-sm-4">
						<button type="submit" class="btn btn-success">Create</button>
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
</x-layout>