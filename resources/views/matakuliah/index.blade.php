@extends('layouts.template')
@section('judul', 'Mata Kuliah')

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
                                        <a href="{{route('matakuliah.create', $prodi_id)}}" class="btn btn-focus m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
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

                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="matakuliah">
                                <thead>
                                    <tr>
                                        <th>Kode MK</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Program Studi</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>                                      
                                        <td>{{ $d->kode_mk }}</td>
                                        <td>{{ $d->nm_matakuliah }}</td>
                                        <td>{{ $d->sks }}</td>
                                        <td>{{ MyIBMT\Models\MataKuliah::find($d->id)->prodi->find($d->prodi_id)->deskripsi }}</td>
                                        <td>
                                            <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" href="{{route('matakuliah.edit', $d->id)}}" title="Ubah">
                                                <i class="la la-edit"></i>
                                            </a>
                                            <a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" href="{{route('matakuliah.show', $d->id)}}" title="Hapus">
                                                <i class="la la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Kode MK</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Program Studi</th>
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

@push('matakuliah')
<script>
    $("#matakuliah").DataTable({
        scrollY:"30vh",
        crollX:!0,
        scrollCollapse:!0,
    });
</script>
@endpush