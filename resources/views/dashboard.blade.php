@extends('layouts.template')

@section('konten')
    
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">Dashboard</h3>
                </div>
                <div>
                    <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                        <span class="m-subheader__daterange-label">
                            <span class="m-subheader__daterange-title"></span>
                            <span class="m-subheader__daterange-date m--font-brand"></span>
                        </span>
                        <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                            <i class="la la-angle-down"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <!-- END: Subheader -->
        <div class="m-content">

            <!--Begin::Section-->
            <div class="row">
                <div class="col-xl-12">

                    <!--begin::Portlet-->
                    <div class="m-portlet " id="m_portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon">
                                        <i class="flaticon-map-location"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Calendar
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item">
                                        <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
                                            <span>
                                                <i class="la la-plus"></i>
                                                <span>Add Event</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div id="m_calendar"></div>
                        </div>
                    </div>

                    <!--end::Portlet-->

                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Custom Checkboxes
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">

                            <!--begin::Section-->
                            <div class="m-section">
                                <span class="m-section__sub">
                                    Custom checkboxes in default form layout:
                                </span>
                                <div class="m-section__content">
                                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                                        <div class="m-demo__preview">

                                            <!--begin::Form-->
                                            <form class="m-form">
                                                <div class="m-form__group form-group">
                                                    <label for="">Default Checkboxes</label>
                                                    <div class="m-checkbox-list">
                                                        <label class="m-checkbox">
                                                            <input type="checkbox"> Default
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--disabled">
                                                            <input type="checkbox" disabled> Disabled
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox">
                                                            <input type="checkbox" checked="checked"> Checked
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="m-form__group form-group">
                                                    <label>Checkbox States</label>
                                                    <div class="m-checkbox-list">
                                                        <label class="m-checkbox m-checkbox--state-success">
                                                            <input type="checkbox"> Success state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--state-brand">
                                                            <input type="checkbox"> Brand state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--state-primary">
                                                            <input type="checkbox"> Primary state
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <span class="m-form__help">Some help text goes here</span>
                                                </div>
                                                <div class="m-form__group form-group">
                                                    <label>Checkbox Checked States</label>
                                                    <div class="m-checkbox-list">
                                                        <label class="m-checkbox m-checkbox--success">
                                                            <input type="checkbox"> Success state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--brand">
                                                            <input type="checkbox"> Brand state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--primary">
                                                            <input type="checkbox"> Primary state
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <span class="m-form__help">Some help text goes here</span>
                                                </div>
                                                <div class="m-form__group form-group">
                                                    <label for="">Inline Checkboxes</label>
                                                    <div class="m-checkbox-inline">
                                                        <label class="m-checkbox">
                                                            <input type="checkbox"> Option 1
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox">
                                                            <input type="checkbox"> Option 2
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox">
                                                            <input type="checkbox"> Option 3
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <span class="m-form__help">Some help text goes here</span>
                                                </div>
                                                <div class="m-form__group form-group">
                                                    <label>Square Checkboxes</label>
                                                    <div class="m-checkbox-list">
                                                        <label class="m-checkbox m-checkbox--square">
                                                            <input type="checkbox"> Default
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--square">
                                                            <input type="checkbox" checked="checked"> Checked
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--square m-checkbox--disabled">
                                                            <input type="checkbox" disabled="disabled"> Disabled
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <span class="m-form__help">Some help text goes here</span>
                                                </div>
                                                <div class="m-form__group form-group">
                                                    <label>Solid Checkboxes</label>
                                                    <div class="m-checkbox-list">
                                                        <label class="m-checkbox m-checkbox--solid">
                                                            <input type="checkbox"> Default
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--solid">
                                                            <input type="checkbox" checked="checked"> Checked
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--disabled">
                                                            <input type="checkbox" disabled="disabled"> Disabled
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--state-success">
                                                            <input type="checkbox"> Success state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--state-brand">
                                                            <input type="checkbox"> Brand state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--success">
                                                            <input type="checkbox"> Success checked state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                            <input type="checkbox"> Brand checked state
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <span class="m-form__help">Some help text goes here</span>
                                                </div>
                                                <div class="m-form__group form-group">
                                                    <label>Bold Checkboxes</label>
                                                    <div class="m-checkbox-list">
                                                        <label class="m-checkbox m-checkbox--bold">
                                                            <input type="checkbox"> Default
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--bold">
                                                            <input type="checkbox" checked="checked"> Checked
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--bold m-checkbox--disabled">
                                                            <input type="checkbox" disabled="disabled"> Disabled
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--bold m-checkbox--state-success">
                                                            <input type="checkbox"> Success state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--bold m-checkbox--state-brand">
                                                            <input type="checkbox"> Brand state
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <span class="m-form__help">Some help text goes here</span>
                                                </div>
                                                <div class="m-form__group form-group">
                                                    <label>Checked Bold Checkboxes</label>
                                                    <div class="m-checkbox-list">
                                                        <label class="m-checkbox m-checkbox--check-bold">
                                                            <input type="checkbox"> Default
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--check-bold">
                                                            <input type="checkbox" checked="checked"> Checked
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--disabled">
                                                            <input type="checkbox" disabled="disabled"> Disabled
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-success">
                                                            <input type="checkbox"> Success state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-brand">
                                                            <input type="checkbox"> Brand state
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <span class="m-form__help">Some help text goes here</span>
                                                </div>
                                                <div class="m-form__group form-group">
                                                    <label>Air Checkboxes</label>
                                                    <div class="m-checkbox-list">
                                                        <label class="m-checkbox m-checkbox--air">
                                                            <input type="checkbox"> Option 1
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--air m-checkbox--solid">
                                                            <input type="checkbox"> Option 2
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--air">
                                                            <input type="checkbox" checked="checked"> Checked
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--air m-checkbox--disabled">
                                                            <input type="checkbox" disabled="disabled"> Disabled
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--air m-checkbox--state-success">
                                                            <input type="checkbox"> Success state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--air m-checkbox--state-brand">
                                                            <input type="checkbox"> Brand state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--air m-checkbox--solid m-checkbox--state-success">
                                                            <input type="checkbox"> Success state
                                                            <span></span>
                                                        </label>
                                                        <label class="m-checkbox m-checkbox--air m-checkbox--solid m-checkbox--state-brand">
                                                            <input type="checkbox"> Brand state
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <span class="m-form__help">Some help text goes here</span>
                                                </div>
                                            </form>

                                            <!--end::Form-->
                                        </div>
                                    </div>
                                </div>
                                <span class="m-section__sub">
                                    Custom checkboxes in horizontal form layout:
                                </span>
                                <div class="m-section__content">
                                    <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                                        <div class="m-demo__preview">

                                            <!--begin::Form-->
                                            <form class="m-form">
                                                <div class="m-form__group form-group row">
                                                    <label class="col-3 col-form-label">Checkboxes</label>
                                                    <div class="col-9">
                                                        <div class="m-checkbox-list">
                                                            <label class="m-checkbox">
                                                                <input type="checkbox"> Option 1
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox">
                                                                <input type="checkbox"> Option 2
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox">
                                                                <input type="checkbox" checked="checked"> Checked
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox">
                                                                <input type="checkbox" disabled> Disabled
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-form__group form-group row">
                                                    <label class="col-3 col-form-label">Checkboxes</label>
                                                    <div class="col-9">
                                                        <div class="m-checkbox-list">
                                                            <label class="m-checkbox m-checkbox--success">
                                                                <input type="checkbox"> Success state
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox m-checkbox--brand">
                                                                <input type="checkbox"> Brand state
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox m-checkbox--primary">
                                                                <input type="checkbox"> Primary state
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                        <span class="m-form__help">Some help text goes here</span>
                                                    </div>
                                                </div>
                                                <div class="m-form__group form-group row">
                                                    <label class="col-3 col-form-label">Inline Checkboxes</label>
                                                    <div class="col-9">
                                                        <div class="m-checkbox-inline">
                                                            <label class="m-checkbox">
                                                                <input type="checkbox"> Option 1
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox">
                                                                <input type="checkbox"> Option 2
                                                                <span></span>
                                                            </label>
                                                            <label class="m-checkbox">
                                                                <input type="checkbox"> Option 3
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                        <span class="m-form__help">Some help text goes here</span>
                                                    </div>
                                                </div>
                                            </form>

                                            <!--end::Form-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end::Section-->
                        </div>
                    </div>

                    <!--end::Portlet-->

                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Base Form Controls
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="m-form m-form--fit m-form--label-align-right">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group m--margin-top-10">
                                    <div class="alert m-alert m-alert--default" role="alert">
                                        The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                                    </div>
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <span class="m-form__help">We'll never share your email with anyone else.</span>
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control m-input" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group m-form__group">
                                    <label>Static:</label>
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleSelect1">Example select</label>
                                    <select class="form-control m-input" id="exampleSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleSelect2">Example multiple select</label>
                                    <select multiple="" class="form-control m-input" id="exampleSelect2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleTextarea">Example textarea</label>
                                    <textarea class="form-control m-input" id="exampleTextarea" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <button type="reset" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </form>

                        <!--end::Form-->
                    </div>

                    <!--end::Portlet-->

                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Bootstrap Time Picker Examples
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="m-form m-form--fit m-form--label-align-right">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input class="form-control" id="m_timepicker_1" readonly placeholder="Select time" type="text" />
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Current Time</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group timepicker">
                                            <input class="form-control m-input" id="m_timepicker_2" readonly placeholder="Select time" type="text" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-clock-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Default Time</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group timepicker">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-clock-o"></i>
                                                </span>
                                            </div>
                                            <input class="form-control m-input" id="m_timepicker_3" readonly placeholder="Select time" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Preset Time</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group timepicker">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-exclamation-circle"></i>
                                                </span>
                                            </div>
                                            <input class="form-control m-input" id="m_timepicker_4" readonly value="10:30:20 AM" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <a href="" class="btn btn-outline-success m-btn m-btn--pill" data-toggle="modal" data-target="#m_timepicker_modal">Launch modal timepickers</a>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions">
                                    <div class="row">
                                        <div class="col-lg-9 ml-lg-auto">
                                            <button type="reset" class="btn btn-brand">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--end::Form-->
                    </div>

                    <!--end::Portlet-->

                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Bootstrap Date Time Picker Examples
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="m-form m-form--fit m-form--label-align-right">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Minimum Setup</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" id="m_datetimepicker_1" readonly placeholder="Select date & time" />
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Input Group Setup</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group date">
                                            <input type="text" class="form-control m-input" readonly placeholder="Select date & time" id="m_datetimepicker_2" />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="la la-calendar-check-o glyphicon-th"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Enable Helper Buttons</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group date">
                                            <input type="text" class="form-control m-input" readonly value="1899-11-29 00:30" id="m_datetimepicker_3" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="m-form__help">Enable clear and today helper buttons</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Orientation</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group date">
                                            <input type="text" class="form-control m-input" placeholder="Top left" id="m_datetimepicker_4_1" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-check-circle-o glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="m--space-10"></div>
                                        <div class="input-group date">
                                            <input type="text" class="form-control m-input" placeholder="Top right" id="m_datetimepicker_4_2" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-clock-o glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="m--space-10"></div>
                                        <div class="input-group date">
                                            <input type="text" class="form-control m-input" placeholder="Bottom left" id="m_datetimepicker_4_3" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-check glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="m--space-10"></div>
                                        <div class="input-group date">
                                            <input type="text" class="form-control m-input" placeholder="Bottom right" id="m_datetimepicker_4_4" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-download glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Meridian Format</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group date">
                                            <input type="text" class="form-control m-input" placeholder="Select date and time" id="m_datetimepicker_5" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="m-form__help">Linked pickers for date range selection</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Date Only</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group date">
                                            <input type="text" class="form-control m-input" placeholder="Select date" id="m_datetimepicker_6" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="m-form__help">Only date selection</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Time Only</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group date">
                                            <input type="text" class="form-control m-input" placeholder="Select time" id="m_datetimepicker_7" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar glyphicon-th"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="m-form__help">Only time selection</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Modal Demos</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <a href="" class="btn btn-primary m-btn m-btn--pill" data-toggle="modal" data-target="#m_datetimepicker_modal">Launch Modal Date Time pickers</a>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions">
                                    <div class="row">
                                        <div class="col-lg-9 ml-lg-auto">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="submit" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!--end::Form-->
                    </div>

                    <!--end::Portlet-->
                    
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--mobile">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Advanced Search Form
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item">
                                        <a href="#" class="btn btn-focus m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
                                            <span>
                                                <i class="la la-cart-plus"></i>
                                                <span>New Record</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-portlet__nav-item"></li>
                                    <li class="m-portlet__nav-item">
                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                <i class="la la-ellipsis-h m--font-brand"></i>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
                                                                    <span class="m-nav__section-text">Quick Actions</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Create Post</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">Send Messages</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                        <span class="m-nav__link-text">Upload File</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__section">
                                                                    <span class="m-nav__section-text">Useful Links</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">Support</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                                </li>
                                                                <li class="m-nav__item m--hide">
                                                                    <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-portlet__body">

                            <!--begin: Search Form -->
                            <form class="m-form m-form--fit m--margin-bottom-20">
                                <div class="row m--margin-bottom-20">
                                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                        <label>RecordID:</label>
                                        <input type="text" class="form-control m-input" placeholder="E.g: 4590" data-col-index="0">
                                    </div>
                                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                        <label>OrderID:</label>
                                        <input type="text" class="form-control m-input" placeholder="E.g: 37000-300" data-col-index="1">
                                    </div>
                                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                        <label>Country:</label>
                                        <select class="form-control m-input" data-col-index="2">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                        <label>Agent:</label>
                                        <input type="text" class="form-control m-input" placeholder="Agent ID or name" data-col-index="4">
                                    </div>
                                </div>
                                <div class="row m--margin-bottom-20">
                                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                        <label>Ship Date:</label>
                                        <div class="input-daterange input-group" id="m_datepicker">
                                            <input type="text" class="form-control m-input" name="start" placeholder="From" data-col-index="5" />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
                                            </div>
                                            <input type="text" class="form-control m-input" name="end" placeholder="To" data-col-index="5" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                        <label>Status:</label>
                                        <select class="form-control m-input" data-col-index="6">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 m--margin-bottom-10-tablet-and-mobile">
                                        <label>Type:</label>
                                        <select class="form-control m-input" data-col-index="7">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="m-separator m-separator--md m-separator--dashed"></div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button class="btn btn-brand m-btn m-btn--icon" id="m_search">
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
                            </form>

                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                                <thead>
                                    <tr>
                                        <th>Record ID</th>
                                        <th>Order ID</th>
                                        <th>Country</th>
                                        <th>Ship City</th>
                                        <th>Company Agent</th>
                                        <th>Ship Date</th>
                                        <th>Status</th>
                                        <th>Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Record ID</th>
                                        <th>Order ID</th>
                                        <th>Country</th>
                                        <th>Ship City</th>
                                        <th>Company Agent</th>
                                        <th>Ship Date</th>
                                        <th>Status</th>
                                        <th>Type</th>
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