<?php

namespace App\Exports;

use App\Models\AttendanceP4;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AttendanceP4Export implements FromCollection, WithHeadings, ShouldAutoSize
{

    public function headings(): array
    {
        return [
            ['No','Dept', 'Shift', 'Manpower', 'Plan', 'Actual', '+-', '%', 'Additional MP', 'Total Add MP', '%', 'Tanggal']
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AttendanceP4::orderBy('date', 'desc')->get();
    }
}
