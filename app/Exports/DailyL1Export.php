<?php

namespace App\Exports;

use App\Models\DailyProduction;
use Maatwebsite\Excel\Concerns\FromCollection;

class DailyL1Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DailyProduction::all();
    }
}
