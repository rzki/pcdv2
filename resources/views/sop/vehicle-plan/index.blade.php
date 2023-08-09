@extends('layouts.app', ['activePage' => 'sop_adm', 'title' => 'SOP Section - PCD', 'header' => __('SOP Section')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            {{-- DPR #1 --}}
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title text-center text-uppercase font-weight-bold">{{ __('SOP Section') }}</h4>
                    </div>
                    <div class="card-body">
                        @if (auth()->user()->role == 'admin' || auth()->user()->role =='PIC CCR' || auth()->user()->role =='PIC Daily Planning' || auth()->user()->role =='PIC Vehicle Planning' || auth()->user()->role =='PIC VAI')
                            <div class="button text-center">
                                @if (auth()->user()->role == 'admin' || auth()->user()->role =='PIC Vehicle Planning')
                                    <a href="{{ route('create_sop_vp') }}" class="btn btn-success btn-lg"><i class="fa-solid fa-upload"></i> Vehicle Planning</a>
                                @endif
                            </div>
                        @endif
                        <div class="row justify-content-center">
                            <p class="text-muted font-italic">* klik nama file untuk melihat atau mengunduh</p>
                            {{-- Vehicle Planning --}}
                            <div class="col col-lg-8">
                                <h3 class="font-weight-bold text-center text-uppercase">Vehicle Planning</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="vehiclePlanTable">
                                        <thead class="text-center">
                                            <th style="width:50px">No</th>
                                            <th>Nama File</th>
                                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC Vehicle Planning')
                                            <th>Aksi</th>
                                            @endif
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($vehiclePlanSOP as $vehicle)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <a href="{{ route('view_sop_vp', $vehicle->id) }}" target="_blank" class="text-decoration-underline text-black">
                                                            <i class="fa-solid fa-file"></i> {{ $vehicle->filename }}
                                                        </a>
                                                    </td>
                                                    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'PIC Vehicle Planning')
                                                    <td>
                                                        <form action="{{ route('delete_sop_vp', $vehicle->id) }}" method="post">
                                                            <a href="{{ route('edit_sop_vp', $vehicle->id) }}" class="btn btn-primary btn-sm">
                                                                <i class="fa-solid fa-pen-to-square"></i> Update
                                                            </a>
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-sm confirm-delete3"><i class="fa-solid fa-trash-can"></i> Hapus</button>
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
</div>
@endsection

@section('vehiclePlanTable')
    <script>
        $(document).ready( function () {
            $('#vehiclePlanTable').DataTable({
                dom: 'flprtipS',
                "searching": false,
            });
        } );
    </script>
@endsection

@section('sopVPDeleteConfirm')
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
