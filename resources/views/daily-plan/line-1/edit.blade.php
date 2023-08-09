@extends('layouts.app', ['activePage' => 'daily_prodplan_l1', 'title' => 'Edit Data Planning Prod. Harian / Shift L#1 - PCD', 'header' => __('Edit Data Planning Prod. Harian / Shift L#1')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="px-3 text-start">
                <a href="{{ route('index_l1') }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('update_l1', $line1->id) }}" autocomplete="on" class="form-horizontal">
                    @csrf
                    @method('put')

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Edit Data Daily Production Line #1') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- Tanggal --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Tanggal') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('plan') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="tgl" id="tgl" type="date" placeholder="{{ __('tgl') }}" value="{{ old('tgl', Carbon\Carbon::parse($line1->tgl)->toDateString()) }}">
                                            @if ($errors->has('tgl'))
                                            <span id="tgl-error" class="error text-danger" for="tgl">{{ $errors->first('tgl') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Plan --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Plan') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('plan') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="plan" id="plan" type="text" placeholder="{{ __('Plan') }}" value="{{ old('plan',$line1->plan) }}">
                                            @if ($errors->has('plan'))
                                            <span id="plan-error" class="error text-danger" for="plan">{{ $errors->first('plan') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Actual --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Actual') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('actual') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('actual') ? ' is-invalid' : '' }}" name="actual" id="actual" type="text" placeholder="{{ __('Actual') }}" value="{{ old('actual',$line1->actual) }}">
                                            @if ($errors->has('actual'))
                                            <span id="actual-error" class="error text-danger" for="actual">{{ $errors->first('actual') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('tglL1')
<script>

</script>
@endsection
