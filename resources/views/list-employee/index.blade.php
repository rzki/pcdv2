@extends('layouts.app', ['activePage' => 'birthday-list', 'title' => 'Daftar Pegawai - PCD', 'header' => __('Daftar Pegawai')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h3 class="card-title text-center font-weight-bold">{{ __('Daftar Pegawai PC Dept') }}</h3>
                    </div>
                    <div class="card-body ">
                        <div class="row d-flex justify-content-between align-items-center">
                            @if (auth()->user()->role == 'admin')
                                <div class="col pb-3 text-end">
                                    <a href="{{ route('create_employee') }}" class="btn btn-success btn-lg">
                                        <i class="fa-solid fa-plus"></i>
                                        Data Pegawai
                                    </a>
                                    <button type="button" class="btn btn-success btn-lg -btn-block" data-toggle="modal" data-target="#import">
                                        <i class="fa-solid fa-upload"></i>
                                        Import
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="tableBDay">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">NPK</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Alamat</th>
                                        @if (auth()->user()->role == 'admin')
                                            <th scope="col">Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($birthDay as $bday)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td style="width:200px">
                                                @if (empty($bday->photo))
                                                    <img src="{{ asset('assets/img/daihatsu.png') }}" class="img-fluid w-50 h-50" alt="">
                                                @else
                                                    <img src="{{ asset('storage/'.$bday->photo) }}" class="img-fluid w-50 h-50" alt="">
                                                @endif
                                            </td>
                                            <td>{{ $bday->npk }}</td>
                                            <td>{{ $bday->name }}</td>
                                            <td>{{ Carbon\Carbon::parse($bday->tgl_lahir)->isoFormat('DD MMMM Y') }}</td>
                                            <td>{{ $bday->alamat }}</td>
                                            @if (auth()->user()->role == 'admin')
                                                <td>
                                                    <a href="{{ route('show_employee', $bday->id) }}" class="btn btn-info btn-sm">
                                                        <i class="fa-solid fa-circle-info"></i> Detail
                                                    </a>
                                                    <form action="{{ route('delete_employee', $bday->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger btn-sm confirm-delete">
                                                            <i class="fa-solid fa-trash-can"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
                                    <form action="{{ route('import_employee') }}" method="POST" enctype="multipart/form-data">
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
    </div>
</div>
@endsection

@section('bdayTable')
    <script>
        $(document).ready( function () {
            $('#tableBDay').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('employeeListDeleteConfirm')
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
