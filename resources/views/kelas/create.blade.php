@extends('layouts.template')
@section('judul', 'Tambah Kelas Perkuliahan')

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
                            <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item">
                                        <a href="{{route('kelas.create')}}" class="btn btn-focus m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
                                            <span>
                                                <i class="la la-plus"></i>
                                                <span>Tambah</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-portlet__nav-item"></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="m-portlet__body">
                            <form action="{{route('kelas.index')}}">
                                @csrf
                                @method('GET')
                                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                    <div class="row align-items-center">
                                        <div class="col-xl-12 order-2 order-xl-1">
                                            <div class="form-group m-form__group row align-items-center">
                                                <div class="col-md-3">
                                                    <div class="m-form__group m-form__group--inline">
                                                        <div class="m-form__label">
                                                            <label>Program Studi:</label>
                                                        </div>
                                                        <div class="m-form__control">
                                                            <div class="col-md-12 col-sm-12">
                                                                <select class="form-control m-input" name="prodi_id">
                                                                <option>Pilih Program Studi</option>
                                                                @foreach ($filter['datakrk'] as $krk)
                                                                    @if ($prd == $krk->id)
                                                                        <option value="{{ $krk->id }}" selected>{{ $krk->deskripsi }}</option>
                                                                    @else
                                                                        <option value="{{ $krk->id }}">{{ $krk->deskripsi }}</option> 
                                                                    @endif
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-md-none m--margin-bottom-10"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="m-form__group m-form__group--inline">
                                                        <div class="m-form__label">
                                                            <label>Kurikulum:</label>
                                                        </div>
                                                        <div class="m-form__control">
                                                            <div class="col-md-12 col-sm-12">
                                                                <select class="form-control m-input" name="kurikulum">
                                                                <option selected>Pilih Kurikulum</option>
                                                                @foreach ($filter['datakurikulum'] as $klm)
                                                                    @if ($krk  == $klm->id)
                                                                        <option value="{{ $klm->id }}" selected>{{ $klm->deskripsi }}</option>
                                                                    @else
                                                                        <option value="{{ $klm->id }}">{{ $klm->deskripsi }}</option>
                                                                    @endif
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-md-none m--margin-bottom-10"></div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="m-form__group m-form__group--inline">
                                                        <div class="m-form__label">
                                                            <label>Tahun Akademik:</label>
                                                        </div>
                                                        <div class="m-form__control">
                                                            <div class="col-md-12 col-sm-12">
                                                                <select class="form-control m-input" name="thn_semester_id">
                                                                <option selected>Pilih Tahun Akademik</option>
                                                                @foreach ($filter['datathn'] as $thn)
                                                                    @if ($smt  == $thn->id)
                                                                        <option value="{{ $thn->id }}" selected>{{ $thn->deskripsi }}</option>
                                                                    @else
                                                                        <option value="{{ $thn->id }}">{{ $thn->deskripsi }}</option>
                                                                    @endif
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-md-none m--margin-bottom-10"></div>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <div class="m-form__group m-form__group--inline">
                                                        <div class="m-form__label">
                                                            <button type="submit" class="btn btn-primary">Refresh Data</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--begin: Datatable -->
                            <form class="m-form m-form--fit m-form--label-align-right" action="{{route('kelas.store')}}">
                                    @csrf
                                    @method('POST')
                                    <div class="m-portlet__body">
                                            
                                        <div class="form-group m-form__group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">SKS</label>
                                            <div class="col-lg-4 col-md-9 col-sm-12">
                                                @foreach ($data as $d)
                                                <select class="form-control m-input" name="matakuliah_id">
                                                        <option value="{{MyIBMT\Models\MataKuliah::find($d->matakuliah_id)->id}}}">{{MyIBMT\Models\MataKuliah::find($d->matakuliah_id)->nm_matakuliah}}</option>
                                                </select>
                                                @endforeach
                                            </div>
                                        </div>
                                            
                                        </div>
                                        <div class="m-portlet__foot m-portlet__foot--fit">
                                            <div class="m-form__actions  m-form__actions">
                                                <div class="col-lg-9 ml-lg-auto">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>&nbsp; &nbsp;
                                                    <a class="btn btn-secondary" href="{{ route('matakuliah.prodi', $prodi_id) }}">Batal</a>
                                                </div>
                                            </div>
                                    </div>
                            </form>
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

@push('kelas')
<script>
    $("#kelas").DataTable({
        scrollY:"30vh",
        crollX:!0,
        scrollCollapse:!0,
    });
</script>
@endpush