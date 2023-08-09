@extends('layouts.app', ['activePage' => 'best-attendance', 'title' => 'Edit Data Absensi Terbaik - PCD', 'header' => __('Edit Data Absensi Terbaik')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="button text-center">
                <a href="{{ route('index_att') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            {{-- Profile & Password --}}
            <div class="row d-flex justify-content-center">
                {{-- Picture --}}
                <div class="col col-lg-6 col-md-12">
                    <form method="post" action="{{ route('update_att', $att->id) }}" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title text-center font-weight-bold">{{ __('Edit Data Absensi Terbaik') }}</h4>
                            </div>
                        <div class="card-body">
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Profile Picture') }}</label>
                                <div class="col-sm-7 text-center">
                                    @if ($att->image)
                                    <img src="{{ asset('storage/' . $att->image) }}" alt="" class="col-lg-12">
                                    @else
                                    <img src="{{ asset('storage/daihatsu.png') }}" class="col-lg-12" alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-7 text-center">
                                    <input type="hidden" name="oldImageAtt" value="{{ $att->image }}">
                                    <input name="image" id="image" type="file" />
                                    <p class="small-text">(max. 4MB)</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-end">{{ __('NPK') }}</label>
                                <div class="col col-sm-7 text-center mt-1">
                                    <input class="form-control" name="npk" id="npk" type="text" value="{{ old('npk', $att->npk) }}">
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <label class="col-sm-2 col-form-label d-flex align-items-end">{{ __('Nama') }}</label>
                                <div class="col-sm-7 text-center mt-1">
                                    <input class="form-control" name="name" id="name" type="text" value="{{ old('name', $att->name) }}">
                                </div>
                            </div>
                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-edit"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bestAttEditConfirm')
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
