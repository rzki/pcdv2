@extends('layouts.app', ['activePage' => 'best-qcc', 'title' => 'QCC Terbaik - PCD', 'header' => __('QCC Terbaik')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <a href="{{ route('index_att') }}" class="btn btn-primary btn-lg">Absensi Terbaik</a>
                <a href="{{ route('index_ss') }}" class="btn btn-primary btn-lg">SS Terbaik</a>
            </div>
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title font-weight-bold text-center text-uppercase">{{ __('QCC Terbaik') }}</h4>
                    </div>
                    <div class="card-body ">
                        @if (auth()->user()->role == 'admin')
                            <div class="button-action text-end">
                                <a href="{{ route('create_qcc') }}" class="btn btn-success btn-lg">
                                    <i class="fa-solid fa-plus"></i>
                                    QCC Terbaik
                                </a>
                            </div>
                        @endif
                        <div class="row d-flex justify-content-end">
                            <div class="table-responsive px-3">
                                <table class="table table-bordered text-center" id="tableQCC">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Tanggal</th>
                                        @if (auth()->user()->role == 'admin')
                                            <th scope="col">Aksi</th>
                                        @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bestQCC as $qcc)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td style="width:200px">
                                                    <img src="{{ asset('storage/' . $qcc->image) }}" class="img-fluid w-100 h-100" alt="">
                                                </td>
                                                <td>{{ Carbon\Carbon::parse($qcc->tgl)->format('F Y') }}</td>
                                            @if (auth()->user()->role == 'admin')
                                                <td>
                                                    <a class="btn btn-primary" href="{{ route('edit_qcc', $qcc->id) }}"><i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                                                    <form action="{{ route('delete_qcc', $qcc->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf

                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-danger confirm-delete"><i class="fa-solid fa-trash-can"></i> Delete</button>
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
</div>
@endsection

@section('qccTable')
    <script>
        $(document).ready( function () {
            $('#tableQCC').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ],
                "columns": [
                    {"width" : "5%"},
                    null,
                    {"width" : "20%"},
                    {"width" : "20%"}
                ]
            });
        } );
    </script>
@endsection

@section('bestQCCDeleteConfirm')
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
