@extends('layouts.app', ['activePage' => 'sop_adm', 'title' => 'Upload File SOP - PCD', 'header' => __('Upload File SOP')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="px-3 text-start">
                <a href="{{ route('index_vai') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('update_sop_vai', $vai->id) }}" autocomplete="on" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Upload File SOP') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- Photo --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('File') }}</label>
                                <div class="col-sm-7">
                                    <div class="{{ $errors->has('photo') ? ' has-danger' : '' }}">
                                        <input type="hidden" name="oldFile" value="{{ old('path', $vai->path) }}">
                                        <input name="file_sop" id="file_sop" type="file" />
                                        <p class="small-text">(ekstensi yang didukung : .pdf)</p>
                                    </div>
                                </div>
                            </div>

                            {{-- SOP Number --}}
                            {{-- <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('SOP Number') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('sop_code') ? ' has-danger' : '' }}">
                                            <select class="form-select" id="sop_code" name="sop_code">
                                                <option value="" {{ old('sop_code', $vai->sop_code) == '' ? "selected" : ""}}>Pilih Seksi</option>
                                                <option value="01_vai" {{ old('sop_code', $vai->sop_code) == '01_vai' ? "selected" : ""}}>SOP Create DPR Line #1 for Email</option>
                                                <option value="02_vai" {{ old('sop_code', $vai->sop_code) == '02_vai' ? "selected" : ""}}>SOP Create DPR Line #2 for Email</option>
                                                <option value="03_vai" {{ old('sop_code', $vai->sop_code) == '03_vai' ? "selected" : ""}}>SOP DPR for TMMIN</option>
                                                <option value="04_vai" {{ old('sop_code', $vai->sop_code) == '04_vai' ? "selected" : ""}}>SOP Update Data Sequence</option>
                                                <option value="05_vai" {{ old('sop_code', $vai->sop_code) == '05_vai' ? "selected" : ""}}>SOP Update OTD Wos Part Order</option>
                                                <option value="06_vai" {{ old('sop_code', $vai->sop_code) == '06_vai' ? "selected" : ""}}>SOP Update Data VA Out Unit Claim Base on ADLES</option>
                                                <option value="07_vai" {{ old('sop_code', $vai->sop_code) == '07_vai' ? "selected" : ""}}>SOP Update Report Actual Unit Claim</option>
                                                <option value="08_vai" {{ old('sop_code', $vai->sop_code) == '08_vai' ? "selected" : ""}}>SOP Create Undangan Meeting Planning Delivery Bulanan</option>
                                                <option value="09_vai" {{ old('sop_code', $vai->sop_code) == '09_vai' ? "selected" : ""}}>SOP Create Planning Bulanan Delivery Line #1 & #2</option>
                                                <option value="10_vai" {{ old('sop_code', $vai->sop_code) == '10_vai' ? "selected" : ""}}>SOP Update Calender Master PIS Line #1</option>
                                                <option value="11_vai" {{ old('sop_code', $vai->sop_code) == '11_vai' ? "selected" : ""}}>SOP Update Calender Master PIS Line #2</option>
                                                <option value="12_vai" {{ old('sop_code', $vai->sop_code) == '12_vai' ? "selected" : ""}}>SOP Update Over Time Master PIS Line #1</option>
                                                <option value="13_vai" {{ old('sop_code', $vai->sop_code) == '13_vai' ? "selected" : ""}}>SOP Update Over Time Master PIS Line #2</option>
                                                <option value="14_vai" {{ old('sop_code', $vai->sop_code) == '14_vai' ? "selected" : ""}}>SOP Update Planning Andon Master PIS Line #1</option>
                                                <option value="15_vai" {{ old('sop_code', $vai->sop_code) == '15_vai' ? "selected" : ""}}>SOP Update Planning Andon Master PIS Line #2</option>
                                                <option value="16_vai" {{ old('sop_code', $vai->sop_code) == '16_vai' ? "selected" : ""}}>SOP Update Model Master PIS Line #1</option>
                                                <option value="17_vai" {{ old('sop_code', $vai->sop_code) == '17_vai' ? "selected" : ""}}>SOP Update Model Master PIS Line #2</option>
                                                <option value="18_vai" {{ old('sop_code', $vai->sop_code) == '18_vai' ? "selected" : ""}}>SOP Update Destination Master PIS Line #1</option>
                                                <option value="19_vai" {{ old('sop_code', $vai->sop_code) == '19_vai' ? "selected" : ""}}>SOP Update Destination Master PIS Line #2</option>
                                                <option value="20_vai" {{ old('sop_code', $vai->sop_code) == '20_vai' ? "selected" : ""}}>SOP Update Color Master PIS Line #1</option>
                                                <option value="21_vai" {{ old('sop_code', $vai->sop_code) == '21_vai' ? "selected" : ""}}>SOP Update Color Master PIS Line #2</option>
                                                <option value="22_vai" {{ old('sop_code', $vai->sop_code) == '22_vai' ? "selected" : ""}}>SOP Update Tracking Point Master PIS Line #1</option>
                                                <option value="23_vai" {{ old('sop_code', $vai->sop_code) == '23_vai' ? "selected" : ""}}>SOP Bridge Production Rule Master PIS Line #2</option>
                                                <option value="24_vai" {{ old('sop_code', $vai->sop_code) == '24_vai' ? "selected" : ""}}>SOP Create Daily Remaining Unit Run Out Line #1 & #2 per Suffix</option>
                                                <option value="25_vai" {{ old('sop_code', $vai->sop_code) == '25_vai' ? "selected" : ""}}>SOP Create Daily Remaining Unit Run Out Line #1 & #2 per Suffix & Color</option>
                                                <option value="26_vai" {{ old('sop_code', $vai->sop_code) == '26_vai' ? "selected" : ""}}>SOP Create Daily Cek Remaining Unit Run Out Line #1 & #2 per Suffix</option>
                                                <option value="27_vai" {{ old('sop_code', $vai->sop_code) == '27_vai' ? "selected" : ""}}>SOP Create Planning Delivery Base on WOS vs Planning Delivery Bulanan</option>
                                                <option value="28_vai" {{ old('sop_code', $vai->sop_code) == '28_vai' ? "selected" : ""}}>SOP Create Scenario Unit Terakhir Run Out Base on Jig in</option>
                                                <option value="29_vai" {{ old('sop_code', $vai->sop_code) == '29_vai' ? "selected" : ""}}>SOP Kontrol Unit Per Suffix Base on WOS Line #1</option>
                                                <option value="30_vai" {{ old('sop_code', $vai->sop_code) == '30_vai' ? "selected" : ""}}>SOP Update Kontrol Remain Run Out NIK</option>
                                            </select>
                                        @if ($errors->has('sop_code'))
                                        <span id="sop_code-error" class="error text-danger" for="sop_code">{{ $errors->first('sop_code') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-edit-vai"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('sopVAIEditConfirm')
    <script type="text/javascript">
        $('.confirm-edit-vai').click(function(event){
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
