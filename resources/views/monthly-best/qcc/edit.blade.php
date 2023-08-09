@extends('layouts.app', ['activePage' => 'best-qcc', 'title' => 'Edit Data QCC Terbaik - PCD', 'header' => __('Edit Data QCC Terbaik')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="button text-center">
                <a href="{{ route('index_qcc') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            {{-- SS Terbaik --}}
            <div class="row d-flex justify-content-center">
                {{-- Picture --}}
                <div class="col col-lg-6 col-md-12">
                    <form method="post" action="{{ route('update_qcc', $qcc->id) }}" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Edit Data QCC Terbaik') }}</h4>
                        </div>
                        <div class="card-body ">
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Profile Picture') }}</label>
                                <div class="col-sm-7 text-center">
                                    @if ($qcc->image)
                                    <img src="{{ asset('storage/' . $qcc->image) }}" alt="" class="col-lg-7">
                                    @else
                                    <img src="{{ asset('storage/daihatsu.png') }}" class="col-lg-7" alt="">
                                    @endif
                                </div>
                                <div class="col-sm-7 text-center mt-3">
                                    <input type="hidden" name="oldImageQCC"  id="oldImageQCC" value="{{ old('image', $qcc->image) }}">
                                    <input type="file" name="image" id="image">
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

@section('bestQCCEditConfirm')
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
