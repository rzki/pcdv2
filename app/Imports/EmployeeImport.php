<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\EmployeeListPCD;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class EmployeeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $birth_day = Date::excelToDateTimeObject($row[2]);
        $birthDay = Carbon::parse($birth_day)->toDateString();

        $employee = EmployeeListPCD::create([
            'npk' => $row[0],
            'name' => $row[1],
            'tgl_lahir' => $birthDay,
            'alamat' => $row[3]
        ]);

        return $employee;
    }
}
