@extends('layouts.app', ['activePage' => 'chart-type', 'title' => 'MDP Per Type (Chart) - PCD', 'header' => __('MDP Per Type (Chart)')])

@section('content')
<div class="content">
    <div class="container-fluid text-center">
        <a href="{{ route('mdp_index') }}" class="btn btn-lg btn-danger mr-1 text-uppercase">MDP Total</a>
        <a href="{{ route('monthly_1') }}" class="btn btn-lg btn-primary mr-1 text-uppercase">MDP line #1</a>
        <a href="{{ route('monthly_2') }}" class="btn btn-lg btn-primary mx-1 text-uppercase">MDP line #2</a>
        <a href="{{ route('table_by_type') }}" class="btn btn-lg btn-primary mx-1 text-uppercase">Per Type (Table)</a>
        <div class="row">
            {{-- Header --}}
            <div class="col col-lg-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Volume Total Per Type (Chart)') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-end">
                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                <a href="{{ route('create_total_per_model') }}" class="btn btn-success btn-lg">
                                    <i class="fa-solid fa-plus"></i>
                                    Per Model
                                </a>
                                <a href="{{ route('create_total_per_type') }}" class="btn btn-success btn-lg">
                                    <i class="fa-solid fa-plus"></i>
                                    Per Type
                                </a>
                            @endif
                        </div>
                        <div class="mt-2">
                            <form action="{{ route('chart_by_type') }}" method="GET" autocomplete="off">
                                <div class="mx-2 my-n2 text-center">
                                    <h5 class="mx-5 font-weight-bold text-uppercase">
                                        Month Filter
                                        <br>
                                        <input class="mx-4 text-center" type="month" name="sap_date" id="sap_date">
                                    </h5>
                                    <button class="btn btn-primary btn-sm mt-n1" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <a href="{{ route('chart_by_type') }}" class="btn btn-danger btn-sm mt-n1">
                                        <i class="fa-solid fa-rotate-left"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <h3>{{ $yearlyChartHeader }}</h3>
                        <div class="row">
                            <h3 class="font-weight-bold text-uppercase mt-5">Per Model</h3>
                            <div class="col">
                                <h3 class="mt-n2">Sunter Assembly Plant</h3>
                                <canvas id="chartTotalPerModelSAP"></canvas>
                            </div>
                            <div class="col">
                                <h3 class="mt-n2">Karawang Assembly Plant</h3>
                                <canvas id="chartTotalPerModelKAP"></canvas>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h3 class="font-weight-bold text-uppercase">Per Type</h3>
                            <div class="col col-lg-12">
                                <h3 class="mt-n2">Sunter Assembly Plant</h3>
                                <canvas id="chartTotalPerTypeSAP"></canvas>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col col-lg-12">
                                <h3 class="mt-n2">Karawang Assembly Plant</h3>
                                <canvas id="chartTotalPerTypeKAP"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('chartTotalModelSAP')
