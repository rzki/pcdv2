@extends('layouts.app', ['activePage' => 'dashboard', 'title' => __('Dashboard - PCD'), 'header' => 'Dashboard'])

@if (auth()->user()->role == 'admin')
<?php $title = 'Dashboard Admin - PCD'?>
@elseif (auth()->user()->role == 'member')
<?php $title = 'Dashboard Member - PCD'?>
@elseif (auth()->user()->role == 'PIC CCR')
<?php $title = 'Dashboard PIC CCR - PCD'?>
@elseif (auth()->user()->role == 'PIC Daily Planning')
<?php $title = 'Dashboard PIC Daily Planning - PCD'?>
@elseif (auth()->user()->role == 'PIC Vehicle Planning')
<?php $title = 'Dashboard PIC Vehicle Planning - PCD'?>
@elseif (auth()->user()->role == 'PIC VAI')
<?php $title = 'Dashboard PIC VAI - PCD'?>
@elseif (auth()->user()->role == 'Line')
<?php $title = 'Dashboard Line - PCD'?>
@endif

@section('content')
    @if (auth()->user()->role == 'Line')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <h3 class="card-title font-weight-bold text-center text-uppercase mb-n2 mt-2 text-black">Report Line #1</h3>
                    <div class="col col-lg-6">
                        <div class="card card-chart">
                            <div class="card-header mt-2">
                                <h3 class="card-title font-weight-bold text-center text-uppercase text-black">Daily Prod. Report</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <th style="width:60px">No</th>
                                            <th>Nama File</th>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="card card-chart">
                            <div class="card-header mt-2">
                                <h3 class="card-title font-weight-bold text-center text-uppercase text-black">Hourly Running Unit</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <th style="width:60px">No</th>
                                            <th>Nama File</th>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3 class="card-title font-weight-bold text-center text-uppercase mb-n2 mt-2 text-black">Report Line #2</h3>
                    <div class="col col-lg-6">
                        <div class="card card-chart">
                            <div class="card-header mt-2">
                                <h3 class="card-title font-weight-bold text-center text-uppercase text-black">Daily Prod. Report</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <th style="width:60px">No</th>
                                            <th>Nama File</th>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="card card-chart">
                            <div class="card-header mt-2">
                                <h3 class="card-title font-weight-bold text-center text-uppercase text-black">Hourly Running Unit</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <th style="width:60px">No</th>
                                            <th>Nama File</th>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3 class="card-title font-weight-bold text-center text-uppercase mb-n2 mt-2 text-black">Report Summary</h3>
                    <div class="col col-lg-6">
                        <div class="card card-chart">
                            <div class="card-header mt-2">
                                <h3 class="card-title font-weight-bold text-center text-uppercase text-black">Report Delay Unit</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <th style="width:60px">No</th>
                                            <th>Nama File</th>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="card card-chart">
                            <div class="card-header mt-2">
                                <h3 class="card-title font-weight-bold text-center text-uppercase text-black">Report Asakai</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <th style="width:60px">No</th>
                                            <th>Nama File</th>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center text-uppercase pt-5">
                    <h3 class="text-center text-black"> yang ber ulang Tahun di Bulan {{ Carbon\Carbon::now()->isoFormat('MMMM') }}</h3>
                </div>

                {{-- Row 1 --}}
                <div class="row justify-content-center">
                    {{-- Best Attendance --}}
                    @if (empty($birthday))
                    <div class="col col-lg-2 col-md-4 col-sm-8">
                        <div class="card card-chart">
                            <div class="card-body">
                                <a href="{{ route('index_employee') }}">
                                    <h3 class="card-title text-decoration-none text-black text-center font-weight-bold text-uppercase text-black">Tidak Ada</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    @else
                    @foreach ($birthday as $bday)
                    <div class="col col-lg-2 col-md-4 col-sm-2">
                        <div class="card card-chart">
                            <div class="card-header card-header-info">
                                <div class="ct-chart">
                                    @if (empty($bday->photo))
                                    <img src="{{ asset('storage/daihatsu.png') }}" class="img-fluid" alt="">
                                    @else
                                    <img src="{{ asset('storage/'.$bday->photo) }}" class="img-fluid" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('show_employee',$bday->id) }}">
                                    <p class="card-title font-weight-bold text-center text-uppercase text-black">{{ $bday->npk }}</p>
                                    <h4 class="card-title font-weight-bold text-center text-uppercase text-black">{{ $bday->name }}</h4>
                                    <p class="card-title font-weight-bold text-center text-uppercase text-black">{{ Carbon\Carbon::parse($bday->tgl_lahir)->isoFormat('DD MMMM') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>

                <div class="row d-flex justify-content-center text-uppercase pt-3">
                    <h3 class="text-center text-black"> Absensi, SS & QCC Terbaik Bulan {{ Carbon\Carbon::now()->isoFormat('MMMM Y') }}</h3>
                </div>

                {{-- Row 2 --}}
                <div class="row justify-content-around">
                    {{-- Best Attendance --}}
                    <div class="col col-lg-3">
                        <div class="card card-chart">
                            <div class="card-header card-header-info">
                                <div class="ct-chart">
                                    @if(empty($bestAtt))
                                    <img src="{{ asset('storage/daihatsu.png') }}" class="img-fluid" alt="">
                                    @else
                                    <img src="{{ asset('storage/'.$bestAtt->image) }}" class="img-fluid" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('index_att') }}">
                                    <h4 class="card-title font-weight-bold text-center text-uppercase text-black">Absensi Terbaik</h4>
                                    {{-- <p class=" card-title font-weight-bold text-center text-uppercase">{{ Carbon\Carbon::now()->isoFormat('MMMM Y') }}</p> --}}
                                    @if (empty($bestAtt))
                                    <p> </p>
                                    @else
                                        <p class="card-category font-weight-bold text-center">{{ $bestAtt->name }}</p>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Best SS --}}
                    <div class="col col-lg-3">
                        <div class="card card-chart">
                            <div class="card-header card-header-info">
                                <div class="ct-chart">
                                    <div id="carouselSS" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @if($bestSS->isEmpty())
                                                <div class="carousel-item">
                                                    <img src="{{ asset('storage/daihatsu.png') }}" class="img-fluid" alt="">
                                                </div>
                                            @else
                                                @foreach ($bestSS as $key => $ss)
                                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                        <img src="{{ asset('storage/'.$ss->image) }}" class="img-fluid" alt="">
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('index_ss') }}">
                                    <h4 class="card-title font-weight-bold text-center text-uppercase text-black">SS Terbaik</h4>
                                    <p class=" card-title font-weight-bold text-center text-uppercase text-black">{{ Carbon\Carbon::now()->isoFormat('MMMM Y') }}</p>
                                </a>
                                @if(empty($bestSS))
                                    <p> </p>
                                @else
                                    @foreach($bestSS as $ss)
                                        <p class="card-category text-center text-black"><b>{{ $ss->name }}</b> (Nilai : {{ $ss->nilai }})</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Best QCC --}}
                    <div class="col col-lg-3">
                        <div class="card card-chart">
                            <div class="card-header card-header-info">
                                <div class="ct-chart">
                                    <div id="carouselSS" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @if(empty($bestQCC))
                                                <div class="carousel-item">
                                                    <img src="{{ asset('storage/daihatsu.png') }}" class="img-fluid" alt="">
                                                </div>
                                            @else
                                                @foreach ($bestQCC as $key => $qcc)
                                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('storage/'.$qcc->image) }}" class="img-fluid" alt="">
                                                </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('index_qcc') }}">
                                    <h4 class="card-title font-weight-bold text-center text-uppercase text-black">QCC Circle Terbaik</h4>
                                    <p class=" card-title font-weight-bold text-center text-uppercase text-black">{{ Carbon\Carbon::now()->isoFormat('MMMM Y') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Row 3 --}}
                <div class="row justify-content-center">
                    <h3 class="font-weight-bold text-center text-uppercase text-black">Absensi</h3>
                    {{-- Absensi PCD --}}
                    <div class="col">
                        <div class="card card-chart">
                            <a href="{{route('pcd-att')}}" style="text-decoration: none;">
                                <div class="card-header card-header-success text-center">
                                    @if ($totalPegawai > 0)
                                        @php
                                            $efficiency = round($totalKehadiran / $totalPegawai * 100, 1);
                                        @endphp
                                        @if ($efficiency < "90")
                                            <h3 class="align-items-center font-weight-bold text-black">Efisiensi Absen Hari Ini <br> <p style="color:red" class="text-center">{{ $efficiency }}%</p></h3>
                                            <div class="row">
                                                <div class="col">
                                                    <h4 class="text-center text-black"><b>Jumlah Hadir :</b></h4>
                                                    <h5 class="text-center text-black">{{ $totalKehadiran }} orang</h5>
                                                </div>
                                                <div class="col">
                                                    <h4 class="text-center text-black"><b>Total Pegawai :</b></h4>
                                                    <h5 class="text-center text-black">{{ $totalPegawai }} orang</h5>
                                                </div>
                                            </div>
                                        @elseif ($efficiency  < "95")
                                            <h4 class="align-items-center font-weight-bold text-black">>Efisiensi Absen Hari Ini <p style="color:yellow">{{ $efficiency }}%</p></h4>
                                            <div class="row">
                                                <div class="col">
                                                    <h4 class="text-center text-black"><b>Jumlah Hadir :</b></h4>
                                                    <h5 class="text-center text-black">{{ $totalKehadiran }} orang</h5>
                                                </div>
                                                <div class="col">
                                                    <h4 class="text-center text-black"><b>Total Pegawai :</b></h4>
                                                    <h5 class="text-center text-black">{{ $totalPegawai }} orang</h5>
                                                </div>
                                            </div>
                                        @elseif ($efficiency  >= "95")
                                            <h4 class="align-items-center font-weight-bold text-black">Efisiensi Absen Hari Ini <p style="color:green">{{ $efficiency }}%</p></h4>
                                            <div class="row">
                                                <div class="col">
                                                    <h4 class="text-center text-black"><b>Jumlah Hadir :</b></h4>
                                                    <h5 class="text-center text-black">{{ $totalKehadiran }} orang</h5>
                                                </div>
                                                <div class="col">
                                                    <h4 class="text-center text-black"><b>Total Pegawai :</b></h4>
                                                    <h5 class="text-center text-black">{{ $totalPegawai }} orang</h5>
                                                </div>
                                            </div>
                                        @endif
                                        @else
                                            <h5 class="align-items-center font-weight-bold text-uppercase text-center">Data Absen Hari Ini Belum diperbarui</h5>
                                    @endif

                                </div>
                            </a>
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-center text-uppercase text-uppercase text-black">PC Dept.</h3>
                                <h5 class="font-weight-bold text-center text-black">Tanggal : {{ Carbon\Carbon::today()->isoFormat('D MMMM Y') }}</h5>
                            </div>
                        </div>
                    </div>
                    {{-- Absensi P4 --}}
                    <div class="col">
                        <div class="card card-chart">
                            <a href="{{route('p4-att')}}" style="text-decoration: none;">
                                <div class="card-header card-header-success">
                                        @if ($totalData > 0)
                                        @php
                                            $eff_total = round($avgpercentFloat / $totaldept, 1);
                                        @endphp
                                        @if ($eff_total < "90")
                                            <h3 class="align-items-center font-weight-bold text-center text-black">Efisiensi Absen <br> <p style="color:red" class="text-center">{{ $eff_total }}%</p></h3>
                                            <div class="row">
                                                <div class="col">
                                                    <h4 class="text-center text-black"><b>Jumlah Hadir :</b></h4>
                                                    <h5 class="text-center text-black">{{ $totalmpInt }} orang</h5>
                                                </div>
                                                <div class="col">
                                                    <h4 class="text-center text-black"><b>Total Pegawai :</b></h4>
                                                    <h5 class="text-center text-black">{{ $planInt }} orang</h5>
                                                </div>
                                            </div>
                                        @elseif ($eff_total  < "95")
                                                <h3 class="font-weight-bold text-center text-black">Efisiensi Absen <p style="color:rgb(228, 228, 7)">{{ $eff_total }}%</p></h3>
                                                <div class="">
                                                    <h5><b>Jumlah Hadir :</b></h5>
                                                    <p>{{ $totalmpInt }} orang</p>
                                                    <h5><b>Total Pegawai :</b></h5>
                                                    <p>{{ $planInt }} orang</p>
                                                </div>
                                        @elseif ($eff_total  >= "95")
                                                <h3 class="font-weight-bold text-center text-black">Efisiensi Absen <p style="color:green">{{ $eff_total }}%</p></h3>
                                                <div class="">
                                                    <h5><b>Jumlah Hadir :</b></h5>
                                                    <p>{{ $totalmpInt }} orang</p>
                                                    <h5><b>Total Pegawai :</b></h5>
                                                    <p>{{ $planInt }} orang</p>
                                                </div>
                                        @endif
                                        @else
                                        <h5 class="align-items-center font-weight-bold text-uppercase text-center">Data Absen Hari Ini Belum diperbarui</h5>
                                        @endif
                                </div>
                            </a>
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-center text-uppercase text-uppercase text-black">P4</h3>
                                <h5 class="font-weight-bold text-center text-black">Tanggal : {{ Carbon\Carbon::today()->isoFormat('D MMMM Y') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Row 4 --}}
                <div class="row">
                    <h3 class="card-title font-weight-bold text-center text-uppercase mb-n2 mt-2 text-black">Achievement Daily</h3>
                    <div class="col col-lg-12">
                        <div class="card card-chart">
                            <a href="{{ route('index_l1') }}" style="text-decoration: none;">
                                <div class="card-header mt-2">
                                    <h3 class="card-title font-weight-bold text-center text-uppercase text-black">Line #1</h3>
                                </div>
                            </a>
                            <div class="card-body">
                                @if(!empty($achieveDaily))
                                <canvas id="dailyAchieveChart" style="width: 50%; height: 100%;"></canvas>
                                @else
                                <p>Data bulan ini tidak ditemukan</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-12">
                        <div class="card card-chart">
                            <a href="{{ route('index_l2') }}" style="text-decoration: none;">
                                <div class="card-header mt-2">
                                    <h3 class="card-title font-weight-bold text-center text-uppercase text-black">Line #2</h3>
                                </div>
                            </a>
                            <div class="card-body">
                                <canvas id="dailyAchieve2Chart" style="width: 50%; height: 100%;">
                                </canvas>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Row 5 --}}
                <div class="row justify-content-between">
                    <h3 class="card-title font-weight-bold text-center text-uppercase mt-3 mb-n2 text-black">On-Time Delivery</h3>
                    {{-- On-Time Delivery Line #1 --}}
                    <div class="col">
                        <div class="card card-chart">
                            <div class="row">
                                <div class="filter">
                                    <form action="{{ route('home') }}" method="GET">
                                        <div class="mx-2 my-4 text-center">
                                            <h4 class="mx-5 font-weight-bold text-uppercase">
                                                Month Filter
                                                <br>
                                                <input class="mx-4 text-center" type="month" name="otd_month" id="otd_month">
                                            </h3>
                                            <button class="btn btn-primary btn-sm my-1" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            <a href="{{ route('home') }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-rotate-left"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body mt-2">
                                <div class="row">
                                    <div class="col col-lg-4 text-center border border-5 mx-auto my-auto">
                                        <h3 class="card-title font-weight-bold text-center text-uppercase mt-3 text-black">Summary</h3>
                                        <br>
                                        @if (empty($otd1))
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">Plan &emsp;&emsp;&ensp;:  %</h4>
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">OTD + Adv&emsp;:  %</h4>
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">Delay&emsp;&emsp;&emsp;:  %</h4>
                                            <br>
                                        @else
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">Plan &emsp;&emsp;&ensp;: {{ $avgPlanOT1 }} %</h4>
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">OTD + Adv&emsp;: {{ $avgSummaryOT1 }} %</h4>
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">Delay&emsp;&emsp;&emsp;: {{ $avgSummaryD1 }} %</h4>
                                            <br>
                                        @endif
                                    </div>
                                    <div class="col col-lg-8">
                                        <div class="pt-2 text-center">
                                            <a href="{{ route('otd_sap') }}">
                                                <h3 class="font-weight-bold text-uppercase text-black">Sunter Assembly Plant</h3>
                                            </a>
                                            <h4 class="font-weight-bold text-uppercase text-black">{{ $otd1Header }}</h4>
                                            <canvas id="otd1Chart" style="width: 50%; height:50%"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col col-lg-8">
                                        <div class="pt-2 text-center">
                                            <a href="{{ route('otd_kap') }}">
                                                <h3 class="font-weight-bold text-uppercase text-black">Karawang Assembly Plant</h3>
                                            </a>
                                            <h4 class="font-weight-bold text-uppercase text-black">{{ $otd2Header }}</h4>
                                            <canvas id="otd2Chart" style="width: 50%; height:50%"></canvas>
                                        </div>
                                    </div>
                                    <div class="col col-lg-4 text-center border border-5 mt-3 m-auto">
                                        <h3 class="card-title font-weight-bold text-center text-uppercase mt-3 text-black">Summary</h3>
                                        <br>
                                        @if (empty($otd2))
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">Plan &emsp;&emsp;&ensp;:  %</h4>
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">OTD + Adv&emsp;:  %</h4>
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">Delay&emsp;&emsp;&emsp;:  %</h4>
                                            <br>
                                        @else
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">Plan &emsp;&emsp;&ensp;: {{ $avgPlanOT2 }} %</h4>
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">OTD + Adv&emsp;: {{ $avgSummaryOT2 }} %</h4>
                                            <h4 class="card-title font-weight-bold text-center text-uppercase text-black" style="text-align: justify;">Delay&emsp;&emsp;&emsp;: {{ $avgSummaryD2 }} %</h4>
                                            <br>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endif

@endsection

@section('carouselSS')
<script>
    $('#carouselSS').carousel({
        interval: 1000
    });
</script>
@endsection

@section('achieveL1Chart')
<script>
    var labelsL1        = JSON.parse('{!! json_encode($labels1) !!}');
    var planL1          = JSON.parse('{!! json_encode($plan1) !!}');
    var actualL1        = JSON.parse('{!! json_encode($actual1) !!}');
    var plusMinL1       = JSON.parse('{!! json_encode($plusMinusL1) !!}');

    const ctx = document.getElementById('dailyAchieveChart');
    var dailyAchieve1 = new Chart(
        ctx,
        config = {

            data : {
                labels: labelsL1,
                datasets: [{
                    type: 'line',
                    label: 'Plan',
                    data: planL1,
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
                    data: actualL1,
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
                    data: plusMinL1,
                    backgroundColor: 'rgba(0, 255, 255, 0.8)',
                    borderColor: 'rgba(0, 255, 255, 0.8)',
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
                barPercentage: 0.9,
                plugins:{
                    legend:{
                        position: 'bottom'
                    }
                },
                layout:{
                    padding: 20
                },
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

@section('achieveL2Chart')
<script>
    var labelsL2        = JSON.parse('{!! json_encode($labels2) !!}');
    var plan2           = JSON.parse('{!! json_encode($plan2) !!}');
    var actual2         = JSON.parse('{!! json_encode($actual2) !!}');
    var plusMinL2       = JSON.parse('{!! json_encode($plusMinusL2) !!}');

    const ctx2 = document.getElementById('dailyAchieve2Chart');
    const dailyAchieve2 = new Chart(ctx2, {

        data: {
            labels: labelsL2,
            datasets: [{
                type: 'line',
                label: 'Plan',
                data: plan2,
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
                data: actual2,
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
                data: plusMinL2,
                backgroundColor: 'rgba(0, 255, 255, 0.8)',
                borderColor: 'rgba(0, 255, 255, 0.8)',
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
            }
        }
    });
</script>
@endsection

@section('OTDChart')
<script>

    var labelsOTD       = JSON.parse('{!! json_encode($labelsOTD) !!}');
    var planPercent     = JSON.parse('{!! json_encode($planPercent) !!}');
    var otAdvPercent    = JSON.parse('{!! json_encode($otAdvPercent) !!}');
    var delayPercent    = JSON.parse('{!! json_encode($delayPercent) !!}');

    const ctxOTD = document.getElementById('otd1Chart');
    const otd1 = new Chart(ctxOTD, {
        data: {
            labels: labelsOTD,
            datasets: [
                {
                    type: 'line',
                    label: 'Planning (%)',
                    data: planPercent,
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
                    type: 'line',
                    label: 'Delay (%)',
                    data: delayPercent,
                    backgroundColor: 'rgba(255,0,0,1)',
                    borderColor: 'rgba(255,0,0,1)',
                    datalabels: {
                        color: '#000000',
                        anchor: 'end',
                        align: 'top'
                    }
                },
                {
                    type: 'bar',
                    label: 'OT + Advance (%)',
                    data: otAdvPercent,
                    backgroundColor: 'rgba(0, 255, 0, 1)',
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
            interaction: {
                    mode: 'index'
                },
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

@section('OTD2Chart')
<script>

    var labelsOTD2       = JSON.parse('{!! json_encode($labelsOTD2) !!}');
    var planPercent2     = JSON.parse('{!! json_encode($planPercent2) !!}');
    var otAdvPercent2    = JSON.parse('{!! json_encode($otAdvPercent2) !!}');
    var delayPercent2    = JSON.parse('{!! json_encode($delayPercent2) !!}');

    const ctxOTD2 = document.getElementById('otd2Chart');
    const otd2 = new Chart(ctxOTD2, {
        data: {
            labels: labelsOTD2,
            datasets: [
                {
                    type: 'line',
                    label: 'Planning (%)',
                    data: planPercent2,
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
                    type: 'line',
                    label: 'Delay (%)',
                    data: delayPercent2,
                    backgroundColor: 'rgba(255,0,0,1)',
                    borderColor: 'rgba(255,0,0,1)',
                    datalabels: {
                        color: '#000000',
                        anchor: 'end',
                        align: 'top'
                    }
                },
                {
                    type: 'bar',
                    label: 'OT + Advance (%)',
                    data: otAdvPercent2,
                    backgroundColor: 'rgba(0, 255, 0, 1)',
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
            interaction: {
                    mode: 'index'
                },
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
