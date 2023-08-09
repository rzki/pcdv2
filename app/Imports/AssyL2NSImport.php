<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\AssyL2NS;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class AssyL2NSImport implements ToModel, WithStartRow, WithHeadingRow, WithMultipleSheets, WithCalculatedFormulas
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
            6 => $this,
        ];
    }

    public function model(array $row)
    {
        $time = Date::excelToDateTimeObject($row['tanggal']);
        $timeConverted = Carbon::parse($time)->toDateString();

        $assy = AssyL2NS::create([
            'tgl' => $timeConverted,
            'plan' => $row['plan'],
            'actual' =>$row['act'],
            'line' => '2',
            'shift' => 'night'
        ]);

        return $assy;
    }
}
