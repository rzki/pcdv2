@extends('layouts.app', ['activePage' => 'ontime_delivery', 'title' => 'Tambah Data OTD SAP - PCD', 'header' => __('Tambah Data OTD SAP')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('otd_sap') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>

                <form method="post" action="{{ route('add_otd_sap') }}" autocomplete="on" class="form-horizontal">
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Tambah Data OTD SAP') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- Name --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Tanggal') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="tgl" id="tgl" type="date" placeholder="{{ __('tgl') }}" value="{{ old('tgl') }}" required="true" aria-required="true"/>
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
                                            <input class="form-control{{ $errors->has('plan') ? ' is-invalid' : '' }}" name="plan" id="plan" type="text" placeholder="{{ __('Plan') }}" value="{{ old('plan') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('plan'))
                                            <span id="plan-error" class="error text-danger" for="plan">{{ $errors->first('plan') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Plan --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('On-Time') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('ot_adv') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('ot_adv') ? ' is-invalid' : '' }}" name="ot_adv" id="ot_adv" type="text" placeholder="{{ __('On-Time') }}" value="{{ old('ot_adv') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('ot_adv'))
                                            <span id="ot_adv-error" class="error text-danger" for="ot_adv">{{ $errors->first('ot_adv') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Plan --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Delay') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('delay') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('delay') ? ' is-invalid' : '' }}" name="delay" id="delay" type="text" placeholder="{{ __('Delay') }}" value="{{ old('delay') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('delay'))
                                            <span id="delay-error" class="error text-danger" for="delay">{{ $errors->first('delay') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-create"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('otdSAPCreateConfirm')
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
