<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\DailyProduction;
use App\Models\DailyProduction2;

class DailyProdController extends Controller
{
    public function indexDaily()
    {
        // SAP
        // Get the selected or current month for SAP chart
        $monthResultSAP = request()->input('monthSAP') ? Carbon::parse(request()->input('monthSAP'))->toDateString() : Carbon::now()->format('Y-m');
        $monthHeaderSAP = Carbon::parse($monthResultSAP)->isoFormat('MMMM Y');

        // Get the chart data based on the selected or current month
        $chartSAP = DailyProduction::whereMonth('tgl', '=', $monthResultSAP)->get();

        // KAP
        // Get the selected month or default to current month
        $monthResultKAP = request()->monthKAP ? Carbon::parse(request()->monthKAP)->toDateString() : Carbon::now()->toDateString();

        // Format the month header for display
        $monthHeaderKAP = Carbon::parse($monthResultKAP)->isoFormat('MMMM Y');

        // Retrieve the chart data for the selected month
        $chartKAP = DailyProduction2::whereMonth('tgl', '=', $monthResultKAP)->get();

        $tableSAP = DailyProduction::whereMonth('tgl', '=', Carbon::now())->get();
        $tableKAP = DailyProduction2::whereMonth('tgl', '=', Carbon::now())->get();

        // SAP
        // Initialize the arrays
        $labelSAP = [];
        $planSAP = [];
        $actualSAP = [];
        $plusMinusSAP = [];

        // Check if the $chartSAP is empty
        if ($chartSAP->isEmpty()) {
            // If it's empty, add "Data Tidak Ditemukan" to the labelSAP array and leave the other arrays empty
            $labelSAP[] = "Data Tidak Ditemukan";
        } else {
            // If it's not empty, loop through each item in the $chartSAP array and add the corresponding values to the arrays
            foreach ($chartSAP as $sap) {
                $labelSAP[] = Carbon::parse($sap->tgl)->isoFormat('DD MMMM');
                $planSAP[] = $sap->plan;
                $actualSAP[] = $sap->actual;
                $plusMinusSAP[] = $sap->plus_minus;
            }
        };

        // KAP
        // Initialize empty arrays
        $labelKAP = [];
        $planKAP = [];
        $actualKAP = [];
        $plusMinusKAP = [];

        // Check if $chartKAP is empty
        if($chartKAP->isEmpty()){
            // If it's empty, add a message to the labelKAP array and leave the other arrays empty
            $labelKAP[] = "Data Tidak Ditemukan";
        } else {
            // If it's not empty, loop through each element in $chartKAP
            foreach($chartKAP as $kap){
                // Add the formatted date to the labelKAP array
                $labelKAP[] = Carbon::parse($kap->tgl)->isoFormat('DD MMMM');
                // Add the plan, actual, and plus_minus values to their respective arrays
                $planKAP[] = $kap->plan;
                $actualKAP[] = $kap->actual;
                $plusMinusKAP[] = $kap->plus_minus;
            }
        };


        return view('daily-plan.index', compact('chartSAP','tableSAP', 'chartKAP', 'tableKAP', 'monthHeaderSAP' ,'monthHeaderKAP',
                                                'labelSAP', 'planSAP', 'actualSAP','plusMinusSAP',
                                                'labelKAP', 'planKAP', 'actualKAP','plusMinusKAP'));
    }
}
