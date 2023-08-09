@extends('layouts.app', ['activePage' => 'absensi-pcd', 'title' => 'Absensi PC Dept. - PCD', 'header' => __('Absensi PC Dept.')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="button text-center">
                <a href="{{ route('p4-att') }}" class="btn btn-primary btn-lg">Absensi P4 SAP</a>
            </div>
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h3 class="card-title text-center font-weight-bold">{{ __('Absensi PC Dept.') }}</h3>
                    </div>
                    <div class="card-body ">

                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col">
                                <h4 class="font-weight-bold text-left">Tanggal : {{ Carbon\Carbon::today()->format('d-m-Y') }}</h4>
                            </div>
                            <div class="col" style="margin-bottom: 20px">
                                @if ($totalPegawai > 0)
                                    @php
                                        $efficiency = round($totalKehadiran / $totalPegawai * 100, 1);
                                    @endphp
                                    @if ($efficiency < "90")
                                        <h3 class="align-items-center font-weight-bold text-center">Efisiensi Absensi <br> <p style="color:red" class="text-center">{{ $efficiency }}%</p></h3>
                                    @elseif ($efficiency  < "95")
                                        <h3 class="font-weight-bold text-center">>Efisiensi Absensi <p style="color:yellow">{{ $efficiency }}%</p></h3>
                                    @elseif ($efficiency  >= "95")
                                        <h3 class="font-weight-bold text-center">Efisiensi Absensi <p style="color:green">{{ $efficiency }}%</p></h3>
                                    @endif
                                @else
                                    <h4 class="font-weight-bold text-uppercase text-center">Data Absensi Hari Ini Belum diperbarui</h4>
                                @endif
                            </div>
                            <div class="col text-end">
                                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#import">
                                        <i class="fa-solid fa-upload"></i>
                                        Import
                                    </button>
                                @endif
                            </div>
                        </div>
                        <form action="{{ route('pcd-att') }}" method="GET">
                            <div class="mx-2 my-2 text-center">
                                <p class="mx-5 font-weight-bold text-uppercase">
                                    Date Filter :
                                    <br>
                                    <input class="mx-4 text-center" type="date" name="date">
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
                            <table class="table table-bordered text-center" id="tablePCD">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NPK</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Divisi</th>
                                        <th scope="col">Dept</th>
                                        <th scope="col">Seksi</th>
                                        <th scope="col">Posisi</th>
                                        <th scope="col">Shift</th>
                                        <th scope="col">Jam Datang</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attendance as $a)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $a->npk }}</td>
                                            <td>{{ $a->name }}</td>
                                            <td>{{ $a->division }}</td>
                                            <td>{{ $a->dept }}</td>
                                            <td>{{ $a->section }}</td>
                                            <td>{{ $a->position }}</td>
                                            <td>{{ $a->shift }}</td>
                                            @if($a->time == '00:00:00')
                                            <td></td>
                                            @else
                                            <td>{{ $a->time }}</td>
                                            @endif
                                            <td>{{ $a->date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- modal -->
                        <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Import Data Absensi PC Dept.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">
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
</div>
@endsection

@section('pcdTable')
<script>
    $(document).ready( function () {
        $('#tablePCD').DataTable({
            dom: 'BflprtipS',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });
    } );
</script>
@endsection
