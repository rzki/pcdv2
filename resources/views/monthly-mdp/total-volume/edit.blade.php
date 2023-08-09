@extends('layouts.app', ['activePage' => 'monthly_mdp', 'title' => 'Ubah Data Volume Total MDP - PCD', 'header' => __('Ubah Data Volume Total MDP')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="px-3 d-flex justify-content-start">
                <a href="{{ route('detail_volume_total') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('update_volume_total', $total->id) }}" autocomplete="on" class="form-horizontal">
                    @method('put')
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Ubah Data Volume Total MDP ') }}{{ Carbon\Carbon::parse($total->tgl)->isoFormat('MMMM Y') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- Tanggal --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Tanggal') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('plan') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="tgl" id="tgl" type="month" placeholder="{{ __('tgl') }}" value="{{ old('tgl', Carbon\Carbon::parse($total->tgl)->format('m-Y')) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('tgl'))
                                            <span id="tgl-error" class="error text-danger" for="tgl">{{ $errors->first('tgl') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Volume SAP --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Volume SAP') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('volume_sap') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="volume_sap" id="volume_sap" type="text" placeholder="{{ __('Volume SAP') }}" value="{{ old('volume_sap', $total->volume_sap) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('volume_sap'))
                                            <span id="volume_sap-error" class="error text-danger" for="volume_sap">{{ $errors->first('volume_sap') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Volume KAP --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Volume KAP') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('volume_kap') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="volume_kap" id="volume_kap" type="text" placeholder="{{ __('Volume KAP') }}" value="{{ old('volume_kap', $total->volume_kap) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('volume_kap'))
                                            <span id="volume_kap-error" class="error text-danger" for="volume_kap">{{ $errors->first('volume_kap') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Volume --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Volume') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('volume') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="volume_total" id="volume_total" type="text" placeholder="{{ __('Volume Total') }}" value="{{ old('volume_total', $total->volume_total) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('volume'))
                                            <span id="volume-error" class="error text-danger" for="volume">{{ $errors->first('volume') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Status --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Status') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                        <select class="form-select form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" aria-label="Default select example" name="status">
                                            <option value="Actual" {{ old('status', $total->status) == 'Actual' ? "selected" : ""}}>Actual</option>
                                            <option value="OPR" {{ old('status', $total->status) == 'OPR' ? "selected" : ""}}>OPR</option>
                                            <option value="Forecast" {{ old('status', $total->status) == 'Forecast' ? "selected" : ""}}>Forecast</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span id="status-error" class="error text-danger" for="input-status">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-edit">
                                    <i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('volumeTotalEditConfirm')
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
            }).then((willEdit) => {
                if (willEdit.value) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
