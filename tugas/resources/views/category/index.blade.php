@extends('../layout/layout', ['active' => 'category'])

@section('title', 'Category')


@section('pageTitle', 'Category')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/dashmin">Home</a></li>
<li class="breadcrumb-item active">Category</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Category List</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="/category/create" class="btn btn-primary my-3 ">New Category</a>
        <table id="datableArticle" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->status ? 'Active' : 'Non-Active' }}</td>
                    <td>
                        <a href="/category/edit/{{ $category->id }}" class="btn btn-warning btn-sm">edit</a>
                        <form action="/category/delete/{{ $category->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection