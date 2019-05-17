<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/wickedpicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
</head>
<body>
@include('admin.includes.header')
<div class="container">
@yield('body')
</div>
@include('admin.includes.footer')
<script src="{{ asset('/') }}assets/js/jquery-3.4.0.js"></script>
<script src="{{ asset('/') }}assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="{{ asset('/') }}assets/js/wickedpicker.min.js"></script>
<script src="{{ asset('/') }}assets/js/bootstrap.js"></script>

<script>
    $('.date-time').daterangepicker({
        singleDatePicker: true,
        startDate: new Date(),
        showDropdowns: true,
        timePicker: true,
        timePickerIncrement: 10,
        autoUpdateInput: true,
        locale: {
            format: 'M/DD/Y, hh:mm A'
        }
    });

    $('.only-date').daterangepicker({
        singleDatePicker: true,
        startDate: new Date(),
        autoUpdateInput: true,
        locale: {
            format: 'M/DD/Y'
        }
    });

    $('#dateTimeMy').daterangepicker({
        singleDatePicker: true,
        startDate: new Date(),
        showDropdowns: true,
        timePicker: true,
        timePickerIncrement: 10,
        autoUpdateInput: true,
        locale: {
            format: 'M/DD/Y, hh:mm A'
        }
    });

    $('#dateTimeRangeMy').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour'),
        //.add(32, 'hour'),
        locale: {
            format: 'M/D/Y, hh:mm a'
        }
    });

    $('#dateMy').daterangepicker({
        singleDatePicker: true,
        startDate: new Date(),
        showDropdowns: true,
        autoUpdateInput: true,
        locale: {
            format: 'M/DD/Y'
        }
    });

    $('#dateAnotherMy').daterangepicker({
        singleDatePicker: true,
        startDate: new Date(),
        autoUpdateInput: true,
        locale: {
            format: 'M/DD/Y'
        }
    });

    $('#dateTwoMy').daterangepicker({
        timePicker: true,
        singleDatePicker: true,
        minDate: new Date(),
        locale: {
            format: 'M/DD/Y hh:mm A'
        }
    });
    $('.timepicker').wickedpicker();
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $('#attendanceSearchForm').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'new-search-attendance',
            method: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                var tr = '';
                var res = $('#res');
                res.empty();
                var index = 1;
                $.each(response, function (key, value) {
                    tr += '<tr>';
                    tr += '<td>'+index+'</td>';
                    tr += '<td>'+value.name+'</td>';
                    tr += '<td>'+value.in+'</td>';
                    tr += '<td>'+value.out+'</td>';
                    tr += '</tr>';
                    index++;
                });
                res.append(tr);
            }
        });
    });
</script>
</body>
</html>
