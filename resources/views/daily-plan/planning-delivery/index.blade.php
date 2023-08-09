@extends('layouts.app', ['activePage' => 'planning_delivery', 'title' => 'Planning Delivery - PCD', 'header' => __('Planning Delivery')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            {{-- DPR #1 --}}
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('Planning Delivery') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="button-action text-end">
                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC VAI')
                                <a href="{{ route('create_delivery') }}" class="btn btn-success text-uppercase">
                                    <i class="fa-solid fa-upload"></i> Upload
                                </a>
                            @endif
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered text-center" id="planDeliveryTable">
                                <thead class="table-dark">
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama File</th>
                                    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC VAI')
                                    <th>Aksi</th>
                                    @endif
                                </thead>
                                <tbody>
                                    @foreach ($plandelivery as $delivery)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ Carbon\Carbon::now()->format('F Y') }}</td>
                                        <td>
                                            <a href="{{ route('download_delivery', $delivery->id) }}" class="text-black text-decoration-underline">
                                                <i class="fa-solid fa-file"></i>
                                                {{ $delivery->filename }}
                                            </a>
                                        </td>
                                    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC VAI')
                                        <td>
                                            <form action="{{ route('delete_delivery', $delivery->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                                <button class="btn btn-danger confirm-delete">
                                                    <i class="fa-solid fa-trash-can"></i></button>
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

@section('planDeliveryTable')
    <script>
        $(document).ready( function () {
            $('#planDeliveryTable').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('planningDeliveryDeleteConfirm')
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
