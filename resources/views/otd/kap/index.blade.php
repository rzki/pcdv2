@extends('layouts.app', ['activePage' => 'ontime_delivery', 'title' => 'On-Time Delivery (KAP) - PCD', 'header' => __('On-Time Delivery (KAP)')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="text-center">
            <a href="{{ route('otd_index') }}" class="btn btn-lg btn-primary mr-1 text-uppercase">On Time Delivery</a>
            <a href="{{ route('otd_sap') }}" class="btn btn-lg btn-primary mx-1 text-uppercase">On Time Delivery SAP</a>
        </div>
        <div class="row">
            {{-- OTD Line #1 --}}
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('On-Time Delivery (KAP)') }}</h4>
                    </div>
                    <div class="card-body">
                        @if (auth()->user()->role =='admin')
                            <div class="text-end pb-3">
                                <a href="{{ route('create_otd_kap') }}" class="btn btn-success btn-lg text-uppercase font-weight-bold">
                                    <i class="fa-solid fa-plus"></i> Data</a>
                            </div>
                        @endif
                        <div class="row">
                            <div class="filter">
                                <form action="{{ route('otd_kap') }}" method="GET">
                                    <div class="mx-2 my-2 text-center">
                                        <h4 class="mx-5 font-weight-bold text-uppercase">
                                            Month Filter
                                            <br>
                                            <input class="mx-4 text-center" type="month" name="kap_month" id="kap_month">
                                            <br>
                                        </h4>
                                        <button class="btn btn-primary btn-sm my-1" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        <a href="{{ route('otd_kap') }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-rotate-left"></i></a>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="tableOTDKAP">
                                    <thead class="table-dark">
                                        <th>Tanggal</th>
                                        <th>Plan</th>
                                        <th>On-Time Delivery</th>
                                        <th>Delay</th>
                                        <th>Plan (%)</th>
                                        <th>On-Time (%)</th>
                                        <th>Delay (%)</th>
                                        @if (auth()->user()->role == 'admin')
                                        <th>Aksi</th>
                                        @endif
                                    </thead>
                                    <tbody>
                                        @foreach ($detailOTDKAP as $otd_kap)
                                            <tr>
                                                <td>{{ Carbon\Carbon::parse($otd_kap->tgl)->format('d F Y') }}</td>
                                                <td>{{ $otd_kap->plan }} Unit</td>
                                                <td>{{ $otd_kap->ot_adv }} Unit</td>
                                                <td>{{ $otd_kap->delay }} Unit</td>
                                                <td>{{ $otd_kap->plan_percent }}%</td>
                                                <td>{{ $otd_kap->ot_percent }}%</td>
                                                <td>{{ $otd_kap->delay_percent }}%</td>
                                                @if (auth()->user()->role == 'admin')
                                                <td>
                                                    <a href="{{ route('edit_otd_kap', $otd_kap->id) }}" class="btn btn-primary">
                                                        <i class="fa-solid fa-pen-to-square"></i> Ubah</a>

                                                    <form action="{{ route('delete_otd_kap', $otd_kap->id) }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger confirm-delete">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3 text-center">
                            <h3>On-Time Delivery</h3>
                            <canvas id="chartOTDKAP" style="width: 50%; height: 50%"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('otdKAPChart')
    <script>

        var labelsOTDKAP        = JSON.parse('{!! json_encode($labelsOTDKAP) !!}');
        var planOTDKAP          = JSON.parse('{!! json_encode($planOTDKAP) !!}');
        var otAdvOTDKAP         = JSON.parse('{!! json_encode($otAdvOTDKAP) !!}');
        var delayOTDKAP         = JSON.parse('{!! json_encode($delayOTDKAP) !!}');
        var planPercentKAP      = JSON.parse('{!! json_encode($planPercentKAP) !!}');
        var otAdvPercentKAP     = JSON.parse('{!! json_encode($otAdvPercentKAP) !!}');
        var delayPercentKAP     = JSON.parse('{!! json_encode($delayPercentKAP) !!}');

        const ctxOTDKAP = document.getElementById('chartOTDKAP');
        const chartotdKAP = new Chart(ctxOTDKAP, {
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
                        type: 'line',
                        label: 'Delay (%)',
                        data: delayPercentKAP,
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
                        data: otAdvPercentKAP,
                        backgroundColor: 'rgba(0, 255, 0, 1)',
                        datalabels: {
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        }
                    },

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

@section('otdKAPTable')
    <script>
        $(document).ready( function () {
            $('#tableOTDKAP').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('otdKAPDeleteConfirm')
    <script type="text/javascript">
        $('.confirm-delete').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: 'Yakin ingin menghapus data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ff0000',
                cancelButtonColor: '#0d6efd',
                cancelButtonText: 'Batalkan',
                confirmButtonText: 'Hapus',
                reverseButtons: true
            }).then((willDelete) => {
                if (willDelete.value) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
