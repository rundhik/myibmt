@extends('layouts.template')
@section('judul', 'Kurikulum')

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
                                        <a href="#" class="btn btn-focus m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
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

                            <!--begin: Search Form -->
                            <form class="m-form m-form--fit m--margin-bottom-20">
                                <div class="row m--margin-bottom-20">
                                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                        <label>Program Studi:</label>
                                        <select class="form-control m-input">
                                        @foreach ($prodi as $p)
                                        <option value="{{$p->deskripsi}}">{{$p->deskripsi}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                        <label>Tahun Akademik :</label>
                                        <select class="form-control m-input">
                                                @foreach ($thnsmt as $t)
                                                <option value="{{$t->deskripsi}}">{{$t->deskripsi}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 m--margin-bottom-10-tablet-and-mobile">
                                        <div class="col-lg-12">&nbsp;</div>
                                        <button class="btn btn-brand m-btn m-btn--icon for" id="m_search">
                                            <span>
                                                <i class="la la-search"></i>
                                                <span>Search</span>
                                            </span>
                                        </button>
                                        &nbsp;&nbsp;
                                        <button class="btn btn-secondary m-btn m-btn--icon" id="m_reset">
                                            <span>
                                                <i class="la la-close"></i>
                                                <span>Reset</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="m-separator m-separator--md m-separator--dashed"></div>
                            </form>

                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable">
                                <thead>
                                    <tr>
                                        <th>Tahun Akademik</th>
                                        <th>Program Studi</th>
                                        <th>Nama Kurikulum</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>                                      
                                        <td>{{ MyIBMT\Models\Kurikulum::find($d->id)->thn_semester->deskripsi }}</td>
                                        <td>{{ MyIBMT\Models\Kurikulum::find($d->id)->prodi->deskripsi }}</td>
                                        <td>{{ $d->nm_kurikulum }}</td>
                                        <td>{{ $d->id }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tahun Akademik</th>
                                        <th>Program Studi</th>
                                        <th>Nama Kurikulum</th>
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