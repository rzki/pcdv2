@extends('layouts.app', ['activePage' => 'birthday-list', 'title' => 'Detail Pegawai - PCD', 'header' => __('Detail Pegawai')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <a href="{{ route('index_employee') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        <div class="row">
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-dark" style="color: black;">
                        <h3 class="card-title text-center font-weight-bold">{{ __('Detail Pegawai') }}</h3>
                    </div>
                    <div class="card-body mx-3">
                        <div class="row justify-content-end">
                            @if (auth()->user()->role == 'admin')
                                <div class="button text-end">
                                    <a href="{{ route('edit_employee', $birthday->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Data Pegawai</a>
                                    <a href="{{ route('edit_employee_pic', $birthday->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Gambar</a>
                                </div>
                            @endif
                        </div>
                        <div class="row justify-content-center mt-2">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    @if (empty($birthday->photo))
                                        <img src="{{ asset('storage/daihatsu.png') }}" class="img-fluid w-50 h-50" alt="">
                                    @else
                                        <img src="{{ asset('storage/'.$birthday->photo) }}" class="img-fluid w-50 h-50" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="my-auto text-center">

                                    <h3>Informasi Detail Pegawai</h3>
                                    <hr class="solid">
                                    <div class="text-left">
                                        <h5><b>NPK &ensp;&ensp;&ensp;: &emsp;{{ $birthday->npk }}</b></h5>
                                        <h5><b>Nama &ensp;&nbsp;: &emsp;{{ $birthday->name }}</b></h5>
                                        <h5><b>DOB &emsp;&ensp;: &emsp;{{ $birthday->tgl_lahir }}</b></h5>
                                        <h5><b>Alamat &nbsp;: &emsp;{{ $birthday->alamat }}</b></h5>
                                    </div>
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
