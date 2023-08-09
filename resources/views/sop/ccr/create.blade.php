@extends('layouts.app', ['activePage' => 'sop_adm', 'title' => 'Upload File SOP CCR - PCD', 'header' => __('Upload File SOP CCR')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="px-3 text-start">
                <a href="{{ route('index_ccr') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('store_sop_ccr') }}" autocomplete="on" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Upload File SOP CCR') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- Photo --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('File') }}</label>
                                <div class="col-sm-7">
                                    <div class="{{ $errors->has('photo') ? ' has-danger' : '' }}">
                                        <input name="file_sop" id="file_sop_ccr" type="file" />
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
                                                <option value="01_ccr">1. Update DPR 00 Line #1</option>
                                                <option value="02_ccr">2. Update DPR 00 Line #2</option>
                                                <option value="03_ccr">3. Distribusi Data Delay Unit Line #1</option>
                                                <option value="04_ccr">4. Distribusi Data Delay Unit Line #2</option>
                                                <option value="05_ccr">5. Update Hourly Production</option>
                                                <option value="06_ccr">6. Update Hourly Running Unit Line #1</option>
                                                <option value="07_ccr">7. Update Hourly Running Unit Line #2</option>
                                                <option value="08_ccr">8. Report DPR Asakai Problem Line #1</option>
                                                <option value="09_ccr">9. Report DPR Asakai Problem Line #2</option>
                                                <option value="10_ccr">10. Upload Hourly Prod. ke Production Board</option>
                                                <option value="11_ccr">11. Update Summary Delay</option>
                                                <option value="12_ccr">12. Info Jam - Jaman Painting Line #1</option>
                                                <option value="13_ccr">13. Info Jam - Jaman Painting Line #2</option>
                                                <option value="14_ccr">14. Proses Unit Pending Welding</option>
                                                <option value="15_ccr">15. Proses Unit Pending PBS</option>
                                                <option value="16_ccr">16. Proses Reproses Welding</option>
                                                <option value="17_ccr">17. Update Wip Welding Line #1</option>
                                                <option value="18_ccr">18. Update Wip Welding Line #2</option>
                                                <option value="19_ccr">19. Update Problem Part Painting</option>
                                                <option value="20_ccr">20. Update Wip Painting Line #1</option>
                                                <option value="21_ccr">21. Update Wip Painting Line #2</option>
                                                <option value="22_ccr">22. Update Wip PBS Line #1</option>
                                                <option value="23_ccr">23. Update Wip PBS Line #2</option>
                                                <option value="24_ccr">24. Update Wip Assy Line #1</option>
                                                <option value="25_ccr">25. Update Wip Assy Line #2</option>
                                                <option value="26_ccr">26. Update Wip Running Unit Line #1</option>
                                                <option value="27_ccr">27. Update Wip Running Unit Line #2</option>
                                                <option value="28_ccr">28. Update Jam-Jaman Board Line #1</option>
                                                <option value="29_ccr">29. Update Jam-Jaman Board Line #2</option>
                                            </select>
                                        @if ($errors->has('sop_code'))
                                        <span id="sop_code-error" class="error text-danger" for="sop_code">{{ $errors->first('sop_code') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}

                            <div class="mx-auto text-center">
                                <button type="submit" class="btn btn-success confirm-create-ccr"><i class="fa-solid fa-floppy-disk"></i>{{ __(' Save') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('sopCCRCreateConfirm')
    <script type="text/javascript">
        $('.confirm-create-ccr').click(function(event){
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
