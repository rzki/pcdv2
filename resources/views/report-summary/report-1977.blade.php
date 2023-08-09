@extends('layouts.app', ['activePage' => 'report-1977', 'title' => 'Report Achievement Delivery 1977 - PCD', 'header' => __('Report Achievement Delivery 1977')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Report Achievement Delivery 1977') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-end">
                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#importReport1977">
                                <i class="fa-solid fa-upload"></i>
                                Upload
                            </button>
                        </div>
                        <p class="text-muted font-italic">* klik nama file untuk melihat atau mengunduh</p>
                        <div class="row mt-3 px-1">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="report77Table">
                                    <thead class="table-dark">
                                        <th class="font-weight-bold text-center" style="width: 50px">No</th>
                                        <th class="font-weight-bold text-center" style="width: 100px">Tanggal</th>
                                        <th class="font-weight-bold text-center" style="width: 375px">Nama File</th>
                                        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC CCR')
                                        <th class="font-weight-bold text-center" style="width: 50px">Aksi</th>
                                        @endif
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($report1977 as $report1977)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ Carbon\Carbon::parse($report1977->tgl)->isoFormat('MMMM Y') }}</td>
                                                <td>
                                                    <a href="{{ route('download_1977', $report1977->id) }}" class="text-black text-decoration-underline" target="_blank">
                                                        {{ $report1977->filename }} <i class="fa-solid fa-file"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC CCR')
                                                        <form action="{{ route('delete_1977', $report1977->id) }}" method="post">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">

                                                            <button type="submit" class="btn btn-danger sm-1 confirm-delete"><i class="fa-solid fa-trash-can"></i></button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- modal -->
                        <div class="modal fade" id="importReport1977" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Upload File Report Achievement Delivery 1977</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('import_1977') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile" name="file">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                <small class="text-muted ml-3">(Format file yang didukung : .xlsx, .xls, .pdf)</small>
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

@section('report77Table')
<script>
    $(document).ready( function () {
        $('#report77Table').DataTable({
            dom: 'BflprtipS',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });
    } );
</script>
@endsection

@section('report77DeleteConfirm')
    <script type="text/javascript">
        $('.confirm-delete').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: 'Yakin ingin menghapus file?',
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
