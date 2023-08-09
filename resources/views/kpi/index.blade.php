@extends('layouts.app', ['activePage' => 'kpi', 'title' => __('KPI - PCD'), 'header' => __('KPI')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card card-chart">
                    <div class="card-header card-header-primary text-center">
                        <h3 class="text-center text-uppercase font-weight-bold">Key Performance Index</h3>
                    </div>
                    <div class="card-body">
                        @if (auth()->user()->role == 'admin' || auth()->user()->position == 'dept_head')
                            <div class="button text-end">
                                <a href="{{ route('create_kpi') }}" class="btn btn-success btn-lg">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                            </div>
                        @endif
                        <div class="table-responsive mt-3 ">
                            <table class="table table-bordered table-hover text-center" id="tableKPI">
                                <thead class="table-dark">
                                    <th style="width:50px">No</th>
                                    <th style="width:400px">KPI</th>
                                    <th style="width:100px">Status</th>
                                    @if (auth()->user()->role == 'admin' || auth()->user()->position == 'dept_head')
                                    <th style="width:100px">Aksi</th>
                                    @endif
                                </thead>
                                <tbody>
                                    @foreach ($kpi as $kpi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kpi->description }}</td>
                                            <td>{{ $kpi->status }}</td>
                                            @if (auth()->user()->role == 'admin' || auth()->user()->position == 'dept_head')
                                            <td>
                                                <form action="{{ route('delete_kpi', $kpi->id) }}" method="post">
                                                    <a href="{{ route('edit_kpi', $kpi->id) }}" class="btn btn-primary">
                                                        <i class="fa-solid fa-pen-to-square"></i> Ubah
                                                    </a>
                                                    @method('DELETE')
                                                    @csrf

                                                    <button type="submit" class="btn btn-danger confirm-delete">
                                                        <i class="fa fa-trash-can"></i>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('kpiTable')
    <script>
        $(document).ready( function () {
            $('#tableKPI').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('kpiDeleteConfirm')
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

