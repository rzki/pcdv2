@extends('layouts.app', ['activePage' => 'organization', 'title' => __('Struktur Organisasi - PCD'), 'header' => __('Struktur Organisasi')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="container-fluid">
          <div class="row">
              <div class="col d-flex justify-content-center">
                <img src="{{ asset('assets/img/Organization_Structure(1).png') }}" class="img-fluid" alt="">
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
