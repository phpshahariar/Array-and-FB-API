@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-0 my-3">
                <div class="card-header">
                    <a href="" class="btn btn-success rounded-0">All Author</a>
                    <a href="" class="btn btn-success rounded-0">New Author</a>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <form action="{{ route('new-attendance') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Select Date</label>
                                    <input type="text" name="attendance_date" class="form-control date-time"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Sl No</td>
                                            <td>Author Name</td>
                                            <td>In Time</td>
                                            <td>Out Time</td>
                                            <td>Note</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i = 1)
                                        @php($x=0)
                                        @foreach($authors as $author)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $author->name }}<input type="hidden" value="{{ $author->id }}" name="author[{{ $x }}][id]"></td>
                                            <td><input type="text" name="author[{{ $x }}][in_time]" class="form-control timepicker"/></td>
                                            <td><input type="text" name="author[{{ $x }}][out_time]" class="form-control timepicker"/></td>
                                            <td><textarea name="author[{{ $x }}][note]" class="form-control">Well</textarea></td>
                                        </tr>
                                        @php($x++)
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                 <div class="form-group">
                                     <input type="submit" name="btn" value="Submit" class="btn btn-success btn-block rounded-0"/>
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