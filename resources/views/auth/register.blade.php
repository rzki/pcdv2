@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Register - Production Control Dept.')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card card-login card-hidden my-auto">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Register') }}</strong></h4>
          </div>
          <div class="card-body ">

            {{-- Name --}}
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa-solid fa-user"></i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>

            {{-- NPK --}}
            <div class="bmd-form-group{{ $errors->has('npk') ? ' has-danger' : '' }} mt-1">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa-solid fa-id-badge"></i>
                    </span>
                  </div>
                  <input type="text" name="npk" class="form-control" placeholder="{{ __('NPK') }}" value="{{ old('npk') }}" required>
                </div>
                @if ($errors->has('npk'))
                  <div id="name-error" class="error text-danger pl-3" for="npk" style="display: block;">
                    <strong>{{ $errors->first('npk') }}</strong>
                  </div>
                @endif
            </div>

            {{-- Email --}}
            {{-- <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-1">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div> --}}

            {{-- Password --}}
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-1">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa-solid fa-key"></i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-1">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa-solid fa-key"></i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>

            {{-- Position --}}
            {{-- <div class="bmd-form-group{{ $errors->has('position') ? ' has-danger' : '' }} text-center mt-0">
                <div class="input-group">
                    <div class="form-group mx-auto width-100">
                        <p for="position" class="col-form-label">Select Position</p>
                        <select class="custom-select form-control text-center" id="position" name="position">
                            <option value="Team Member">Team Member</option>
                            <option value="Team Leader">Team Leader</option>
                            <option value="Staff">Staff</option>
                            <option value="Foreman">Foreman</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Manager">Manager</option>
                            <option value="Division Head">Division Head</option>
                        </select>
                    </div>
                </div>
                @if ($errors->has('position'))
                  <div id="name-error" class="error text-danger pl-3" for="position" style="display: block;">
                    <strong>{{ $errors->first('position') }}</strong>
                  </div>
                @endif
            </div> --}}

            {{-- Section --}}
            {{-- <div class="bmd-form-group{{ $errors->has('section') ? ' has-danger' : '' }} text-center mt-0">
                <div class="input-group">
                    <div class="form-group mx-auto">
                        <p for="section" class="col-form-label">Select Section</p>
                        <select class="custom-select form-control text-center" id="section" name="section">
                            <option value="Central Control Room">Central Control Room</option>
                            <option value="Daily Planning">Daily Planning</option>
                            <option value="Vehicle Planning">Vehicle Planning</option>
                            <option value="Digitalization & Improvement">Digitalization & Improvement</option>
                        </select>
                    </div>
                </div>
                @if ($errors->has('section'))
                    <div id="name-error" class="error text-danger pl-3" for="section" style="display: block;">
                        <strong>{{ $errors->first('section') }}</strong>
                    </div>
                @endif
            </div> --}}

            {{-- Shift --}}
            {{-- <div class="bmd-form-group{{ $errors->has('shift') ? ' has-danger' : '' }} text-center mt-0">
                <div class="input-group">
                    <div class="form-group mx-auto">
                        <p for="shift" class="col-form-label">Select Shift</p>
                        <select class="custom-select form-control text-center" id="shift" name="shift">
                            <option value="Shift">Shift</option>
                            <option value="Non-Shift">Non-Shift</option>
                        </select>
                    </div>
                </div>
                @if ($errors->has('shift'))
                    <div id="name-error" class="error text-danger pl-3" for="shift" style="display: block;">
                        <strong>{{ $errors->first('shift') }}</strong>
                    </div>
                @endif
            </div> --}}

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-link btn-lg text-center">{{ __('Create account') }}</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
