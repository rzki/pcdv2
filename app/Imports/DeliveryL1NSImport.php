<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\DeliveryL1NS;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class DeliveryL1NSImport implements ToModel, WithStartRow, WithMultipleSheets, WithCalculatedFormulas
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
            3 => $this,
        ];
    }

    public function model(array $row)
    {
        $time = Date::excelToDateTimeObject($row['tanggal']);
        $timeConverted = Carbon::parse($time)->toDateString();

        $delivery = DeliveryL1NS::create([
            'tgl' => $timeConverted,
            'plan' => $row['plan'],
            'actual' => $row['act'],
            'line' => '1',
            'shift' => 'night'
        ]);

        return $delivery;
    }
}