<script>

    var dateModelSAP        = JSON.parse('{!! json_encode($dateTotalModelSAP1) !!}');
    var modelNameSAP1       = JSON.parse('{!! json_encode($labelTotalModelSAP1) !!}');
    var modelNameSAP2       = JSON.parse('{!! json_encode($labelTotalModelSAP2) !!}');
    var modelNameSAP3       = JSON.parse('{!! json_encode($labelTotalModelSAP3) !!}');
    var modelNameSAP4       = JSON.parse('{!! json_encode($labelTotalModelSAP4) !!}');
    var volumeTotalSAP1     = JSON.parse('{!! json_encode($dataTotalModelSAP1) !!}');
    var volumeTotalSAP2     = JSON.parse('{!! json_encode($dataTotalModelSAP2) !!}');
    var volumeTotalSAP3     = JSON.parse('{!! json_encode($dataTotalModelSAP3) !!}');
    var volumeTotalSAP4     = JSON.parse('{!! json_encode($dataTotalModelSAP4) !!}');


    const ctxTotalModelSAP = document.getElementById('chartTotalPerModelSAP');
    var TotalModelSAP = new Chart(
        ctxTotalModelSAP,
        config = {
            type: 'bar',
            data : {
                labels: dateModelSAP,
                datasets: [{
                    label: 'U-IMV',
                    data: volumeTotalSAP1,
                    backgroundColor: '#ffc107',
                    borderColor: '#ffc107',
                    borderWidth: 1,
                    fill: false,
                },{
                    label: modelNameSAP2,
                    data: volumeTotalSAP2,
                    backgroundColor: '#28a745',
                    borderColor: '#28a745',
                    borderWidth: 1,
                    fill: false,
                },{
                    label: modelNameSAP3,
                    data: volumeTotalSAP3,
                    backgroundColor: '#007bff',
                    borderColor: '#007bff',
                    borderWidth: 1,
                    fill: false,
                },{
                    label: modelNameSAP4,
                    data: volumeTotalSAP4,
                    backgroundColor: '#dc3545',
                    borderColor: '#dc3545',
                    borderWidth: 1,
                    fill: false,
                }]
            },
            plugins: [ChartDataLabels],
            options: {
                interaction: {
                        mode: 'index'
                    },
                plugins: {
                    datalabels:{
                        color: '#000000',
                    },
                    legend:{
                        position: 'bottom'
                    }
                },
                layout: {
                    padding : {
                        top: 30
                    }
                },
                responsive: true,
                scales: {
                    x:{
                        stacked: true,
                    },
                    y: {
                        stacked: true,
                        beginAtZero: true
                    }
                }
            }
        }
    );

</script>
@endsection

@section('chartTotalModelKAP')
<script>
    var dateModelSAP    = JSON.parse('{!! json_encode($dateTotalModelSAP1) !!}');
    var labelModelKAP1  = JSON.parse('{!! json_encode($labelTotalModelKAP1) !!}');
    var dataModelKAP1   = JSON.parse('{!! json_encode($dataTotalModelKAP1) !!}');
    var dataModelKAP2   = JSON.parse('{!! json_encode($dataTotalModelKAP2) !!}');
    var dataModelKAP3   = JSON.parse('{!! json_encode($dataTotalModelKAP3) !!}');
    var dataModelKAP4   = JSON.parse('{!! json_encode($dataTotalModelKAP4) !!}');
    var dataModelKAP5   = JSON.parse('{!! json_encode($dataTotalModelKAP5) !!}');

    const ctxTotalModelKAP = document.getElementById('chartTotalPerModelKAP');
    var TotalModelKAP = new Chart(
        ctxTotalModelKAP,
        config = {
            type: 'bar',
            data : {
                labels: dateModelSAP,
                datasets: [{
                    label: 'D80N',
                    data: dataModelKAP1,
                    backgroundColor: '#3C8089',
                    borderColor: '#3C8089',
                },
                {
                    label: 'D30D',
                    data: dataModelKAP2,
                    backgroundColor: '#895A0B',
                    borderColor: '#895A0B',
                },
                {
                    label: 'TERIOS KAP',
                    data: dataModelKAP3,
                    backgroundColor: '#AAB0B0',
                    borderColor: '#AAB0B0',
                },
                {
                    label: 'RUSH KAP',
                    data: dataModelKAP4,
                    backgroundColor: '#BE5DFC',
                    borderColor: '#BE5DFC',
                },
                {
                    label: 'A-SUV',
                    data: dataModelKAP5,
                    backgroundColor: '#DE2A82',
                    borderColor: '#DE2A82',
                }]
            },
            plugins: [ChartDataLabels],
            options: {
                interaction: {
                        mode: 'index'
                    },
                plugins: {
                    datalabels:{
                        color: '#000000',
                        display: 'auto'
                    },
                    legend:{
                        position: 'bottom'
                    }
                },
                layout: {
                    padding : {
                        top: 30
                    }
                },
                responsive: true,
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true,
                        beginAtZero: true
                    }
                }
            }
        }
    );

</script>
@endsection

