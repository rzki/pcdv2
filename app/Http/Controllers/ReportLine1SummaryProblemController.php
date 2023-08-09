<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\L1SummaryProblem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportLine1SummaryProblemController extends Controller
{
    public function indexSummary()
    {
        $summaryL1 = L1SummaryProblem::whereMonth('tgl', '=', Carbon::now())->get();

        return view('report-line-1.summary', compact('summaryL1'));
    }

    public function importSummary(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls,xlsm,pdf|max:51200',
            ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.'Summary Problem Report Line #1'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('file/report-line-1/summary-problem/excel', $customName);

        L1SummaryProblem::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload Summary Problem Report Line #1 Berhasil!', 'success');

        return to_route('index_summary1')->with('file', $customName);
    }

    public function deleteSummary1(L1SummaryProblem $summaryl1)
    {
        if(!empty($summaryl1->filename)){
            unlink("storage/".$summaryl1->path);
        };

        L1SummaryProblem::destroy($summaryl1->id);

        Alert::toast('Summary Problem Report Line #1 berhasil dihapus!', 'success');

        return to_route('index_summary1');
    }

    public function downloadSummary1(L1SummaryProblem $summaryl1)
    {
        return response()->download(storage_path("app/public/{$summaryl1->path}"));
    }

    public function viewSummary1(L1SummaryProblem $summaryl1)
    {
        $filename = $summaryl1->filename;
        $path = storage_path("app/public/{$summaryl1->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
