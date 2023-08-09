@extends('layouts.app', ['activePage' => 'daily_prodplan_l2', 'title' => 'Daily Production Line #2 - PCD', 'header' => __('Daily Production Line #2')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <a href="{{ route('index_daily') }}" class="text-left btn btn-danger btn-lg">{{ __('Daily Monitoring') }}</a>
        <a href="{{ route('index_l1') }}" class="text-left btn btn-primary btn-lg">{{ __('Daily Monitoring Line #1') }}</a>
        {{-- DPR #2 --}}
        <div class="row">
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Daily Production Line #2') }}</h4>
                    </div>
                    <div class="card-body ">

                        <div class="row">
                            <div class="button-action px-3 text-end" style="margin-bottom: 20px">
                                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC Daily Planning')
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import"><i class="fa-solid fa-upload"></i>
                                        Import
                                    </button>
                                    <a href="{{ route('create_l2') }}" class=" btn btn-success"><i class="fa-solid fa-plus"></i></a>
                                @endif
                            </div>
                            <div>
                                <form action="{{ route('index_l2') }}" method="GET">
                                    <div class="mx-2 my-2 text-center">
                                        <p class="mx-5 font-weight-bold text-uppercase">
                                            Month Filter :
                                            <br>
                                            <input class="mx-4 text-center" type="month" name="month">
                                        </p>
                                        <button class="btn btn-primary my-1" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        <a href="{{ route('index_l2') }}" class="btn btn-danger"><i class="fa-solid fa-rotate-left"></i></a>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive px-3">
                                <table class="table table-bordered table-striped" id="tableDPRL2">
                                    <thead style="background-color: green;">
                                    <tr>
                                        <th colspan="31" class="text-center font-weight-bold text-white">{{ $monthHead }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if($line2->isEmpty())
                                            <tr>
                                                <th>
                                                    <h3>Data Bulan Ini Tidak Ditemukan</h3>
                                                </th>
                                            </tr>
                                        @else
                                        <tr>
                                            <th style="background-color: yellow; color: black">Tanggal</th>
                                            @foreach ($line2 as $l2)
                                            <td>{{ Carbon\Carbon::parse($l2->tgl)->format('d') }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <th style="background-color: yellow; color: black">Plan</th>
                                            @foreach ($line2 as $l2)
                                            <td>{{ $l2->plan }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <th style="background-color: yellow; color: black">Actual</th>
                                            @foreach ($line2 as $l2)
                                            <td>{{ $l2->actual }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <th style="background-color: yellow; color: black">+-</th>
                                            @foreach ($line2 as $l2)
                                            <td>{{ $l2->actual - $l2->plan }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <th style="background-color: yellow; color: black">Aksi</th>
                                            @foreach ($line2 as $l2)
                                                <td>
                                                    <form action="{{ route('delete_l2',$l2->id) }}" method="post">
                                                        <a href="{{ route('edit_l2',$l2->id) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                            <i class="fa-solid fa-pen-to-square"></i> Ubah
                                                        </a>
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm confirm-delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            @endforeach
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- modal -->
                        <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">IMPORT DATA</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('import_l2') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>PILIH FILE</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile" name="file">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                                            <button type="submit" class="btn btn-success">IMPORT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Achievement Daily Line #2 --}}
        <div class="row">
            <div class="col">
                <div class="card card-chart">
                        <div class="card-header mt-2">
                            <h4 class="card-title font-weight-bold text-center text-uppercase">Achievement Daily Line #2</h4>
                            <p class="card-title font-weight-bold text-center text-uppercase">{{ Carbon\Carbon::now()->isoFormat('MMMM Y') }}</p>
                        </div>
                    <div class="card-body">
                        <canvas id="L2Chart" style="width: 50%; height: 50%;">
                        </canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('Line2Chart')
    <script>

        var labelsL2    = JSON.parse('{!! json_encode($labelL2) !!}');
        var planL2      = JSON.parse('{!! json_encode($planL2) !!}');
        var actualL2    = JSON.parse('{!! json_encode($actualL2) !!}');
        var plusMinL2   = JSON.parse('{!! json_encode($plusMinusL2) !!}');

        const ctx = document.getElementById('L2Chart');
        const L2Chart = new Chart(ctx, {
            data: {
                labels: labelsL2,
                datasets: [{
                    type: 'line',
                    label: 'Plan',
                    data: planL2,
                    backgroundColor: 'rgba(0, 0, 255, 1)',
                    borderColor: 'rgba(0, 0, 255, 1)',
                    datalabels:{
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                    },
                },
                {
                    type: 'bar',
                    label: 'Actual',
                    data: actualL2,
                    backgroundColor: 'rgba(0, 255, 0, 1)',
                    datalabels:{
                            color: '#000000',
                            anchor: 'center',
                            align: 'center'
                        },
                },
                {
                    type: 'bar',
                    label: 'Plus-Minus',
                    data: plusMinL2,
                    backgroundColor: 'rgba(0, 255, 255, 1)',
                    borderColor: 'rgba(0, 255, 255, 1)',
                    datalabels:{
                            color: '#000000',
                            anchor: 'end',
                            align: 'top'
                        },
                }]
            },
            plugins: [ChartDataLabels],
            options: {
                interaction:{
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

@section('achieveL2DeleteConfirm')
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
