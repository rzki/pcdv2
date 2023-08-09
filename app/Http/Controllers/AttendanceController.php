<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Attendance;
use App\Models\AttendanceP4;
use App\Imports\AttendanceImport;
use App\Imports\AttendanceP4Import;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class AttendanceController extends Controller
{
    public function indexPCD()
    {
        // If the 'date' parameter is set, use it to get attendance data for that date
        // Otherwise, use today's date to get attendance data for today
        $date = request()->filled('date') ? Carbon::parse(request()->date)->toDateString() : Carbon::today()->toDateString();

        // Get all attendance records for the specified date
        $attendance = Attendance::whereDate('date', $date)->get();

        // Get the total number of employees who have attendance records for the specified date
        $totalPegawai = Attendance::where('date', $date)->count();

        // Get the total number of employees who have attended work for the specified date
        $totalKehadiran = Attendance::where([
            ['time', '>', '00:00:00'],
            ['date', '=', $date]
        ])->count();

        // Pass the attendance data and totals to the 'pcd-attendance.index' view
        return view('pcd-attendance.index', compact('attendance', 'totalPegawai', 'totalKehadiran'));

    }

    public function indexP4()
    {
        // Get the date from the request input, or default to today's date
        $date = request()->input('date', Carbon::today()->toDateString());

        // Get all attendance records for the specified date
        $attendanceP4 = AttendanceP4::whereDate('date', $date)->get();

        // Get the total number of employees who have attendance records for the specified date
        $totalData = AttendanceP4::whereDate('date', $date)->count();

        // Get the average attendance percentage for the specified date
        $attendanceP4Query = DB::table('attendance_p4')->whereDate('date', $date);
        $avgPercent = $attendanceP4Query->sum('percent2');

        // Get the total number of departments with attendance records for the specified date
        $totalDept = $attendanceP4Query->count();

        // Convert the average percentage to a float
        $avgPercentFloat = (float) $avgPercent;

        // Pass the attendance data, totals, and average percentage to the 'p4-attendance.index' view
        return view('p4-attendance.index', compact('attendanceP4', 'totalData', 'avgPercent', 'totalDept', 'avgPercentFloat'));

    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new AttendanceImport, $request->file('file'));

        Alert::toast('Data Absensi Hari Ini Berhasil Ditambahkan!', 'success');

        return redirect()->back();
    }

    public function fileImportP4(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new AttendanceP4Import, $request->file('file'));

        Alert::toast('Data Absensi P4 Hari Ini Berhasil Ditambahkan!', 'success');

        return redirect()->back();
    }

}
