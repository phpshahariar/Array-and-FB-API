@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-0 my-3">
                <div class="card-header">
                    <a href="{{ route('add-blog') }}" class="btn btn-success rounded-0">Add New Blog</a>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Blog Title</th>
                                <th>Author Name</th>
                                <th>Blog Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($blogs as $blog)
                            <?php //$author = \App\Author::find($blog->author_id); ?>
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ $blog->author->name }}</td>
                                <td><img src="{{ asset($blog->blog_image) }}" alt="" height="100" width="100"/></td>
                                <td>{{ $blog->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
@endsection