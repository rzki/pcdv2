<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UsersImport implements ToModel, WithStartRow
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

    public function model(array $row)
    {
        $user = User::create([
            'npk' => $row[0],
            'name' => $row[1],
            'division' => $row[4],
            'dept' => $row[5],
            'section' => $row[6],
            'position' => $row[7],
            'shift' => $row[8],
            'password' => bcrypt('Astra123'),
            'image' => null,
            'role' => 'Member'
        ]);

        return $user;
    }
}
