@extends('layouts.app', ['activePage' => 'table-type', 'title' => 'Tabel MDP - PCD', 'header' => __('Tabel MDP')])

@section('content')
<div class="content">
    <div class="container-fluid text-center">
        <a href="{{ route('mdp_index') }}" class="btn btn-lg btn-danger mr-1 text-uppercase">MDP total</a>
        <a href="{{ route('monthly_1') }}" class="btn btn-lg btn-primary mr-1 text-uppercase">MDP line #1</a>
        <a href="{{ route('monthly_2') }}" class="btn btn-lg btn-primary mx-1 text-uppercase">MDP line #2</a>
        <a href="{{ route('chart_by_type') }}" class="btn btn-lg btn-primary mx-1 text-uppercase">Per Type (Chart)</a>

        <div class="row">
            {{-- DPR #1 --}}
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Volume Per Model & Type') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                        </div>

                        {{-- Volume Per Type & Model --}}
                        <div class="row">
                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                            <div class="px-3 text-end">
                                    <a href="{{ route('create_total_per_model') }}" class="btn btn-success">
                                        <i class="fa-solid fa-plus"></i>
                                        Volume Per Model
                                    </a>
                                    <a href="{{ route('create_total_per_type') }}" class="btn btn-success">
                                        <i class="fa-solid fa-plus"></i>
                                        Volume Per Type
                                    </a>
                                </div>
                            @endif
                            <div class="mt-2">
                                <form action="{{ route('table_by_type') }}" method="GET" autocomplete="off">
                                    <div class="mx-2 my-n2 text-center">
                                        <h5 class="mx-5 font-weight-bold text-uppercase">
                                            Month Filter
                                            <br>
                                            <input class="mx-4 text-center" type="month" name="sap_date" id="sap_date">
                                        </h5>
                                        <button class="btn btn-primary btn-sm mt-n1" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                        <a href="{{ route('table_by_type') }}" class="btn btn-danger btn-sm mt-n1">
                                            <i class="fa-solid fa-rotate-left"></i>
                                        </a>
                                    </div>
                                </form>
                            </div>
                            <h3 class="mt-3">{{ $monthTableHeader }}</h3>
                            <div class="col">
                                <h3 class="font-weight-bold text-uppercase mt-4 text-center">Sunter Assembly Plant (SAP)</h3>
                                <div class="row">
                                    <h4 class="font-weight-bold text-uppercase mt-3 text-center">Per Model<h4>
                                    <div class="table-responsive mt-3">
                                        <table class="table table-striped table-bordered text-center" id="perModelSAP">
                                            <thead class="table-dark">
                                                <th class="font-weight-bold">Bulan</th>
                                                <th class="font-weight-bold">Model</th>
                                                <th class="font-weight-bold">Volume</th>
                                                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                                <th class="font-weight-bold">Aksi</th>
                                                @endif
                                            </thead>
                                            <tbody>
                                                @if ($tablePerModelSAP->isEmpty())
                                                    <tr>
                                                        <td colspan="4">Data Tidak Ditemukan</td>
                                                    </tr>
                                                @else
                                                    @foreach ($tablePerModelSAP as $model_sap)
                                                        <tr style="line-height: 10%;">
                                                            <td style="font-size: 14px"><p>{{ Carbon\Carbon::parse($model_sap->tgl)->format('F Y') }}</p></td>
                                                            <td style="font-size: 14px"><p>{{ $model_sap->model }}</p></td>
                                                            <td style="font-size: 14px"><p>{{ number_format($model_sap->volume) }} Unit</p></td>
                                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                                            <td>
                                                                <a href="{{ route('edit_per_model', $model_sap->id) }}" class="btn btn-primary btn-sm">
                                                                    <i class="fa-solid fa-pen-to-square"></i> Ubah
                                                                </a>
                                                                <form action="{{ route('delete_per_model', $model_sap->id) }}" method="post">
                                                                    @method('DELETE')
                                                                    @csrf

                                                                    <button type="submit" class="btn btn-danger btn-sm confirm-delete1" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus" >
                                                                        <i class="fa-solid fa-trash-can"></i> Hapus
                                                                    </button>
                                                                </form>
                                                            </td>
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4 class="font-weight-bold text-uppercase mt-3 text-center">Per Type<h4>
                                    <div class="table-responsivemt-3">
                                        <table class="table table-striped table-bordered text-center" id="perTypeSAP">
                                            <thead class="table-dark">
                                                <th class="font-weight-bold">Bulan</th>
                                                <th class="font-weight-bold">Type</th>
                                                <th class="font-weight-bold">Volume</th>
                                                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                                <th class="font-weight-bold">Aksi</th>
                                                @endif
                                            </thead>
                                            <tbody>
                                                @if ($tablePerTypeSAP->isEmpty())
                                                    <tr>
                                                        <td colspan="4">Data Tidak Ditemukan</td>
                                                    </tr>
                                                @else
                                                    @foreach ($tablePerTypeSAP as $type_sap)
                                                        <tr style="line-height: 50%">
                                                            <td style="font-size: 14px"><p>{{ Carbon\Carbon::parse($type_sap->tgl)->format('F Y') }}</p></td>
                                                            <td style="font-size: 14px"><p>{{ $type_sap->type }}</p></td>
                                                            <td style="font-size: 14px"><p>{{ number_format($type_sap->volume) }} Unit</p></td>
                                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                                            <td>
                                                                <form action="{{ route('delete_per_type', $type_sap->id) }}" method="post">
                                                                    <a href="{{ route('edit_per_type', $type_sap->id) }}" class="btn btn-primary btn-sm">
                                                                        <i class="fa-solid fa-pen-to-square"></i> Ubah
                                                                    </a>
                                                                @method('DELETE')
                                                                @csrf

                                                                    <button type="submit" class="btn btn-danger btn-sm confirm-delete2" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus" >
                                                                        <i class="fa-solid fa-trash-can"></i> Hapus
                                                                    </button>
                                                                </form>
                                                            </td>
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <h3 class="font-weight-bold text-uppercase mt-4 text-center">Karawang Assembly Plant (KAP)</h3>
                                <div class="row">
                                    <h4 class="font-weight-bold text-uppercase mt-3 text-center">Per Model<h4>
                                    <div class="table-responsive mt-3">
                                        <table class="table table-striped table-bordered text-center" id="perModelKAP">
                                            <thead class="table-dark">
                                                <th class="font-weight-bold">Bulan</th>
                                                <th class="font-weight-bold">Model</th>
                                                <th class="font-weight-bold">Volume</th>
                                                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                                <th class="font-weight-bold">Aksi</th>
                                                @endif
                                            </thead>
                                            <tbody>
                                                @if ($tablePerModelKAP->isEmpty())
                                                    <tr>
                                                        <td colspan="4">Data Tidak Ditemukan</td>
                                                    </tr>
                                                @else
                                                    @foreach ($tablePerModelKAP as $model_kap)
                                                        <tr style="line-height: 10%;">
                                                            <td style="font-size: 14px"><p>{{ Carbon\Carbon::parse($model_kap->tgl)->format('F Y') }}</p></td>
                                                            <td style="font-size: 14px"><p>{{ $model_kap->model }}</p></td>
                                                            <td style="font-size: 14px"><p>{{ number_format($model_kap->volume) }} Unit</p></td>
                                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                                            <td>
                                                                <a href="{{ route('edit_per_model', $model_kap->id) }}" class="btn btn-primary btn-sm">
                                                                    <i class="fa-solid fa-pen-to-square"></i> Ubah
                                                                </a>
                                                                <form action="{{ route('delete_per_model', $model_kap->id) }}" method="post">
                                                                    @method('DELETE')
                                                                    @csrf

                                                                    <button type="submit" class="btn btn-danger btn-sm confirm-delete3" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                                                        <i class="fa-solid fa-trash-can"></i> Hapus
                                                                    </button>
                                                                </form>
                                                            </td>
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4 class="font-weight-bold text-uppercase mt-3 text-center">Per Type<h4>
                                    <div class="table-responsive mt-3">
                                        <table class="table table-striped table-bordered text-center" id="perTypeKAP">
                                            <thead class="table-dark">
                                                <th class="font-weight-bold">Bulan</th>
                                                <th class="font-weight-bold">Type</th>
                                                <th class="font-weight-bold">Volume</th>
                                                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                                <th class="font-weight-bold">Aksi</th>
                                                @endif
                                            </thead>
                                            <tbody>
                                                @if ($tablePerTypeKAP->isEmpty())
                                                    <tr>
                                                        <td colspan="4">Data Tidak Ditemukan</td>
                                                    </tr>
                                                @else
                                                    @foreach ($tablePerTypeKAP as $type_kap)
                                                        <tr style="line-height: 10%;">
                                                            <td style="font-size: 14px"><p>{{ Carbon\Carbon::parse($type_kap->tgl)->format('F Y') }}</p></td>
                                                            <td style="font-size: 14px"><p>{{ $type_kap->type }}</p></td>
                                                            <td style="font-size: 14px"><p>{{ number_format($type_kap->volume) }} Unit</p></td>
                                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'pic')
                                                            <td>
                                                                <a href="{{ route('edit_per_type', $type_kap->id) }}" class="btn btn-primary btn-sm">
                                                                    <i class="fa-solid fa-pen-to-square"></i> Ubah
                                                                </a>
                                                                <form action="{{ route('delete_per_type', $type_kap->id) }}" method="post">
                                                                    @method('DELETE')
                                                                    @csrf

                                                                    <button type="submit" class="btn btn-danger btn-sm confirm-delete4" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                                                        <i class="fa-solid fa-trash-can"></i> Hapus
                                                                    </button>
                                                                </form>
                                                            </td>
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
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

@section('perModelSAPTable')
    <script>
        $(document).ready( function () {
            $('#perModelSAP').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('perTypeSAPTable')
    <script>
        $(document).ready( function () {
            $('#perTypeSAP').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('perModelKAPTable')
    <script>
        $(document).ready( function () {
            $('#perModelKAP').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('perTypeKAPTable')
    <script>
        $(document).ready( function () {
            $('#perTypeKAP').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('modelSAPDeleteConfirm')
    <script type="text/javascript">
        $('.confirm-delete1').click(function(event){
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

@section('typeSAPDeleteConfirm')
    <script type="text/javascript">
        $('.confirm-delete2').click(function(event){
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

@section('modelKAPDeleteConfirm')
    <script type="text/javascript">
        $('.confirm-delete3').click(function(event){
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

@section('typeKAPDeleteConfirm')
    <script type="text/javascript">
        $('.confirm-delete4').click(function(event){
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
