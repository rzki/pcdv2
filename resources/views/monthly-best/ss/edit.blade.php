@extends('layouts.app', ['activePage' => 'best-ss', 'title' => 'Edit Data SS Terbaik - PCD', 'header' => __('Edit Data SS Terbaik')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="button text-center">
                <a href="{{ route('index_ss') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            {{-- SS Terbaik --}}
            <div class="row d-flex justify-content-center">
                {{-- Picture --}}
                <div class="col col-lg-6 col-md-12">
                    <form method="post" action="{{ route('update_ss', $ss->id) }}" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title text-center font-weight-bold">{{ __('Edit Data SS Terbaik') }}</h4>
                            </div>
                        <div class="card-body">
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Profile Picture') }}</label>
                                <div class="col-sm-7 text-center">
                                    @if ($ss->image)
                                    <img src="{{ asset('storage/' . $ss->image) }}" alt="" class="col-lg-7 w-50 h-100">
                                    @else
                                    <img src="{{ asset('storage/daihatsu.png') }}" class="col-lg-7 w-50 h-100" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-7 text-center my-3">
                                    <input type="hidden" name="oldImageSS" value="{{ $ss->image }}">
                                    <input name="image" id="image" type="file" />
                                    <p class="small-text mb-n2">(max. 4MB)</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-end">{{ __('NPK') }}</label>
                                <div class="col col-sm-7 text-center mt-1">
                                    <input class="form-control" name="npk" id="npk" type="text" value="{{ old('npk', $ss->npk) }}">
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label class="col-sm-2 col-form-label d-flex align-items-end">{{ __('Nama') }}</label>
                                <div class="col-sm-7 text-center mt-1">
                                    <input class="form-control" name="name" id="name" type="text" value="{{ old('name', $ss->name) }}">
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label class="col-sm-2 col-form-label d-flex align-items-end">{{ __('Nilai') }}</label>
                                <div class="col-sm-7 text-center mt-1">
                                    <input class="form-control" name="nilai" id="nilai" type="text" value="{{ old('nilai', $ss->nilai) }}">
                                </div>
                            </div>
                            <div class="mx-auto text-center mt-3">
                                <button type="submit" class="btn btn-success confirm-edit"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bestSSEditConfirm')
    <script type="text/javascript">
        $('.confirm-edit').click(function(event){
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
                confirmButtonText: 'Ubah',
                reverseButtons: true
            }).then((WillEdit) => {
                if (WillEdit.value) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
