@extends('layouts.app', ['activePage' => 'kpi', 'title' => 'Tambah Assy Line #1 - PCD', 'header' => __('Tambah Assy Line #1')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="button">
                    <a href="{{ route('monthly_1') }}" class="btn btn-primary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <form method="post" action="{{ route('store_assy1') }}" autocomplete="on" class="form-horizontal">
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Tambah Assy Line #1') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- Tanggal --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Tanggal') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('plan') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="tgl" id="tgl" type="date" placeholder="{{ __('tgl') }}" value="{{ old('tgl', Carbon\Carbon::today()->format('m-Y')) }}" required="true" aria-required="true"/>
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

                            {{-- Actual --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('actual') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('actual') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('actual') ? ' is-invalid' : '' }}" name="actual" id="actual" type="text" placeholder="{{ __('Actual') }}" value="{{ old('actual') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('actual'))
                                            <span id="actual-error" class="error text-danger" for="actual">{{ $errors->first('actual') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Shift --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Shift') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('shift') ? ' has-danger' : '' }}">
                                        <select class="form-select" id="shift" name="shift">
                                            <option value="">Pilih Shift</option>
                                            <option value="day">Day</option>
                                            <option value="night">Night</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span id="status-error" class="error text-danger" for="status">{{ $errors->first('status') }}</span>
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

@section('kpiCreateConfirm')
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
