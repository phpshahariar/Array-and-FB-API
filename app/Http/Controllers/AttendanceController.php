<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use DateTime;
use App\Author;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('admin.attendance.attendance', ['authors' => Author::all()]);
    }

    public function newAttendance(Request $request)
    {
        $dateArray = explode(',', $request->attendance_date);
        foreach ($request->author as $value) {
            $attendance = new Attendance();
            $attendance->author_id          = $value['id'];
            $attendance->attendance_date	= $dateArray[0];
            $attendance->in_time            = $value['in_time'];
            $attendance->out_time	        = $value['out_time'];
            $attendance->note	            = $value['note'];
            $attendance->save();
        }
        return redirect()->back()->with('message', 'Attendance info save successfully');
    }

    public function searchAttendance()
    {
        return view('admin.attendance.search-attendance', ['authors' => Author::all()]);
    }

    public function newSearchAttendance(Request $request)
    {
        $data = Attendance::where('attendance_date', '>=', $request->start_date)
                            ->where('attendance_date', '<=', $request->end_date)
                            ->where('author_id', '=', $request->author_id)->get();
        $author = Author::find($request->author_id);
        $result = [];
        $i = 0;
        foreach ($data as $item) {
            $result[$i]['name'] = $author->name;
            $result[$i]['in']   = $item->in_time;
            $result[$i]['out']  = $item->out_time;
            $i++;
        }
        return json_encode($result);
    }
}
