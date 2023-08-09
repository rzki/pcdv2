<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\L2SummaryProblem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportLine2SummaryProblemController extends Controller
{
    public function indexSummary()
    {
        $summaryL2 = L2SummaryProblem::whereMonth('tgl', '=', Carbon::now())->get();

        return view('report-line-2.summary', compact('summaryL2'));
    }

    public function importSummary(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt,xlsx,xls,pdf|max:51200',
            ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.'Summary Problem Report Line #2'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('file/report-line-2/summary-problem/excel', $customName);

        L2SummaryProblem::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload File Summary Problem Report Line #2 Berhasil!', 'success');

        return to_route('index_summary2')->with('file', $customName);
    }

    public function deleteSummary2(L2SummaryProblem $summaryl2)
    {
        if(!empty($summaryl2->filename)){
            unlink("storage/".$summaryl2->path);
        };

        L2SummaryProblem::destroy($summaryl2->id);

        Alert::toast('Summary Problem Report Line #2 berhasil dihapus!', 'success');

        return to_route('index_summary2');
    }

    public function downloadSummary2(L2SummaryProblem $summaryl2)
    {
        return response()->download(storage_path("app/public/{$summaryl2->path}"));
    }

    public function viewSummary2(L2SummaryProblem $summaryl2)
    {
        $filename = $summaryl2->filename;
        $path = storage_path("app/public/{$summaryl2->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
