@extends('layouts.app', ['activePage' => 'monthly_l1', 'title' => 'Planning Bulanan L#1 - PCD', 'header' => __('Planning Bulanan L#1')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <a href="{{ route('mdp_index') }}" class="text-left btn btn-danger btn-lg">{{ __('MDP Total') }}</a>
        <a href="{{ route('monthly_2') }}" class="text-left btn btn-primary btn-lg">{{ __('MDP Line #2') }}</a>
        <a href="{{ route('chart_by_type') }}" class="btn btn-lg btn-primary mr-1 text-uppercase">Chart</a>
        <a href="{{ route('table_by_type') }}" class="btn btn-lg btn-primary mx-1 text-uppercase">Table</a>
        {{-- DPR #1 --}}
        <div class="row">
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Planning Bulanan Line #1') }}</h4>
                    </div>
                    <div class="card-body ">

                        <div class="row d-flex justify-content-center px-3">
                        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC Vehicle Planning')
                            <div class="col">
                                    <div class="day-shift" style="margin-bottom: 20px; border-style:solid;">
                                        <h5 class="font-weight-bold text-uppercase">Upload File</h5>
                                        <a href="{{ route('upload_assy1_ds') }}" class="btn btn-success btn-md">
                                            <i class="fa-solid fa-upload"></i>
                                            Assy
                                        </a>
                                        <a href="{{ route('upload_delivery1_ds') }}" class="btn btn-success btn-md">
                                            <i class="fa-solid fa-upload"></i>
                                            Delivery
                                        </a>
                                        <a href="{{ route('upload_assy1_ds') }}" class="btn btn-success btn-md">
                                            <i class="fa-solid fa-upload"></i>
                                            Assy
                                        </a>
                                        <a href="{{ route('upload_delivery1_ds') }}" class="btn btn-success btn-md">
                                            <i class="fa-solid fa-upload"></i>
                                            Delivery
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="night-shift" style="margin-bottom: 20px; border-style:solid;">
                                        <h5 class="font-weight-bold text-uppercase">Input Manual</h5>
                                        <a href="{{ route('create_assy1') }}" class="btn btn-success btn-md">
                                            <i class="fa-solid fa-plus"></i>
                                            Assy
                                        </a>
                                        <a href="{{ route('create_delivery1') }}" class="btn btn-success btn-md">
                                            <i class="fa-solid fa-plus"></i>
                                            Delivery
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="my-4">
                            <form action="{{ route('monthly_1') }}" method="GET" autocomplete="off">
                                <div class="mx-2 my-n2 text-center">
                                    <h5 class="mx-5 font-weight-bold text-uppercase">
                                        Month Filter
                                        <br>
                                        <input class="mx-4 text-center" type="month" name="month_l1" id="month_l1">

                                    </h5>
                                    <button class="btn btn-primary btn-sm mt-n1" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <a href="{{ route('monthly_1') }}" class="btn btn-danger btn-sm mt-n1">
                                        <i class="fa-solid fa-rotate-left"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <h3>{{ $monthHeader }}</h3>
                        <div class="row d-flex justify-content-center">
                            <div class="assyDaychart">
                                <h3 class="text-center text-uppercase">assy line #1 <br> (day shift)</h3>
                                <canvas id="assyLine1DayChart" style="width: 50%; height: 50%"></canvas>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="deliveryDaychart">
                                <h3 class="text-center text-uppercase">delivery line #1 <br> (day shift)</h3>
                                <canvas id="deliveryLine1DayChart" style="width: 50%; height: 50%">></canvas>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="assyNightchart">
                                <h3 class="text-center text-uppercase">assy line #1 <br> (night shift)</h3>
                                <canvas id="assyLine1NightChart" style="width: 50%; height: 50%">></canvas>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="deliveryNightchart">
                                <h3 class="text-center text-uppercase">delivery line #1 <br> (night shift)</h3>
                                <canvas id="deliveryLine1NightChart" style="width: 50%; height: 50%">></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('chartAssyLine1Day')
<script>
    var labelAssyDay       = JSON.parse('{!! json_encode($labelAssyL1DS) !!}');
    var planAssyDay        = JSON.parse('{!! json_encode($planAssyL1DS) !!}');
    var actualAssyDay      = JSON.parse('{!! json_encode($actAssyL1DS) !!}');

    const ctxAssyDay = document.getElementById('assyLine1DayChart');
    var assyDayLine1 = new Chart(
        ctxAssyDay,
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
                        align: 'top'
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

@section('chartDeliveryLine1')
<script>
    var labelDeliveryDay       = JSON.parse('{!! json_encode($labelDeliveryL1DS) !!}');
    var planDeliveryDay        = JSON.parse('{!! json_encode($planDeliveryL1DS) !!}');
    var actualDeliveryDay      = JSON.parse('{!! json_encode($actDeliveryL1DS) !!}');

    const ctxDeliveryDay = document.getElementById('deliveryLine1DayChart');
    var deliveryDayLine1 = new Chart(
        ctxDeliveryDay,
        config = {
            type: 'line',
            data : {
                labels: labelDeliveryDay,
                datasets: [{
                    label: 'Plan',
                    data: planDeliveryDay,
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
                    data: actualDeliveryDay,
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

@section('chartAssyLine1Night')
<script>
    var labelAssyNight       = JSON.parse('{!! json_encode($labelAssyL1NS) !!}');
    var planAssyNight        = JSON.parse('{!! json_encode($planAssyL1NS) !!}');
    var actualAssyNight      = JSON.parse('{!! json_encode($actAssyL1NS) !!}');

    const ctxAssyNight = document.getElementById('assyLine1NightChart');
    var assyNightLine1 = new Chart(
        ctxAssyNight,
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

@section('chartDeliveryLine1Night')
<script>
    var labelDeliveryNight       = JSON.parse('{!! json_encode($labelDeliveryL1NS) !!}');
    var planDeliveryNight        = JSON.parse('{!! json_encode($planDeliveryL1NS) !!}');
    var actualDeliveryNight      = JSON.parse('{!! json_encode($actDeliveryL1NS) !!}');

    const ctxDeliveryNight = document.getElementById('deliveryLine1NightChart');
    var deliveryNightLine1 = new Chart(
        ctxDeliveryNight,
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

