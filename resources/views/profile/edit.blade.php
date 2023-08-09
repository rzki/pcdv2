@extends('layouts.app', ['activePage' => 'profile', 'title' => 'User Profile', 'header' => __('User Profile')])

@section('content')
    <div class="content">
        <div class="container-fluid">

            {{-- Profile & Password --}}
            <div class="row">
                {{-- Biodata --}}
                <div class="col col-lg-4 col-md-12">
                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title text-center font-weight-bold">{{ __('Ubah Profil') }}</h4>
                            </div>
                            <div class="card-body">
                                {{-- NPK --}}
                                <div class="form-row">
                                    <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('NPK') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('npk') ? ' has-danger' : '' }}">
                                                <input class="form-control{{ $errors->has('npk') ? ' is-invalid' : '' }}" name="npk" id="npk" type="text" placeholder="{{ __('NPK') }}" value="{{ old('npk', auth()->user()->npk) }}" required="true" aria-required="true"/>
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
                                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" type="text" placeholder="{{ __('Nama') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
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
                                                <option value="" {{ old('division', auth()->user()->division) == '' ? "selected" : ""}}>Pilih Divisi</option>
                                                <option value="pcl" {{ old('division', auth()->user()->division) == 'pcl' ? "selected" : ""}}>Production Control & Logistics</option>
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
                                                <option value="" {{ old('dept', auth()->user()->dept) == '' ? "selected" : ""}}>Pilih Department</option>
                                                <option value="planning_control" {{ old('dept', auth()->user()->dept) == 'planning_control' ? "selected" : ""}}>Planning & Control</option>
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
                                            {{-- <input class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" id="position" type="position" placeholder="{{ __('Position') }}" value="{{ old('position', auth()->user()->position) }}" required /> --}}
                                            <select class="form-select{{ $errors->has('position') ? ' is-invalid' : '' }}" aria-label="Default select example" name="position">
                                                <option value="" {{ old('position', auth()->user()->position) == '' ? "selected" : ""}}>Pilih Posisi</option>
                                                <option value="team_member" {{ old('position', auth()->user()->position) == 'team_member' ? "selected" : ""}}>Team Member</option>
                                                <option value="team_leader" {{ old('position', auth()->user()->position) == 'team_leader' ? "selected" : ""}}>Team Leader</option>
                                                <option value="staff" {{ old('position', auth()->user()->position) == 'staff' ? "selected" : ""}}>Staff</option>
                                                <option value="foreman" {{ old('position', auth()->user()->position) == 'foreman' ? "selected" : ""}}>Foreman</option>
                                                <option value="spv" {{ old('position', auth()->user()->position) == 'spv' ? "selected" : ""}}>Supervisor</option>
                                                <option value="manager" {{ old('position', auth()->user()->position) == 'manager' ? "selected" : ""}}>Manager</option>
                                                <option value="division_head" {{ old('position', auth()->user()->position) == 'division_head' ? "selected" : ""}}>Division Head</option>
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
                                                <option value="" {{(old('section', auth()->user()->section) == '' ? "selected" : "")}}>Pilih Seksi</option>
                                                <option value="ccr" {{(old('section', auth()->user()->section) == 'ccr' ? "selected" : "")}}>Central Control Room</option>
                                                <option value="daily_plan" {{ (old('section', auth()->user()->section) == 'daily_plan' ? "selected" : "") }} >Daily Planning</option>
                                                <option value="vehicle_plan" {{ (old('section', auth()->user()->section) == 'vehicle_plan' ? "selected" : "") }} >Vehicle Planning</option>
                                                <option value="digital_improve" {{ (old('section', auth()->user()->section) == 'digital_improve' ? "selected" : "")  }}>Digitalization & Improvement</option>
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
                                                <option value="" {{ (old('shift', auth()->user()->shift) == '' ? "selected" : "")}}>Pilih Shift</option>
                                                <option value="shift" {{ (old('shift', auth()->user()->shift) == 'shift' ? "selected" : "")}}>Shift</option>
                                                <option value="non_shift" {{ (old('shift', auth()->user()->shift) == 'non_shift' ? "selected" : "") }}>Non-Shift</option>
                                              </select>
                                            @if ($errors->has('shift'))
                                                <span id="shift-error" class="error text-danger" for="shift">{{ $errors->first('shift') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-auto text-center">
                                    <button type="submit" class="btn btn-success confirm-edit-profile"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Simpan') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Password --}}
                <div class="col col-lg-4 col-md-12">
                    <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title text-center font-weight-bold">{{ __('Ubah Password') }}</h4>
                            </div>
                            <div class="card-body mx-0">
                                <div class="form-row">
                                    <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('Password saat ini') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Password saat ini') }}" value="" required />
                                        @if ($errors->has('old_password'))
                                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('Password Baru') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('Password Baru') }}" value="" required />
                                        @if ($errors->has('password'))
                                            <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center mr-3">{{ __('Konfirmasi Password Baru') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                    <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Konfirmasi Password Baru') }}" value="" required />
                                    </div>
                                </div>
                            </div>
                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-edit-pass"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Simpan') }}</button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Picture --}}
                <div class="col col-lg-4 col-md-12">
                    <form method="post" action="{{ route('profile.img') }}" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Ubah Foto Profil') }}</h4>
                        </div>
                        <div class="card-body ">
                            <div class="form-row">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Pilih Foto Profil') }}</label>
                                <div class="col-sm-7 text-center">
                                    @if (auth()->user()->image)
                                    <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="" class="col-lg-12 rounded-circle">
                                    @else
                                    <img src="{{ asset('storage/daihatsu.png') }}" class="col-lg-12" alt="">
                                    @endif
                                </div>
                                <div class="col-sm-7 text-center">
                                    <input type="hidden" name="oldImage" value="{{ old('image', auth()->user()->image) }}">
                                    <input name="image" id="image" type="file" />
                                    <p class="small-text">(max. 4MB)</p>
                                </div>
                            </div>
                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-edit-pic"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Simpan') }}</button>
                            </div>
                        </div>
                    </form>
                    <form method="post" action="{{ route('profile.imgreset') }}" enctype="multipart/form-data" class="form-horizontal mt-n3">
                        @csrf
                        @method('put')

                        <div class="mx-auto text-center">
                            <input type="hidden" name="oldImage" value="{{ auth()->user()->image }}">
                            <button type="submit" class="btn btn-danger mb-3 confirm-reset-pic" name='resetpic'><i class="fa-solid fa-rotate-left"></i>{{ __(' Reset') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('profileEditConfirm')
    <script type="text/javascript">
        $('.confirm-edit-profile').click(function(event){
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

@section('passwordEditConfirm')
    <script type="text/javascript">
        $('.confirm-edit-pass').click(function(event){
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

@section('pictureEditConfirm')
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

@section('pictureResetConfirm')
    <script type="text/javascript">
        $('.confirm-reset-pic').click(function(event){
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
