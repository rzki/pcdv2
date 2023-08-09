@extends('layouts.app', ['activePage' => 'birthday-list', 'title' => 'Tambah Data Pegawai - PCD', 'header' => __('Tambah Data Pegawai')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="button">
                <a href="{{ route('index_employee') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('store_employee') }}" autocomplete="on" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Tambah Data Pegawai') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- NPK --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('NPK') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('npk') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('npk') ? ' is-invalid' : '' }}" name="npk" id="npk" type="text" placeholder="{{ __('npk') }}" value="{{ old('npk') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('npk'))
                                            <span id="npk-error" class="error text-danger" for="npk">{{ $errors->first('npk') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Name --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" type="text" placeholder="{{ __('name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                            <span id="name-error" class="error text-danger" for="name">{{ $errors->first('name') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Tanggal Lahir --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Tanggal Lahir') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('tgl_lahir') ? ' is-invalid' : '' }}" name="tgl_lahir" id="tgl_lahir" type="date" placeholder="{{ __('tgl_lahir') }}" value="{{ old('tgl_lahir', Carbon\Carbon::today()->format('Y-m-d')) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('tgl_lahir'))
                                            <span id="tgl_lahir-error" class="error text-danger" for="tgl">{{ $errors->first('tgl') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Alamat --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Alamat') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" id="alamat" type="text" placeholder="{{ __('alamat') }}" value="{{ old('alamat') }}" required="true" aria-required="true">
                                        @if ($errors->has('alamat'))
                                            <span id="alamat-error" class="error text-danger" for="alamat">{{ $errors->first('alamat') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Photo --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Photo') }}</label>
                                <div class="col-sm-7">
                                    <div class="{{ $errors->has('photo') ? ' has-danger' : '' }}">
                                        <input name="photo" id="photo" type="file" />
                                        <p class="small-text">(max. 4MB)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-create"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('employeeListCreateConfirm')
    <script type="text/javascript">
        $('.confirm-create').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: 'Apakah data yang dimasukkan sudah benar?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#009200',
                cancelButtonColor: '#0d6efd',
                cancelButtonText: 'Batalkan',
                confirmButtonText: 'Tambah',
                reverseButtons: true
            }).then((willCreate) => {
                if (willCreate.value) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
