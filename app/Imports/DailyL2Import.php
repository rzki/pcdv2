<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\DailyProduction2;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class DailyL2Import implements ToModel,WithStartRow,WithHeadingRow, WithMultipleSheets, WithCalculatedFormulas
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
            1 => $this,
        ];
    }

    public function model(array $row)
    {
        $time = Date::excelToDateTimeObject($row['tgl']);
        $timeConverted = Carbon::parse($time)->toDateString();

        $l2 = DailyProduction2::create([
            'tgl' => $timeConverted,
            'plan' => $row['plan'],
            'actual' => $row['aktual'],
            'plus_minus' => $row['aktual'] - $row['plan'],
            'line' => '2'
        ]);

        return $l2;
    }
}
