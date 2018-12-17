@extends('layouts.template')
@section('judul', 'Kelas Perkuliahan')

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
                                        <form action="{{route('kelas.create')}}">
                                            @csrf
                                            @method('GET')
                                            <input type="hidden" value="{{ $prd }}" name="prodi_id">
                                            <input type="hidden" value="{{ $smt }}" name="thn_semester_id">
                                            <input type="hidden" value="1" name="kurikulum">
                                            <button type="submit" class="btn btn-focus m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
                                                <span >
                                                    <i class="la la-plus"></i>
                                                    <span>Tambah</span>
                                                </span>
                                            </button>
                                        </form>
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
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="kelas">
                                <thead>
                                    <tr>
                                        <th>Kurikulum</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>SKS</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>                                      
                                        <td>{{ MyIBMT\Models\Kurikulum::find($d->kurikulum_id)->nm_kurikulum }}</td>
                                        <td>{{ MyIBMT\Models\MataKuliah::find($d->matakuliah_id)->nm_matakuliah }}</td>
                                        <td>{{ $d->semester }}</td>
                                        <td>{{ MyIBMT\Models\MataKuliah::find($d->matakuliah_id)->sks }}</td>
                                        <td>
                                            <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" href="{{route('kelas.edit', $d->id)}}" title="Ubah">
                                                <i class="la la-edit"></i>
                                            </a>
                                            <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" href="{{route('kelas.show', $d->id)}}" title="Hapus">
                                                <i class="la la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Kurikulum</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>Semester</th>
                                        <th>SKS</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
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