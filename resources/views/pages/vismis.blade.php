@extends('layouts.app', ['activePage' => 'visimisi', 'title' => __('Visi & Misi - PCD'), 'header' => __('Visi & Misi')])

@section('content')
<div class="content">
  <div class="container-fluid">
    {{-- Visi --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h3 class="card-title text-center text-uppercase font-weight-bold animate__animated animate__flash animate__infinite animate__slower">{{ __('Visi') }}</h3>
                </div>
                <div class="card-body mx-auto">
                    <div class="row">
                        <h3 class="font-weight-bold text-center text-uppercase //">
                            To be Global Production Control with strong culture, happy people, highly motivated and competent people
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Misi --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h3 class="card-title text-center text-uppercase font-weight-bold animate__animated animate__flash animate__infinite animate__slower">{{ __('Misi') }}</h4>
                </div>
                <div class="card-body mx-auto">
                    <div class="row">
                        <div>
                            <h3 class="font-weight-bold font-weight-bold text-justify">
                                1. Excellent Production Control with joyful, happy people and cost competitiveness mindset
                            </h3>
                            <h3 class="font-weight-bold font-weight-bold text-justify">
                                2. Enhance control overlapped project management which can provide Perfect Production Preparation
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
