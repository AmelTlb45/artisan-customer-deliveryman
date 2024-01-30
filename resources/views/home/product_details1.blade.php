<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    {{-- <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title> --}}

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="template/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="template/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="template/vendors//images/favicon-16x16.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="template/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="template/vendors/styles/icon-font.min.css" />

    <!-- Slick Slider css -->
    <link rel="stylesheet" type="text/css" href="template/src/plugins/slick/slick.css" />
    <!-- bootstrap-touchspin css -->
    <link rel="stylesheet" type="text/css"
        href="template/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css" />
    <link rel="stylesheet" type="text/css" href="template/vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpilMquVdAyjUar5+76PCmY1" crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
        document.addEventListener('DOMContentLoaded', function() {
            var animatedDiv = document.getElementById('animatedDiv');
            animatedDiv.style.opacity = 5; // Change l'opacité à 1 (visible) une fois que la page est chargée
        });
    </script>
      <script>
        function rate1() {
            if(document.getElementById('star1').checked){
                document.getElementById('s1').style.color = 'yellow';
                document.getElementById('s2').style.color = '#ddd';
                        document.getElementById('s3').style.color = '#ddd';
                        document.getElementById('s4').style.color = '#ddd';
                        document.getElementById('s5').style.color = '#ddd';
            }
                    }
                    function rate2() {
                        if(document.getElementById('star2').checked){
                document.getElementById('s1').style.color = 'yellow';
                document.getElementById('s2').style.color = 'yellow';
                document.getElementById('s3').style.color = '#ddd';
                        document.getElementById('s4').style.color = '#ddd';
                        document.getElementById('s5').style.color = '#ddd';
            }
                    }
                    function rate3() {
                        if(document.getElementById('star3').checked){
                document.getElementById('s1').style.color = 'yellow';
                document.getElementById('s2').style.color = 'yellow';
                document.getElementById('s3').style.color = 'yellow';
                document.getElementById('s4').style.color = '#ddd';
                        document.getElementById('s5').style.color = '#ddd';

            }
                    }
                    function rate4() {
                        if(document.getElementById('star4').checked){
                        document.getElementById('s1').style.color = 'yellow';
                        document.getElementById('s2').style.color = 'yellow';
                        document.getElementById('s3').style.color = 'yellow';
                        document.getElementById('s4').style.color = 'yellow';
                        document.getElementById('s5').style.color = '#ddd';

                        }
                    }
                    function rate5() {
                        if(document.getElementById('star5').checked){

                        document.getElementById('s1').style.color = 'yellow';
                        document.getElementById('s2').style.color = 'yellow';
                        document.getElementById('s3').style.color = 'yellow';
                        document.getElementById('s4').style.color = 'yellow';
                        document.getElementById('s5').style.color = 'yellow';
                        }
                    }

        // $(document).ready(function () {
        //     $('.rate input').click(function () {
        //         // Désélectionner toutes les étoiles
        //         $('.rate label').css('color', '#ddd');

        //         // Sélectionner toutes les étoiles jusqu'à celle sur laquelle vous avez cliqué
        //         $(this).prevAll('input').addBack().prevAll('label').css('color', 'yellow');
        //     });


       // });
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <style>
          body {
        margin: 0;
        padding: 0;
        background: url('template/src/images/detail_produit.png') no-repeat center center fixed;
        background-size: cover;
        }
        .progress-label-left>i:before {
            content: '★ ';
        }

        :root {
            --primary-color: #f7bf17;

            --linear: #ef5350;

            --white: #fff;

            --r-color: #d63031;

            --light-b: #686de0;
        }

        .rating-review {

            height: 100%;

            width: 85%;

            margin: 80px auto;

            background-color: #fefefe;
        }

        .rating-review table,

        .rating-review td {

            font-size: .8125rem;

            text-align: center;

        }

        .rating-review table {

            width: 100%;

            margin: 0;

            font-family: "roboto", sans-serif;

            border-collapse: collapse;

            border-spacing: 0;

            color: #8f8f8f;

            margin-bottom: .625rem;

        }

        .rating-review td {

            padding: 1rem;

            width: 33.3%;
        }

        .tri {

            border-bottom: 1px solid #e2e2e2;

            padding: 12px;

        }

        .rnb h3 {

            color: var(--primary-color);

            font-size: 2.4rem;

            font-family: "roboto", sans-serif;

        }

        .tri .pdt-rate {

            height: 40px;

            display: flex;

            justify-content: center;

            align-items: center;

            flex-direction: column;
        }

        .rating-stars {

            position: relative;

            vertical-align: baseline;

            color: #b9b9b9;

            line-height: 10px;

            float: left;

        }

        .grey-stars {

            height: 100%;

        }

        .filled-stars {

            position: absolute;

            left: 1px;

            top: 2px;

            height: 100%;

            overflow: hidden;

            color: var(--primary-color);
        }

        .filled-stars::before,

        -grey-stars::before {

            content: "12605 12605 12605 12605 12605";

            font-size: 19px;

            line-height: 18px;

            letter-spacing: 0;

        }

        .tri filled-stars::before,

        .tri .grey-stars::before {

            font-size: 20px;

            line-height: 23px;
            I
        }

        .rnrn {
            width: 100%;
            font-family: "lato";

            font-weight: 700;

            font-size: 1rem;
        }

        .rpb {

            width: 100%;

            display: flex;

            flex-direction: column;

            align-items: center;

        }

        .rnpb {

            display: flex;

            width: 100%;

        }

        .rnpb label:first-child {

            margin-right: 5px;

            margin-top: -2px;

            .rnpb label:last-child {

                margin-left: 3px;

                margin-top: -2px;
            }

            .rnpb label i {

                color: var(--primary-color);

            }

            .ropb {

                height: 10px;

                width: 75%;

                background-color: #f1f1f1;

                position: relative;

                margin-bottom: 10px;

            }

            .ripb {

                height: 100%;

                background-color: var(--primary-color);

                border: 1px solid #a0a0a0;

            }

            .rrb p {

                font-size: 1rem;

                font-weight: 500;

                font-family: "raleway";

                margin-bottom: 10px;

            }

            .slick-slider {
                position: relative;
                display: block;
                box-sizing: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -webkit-touch-callout: none;
                -khtml-user-select: none;
                -ms-touch-action: pan-y;
                touch-action: pan-y;
                -webkit-tap-highlight-color: transparent;
            }

            .page-header.h1 {
                animation: rotateAnimation 10s infinite;
                /* Ajoute une animation de rotation infinie de 2 secondes */
            }

            @keyframes rotateAnimation {

                0%,
                50%,
                100% {
                    opacity: 1;
                }

                25%,
                75% {
                    opacity: 0;
                }
            }
    </style>
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="template/vendors/images/deskapp-logo.svg" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div>




    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                <div class="sidebar-radio-group pb-10 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-1" checked="" />
                        <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-2" />
                        <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-3" />
                        <label class="custom-control-label" for="sidebaricon-3"><i
                                class="fa fa-angle-double-right"></i></label>
                    </div>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                <div class="sidebar-radio-group pb-30 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-1" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-1" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-1"><i
                                class="ion-minus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-2" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-2" />
                        <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                                aria-hidden="true"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-3" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-3" />
                        <label class="custom-control-label" for="sidebariconlist-3"><i
                                class="dw dw-check"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-4" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-4" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-4"><i
                                class="icon-copy dw dw-next-2"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-5" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-5" />
                        <label class="custom-control-label" for="sidebariconlist-5"><i
                                class="dw dw-fast-forward-1"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-6" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-6" />
                        <label class="custom-control-label" for="sidebariconlist-6"><i
                                class="dw dw-next"></i></label>
                    </div>
                </div>

                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">
                        Reset Settings
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <img src="template/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
                <img src="template/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="index.html">Dashboard style 1</a></li>
                            <li><a href="index2.html">Dashboard style 2</a></li>
                            <li><a href="index3.html">Dashboard style 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-textarea-resize"></span><span class="mtext">Forms</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="form-basic.html">Form Basic</a></li>
                            <li>
                                <a href="advanced-components.html">Advanced Components</a>
                            </li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="html5-editor.html">HTML5 Editor</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="image-cropper.html">Image Cropper</a></li>
                            <li><a href="image-dropzone.html">Image Dropzone</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-table"></span><span class="mtext">Tables</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="basic-table.html">Basic Tables</a></li>
                            <li><a href="datatable.html">DataTables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-calendar4-week"></span><span class="mtext">Calendar</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-archive"></span><span class="mtext"> UI Elements </span>
                        </a>
                        <ul class="submenu">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-cards-hover.html">Cards Hover</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-tabs.html">Tabs</a></li>
                            <li>
                                <a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
                            </li>
                            <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="ui-notification.html">Notification</a></li>
                            <li><a href="ui-timeline.html">Timeline</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-list-group.html">List group</a></li>
                            <li><a href="ui-range-slider.html">Range slider</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-command"></span><span class="mtext">Icons</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="bootstrap-icon.html">Bootstrap Icons</a></li>
                            <li><a href="font-awesome.html">FontAwesome Icons</a></li>
                            <li><a href="foundation.html">Foundation Icons</a></li>
                            <li><a href="ionicons.html">Ionicons Icons</a></li>
                            <li><a href="themify.html">Themify Icons</a></li>
                            <li><a href="custom-icon.html">Custom Icons</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-pie-chart"></span><span class="mtext">Charts</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="highchart.html">Highchart</a></li>
                            <li><a href="knob-chart.html">jQuery Knob</a></li>
                            <li><a href="jvectormap.html">jvectormap</a></li>
                            <li><a href="apexcharts.html">Apexcharts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-file-earmark-text"></span><span class="mtext">Additional
                                Pages</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="video-player.html">Video Player</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                            <li><a href="reset-password.html">Reset Password</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-bug"></span><span class="mtext">Error Pages</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="400.html">400</a></li>
                            <li><a href="403.html">403</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="500.html">500</a></li>
                            <li><a href="503.html">503</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-back"></span><span class="mtext">Extra Pages</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="blank.html">Blank</a></li>
                            <li><a href="contact-directory.html">Contact Directory</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                            <li><a href="product.html">Product</a></li>
                            <li><a href="product-detail.html">Product Detail</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="pricing-table.html">Pricing Tables</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-hdd-stack"></span><span class="mtext">Multi Level Menu</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="javascript:;">Level 1</a></li>
                            <li><a href="javascript:;">Level 1</a></li>
                            <li><a href="javascript:;">Level 1</a></li>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
                                </a>
                                <ul class="submenu child">
                                    <li><a href="javascript:;">Level 2</a></li>
                                    <li><a href="javascript:;">Level 2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Level 1</a></li>
                            <li><a href="javascript:;">Level 1</a></li>
                            <li><a href="javascript:;">Level 1</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="sitemap.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-diagram-3"></span><span class="mtext">Sitemap</span>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="invoice.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Invoice</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Extra</div>
                    </li>
                    <li>
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-file-pdf"></span><span class="mtext">Documentation</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="introduction.html">Introduction</a></li>
                            <li><a href="getting-started.html">Getting Started</a></li>
                            <li><a href="color-settings.html">Color Settings</a></li>
                            <li>
                                <a href="third-party-plugins.html">Third Party Plugins</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://dropways.github.io/deskapp-free-single-page-website-template/"
                            target="_blank" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-layout-text-window-reverse"></span>
                            <span class="mtext">Landing Page
                                <img src="template/vendors/images/coming-soon.png" alt=""
                                    width="25" /></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    @if ($product)
        <div class="main-container">
            <div class="page-header"
                style=" margin-top:0vh;
            text-align: center;
            margin-top: 20vh;
            opacity: 0;
            width: 80%;
            margin: 0 auto;
            transition: opacity 10s ease-in-out;"
                id="animatedDiv">
                <h3 class="word" style="text-align: center; margin-top: 0vh; color:">
                    Click for a tasty treat</h3>
            </div><br>

            <script>
                words = ['hey I like SASS', 'I used to like LESS', 'I also heart Jade'],
                    part,
                    i = 0,
                    offset = 0,
                    len = words.length,
                    forwards = true,
                    skip_count = 0,
                    skip_delay = 5,
                    speed = 100;

                var wordflick = function() {
                    setInterval(function() {
                        if (forwards) {
                            if (offset >= words[i].length) {
                                ++skip_count;
                                if (skip_count == skip_delay) {
                                    forwards = false;
                                    skip_count = 0;
                                }
                            }
                        } else {
                            if (offset == 0) {
                                forwards = true;
                                i++;
                                offset = 0;
                                if (i >= len) {
                                    i = 0;
                                }
                            }
                        }
                        part = words[i].substr(0, offset);
                        if (skip_count == 0) {
                            if (forwards) {
                                offset++;
                            } else {
                                offset--;
                            }
                        }
                        $('.word').text(part);
                    }, speed);
                };

                $(document).ready(function() {
                    wordflick();
                });
            </script>
            <style>
                @import url(https://fonts.googleapis.com/css?family=Montserrat:700);

                .word {
                    margin: auto;
                    color: white;
                    font: 700 normal 4em/1.5 "Montserrat", sans-serif;
                    text-shadow: 1px 2px #bc8f1d, 2px 4px #bc8f1d, 3px 6px #bc8f1d, 4px 8px #bc8f1d, 5px 10px #bc8f1d, 6px 12px #bc8f1d, 7px 14px #bc8f1d, 8px 16px #bc8f1d, 9px 18px #bc8f1d, 10px 20px #bc8f1d;
                }
            </style>

            <div class="product-wrap">
                <div class="product-detail-wrap mb-30">
                    <div class="row">

                        {{-- <div class="product-slider slider-arrow"> --}}
                        <div class="product-slide col-lg-4 col-md-10 col-sm-6">
                            <img style=" width:500px ; hieght:50px;" src="{{ asset($product->image) }}"
                                alt="{{ $product->name_prod }}" />
                        </div>



                        <div class="col-lg-8 col-md-12 col-sm-6">
                            <div class="product-detail-desc pd-20 card-box height-100-p ">
                                <h4 style="color:#F1C93B">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                    &nbsp;&nbsp;{{ $product->name_prod }}</h4>

                                <p> <label style="color:#F1C93B"><b>Minimum
                                            Quantity </b></label>&nbsp;&nbsp;{{ $product->quantity_min }}</p>
                                <p><label style="color:#F1C93B"><b>description : </b></label>&nbsp;&nbsp;
                                    {{ $product->description }}
                                </p>

                                <div class="price"><ins> <label style="color:#F1C93B"><b>Price:
                                            </b></label>&nbsp;&nbsp;
                                        {{ $product->price }} DA</ins>
                                </div>


                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <label style="color:#F1C93B"><b>Quantity :</b></label>

                                    <form action="{{ url('/add_cart', $product->id) }}" method="POST"
                                        style="display: flex; align-items: center;">
                                        @csrf
                                        <input id="demo3_22" type="text" value="1"
                                            name="demo3_22"style="width: 100px; padding: 5px; " /> &nbsp;&nbsp;
                                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <button class="btn btn-primary btn-block"
                                            style="color:rgb(251, 245, 236); width: 300px; height: 50px; display: inline-block;  margin-left: 10px;">Add
                                            To Cart</button>
                                    </form>
                                </div>



                                <div class="col-md-12 col-6">

                                    {{-- <form action="{{ url('/add_cart', $product->id) }}"method="POST">
                                                    @csrf
                                                    <label class="text-blue">Action   </label>
                                                    <button class="btn btn-primary btn-block"
                                                        style="  color:rgb(251, 245, 236);  width: 200px; height: 50px;">Add To Cart</button>

                                                </form> --}}



                                </div>

                                <div class="span4 col-sm-8 col-lg-5">
                                    <h2 style="color:#000000"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User
                                        Reviews</h2>


                                    @php
                                        $count = $oneStarCount + $twoStarCount + $threeStarCount + $fourStarCount + $fiveStarCount;
                                        $average = $count != 0 ? ($oneStarCount * 1 + $twoStarCount * 2 + $threeStarCount * 3 + $fourStarCount * 4 + $fiveStarCount * 5) / $count : 0;

                                    @endphp
                                </div>


                                <div class="container">

                                    <div>

                                        <div class="row">
                                            {{-- <div class="col-sm-4 text-center"> --}}
                                            <div class="col-sm-8 col-lg-6 custom-width">
                                                <h1 class="text-warning mt-4 mb-4">
                                                    <b><span id="average_rating">{{ intval($average) }}</span>
                                                        /
                                                        5</b>
                                                </h1>

                                                <h3><span id="total_review">{{ $count }} Review</span>
                                                </h3>



                                                <div class="progress-label-left col-sm-8 col-lg-3 "><b>5</b> <i
                                                        class="fas fa-star text-warning"><span
                                                            id="total_five_star_review"
                                                            style="color: #000000">({{ $fiveStarCount }})</span></i>
                                                </div>
                                                <div class="progress-label-right">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            @php
$progressWidth = ($average != 0) ? ($fiveStarCount / $average) * 100 : 0; @endphp
                                                            style="width: {{ $progressWidth }}%;"
                                                            aria-valuenow="{{ $progressWidth }}" aria-valuemin="0"
                                                            aria-valuemax="100" id="five_star_progress">
                                                        </div>
                                                    </div>


                                                    <div class="progress-label-left"><b>4</b> <i
                                                            class="fas fa-star text-warning">
                                                            <span id="total_four_star_review"
                                                                style="color: #000000">({{ $fourStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">

                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            @php
$progressWidth = ($average != 0) ? ($fiveStarCount / $average) * 100 : 0; @endphp
                                                            style="width: {{ $progressWidth }}%;"
                                                            aria-valuenow="{{ $progressWidth }}" aria-valuemin="0"
                                                            aria-valuemax="100" id="five_star_progress">
                                                        </div>
                                                    </div>


                                                    <div class="progress-label-left"><b>3</b> <i
                                                            class="fas fa-star text-warning"><span
                                                                id="total_three_star_review"
                                                                style="color: #000000">({{ $threeStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            @php
$progressWidth = ($average != 0) ? ($fiveStarCount / $average) * 100 : 0; @endphp
                                                            style="width: {{ $progressWidth }}%;"
                                                            aria-valuenow="{{ $progressWidth }}" aria-valuemin="0"
                                                            aria-valuemax="100" id="five_star_progress">
                                                        </div>
                                                    </div>

                                                    <p>
                                                    <div class="progress-label-left"><b>2</b> <i
                                                            class="fas fa-star text-warning"> <span
                                                                id="total_one_star_review"
                                                                style="color: #000000">({{ $twoStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            @php
$progressWidth = ($average != 0) ? ($twoStarCount / $average) * 100 : 0; @endphp
                                                            style="width: {{ $progressWidth }}%;"
                                                            aria-valuenow="{{ $progressWidth }}" aria-valuemin="0"
                                                            aria-valuemax="100" id="five_star_progress">
                                                        </div>
                                                    </div>
                                                    </p>

                                                    <p>
                                                    <div class="progress-label-left"><b>1</b> <i
                                                            class="fas fa-star text-warning"> <span
                                                                id="total_one_star_review"
                                                                style="color: #000000">({{ $oneStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            @php
$progressWidth = ($average != 0) ? ($oneStarCount / $count) * 100 : 0; @endphp
                                                            style="width: {{ $progressWidth }}%;"
                                                            aria-valuenow="{{ $progressWidth }}"
                                                            aria-valuemax="100" id="five_star_progress">
                                                        </div>
                                                    </div>
                                                    </p>
                                                </div>

                                            </div>
                                            <div classe="span4 col-sm-4 col-lg-7">
                                                <h2 class="comment">All Comments</h2>

                                                <div class="comment-section">

                                                    <div>

                                                        @foreach ($reviews as $review)
                                                        <div>
                                                            <strong>{{ $review->user->name}}</strong>
                                                            <p>{{ $review->review }}</p> <br>
                                                        </div>
                                                        @endforeach

                                                    </div>


                                                </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="container ">
                                        <div class="span4">
                                            <h5>Your Review </h5>
                                            <div class="span4" style="align-items: center; height: 10vh;">

                                                <form action="{{ url('/add_rating') }}" method="POST" style="display: flex; align-items">
                                                    <script>
                                                        $(document).ready(function () {
                                                            // Gérer le survol des étiquettes de type radio
                                                            $('input[type="radio"]').hover(function () {
                                                                $(this).closest('.rate').css('background-color', 'yellow');
                                                            }, function () {
                                                                $(this).closest('.rate').css('background-color', ''); // Réinitialiser la couleur de fond
                                                            });
                                                        });
                                                    </script>
                                                    @csrf
                                                    <input type="hidden" value="{{$product->id}}" name="prod_id"/>
                                                   {{-- <div> <div class="rate">
                                                        <input type="radio" id="star5" name="rating"
                                                            value="5" />
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input class="fas fa-star-light mr-1 main_star" type="radio" id="star4" name="rating"
                                                            value="4" />
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" name="rating"
                                                            value="3" />
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" name="rating"
                                                            value="2" />
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" name="rating"
                                                            value="1" />
                                                        <label for="star1" title="text">1 star</label>


                                                    </div> --}}
                                                    <style>
                                                        .rate {
                                                            display: inline-block;
                                                        }

                                                        .rate input {
                                                            display: none;
                                                        }

                                                        .rate label {
                                                            font-size: 30px;
                                                            color: #ddd;
                                                            cursor: pointer;
                                                            transition: color 0.3s ease;
                                                        }

                                                        .rate input:checked + label,
                                                        .rate label:hover,
                                                        .rate label:hover ~ label {
                                                            color: yellow; /* Change this to your desired hover color */
                                                        }
                                                    </style>


                                                    <div class="rate">
                                                        <input type="radio" id="star5" name="rating" value="5"
                                                        onclick="rate5()" />
                                                        <label for="star5" title="5 stars" id="s5">&#9733;</label>
                                                        <input type="radio" id="star4" name="rating" value="4"
                                                        onclick="rate4()"  />
                                                        <label for="star4" title="4 stars" id="s4">&#9733;</label>
                                                        <input type="radio" id="star3" name="rating" value="3"
                                                        onclick="rate3()" />
                                                        <label for="star3" title="3 stars" id="s3">&#9733;</label>
                                                        <input type="radio" id="star2" name="rating" value="2"
                                                        onclick="rate2()" />
                                                        <label for="star2" title="2 stars" id="s2">&#9733;</label>
                                                        <input type="radio" id="star1" name="rating" value="1"
                                                        onclick="rate1()"/>
                                                        <label for="star1" title="1 star" id="s1">&#9733;</label>
                                                        <i class="fas fa-star-light mr-1 main_star"></i>
                                                    </div>

                                                    <br>
                                                  <div>  <textarea name="review" style=" width:300px ; hieght:50px;"></textarea>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="width: 100px; height: 50px;"
                                                        class="btn btn-primary btn-block"
                                                        type="submit">comment</button>
                                                    </div>

                                                   </form>



                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>
                                <div class="product-list">
                                    <br><br>
                                    <ul class="row">
                                        <!---pour les photos--->

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <li class="col-lg-2 col-md-12 col-sm-12">

                                            <div class="producct-img mx-auto">
                                                <img src="template/src/images/1.png" alt="" />
                                            </div>

                                        </li>
                                        <li class="col-lg-2 col-md-12 col-sm-12">

                                            <div class="producct-img mx-auto">
                                                <img src="template/src/images/2.png" alt="" />
                                            </div>

                                        </li>
                                        <li class="col-lg-2 col-md-12 col-sm-12">

                                            <div class="producct-img mx-auto">
                                                <img src="template/src/images/3.png" alt="" />
                                            </div>

                                        </li>
                                        <li class="col-lg-2 col-md-12 col-sm-12">

                                            <div class="producct-img mx-auto">
                                                <img src="template/src/images/4.png" alt="" />
                                            </div>

                                        </li>
                                        <li class="col-lg-2 col-md-12 col-sm-2"">

                                            <div class="producct-img mx-auto">
                                                <img src="template/src/images/5.png" alt="" />
                                            </div>
                                        </li>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- </li> --}}
                </ul>
            {{-- </div> --}}
        </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By
            <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
        </div>
    </div>
@endif
        <!-- welcome modal start -->
        <div class="welcome-modal">
            <button class="welcome-modal-close">
                <i class="bi bi-x-lg"></i>
            </button>
            <iframe class="w-100 border-0" src="https://embed.lottiefiles.com/animation/31548"></iframe>
            <div class="text-center">
                <h3 class="h5 weight-500 text-center mb-2">
                    Open source
                    <span role="img" aria-label="gratitude">❤️</span>
                </h3>
                <div class="pb-2">
                    <a class="github-button" href="https://github.com/dropways/deskapp"
                        data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                        data-size="large" data-show-count="true"
                        aria-label="Star dropways/deskapp dashboard on GitHub">Star</a>
                    <a class="github-button" href="https://github.com/dropways/deskapp/fork"
                        data-color-scheme="no-preference: dark; light: light; dark: light;"
                        data-icon="octicon-repo-forked" data-size="large" data-show-count="true"
                        aria-label="Fork dropways/deskapp dashboard on GitHub">Fork</a>
                </div>
            </div>
            <div class="text-center mb-1">
                <div>
                    <a href="https://github.com/dropways/deskapp" target="_blank"
                        class="btn btn-light btn-block btn-sm">
                        <span class="text-danger weight-600">STAR US</span>
                        <span class="weight-600">ON GITHUB</span>
                        <i class="fa fa-github"></i>
                    </a>
                </div>
                <script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
            </div>
            <a href="https://github.com/dropways/deskapp" target="_blank"
                class="btn btn-success btn-sm mb-0 mb-md-3 w-100">
                DOWNLOAD
                <i class="fa fa-download"></i>
            </a>
            <p class="font-14 text-center mb-1 d-none d-md-block">
                Available in the following technologies:
            </p>
            <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
                <i class="fa fa-html5"></i>
            </div>
        </div>

        <!-- welcome modal end -->
        <!-- js -->
        <script src="template/vendors/scripts/core.js"></script>
        <script src="template/vendors/scripts/script.min.js"></script>
        <script src="template/vendors/scripts/process.js"></script>
        <script src="template/vendors/scripts/layout-settings.js"></script>
        <!-- Slick Slider js -->
        <script src="src/plugins/slick/slick.min.js"></script>
        <!-- bootstrap-touchspin js -->
        <script src="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
        <script>
            jQuery(document).ready(function() {
                jQuery(".product-slider").slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    infinite: true,
                    speed: 1000,
                    fade: true,
                    asNavFor: ".product-slider-nav",
                });
                jQuery(".product-slider-nav").slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: ".product-slider",
                    dots: false,
                    infinite: true,
                    arrows: false,
                    speed: 1000,
                    centerMode: true,
                    focusOnSelect: true,
                });
                $("input[name='demo3_22']").TouchSpin({
                    initval: 1,
                });
            });
        </script>

</body>

</html>
