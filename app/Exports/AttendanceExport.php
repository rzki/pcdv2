<?php

namespace App\Exports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AttendanceExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles, WithMapping
{
    public function collection()
    {
        $startDate = request()->input('start_date') ;
        $endDate   = request()->input('end_date') ;

        return Attendance::whereBetween('date', [ $startDate, $endDate ])
            ->get();
    }

    public function map($pcdAttendance): array
    {
        return [
            $pcdAttendance->npk,
            $pcdAttendance->name,
            $pcdAttendance->division,
            $pcdAttendance->dept,
            $pcdAttendance->section,
            $pcdAttendance->position,
            $pcdAttendance->shift,
            $pcdAttendance->time,
            $pcdAttendance->date,
        ];
    }

    public function styles(Worksheet $worksheet)
    {
        return [
            1    => ['font' => ['bold' => true], ['size' => 16]],
        ];
    }
    public function headings(): array
    {
        return [
            ['NPK', 'Nama', 'Divisi', 'Departemen', 'Seksi', 'Jabatan', 'Shift', 'Time', 'Tanggal']
        ];
    }

}
