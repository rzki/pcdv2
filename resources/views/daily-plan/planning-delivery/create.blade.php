@extends('layouts.app', ['activePage' => 'planning_delivery', 'title' => 'Upload File Planning Delivery - PCD', 'header' => __('Upload File Planning Delivery')])

@section('content')

<div class="content">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="px-3 text-start">
                <a href="{{ route('index_delivery') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <form method="post" action="{{ route('store_delivery') }}" autocomplete="on" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title text-center font-weight-bold">{{ __('Upload File Planning Delivery') }}</h4>
                        </div>
                        <div class="card-body">

                            {{-- File --}}
                            <div class="form-row mx-auto">
                                <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('File') }}</label>
                                <div class="col-sm-7">
                                    <div class="{{ $errors->has('photo') ? ' has-danger' : '' }}">
                                        <input name="file" id="file" type="file" />
                                        <p class="small-text">(ekstensi yang didukung : xls, xlsx, pdf)</p>
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
