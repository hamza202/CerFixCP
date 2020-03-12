<!DOCTYPE html>

<html lang="en" direction="rtl" dir="rtl" style="direction: rtl">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>CerFix | Service Provider</title>
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
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                    <!--Begin:: Portlet-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget kt-widget--user-profile-3">
                                <div class="kt-widget__top d-md-flex d-block">
                                    <div class="kt-widget__media text-center">
                                        <img src="assets/media/users/100_12.jpg" alt="image">
                                    </div>

                                    <div class="kt-widget__content text-center text-md-left">
                                        <div class="kt-widget__head justify-content-md-between justify-content-center">
                                            <div class="kt-widget__user">
                                                <h4 class="kt-widget__username mb-0">
                                                    حمزة ابو عيطة
                                                </h4>
                                                <span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--unified-success">فرد</span>
                                                <span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--unified-warning">شركة</span>
                                            </div>
                                            <div class="kt-widget__action">
                                                <a href="wallet.php"
                                                   class="btn ml-0 btn-label-success btn-sm btn-upper">
                                                    المحفظة
                                                </a>
                                                <a href="#" class="btn btn-label-warning btn-sm btn-upper">
                                                    الطلبات
                                                </a>
                                                <a href="#" class="btn btn-label-danger btn-sm btn-upper">
                                                    السجل التجاري
                                                    <i class="la la-download"></i>
                                                </a>
                                                <a href="#kt_modal_5" class="btn btn-label-brand btn-sm btn-upper"
                                                   data-toggle="modal" data-target="#kt_modal_5">
                                                    تعديل
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="kt-widget__subhead">
                                            <a href="#!">
                                                <i class="flaticon2-new-email"></i>
                                                hamza@hotmail.com
                                            </a>
                                            <a href="#َ!">
                                                <i class="la la-mobile-phone"></i>
                                                0595779004
                                            </a>
                                            <a href="#!">
                                                <i class="flaticon2-placeholder"></i>
                                                غزة - الشيخ رضوان
                                            </a>
                                            <a href="#!">
                                                <i class="flaticon2-calendar-3"></i>
                                                20 سنة
                                            </a>
                                        </div>
                                        <div class="kt-widget__info">
                                            <span class="btn btn-label-danger btn-pill">لا يقدم خدمة الطوارئ</span>
                                            <span class="btn btn-label-success btn-pill">يتم تقديم خدمة الطوارئ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget__bottom">
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1"
                                                     class="kt-svg-icon kt-svg-icon--warning">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
                                                              opacity="0.7" fill="#000000"/>
                                                    </g>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">عدد الموظفين</span>
                                            <span class="kt-widget__value">50</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1"
                                                     class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z"
                                                              fill="#000000" opacity="0.3"/>
                                                        <path d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z"
                                                              fill="#000000"/>
                                                    </g>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">رقم السجل التجاري</span>
                                            <span class="kt-widget__value">123456789</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="fa fa-calendar-alt text-success"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">تاريخ السجل التجاري</span>
                                            <span class="kt-widget__value">2/20/2019</span>
                                        </div>
                                    </div>
                                    <div class="kt-widget__item">
                                        <div class="kt-widget__icon">
                                            <i class="fa fa-calendar-times text-danger"></i>
                                        </div>
                                        <div class="kt-widget__details">
                                            <span class="kt-widget__title">تاريخ انتهاء السجل التجاري</span>
                                            <span class="kt-widget__value">5/20/2020</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--End:: Portlet-->

                    <!--Begin:: Portlet-->
                    <div class="kt-portlet kt-portlet--tabs">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#kt_contacts_view_tab_1"
                                           role="tab">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1"
                                                     class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <rect fill="#000000" x="3" y="2" width="15" height="5" rx="1"/>
                                                        <rect fill="#000000" x="9" y="12" width="4" height="10" rx="1"/>
                                                        <path d="M12,12 L10,12 L10,11 C10,9.8954305 10.8954305,9 12,9 L19,9 L19,5.5 L18,5.5 L18,3.5 L19,3.5 C20.1045695,3.5 21,4.3954305 21,5.5 L21,9 C21,10.1045695 20.1045695,11 19,11 L12,11 L12,12 Z"
                                                              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    </g>
                                                </svg>
                                            </i>
                                            الخدمات
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " data-toggle="tab" href="#kt_contacts_view_tab_2"
                                           role="tab">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1"
                                                     class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M7.14319965,19.3575259 C7.67122143,19.7615175 8.25104409,20.1012165 8.87097532,20.3649307 L7.89205065,22.0604779 C7.61590828,22.5387706 7.00431787,22.7026457 6.52602525,22.4265033 C6.04773263,22.150361 5.88385747,21.5387706 6.15999985,21.0604779 L7.14319965,19.3575259 Z M15.1367085,20.3616573 C15.756345,20.0972995 16.3358198,19.7569961 16.8634386,19.3524415 L17.8320512,21.0301278 C18.1081936,21.5084204 17.9443184,22.1200108 17.4660258,22.3961532 C16.9877332,22.6722956 16.3761428,22.5084204 16.1000004,22.0301278 L15.1367085,20.3616573 Z"
                                                              fill="#000000"/>
                                                        <path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z M19.068812,3.25407593 L20.8181344,5.00339833 C21.4039208,5.58918477 21.4039208,6.53893224 20.8181344,7.12471868 C20.2323479,7.71050512 19.2826005,7.71050512 18.696814,7.12471868 L16.9474916,5.37539627 C16.3617052,4.78960984 16.3617052,3.83986237 16.9474916,3.25407593 C17.5332781,2.66828949 18.4830255,2.66828949 19.068812,3.25407593 Z M5.29862906,2.88207799 C5.8844155,2.29629155 6.83416297,2.29629155 7.41994941,2.88207799 C8.00573585,3.46786443 8.00573585,4.4176119 7.41994941,5.00339833 L5.29862906,7.12471868 C4.71284263,7.71050512 3.76309516,7.71050512 3.17730872,7.12471868 C2.59152228,6.53893224 2.59152228,5.58918477 3.17730872,5.00339833 L5.29862906,2.88207799 Z"
                                                              fill="#000000" opacity="0.3"/>
                                                        <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
                                                              fill="#000000"/>
                                                    </g>
                                                </svg>
                                            </i>
                                            اوقات العمل
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " data-toggle="tab" href="#kt_contacts_view_tab_4"
                                           role="tab">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1"
                                                     class="kt-svg-icon">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z"
                                                              fill="#000000" opacity="0.3"/>
                                                        <path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
                                                              fill="#000000"/>
                                                    </g>
                                                </svg>
                                            </i>
                                            جدول الموظفين
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="tab-content  kt-margin-t-20">

                                <!--Begin:: Tab Content-->
                                <div class="tab-pane active" id="kt_contacts_view_tab_1" role="tabpanel">
                                    <div class="kt-section__content">
                                        <span class="mb-3 float-right" data-toggle="modal" data-target="#kt_modal_4">
                                            <button type="button" class="btn btn-success btn-sm btn-icon btn-circle  "
                                                    data-container="body" data-toggle="kt-tooltip"
                                                    data-placement="right" title=""
                                                    data-original-title="اضافة خدمة جديدة"><i
                                                        class="fa fa-plus"></i></button>
                                        </span>
                                        <div class="clearfix"></div>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-striped">
                                                <thead class="table-warning">
                                                <tr>
                                                    <th>#</th>
                                                    <th>اسم الخدمة</th>
                                                    <th>السعر</th>
                                                    <th>التصنيفات الفرعية</th>
                                                    <th>التصنيف الرئيسي</th>
                                                    <th>المدينة</th>
                                                    <th>تعديل</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>اسم الخدمة</td>
                                                    <td>السعر</td>
                                                    <td>التصنيفات الفرعية</td>
                                                    <td>التصنيف الرئيسي</td>
                                                    <td>المدينة,المدينة,المدينة</td>
                                                    <td>
                                                        <button type="button"
                                                                class="btn btn-brand btn-sm btn-icon btn-circle"
                                                                data-toggle="modal" data-target="#kt_modal_4"><i
                                                                    class="fa fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>اسم الخدمة</td>
                                                    <td>السعر</td>
                                                    <td>التصنيفات الفرعية</td>
                                                    <td>التصنيف الرئيسي</td>
                                                    <td>المدينة,المدينة,المدينة</td>
                                                    <td>
                                                        <button type="button"
                                                                class="btn btn-brand btn-sm btn-icon btn-circle"
                                                                data-toggle="modal" data-target="#kt_modal_4"><i
                                                                    class="fa fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>اسم الخدمة</td>
                                                    <td>السعر</td>
                                                    <td>التصنيفات الفرعية</td>
                                                    <td>التصنيف الرئيسي</td>
                                                    <td>المدينة,المدينة,المدينة</td>
                                                    <td>
                                                        <button type="button"
                                                                class="btn btn-brand btn-sm btn-icon btn-circle"
                                                                data-toggle="modal" data-target="#kt_modal_4"><i
                                                                    class="fa fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!--End:: Tab Content-->

                                <!--Begin:: Tab Content-->
                                <div class="tab-pane" id="kt_contacts_view_tab_2" role="tabpanel">
                                    <span class="mb-3 float-right" data-toggle="modal" data-target="#kt_modal_3">
                                        <button type="button" class="btn btn-success btn-sm btn-icon btn-circle  "
                                                data-container="body" data-toggle="kt-tooltip" data-placement="right"
                                                title="" data-original-title="اضافة اوقات عمل"><i
                                                    class="fa fa-plus"></i></button>
                                    </span>
                                    <div class="clearfix"></div>
                                    <div class="table-responsive">
                                        <table class="table table-nowrap table-striped">
                                            <thead class="table-warning">
                                            <tr>
                                                <th>#</th>
                                                <th>اليوم</th>
                                                <th>من</th>
                                                <th>الى</th>
                                                <th>تعديل</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>السبت</td>
                                                <td>7:00 am</td>
                                                <td>4:00 pm</td>
                                                <td>
                                                    <button type="button"
                                                            class="btn btn-brand btn-sm btn-icon btn-circle"
                                                            data-toggle="modal" data-target="#kt_modal_3"><i
                                                            class="fa fa-edit"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>الأحد</td>
                                                <td>7:00 am</td>
                                                <td>4:00 pm</td>
                                                <td>
                                                    <button type="button"
                                                            class="btn btn-brand btn-sm btn-icon btn-circle"
                                                            data-toggle="modal" data-target="#kt_modal_3"><i
                                                            class="fa fa-edit"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>الإثنين</td>
                                                <td>7:00 am</td>
                                                <td>4:00 pm</td>
                                                <td>
                                                    <button type="button"
                                                            class="btn btn-brand btn-sm btn-icon btn-circle"
                                                            data-toggle="modal" data-target="#kt_modal_3"><i
                                                            class="fa fa-edit"></i></button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!--End:: Tab Content-->

                                <!--Begin:: Tab Content-->
                                <div class="tab-pane " id="kt_contacts_view_tab_4" role="tabpanel">
                                     <span class="mb-3 float-right" data-toggle="modal" data-target="#kt_modal_2">
                                        <button type="button" class="btn btn-success btn-sm btn-icon btn-circle  "
                                                data-container="body" data-toggle="kt-tooltip" data-placement="right"
                                                title="" data-original-title="اضافة موظف جديد"><i
                                                class="fa fa-plus"></i></button>
                                    </span>
                                    <div class="table-responsive">
                                        <table class="table table-nowrap table-striped">
                                            <thead class="table-warning">
                                            <tr>
                                                <th>#</th>
                                                <th>الأسم الأول</th>
                                                <th>الأسم الأخير</th>
                                                <th>رقم الجوال</th>
                                                <th>المدينة</th>
                                                <th>رقم الهوية</th>
                                                <th>صورة الهوية</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>حمزة</td>
                                                <td>خميس</td>
                                                <td>0595779004</td>
                                                <td>مدينة</td>
                                                <td>123456789</td>
                                                <td>
                                                    <a href="#!" type="button"
                                                       class="btn btn-outline-warning btn-icon btn-circle">
                                                        <i class="la la-download"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>حمزة</td>
                                                <td>خميس</td>
                                                <td>0595779004</td>
                                                <td>مدينة</td>
                                                <td>123456789</td>
                                                <td>
                                                    <a href="#!" type="button"
                                                       class="btn btn-outline-warning btn-icon btn-circle">
                                                        <i class="la la-download"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>حمزة</td>
                                                <td>خميس</td>
                                                <td>0595779004</td>
                                                <td>مدينة</td>
                                                <td>123456789</td>
                                                <td>
                                                    <a href="#!" type="button"
                                                       class="btn btn-outline-warning btn-icon btn-circle">
                                                        <i class="la la-download"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!--End:: Tab Content-->
                            </div>
                        </div>
                    </div>

                    <!--End:: Portlet-->
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
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="kt_form_1">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">اضافة مزود خدمة جديد</h5>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="الإسم الأول" name="fName" required>
                                <span id="errorfName" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="الإسم الأخير" name="lName"
                                       required>
                                <span id="errorlName" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="type" required>
                                    <option value="">النوع</option>
                                    <option value="1">نوع1</option>
                                    <option value="2">نوع2</option>
                                </select>
                                <span id="errortype" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="البريد الإلكتروني" name="email">
                                <span id="erroremail" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="رقم الموبايل" name="mobile"
                                       required>
                                <span id="errormobile" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="city" required>
                                    <option value="">المدينة</option>
                                    <option value="1">مدينة</option>
                                    <option value="2">مدينة</option>
                                </select>
                                <span id="errorcity" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="">الجنس</option>
                                    <option value="1">ذكر</option>
                                    <option value="2">أنثى</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="العمر" name="age"
                                       required>
                                <span id="errorage" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="emergency" required>
                                    <option value="">تقديم خدمة الطوارئ؟</option>
                                    <option value="1">نعم</option>
                                    <option value="2">لا</option>
                                </select>
                                <span id="erroremergency" class="error"></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="map_1"></div>
                            <input value="" type="hidden" name="lng" required id="lng">
                            <input value="" type="hidden" name="lat" id="lat">
                            <span id="errorlng" class="error"></span>
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
<div class="modal fade" id="kt_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="kt_form_2">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">اضافة خدمة جديدة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="اسم الخدمة" name="SName" required>
                                <span id="errorSName" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="price" placeholder="سعر الخدمة"
                                           required="">
                                    <div class="input-group-append"><span class="input-group-text">ريال</span></div>
                                </div>
                                <span id="errorprice" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control kt-selectpicker" name="supType" multiple
                                        title="التصنيفات الفرعية" required>
                                    <option>تصنيف1</option>
                                    <option>تصنيف2</option>
                                    <option>تصنيف3</option>
                                </select>
                                <span id="errorsupType" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control kt-selectpicker" name="Type" title="التصنيف الرئيسي"
                                        required>
                                    <option>تصنيف1</option>
                                    <option>تصنيف2</option>
                                    <option>تصنيف3</option>
                                </select>
                                <span id="errorType" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-control kt-selectpicker" name="City" multiple title="المدينة"
                                        required>
                                    <option>مدينة1</option>
                                    <option>مدينة2</option>
                                    <option>مدينة3</option>
                                </select>
                                <span id="errorCity" class="error"></span>
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
<div class="modal fade" id="kt_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="kt_form_3">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">اضافة وقت عمل جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-control kt-selectpicker" name="day" title="اليوم" required>
                                    <option>السبت</option>
                                    <option>الأحد</option>
                                    <option>الإثنين</option>
                                </select>
                                <span id="errorday" class="error"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control kt_timepicker_1" name="from" required placeholder="من"
                                       type="text"/>
                                <span id="errorfrom" class="error"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control kt_timepicker_1" name="to" required placeholder="الى"
                                       type="text"/>
                                <span id="errorto" class="error"></span>
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
<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="kt_form_6">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">اضافة موظف جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="الإسم الأول" name="empFName" required>
                                <span id="errorempFName" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="الإسم الأخير" name="empLName" required>
                                <span id="errorempLName" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="رقم الجوال" name="empNumber" required>
                                <span id="errorempNumber" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control kt-selectpicker" name="empCity" title="المدينة"
                                        required>
                                    <option>مدينة1</option>
                                    <option>مدينة2</option>
                                    <option>مدينة3</option>
                                </select>
                                <span id="errorempCity" class="error"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="رقم الهوية" name="empIdNumber" required>
                                <span id="errorempIdNumber" class="error"></span>
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
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(31.511153667989184, 34.93505459124765),
            zoom: 7,
        };
        var map = new google.maps.Map(document.getElementById("map_1"), mapProp);

        google.maps.event.addListener(map, 'click', function (event) {
            var lang = event.latLng.lng();
            var lat = event.latLng.lat();
            $("#lng").val(lang);
            document.getElementById("lat").value = lat;
            $('#errorlng').addClass('d-none');
        });


        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                    icon: 'assets/image/0.png'
                });
                google.maps.event.addListener(map, 'click', function (event) {
                    marker.setPosition(event.latLng);
                    console.log(document.getElementById("lng").value);
                    console.log(document.getElementById("lat").value);
                    $('#errorlng').addClass('d-none');
                });
            });
        }

    }


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwQWgqTGypi82vAyP97l2O5Zi_RBiVA5E&amp;callback=myMap "></script>
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
        ignore: "",
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
            city: "يجب اختيار المدينة",
            age: "يجب ادخال العمر",
            type: "يجب اختيار النوع",
            emergency: "حقل مطلوب",
            lng: "يجب اختيار العنوان"
        },
        errorPlacement: function ($error, $element) {
            var name = $element.attr("name");

            $("#error" + name).append($error);
        }
    });
