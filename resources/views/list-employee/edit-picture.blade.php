@extends('layouts.app', ['activePage' => 'birthday-list', 'title' => 'Edit Gambar Pegawai - PCD', 'header' => __('Edit Gambar Pegawai')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="px-3">
                <a href="{{ route('index_employee') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('update_img', $birthday->id) }}" autocomplete="on" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Update Gambar Pegawai') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- Plan --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Photo') }}</label>
                                <div class="col-sm-7">
                                    <div class="{{ $errors->has('photo') ? ' has-danger' : '' }}">
                                        <input type="hidden" name="oldPhoto" value="{{ old('photo',$birthday->photo) }}">
                                        <input name="photo" id="photo" type="file" />
                                        <p class="small-text">(max. 4MB)</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-edit-pic"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('employeeListPicEditConfirm')
    <script type="text/javascript">
        $('.confirm-edit-pic').click(function(event){
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
            }).then((willEdit) => {
                if (willEdit.value) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
