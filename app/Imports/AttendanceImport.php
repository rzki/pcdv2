<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AttendanceImport implements ToModel, WithStartRow, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        $time = Date::excelToDateTimeObject($row['presensi']);
        $timeConverted = Carbon::parse($time)->toTimeString();

        $attendance = Attendance::create([
            'npk' => $row['npk'],
            'name' => $row['nama'],
            'division' => $row['divisi'],
            'dept' => $row['dept'],
            'section' => $row['section'],
            'position' => $row['position'],
            'shift' => $row['shift'],
            'time' => $timeConverted,
            'date' => Carbon::today()->toDateString()
        ]);

        return $attendance;
    }
}
