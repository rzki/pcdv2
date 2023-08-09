@extends('layouts.app', ['activePage' => 'ontime_delivery', 'title' => 'On-Time Delivery - PCD', 'header' => __('On-Time Delivery')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="text-center">
            <a href="{{ route('otd_sap') }}" class="btn btn-lg btn-primary mr-1 text-uppercase">On Time Delivery SAP</a>
            <a href="{{ route('otd_kap') }}" class="btn btn-lg btn-primary mx-1 text-uppercase">On Time Delivery KAP</a>
        </div>
        <div class="row">
            <div class="filter">
                <form action="{{ route('otd_index') }}" method="GET">
                    <div class="mx-2 my-2 text-center">
                        <h4 class="mx-5 font-weight-bold text-uppercase">
                            Month Filter
                            <br>
                            <input class="mx-4 text-center" type="month" name="month_all" id="month_all">
                        </h3>
                        <button class="btn btn-primary btn-sm my-1" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <a href="{{ route('otd_index') }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-rotate-left"></i></a>
                    </div>
                </form>
            </div>
            {{-- OTD Line #1 --}}
            <div class="col col-lg-6">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('On-Time Delivery (SAP)') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col">
                                <h3 class="font-weight-bold">Sunter Assembly Plant</h3>
                                <h4>{{ $monthSAPHeader }}</h4>
                            </div>
                            <div class="col">
                                <div class="detailSAP">
                                    <h4 class="font-weight-bold">Summary</h4>
                                    @if (empty($otdSAP))
                                        <h5 class="font-weight-bold">Plan : %</h5>
                                        <h5 class="font-weight-bold">Actual : %</h5>
                                        <h5 class="font-weight-bold">Delay   : %</h5>
                                    @else
                                        <h5 class="font-weight-bold">Plan : {{ $planSAP }} %</h5>
                                        <h5 class="font-weight-bold">Actual : {{ $actualSAP }} %</h5>
                                        <h5 class="font-weight-bold">Delay   : {{ $delaySAP }} %</h5>
                                    @endif
                                </div>
                            </div>
                            <canvas id="chartOTDSAP" style="width: 50%; height: 50%"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-6">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('On-Time Delivery (KAP)') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row text-center mt-2">
                            <div class="col">
                                <h3 class="font-weight-bold">Karawang Assembly Plant</h3>
                                <h4>{{ $monthKAPHeader }}</h4>
                            </div>
                            <div class="col">
                                <div class="detailKAP">
                                    <h4 class="font-weight-bold">Summary</h4>
                                    @if (empty($otdKAP))
                                        <h5 class="font-weight-bold">Plan : %</h5>
                                        <h5 class="font-weight-bold">Actual : %</h5>
                                        <h5 class="font-weight-bold">Delay   : %</h5>
                                    @else
                                        <h5 class="font-weight-bold">Plan : {{ $planKAP }} %</h5>
                                        <h5 class="font-weight-bold">Actual : {{ $actualKAP }} %</h5>
                                        <h5 class="font-weight-bold">Delay   : {{ $delayKAP }} %</h5>
                                    @endif
                                </div>
                            </div>
                            <canvas id="chartOTDKAP" style="width: 50%; height: 50%"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('otdChartSAP')
    <script>

        var labelsOTDSAP    = JSON.parse('{!! json_encode($labelsOTDSAP) !!}');
        var planOTDSAP      = JSON.parse('{!! json_encode($planOTDSAP) !!}');
        var otAdvOTDSAP     = JSON.parse('{!! json_encode($otAdvOTDSAP) !!}');
        var delayOTDSAP     = JSON.parse('{!! json_encode($delayOTDSAP) !!}');
        var planPercentSAP  = JSON.parse('{!! json_encode($planPercentSAP) !!}');
        var otAdvPercentSAP = JSON.parse('{!! json_encode($otAdvPercentSAP) !!}');
        var delayPercentSAP = JSON.parse('{!! json_encode($delayPercentSAP) !!}');

        const otdChartSAP = document.getElementById('chartOTDSAP');
        const chartotd1 = new Chart(otdChartSAP, {
            data: {
                labels: labelsOTDSAP,
                datasets: [
                    {
                        type: 'line',
                        label: 'Planning (%)',
                        data: planPercentSAP,
                        borderColor: 'rgba(0, 0, 255, 0.8)',
                        backgroundColor: 'rgba(0, 0, 255, 0.8)',
                        datalabels: {
                            display: false,
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        }
                    },
                    {
                        type: 'bar',
                        label: 'OT + Advance (%)',
                        data: otAdvPercentSAP,
                        backgroundColor: 'rgba(0, 255, 0, 1)',
                        datalabels: {
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        }
                    },
                    {
                        type: 'bar',
                        label: 'Delay (%)',
                        data: delayPercentSAP,
                        backgroundColor: 'rgba(255,0,0,1)',
                        datalabels: {
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        }
                    }
            ]
            },
            plugins: [ChartDataLabels],
            options: {
                layout:{
                    padding: {
                        top: 20
                    }
                },
                barPercentage: 0.6,
                plugins:{
                    legend:{
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection

@section('otdChartKAP')
    <script>

        var labelsOTDKAP    = JSON.parse('{!! json_encode($labelsOTDKAP) !!}');
        var planOTDKAP      = JSON.parse('{!! json_encode($planOTDKAP) !!}');
        var otAdvOTDKAP     = JSON.parse('{!! json_encode($otAdvOTDKAP) !!}');
        var delayOTDKAP     = JSON.parse('{!! json_encode($delayOTDKAP) !!}');
        var planPercentKAP  = JSON.parse('{!! json_encode($planPercentKAP) !!}');
        var otAdvPercentKAP = JSON.parse('{!! json_encode($otAdvPercentKAP) !!}');
        var delayPercentKAP = JSON.parse('{!! json_encode($delayPercentKAP) !!}');


        const otdChartKAP = document.getElementById('chartOTDKAP');
        const chartotd2 = new Chart(otdChartKAP, {
            data: {
                labels: labelsOTDKAP,
                datasets: [
                    {
                        type: 'line',
                        label: 'Planning (%)',
                        data: planPercentKAP,
                        borderColor: 'rgba(0, 0, 255, 0.8)',
                        backgroundColor: 'rgba(0, 0, 255, 0.8)',
                        datalabels: {
                            display: false,
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        }
                    },
                    {
                        type: 'bar',
                        label: 'OT + Advance (%)',
                        data: otAdvPercentKAP,
                        backgroundColor: 'rgba(0, 255, 0, 1)',
                        datalabels: {
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        }
                    },
                    {
                        type: 'bar',
                        label: 'Delay (%)',
                        data: delayPercentKAP,
                        backgroundColor: 'rgba(255,0,0,1)',
                        datalabels: {
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        }
                    }
            ]
            },
            plugins: [ChartDataLabels],
            options: {
                layout:{
                    padding: {
                        top: 20
                    }
                },
                barPercentage: 0.6,
                plugins:{
                    legend:{
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
