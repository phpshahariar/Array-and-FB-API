@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body rounded-0 my-2 pb-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Select Date Time</label>
                            <input type="text" name="date_time" class="form-control" id="dateTimeMy"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Select Date Time Range</label>
                            <input type="text" name="date_time" class="form-control" id="dateTimeRangeMy"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Select Date</label>
                            <input type="text" name="date_time" class="form-control" id="dateMy"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Select Another Date</label>
                            <input type="text" name="date_time" class="form-control" id="dateAnotherMy"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Select Another Date</label>
                            <input type="text" name="date_time" class="form-control" id="dateTwoMy"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Select Time</label>
                            <input type="text" name="timepicker" class="form-control timepicker"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
