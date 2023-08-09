<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\DailyProduction;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class DailyL1Import implements ToModel, WithStartRow,WithHeadingRow, WithMultipleSheets, WithCalculatedFormulas
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
        $time = Date::excelToDateTimeObject($row['tgl']);
        $timeConverted = Carbon::parse($time)->toDateString();

        $l1 = DailyProduction::create([
            'tgl' => $timeConverted,
            'plan' => $row['plan'],
            'actual' => $row['aktual'],
            'plus_minus' => $row['aktual'] - $row['plan'],
            'line' => '1'
        ]);

        return $l1;
    }
}
