@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-0 my-3">
                <div class="card-header">
                    <a href="{{ route('manage-blog') }}" class="btn btn-success rounded-0">All Blog</a>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <form action="{{ route('new-blog') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Blog Title</label>
                                    <input type="text" name="blog_title" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Author Name</label>
                                    <select class="form-control" name="author_id">
                                        <option> --- Select Author Name --- </option>
                                        @foreach($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Blog Description</label>
                                    <textarea name="blog_description" id="editor" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Blog Image</label>
                                    <input type="file" name="blog_image" class="form-control-file"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Publication Status</label>
                                    <input type="radio" name="publication_status" value="1" checked/> Published
                                    <input type="radio" name="publication_status" value="0"/> Unpublished
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" name="btn" value="Create New Blog" class="btn btn-success btn-block rounded-0"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
@endsection