@extends('layouts.app', ['activePage' => 'absensi-p4', 'title' => 'Absensi P4 SAP - PCD', 'header' => __('Absensi P4 SAP')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="button text-center">
                    <a href="{{ route('pcd-att') }}" class="btn btn-primary btn-lg">Absensi PC Dept.</a>
                </div>
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h3 class="card-title text-center font-weight-bold">{{ __('Absensi P4 Sunter Assembly Plant') }}</h3>
                    </div>
                    <div class="card-body ">

                        <div class="row d-flex justify-content-between align-items-center mb-3">
                            <div class="col">
                                <h4 class="font-weight-bold">Tanggal : {{ Carbon\Carbon::today()->format('d-m-Y') }}</h4>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                @if ($totalData > 0)
                                @php
                                    $effTotal = round($avgPercentFloat / $totalDept, 1);
                                @endphp
                                @if ($effTotal < "90")
                                    <h3 class="align-items-center font-weight-bold text-center">Efisiensi Absensi <br> <p style="color:red" class="text-center">{{ $effTotal }}%</p></h3>
                                @elseif ($effTotal  < "95")
                                    <h3 class="font-weight-bold text-center">Efisiensi Absensi <p style="color:rgb(228, 228, 7)">{{ $effTotal }}%</p></h3>
                                @elseif ($effTotal  >= "95")
                                    <h3 class="font-weight-bold text-center">Efisiensi Absensi <p style="color:green">{{ $effTotal }}%</p></h3>
                                @endif
                            @else
                                <h4 class="align-items-center font-weight-bold text-uppercase">Data Absensi Belum diperbarui</h4>
                            @endif
                            </div>
                            <div class="col d-flex align-items-center justify-content-end">
                                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#importP4">
                                        <i class="fa-solid fa-upload"></i>
                                        Import
                                    </button>
                                @endif
                            </div>
                        </div>
                        <form action="{{ route('p4-att') }}" method="GET">
                            <div class="mx-2 my-2 text-center">
                                <p class="mx-5 font-weight-bold text-uppercase">
                                    Date Filter :
                                    <br>
                                    <input class="mx-4 text-centerk" type="date" name="date">
                                </p>
                                <button class="btn btn-primary my-1" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                                <a href="{{ route('pcd-att') }}" class="btn btn-danger">
                                    <i class="fa-solid fa-rotate-left"></i>
                                </a>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered table-dark text-center" id="tableP4">
                                <thead>
                                    <tr class="text-center">
                                        <th class="font-weight-bold" scope="col" style="width: 250px">Dept.</th>
                                        <th class="font-weight-bold" scope="col" style="width: 50px">Shift</th>
                                        <th class="font-weight-bold" scope="col" style="width: 85px">Manpower</th>
                                        <th class="font-weight-bold" scope="col" style="width: 50px">Plan</th>
                                        <th class="font-weight-bold" scope="col" style="width: 50px">Act</th>
                                        <th class="font-weight-bold" scope="col" style="width: 50px">+-</th>
                                        <th class="font-weight-bold" scope="col" style="width: 50px">%</th>
                                        <th class="font-weight-bold" scope="col" style="width: 50px">Add</th>
                                        <th class="font-weight-bold" scope="col" style="width: 85px">Total MP</th>
                                        <th class="font-weight-bold" scope="col" style="width: 50px">%</th>
                                        <th class="font-weight-bold" scope="col" style="width: 85px">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($attendanceP4 as $a)
                                        <tr>
                                            <td class="table-dark">{{ $a->dept }}</td>
                                            <td class="text-uppercase table-dark  text-center">{{ $a->shift }}</td>
                                            <td class="table-dark text-center">{{ $a->total_mp }}</td>
                                            <td class="table-dark text-center">{{ $a->plan }}</td>
                                            <td class="table-dark text-center">{{ $a->act }}</td>
                                            <td class="table-dark text-center">{{ $a->act - $a->plan }}</td>

                                            @if ($a->percent < "90")
                                            <td class="table-dark text-center">
                                                <p style="color:red">{{  $a->percent   }} %</p>
                                            </td>
                                            @elseif ($a->percent < "95")
                                            <td class="table-dark text-center">
                                                <p style="color:yellow">{{  $a->percent   }} %</p>
                                            </td>
                                            @elseif ($a->percent >= "95")
                                            <td class="table-dark text-center">
                                                <p style="color: green">{{  $a->percent   }} %</p>
                                            </td>
                                            @endif

                                            <td class="table-dark text-center">{{ $a->add_mp }}</td>
                                            <td class="table-dark text-center">{{ $a->total_add_mp }}</td>

                                            @if ($a->percent2  < "90")
                                            <td class="table-dark text-center">
                                                <p style="color:red">{{  $a->percent2  }} %</p>
                                            </td>
                                            @elseif ($a->percent2 < "95")
                                            <td class="table-dark text-center">
                                                <p style="color:yellow">{{  $a->percent2  }} %</p>
                                            </td>
                                            @elseif ($a->percent2 >= "95")
                                            <td class="table-dark text-center">
                                                <p style="color:green">{{  $a->percent2  }} %</p>
                                            </td>
                                            @endif
                                            <td class="table-dark text-center">{{ $a->date  }}</td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- modal -->
                        <div class="modal fade" id="importP4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Import Data Absensi P4 SAP</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('p4-import') }}" method="POST" enctype="multipart/form-data">
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
                                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-upload"></i> Upload</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Tutup</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('p4Table')
<script>
    $(document).ready( function () {
        $('#tableP4').DataTable({
            dom: 'BflprtipS',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });
    } );
</script>
@endsection
