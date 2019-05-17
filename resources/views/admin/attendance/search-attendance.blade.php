@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-0 my-3">
                <div class="card-header">
                    <a href="{{ route('attendance') }}" class="btn btn-success rounded-0">New Attendance</a>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <form action="{{ route('new-attendance') }}" method="POST" id="attendanceSearchForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select Author</label>
                                    <select class="form-control" name="author_id">
                                        <option> --- Select Author Name --- </option>
                                        @foreach($authors as $author)
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="text" name="start_date" class="form-control only-date"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="text" name="end_date" class="form-control only-date"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" name="btn" value="Submit" class="btn btn-success btn-block rounded-0"/>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr/>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>Author Name</th>
                                        <th>In Time</th>
                                        <th>Out Time</th>
                                    </tr>
                                </thead>
                                <tbody id="res"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>

@endsection