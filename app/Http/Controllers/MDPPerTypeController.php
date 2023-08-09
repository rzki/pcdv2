<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\MonthlyPerType;
use App\Models\MonthlyPerModel;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class MDPPerTypeController extends Controller
{
    public function chartByType()
    {
        if (request()->sap_date){
            $yearly = Carbon::parse(request()->sap_date)->toDate();
            $yearlyChartHeader = Carbon::parse(request()->sap_date)->isoFormat('Y');

            // Query Model
            $volumeTotalModelSAP1 = MonthlyPerModel::whereYear('tgl' , '=' , $yearly)->where('model', '=', 'U-IMV')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelSAP2 = MonthlyPerModel::whereYear('tgl' , '=' , $yearly)->where('model', '=', 'B-MPV')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelSAP3 = MonthlyPerModel::whereYear('tgl' , '=' , $yearly)->where('model', '=', 'D22D')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelSAP4 = MonthlyPerModel::whereYear('tgl' , '=' , $yearly)->where('model', '=', 'GRANMAX')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelKAP1 = MonthlyPerModel::whereYear('tgl' , '=' , $yearly)->where('model', '=', 'D80N')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelKAP2 = MonthlyPerModel::whereYear('tgl' , '=' , $yearly)->where('model', '=', 'D30D')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelKAP3 = MonthlyPerModel::whereYear('tgl' , '=' , $yearly)->where('model', '=', 'TERIOS KAP')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelKAP4 = MonthlyPerModel::whereYear('tgl' , '=' , $yearly)->where('model', '=', 'RUSH KAP')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelKAP5 = MonthlyPerModel::whereYear('tgl' , '=' , $yearly)->where('model', '=', 'A-SUV')->orderBy('tgl', 'asc')->get();

            // Query Type
            $volumeTotalTypeSAP1  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'Xenia')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP2  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'Avanza DOM')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP3  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'Avanza EXP')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP4  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'B-MPV D-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP5  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'B-MPV T-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP6  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'Terios')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP7  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'Rush')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP8  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'RUSH EXPORT (T-Exp)')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP9  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'D40D DOMESTIC (D-Dom)')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP10 = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'D16B WAGON  D-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP11 = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'D40D D-Brand Export')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP12 = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'Townlite')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP13 = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'TownLite Japan LHD')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP14 = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'D40L Daihatsu')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP15 = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'D40L MAZDA')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP1  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'D30D D-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP2  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'D30D T-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP3  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'AYLA')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP4  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'AGYA')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP5  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'WIGO')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP6  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'ASUV D-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP7  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'ASUV T-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP8  = MonthlyPerType::whereYear('tgl' , '=' , $yearly)->where('type', '=', 'ASUV EXP')->orderBy('tgl', 'asc')->get();

        }else{
            $yearlyChartHeader = Carbon::now()->isoFormat('Y');

            // Query Model
            $volumeTotalModelSAP1 = MonthlyPerModel::whereYear('tgl' , '=' , Carbon::now())->where('model', '=', 'U-IMV')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelSAP2 = MonthlyPerModel::whereYear('tgl' , '=' , Carbon::now())->where('model', '=', 'B-MPV')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelSAP3 = MonthlyPerModel::whereYear('tgl' , '=' , Carbon::now())->where('model', '=', 'D22D')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelSAP4 = MonthlyPerModel::whereYear('tgl' , '=' , Carbon::now())->where('model', '=', 'GRANMAX')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelKAP1 = MonthlyPerModel::whereYear('tgl' , '=' , Carbon::now())->where('model', '=', 'D80N')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelKAP2 = MonthlyPerModel::whereYear('tgl' , '=' , Carbon::now())->where('model', '=', 'D30D')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelKAP3 = MonthlyPerModel::whereYear('tgl' , '=' , Carbon::now())->where('model', '=', 'TERIOS KAP')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelKAP4 = MonthlyPerModel::whereYear('tgl' , '=' , Carbon::now())->where('model', '=', 'RUSH KAP')->orderBy('tgl', 'asc')->get();
            $volumeTotalModelKAP5 = MonthlyPerModel::whereYear('tgl' , '=' , Carbon::now())->where('model', '=', 'A-SUV')->orderBy('tgl', 'asc')->get();
            $volumeTotalSAP = MonthlyPerModel::whereYear('tgl' , '=' , Carbon::now())->where('plant','=', 'SAP')->orderBy('tgl', 'asc')->get();


            // Query Type
            $volumeTotalTypeSAP1  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'Xenia')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP2  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'Avanza DOM')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP3  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'Avanza EXP')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP4  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'B-MPV D-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP5  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'B-MPV T-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP6  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'Terios')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP7  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'Rush')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP8  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'RUSH EXPORT (T-Exp)')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP9  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'D40D DOMESTIC (D-Dom)')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP10  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'D16B WAGON  D-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP11  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'D40D D-Brand Export')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP12  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'Townlite')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP13  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'TownLite Japan LHD')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP14  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'D40L Daihatsu')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeSAP15  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'D40L MAZDA')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP1  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'D30D D-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP2  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'D30D T-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP3  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'AYLA')->orderBy('tgl', 'asc')->get();       }
            $volumeTotalTypeKAP4  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'AGYA')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP5  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'WIGO')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP6  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'ASUV D-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP7  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'ASUV T-Dom')->orderBy('tgl', 'asc')->get();
            $volumeTotalTypeKAP8  = MonthlyPerType::whereYear('tgl' , '=' , Carbon::now())->where('type', '=', 'ASUV EXP')->orderBy('tgl', 'asc')->get();

        if($volumeTotalModelSAP1->isEmpty()){
            $dateTotalModelSAP1[]    = [];
            $labelTotalModelSAP1[]    = "Data Tidak Ditemukan";
            $dataTotalModelSAP1[]   = [];
        }else{
            foreach($volumeTotalModelSAP1 as $sapmodel1){
                $dateTotalModelSAP1[]    = Carbon::parse($sapmodel1->tgl)->format('F');
                $labelTotalModelSAP1  = $sapmodel1->model;
                $dataTotalModelSAP1[]   = $sapmodel1->volume;
            }
        };

        if($volumeTotalModelSAP2->isEmpty()){
            $labelTotalModelSAP2[]    = "Data Tidak Ditemukan";
            $dataTotalModelSAP2[]   = [];
        }else{
            foreach($volumeTotalModelSAP2 as $sapmodel2){
                $labelTotalModelSAP2  = $sapmodel2->model;
                $dataTotalModelSAP2[]   = $sapmodel2->volume;
            }
        };

        if($volumeTotalModelSAP3->isEmpty()){
            $labelTotalModelSAP3[]    = "Data Tidak Ditemukan";
            $dataTotalModelSAP3[]   = [];
        }else{
            foreach($volumeTotalModelSAP3 as $sapmodel3){
                $labelTotalModelSAP3  = $sapmodel3->model;
                $dataTotalModelSAP3[]   = $sapmodel3->volume;
            }
        };

        if($volumeTotalModelSAP4->isEmpty()){
            $labelTotalModelSAP4[]    = "Data Tidak Ditemukan";
            $dataTotalModelSAP4[]   = [];
        }else{
            foreach($volumeTotalModelSAP4 as $sapmodel4){
                $labelTotalModelSAP4  = $sapmodel4->model;
                $dataTotalModelSAP4[]   = $sapmodel4->volume;
            }
        };

        if($volumeTotalModelKAP1->isEmpty()){
            $labelTotalModelKAP1[]    = "Data Tidak Ditemukan";
            $dataTotalModelKAP1[]   = [];
        }else{
            foreach($volumeTotalModelKAP1 as $kapmodel1){
                $labelTotalModelKAP1  = $kapmodel1->model;
                $dataTotalModelKAP1[]   = $kapmodel1->volume;
            }
        };

        if($volumeTotalModelKAP2->isEmpty()){
            $labelTotalModelKAP2[]    = "Data Tidak Ditemukan";
            $dataTotalModelKAP2[]   = [];
        }else{
            foreach($volumeTotalModelKAP2 as $kapmodel2){
                $labelTotalModelKAP2  = $kapmodel2->model;
                $dataTotalModelKAP2[]   = $kapmodel2->volume;
            }
        };

        if($volumeTotalModelKAP3->isEmpty()){
            $labelTotalModelKAP3[]    = "Data Tidak Ditemukan";
            $dataTotalModelKAP3[]   = [];
        }else{
            foreach($volumeTotalModelKAP3 as $kapmodel3){
                $labelTotalModelKAP3  = $kapmodel3->model;
                $dataTotalModelKAP3[]   = $kapmodel3->volume;
            }
        };

        if($volumeTotalModelKAP4->isEmpty()){
            $labelTotalModelKAP4[]    = "Data Tidak Ditemukan";
            $dataTotalModelKAP4[]   = [];
        }else{
            foreach($volumeTotalModelKAP4 as $kapmodel4){
                $labelTotalModelKAP4  = $kapmodel4->model;
                $dataTotalModelKAP4[]   = $kapmodel4->volume;
            }
        };

        if($volumeTotalModelKAP5->isEmpty()){
            $labelTotalModelKAP5[]    = "Data Tidak Ditemukan";
            $dataTotalModelKAP5[]   = [];
        }else{
            foreach($volumeTotalModelKAP5 as $kapmodel5){
                $labelTotalModelKAP5  = $kapmodel5->model;
                $dataTotalModelKAP5[]   = $kapmodel5->volume;
            }
        };

        if($volumeTotalTypeSAP1->isEmpty()){
            $dateTotalTypeSAP1[]    = [];
            $labelTotalTypeSAP1[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP1[]   = [];
        }else{
            foreach($volumeTotalTypeSAP1 as $saptype1){
                $dateTotalTypeSAP1[]   = Carbon::parse($saptype1->tgl)->format('F');
                $labelTotalTypeSAP1  = $saptype1->type;
                $dataTotalTypeSAP1[]   = $saptype1->volume;
            }
        };

        if($volumeTotalTypeSAP2->isEmpty()){
            $labelTotalTypeSAP2[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP2[]   = [];
        }else{
            foreach($volumeTotalTypeSAP2 as $saptype2){
                $labelTotalTypeSAP2  = $saptype2->type;
                $dataTotalTypeSAP2[]   = $saptype2->volume;
            }
        };

        if($volumeTotalTypeSAP3->isEmpty()){
            $labelTotalTypeSAP3[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP3[]   = [];
        }else{
            foreach($volumeTotalTypeSAP3 as $saptype3){
                $labelTotalTypeSAP3  = $saptype3->type;
                $dataTotalTypeSAP3[]   = $saptype3->volume;
            }
        };

        if($volumeTotalTypeSAP4->isEmpty()){
            $labelTotalTypeSAP4[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP4[]   = [];
        }else{
            foreach($volumeTotalTypeSAP4 as $saptype4){
                $labelTotalTypeSAP4  = $saptype4->type;
                $dataTotalTypeSAP4[]   = $saptype4->volume;
            }
        };

        if($volumeTotalTypeSAP5->isEmpty()){
            $labelTotalTypeSAP5[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP5[]   = [];
        }else{
            foreach($volumeTotalTypeSAP5 as $saptype5){
                $labelTotalTypeSAP5  = $saptype5->type;
                $dataTotalTypeSAP5[]   = $saptype5->volume;
            }
        };

        if($volumeTotalTypeSAP6->isEmpty()){
            $labelTotalTypeSAP6[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP6[]   = [];
        }else{
            foreach($volumeTotalTypeSAP6 as $saptype6){
                $labelTotalTypeSAP6  = $saptype6->type;
                $dataTotalTypeSAP6[]   = $saptype6->volume;
            }
        };

        if($volumeTotalTypeSAP7->isEmpty()){
            $labelTotalTypeSAP7[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP7[]   = [];
        }else{
            foreach($volumeTotalTypeSAP7 as $saptype7){
                $labelTotalTypeSAP7  = $saptype7->type;
                $dataTotalTypeSAP7[]   = $saptype7->volume;
            }
        };

        if($volumeTotalTypeSAP8->isEmpty()){
            $labelTotalTypeSAP8[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP8[]   = [];
        }else{
            foreach($volumeTotalTypeSAP8 as $saptype8){
                $labelTotalTypeSAP8  = $saptype8->type;
                $dataTotalTypeSAP8[]   = $saptype8->volume;
            }
        };

        if($volumeTotalTypeSAP9->isEmpty()){
            $labelTotalTypeSAP9[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP9[]   = [];
        }else{
            foreach($volumeTotalTypeSAP9 as $saptype9){
                $labelTotalTypeSAP9  = $saptype9->type;
                $dataTotalTypeSAP9[]   = $saptype9->volume;
            }
        };

        if($volumeTotalTypeSAP10->isEmpty()){
            $labelTotalTypeSAP10[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP10[]   = [];
        }else{
            foreach($volumeTotalTypeSAP10 as $saptype10){
                $labelTotalTypeSAP10  = $saptype10->type;
                $dataTotalTypeSAP10[]   = $saptype10->volume;
            }
        };

        if($volumeTotalTypeSAP11->isEmpty()){
            $labelTotalTypeSAP11[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP11[]   = [];
        }else{
            foreach($volumeTotalTypeSAP11 as $saptype11){
                $labelTotalTypeSAP11  = $saptype11->type;
                $dataTotalTypeSAP11[]   = $saptype11->volume;
            }
        };

        if($volumeTotalTypeSAP12->isEmpty()){
            $labelTotalTypeSAP12[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP12[]   = [];
        }else{
            foreach($volumeTotalTypeSAP12 as $saptype12){
                $labelTotalTypeSAP12  = $saptype12->type;
                $dataTotalTypeSAP12[]   = $saptype12->volume;
            }
        };

        if($volumeTotalTypeSAP13->isEmpty()){
            $labelTotalTypeSAP13[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP13[]   = [];
        }else{
            foreach($volumeTotalTypeSAP13 as $saptype13){
                $labelTotalTypeSAP13  = $saptype13->type;
                $dataTotalTypeSAP13[]   = $saptype13->volume;
            }
        };

        if($volumeTotalTypeSAP14->isEmpty()){
            $labelTotalTypeSAP14[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP14[]   = [];
        }else{
            foreach($volumeTotalTypeSAP14 as $saptype14){
                $labelTotalTypeSAP14  = $saptype14->type;
                $dataTotalTypeSAP14[]   = $saptype14->volume;
            }
        };

        if($volumeTotalTypeSAP15->isEmpty()){
            $labelTotalTypeSAP15[]    = "Data Tidak Ditemukan";
            $dataTotalTypeSAP15[]   = [];
        }else{
            foreach($volumeTotalTypeSAP15 as $saptype15){
                $labelTotalTypeSAP15  = $saptype15->type;
                $dataTotalTypeSAP15[]   = $saptype15->volume;
            }
        };

        if($volumeTotalTypeKAP1->isEmpty()){
            $labelTotalTypeKAP1[]    = "Data Tidak Ditemukan";
            $dataTotalTypeKAP1[]   = [];
        }else{
            foreach($volumeTotalTypeKAP1 as $kaptype1){
                $labelTotalTypeKAP1  = $kaptype1->type;
                $dataTotalTypeKAP1[]   = $kaptype1->volume;
            }
        };

        if($volumeTotalTypeKAP2->isEmpty()){
            $labelTotalTypeKAP2[]    = "Data Tidak Ditemukan";
            $dataTotalTypeKAP2[]   = [];
        }else{
            foreach($volumeTotalTypeKAP2 as $kaptype2){
                $labelTotalTypeKAP2  = $kaptype2->type;
                $dataTotalTypeKAP2[]   = $kaptype2->volume;
            }
        };
        if($volumeTotalTypeKAP3->isEmpty()){
            $labelTotalTypeKAP3[]    = "Data Tidak Ditemukan";
            $dataTotalTypeKAP3[]   = [];
        }else{
            foreach($volumeTotalTypeKAP3 as $kaptype3){
                $labelTotalTypeKAP3  = $kaptype3->type;
                $dataTotalTypeKAP3[]   = $kaptype3->volume;
            }
        };
        if($volumeTotalTypeKAP4->isEmpty()){
            $labelTotalTypeKAP4[]    = "Data Tidak Ditemukan";
            $dataTotalTypeKAP4[]   = [];
        }else{
            foreach($volumeTotalTypeKAP4 as $kaptype4){
                $labelTotalTypeKAP4  = $kaptype4->type;
                $dataTotalTypeKAP4[]   = $kaptype4->volume;
            }
        };
        if($volumeTotalTypeKAP5->isEmpty()){
            $labelTotalTypeKAP5[]    = "Data Tidak Ditemukan";
            $dataTotalTypeKAP5[]   = [];
        }else{
            foreach($volumeTotalTypeKAP5 as $kaptype5){
                $labelTotalTypeKAP5  = $kaptype5->type;
                $dataTotalTypeKAP5[]   = $kaptype5->volume;
            }
        };
        if($volumeTotalTypeKAP6->isEmpty()){
            $labelTotalTypeKAP6[]    = "Data Tidak Ditemukan";
            $dataTotalTypeKAP6[]   = [];
        }else{
            foreach($volumeTotalTypeKAP6 as $kaptype6){
                $labelTotalTypeKAP6  = $kaptype6->type;
                $dataTotalTypeKAP6[]   = $kaptype6->volume;
            }
        };
        if($volumeTotalTypeKAP7->isEmpty()){
            $labelTotalTypeKAP7[]    = "Data Tidak Ditemukan";
            $dataTotalTypeKAP7[]   = [];
        }else{
            foreach($volumeTotalTypeKAP7 as $kaptype7){
                $labelTotalTypeKAP7  = $kaptype7->type;
                $dataTotalTypeKAP7[]   = $kaptype7->volume;
            }
        };
        if($volumeTotalTypeKAP8->isEmpty()){
            $labelTotalTypeKAP8[]    = "Data Tidak Ditemukan";
            $dataTotalTypeKAP8[]   = [];
        }else{
            foreach($volumeTotalTypeKAP8 as $kaptype8){
                $labelTotalTypeKAP8  = $kaptype8->type;
                $dataTotalTypeKAP8[]   = $kaptype8->volume;
            }
        };


        return view('monthly-mdp.per-type.chart-by-type', compact('dateTotalModelSAP1','labelTotalModelSAP1','labelTotalModelSAP2','labelTotalModelSAP3',
        'labelTotalModelSAP4','labelTotalModelKAP1','labelTotalModelKAP2','labelTotalModelKAP3',
        'labelTotalModelKAP4','labelTotalModelKAP5', 'dataTotalModelSAP1', 'dataTotalModelSAP2',
        'dataTotalModelSAP3', 'dataTotalModelSAP4', 'dataTotalModelKAP1', 'dataTotalModelKAP2',
         'dataTotalModelKAP3', 'dataTotalModelKAP4', 'dataTotalModelKAP5','labelTotalTypeSAP1',
         'labelTotalTypeSAP2','labelTotalTypeSAP3','labelTotalTypeSAP4','labelTotalTypeSAP5',
         'labelTotalTypeSAP6','labelTotalTypeSAP7','labelTotalTypeSAP8','labelTotalTypeSAP9',
         'labelTotalTypeSAP10','labelTotalTypeSAP11','labelTotalTypeSAP12','labelTotalTypeSAP13',
         'labelTotalTypeSAP14','labelTotalTypeSAP15','labelTotalTypeKAP1','labelTotalTypeKAP2',
         'dataTotalTypeSAP1','dataTotalTypeSAP2','dataTotalTypeSAP3','dataTotalTypeSAP4',
         'dataTotalTypeSAP5','dataTotalTypeSAP6','dataTotalTypeSAP7','dataTotalTypeSAP8',
         'dataTotalTypeSAP9','dataTotalTypeSAP10','dataTotalTypeSAP11','dataTotalTypeSAP12',
         'dataTotalTypeSAP13','dataTotalTypeSAP14','dataTotalTypeSAP15','dataTotalTypeKAP1',
         'dataTotalTypeKAP2','yearlyChartHeader','dataTotalTypeKAP3','dataTotalTypeKAP4','dataTotalTypeKAP5','dataTotalTypeKAP6','dataTotalTypeKAP7',
         'dataTotalTypeKAP8'
        ));
        // return $volumeTotalSAP;
        // return view('monthly-mdp.per-type.chart-by-type', compact('dateModelSAP', 'modelNameSAP','datasetSAP', 'volumeModelSAP', 'yearlyChartHeader'));
    }

    public function tableByType()
    {
        if(request()->sap_date){
            $month              = Carbon::parse(request()->sap_date)->format('m-Y');
            $monthTableHeader   = Carbon::parse(request()->sap_date)->isoFormat('MMMM Y');
            $tablePerTypeSAP    = MonthlyPerType::whereMonth('tgl', $month)->where('plant' , '=', 'SAP')->get();
            $tablePerTypeKAP    = MonthlyPerType::whereMonth('tgl', $month)->where('plant' , '=', 'KAP')->get();
            $tablePerModelSAP   = MonthlyPerModel::whereMonth('tgl', $month)->where('plant', '=', 'SAP')->get();
            $tablePerModelKAP   = MonthlyPerModel::whereMonth('tgl', $month)->where('plant', '=', 'KAP')->get();
        }else{
            $monthTableHeader   = Carbon::now()->isoFormat('MMMM Y');
            $tablePerTypeSAP    = MonthlyPerType::whereMonth('tgl', '=', Carbon::now())->where('plant' , '=', 'SAP')->get();
            $tablePerTypeKAP    = MonthlyPerType::whereMonth('tgl', '=', Carbon::now())->where('plant' , '=', 'KAP')->get();
            $tablePerModelSAP   = MonthlyPerModel::whereMonth('tgl', '=', Carbon::now())->where('plant', '=', 'SAP')->get();
            $tablePerModelKAP   = MonthlyPerModel::whereMonth('tgl', '=', Carbon::now())->where('plant', '=', 'KAP')->get();
        }

        return view('monthly-mdp.per-type.table-by-type', compact('tablePerTypeSAP','tablePerTypeKAP','tablePerModelKAP','tablePerModelSAP','monthTableHeader'));
        // return $tablePerModelSAP;
    }
    public function createVolumePerModel()
    {
        return view('monthly-mdp.per-type.create-model');
    }

    public function createVolumePerType()
    {
        return view('monthly-mdp.per-type.create');
    }

    public function storePerModel(Request $request)
    {

        $request->validate([
            'tgl' => 'required',
            'model' => 'required',
            'volume' => 'required',
            'plant' => 'required'
        ]);

        $volume = str_replace('.', '', $request['volume']);

        MonthlyPerModel::create([
            'tgl' => Carbon::parse($request->tgl)->toDateString(),
            'model' => $request->model,
            'volume' => $volume,
            'plant' => $request->plant
        ]);

        Alert::toast('Data Per Model berhasil ditambahkan!', 'success', 'success');

        return to_route('table_by_type');
    }

    public function storePerType(Request $request)
    {
        $request->validate([
            'tgl' => 'required',
            'type' => 'required',
            'volume' => 'required',
            'plant' => 'required'
        ]);

        $volume = str_replace('.', '', $request['volume']);

        MonthlyPerType::create([
            'tgl' => Carbon::parse($request->tgl)->toDateString(),
            'type' => $request->type,
            'volume' => $volume,
            'plant' => $request->plant
        ]);

        Alert::toast('Data Volume Per Type berhasil ditambahkan!', 'success');

        return to_route('table_by_type');
    }

    public function editPerModel(MonthlyPerModel $model)
    {
        return view('monthly-mdp.per-type.edit-model', compact('model'));
    }

    public function editPerType(MonthlyPerType $type)
    {
        return view('monthly-mdp.per-type.edit', compact('type'));
    }

    public function updatePerModel(Request $request, MonthlyPerModel $model)
    {
        $volume = str_replace('.', '', $request['volume']);

        MonthlyPerModel::where('id', $model->id)->update([
            'tgl' => Carbon::parse($request->tgl)->toDateString(),
            'model' => $request->model,
            'volume' => $volume,
            'plant' => $request->plant
        ]);

        Alert::toast('Data Per Model berhasil diperbarui!', 'success');

        return to_route('table_by_type');
    }

    public function updatePerType(Request $request, MonthlyPerType $type)
    {
        $volume = str_replace('.', '', $request['volume']);

        MonthlyPerType::where('id', $type->id)->update([
            'tgl' => Carbon::parse($request->tgl)->toDateString(),
            'type' => $request->type,
            'volume' => $volume,
            'plant' => $request->plant
        ]);

        Alert::toast('Data Volume Per Type berhasil diperbarui!', 'success');

        return to_route('table_by_type');
    }

    public function deleteModel(MonthlyPerModel $model)
    {
        MonthlyPerModel::destroy($model->id);

        Alert::toast('Data Volume Per Model berhasil dihapus!', 'success');

        return to_route('table_by_type');
    }

    public function deleteType(MonthlyPerType $type)
    {
        MonthlyPerType::destroy($type->id);

        Alert::toast('Data Volume Per Type berhasil dihapus!', 'success');

        return to_route('table_by_type');
    }
}
