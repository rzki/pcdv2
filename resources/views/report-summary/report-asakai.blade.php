@extends('layouts.app', ['activePage' => 'report-asakai', 'title' => 'Report Asakai - PCD', 'header' => __('Report Asakai')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Report Asakai') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-end">
                        @if(auth()->user()->role == 'admin' || auth()->user()->role == 'PIC CCR')
                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#importReportAsakai">
                                <i class="fa-solid fa-upload"></i>
                                Upload
                            </button>
                        @endif
                        </div>
                        <p class="text-muted font-italic">* klik nama file untuk melihat atau mengunduh</p>
                        <div class="row mt-3 px-1">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="asakaiTable">
                                    <thead class="table-dark">
                                        <th class="font-weight-bold text-center" style="width: 50px">No</th>
                                        <th class="font-weight-bold text-center" style="width: 100px">Tanggal</th>
                                        <th class="font-weight-bold text-center" style="width: 375px">Nama File</th>
                                        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC CCR')
                                        <th class="font-weight-bold text-center" style="width: 50px">Aksi</th>
                                        @endif
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($reportAsakai as $asakai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ Carbon\Carbon::parse($asakai->tgl)->isoFormat('MMMM Y') }}</td>
                                                <td>
                                                    <a href="{{ route('download_asakai', $asakai->id) }}" class="text-black text-decoration-underline" target="_blank">
                                                        {{ $asakai->filename }} <i class="fa-solid fa-file"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC CCR')
                                                        <form action="{{ route('delete_asakai', $asakai->id) }}" method="post">
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
                        <div class="modal fade" id="importReportAsakai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Upload File Report Asakai</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('import_asakai') }}" method="POST" enctype="multipart/form-data">
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

@section('asakaiTable')
<script>
    $(document).ready( function () {
        $('#asakaiTable').DataTable({
            dom: 'BflprtipS',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });
    } );
</script>
@endsection

@section('asakaiDeleteConfirm')
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
