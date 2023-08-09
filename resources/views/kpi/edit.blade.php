@extends('layouts.app', ['activePage' => 'kpi', 'title' => 'Ubah KPI - PCD', 'header' => __('Ubah KPI')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="button">
                    <a href="{{ route('index_kpi') }}" class="btn btn-primary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <form method="post" action="{{ route('update_kpi', $kpi->id) }}" autocomplete="on" class="form-horizontal">
                    @method('PUT')
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Ubah KPI') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- KPI --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('KPI') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('kpi') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('kpi') ? ' is-invalid' : '' }}" name="kpi" id="kpi" type="text" placeholder="{{ __('KPI') }}" value="{{ old('kpi', $kpi->description) }}" required="true" aria-required="true"/>
                                            @if ($errors->has('kpi'))
                                            <span id="kpi-error" class="error text-danger" for="kpi">{{ $errors->first('kpi') }}</span>
                                            @endif
                                    </div>
                                </div>
                            </div>

                            {{-- Status --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Status KPI') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                        <select class="form-select" id="status" name="status">
                                            <option value=""  {{ old('status', $kpi->status) == '' ? "selected" : ""}}>Pilih status</option>
                                            <option value="Belum Tercapai" {{ old('status', $kpi->status) == 'Belum Tercapai' ? "selected" : ""}}>Belum Tercapai</option>
                                            <option value="Sudah Tercapai" {{ old('status', $kpi->status) == 'Sudah Tercapai' ? "selected" : ""}}>Sudah Tercapai</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span id="status-error" class="error text-danger" for="status">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-edit"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('kpiEditConfirm')
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
            }).then((WillEdit) => {
                if (WillEdit.value) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
