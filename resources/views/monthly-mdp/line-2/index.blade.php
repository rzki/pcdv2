@extends('layouts.app', ['activePage' => 'monthly_l2', 'title' => 'Planning Bulanan L#2 - PCD', 'header' => __('Planning Bulanan L#2')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <a href="{{ route('mdp_index') }}" class="text-left btn btn-danger btn-lg ">{{ __('MDP Total') }}</a>
        <a href="{{ route('monthly_1') }}" class="text-left btn btn-primary btn-lg ">{{ __('MDP Line #1') }}</a>
        <a href="{{ route('chart_by_type') }}" class="btn btn-lg btn-primary mr-1 text-uppercase">Chart</a>
        <a href="{{ route('table_by_type') }}" class="btn btn-lg btn-primary mx-1 text-uppercase">Table</a>
        {{-- DPR #1 --}}
        <div class="row">
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Planning Bulanan Line #2') }}</h4>
                    </div>
                    <div class="card-body ">

                        <div class="row d-flex justify-content-center px-3">
                            @if (auth()->user()->role == 'admin')
                            <div class="col">
                                <div class="day-shift" style="margin-bottom: 20px; border-style:solid;">
                                    <h5 class="font-weight-bold text-uppercase">Upload File</h5>
                                    <a href="{{ route('upload_assy2_ds') }}" class="btn btn-success btn-md">
                                        <i class="fa-solid fa-upload"></i>
                                        Assy
                                    </a>
                                    <a href="{{ route('upload_delivery2_ds') }}" class="btn btn-success btn-md">
                                        <i class="fa-solid fa-upload"></i>
                                        Delivery
                                    </a>
                                    <a href="{{ route('upload_assy2_ns') }}" class="btn btn-success btn-md">
                                        <i class="fa-solid fa-upload"></i>
                                        Assy
                                    </a>
                                    <a href="{{ route('upload_delivery2_ns') }}" class="btn btn-success btn-md">
                                        <i class="fa-solid fa-upload"></i>
                                        Delivery
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="night-shift" style="margin-bottom: 20px; border-style:solid;">
                                    <h5 class="font-weight-bold text-uppercase">Input Manual</h5>
                                    <a href="{{ route('create_assy2') }}" class="btn btn-success btn-md">
                                        <i class="fa-solid fa-plus"></i>
                                        Assy
                                    </a>
                                    <a href="{{ route('create_delivery2') }}" class="btn btn-success btn-md">
                                        <i class="fa-solid fa-plus"></i>
                                        Delivery
                                    </a>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="my-4">
                            <form action="{{ route('monthly_2') }}" method="GET" autocomplete="off">
                                <div class="mx-2 my-n2 text-center">
                                    <h5 class="mx-5 font-weight-bold text-uppercase">
                                        Month Filter
                                        <br>
                                        <input class="mx-4 text-center" type="month" name="month_total" id="month_total">
                                    </h5>
                                    <button class="btn btn-primary btn-sm mt-n1" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <a href="{{ route('monthly_2') }}" class="btn btn-danger btn-sm mt-n1">
                                        <i class="fa-solid fa-rotate-left"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class="row d-flex justify-content-center text-center">
                            <div class="chart">
                                <h3 class="text-center text-uppercase">assy line #2 <br> (day shift)</h3>
                                <canvas id="assyLine2DayChart"></canvas>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center text-center">
                            <div class="chart">
                                <h3 class="text-center text-uppercase">delivery line #2 <br> (day shift)</h3>
                                <canvas id="deliveryLine2DayChart"></canvas>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center text-center">
                            <div class="chart">
                                <h3 class="text-center text-uppercase">assy line #2 <br> (night shift)</h3>
                                <canvas id="assyLine2NightChart"></canvas>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center text-center">
                            <div class="chart">
                                <h3 class="text-center text-uppercase">delivery line #2 <br> (night shift)</h3>
                                <canvas id="deliveryLine2NightChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('chartAssyLine2Day')
<script>
    var labelAssyDay       = JSON.parse('{!! json_encode($labelAssyL2DS) !!}');
    var planAssyDay        = JSON.parse('{!! json_encode($planAssyL2DS) !!}');
    var actualAssyDay      = JSON.parse('{!! json_encode($actAssyL2DS) !!}');

    const ctxAssyDay2 = document.getElementById('assyLine2DayChart');
    var assyDayLine2 = new Chart(
        ctxAssyDay2,
        config = {
            type: 'line',
            data : {
                labels: labelAssyDay,
                datasets: [{
                    label: 'Plan',
                    data: planAssyDay,
                    backgroundColor: 'rgba(0, 0, 255, 0.8)',
                    borderColor: 'rgba(0, 0, 255, 0.8)',
                    datalabels:{
                        color: '#000000',
                        anchor: 'end',
                        align: 'top',
                        display: 'auto'
                    },
                },
                {
                    label: 'Actual',
                    data: actualAssyDay,
                    backgroundColor: 'rgba(0, 255, 0, 1)',
                    borderColor: 'rgba(0, 255, 0, 1)',
                    datalabels:{
                        color: '#000000',
                        anchor: 'start',
                        align: 'bottom',
                        display: 'auto'
                    },
                }]
            },
            plugins: [ChartDataLabels],
            options: {
                interaction: {
                    mode: 'index'
                },
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

@section('chartDeliveryLine2')
<script>
    var labelDeliveryDay       = JSON.parse('{!! json_encode($labelDeliveryL2DS) !!}');
    var planDeliveryDay        = JSON.parse('{!! json_encode($planDeliveryL2DS) !!}');
    var actualDeliveryDay      = JSON.parse('{!! json_encode($actDeliveryL2DS) !!}');

    const ctxDeliveryDay2 = document.getElementById('deliveryLine2DayChart');
    var deliveryDayLine2 = new Chart(
        ctxDeliveryDay2,
        config = {
            type: 'line',
            data : {
                labels: labelDeliveryDay,
                datasets: [{
                    label: 'Plan',
                    data: planDeliveryDay,
                    backgroundColor: 'rgba(0, 0, 255, 0.8)',
                    borderColor:'rgba(0, 0, 255, 0.8)',
                    datalabels:{
                        color: '#000000',
                        anchor: 'end',
                        align: 'top'
                    },
                },
                {
                    label: 'Actual',
                    data: actualDeliveryDay,
                    backgroundColor: 'rgba(0, 255, 0, 1)',
                    borderColor: 'rgba(0, 255, 0, 1)',
                    datalabels:{
                        color: '#000000',
                        anchor: 'end',
                        align: 'top'
                    },
                }]
            },
            plugins: [ChartDataLabels],
            options: {
                interaction: {
                    mode: 'index'
                },
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

@section('chartAssyLine2Night')
<script>
    var labelAssyNight       = JSON.parse('{!! json_encode($labelAssyL2NS) !!}');
    var planAssyNight        = JSON.parse('{!! json_encode($planAssyL2NS) !!}');
    var actualAssyNight      = JSON.parse('{!! json_encode($actAssyL2NS) !!}');

    const ctxAssyNight2 = document.getElementById('assyLine2NightChart');
    var assyNightLine2 = new Chart(
        ctxAssyNight2,
        config = {
            type: 'line',
            data : {
                labels: labelAssyNight,
                datasets: [{
                    label: 'Plan',
                    data: planAssyNight,
                    backgroundColor: 'rgba(0, 0, 255, 0.8)',
                    borderColor: 'rgba(0, 0, 255, 0.8)',
                    datalabels:{
                        color: '#000000',
                        anchor: 'end',
                        align: 'top'
                    },
                },
                {
                    label: 'Actual',
                    data: actualAssyNight,
                    backgroundColor: 'rgba(0, 255, 0, 1)',
                    borderColor: 'rgba(0, 255, 0, 1)',
                    datalabels:{
                        color: '#000000',
                        anchor: 'end',
                        align: 'top'
                    },
                }]
            },
            plugins: [ChartDataLabels],
            options: {
                interaction: {
                    mode: 'index'
                },
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

@section('chartDeliveryLine2Night')
<script>
    var labelDeliveryNight       = JSON.parse('{!! json_encode($labelDeliveryL2NS) !!}');
    var planDeliveryNight        = JSON.parse('{!! json_encode($planDeliveryL2NS) !!}');
    var actualDeliveryNight      = JSON.parse('{!! json_encode($actDeliveryL2NS) !!}');

    const ctxDeliveryNight2 = document.getElementById('deliveryLine2NightChart');
    var deliveryNightLine2 = new Chart(
        ctxDeliveryNight2,
        config = {
            type: 'line',
            data : {
                labels: labelDeliveryNight,
                datasets: [{
                    label: 'Plan',
                    data: planDeliveryNight,
                    backgroundColor: 'rgba(0, 0, 255, 0.8)',
                    borderColor: 'rgba(0, 0, 255, 0.8)',
                    datalabels:{
                        color: '#000000',
                        anchor: 'end',
                        align: 'top'
                    },
                },
                {
                    label: 'Actual',
                    data: actualDeliveryNight,
                    backgroundColor: 'rgba(0, 255, 0, 1)',
                    borderColor: 'rgba(0, 255, 0, 1)',
                    datalabels:{
                        color: '#000000',
                        anchor: 'start',
                        align: 'bottom'
                    },
                }]
            },
            plugins: [ChartDataLabels],
            options: {
                interaction: {
                    mode: 'index'
                },
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
