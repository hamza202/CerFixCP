<!DOCTYPE html>

<html lang="en" direction="rtl" dir="rtl" style="direction: rtl">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>CerFix | How it Work</title>
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
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12"
                                                                r="10"></circle>
                                                        <path d="M12,16 C12.5522847,16 13,16.4477153 13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 C11,16.4477153 11.4477153,16 12,16 Z M10.591,14.868 L10.591,13.209 L11.851,13.209 C13.447,13.209 14.602,11.991 14.602,10.395 C14.602,8.799 13.447,7.581 11.851,7.581 C10.234,7.581 9.121,8.799 9.121,10.395 L7.336,10.395 C7.336,7.875 9.31,5.922 11.851,5.922 C14.392,5.922 16.387,7.875 16.387,10.395 C16.387,12.915 14.392,14.868 11.851,14.868 L10.591,14.868 Z"
                                                              fill="#000000"></path>
                                                    </g>
                                                </svg>
                                            </span>
										</span>
                                <h3 class="kt-portlet__head-title">
                                    كيف يعمل التطبيق
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                    <div class="kt-portlet__head-actions">
                                        <a href="#kt_modal_5" class="btn btn-success btn-elevate btn-icon-sm fw-500"
                                           data-toggle="modal" data-target="#kt_modal_5">
                                            <i class="la la-plus"></i>
                                            اضافة جديد
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
                                    <th>العنوان</th>
                                    <th>التفاصيل</th>
                                    <th>الحالة</th>
                                    <th>تعديل الحالة</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="assets/media/users/100_1.jpg" alt="">
                                    </td>
                                    <td>العنوان العنوان</td>
                                    <td>
                                        <button type="button" class="btn btn-bold btn-label-brand btn-sm"
                                                data-toggle="modal" data-target="#kt_modal_6">التفاصيل
                                        </button>
                                    </td>
                                    <td>
                                        <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                        <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success d-flex">
                                            <label class="m-0">
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src="assets/media/users/100_2.jpg" alt="">
                                    </td>
                                    <td>العنوان العنوان</td>
                                    <td>
                                        <button type="button" class="btn btn-bold btn-label-brand btn-sm"
                                                data-toggle="modal" data-target="#kt_modal_6">التفاصيل
                                        </button>
                                    </td>
                                    <td>
                                        <span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">فعال</span>
                                    </td>
                                    <td>
                                        <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success d-flex">
                                            <label class="m-0">
                                                <input type="checkbox" checked="checked" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="assets/media/users/100_1.jpg" alt="">
                                    </td>
                                    <td>العنوان العنوان</td>
                                    <td>
                                        <button type="button" class="btn btn-bold btn-label-brand btn-sm"
                                                data-toggle="modal" data-target="#kt_modal_6">التفاصيل
                                        </button>
                                    </td>
                                    <td>
                                        <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                        <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success d-flex">
                                            <label class="m-0">
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src="assets/media/users/100_2.jpg" alt="">
                                    </td>
                                    <td>العنوان العنوان</td>
                                    <td>
                                        <button type="button" class="btn btn-bold btn-label-brand btn-sm"
                                                data-toggle="modal" data-target="#kt_modal_6">التفاصيل
                                        </button>
                                    </td>
                                    <td>
                                        <span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">فعال</span>
                                    </td>
                                    <td>
                                                <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success d-flex">
                                                    <label class="m-0">
                                                        <input type="checkbox" checked="checked" name="">
                                                        <span></span>
                                                    </label>
                                                </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="assets/media/users/100_3.jpg" alt="">
                                    </td>
                                    <td>العنوان العنوان</td>
                                    <td>
                                        <button type="button" class="btn btn-bold btn-label-brand btn-sm"
                                                data-toggle="modal" data-target="#kt_modal_6">التفاصيل
                                        </button>
                                    </td>
                                    <td>
                                        <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">معطل</span>
                                    </td>
                                    <td>
                                                <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success d-flex">
                                                    <label class="m-0">
                                                        <input type="checkbox" name="">
                                                        <span></span>
                                                    </label>
                                                </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src="assets/media/users/100_4.jpg" alt="">
                                    </td>
                                    <td>العنوان العنوان</td>
                                    <td>
                                        <button type="button" class="btn btn-bold btn-label-brand btn-sm"
                                                data-toggle="modal" data-target="#kt_modal_6">التفاصيل
                                        </button>
                                    </td>
                                    <td>
                                        <span class="kt-badge  kt-badge--success kt-badge--inline kt-badge--pill">فعال</span>
                                    </td>
                                    <td>
                                                <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success d-flex">
                                                    <label class="m-0">
                                                        <input type="checkbox" checked="checked" name="">
                                                        <span></span>
                                                    </label>
                                                </span>
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
<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">التفاصيل</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p class="my-font">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                    يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                    التطبيق.
                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن
                    يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج
                    العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" id="kt_form_1">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">اضافة جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group text-center">
                        <div class="kt-avatar kt-avatar--outline position-relative" id="kt_user_avatar">
                            <div class="kt-avatar__holder" style="background-image: url(assets/image/image.png)"></div>
                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="تغير الصورة">
                                <i class="fa fa-pen"></i>
                                <input type="file" name="image" accept="png, jpg, jpeg" required>
                            </label>
                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="الغاء الصورة">
                                <i class="fa fa-times"></i>
                            </span>
                        </div>
                        <span id="errorimage" class="error"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="العنوان" name="title" required>
                        <span id="errortitle" class="error"></span>
                    </div>
                    <div class="form-group mb-0">
                        <textarea type="text" class="form-control" placeholder="التفاصيل" name="details" required></textarea>
                        <span id="errordetails" class="error"></span>
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

        var initUserForm = function() {
            avatar = new KTAvatar('kt_user_avatar');
        };

        return {
            // public functions
            init: function() {
                initAside();
                initUserForm();
            }
        };
    }();

    KTUtil.ready(function() {
        KTUserProfile.init();
    });
</script>
<script>
        $( "#kt_form_1" ).validate({
            // define validation rules
            // errorLabelContainer: "#containererreurtotal",
            rules: {
                title: {
                    required: true
                },
                image:{

                }
            },
            messages:{
                title:"يجب ادخال العنوان",
                details:"يجب كتابة التفاصيل",
                image:"يجب اختيار صورة"
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