<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\AssyL1DS;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;

class AssyL1DSImport implements ToModel, WithStartRow,WithHeadingRow, WithMultipleSheets, WithCalculatedFormulas
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

    public function sheets(): array
    {
        return [
            0 => $this,
        ];
    }

    public function model(array $row)
    {
        $time = Date::excelToDateTimeObject($row['tanggal']);
        $timeConverted = Carbon::parse($time)->toDateString();

        $assy = AssyL1DS::create([
            'tgl' => $timeConverted,
            'plan' => $row['plan'],
            'actual' => $row['act'],
            'line' => '1',
            'shift' => 'day'
        ]);

        return $assy;
    }
}
