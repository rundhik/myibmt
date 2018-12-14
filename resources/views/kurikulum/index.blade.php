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
                                        <select class="form-control m-input" id="prodi">
                                        @foreach ($prodi as $p)
                                        <option value="{{$p->deskripsi}}">{{$p->deskripsi}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                        <label>Tahun Akademik :</label>
                                        <select class="form-control m-input" id="tahun_ajaran">
                                                @foreach ($thnsmt as $t)
                                                <option value="{{$t->deskripsi}}">{{$t->deskripsi}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 m--margin-bottom-10-tablet-and-mobile">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                            <span class="m-input-icon__icon m-input-icon__icon--left">
                                                <span><i class="la la-search"></i></span>
                                            </span>
                                        </div>                                        
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

@push('kurikulum')
<script>
$(function() {
    // $(".m-datatable").mDatatable({
    //     data:{
    //         saveState:{cookie:!1}},
    //         search:{input:$("#generalSearch")},
    //         columns:[
    //             {field:"DepositPaid",type:"number"},
    //             {field:"OrderDate",type:"date",format:"YYYY-MM-DD"},
    //             {field:"TahunAkademik",title:"Tahun Akademik",
    //             template:function(e){
    //                 var t={
    //                     1:{title:"Pending",class:"m-badge--brand"},
    //                     2:{title:"Delivered",class:" m-badge--metal"},
    //                     3:{title:"Canceled",class:" m-badge--primary"},
    //                     4:{title:"Success",class:" m-badge--success"},
    //                     5:{title:"Info",class:" m-badge--info"},
    //                     6:{title:"Danger",class:" m-badge--danger"},
    //                     7:{title:"Warning",class:" m-badge--warning"}
    //                 };
    //                 return'<span class="m-badge '+t[e.Status].class+' m-badge--wide">'+t[e.Status].title+"</span>"}},
    //             {field:"Prodi",title:"Program Studi",
    //             template:function(e){
    //                 var t={
    //                     1:{title:"Online",state:"danger"},
    //                     2:{title:"Retail",state:"primary"},
    //                     3:{title:"Direct",state:"accent"}};
    //                 return'<span class="m-badge m-badge--'+t[e.Type].state+' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-'+t[e.Type].state+'">'+t[e.Type].title+"</span>"
    //             }
    //         }]
    //     }),
    // $("#tahun_ajaran").on("change",function(){e.search($(this).val().toLowerCase(),"TahunAkademik")}),
    // $("#prodi").on("change",function(){e.search($(this).val().toLowerCase(),"Prodi")}),
    // $("#prodi, #tahun_ajaran").selectpicker()}};
    $("#m_table_2").DataTable({
        scrollY:"50vh",
        crollX:!0,
        scrollCollapse:!0,createdRow:function(a,e,t){
            var n={
                1:{title:"Pending",class:"m-badge--brand"},
                2:{title:"Delivered",class:" m-badge--metal"},
                3:{title:"Canceled",class:" m-badge--primary"},
                4:{title:"Success",class:" m-badge--success"},
                5:{title:"Info",class:" m-badge--info"},
                6:{title:"Danger",class:" m-badge--danger"},
                7:{title:"Warning",class:" m-badge--warning"}
            },
                l='<span class="m-badge '+n[e[18]].class+' m-badge--wide">'+n[e[18]].title+"</span>";a.getElementsByTagName("td")[18].innerHTML=l,l='<span class="m-badge m-badge--'+(
                n={
                1:{title:"Online",state:"danger"},
                2:{title:"Retail",state:"primary"},
                3:{title:"Direct",state:"accent"}
            })
                [e[19]].state+' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-'+n[e[19]].state+'">'+n[e[19]].title+"</span>",a.getElementsByTagName("td")[19].innerHTML=l},
                columnDefs:[{
                    targets:-1,
                    title:"Actions",
                    orderable:!1,render:function(a,e,t,n)
                    {
                        return'\n                        <span class="dropdown">\n                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">\n                              <i class="la la-ellipsis-h"></i>\n                            </a>\n                            <div class="dropdown-menu dropdown-menu-right">\n                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\n                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\n                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\n                            </div>\n                        </span>\n                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">\n                          <i class="la la-edit"></i>\n                        </a>'
                    }
                }]
            }),
    jQuery(document).ready(function()
    {
        DatatablesBasicScrollable.init()
    }),
});
</script>
@endpush