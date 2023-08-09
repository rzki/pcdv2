@extends('layouts.app', ['activePage' => 'usermanage', 'title' => 'Ubah Data User - PCD', 'header' => __('Ubah Data User')])


@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="button">
                    <a href="{{ route('index_user') }}" class="btn btn-primary">
                        <i class="fa-solid fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <form method="post" action="{{ route('update_user', $usermanage->id) }}" autocomplete="on" class="form-horizontal">
                    @method('PUT')
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Ubah Data User') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- NPK --}}
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('NPK') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('npk') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('npk') ? ' is-invalid' : '' }}" name="npk" id="npk" type="text" placeholder="{{ __('NPK') }}" value="{{ old('npk', $usermanage->npk) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('npk'))
                                            <span id="npk-error" class="error text-danger" for="npk">{{ $errors->first('npk') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Name --}}
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('Nama') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" type="text" placeholder="{{ __('Nama') }}" value="{{ old('name', $usermanage->name) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                            <span id="name-error" class="error text-danger" for="name">{{ $errors->first('name') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Division --}}
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('Divisi') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('division') ? ' has-danger' : '' }}">
                                        <select class="form-select{{ $errors->has('division') ? ' is-invalid' : '' }}" name="division" id="division">
                                            <option value="" {{ old('division', $usermanage->division) == '' ? "selected" : ""}}>Pilih Divisi</option>
                                            <option value="Production Control & Logistics" {{ old('division', $usermanage->division) == 'pcl' ? "selected" : ""}}>Production Control & Logistics</option>
                                        </select>
                                        @if ($errors->has('division'))
                                            <span id="division-error" class="error text-danger" for="division">{{ $errors->first('division') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Department --}}
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('Dept') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('dept') ? ' has-danger' : '' }}">
                                        <select class="form-select{{ $errors->has('dept') ? ' is-invalid' : '' }}" name="dept" id="dept">
                                            <option value="" {{ old('dept', $usermanage->dept) == '' ? "selected" : ""}}>Pilih Department</option>
                                            <option value="Planning Control" {{ old('dept', $usermanage->dept) == 'planning_control' ? "selected" : ""}}>Planning & Control</option>
                                        </select>
                                        @if ($errors->has('dept'))
                                            <span id="dept-error" class="error text-danger" for="dept">{{ $errors->first('dept') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Position --}}
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('Posisi') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('position') ? ' has-danger' : '' }}">
                                        <select class="form-select{{ $errors->has('position') ? ' is-invalid' : '' }}" aria-label="Default select example" name="position">
                                            <option value="" {{ old('position', $usermanage->position) == '' ? "selected" : ""}}>Pilih Posisi</option>
                                            <option value="Team Member" {{ old('position', $usermanage->position) == 'Team Member' ? "selected" : ""}}>Team Member</option>
                                            <option value="Team Leader" {{ old('position', $usermanage->position) == 'Team Leader' ? "selected" : ""}}>Team Leader</option>
                                            <option value="Staff" {{ old('position', $usermanage->position) == 'Staff' ? "selected" : ""}}>Staff</option>
                                            <option value="Foreman" {{ old('position', $usermanage->position) == 'Foreman' ? "selected" : ""}}>Foreman</option>
                                            <option value="Supervisor" {{ old('position', $usermanage->position) == 'Supervisor' ? "selected" : ""}}>Supervisor</option>
                                            <option value="Manager" {{ old('position', $usermanage->position) == 'Manager' ? "selected" : ""}}>Manager</option>
                                            <option value="Dept Head" {{ old('position', $usermanage->position) == 'Dept Head' ? "selected" : ""}}>Dept Head</option>
                                            <option value="Division Head" {{ old('position', $usermanage->position) == 'Division Head' ? "selected" : ""}}>Division Head</option>
                                        </select>
                                        @if ($errors->has('position'))
                                            <span id="position-error" class="error text-danger" for="position">{{ $errors->first('position') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Section --}}
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('Seksi') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('section') ? ' has-danger' : '' }}">
                                        <select class="form-select{{ $errors->has('section') ? ' is-invalid' : '' }}" aria-label="Default select example" name="section">
                                            <option value="" {{(old('section', $usermanage->section) == '' ? "selected" : "")}}>Pilih Seksi</option>
                                            <option value="Central Control Room" {{(old('section', $usermanage->section) == 'Central Control Room' ? "selected" : "")}}>Central Control Room</option>
                                            <option value="Daily Planning" {{ (old('section', $usermanage->section) == 'Daily Planning' ? "selected" : "") }} >Daily Planning</option>
                                            <option value="Vehicle Planning" {{ (old('section', $usermanage->section) == 'Vehicle Planning' ? "selected" : "") }} >Vehicle Planning</option>
                                            <option value="Vehicle Administration & Improvement" {{ (old('section', $usermanage->section) == 'Vehicle Administration & Improvement' ? "selected" : "") }} >Vehicle Administration & Improvement</option>
                                            <option value="Digitalization & Improvement" {{ (old('section', $usermanage->section) == 'Digitalization & Improvement' ? "selected" : "")  }}>Digitalization & Improvement</option>
                                          </select>
                                        @if ($errors->has('section'))
                                            <span id="section-error" class="error text-danger" for="section">{{ $errors->first('section') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Shift --}}
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('Shift') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('shift') ? ' has-danger' : '' }}">
                                        <select class="form-select{{ $errors->has('shift') ? ' is-invalid' : '' }}" aria-label="Default select example" name="shift">
                                            <option value="" {{ (old('shift', $usermanage->shift) == '' ? "selected" : "")}}>Pilih Shift</option>
                                            <option value="Shift" {{ (old('shift', $usermanage->shift) == 'Shift' ? "selected" : "")}}>Shift</option>
                                            <option value="Non-Shift" {{ (old('shift', $usermanage->shift) == 'Non-Shift' ? "selected" : "") }}>Non-Shift</option>
                                          </select>
                                        @if ($errors->has('shift'))
                                            <span id="shift-error" class="error text-danger" for="shift">{{ $errors->first('shift') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Role --}}
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('Role') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }}">
                                        <select class="form-select{{ $errors->has('role') ? ' is-invalid' : '' }}" id="role" name="role">
                                            <option value="" {{ (old('role', $usermanage->role) == '' ? "selected" : "")}}>Pilih Role</option>
                                            <option value="PIC CCR" {{ (old('role', $usermanage->role) == 'PIC CCR' ? "selected" : "")}}>PIC CCR</option>
                                            <option value="PIC VAI" {{ (old('role', $usermanage->role) == 'PIC VAI' ? "selected" : "")}}>PIC VAI</option>
                                            <option value="PIC Vehicle Planning" {{ (old('role', $usermanage->role) == 'PIC Vehicle Planning' ? "selected" : "")}}>PIC Vehicle Planning</option>
                                            <option value="PIC Daily Planning" {{ (old('role', $usermanage->role) == 'PIC Daily Planning' ? "selected" : "")}}>PIC Daily Planning</option>
                                            <option value="Member" {{ (old('role', $usermanage->role) == 'Member' ? "selected" : "")}}>Member</option>
                                            <option value="Line" {{ (old('role', $usermanage->role) == 'Line' ? "selected" : "")}}>Line</option>
                                        </select>
                                        @if ($errors->has('role'))
                                            <span id="role-error" class="error text-danger" for="role">{{ $errors->first('role') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-primary confirm-edit"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('userEditConfirm')
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