</script>
<script>
    $('#kt_form_2').validate({
        // define validation rules
        // errorLabelContainer: "#containererreurtotal",
        ignore: "",
        rules: {},
        messages: {
            price: "يجب ادخال السعر",
            SName: "ادخل اسم الخدمة",
            supType: "يجب اختيار تصنيفات فرعية",
            Type: "يجب اختيار التصنيف الرئيسي",
            City: "يجب اختيار المدن"
        },
        errorPlacement: function ($error, $element) {
            var name = $element.attr("name");

            $("#error" + name).append($error);
        }
    });
</script>
<script>
    $('#kt_form_3').validate({
        // define validation rules
        // errorLabelContainer: "#containererreurtotal",
        ignore: "",
        rules: {},
        messages: {
            day: "يجب اختيار اليوم",
            from: "اختر وقت بدء العمل",
            to: "اختر وقت انتهاء العمل",
        },
        errorPlacement: function ($error, $element) {
            var name = $element.attr("name");

            $("#error" + name).append($error);
        }
    });
</script>
<script>
    $('#kt_form_6').validate({
        // define validation rules
        // errorLabelContainer: "#containererreurtotal",
        ignore: "",
        rules: {},
        messages: {
            empFName: "ادخل الإسم الأول",
            empLName: "ادخل الإسم الأخير",
            empNumber: "ادخل رقم الجوال",
            empCity:"اختر المدينة",
            empIdNumber:"ادخل رقم الهوية"

        },
        errorPlacement: function ($error, $element) {
            var name = $element.attr("name");

            $("#error" + name).append($error);
        }
    });
</script>
<script>
    var KTBootstrapSelect = function () {

        // Private functions
        var demos = function () {
            // minimum setup
            $('.kt-selectpicker').selectpicker();
        };

        return {
            // public functions
            init: function () {
                demos();
            }
        };
    }();

    jQuery(document).ready(function () {
        KTBootstrapSelect.init();
    });
</script>
<script>
    $('.kt_timepicker_1').timepicker({
        defaultTime: '',
    });
</script>
</body>

<!-- end::Body -->
</html>