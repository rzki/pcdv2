@extends('layouts.app', ['activePage' => 'monthly_mdp', 'title' => 'Tambah Data MDP Per Type - PCD', 'header' => __('Tambah Data MDP Per Type')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="px-3 d-flex justify-content-start">
                <a href="{{ route('table_by_type') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('store_per_type') }}" autocomplete="on" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Tambah Data MDP Per Type') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- Tanggal --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Tanggal') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('plan') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="tgl" id="tgl" type="month" placeholder="{{ __('tgl') }}" value="{{ old('tgl', Carbon\Carbon::today()->format('Y-m-d')) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('tgl'))
                                            <span id="tgl-error" class="error text-danger" for="tgl">{{ $errors->first('tgl') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Type --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Type') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                                        <select class="form-select form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" aria-label="Default select example" name="type">
                                            <option value="Xenia" {{ old('type') == 'Xenia' ? "selected" : ""}}>Xenia</option>
                                            <option value="Avanza DOM" {{ old('type') == 'Avanza DOM' ? "selected" : ""}}>Avanza DOM</option>
                                            <option value="Avanza EXP" {{ old('type') == 'Avanza ExP' ? "selected" : ""}}>Avanza ExP</option>
                                            <option value="B-MPV D-Dom" {{ old('type') == 'B-MPV D-Dom' ? "selected" : ""}}>B-MPV D-Dom</option>
                                            <option value="B-MPV T-Dom" {{ old('type') == 'B-MPV T-Dom' ? "selected" : ""}}>B-MPV T-Dom</option>
                                            <option value="Terios" {{ old('type') == 'Terios' ? "selected" : ""}}>Terios</option>
                                            <option value="Rush" {{ old('type') == 'Rush' ? "selected" : ""}}>Rush</option>
                                            <option value="RUSH EXPORT (T-Exp)" {{ old('type') == 'RUSH EXPORT (T-Exp)' ? "selected" : ""}}>RUSH EXPORT (T-Exp)</option>
                                            <option value="D40D DOMESTIC (D-Dom)" {{ old('type') == 'D40D DOMESTIC (D-Dom)' ? "selected" : ""}}>D40D DOMESTIC (D-Dom)</option>
                                            <option value="D16B WAGON  D-Dom" {{ old('type') == 'D16B WAGON  D-Dom' ? "selected" : ""}}>D16B WAGON  D-Dom</option>
                                            <option value="D40D D-Brand Export " {{ old('type') == 'D40D D-Brand Export ' ? "selected" : ""}}>D40D D-Brand Export </option>
                                            <option value="Townlite" {{ old('type') == 'Townlite' ? "selected" : ""}}>Townlite</option>
                                            <option value="TownLite Japan LHD" {{ old('type') == 'TownLite Japan LHD' ? "selected" : ""}}>TownLite Japan LHD</option>
                                            <option value="D40L Daihatsu" {{ old('type') == 'D40L Daihatsu' ? "selected" : ""}}>D40L Daihatsu</option>
                                            <option value="D40L MAZDA" {{ old('type') == 'D40L MAZDA' ? "selected" : ""}}>D40L MAZDA</option>
                                            <option value="AYLA" {{ old('type') == 'AYLA' ? "selected" : ""}}>AYLA</option>
                                            <option value="AGYA" {{ old('type') == 'AGYA' ? "selected" : ""}}>AGYA</option>
                                            <option value="WIGO" {{ old('type') == 'WIGO' ? "selected" : ""}}>WIGO</option>
                                            <option value="ASUV D-Dom" {{ old('type') == 'ASUV D-Dom' ? "selected" : ""}}>ASUV D-Dom</option>
                                            <option value="ASUV T-Tom" {{ old('type') == 'ASUV T-Dom' ? "selected" : ""}}>ASUV T-Dom</option>
                                            <option value="ASUV EXP" {{ old('type') == 'ASUV EXP' ? "selected" : ""}}>ASUV EXP</option>
                                            <option value="D30D D-Dom" {{ old('type') == 'D30D D-Dom' ? "selected" : ""}}>D30D D-Dom</option>
                                            <option value="D30D T-Dom" {{ old('type') == 'D30D T-Dom' ? "selected" : ""}}>D30D T-Dom</option>
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
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="volume" id="volume" type="text" placeholder="{{ __('Volume') }}" value="{{ old('volume') }}" required="true" aria-required="true"/>
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
                                            <option value="SAP" {{ old('plant') == 'SAP' ? "selected" : ""}}>SAP</option>
                                            <option value="KAP" {{ old('plant') == 'KAP' ? "selected" : ""}}>KAP</option>
                                        </select>
                                        @if ($errors->has('plant'))
                                            <span id="plant-error" class="error text-danger" for="input-plant">{{ $errors->first('plant') }}</span>
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

@section('typeCreateConfirm')
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
