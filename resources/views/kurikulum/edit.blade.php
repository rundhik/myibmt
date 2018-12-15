@extends('layouts.template')
@section('judul', 'Edit Kurikulum')

@section('konten')
    
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <div class="m-content">

            <!--Begin::Section-->
            <div class="row">
                <div class="col-xl-12">
                    
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--mobile">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        {{$subheader}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin: Body -->
                        <form class="m-form m-form--fit m-form--label-align-right" action="{{route('kurikulum.update', $data->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Nama Kurikulum</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <input type="text" name="nm_kurikulum" class="form-control m-input" value="{{$data->nm_kurikulum}}">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Program Studi</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <select class="form-control m-input" name="kode_prodi_id">
                                                            @foreach ($prodi as $prod)
                                                            @if ($data->kode_prodi_id === $prod->id)
                                                                <option value="{{$prod->id}}" selected>{{ $prod->deskripsi }}</option>
                                                            @else
                                                                <option value="{{$prod->id}}"> {{ $prod->deskripsi }}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Tahun Akademik</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                <select class="form-control m-input" name="thn_semester_id">
                                                        @foreach ($thnsmt as $thn)
                                                        @if ($data->thn_semester_id === $thn->id)
                                                            <option value="{{$thn->id}}" selected>{{ $thn->deskripsi }}</option>
                                                        @else
                                                        <option value="{{$thn->id}}">{{ $thn->deskripsi }}</option>
                                                        @endif
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions  m-form__actions">
                                            <div class="col-lg-9 ml-lg-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>&nbsp; &nbsp;
                                                <a class="btn btn-secondary" href="{{ route('kurikulum.index') }}">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <!--end: Body -->
                        </div>
                    </div>
                    <!--end::Portlet-->

                </div>
            </div>

            <!--End::Section-->

        </div>
    </div>
</div>

<!-- end::Body -->

@endsection