<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\AttendanceP4;
use Maatwebsite\Excel\Concerns\ToModel;

class AttendanceP4Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        $pm = $row[4] - $row[3];
        $percent = round($row[4] / $row[3] * 100, 1);
        $totalmp_add = $row[4] + $row[5];
        $percent2 = round($totalmp_add / $row[3] * 100, 1);

        $attendanceP4 = AttendanceP4::create([
            'dept' => $row[0],
            'shift' => $row[1],
            'total_mp' => $row[2],
            'plan' => $row[3],
            'act' => $row[4],
            'p_m' => $pm,
            'percent' => $percent,
            'add_mp' => $row[5],
            'total_add_mp' => $totalmp_add,
            'percent2' => $percent2,
            'date' => Carbon::today()->toDateString()
        ]);

        return $attendanceP4;
    }
}
