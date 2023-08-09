<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KPIController;
use App\Http\Controllers\OTDController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AndonController;
use App\Http\Controllers\BestSSController;
use App\Http\Controllers\SOPCCRController;
use App\Http\Controllers\SOPVAIController;
use App\Http\Controllers\SOPDailyPlanningController;
use App\Http\Controllers\SOPVehiclePlanningController;
use App\Http\Controllers\BestQCCController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MDPLine1Controller;
use App\Http\Controllers\MDPLine2Controller;
use App\Http\Controllers\MDPTotalController;
use App\Http\Controllers\DailyProdController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\MDPPerTypeController;
use App\Http\Controllers\BestAttendanceController;
use App\Http\Controllers\DailyProdLine1Controller;
use App\Http\Controllers\DailyProdLine2Controller;
use App\Http\Controllers\ReportSummaryBODController;
use App\Http\Controllers\ReportSummaryEOMController;
use App\Http\Controllers\ReportSummaryAsakaiController;
use App\Http\Controllers\ReportLine1DailyProdController;
use App\Http\Controllers\ReportLine2DailyProdController;
use App\Http\Controllers\DailyPlanningDeliveryController;
use App\Http\Controllers\ReportSummaryDelayUnitController;
use App\Http\Controllers\ReportLine1HourlyRunningController;
use App\Http\Controllers\ReportLine2HourlyRunningController;
use App\Http\Controllers\ReportLine1SummaryProblemController;
use App\Http\Controllers\ReportLine2SummaryProblemController;
use App\Http\Controllers\ReportSummaryAchievement1977Controller;
use App\Http\Controllers\ReportLine1SummaryProblemAssyController;
use App\Http\Controllers\ReportLine2SummaryProblemAssyController;
use App\Http\Controllers\ReportLine1SummaryProblemTossoController;
use App\Http\Controllers\ReportLine2SummaryProblemTossoController;
use App\Http\Controllers\ReportLine1SummaryProblemWeldingController;
use App\Http\Controllers\ReportLine2SummaryProblemWeldingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', function () {
        return view('auth.login');
    });
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::controller(HomeController::class)->group(function (){

        Route::get('home', 'index')->name('home');
        Route::get('org-structure', 'indexOrg')->name('org');

    });

    // KPI
    Route::controller(KPIController::class)->group(function (){
        Route::get('kpi', 'index')->name('index_kpi');
        Route::get('kpi/create', 'create')->name('create_kpi');
        Route::post('kpi/add', 'store')->name('store_kpi');
        Route::get('kpi/edit/{kpi}', 'edit')->name('edit_kpi');
        Route::put('kpi/update/{kpi}', 'update')->name('update_kpi');
        Route::delete('kpi/delete/{kpi}', 'destroy')->name('delete_kpi');
    });

    // Terbaik Bulan Ini
    Route::controller(BestAttendanceController::class)->group(function(){
        // Absensi Terbaik
        Route::get('best-attendance', 'indexAtt')->name('index_att');
        Route::get('best-attendance/create', 'createAtt')->name('create_att');
        Route::post('best-attendance/add', 'storeAtt')->name('store_att');
        Route::get('best-attendance/{att}/edit', 'editAtt')->name('edit_att');
        Route::put('best-attendance/{att}/update', 'updateAtt')->name('update_att');
        Route::delete('best-attendance/{att}', 'deleteAtt')->name('delete_att');
    });

    Route::controller(BestSSController::class)->group(function(){
        // SS Terbaik
        Route::get('best-ss', 'indexSS')->name('index_ss');
        Route::get('best-ss/create', 'createSS')->name('create_ss');
        Route::post('best-ss/add', 'storeSS')->name('store_ss');
        Route::get('best-ss/{ss}/edit', 'editSS')->name('edit_ss');
        Route::put('best-ss/{ss}/update', 'updateSS')->name('update_ss');
        Route::delete('best-ss/{ss}', 'deleteSS')->name('delete_ss');
    });

    Route::controller(BestQCCController::class)->group(function(){
        // QCC Terbaik
        Route::get('best-qcc', 'indexQCC')->name('index_qcc');
        Route::get('best-qcc/create', 'createQCC')->name('create_qcc');
        Route::post('best-qcc', 'storeQCC')->name('store_qcc');
        Route::get('best-qcc/{qcc}/edit', 'editQCC')->name('edit_qcc');
        Route::put('best-qcc/{qcc}/update', 'updateQCC')->name('update_qcc');
        Route::delete('best-qcc/{qcc}', 'deleteQCC')->name('delete_qcc');
    });

    // User Management
    Route::controller(UserController::class)->group(function(){

        Route::get('usermanage', 'index')->name('index_user');
        Route::get('usermanage/create', 'create')->name('create_user');
        Route::post('usermanage/add-user', 'store')->name('store_user');
        Route::post('usermanage/import', 'import')->name('import_user');
        Route::get('usermanage/edit/{usermanage}', 'edit')->name('edit_user');
        Route::put('usermanage/update/{usermanage}', 'update')->name('update_user');
        Route::put('usermanage/reset-pwd/{usermanage}', 'resetPwd')->name('reset_userpwd');
        Route::delete('usermanage/delete/{usermanage}', 'deleteUser')->name('delete_user');

    });

    // Employee Management
    Route::controller(EmployeeController::class)->group(function(){

        Route::get('list-employee', 'index')->name('index_employee');
        Route::post('list-employee/import', 'import')->name('import_employee');
        Route::get('list-employee/create', 'create')->name('create_employee');
        Route::post('list-employee/add', 'store')->name('store_employee');
        Route::get('list-employee/{birthday}', 'show')->name('show_employee');
        Route::get('list-employee/edit/{birthday}', 'edit')->name('edit_employee');
        Route::put('list-employee/update/{birthday}', 'update')->name('update_employee');
        Route::get('list-employee/edit-pic/{birthday}', 'editPicture')->name('edit_employee_pic');
        Route::put('list-employee/update-pic/{birthday}', 'updateImage')->name('update_img');
        Route::delete('list-employee/{birthday}', 'delete')->name('delete_employee');

    });

    // Profile
    Route::controller(ProfileController::class)->group(function(){
        Route::get('profile', 'edit')->name('profile.edit');
        Route::put('profile', 'update')->name('profile.update');
        Route::put('profile/password', 'password')->name('profile.password');
        Route::put('profile/imgprofile', 'image')->name('profile.img');
        Route::put('profile/reset', 'resetImage')->name('profile.imgreset');
    });

    // Attendance
    Route::controller(AttendanceController::class)->group(function (){
        // PCD
        Route::get('pcd-attendance/', 'indexPCD')->name('pcd-att');
        Route::post('pcd-attendance/import', 'fileImport')->name('import');
        // P4
        Route::get('p4-attendance', 'indexP4')->name('p4-att');
        Route::post('p4-attendance/import', 'fileImportP4')->name('p4-import');
    });

    // Monthly Planning
    Route::controller(MDPTotalController::class)->group(function(){

        Route::get('monthly_planning', 'indexMonthly')->name('mdp_index');
        Route::get('monthly_planning/volume-total/detail', 'detailVolumeTotal')->name('detail_volume_total');
        Route::get('monthly_planning/volume-total/edit/{total}', 'editVolumeTotal')->name('edit_volume_total');
        Route::get('monthly_planning/volume-total/create', 'createVolumeTotal')->name('create_volume_total');
        Route::post('monthly_planning/volume-total/add', 'storeTotal')->name('store_volume_total');
        Route::put('monthly_planning/volume-total/update/{total}', 'updateTotal')->name('update_volume_total');
        Route::delete('monthly_planning/volume-total/detail/{total}', 'deleteTotal')->name('delete_volume_total');

    });

    Route::controller(MDPPerTypeController::class)->group(function (){
        Route::get('monthly_planning/per-type/chart', 'chartByType')->name('chart_by_type');
        Route::get('monthly_planning/per-type/table', 'tableByType')->name('table_by_type');
        Route::get('monthly_planning/table-type/create-per-type', 'createVolumePerType')->name('create_total_per_type');
        Route::get('monthly_planning/table-type/create-per-model', 'createVolumePerModel')->name('create_total_per_model');
        Route::get('monthly_planning/volume-per-type-sap/create', 'createSAPType')->name('create_type_sap');
        Route::get('monthly_planning/volume-per-type-kap/create', 'createKAPType')->name('create_type_kap');
        Route::post('monthly_planning/volume-per-type/add', 'storePerType')->name('store_per_type');
        Route::post('monthly_planning/volume-per-model/add', 'storePerModel')->name('store_per_model');
        Route::get('monthly_planning/per-type/table/edit/model/{model}', 'editPerModel')->name('edit_per_model');
        Route::get('monthly_planning/per-type/table/edit/type/{type}', 'editPerType')->name('edit_per_type');
        Route::put('monthly_planning/per-type/table/update/model/{model}', 'updatePerModel')->name('update_per_model');
        Route::put('monthly_planning/per-type/table/update/type/{type}', 'updatePerType')->name('update_per_type');
        Route::delete('monthly_planning/per-type/table/model/delete/{model}', 'deleteModel')->name('delete_per_model');
        Route::delete('monthly_planning/per-type/table/type/delete/{type}', 'deleteType')->name('delete_per_type');
    });

    // MDP Line 1
    Route::controller(MDPLine1Controller::class)->group(function(){

        Route::get('monthly_planning/line-1', 'index1')->name('monthly_1');
        Route::get('monthly_planning/line-1/assy-day/upload', 'uploadAssy1DS')->name('upload_assy1_ds');
        Route::get('monthly_planning/line-1/assy-night/upload', 'uploadAssy1NS')->name('upload_assy1_ns');
        Route::post('monthly_planning/line-1/assy-day/import', 'importAssy1DS')->name('import_assy1_ds');
        Route::post('monthly_planning/line-1/assy-night/import', 'importAssy1NS')->name('import_assy1_ns');
        Route::get('monthly_planning/line-1/assy/create', 'createAssy')->name('create_assy1');
        Route::post('monthly_planning/line-1/assy/store', 'storeAssy')->name('store_assy1');
        Route::get('monthly_planning/line-1/assy/edit/{assy}', 'editAssy')->name('edit_assy1');
        Route::put('monthly_planning/line-1/assy/update/{assy}', 'updateAssy')->name('update_assy1');
        Route::delete('monthly_planning/line-1/assy/delete/{assy}', 'deleteAssy')->name('delete_assy1');

        Route::get('monthly_planning/line-1/delivery/create', 'createDelivery')->name('create_delivery_mdp');
        Route::get('monthly_planning/line-1/delivery-day/upload', 'uploadDelivery1DS')->name('upload_delivery1_ds');
        Route::get('monthly_planning/line-1/delivery-night/upload', 'uploadDelivery1NS')->name('upload_delivery1_ns');
        Route::post('monthly_planning/line-1/delivery-day/import', 'importDelivery1DS')->name('import_delivery1_ds');
        Route::post('monthly_planning/line-1/delivery-night/import', 'importDelivery1NS')->name('import_delivery1_ns');
        Route::post('monthly_planning/line-1/delivery/store', 'storeDelivery1')->name('store_delivery1');
        Route::get('monthly_planning/line-1/delivery/edit/{delivery}', 'editDelivery1')->name('edit_delivery1');
        Route::put('monthly_planning/line-1/delivery/update/{delivery}', 'updateDelivery1')->name('update_delivery1');
        Route::delete('monthly_planning/line-1/delivery/delete/{delivery}', 'deleteDelivery1')->name('delete_delivery1');

    });

    // MDP Line 2
    Route::controller(MDPLine2Controller::class)->group(function(){

        Route::get('monthly_planning/line-2', 'index2')->name('monthly_2');
        Route::get('monthly_planning/line-2/assy-day/upload', 'uploadAssy2DS')->name('upload_assy2_ds');
        Route::get('monthly_planning/line-2/assy-night/upload', 'uploadAssy2NS')->name('upload_assy2_ns');
        Route::post('monthly_planning/line-2/assy-day/import', 'importAssy2DS')->name('import_assy2_ds');
        Route::post('monthly_planning/line-2/assy-night/import', 'importAssy2NS')->name('import_assy2_ns');
        Route::get('monthly_planning/line-2/assy/create', 'createAssy2')->name('create_assy2');
        Route::post('monthly_planning/line-2/assy/store', 'storeAssy2')->name('store_assy2');
        Route::get('monthly_planning/line-2/assy/edit/{assy}', 'editAssy2')->name('edit_assy2');
        Route::put('monthly_planning/line-2/assy/update/{assy}', 'updateAssy2')->name('update_assy2');
        Route::delete('monthly_planning/line-2/assy/delete/{assy}', 'deleteAssy2')->name('delete_assy2');

        Route::get('monthly_planning/line-2/delivery-day/upload', 'uploadDelivery2DS')->name('upload_delivery2_ds');
        Route::get('monthly_planning/line-2/delivery-night/upload', 'uploadDelivery2NS')->name('upload_delivery2_ns');
        Route::post('monthly_planning/line-2/delivery-day/import', 'importDelivery2DS')->name('import_delivery2_ds');
        Route::post('monthly_planning/line-2/delivery-night/import', 'importDelivery2NS')->name('import_delivery2_ns');
        Route::get('monthly_planning/line-2/delivery/create', 'createDelivery2DS')->name('create_delivery2');
        Route::post('monthly_planning/line-2/delivery/store', 'storeDelivery2')->name('store_delivery2');
        Route::get('monthly_planning/line-2/delivery/edit/{delivery}', 'editDelivery2')->name('edit_delivery2');
        Route::put('monthly_planning/line-2/delivery/update/{delivery}', 'updateDelivery2')->name('update_delivery2');
        Route::delete('monthly_planning/line-2/delivery/delete/{delivery}', 'deleteDelivery2')->name('delete_delivery2');

    });

    // Daily Production
    Route::controller(DailyProdController::class)->group(function(){
        Route::get('daily_monitoring', 'indexDaily')->name('index_daily');
    });

    // Daily Planning Delivery
    Route::controller(DailyPlanningDeliveryController::class)->group(function(){
        Route::get('planning_delivery', 'index')->name('index_delivery');
        Route::get('planning_delivery/create', 'create')->name('create_delivery');
        Route::post('planning_delivery/add', 'store')->name('store_delivery');
        Route::get('planning_delivery/edit/{delivery}', 'edit')->name('edit_delivery');
        Route::put('planning_delivery/update/{delivery}', 'update')->name('update_delivery');
        Route::delete('planning_delivery/delete/{delivery}', 'destroy')->name('delete_delivery');
        Route::get('planning_delivery/download/{delivery}', 'download')->name('download_delivery');
    });

    // Daily Production 1
    Route::controller(DailyProdLine1Controller::class)->group(function (){

        Route::get('daily_prodplan/line1', 'index1')->name('index_l1');
        Route::get('daily_prodplan/line1/create', 'create1')->name('create_l1');
        Route::post('daily_prodplan/line1/add', 'store1')->name('store_l1');
        Route::post('daily_prodplan/line1/import', 'import1')->name('import_l1');
        Route::get('daily_prodplan/line1/{line1}/edit', 'edit1')->name('edit_l1');
        Route::put('daily_prodplan/line1/{line1}', 'update1')->name('update_l1');
        Route::delete('daily_prodplan/line1/{line1}', 'destroy1')->name('delete_l1');

    });

    // Daily Production 2
    Route::controller(DailyProdLine2Controller::class)->group(function (){

        Route::get('daily_prodplan/line2', 'index2')->name('index_l2');
        Route::get('daily_prodplan/line2/create', 'create2')->name('create_l2');
        Route::post('daily_prodplan/line2/add', 'store2')->name('store_l2');
        Route::post('daily_prodplan/line2/import', 'import2')->name('import_l2');
        Route::get('daily_prodplan/line2/{line2}/edit', 'edit2')->name('edit_l2');
        Route::put('daily_prodplan/line2/{line2}/update', 'update2')->name('update_l2');
        Route::delete('daily_prodplan/line2/{line2}', 'destroy2')->name('delete_l2');

    });

    // Report Line 1
    Route::controller(ReportLine1DailyProdController::class)->group(function(){
        Route::get('report-line-1/daily-prod-report', 'indexDaily')->name('index_daily1');
        Route::post('report-line-1/daily-prod-report/import', 'importDaily')->name('import_daily1');
        Route::delete('report-line-1/daily-prod-report/{dailyl1}', 'deleteReportDaily1')->name('delete_daily1');
        Route::get('report-line-1/daily-prod-report/download/{dailyl1}', 'downloadDaily1')->name('download_daily1');
        Route::get('report-line-1/daily-prod-report/view/{dailyl1}', 'viewDaily1')->name('view_daily1');
    });

    Route::controller(ReportLine1HourlyRunningController::class)->group(function(){
        Route::get('report-line-1/hourly-running', 'indexHourly')->name('index_hourly1');
        Route::post('report-line-1/hourly-running/import', 'importHourly')->name('import_hourly1');
        Route::delete('report-line-1/hourly-running/{hourlyl1}', 'deleteHourly1')->name('delete_hourly1');
        Route::get('report-line-1/hourly-running/download/{hourlyl1}', 'downloadHourly1')->name('download_hourly1');
        Route::get('report-line-1/hourly-running/view/{hourlyl1}', 'viewHourly1')->name('view_hourly1');
    });

    Route::controller(ReportLine1SummaryProblemController::class)->group(function(){
        Route::get('report-line-1/summary-report', 'indexSummary')->name('index_summary1');
        Route::post('report-line-1/summary-report/import', 'importSummary')->name('import_summary1');
        Route::delete('report-line-1/summary-report/{summaryl1}', 'deleteSummary1')->name('delete_summary1');
        Route::get('report-line-1/summary-report/download/{summaryl1}', 'downloadSummary1')->name('download_summary1');
        Route::get('report-line-1/summary-report/view/{summaryl1}', 'viewSummary1')->name('view_summary1');
    });

    // Route::controller(ReportLine1SummaryProblemAssyController::class)->group(function(){
    //     Route::get('report-line-1/summary-problem/assy', 'index')->name('index_summary_assy_l1');
    // });

    // Route::controller(ReportLine1SummaryProblemTossoController::class)->group(function(){
    //     Route::get('report-line-1/summary-problem/toso', 'index')->name('index_summary_toso_l1');

    // });

    // Route::controller(ReportLine1SummaryProblemWeldingController::class)->group(function(){
    //     Route::get('report-line-1/summary-problem/welding', 'index')->name('index_summary_welding_l1');

    // });

    // Report Line 2
    Route::controller(ReportLine2DailyProdController::class)->group(function () {
        Route::get('report-line-2/daily-prod-report', 'indexDaily')->name('index_daily2');
        Route::post('report-line-2/daily-prod-report/import', 'importDaily')->name('import_daily2');
        Route::delete('report-line-2/daily-prod-report/{dailyl2}', 'deleteDaily2')->name('delete_daily2');
        Route::get('report-line-2/daily-prod-report/download/{dailyl2}', 'downloadDaily2')->name('download_daily2');
        Route::get('report-line-2/daily-prod-report/view/{dailyl2}', 'viewDaily2')->name('view_daily2');
    });

    Route::controller(ReportLine2HourlyRunningController::class)->group(function () {
        Route::get('report-line-2/hourly-running', 'indexHourly')->name('index_hourly2');
        Route::post('report-line-2/hourly-running/import', 'importHourly')->name('import_hourly2');
        Route::delete('report-line-2/hourly-running/{hourlyl2}', 'deleteHourly2')->name('delete_hourly2');
        Route::get('report-line-2/hourly-running/download/{hourlyl2}', 'downloadHourly2')->name('download_hourly2');
        Route::get('report-line-2/hourly-running/view/{hourlyl2}', 'viewHourly2')->name('view_hourly2');
    });

    Route::controller(ReportLine2SummaryProblemController::class)->group(function () {
        Route::get('report-line-2/summary-report', 'indexSummary')->name('index_summary2');
        Route::post('report-line-2/summary-report/import', 'importSummary')->name('import_summary2');
        Route::delete('report-line-2/summary-report/{summaryl2}', 'deleteSummary2')->name('delete_summary2');
        Route::get('report-line-2/summary-report/download/{summaryl2}', 'downloadSummary2')->name('download_summary2');
        Route::get('report-line-2/summary-report/view/{summaryl2}', 'viewSummary2')->name('view_summary2');
    });

    // Route::controller(ReportLine2SummaryProblemAssyController::class)->group(function(){
    //     Route::get('report-line-2/summary-problem/assy', 'index')->name('index_summary_assy_l2');
    // });

    // Route::controller(ReportLine2SummaryProblemTossoController::class)->group(function(){
    //     Route::get('report-line-2/summary-problem/toso', 'index')->name('index_summary_toso_l2');
    // });

    // Route::controller(ReportLine2SummaryProblemWeldingController::class)->group(function(){
    //     Route::get('report-line-2/summary-problem/welding', 'index')->name('index_summary_welding_l2');
    // });

    // On Time Delivery
    Route::controller(OTDController::class)->group(function(){
        // OTD
        Route::get('ontime_delivery', 'indexOTD')->name('otd_index');
        Route::get('ontime_delivery/sap', 'indexSAP')->name('otd_sap');
        Route::get('ontime_delivery/kap', 'indexKAP')->name('otd_kap');
        Route::get('ontime_delivery/sap/add', 'createSAP')->name('create_otd_sap');
        Route::get('ontime_delivery/kap/add', 'createKAP')->name('create_otd_kap');
        Route::post('ontime_delivery/sap', 'storeSAP')->name('add_otd_sap');
        Route::post('ontime_delivery/kap', 'storeKAP')->name('add_otd_kap');
        Route::get('ontime_delivery/sap/edit/{sap}', 'editSAP')->name('edit_otd_sap');
        Route::get('ontime_delivery/kap/edit/{kap}', 'editKAP')->name('edit_otd_kap');
        Route::put('ontime_delivery/sap/update/{sap}', 'updateSAP')->name('update_otd_sap');
        Route::put('ontime_delivery/kap/update/{kap}', 'updateKAP')->name('update_otd_kap');
        Route::delete('ontime_delivery/sap/delete/{sap}', 'destroySAP')->name('delete_otd_sap');
        Route::delete('ontime_delivery/kap/delete/{kap}', 'destroyKAP')->name('delete_otd_kap');
    });

    //Report Delay Unit
    Route::controller(ReportSummaryDelayUnitController::class)->group(function(){
        Route::get('report-delay-unit', 'indexReportDelay')->name('report_delay_index');
        Route::post('report-delay-unit/import', 'importDelay')->name('import_delay');
        Route::delete('report-delay-unit/{delay}', 'deleteDelay')->name('delete_delay');
        Route::get('report-delay-unit/view/{delay}', 'viewReportDelay')->name('view_delay');
    });

    // Report End Of Month
    Route::controller(ReportSummaryEOMController::class)->group(function(){
        Route::get('report-end-of-month', 'indexEOM')->name('eom_index');
        Route::post('report-end-of-month/import', 'importEOM')->name('import_eom');
        Route::delete('report-end-of-month/{eom}', 'deleteEOM')->name('delete_eom');
        Route::get('report-end-of-month/download/{eom}', 'downloadEOM')->name('download_eom');
        Route::get('report-end-of-month/view/{eom}', 'viewReportEOM')->name('view_eom');
    });

    // Report Asakai
    Route::controller(ReportSummaryAsakaiController::class)->group(function(){
        Route::get('report-asakai', 'indexAsakai')->name('asakai_index');
        Route::post('report-asakai/import', 'importAsakai')->name('import_asakai');
        Route::delete('report-asakai/{asakai}', 'deleteAsakai')->name('delete_asakai');
        Route::get('report-asakai/download/{asakai}', 'downloadAsakai')->name('download_asakai');
        Route::get('report-asakai/view/{asakai}', 'viewReportAsakai')->name('view_asakai');
    });

    // Report BOD
    Route::controller(ReportSummaryBODController::class)->group(function(){
        Route::get('report-bod', 'indexBOD')->name('bod_index');
        Route::post('report-bod/import', 'importBOD')->name('import_bod');
        Route::delete('report-bod/{bod}', 'deleteBOD')->name('delete_bod');
        Route::get('report-bod/download/{bod}', 'downloadBOD')->name('download_bod');
        Route::get('report-bod/view/{bod}', 'viewReportBOD')->name('view_bod');
    });

    // Report Achievement 1977
    Route::controller(ReportSummaryAchievement1977Controller::class)->group(function(){
        Route::get('report-1977', 'index1977')->name('index_1977');
        Route::post('report-1977/import', 'import1977')->name('import_1977');
        Route::delete('report-1977/{report1977}', 'delete1977')->name('delete_1977');
        Route::get('report-1977/download/{report1977}', 'download1977')->name('download_1977');
        Route::get('report-asakai/view/{report1977}', 'viewReport1997')->name('view_1977');
    });

    // Andon Production
    // Route::controller(AndonController::class)->group(function () {
    //     // Line 1
    //     Route::get('andon-line-1', 'andonLine1')->name('andon_line1');
    //     // Line 2
    //     Route::get('andon-line-2', 'andonLine2')->name('andon_line2');
    // });

    // SOP
    Route::controller(SOPCCRController::class)->group(function () {
        Route::get('sop/ccr', 'indexCCR')->name('index_ccr');
        Route::get('sop/ccr/upload', 'createCCR')->name('create_sop_ccr');
        Route::post('sop/ccr/add', 'storeCCR')->name('store_sop_ccr');
        Route::get('sop/ccr/edit/{ccr}', 'editCCR')->name('edit_sop_ccr');
        Route::put('sop/ccr/update/{ccr}', 'updateCCR')->name('update_sop_ccr');
        Route::delete('sop/ccr/delete/{ccr}', 'destroyCCR')->name('delete_sop_ccr');
        Route::get('sop/ccr/view/{ccr}', 'view')->name('view_sop_ccr');
    });

    Route::controller(SOPDailyPlanningController::class)->group(function () {
        Route::get('sop/daily-planning', 'indexDP')->name('index_dp');
        Route::get('sop/dp/upload', 'createDP')->name('create_sop_dp');
        Route::post('sop/dp/add', 'storeDP')->name('store_sop_dp');
        Route::get('sop/dp/edit/{dp}', 'editDP')->name('edit_sop_dp');
        Route::put('sop/dp/update/{dp}', 'updateDP')->name('update_sop_dp');
        Route::delete('sop/dp/delete/{dp}', 'destroyDP')->name('delete_sop_dp');
        Route::get('sop/dp/view/{dp}', 'view')->name('view_sop_dp');
    });

    Route::controller(SOPVAIController::class)->group(function () {
        Route::get('sop/vai', 'indexVAI')->name('index_vai');
        Route::get('sop/vai/upload', 'createVAI')->name('create_sop_vai');
        Route::post('sop/vai/add', 'storeVAI')->name('store_sop_vai');
        Route::get('sop/vai/edit/{vai}', 'editVAI')->name('edit_sop_vai');
        Route::put('sop/vai/update/{vai}', 'updateVAI')->name('update_sop_vai');
        Route::delete('sop/vai/delete/{vai}', 'destroyVAI')->name('delete_sop_vai');
        Route::get('sop/vai/view/{vai}', 'view')->name('view_sop_vai');
    });

    Route::controller(SOPVehiclePlanningController::class)->group(function () {
        Route::get('sop/vehicle-planning', 'indexVP')->name('index_vp');
        Route::get('sop/vp/upload', 'createVP')->name('create_sop_vp');
        Route::post('sop/vp/add', 'storeVP')->name('store_sop_vp');
        Route::get('sop/vp/edit/{vp}', 'editVP')->name('edit_sop_vp');
        Route::put('sop/vp/update/{vp}', 'updateVP')->name('update_sop_vp');
        Route::delete('sop/vp/delete/{vp}', 'destroyVP')->name('delete_sop_vp');
        Route::get('sop/vp/view/{vp}', 'view')->name('view_sop_vp');
    });

});

