@extends('../layout/layout', ['active' => 'editcategory'])

@section('title', 'Edit Category')


@section('pageTitle', 'Category')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/dashmin">Home</a></li>
<li class="breadcrumb-item"><a href="/category">Category</a></li>
<li class="breadcrumb-item active">Edit Category</li>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit this category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/category/update/{{$category->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="titele">Category Name</label>
                <input type="text" class="form-control" id="titele" name="name" value="{{ $category->name }}">
            </div>
            <div class="form-group">
                <label for="">Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="1" {{ $category->status ? 'checked' : '' }}>
                    <label class="form-check-label">Active</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" value="0" {{ !$category->status ? 'checked' : '' }}>
                    <label class="form-check-label">Non-Active</label>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection