@extends('layouts.app', ['activePage' => 'monthly_mdp', 'title' => 'Edit Data MDP Per Model - PCD', 'header' => __('Edit Data MDP Per Model')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="px-3 d-flex justify-content-start">
                <a href="{{ route('table_by_type') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('update_per_model', $model->id) }}" autocomplete="on" class="form-horizontal">
                    @method('put')
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Edit Data MDP Per Model') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- Tanggal --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Tanggal') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('plan') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="tgl" id="tgl" type="month" placeholder="{{ __('tgl') }}" value="{{ old('tgl', Carbon\Carbon::parse($model->tgl)->toDateString()) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('tgl'))
                                            <span id="tgl-error" class="error text-danger" for="tgl">{{ $errors->first('tgl') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Model --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Model') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('model') ? ' has-danger' : '' }}">
                                        <select class="form-select form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" aria-label="Default select example" name="model">
                                            <option value="U-IMV" {{ old('type', $model->model) == 'U-IMV' ? "selected" : ""}}>U-IMV</option>
                                            <option value="B-MPV" {{ old('type', $model->model) == 'B-MPV' ? "selected" : ""}}>B-MPV</option>
                                            <option value="D22D" {{ old('type', $model->model) == 'D22D' ? "selected" : ""}}>D22D</option>
                                            <option value="GRANMAX" {{ old('type', $model->model) == 'GRANMAX' ? "selected" : ""}}>GRANMAX</option>
                                            <option value="D80N" {{ old('type', $model->model) == 'D80N' ? "selected" : ""}}>D80N</option>
                                            <option value="D30D" {{ old('type', $model->model) == 'D30D' ? "selected" : ""}}>D30D</option>
                                            <option value="TERIOS KAP" {{ old('type', $model->model) == 'TERIOS KAP' ? "selected" : ""}}>TERIOS KAP</option>
                                            <option value="RUSH KAP" {{ old('type', $model->model) == 'RUSH KAP' ? "selected" : ""}}>RUSH KAP</option>
                                            <option value="A-SUV" {{ old('type', $model->model) == 'A-SUV' ? "selected" : ""}}>A-SUV</option>
                                        </select>
                                        @if ($errors->has('type'))
                                            <span id="type-error" class="error text-danger" for="input-type">{{ $errors->first('type') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Volume --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Volume') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('volume') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="volume" id="volume" type="text" placeholder="{{ __('Volume') }}" value="{{ old('volume', $model->volume) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('volume'))
                                            <span id="volume-error" class="error text-danger" for="volume">{{ $errors->first('volume') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Plant --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Plant') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('plant') ? ' has-danger' : '' }}">
                                        <select class="form-select form-control{{ $errors->has('plant') ? ' is-invalid' : '' }}" aria-label="Default select example" name="plant">
                                            <option value="SAP" {{ old('plant', $model->plant) == 'SAP' ? "selected" : ""}}>SAP</option>
                                            <option value="KAP" {{ old('plant', $model->plant) == 'KAP' ? "selected" : ""}}>KAP</option>
                                        </select>
                                        @if ($errors->has('plant'))
                                            <span id="plant-error" class="error text-danger" for="input-plant">{{ $errors->first('plant') }}</span>
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