@section('chartTotalTypeSAP')
<script>
    var dateModelSAP    = JSON.parse('{!! json_encode($dateTotalModelSAP1) !!}');
    var dataTypeSAP1    = JSON.parse('{!! json_encode($dataTotalTypeSAP1) !!}');
    var dataTypeSAP2    = JSON.parse('{!! json_encode($dataTotalTypeSAP2) !!}');
    var dataTypeSAP3    = JSON.parse('{!! json_encode($dataTotalTypeSAP3) !!}');
    var dataTypeSAP4    = JSON.parse('{!! json_encode($dataTotalTypeSAP4) !!}');
    var dataTypeSAP5    = JSON.parse('{!! json_encode($dataTotalTypeSAP5) !!}');
    var dataTypeSAP6    = JSON.parse('{!! json_encode($dataTotalTypeSAP6) !!}');
    var dataTypeSAP7    = JSON.parse('{!! json_encode($dataTotalTypeSAP7) !!}');
    var dataTypeSAP8    = JSON.parse('{!! json_encode($dataTotalTypeSAP8) !!}');
    var dataTypeSAP9    = JSON.parse('{!! json_encode($dataTotalTypeSAP9) !!}');
    var dataTypeSAP10   = JSON.parse('{!! json_encode($dataTotalTypeSAP10) !!}');
    var dataTypeSAP11   = JSON.parse('{!! json_encode($dataTotalTypeSAP11) !!}');
    var dataTypeSAP12   = JSON.parse('{!! json_encode($dataTotalTypeSAP12) !!}');
    var dataTypeSAP13   = JSON.parse('{!! json_encode($dataTotalTypeSAP13) !!}');
    var dataTypeSAP14   = JSON.parse('{!! json_encode($dataTotalTypeSAP14) !!}');
    var dataTypeSAP15   = JSON.parse('{!! json_encode($dataTotalTypeSAP15) !!}');

    const ctxTotalTypeSAP = document.getElementById('chartTotalPerTypeSAP');
    var TotalTypeSAP = new Chart(
        ctxTotalTypeSAP,
        config = {
            type: 'bar',
            data : {
                labels: dateModelSAP,
                datasets: [{
                    label: 'Xenia',
                    data: dataTypeSAP1,
                    backgroundColor: '#85CC5F',
                    borderColor: '#85CC5F',
                },
                {
                    label: 'Avanza DOM',
                    data: dataTypeSAP2,
                    backgroundColor: '#EFFB1D',
                    borderColor: '#EFFB1D',
                },
                {
                    label: 'Avanza EXP',
                    data: dataTypeSAP3,
                    backgroundColor: '#708870',
                    borderColor: '#708870',
                },
                {
                    label: 'B-MPV D-Dom',
                    data: dataTypeSAP4,
                    backgroundColor: '#484E0A',
                    borderColor: '#484E0A',
                },
                {
                    label: 'B-MPV T-Dom',
                    data: dataTypeSAP5,
                    backgroundColor: '#0A8D9D',
                    borderColor: '#0A8D9D',
                },
                {
                    label: 'Terios',
                    data: dataTypeSAP6,
                    backgroundColor: '#383B03',
                    borderColor: '#383B03',
                },
                {
                    label: 'Rush',
                    data: dataTypeSAP7,
                    backgroundColor: '#46FF33',
                    borderColor: '#46FF33',
                },
                {
                    label: 'RUSH EXPORT (T-Exp)',
                    data: dataTypeSAP8,
                    backgroundColor: '#70098D   ',
                    borderColor: '#70098D   ',
                },
                {
                    label: 'D40D DOMESTIC (D-Dom)',
                    data: dataTypeSAP9,
                    backgroundColor: '#270388',
                    borderColor: '#270388',
                },
                {
                    label: 'D16B WAGON  D-Dom',
                    data: dataTypeSAP10,
                    backgroundColor: '#83B7DC',
                    borderColor: '#83B7DC',
                },
                {
                    label: 'D40D D-Brand Export',
                    data: dataTypeSAP11,
                    backgroundColor: '#B3F078',
                    borderColor: '#B3F078',
                },
                {
                    label: 'Townlite',
                    data: dataTypeSAP12,
                    backgroundColor: '#8F5770',
                    borderColor: '#8F5770',
                },
                {
                    label: 'TownLite Japan LHD',
                    data: dataTypeSAP13,
                    backgroundColor: '#FE7D80',
                    borderColor: '#FE7D80',
                },
                {
                    label: 'D40L Daihatsu',
                    data: dataTypeSAP14,
                    backgroundColor: '#D3DBC7',
                    borderColor: '#D3DBC7',
                },
                {
                    label: 'D40L MAZDA',
                    data: dataTypeSAP15,
                    backgroundColor: '#C92034',
                    borderColor: '#C92034',
                }]
            },
            plugins: [ChartDataLabels],
            options: {
                interaction: {
                        mode: 'index'
                    },
                plugins: {
                    datalabels:{
                        color: '#000000',
                        display: 'auto',
                    },
                    legend:{
                        position: 'bottom'
                    }
                },
                layout: {
                    padding : {
                        top: 30
                    }
                },
                responsive: true,
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true,
                        beginAtZero: true
                    }
                }
            }
        }
    );

