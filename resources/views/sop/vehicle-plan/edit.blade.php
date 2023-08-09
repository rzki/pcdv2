@extends('layouts.app', ['activePage' => 'sop_adm', 'title' => 'Upload File SOP - PCD', 'header' => __('Upload File SOP')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="px-3 text-start">
                <a href="{{ route('index_vp') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('update_sop_vp', $vp->id) }}" autocomplete="on" class="form-horizontal" enctype="multipart/form-data">
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
                                        <input type="hidden" name="oldFile" value="{{ old('path',$vp->path) }}">
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
                                                <option value="01_vehicleplan">1. SOP Upload VLT to TMMIN</option>
                                                <option value="02_vehicleplan">2. SOP Generate VIN AI ( Daily )</option>
                                                <option value="03_vehicleplan">3. SOP Generate VIN TMMIN ( Daily )  </option>
                                                <option value="04_vehicleplan">4. Donwload VLT for TMMIN With VIN  </option>
                                                <option value="05_vehicleplan">5. Download WOS Daily All Model  </option>
                                                <option value="06_vehicleplan">6. SOP Alokasi Unit Batam  </option>
                                                <option value="07_vehicleplan">7. SOP Change Data Colour di SAP Logon  </option>
                                                <option value="08_vehicleplan">8. SOP Create Template Daily WOS for TMMIN  </option>
                                                <option value="09_vehicleplan">9. SOP Create Template Daily WOS  </option>
                                                <option value="10_vehicleplan">10. SOP Create WOS All Model</option>
                                                <option value="11_vehicleplan">11. SOP Donwload VLT System</option>
                                                <option value="12_vehicleplan">12. SOP Donwload WOS Monthly</option>
                                                <option value="13_vehicleplan">13. SOP Proses Additional WOS</option>
                                                <option value="14_vehicleplan">14. SOP Running Template WOS All Model</option>
                                                <option value="15_vehicleplan">15. SOP Running WOS All By Suffix</option>
                                                <option value="16_vehicleplan">16. SOP Update Sales Result</option>
                                                <option value="17_vehicleplan">17. SOP Upload System ( DOM )</option>
                                                <option value="18_vehicleplan">18. SOP Upload WOS to SAP System ( DOM Only )</option>
                                                <option value="19_vehicleplan">19. SOP Upload WOS to SAP System ( Export Only )</option>
                                                <option value="20_vehicleplan">20. SOP Send VIN to AI</option>
                                                <option value="21_vehicleplan">21. Receive VLT data from TMMIN ( Irwan )</option>
                                                <option value="22_vehicleplan">22. SOP Create MPP</option>
                                                <option value="23_vehicleplan">23. SOP Donwload NIK AI - DSO </option>
                                                <option value="24_vehicleplan">24. SOP Model Code Change </option>
                                                <option value="25_vehicleplan">25. SOP Pro Shell Body Plant 4</option>
                                                <option value="26_vehicleplan">26. SOP Production Order</option>
                                                <option value="27_vehicleplan">27. SOP Production Order Project </option>
                                                <option value="28_vehicleplan">28. SOP Update MPP Text to MDP Ordering</option>
                                            </select>
                                        @if ($errors->has('sop_code'))
                                        <span id="sop_code-error" class="error text-danger" for="sop_code">{{ $errors->first('sop_code') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-edit-vehiicleplan"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('sopVPEditConfirm')
    <script type="text/javascript">
        $('.confirm-edit-vehiicleplan').click(function(event){
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
