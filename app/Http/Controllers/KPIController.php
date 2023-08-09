<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\KPI;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kpi = KPI::all();

        return view('kpi.index', compact('kpi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kpi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KPI::create([
            'tgl' => Carbon::now()->toDateString(),
            'description' => $request['kpi'],
            'status' => $request['status'],
            'user_id' => auth()->user()->id
        ]);

        Alert::toast('KPI berhasil ditambahkan!', 'success');

        return to_route('index_kpi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KPI  $kPI
     * @return \Illuminate\Http\Response
     */
    public function show(KPI $kpi)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KPI  $kPI
     * @return \Illuminate\Http\Response
     */
    public function edit(KPI $kpi)
    {
        return view('kpi.edit', compact('kpi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KPI  $kPI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KPI $kpi)
    {
        KPI::where('id', $kpi->id)->update([
            'tgl' => Carbon::now()->toDateString(),
            'description' => $request['kpi'],
            'status' => $request['status'],
            'user_id' => auth()->user()->id
        ]);

        Alert::toast('KPI berhasil diubah!', 'success');

        return to_route('index_kpi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KPI  $kPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(KPI $kpi)
    {
        KPI::destroy($kpi->id);

        Alert::toast('KPI berhasil dihapus!', 'success');

        return to_route('index_kpi');
    }
}
