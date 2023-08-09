@extends('layouts.app', ['activePage' => 'monthly_mdp', 'title' => 'Planning Bulanan - PCD', 'header' => __('Planning Bulanan')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <a href="{{ route('monthly_1') }}" class="btn btn-lg btn-primary mr-1 text-uppercase">MDP line #1</a>
        <a href="{{ route('monthly_2') }}" class="btn btn-lg btn-primary mx-1 text-uppercase">MDP line #2</a>
        <a href="{{ route('chart_by_type') }}" class="btn btn-lg btn-primary mr-1 text-uppercase">Chart</a>
        <a href="{{ route('table_by_type') }}" class="btn btn-lg btn-primary mx-1 text-uppercase">Table</a>

        {{-- MDP Total --}}
        <div class="row">
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Volume Total SAP & KAP') }} <br>
                            ( {{ Carbon\Carbon::now()->isoFormat('MMMM Y') }} )</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <h2 class="text-uppercase font-weight-bold">
                                    <span class="acctotal-box">
                                        {{ $accTotal }}
                                    </span>
                                </h2>
                            </div>
                            <div class="col">
                                @if (auth()->user()->role == 'admin')
                                <div class="button-action text-end">
                                    <a href="{{ route('create_volume_total') }}" class="btn btn-success">
                                        <i class="fa-solid fa-plus"></i>
                                        Volume Total
                                    </a>
                                    <a href="{{ route('detail_volume_total') }}" class="btn btn-info">
                                        <i class="fa-solid fa-circle-info"></i>
                                        Detail
                                    </a>
                                </div>
                            @endif
                            </div>
                            <div class="my-4">
                                <form action="{{ route('mdp_index') }}" method="GET" autocomplete="off">
                                    <div class="mx-2 my-n2 text-center">
                                        <h5 class="mx-5 font-weight-bold text-uppercase">
                                            Year Filter
                                            <br>
                                            <input class="mx-4 text-center" type="month" name="year_total" id="year_total">

                                        </h5>
                                        <button class="btn btn-primary btn-sm mt-n1" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                        <a href="{{ route('mdp_index') }}" class="btn btn-danger btn-sm mt-n1">
                                            <i class="fa-solid fa-rotate-left"></i>
                                        </a>
                                    </div>
                                </form>
                            </div>
                            <h3>{{ $totalHeader }}</h3>
                            <div class="col col-lg-12">
                                <canvas id="chartTotalActual" style="width: 75%; height: 25%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- MDP SAP & KAP--}}
        <div class="row">
            {{-- SAP --}}
            <div class="col col-lg-6">
                <div class="card">
                    <div class="card-header card-header-danger">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Volume Total SAP') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-lg-12">
                                <h3 class="font-weight-bold">
                                    <span class="accsap-box">{{ $accSAP }}</span>
                                </h3>
                                <canvas id="chartSAPActual" style="width: 50%; height: 50%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- KAP --}}
            <div class="col col-lg-6">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Volume Total KAP') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-lg-12">
                                <h3 class="font-weight-bold">
                                    <span class="acckap-box">{{ $accKAP }}
                                    </span>
                                </h3>
                                <canvas id="chartKAPActual" style="width: 50%; height: 50%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- MDP KAP --}}
        {{-- <div class="row">
            <div class="card">
                <div class="card-header card-header-warning">
                    <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Volume Total KAP') }}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col col-lg-12">
                            <canvas id="chartKAPActual" style="width: 50%; height: 50%"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>

@endsection

@section('volumeTotalActualChart')
    <script>
        var labelTotal    = JSON.parse('{!! json_encode($labelTotal) !!}');
        var volumeTotal   = JSON.parse('{!! json_encode($volumeTotal) !!}');

        const ctxTotalActual = document.getElementById('chartTotalActual');
        var TotalActual = new Chart(
            ctxTotalActual,
            config = {
                data : {
                    labels: labelTotal,
                    datasets: [{
                                type: 'bar',
                                label: 'Volume Total',
                                data: volumeTotal,
                                backgroundColor: 'rgb(0,255,0)',
                                datalabels:{
                                    color: '#000000',
                                    anchor: 'end',
                                    align: 'top'
                                },
                            }
                        ]
                },
                plugins: [ChartDataLabels],
                options: {
                    plugins: {
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
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            }
        );

    </script>
@endsection

@section('volumeSAPActualChart')
    <script>
        var labelSAP       = JSON.parse('{!! json_encode($labelSAP) !!}');
        var volumeSAP      = JSON.parse('{!! json_encode($volumeSAP) !!}');

        const ctxSAPActual = document.getElementById('chartSAPActual');
        var SAPActual = new Chart(
            ctxSAPActual,
            config = {
                type: 'bar',
                data : {
                    labels: labelSAP,
                    datasets: [{
                        label: 'SAP',
                        data: volumeSAP,
                        backgroundColor: 'rgb(231,63,59)',
                        datalabels:{
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        },
                    }]
                },
                plugins: [ChartDataLabels],
                options: {
                    plugins: {
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
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            }
        );

    </script>
@endsection

@section('volumeKAPActualChart')
    <script>
        var labelKAP       = JSON.parse('{!! json_encode($labelKAP) !!}');
        var volumeKAP      = JSON.parse('{!! json_encode($volumeKAP) !!}');

        const ctxKAP = document.getElementById('chartKAPActual');
        var KAPLine1 = new Chart(
            ctxKAP,
            config = {
                type: 'bar',
                data : {
                    labels: labelKAP,
                    datasets: [{
                        label: 'KAP',
                        data: volumeKAP,
                        backgroundColor: 'rgb(44, 62, 80)',
                        datalabels:{
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        },
                    }]
                },
                plugins: [ChartDataLabels],
                options: {
                    plugins: {
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
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            }
        );

    </script>
@endsection
