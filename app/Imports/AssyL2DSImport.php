<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\AssyL2DS;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class AssyL2DSImport implements ToModel, WithStartRow , WithHeadingRow, WithMultipleSheets, WithCalculatedFormulas
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
            4 => $this,
        ];
    }

    public function model(array $row)
    {
        $time = Date::excelToDateTimeObject($row['tanggal']);
        $timeConverted = Carbon::parse($time)->toDateString();

        $assy = AssyL2DS::create([
            'tgl' => $timeConverted,
            'plan' => $row['plan'],
            'actual' =>$row['act'],
            'line' => '2',
            'shift' => 'day'
        ]);

        return $assy;
    }
}
