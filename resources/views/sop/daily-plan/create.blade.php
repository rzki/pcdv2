@extends('layouts.app', ['activePage' => 'sop_adm', 'title' => 'Upload File SOP - PCD', 'header' => __('Upload File SOP')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="px-3 text-start">
                <a href="{{ route('index_dp') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('store_sop_dp') }}" autocomplete="on" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

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
                                                <option value="">Pilih Seksi</option>
                                                <option value="01_dailyplan">SOP Create Concept Plan. By Model & By Line</option>
                                                <option value="02_dailyplan">SOP Create Arrangement Composition Plan</option>
                                                <option value="03_dailyplan">SOP Create Daily Operation Plan</option>
                                                <option value="04_dailyplan">SOP Day & Night Planning</option>
                                                <option value="05_dailyplan">SOP Create Production Planning</option>
                                                <option value="06_dailyplan">SOP Create Rencana Vendor</option>
                                                <option value="07_dailyplan">SOP Create Rencana Vendor Revisi</option>
                                                <option value="08_dailyplan">SOP Create NQC Revisi</option>
                                                <option value="09_dailyplan">SOP Create WOS D40D</option>
                                                <option value="10_dailyplan">SOP Order Part Base On Rencana Produksi</option>
                                                <option value="11_dailyplan">SOP Proses Upload WOS D40D</option>
                                                <option value="12_dailyplan">SOP Re Produksi Unit HRP</option>
                                                <option value="13_dailyplan">SOP Schedule Pembuatan WOS Untuk Support Ordering Anbunka</option>
                                                <option value="14_dailyplan">SOP Update Master Data WOS</option>
                                                <option value="15_dailyplan">SOP Upload WOS D40D to PIS Line #2</option>
                                                <option value="16_dailyplan">SOP Penggunaan Gun Scanner</option>
                                                <option value="17_dailyplan">SOP Proses AOC</option>
                                                <option value="18_dailyplan">SOP Create Delivery WOS</option>
                                                <option value="19_dailyplan">SOP Upload WOS to PIS</option>
                                                <option value="20_dailyplan">SOP Create WOS U-IMV</option>
                                                <option value="21_dailyplan">SOP Penggantian Printer Vehicle Card</option>
                                                <option value="22_dailyplan">SOP Create WOS D14N</option>
                                                <option value="23_dailyplan">SOP Print Out Vehicle Card D40D</option>
                                                <option value="24_dailyplan">SOP Print Out Vehicle Card U-IMV</option>
                                            </select>
                                        @if ($errors->has('sop_code'))
                                        <span id="sop_code-error" class="error text-danger" for="sop_code">{{ $errors->first('sop_code') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-create-dailyplan"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('sopDPCreateConfirm')
    <script type="text/javascript">
        $('.confirm-create-dailyplan').click(function(event){
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
