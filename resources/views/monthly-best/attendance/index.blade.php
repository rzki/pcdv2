@extends('layouts.app', ['activePage' => 'best-attendance', 'title' => 'Absensi Terbaik - PCD', 'header' => __('Absensi Terbaik')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <a href="{{ route('index_ss') }}" class="btn btn-primary btn-lg">SS Terbaik</a>
                <a href="{{ route('index_qcc') }}" class="btn btn-primary btn-lg">QCC Terbaik</a>
            </div>

            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title font-weight-bold text-center text-uppercase">{{ __('Absensi Terbaik') }}</h4>
                    </div>
                    <div class="card-body ">
                        @if (auth()->user()->role == 'admin')
                            <div class="button-action text-end">
                                <a href="{{ route('create_att') }}" class="btn btn-success btn-lg ">
                                    <i class="fa-solid fa-plus"></i>
                                    Absensi Terbaik
                                </a>
                            </div>
                        @endif
                        <div class="row d-flex justify-content-end">
                            <div class="table-responsive px-3">
                                <table class="table table-bordered text-center" id="tableAtt">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">NPK</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Bulan</th>
                                        @if (auth()->user()->role == 'admin')
                                            <th scope="col">Aksi</th>
                                        @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bestAtt as $att)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td style="width:200px">
                                                <img src="{{ asset('storage/' . $att->image) }}" class="img-fluid w-100 h-100" alt="">
                                            </td>
                                            <td>{{ $att->npk }}</td>
                                            <td>{{ $att->name }}</td>
                                            <td>{{ Carbon\Carbon::parse($att->tgl)->format('F Y') }}</td>
                                        @if (auth()->user()->role == 'admin')
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('edit_att', $att->id) }}"><i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                                                <form action="{{ route('delete_att', $att->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf

                                                    <button type="submit" class="btn btn-danger confirm-delete"><i class="fa-solid fa-trash-can"></i></button>
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

@section('attTable')
    <script>
        $(document).ready( function () {
            $('#tableAtt').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('bestAttDeleteConfirm')
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
