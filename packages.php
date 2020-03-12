<!DOCTYPE html>

<html lang="en" direction="rtl" dir="rtl" style="direction: rtl">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>CerFix | الباقات</title>
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
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z"
                                                              fill="#000000"></path>
                                                        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z"
                                                              fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg>
                                            </span>
										</span>
                                <h3 class="kt-portlet__head-title">
                                    الباقات (العروض)
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                    <div class="kt-portlet__head-actions">
                                        <a href="#kt_modal_5" class="btn btn-success btn-elevate btn-icon-sm fw-500"
                                           data-toggle="modal" data-target="#kt_modal_5">
                                            <i class="la la-plus"></i>
                                            عرض جديد
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
                                    <th>اسم العرض</th>
                                    <th>سعر العرض</th>
                                    <th>اسم الخدمة</th>
                                    <th>الكمية</th>
                                    <th>تاريخ انتهاء العرض</th>
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
                                    <td>اسم العرض</td>
                                    <td>
                                        50$
                                    </td>
                                    <td>
                                        اسم الخدمة
                                    </td>
                                    <td>
                                        الكمية
                                    </td>
                                    <td>
                                        1/22/2019
                                    </td>
                                    <td>
                                        <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex  mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="" data-original-title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <span class="mx-1" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip"
                                                        data-placement="top" title="" data-original-title="تعديل"><i
                                                            class="fa fa-edit"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src="assets/media/users/100_2.jpg" alt="">
                                    </td>
                                    <td>اسم العرض</td>
                                    <td>
                                        50$
                                    </td>
                                    <td>
                                        اسم الخدمة
                                    </td>
                                    <td>
                                        الكمية
                                    </td>
                                    <td>
                                        1/22/2019
                                    </td>
                                    <td>
                                        <span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">فعال</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex  mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="" data-original-title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" checked name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <span class="mx-1" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip"
                                                        data-placement="top" title="" data-original-title="تعديل"><i
                                                            class="fa fa-edit"></i></button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <img src="assets/media/users/100_3.jpg" alt="">
                                    </td>
                                    <td>اسم العرض</td>
                                    <td>
                                        50$
                                    </td>
                                    <td>
                                        اسم الخدمة
                                    </td>
                                    <td>
                                        الكمية
                                    </td>
                                    <td>
                                        1/22/2019
                                    </td>
                                    <td>
                                        <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <span class="kt-switch kt-switch--sm kt-switch--outline kt-switch--icon kt-switch--success d-flex  mx-1"
                                                  data-container="body" data-toggle="kt-tooltip" data-placement="top"
                                                  title="" data-original-title="تفعيل / تعطيل">
                                                <label class="m-0">
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                            <span class="mx-1" data-toggle="modal" data-target="#kt_modal_5">
                                                <button type="button"
                                                        class="btn btn-outline-brand btn-icon mx-md-0 btn-sm "
                                                        data-container="body" data-toggle="kt-tooltip"
                                                        data-placement="top" title="" data-original-title="تعديل"><i
                                                            class="fa fa-edit"></i></button>
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

<!-- Modal -->

<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="kt_form_1">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">اضافة باقة جديده</h5>
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
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="اسم العرض" name="title" required>
                                <span id="errortitle" class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group ">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="price" placeholder="السعر" required>
                                    <div class="input-group-append"><span class="input-group-text">ريال</span></div>
                                </div>
                                <span id="errorprice" class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group ">
                                <select type="text" class="form-control" name="serviceName" required>
                                    <option value="">اسم الخدمة</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <span id="errorserviceName" class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="الكمية" name="quantity" required/>
                                <span id="errorquantity" class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date" id="kt_datepicker_1"
                                       placeholder="تاريخ انتهاء العرض" required>
                                <span id="errordate" class="error"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                                <textarea type="text" class="form-control" placeholder="تفاصيل العرض" name="details"
                                          required></textarea>
                                <span id="errordetails" class="error"></span>
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
<script src="assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
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
    $("#kt_form_1").validate({
        // define validation rules
        // errorLabelContainer: "#containererreurtotal",
        rules: {
            title: {
                required: true
            },
            image: {}
        },
        messages: {
            title: "يجب ادخال العنوان",
            details: "يجب كتابة التفاصيل",
            image: "يجب اختيار صورة",
            price:"يجب تحديد السعر",
            serviceName:"يجب اختيار اسم الخدمة",
            quantity:"يجب تحديد الكمية",
            date:"يجب اختيار تاريخ انتهاء العرضص",


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