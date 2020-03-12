<!DOCTYPE html>

<html lang="en" direction="rtl" dir="rtl" style="direction: rtl">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>CerFix | الإعدادات</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700&display=swap" rel="stylesheet">

    <!--end::Fonts -->

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
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z"
                                                      fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                      fill="#000000"/>
                                                </g>
                                                </svg>
                                            </span>
										</span>
                                <h3 class="kt-portlet__head-title">
                                    الإعدادات
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">

                            <!--begin: Datatable -->
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-warning"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tabs_6_1" role="tab">البيانات
                                        العامة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tabs_6_2" role="tab">بيانات
                                        التواصل</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tabs_6_3" role="tab">السوشيال
                                        ميديا</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="kt_tabs_6_1" role="tabpanel">
                                    <form action="#" id="form_1">
                                        <div class="form-group text-center">
                                            <p>تعديل الشعار:</p>
                                            <div class="kt-avatar kt-avatar--outline position-relative"
                                                 id="kt_user_avatar">
                                                <div class="kt-avatar__holder"
                                                     style="background-image: url(assets/image/logo.svg)"></div>
                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title=""
                                                       data-original-title="تغير الشعار">
                                                    <i class="fa fa-pen"></i>
                                                    <input type="file" name="image" accept="png, jpg, jpeg, svg"
                                                           required>
                                                </label>
                                            </div>
                                            <span id="errorimage" class="error"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>اسم التطبيق عربي</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="اسم التطبيق عربي" name="titleAr" required>
                                                    <span id="errortitleAr" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>اسم التطبيق انجليزي</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="اسم التطبيق انجليزي" name="titleEn" required>
                                                    <span id="errortitleEn" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>العنوان عربي</label>
                                                    <input type="text" class="form-control" placeholder="العنوان عربي"
                                                           name="title2Ar" required>
                                                    <span id="errortitle2Ar" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>العنوان انجليزي</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="العنوان انجليزي" name="title2En" required>
                                                    <span id="errortitle2En" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>التفاصيل عربي</label>
                                                    <textarea type="text" class="form-control"
                                                              placeholder="التفاصيل عربي" name="detailsAr"
                                                              required></textarea>
                                                    <span id="errordetailsAr" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>التفاصيل انجليزي</label>
                                                    <textarea type="text" class="form-control"
                                                              placeholder="التفاصيل انجليزي" name="detailsEn"
                                                              required></textarea>
                                                    <span id="errordetailsEn" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>رابط الموقع</label>
                                                    <input type="url" class="form-control"
                                                           placeholder="رابط الموقع" name="websitelink" required>
                                                    <span id="errorwebsitelink" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-edit"></i>
                                                    تعديل
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="kt_tabs_6_2" role="tabpanel">
                                    <form action="#" id="form_2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>بريد الإدارة</label>
                                                    <input type="email" class="form-control"
                                                           placeholder="بريد الإدارة" name="manegeEmail" required>
                                                    <span id="errormanegeEmail" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>رابط تطبيق ios</label>
                                                    <input type="url" class="form-control"
                                                           placeholder="رابط تطبيق ios" name="iosLink" required>
                                                    <span id="erroriosLink" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>رابط تطبيق الأندرويد</label>
                                                    <input type="url" class="form-control"
                                                           placeholder="رابط تطبيق الأندرويد" name="androidLink" required>
                                                    <span id="errorandroidLink" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>رقم جوال</label>
                                                    <input type="url" class="form-control"
                                                           placeholder="0501234567" name="mobile" required>
                                                    <span id="errormobile" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>رقم هاتف</label>
                                                    <input type="url" class="form-control"
                                                           placeholder="022876165" name="phone" required>
                                                    <span id="errorphone" class="error"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-edit"></i>
                                                    تعديل
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="kt_tabs_6_3" role="tabpanel">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-marginless mb-3">
                                                    <label>رابط FaceBook</label>
                                                    <div class="input-group">
                                                        <input type="url" class="form-control" placeholder="https://www.facebook.com/name" aria-describedby="basic-addon2">
                                                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-marginless mb-3">
                                                    <label>رابط twitter</label>
                                                    <div class="input-group">
                                                        <input type="url" class="form-control" placeholder="https://twitter.com/name" aria-describedby="basic-addon2">
                                                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">
                                                                <i class="fab fa-twitter"></i>
                                                            </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-marginless mb-3">
                                                    <label>رابط instagram</label>
                                                    <div class="input-group">
                                                        <input type="url" class="form-control" placeholder="https://www.instagram.com/name" aria-describedby="basic-addon2">
                                                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">
                                                                <i class="fab fa-instagram"></i>
                                                            </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-marginless mb-3">
                                                    <label>رابط linkedin</label>
                                                    <div class="input-group">
                                                        <input type="url" class="form-control" placeholder="https://www.linkedin.com/in/name" aria-describedby="basic-addon2">
                                                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">
                                                                <i class="fab fa-linkedin-in"></i>
                                                            </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-marginless mb-3">
                                                    <label>
                                                        Gmail
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" placeholder="name@gmail.com" aria-describedby="basic-addon2">
                                                        <div class="input-group-append"><span class="input-group-text" id="basic-addon2">
                                                                <i class="fab fa-google"></i>
                                                            </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-edit"></i>
                                                    تعديل
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end: Datatable -->
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
    $("#form_1").validate({
        // define validation rules
        // errorLabelContainer: "#containererreurtotal",
        rules: {
        },
        messages: {
            image: "يجب اختيار شعار التطبيق",
            titleAr: "ادخل اسم التطبيق",
            titleEn: "ادخل اسم التطبيق",
            title2Ar:"يجب ادخال العنوان",
            title2En:"يجب ادخال العنوان",
            detailsAr:"يجب ادخال التفاصيل",
            detailsEn:"يجب ادخال التفاصيل",
            websitelink:"يجب ادخال رابط الموقع"
        },
        errorPlacement: function ($error, $element) {
            var name = $element.attr("name");

            $("#error" + name).append($error);
        }
    });
    $("#form_2").validate({
        // define validation rules
        // errorLabelContainer: "#containererreurtotal",
        rules: {
        },
        messages: {
            manegeEmail: "ادخل بريد الإدارة",
            iosLink: "ادخل رابط الـ ios",
            androidLink: "ادخل رابط الأندرويد",
            mobile:"ادخل رقم الجوال",
            phone:"ادخل رقم الهاتف",
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