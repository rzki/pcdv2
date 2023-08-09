@extends('layouts.app', ['activePage' => 'usermanage', 'title' => 'Tambah User Baru - PCD', 'header' => __('Tambah User Baru')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="button-action">
                <a href="{{ route('index_user') }}" class="btn btn-primary">
                    <i class="fa-solid fa-arrow-left"></i> Kembali
                </a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('store_user') }}" autocomplete="on" class="form-horizontal">
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Tambah User') }}</h4>
                        </div>
                        <div class="card-body">

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

                            {{-- Position --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Posisi') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('position') ? ' has-danger' : '' }}">
                                            <select class="form-select" id="position" name="position">
                                            <option value="">Pilih Posisi</option>
                                            <option value="Team Member">Team Member</option>
                                            <option value="Team Leader">Team Leader</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Foreman">Foreman</option>
                                            <option value="Supervisor">Supervisor</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Dept Head">Dept Head</option>
                                            <option value="Division Head">Division Head</option>
                                            </select>
                                        @if ($errors->has('position'))
                                            <span id="position-error" class="error text-danger" for="position">{{ $errors->first('position') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Section --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Seksi') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('section') ? ' has-danger' : '' }}">
                                            <select class="form-select" id="section" name="section">
                                                <option value="">Pilih Seksi</option>
                                                <option value="Central Control Room">Central Control Room</option>
                                                <option value="Daily Planning">Daily Planning</option>
                                                <option value="Vehicle Planning">Vehicle Planning</option>
                                                <option value="Vehicle Administration & Improvement">Vehicle Administration & Improvement</option>
                                                <option value="Digitalization & Improvement">Digitalization & Improvement</option>
                                            </select>
                                        @if ($errors->has('section'))
                                        <span id="section-error" class="error text-danger" for="section">{{ $errors->first('section') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Shift --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Shift') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('shift') ? ' has-danger' : '' }}">
                                        <select class="form-select" id="shift" name="shift">
                                            <option value="">Pilih Shift</option>
                                            <option value="Shift">Shift</option>
                                            <option value="Non-Shift">Non-Shift</option>
                                        </select>
                                        @if ($errors->has('shift'))
                                            <span id="shift-error" class="error text-danger" for="shift">{{ $errors->first('shift') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Role --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Role') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
                                        <select class="form-select" id="role" name="role">
                                            <option value="">Pilih Role</option>
                                            <option value="PIC CCR">PIC CCR</option>
                                            <option value="PIC VAI">PIC VAI</option>
                                            <option value="PIC Vehicle Planning">PIC Vehicle Planning</option>
                                            <option value="PIC Daily Planning">PIC Daily Planning</option>
                                            <option value="Member">Member</option>
                                            <option value="Line">Line</option>
                                        </select>
                                        @if ($errors->has('role'))
                                            <span id="role-error" class="error text-danger" for="role">{{ $errors->first('role') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-create"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('userCreateConfirm')
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
