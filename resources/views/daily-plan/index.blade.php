@extends('layouts.app', ['activePage' => 'daily_monitor_prodplan', 'title' => 'Monitoring Prod. Harian - PCD', 'header' => __('Monitoring Prod. Harian')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            {{-- Chart SAP --}}
            <div class="col col-lg-6">
                <div class="card">
                    <a href="{{ route('index_l1') }}">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Grafik Daily Production Line #1') }}</h4>
                        </div>
                    </a>
                    <div class="card-body">
                        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC Daily Planning')
                            <div class="button-action text-end">
                                <a href="{{ route('create_l1') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        @endif
                        <form action="{{ route('index_daily') }}" method="GET">
                            <div class="mx-2 my-2 text-center">
                                <p class="mx-5 font-weight-bold text-uppercase">
                                    Month Filter
                                    <br>
                                    <input class="mx-4 text-center" type="month" name="monthSAP" id="monthSAP">
                                </p>
                                <button class="btn btn-primary btn-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                <a href="{{ route('index_daily') }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-rotate-left"></i></a>
                            </div>
                        </form>
                        <div class="row">
                            <h5 class="text-center mt-3">{{ $monthHeaderSAP }}</h5>
                            <canvas id="chartDailySAP" style="width: 50%; height: 100%"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Chart KAP --}}
            <div class="col col-lg-6">
                <div class="card">
                    <a href="{{ route('index_l2') }}">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Grafik Daily Production  Line #2') }}</h4>
                        </div>
                    </a>
                    <div class="card-body">
                        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC Daily Planning')
                            <div class="button-action text-end">
                                <a href="{{ route('create_l2') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        @endif
                        <form action="{{ route('index_daily') }}" method="GET">
                            <div class="mx-2 my-2 text-center">
                                <p class="mx-5 font-weight-bold text-uppercase">
                                    Month Filter
                                    <br>
                                    <input class="mx-4 text-center" type="month" name="monthKAP">
                                </p>
                                <button class="btn btn-primary btn-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                <a href="{{ route('index_daily') }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-rotate-left"></i></a>
                            </div>
                        </form>
                        <div class="row">
                            <h5 class="text-center mt-3">{{ $monthHeaderKAP }}</h5>
                            <canvas id="chartDailyKAP" style="width: 50%; height: 100%"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('dpr1Table')
    <script>
        $(document).ready( function () {
            $('#tableDPR1').DataTable({
                dom: 'Bflrtip',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('dpr2Table')
    <script>
        $(document).ready( function () {
            $('#tableDPR2').DataTable({
                dom: 'Bflrtip',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('dailySAP')
    <script>

        var labelSAP        = JSON.parse('{!! json_encode($labelSAP) !!}');
        var planSAP         = JSON.parse('{!! json_encode($planSAP) !!}');
        var actualSAP       = JSON.parse('{!! json_encode($actualSAP) !!}');
        var plusMinSAP      = JSON.parse('{!! json_encode($plusMinusSAP) !!}');

        const ctxDailySAP = document.getElementById('chartDailySAP');
        const DailySAPChart = new Chart(ctxDailySAP, {
            data: {
                labels: labelSAP,
                datasets: [{
                    type: 'bar',
                    label: 'Plan',
                    data: planSAP,
                    backgroundColor: 'rgba(0, 0, 255, 0.8)',
                    borderColor: 'rgba(0, 0, 255, 0.8)',
                    datalabels:{
                            color: '#000000',
                            anchor: 'end',
                            align: 'top',
                            offset: 3,
                            font:{
                                size: 10
                            }
                        },
                },
                {
                    type: 'bar',
                    label: 'Actual',
                    data: actualSAP,
                    backgroundColor: 'rgba(0, 255, 0, 1)',
                    datalabels:{
                            color: '#000000',
                            anchor: 'center',
                            align: 'center',
                            offset: 20
                        },
                },
                {
                    type: 'bar',
                    label: '+/-',
                    data: plusMinSAP,
                    backgroundColor: 'rgba(0, 255, 255, 0.8)',
                    borderColor: 'rgba(0, 255, 255, 0.8)',
                    datalabels:{
                            color: '#000000',
                            anchor: 'end',
                            align: 'top',
                            offset: 3,
                            font:{
                                size: 10
                            }
                        },
                },]
            },
            plugins: [ChartDataLabels],
            options: {
                interaction:{
                    mode: 'index'
                },
                barPercentage: 0.7,
                plugins:{
                        legend:{
                            position: 'bottom'
                        }
                    },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                interaction:{
                    mode: 'index'
                }
            }
        });
    </script>
@endsection

@section('dailyKAP')
    <script>

        var labelKAP        = JSON.parse('{!! json_encode($labelKAP) !!}');
        var planKAP         = JSON.parse('{!! json_encode($planKAP) !!}');
        var actualKAP       = JSON.parse('{!! json_encode($actualKAP) !!}');
        var plusMinKAP      = JSON.parse('{!! json_encode($plusMinusKAP) !!}');

        const ctxDailyKAP = document.getElementById('chartDailyKAP');
        const DailyKAPChart = new Chart(ctxDailyKAP, {

            data: {
                labels: labelKAP,
                datasets: [{
                    type: 'line',
                    label: 'Plan',
                    data: planKAP,
                    backgroundColor: 'rgba(0, 0, 255, 0.8)',
                    borderColor: 'rgba(0, 0, 255, 0.8)',
                    datalabels:{
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        },
                },
                {
                    type: 'bar',
                    label: 'Actual',
                    data: actualKAP,
                    backgroundColor: 'rgba(0, 255, 0, 1)',
                    datalabels:{
                            color: '#000000',
                            anchor: 'center',
                            align: 'center'
                        },
                },
                {
                    type: 'bar',
                    label: '+/-',
                    data: plusMinKAP,
                    backgroundColor: 'rgba(0, 255, 255, 0.8)',
                    borderColor: 'rgba(0, 255, 255, 0.8)',
                    datalabels:{
                            color: '#000000',
                            anchor: 'end',
                            align: 'top',
                            offset: 3,
                            font:{
                                size: 10
                            }
                        },
                },]
            },
            plugins: [ChartDataLabels],
            options: {
                barPercentage: 0.9,
                plugins:{
                        legend:{
                            position: 'bottom'
                        }
                    },
                scales: {
                    x:{
                        stacked: true,
                    },
                    y: {
                        stacked: true,
                        beginAtZero: true
                    }
                },
                interaction:{
                    mode: 'index'
                }
            }
        });
    </script>
@endsection
