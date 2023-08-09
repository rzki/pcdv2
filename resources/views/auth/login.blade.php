@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('PT. ADM - Production Control Dept.')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-5 text-center">
      {{-- <h2 class="font-weight-bold">{{ __('PT. ASTRA DAIHATSU MOTOR') }} </h2>
      <h4 class="font-weight-bold">{{ __(' PLANNING & CONTROL DEPARTMENT') }}</h4> --}}
      {{-- <h2 class="font-weight-bold">{{ __(' ') }} </h2>
      <h4 class="font-weight-bold">{{ __(' ') }}</h4> --}}
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto mt-5">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('User Login') }}</strong></h4>
          </div>
          <div class="card-body">
            <div class="bmd-form-group{{ $errors->has('npk') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa-solid fa-user"></i>
                  </span>
                </div>
                <input type="text" name="npk" class="form-control text-center" placeholder="{{ __('NPK') }}" required>
              </div>
              @if ($errors->has('npk'))
                <div id="npk-error" class="error text-danger pl-3" for="npk" style="display: block;">
                  <strong>{{ $errors->first('npk') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa-solid fa-key"></i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control text-center" placeholder="{{ __('Password') }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg">{{ __('Login') }}</button>
          </div>
          {{-- <div class="button text-center">
              <p>Belum </p>
            <a href="{{ route('register') }}" class="text-black">
                <small>{{ __('Create new account') }}</small>
            </a>
          </div> --}}
        </div>
      </form>
      {{-- <div class="row justify-content-center text-center">
        <div class="col-6">

        </div>
      </div> --}}
    </div>
  </div>
</div>
@endsection
