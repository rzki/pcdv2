@extends('layouts.app', ['activePage' => 'best-attendance', 'title' => 'Tambah Absensi Terbaik - PCD', 'header' => __('Tambah Absensi Terbaik')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="px-3 d-flex justify-content-start">
                <a href="{{ route('index_att') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('store_att') }}" autocomplete="on" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Tambah Absensi Terbaik') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- Gambar --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Gambar') }}</label>
                                <div class="col-sm-7">
                                    <div class="{{ $errors->has('images') ? ' has-danger' : '' }}">
                                            <input class="{{ $errors->has('images') ? ' is-invalid' : '' }}" name="images" type="file" placeholder="{{ __('Upload Gambar') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('images'))
                                            <span id="images-error" class="error text-danger" for="images">{{ $errors->first('images') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- NPK --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('NPK') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('npk') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('npk') ? ' is-invalid' : '' }}" name="npk" id="npk" type="text" placeholder="{{ __('NPK') }}" value="{{ old('npk') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('npk'))
                                            <span id="npk-error" class="error text-danger" for="npk">{{ $errors->first('npk') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Name --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Nama') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" type="text" placeholder="{{ __('Nama') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                            <span id="name-error" class="error text-danger" for="name">{{ $errors->first('name') }}</span>
                                            @endif
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

@section('bestAttCreateConfirm')
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