</script>
@endsection

@section('chartTotalTypeKAP')
<script>
    var dateModelSAP        = JSON.parse('{!! json_encode($dateTotalModelSAP1) !!}');
    var labelTypeKAP1       = JSON.parse('{!! json_encode($labelTotalTypeKAP1) !!}');
    var dataTypeKAP1        = JSON.parse('{!! json_encode($dataTotalTypeKAP1) !!}');
    var dataTypeKAP2        = JSON.parse('{!! json_encode($dataTotalTypeKAP2) !!}');
    var dataTypeKAP3        = JSON.parse('{!! json_encode($dataTotalTypeKAP3) !!}');
    var dataTypeKAP4        = JSON.parse('{!! json_encode($dataTotalTypeKAP4) !!}');
    var dataTypeKAP5        = JSON.parse('{!! json_encode($dataTotalTypeKAP5) !!}');
    var dataTypeKAP6        = JSON.parse('{!! json_encode($dataTotalTypeKAP6) !!}');
    var dataTypeKAP7        = JSON.parse('{!! json_encode($dataTotalTypeKAP7) !!}');
    var dataTypeKAP8        = JSON.parse('{!! json_encode($dataTotalTypeKAP8) !!}');

    const ctxTotalTypeKAP = document.getElementById('chartTotalPerTypeKAP');
    var TotalTypeKAP = new Chart(
        ctxTotalTypeKAP,
        config = {
            type: 'bar',
            data : {
                labels: dateModelSAP,
                datasets: [{
                    label: 'D30D D-Dom',
                    data: dataTypeKAP1,
                    backgroundColor: '#E70626',
                    borderColor: '#E70626',
                },
                {
                    label: 'D30D T-Dom',
                    data: dataTypeKAP2,
                    backgroundColor: '#B3A4FF',
                    borderColor: '#B3A4FF',
                },
                {
                    label: 'AYLA',
                    data: dataTypeKAP3,
                    backgroundColor: '#f0f8ff',
                    borderColor: '#f0f8ff',
                },
                {
                    label: 'AGYA',
                    data: dataTypeKAP4,
                    backgroundColor: '#FAEBD7',
                    borderColor: '#FAEBD7',
                },
                {
                    label: 'WIGO',
                    data: dataTypeKAP5,
                    backgroundColor: '#00FFFF',
                    borderColor: '#00FFFF',
                },
                {
                    label: 'ASUV D-Dom',
                    data: dataTypeKAP6,
                    backgroundColor: '#FFE4C4',
                    borderColor: '#FFE4C4',
                },
                {
                    label: 'ASUV T-Dom',
                    data: dataTypeKAP7,
                    backgroundColor: '#FFEBCD',
                    borderColor: '#FFEBCD',
                },
                {
                    label: 'ASUV EXP',
                    data: dataTypeKAP8,
                    backgroundColor: '#8A2BE2',
                    borderColor: '#8A2BE2',
                }]
            },
            plugins: [ChartDataLabels],
            options: {
                interaction: {
                        mode: 'index'
                    },
                plugins: {
                    datalabels:{
                        color: '#000000',
                        display: 'auto',
                    },
                    legend:{
                        position: 'bottom'
                    }
                },
                layout: {
                    padding : {
                        top: 30
                    }
                },
                responsive: true,
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true,
                        beginAtZero: true
                    }
                }
            }
        }
    );

</script>
@endsection
