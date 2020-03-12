<!DOCTYPE html>

<html lang="en" direction="rtl" dir="rtl" style="direction: rtl">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>CerFix | users</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700&display=swap" rel="stylesheet">

    <!--end::Fonts -->

    <!--end::Page Vendors Styles -->
    <link href="assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="assets/css/skins/header/base/light.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/skins/header/menu/light.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/skins/brand/dark.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/skins/aside/dark.rtl.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/css/my-style.css">
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/image/icon.png"/>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="index.php">
            <img alt="Logo" src="assets/image/icon.png"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler">
            <span></span></button>
        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

        <!-- begin:: Aside -->

        <!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
             id="kt_aside">

            <!-- begin:: Aside -->
            <?php
            include 'asideMenu.php';
            ?>
            <!-- end:: Aside Menu -->
        </div>

        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
            <?php
            include 'header.php';
            ?>
            <!-- end:: Header -->
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor py-4" id="kt_content">


                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                    <!--Begin::Dashboard 1-->

                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<span class="kt-menu__link-icon">
                                               <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1"
                                                    class="kt-svg-icon kt-svg-icon--warning">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                              fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                              fill="#000000" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </span>
										</span>
                                <h3 class="kt-portlet__head-title">
                                    المستخدمين
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                    <div class="kt-portlet__head-actions">
                                        <a href="#kt_modal_5" class="btn btn-success btn-elevate btn-icon-sm fw-500"
                                           data-toggle="modal" data-target="#kt_modal_5">
                                            <i class="la la-plus"></i>
                                            مستخدم جديد
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">

                            <!--begin: Datatable -->
                            <table class="table table-striped- table-bordered table-hover table-checkable how-work-table"
                                   id="kt_table_1">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>الصورة</th>
                                    <th>رقم الجوال</th>
                                    <th>المدينة</th>
                                    <th>الإسم</th>
                                    <th>الحالة</th>
                                    <th>عمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="assets/media/users/100_1.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src="assets/media/users/100_2.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <img src="assets/media/users/100_3.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <img src="assets/media/users/100_4.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">فعال</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" checked name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <img src="assets/media/users/100_5.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">فعال</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" checked name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <img src="assets/media/users/100_6.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">فعال</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" checked name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <img src="assets/media/users/100_7.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">فعال</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" checked name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <img src="assets/media/users/100_8.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>
                                        <img src="assets/media/users/100_9.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>
                                        <img src="assets/media/users/100_10.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">فعال</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" checked name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>
                                        <img src="assets/media/users/100_11.jpg" alt="">
                                    </td>
                                    <td>
                                        0512334567
                                    </td>
                                    <td>المدينة</td>
                                    <td>
                                        حمزة ابو عيطة
                                    </td>
                                    <td>
                                        <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex mx-md-0 mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الباقات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--success">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" class="btn btn-outline-secondary btn-icon btn-sm mx-md-0 mx-1"
                                               data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                               title="الطلبات">
                                                <div class="kt-iconbox__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1"
                                                         class="kt-svg-icon kt-svg-icon--warning">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                  fill="#000000" opacity="0.3"></path>
                                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                                                  fill="#000000"></path>
                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                  fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </a>
                                            <span class="mx-1 mx-md-0" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                        title="تعديل"><i class="fa fa-edit"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <!--end: Datatable -->
                        </div>
                    </div>


                    <!--End::Dashboard 1-->
                </div>

                <!-- end:: Content -->
            </div>

            <!-- begin:: Footer -->
            <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                <div class="kt-container  kt-container--fluid ">
                    <div class="kt-footer__copyright">
                        2019&nbsp;&copy;&nbsp;<p class="m-0">CerFix</p>
                    </div>

                </div>
            </div>

            <!-- end:: Footer -->
        </div>
    </div>
</div>

<!-- end:: Page -->


<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>

<!-- end::Scrolltop -->

<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="kt_form_1">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">اضافة مستخدم جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group text-center">
                        <div class="kt-avatar kt-avatar--outline position-relative" id="kt_user_avatar">
                            <div class="kt-avatar__holder" style="background-image: url(assets/image/image.png)"></div>
                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title=""
                                   data-original-title="تغير الصورة">
                                <i class="fa fa-pen"></i>
                                <input type="file" name="image" accept="png, jpg, jpeg" required>
                            </label>
                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title=""
                                  data-original-title="الغاء الصورة">
                                <i class="fa fa-times"></i>
                            </span>
                        </div>
                        <span id="errorimage" class="error"></span>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="الإسم الأول" name="fName" required>
                                <span id="errorfName" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="الإسم الأخير" name="lName"
                                       required>
                                <span id="errorlName" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="البريد الإلكتروني" name="email">
                                <span id="erroremail" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="رقم الموبايل" name="mobile"
                                       required>
                                <span id="errormobile" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="city" required>
                                    <option value="">المدينة</option>
                                    <option value="1">مدينة</option>
                                    <option value="2">مدينة</option>
                                </select>
                                <span id="errorcity" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" >
                                    <option value="">الجنس</option>
                                    <option value="1">ذكر</option>
                                    <option value="2">أنثى</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0">
                                <input type="number" class="form-control" placeholder="العمر" name="age"
                                       required>
                                <span id="errorage" class="error"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-success">اضافة</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
<script src="assets/js/pages/crud/datatables/basic/headers.js" type="text/javascript"></script>
<script>
    "use strict";

    // Class definition
    var KTUserProfile = function () {
        // Base elements
        var avatar;
        var offcanvas;

        // Private functions
        var initAside = function () {
            // Mobile offcanvas for mobile mode
            offcanvas = new KTOffcanvas('kt_user_profile_aside', {
                overlay: true,
                baseClass: 'kt-app__aside',
                closeBy: 'kt_user_profile_aside_close',
                toggleBy: 'kt_subheader_mobile_toggle'
            });
        };

        var initUserForm = function () {
            avatar = new KTAvatar('kt_user_avatar');
        };

        return {
            // public functions
            init: function () {
                initAside();
                initUserForm();
            }
        };
    }();

    KTUtil.ready(function () {
        KTUserProfile.init();
    });
</script>
<script>
    $('#kt_form_1').validate({
        // define validation rules
        // errorLabelContainer: "#containererreurtotal",
        rules: {
            email: {
                required: false,
                email: false
            }
        },
        messages: {
            fName: "يجب ادخال الإسم الأول",
            lName: "يجب ادخال الإسم الأخير",
            mobile: 'يجب ادخال رقم الهاتف',
            image: "يجب اختيار صورة",
            city:"يجب اختيار المدينة",
            age:"يجب ادخال العمر"
        },
        errorPlacement: function ($error, $element) {
            var name = $element.attr("name");

            $("#error" + name).append($error);
        }
    });
</script>
<!--end::Global Theme Bundle -->


<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>