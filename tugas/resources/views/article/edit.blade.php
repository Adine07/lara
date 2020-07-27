@extends('../layout/layout', ['active' => 'editarticle'])

@section('title', 'Edit Article')


@section('pageTitle', 'Article')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/dashmin">Home</a></li>
<li class="breadcrumb-item"><a href="/article">Article</a></li>
<li class="breadcrumb-item active">Edit Article</li>
@endsection

@section('content')
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">Edit this article</h3>
	</div>
	<!-- /.card-header -->
	<!-- form start -->
	<form role="form" action="/article/update/{{ $articles->id }}" method="post">
		@csrf
		@method('PUT')
		<div class="card-body">
			<div class="form-group">
				<label for="titele">Article title</label>
				<input type="text" class="form-control" id="titele" name="title" value="{{ $articles->title }}">
			</div>

			<input type="hidden" class="form-control" id="author" name="author" value="{{ Auth::user()->name }}">
			<div class="form-group">
				<label for="category_id">Category</label>
				<select class="form-control" name="category_id" id="">
					<option value="">-- Select Category --</option>
					@foreach($categories as $category)
					<option value="{{ $category->id }}" {{ $category->id == $articles->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
					@endforeach
				</select>
			</div>

			<div class="mb-3">
				<label for="content">Your article</label>
				<textarea id="content" name="content" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $articles->content }}</textarea>
			</div>
		</div>
		<!-- /.card-body -->

		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>
@endsection