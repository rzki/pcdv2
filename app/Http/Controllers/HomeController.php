<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\OTDSAP;
use App\Models\OTDKAP;
use App\Models\BestSS;
use App\Models\BestAtt;
use App\Models\BestQCC;
use App\Models\Attendance;
use App\Models\AttendanceP4;
use App\Models\DailyProduction;
use App\Models\DailyProduction2;
use App\Models\EmployeeListPCD;
use App\Models\L1DailyProdFile;
use App\Models\L1HourlyRunning;
use App\Models\L2DailyProdFile;
use App\Models\L2HourlyRunning;
use App\Models\ReportAsakai;
use App\Models\ReportDelayUnit;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Terbaik Bulan Ini
        $thisMonth  = Carbon::now()->format('M');
        $birthday = EmployeeListPCD::whereMonth('tgl_lahir', Carbon::now())->whereDay('tgl_lahir', '>=', Carbon::now())->orderByRaw("DATE_FORMAT(tgl_lahir, '%d-%m-%Y')")->get();
        $bestAtt    = BestAtt::whereMonth('tgl', Carbon::now())->orderBy('tgl', 'desc')->first();
        $bestSS     = BestSS::whereMonth('tgl', Carbon::now())->orderBy('tgl', 'desc')->get();
        $bestQCC    = BestQCC::whereMonth('tgl', Carbon::now())->orderBy('tgl', 'desc')->get();

        // Absensi PCD
        $totalPegawaiHariIni    = Attendance::where('date', Carbon::today()->toDateString());
        $totalPegawai           = Attendance::where('date', Carbon::today()->toDateString())->count();
        $totalKehadiran         = Attendance::where([
            ['time', '>', '00:00:00'],
            ['date', '=', Carbon::today()->toDateString()]
        ])->count();
        $tidakHadir             = Attendance::where([
            ['time', '=', '00:00:00'],
            ['date', '=', Carbon::today()->toDateString()]
        ])->count();
        $pcdAtt                 = Attendance::whereDate('date', date('Y-m-d'))->get();

        // Absensi P4
        $totalData          = AttendanceP4::where('date', Carbon::today()->toDateString())->count();
        $avgpercent         = DB::table('attendance-p4')->where('date', Carbon::today()->toDateString())->sum('percent2');
        $totaldept          = DB::table('attendance-p4')->where('date', Carbon::today()->toDateString())->count();
        $plan               = DB::table('attendance-p4')->where('date', Carbon::today()->toDateString())->sum('plan');
        $totalmp            = DB::table('attendance-p4')->where('date', Carbon::today()->toDateString())->sum('total_add_mp');
        $planInt            = intval($plan);
        $totalmpInt         = intval($totalmp);
        $avgpercentFloat    = floatval($avgpercent);
        $p4Att              = AttendanceP4::whereDate('date', date('Y-m-d'))->get();

        // Daily Production
        $achieveDaily = DailyProduction::whereMonth('tgl', '=', Carbon::now())->get();
        $achieveDaily2 = DailyProduction2::whereMonth('tgl', '=', Carbon::now())->get();

        // Report Line #1 & #2
        $report1Daily   = L1DailyProdFile::all();
        $report1Hourly  = L1HourlyRunning::all();
        $report2Daily   = L2DailyProdFile::all();
        $report2Hourly  = L2HourlyRunning::all();

        // Report Summary
        $reportDelay    = ReportDelayUnit::all();
        $reportAsakai   = ReportAsakai::all();

        // OTD
        if(request()->otd_month){
            $otdMonth = Carbon::parse(request()->otd_month)->format('m-Y');
            $otd1 = OTDSAP::whereMonth('tgl', $otdMonth)->get();
            $otd2 = OTDKAP::whereMonth('tgl', $otdMonth)->get();
            $otd1Header =Carbon::parse(request()->otd_month)->isoFormat('MMMM Y');
            $otd2Header =Carbon::parse(request()->otd_month)->isoFormat('MMMM Y');
            $planOT1 = DB::table('otd_1')->whereMonth('tgl', $otdMonth)->avg('plan_percent');
            $avgPlanOT1 = round($planOT1, 1);
            $summaryOT1 = DB::table('otd_1')->whereMonth('tgl', $otdMonth)->avg('ot_percent');
            $avgSummaryOT1 = round($summaryOT1, 1);
            $summaryD1 = DB::table('otd_1')->whereMonth('tgl', $otdMonth)->avg('delay_percent');
            $avgSummaryD1 = round($summaryD1, 1);
            $planOT2 = DB::table('otd_2')->whereMonth('tgl', $otdMonth)->avg('plan_percent');
            $avgPlanOT2 = round($planOT2, 1);
            $summaryOT2 = DB::table('otd_2')->whereMonth('tgl', $otdMonth)->avg('ot_percent');
            $avgSummaryOT2 = round($summaryOT2, 1);
            $summaryD2 = DB::table('otd_2')->whereMonth('tgl', $otdMonth)->avg('delay_percent');
            $avgSummaryD2 = round($summaryD2, 1);
        }else{
            $otd1 = OTDSAP::whereMonth('tgl', '=', Carbon::now())->get();
            $otd2 = OTDKAP::whereMonth('tgl', '=', Carbon::now())->get();
            $otd1Header = Carbon::now()->isoFormat('MMMM Y');
            $otd2Header = Carbon::now()->isoFormat('MMMM Y');
            $planOT1 = DB::table('otd_1')->whereMonth('tgl', '=', Carbon::now())->avg('plan_percent');
            $avgPlanOT1 = round($planOT1, 1);
            $summaryOT1 = DB::table('otd_1')->whereMonth('tgl', '=', Carbon::now())->avg('ot_percent');
            $avgSummaryOT1 = round($summaryOT1, 1);
            $summaryD1 = DB::table('otd_1')->whereMonth('tgl', '=', Carbon::now())->avg('delay_percent');
            $avgSummaryD1 = round($summaryD1, 1);
            $planOT2 = DB::table('otd_2')->whereMonth('tgl', '=', Carbon::now())->avg('plan_percent');
            $avgPlanOT2 = round($planOT2, 1);
            $summaryOT2 = DB::table('otd_2')->whereMonth('tgl', '=', Carbon::now())->avg('ot_percent');
            $avgSummaryOT2 = round($summaryOT2, 1);
            $summaryD2 = DB::table('otd_2')->whereMonth('tgl', '=', Carbon::now())->avg('delay_percent');
            $avgSummaryD2 = round($summaryD2, 1);
        };

        if($otd1->isEmpty()){
            $labelsOTD[]    = "Data Tidak Ditemukan";
            $planOTD[]      =  [];
            $otAdvOTD[]     =  [];
            $delayOTD[]     =  [];
            $planPercent[]  =  [];
            $otAdvPercent[] =  [];
            $delayPercent[] =  [];
        } else {
        foreach ($otd1 as $otd1){
                $labelsOTD[]    = Carbon::parse($otd1->tgl)->isoFormat('DD MMMM');
                $planOTD[]      = $otd1->plan;
                $otAdvOTD[]     = $otd1->ot_adv;
                $delayOTD[]     = $otd1->delay;
                $planPercent[]  = $otd1->plan_percent;
                $otAdvPercent[] = $otd1->ot_percent;
                $delayPercent[] = $otd1->delay_percent;
            }
        };

        if($otd2->isEmpty()){
            $labelsOTD2[]    = "Data Tidak Ditemukan";
            $planOTD2[]      =  [];
            $otAdvOTD2[]     =  [];
            $delayOTD2[]     =  [];
            $planPercent2[]  =  [];
            $otAdvPercent2[] =  [];
            $delayPercent2[] =  [];
        } else {
        foreach ($otd2 as $otd2){
                $labelsOTD2[]    = Carbon::parse($otd2->tgl)->isoFormat('DD MMMM');
                $planOTD2[]      = $otd2->plan;
                $otAdvOTD2[]     = $otd2->ot_adv;
                $delayOTD2[]     = $otd2->delay;
                $planPercent2[]  = $otd2->plan_percent;
                $otAdvPercent2[] = $otd2->ot_percent;
                $delayPercent2[] = $otd2->delay_percent;
            }
        };

        if($achieveDaily->isEmpty()){
            $labels1[]  = "Data Tidak Ditemukan";
            $plan1[]    = [];
            $actual1[]  = [];
            $plusMinusL1[] = [];
        }else{
            foreach($achieveDaily as $ad){
                $labels1[]  = Carbon::parse($ad->tgl)->isoFormat('DD MMMM');
                $plan1[]    = $ad->plan;
                $actual1[]  = $ad->actual;
                $plusMinusL1[] = $ad->plus_minus;
            }
        };

        if($achieveDaily2->isEmpty()){
            $labels2[]  = "Data Tidak Ditemukan";
            $plan2[]    = [];
            $actual2[]  = [];
            $plusMinusL2[] = [];
        }else{
            foreach($achieveDaily2 as $ad2){
                $labels2[]  = Carbon::parse($ad2->tgl)->isoFormat('DD MMMM');
                $plan2[]    = $ad2->plan;
                $actual2[]  = $ad2->actual;
                $plusMinusL2[] = $ad2->plus_minus;
            }
        };


        return view('dashboard', compact('bestAtt','bestSS', 'bestQCC', 'birthday', 'totalPegawaiHariIni','totalPegawai','totalKehadiran',
                                        'tidakHadir','totalData', 'avgpercent', 'totaldept','plan','totalmp', 'planInt','totalmpInt','avgpercentFloat',
                                        'pcdAtt', 'p4Att' ,'otd1', 'otd2','planOT1','avgPlanOT1', 'avgSummaryOT1','avgSummaryD1','avgPlanOT2',
                                        'avgSummaryOT2','avgSummaryD2','planOT2','labels1', 'plan1', 'actual1','plusMinusL1','labels2', 'plan2',
                                        'actual2', 'plusMinusL2','report1Daily','report1Hourly','report2Daily','report2Hourly','reportDelay',
                                        'reportAsakai', 'achieveDaily', 'labelsOTD', 'planOTD','otAdvOTD','delayOTD', 'otd1Header', 'otd2Header',
                                        'planPercent', 'otAdvPercent', 'delayPercent','labelsOTD2', 'planOTD2','otAdvOTD2','delayOTD2',
                                        'planPercent2', 'otAdvPercent2', 'delayPercent2'));
        // return 5 % 0.75;
    }

    public function indexOrg()
    {
        return view('organization');
    }

}
