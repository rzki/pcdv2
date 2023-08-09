<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\AssyL1NS;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class AssyL1NSImport implements ToModel, WithStartRow, WithMultipleSheets, WithCalculatedFormulas
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
            2 => $this,
        ];
    }

    public function model(array $row)
    {
        $time = Date::excelToDateTimeObject($row['tanggal']);
        $timeConverted = Carbon::parse($time)->toDateString();

        $assy = AssyL1NS::create([
            'tgl' => $timeConverted,
            'plan' => $row['plan'],
            'actual' =>$row['act'],
            'line' => '1',
            'shift' => 'night'
        ]);

        return $assy;
    }
}
