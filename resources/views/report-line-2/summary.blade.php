@extends('layouts.app', ['activePage' => 'summary2', 'title' => 'Summary Problem Prod. Report Line #2 - PCD', 'header' => __('Summary Problem Prod. Report Line #2')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="text-center">
            <a href="{{ route('index_daily2') }}" class="btn btn-primary text-center">Daily Production Report</a>
            <a href="{{ route('index_hourly2') }}" class="btn btn-primary text-center">Hourly Running Unit</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Summary Problem Prod. Report L#2') }}</h4>
                    </div>
                    <div class="card-body">
                        @if (auth()->user()->role == 'admin' || auth()->user()->role =='pic')
                            <div class="text-end">
                                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#importSummaryL2">
                                    <i class="fa-solid fa-upload"></i>
                                    Upload
                                </button>
                            </div>
                        @endif
                        <div class="row mt-3 px-1">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="summaryReportL2Table">
                                    <thead>
                                        <th class="font-weight-bold text-center" style="width: 50px">No</th>
                                        <th class="font-weight-bold text-center" style="width: 100px">Tanggal</th>
                                        <th class="font-weight-bold text-center" style="width: 375px">Nama File</th>
                                        <th class="font-weight-bold text-center" style="width: 50px">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($summaryL2 as $summary)
                                            <tr class="text-center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ Carbon\Carbon::parse($summary->tgl)->isoFormat('MMMM Y') }}</td>
                                                <td>
                                                    <a href="{{ route('download_summary2', $summary->id) }}" target="_blank" class="text-decoration-underline text-black">
                                                        <i class="fa-solid fa-file"></i> {{ $summary->filename }}
                                                    </a>
                                                </td>
                                            @if(auth()->user()->role == 'admin' || auth()->user()->role == 'PIC CCR')
                                                <td>
                                                    <form action="{{ route('delete_summary2', $summary->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf

                                                        <button type="submit" class="btn btn-outline-danger confirm-delete"><i class="fa-solid fa-trash-can"></i></button>
                                                    </form>
                                                </td>
                                            @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- modal -->
                        <div class="modal fade" id="importSummaryL2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Upload File Summary Report L#2</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('import_summary2') }}" method="POST" enctype="multipart/form-data">
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

@section('summaryReportL2Table')
    <script>
        $(document).ready( function () {
            $('#summaryReportL2Table').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('summaryReportL2DeleteConfirm')
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
