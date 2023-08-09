@extends('layouts.app', ['activePage' => 'monthly_mdp', 'title' => 'Detail Volume Total - PCD', 'header' => __('Detail Volume Total')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            {{-- Volume Total --}}
            <div class="col-md-12">
                <div class="button">
                    <a href="{{ route('mdp_index') }}" class="btn btn-primary btn-lg">
                        <i class="fa-solid fa-arrow-left"></i>
                        Kembali
                    </a>
                </div>
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Detail Volume Total') }}</h4>
                    </div>
                    <div class="card-body">
                        @if (auth()->user()->role == 'admin')
                            <div class="text-end">
                                <a href="{{ route('create_volume_total') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah</a>
                            </div>
                        @endif
                        <div class="my-4">
                            <form action="{{ route('detail_volume_total') }}" method="GET" autocomplete="off">
                                <div class="mx-2 my-n2 text-center">
                                    <h5 class="mx-5 font-weight-bold text-uppercase">
                                        Year Filter
                                        <br>
                                        <input class="mx-4 text-center" type="month" name="year" id="year">

                                    </h5>
                                    <button class="btn btn-primary btn-sm mt-n1" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <a href="{{ route('detail_volume_total') }}" class="btn btn-danger btn-sm mt-n1">
                                        <i class="fa-solid fa-rotate-left"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <h3 class="mt-3 text-center">{{ $yearHeader }}</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered text-center" id="tableTotal">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Bulan</th>
                                        <th>Volume Total</th>
                                        <th>Volume SAP</th>
                                        <th>Volume KAP</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($yearlyTotal as $total)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ Carbon\Carbon::parse($total->tgl)->isoFormat('MMMM Y') }}</td>
                                            <td>{{ $total->volume_total }} Unit</td>
                                            <td>{{ $total->volume_sap }} Unit</td>
                                            <td>{{ $total->volume_kap }} Unit</td>
                                            <td>{{ $total->status }}</td>
                                            <td>
                                                <form action="{{ route('delete_volume_total', $total->id) }}" method="post">
                                                    <a href="{{ route('edit_volume_total', $total->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm confirm-delete"><i class="fa-solid fa-trash-can"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('volumeTotalMDPTable')
<script>
    $(document).ready( function () {
        $('#tableTotal').DataTable({
            dom: 'BflprtipS',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });
    } );
</script>
@endsection

@section('volumeTotalDeleteConfirm')
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
