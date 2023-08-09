<?php

namespace App\Exports;

use App\Models\DailyProduction2;
use Maatwebsite\Excel\Concerns\FromCollection;

class DailyL2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DailyProduction2::all();
    }
}
