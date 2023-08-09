@extends('layouts.app', ['activePage' => 'best-qcc', 'title' => 'Tambah QCC Terbaik - PCD', 'header' => __('Tambah QCC Terbaik')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="px-3 d-flex justify-content-start">
                <a href="{{ route('index_qcc') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('store_qcc') }}" autocomplete="on" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Tambah QCC Terbaik') }}</h4>
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

@section('bestQCCCreateConfirm')
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
