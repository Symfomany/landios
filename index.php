
<?php
    if (isset($_POST["email"]) && !empty($_POST["email"])) {
        $headers = "From: \"Interesse\"<${$_POST["email"]}>\n";
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
        $msg = "
        <h3>Coordonnées</h3>
        <p>Nom: {$_POST["name"]}</p>
        <p>Email: {$_POST["email"]}</p>
        <p>Telphone: {$_POST["phone"]}</p>

        <h3>Contenu</h3>
        <p>Sujet: {$_POST["subject"]}</p>
        <p>Message: {$_POST["message"]}</p>";
        
        $sujet = "[Contact d'un interessé] Interessé pour ".$_POST['subject'];
        mail("contact@ios-formation.fr",$sujet, $msg, $headers);
    }

?>



<html class="no-touch admin-mode webkit chrome chrome69 mac mac10 mac10_13 js no-hidpi datauri minw_1200 orientation_landscape"
lang="fr-FR" xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name|http-equiv="Formation iOS, Formation XCode, Formation Swift" content="Formation iOS, Formation XCode, Formation Swift" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<title>Formation iOS à Lyon iOS de Apple pour iPhone</title>

<meta name="title" content="Formation iOS à Lyon pour Apple iPhone avec XCode">
<meta name="description" content="Formation Digital sur iOS Apple iPhone pour iPhone avec XCode" />
<meta name="syndication-source" content="https://ios-formation.fr">
<meta name="original-source" content="https://ios-formation.fr">
<meta name="country" content="France">
<meta name="state" content="Rhône-Alpes">
<meta name="city" content="Lyon">
<meta name="category" content="Formation iOS à Lyon">


<link rel="apple-touch-icon" sizes="57x57" href="/img/icons/img/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/img/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


<meta name="geo.region" content="FR-51" />
<meta name="geo.placename" content="Lyon" />
<meta name="geo.position" content="45.756901;4.852230" />
<meta name="ICBM" content="45.756901, 4.852230" />
<meta name="author" content="Digital Online" />
<meta name="copyright" content="© 2018-2019 Digital Online" />
<meta name="DC.Title" lang="fr" content="Un document en HTML" />
<meta name="DC.Date.created" scheme="W3CDTF" content="2018-04-03" />
<meta name="DC.Date.modified" scheme="W3CDTF" content="2018-04-27" />
<meta http-equiv="Content-Language" content="fr-CA" />
<meta http-equiv="Cache-Control" content="max-age=600" />
<meta name="generator" content="Formation iOS à Lyon sous XCode pour Apple iPhone">

<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">

<link rel="stylesheet" id="uncodefont-google-css" href="//fonts.googleapis.com/css?family=Poppins%3A300%2Cregular%2C500%2C600%2C700%7CDroid+Serif%3Aregular%2Citalic%2C700%2C700italic%7CDosis%3A200%2C300%2Cregular%2C500%2C600%2C700%2C800%7CPlayfair+Display%3Aregular%2Citalic%2C700%2C700italic%2C900%2C900italic%7COswald%3A300%2Cregular%2C700%7CRoboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CNunito%3A200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic&amp;subset=devanagari%2Clatin-ext%2Clatin%2Ccyrillic%2Cvietnamese%2Cgreek%2Ccyrillic-ext%2Cgreek-ext&amp;ver=1.0.0">
<link rel="stylesheet" id="uncode-custom-style-css" href="css/style-custom.css" type="text/css" media="all">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="canonical" href="https://ios-formation.fr">
<link rel="shortlink" href="https://ios-formation.fr">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/animate.min.css">

<link rel="manifest" href="./manifest.json">

</head>

<body class="home page-template-default page page-id-72416 page-child parent-pageid-43938 logged-in admin-bar style-color-wayh-bg hormenu-position-left hmenu hmenu-position-right header-full-width main-center-align menu-mobile-animated menu-mobile-transparent menu-mobile-centered wc-zoom-enabled wpb-js-composer js-comp-ver-5.5.2 vc_responsive customize-support hide-scrollup"
data-border="0">
<div class="box-wrapper">
    <a class="logo" title="Formation iOS à Lyon 3 sur iPhone"><img alt="Formation iOS pour iPhone à Lyon" src="img/logo.png" /></a>
    <div class="box-container">
        <div class="main-wrapper">
            <div class="main-container">
                <div class="page-wrapper">
                    <div class="sections-container">
                        <div id="page-header" class="header-style-dark" data-imgready="true">
                            <!-- Introduction -->
                            <div class="remove-menu-padding header-wrapper header-uncode-block">
                                <div data-parent="true" class="vc_row gradient style-color-wayh-bg row-container with-parallax onepage-section has-dividers boomapps_vcrow"
                                    data-label="iphone" data-name="iphone" data-section="0">
                                    <div class="row-background background-element">
                                        <div class="background-wrapper">
                                            <video style="position: fixed;
                                                right: 0;
                                                bottom: 0;
                                                min-width: 100%; 
                                                min-height: 100%;
                                                background-position: center;
                                                background-repeat: no-repeat;
                                                background-size: cover;"
                                                autoplay muted loop id="myVideo">
                                                <source src="uploads/2018/04/video-placeholder.mp4" type="video/mp4">
                                            </video>
                                            <div class="block-bg-overlay style-color-105898-bg" style="opacity: 0.8;"></div>
                                        </div>
                                    </div>

                                    <div class="uncode-divider-wrap uncode-divider-wrap-bottom z_index_3" style="height: 320px;"
                                        data-height="400" data-unit="px">
                                        <svg version="1.1" class="uncode-row-divider uncode-row-divider-swoosh-opacity"
                                            x="0px" y="0px" width="240px" height="24px" viewBox="0 0 240 24"
                                            enable-background="new 0 0 240 24" xml:space="preserve"
                                            preserveAspectRatio="none">
                                            <path fill="#ffffff" fill-opacity="0.33" d="M240,24V0c-51.797,0-69.883,13.18-94.707,15.59c-24.691,2.4-43.872-1.17-63.765-1.08
                                            c-19.17,0.1-31.196,3.65-51.309,6.58C15.552,23.21,4.321,22.471,0,22.01V24H240z"></path>
                                            <path fill="#ffffff" fill-opacity="0.33" d="M240,24V2.21c-51.797,0-69.883,11.96-94.707,14.16
                                            c-24.691,2.149-43.872-1.08-63.765-1.021c-19.17,0.069-31.196,3.311-51.309,5.971C15.552,23.23,4.321,22.58,0,22.189V24h239.766H240
                                            z"></path>
                                            <path fill="#ffffff" d="M240,24V3.72c-51.797,0-69.883,11.64-94.707,14.021c-24.691,2.359-43.872-3.25-63.765-3.17
                                            c-19.17,0.109-31.196,3.6-51.309,6.529C15.552,23.209,4.321,22.47,0,22.029V24H240z"></path>
                                        </svg>
                                    </div>

                                    <div class="row col-double-gutter triple-top-padding no-bottom-padding single-h-padding limit-width row-parent row-header"
                                        data-height-ratio="97" data-row-header="true" data-imgready="true">
                                        <div  class="row-inner cols-md-responsive">
                                            <div class="pos-bottom pos-center align_left align_center_mobile column_parent col-lg-12 boomapps_vccolumn col-md-100 single-internal-gutter">
                                                <div class="uncol style-dark">
                                                    <div class="uncoltable">
                                                        <div class="uncell  boomapps_vccolumn no-block-padding">
                                                            <div class="uncont">
                                                                <div class="row-internal row-container boomapps_vcrow">
                                                                    <div class="row unequal row-child">
                                                                        <div class="row-inner cols-md-responsive">
                                                                            <div class="pos-middle pos-center align_left align_center_mobile column_child col-lg-5 boomapps_vccolumn col-md-50 half-internal-gutter">
                                                                                <div class="uncol style-dark shift_y_neg_quad">
                                                                                    <div class="uncoltable">
                                                                                        <div class="uncell  boomapps_vccolumn no-block-padding">
                                                                                            <div class="uncont  mobile-top">
                                                                                                <div class="heading-text el-text">
                                                                                                    <h2 id="concepts" class="font-762333 fontsize-338686 fontheight-179065 fontspace-111509 font-weight-800">
                                                                                                        <span>Formation
                                                                                                            iOS à
                                                                                                            Lyon</span>
                                                                                                    </h2>
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                                <div class="heading-text el-text">
                                                                                                    <h3 class="h4 fontheight-357766 font-weight-300">
                                                                                                        <span>
                                                                                                            70
                                                                                                            heures
                                                                                                            de
                                                                                                            formation
                                                                                                            intensive
                                                                                                            et
                                                                                                            concrète
                                                                                                            autour
                                                                                                            d'une
                                                                                                                application iOS
                                                                                                                développée
                                                                                                                de
                                                                                                                A-Z
                                                                                                            sur
                                                                                                            iPhone
                                                                                                            et iPad
                                                                                                            à Lyon
                                                                                                            3e
                                                                                                        </span>
                                                                                                    </h3>
                                                                                                </div>
                                                                                                <div class="clear"></div>
                                                                                                <div class="empty-space empty-single mobile-hidden">
                                                                                                    <span class="empty-space-inner"></span>
                                                                                                </div>
                                                                                                <span class="btn-container btn-inline">
                                                                                                    <a 
                                                                                                        target="_blank"
                                                                                                            title="Programme de la formation iOS"
                                                                                                            href="uploads/programme.pdf"
                                                                                                        class="custom-link btn btn-lg border-width-0 btn-accent btn-flat btn-icon-left"
                                                                                                       ><i style="vertical-align: middle" class="material-icons">search</i>Voir le programme</a>
                                                                                                </span>
                                                                                                <span class="btn-container btn-inline">
                                                                                                    <a title="Contactez la formation iOS iPhone"
                                                                                                        href="#contactez-nous"
                                                                                                        class="contactez custom-link btn btn-lg border-width-0 btn-default btn-flat btn-icon-left"
                                                                                                       ><i
                                                                                                            style="vertical-align: middle"
                                                                                                            class="material-icons">email</i> Prise de contact</a>
                                                                                                </span>

                                                                                                <div class="empty-space empty-single mobile-hidden">
                                                                                                    <span class="empty-space-inner"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="pos-bottom pos-center align_left column_child col-lg-6 boomapps_vccolumn mobile-hidden col-md-50 single-internal-gutter">
                                                                                <div class="uncol style-light">
                                                                                    <div class="uncoltable">
                                                                                        <div class="uncell  boomapps_vccolumn no-block-padding">
                                                                                            <div class="uncont">
                                                                                                <div class="uncode-single-media  text-center">
                                                                                                    <div class="single-wrapper"
                                                                                                        style="max-width: 480px;">
                                                                                                        <div data-wow-duration="1s" class="wow slideInUp tmb tmb-light tmb-media-first tmb-media-last tmb-content-overlay tmb-no-bg">
                                                                                                            <div
                                                                                                                class="t-inside">
                                                                                                                <div
                                                                                                                    class="t-entry-visual">
                                                                                                                    <div
                                                                                                                        class="t-entry-visual-tc">
                                                                                                                        <div
                                                                                                                            class="uncode-single-media-wrapper">
                                                                                                                            <img
                                                                                                                                src="uploads/2018/04/iphone-x-min-uai-516x992.png"
                                                                                                                                width="516"
                                                                                                                                height="806"
                                                                                                                                
                                                                                                                                alt="">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section -->
                        <article id="post-72416" class="page-body style-color-xsdn-bg post-72416 page type-page status-publish has-post-thumbnail hentry page_category-creative">
                            <div class="post-wrapper">
                                <div class="post-body">
                                    <div class="post-content">

                                        <div data-parent="true" class="vc_row row-container has-dividers boomapps_vcrow" data-section="1">
                                            <div class="row col-double-gutter triple-top-padding double-bottom-padding single-h-padding limit-width row-parent"
                                                data-imgready="true">
                                                <div class="row-inner cols-md-responsive">
                                                   
                                                    <!-- Article 1 -->
                                                    <div class="pos-top pos-center align_left column_parent col-lg-3 boomapps_vccolumn col-md-33 single-internal-gutter">
                                                        <div class="uncol style-light">
                                                            <div class="uncoltable">
                                                                <div class="uncell  boomapps_vccolumn no-block-padding">
                                                                    <div class="uncont">
                                                                        <div class="animate_when_almost_visible zoom-out icon-box icon-box-top start_animation"
                                                                            data-delay="200">
                                                                            <div class="icon-box-icon fa-container">
                                                                                <span class="text-default-color btn-disable-hover"></span>
                                                                            </div>
                                                                            <div class="icon-box-content">
                                                                                <div class="icon-box-heading icon-box-fa-1x">
                                                                                    <svg id="my-svg" x="0px" y="0px"
                                                                                        width="80"
                                                                                        viewBox="0 0 512 512">
                                                                                 
                                                                                        <path  stroke-width="5"   fill="none" stroke="#e9168c"
                                                                                            d="M512,160L256,32L0,160l256,128L512,160z M256,74.485L427.029,160L256,245.515L84.971,160L256,74.485z M460.723,230.361
                                                                                        L512,256L256,384L0,256l51.278-25.639L256,332.723L460.723,230.361z M460.723,326.361L512,352L256,480L0,352l51.278-25.639
                                                                                        L256,428.722L460.723,326.361z" />
                                                                                    </svg>



                                                                                    <h3 class="font-762333 h4 font-weight-800 fontspace-781688">Base du langage Swift</h3>
                                                                                </div>
                                                                                <p class="text-top-reduced text-lead text-centered">Apprendre
                                                                                    les bases du langage de
                                                                                    programmation Swift 4 pour
                                                                                    développer les applications iOS</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Article 2 -->
                                                    <div class="pos-top pos-center align_left column_parent col-lg-3 boomapps_vccolumn col-md-33 single-internal-gutter">
                                                        <div class="uncol style-light">
                                                            <div class="uncoltable">
                                                                <div class="uncell  boomapps_vccolumn no-block-padding">
                                                                    <div class="uncont">
                                                                        <div class="animate_when_almost_visible zoom-out icon-box icon-box-top start_animation"
                                                                            data-delay="400">
                                                                            <div class="icon-box-icon fa-container">
                                                                                <span class="text-default-color btn-disable-hover"></span>
                                                                            </div>
                                                                            <div class="icon-box-content">
                                                                                <div class="icon-box-heading icon-box-fa-2x">
                                                                                    <svg id="my-svg-two" x="0px" y="0px"
                                                                                        viewBox="0 0 512 512" width="80">

                                                                                        <path fill="none" stroke-width="5"  stroke="#e9168c"
                                                                                            d="M423.257,51.829c-0.808-2.045-2.67-3.484-4.853-3.751c-2.177-0.266-4.335,0.682-5.612,2.472
                                                                                        c-7.581,10.629-17.529,14.172-29.053,18.275c-9.292,3.31-18.901,6.73-29.286,14.186c-14.687,10.544-21.405,24.917-18.055,38.54
                                                                                        l-0.358,0.459c-6.133-8.897-12.806-17.126-19.848-24.474c-32.947-34.378-78.984-55.046-126.311-56.703
                                                                                        c-2.085-0.073-4.204-0.11-6.298-0.11c-52.846,0-103.428,23.624-138.775,64.813C9.646,146.512-5.939,199.853,2.051,251.882
                                                                                        c0.668,4.349,1.504,8.743,2.487,13.063c12.996,57.202,46.189,100.717,91.069,119.383c11.063,4.602,22.222,6.934,33.163,6.934
                                                                                        c27.183,0,50.926-14.539,65.143-39.889c5.404-9.646,8.891-19.621,10.36-29.651c0.866-5.92,0.274-11.835-0.3-17.567
                                                                                        c-0.591-5.9-1.149-11.476-0.256-17.09c2.047-12.869,11.036-20.553,24.047-20.553c3.701,0,7.483,0.609,11.26,1.812
                                                                                        c-4.422,8.11-8.438,15.854-11.947,23.032c-7.437,15.212-12.567,27.81-15.252,37.44c-1.655,5.939-6.052,21.722,4.67,29.164
                                                                                        c3.405,2.363,7.722,3.197,12.215,2.361c4.049-0.752,16.369-3.041,51.378-42.896c9.396-10.695,19.521-23.072,30.104-36.794
                                                                                        c27.168-9.15,48.31-31.921,53.903-58.087c1.4-6.541,1.984-13.541,1.735-20.812c10.172-15.72,19.094-30.388,28.072-46.156
                                                                                        c0.172-0.304,0.342-0.628,0.51-0.96c13.031-3.569,24.254-13.71,30.842-27.891C434.872,106.028,434.163,79.428,423.257,51.829z
                                                                                        M276.385,149.834c-4.713,7.485-12.814,11.954-21.673,11.954c-4.81,0-9.515-1.361-13.605-3.937
                                                                                        c-5.782-3.642-9.803-9.317-11.316-15.98s-0.345-13.518,3.298-19.301c4.714-7.485,12.816-11.954,21.675-11.954
                                                                                        c4.811,0,9.515,1.361,13.604,3.938c5.782,3.64,9.802,9.315,11.316,15.979C281.197,137.197,280.026,144.051,276.385,149.834z
                                                                                        M309.592,196.187c12.934-19.057,26.612-38,39.604-54.85c2.106,1.902,4.461,3.76,7.012,5.53c4.227,2.933,8.648,5.201,13.164,6.754
                                                                                        c-10.969,18.758-22.763,37.342-37.043,58.375c-23.463,34.571-47.859,66.684-68.695,90.424
                                                                                        c-11.638,13.26-21.823,23.498-29.671,29.839c3.029-9.69,8.818-22.989,16.875-38.746
                                                                                        C265.245,265.336,286.111,230.772,309.592,196.187z M82.506,196.023c-4.811,0-9.516-1.361-13.607-3.938
                                                                                        c-5.782-3.641-9.801-9.314-11.315-15.979c-1.514-6.664-0.342-13.519,3.301-19.302c4.711-7.484,12.813-11.953,21.671-11.953
                                                                                        c4.812,0,9.517,1.361,13.607,3.938c11.936,7.518,15.532,23.345,8.019,35.279C99.466,191.554,91.363,196.023,82.506,196.023z
                                                                                        M55.688,252.358c4.713-7.486,12.814-11.955,21.673-11.955c4.81,0,9.514,1.362,13.606,3.938c5.782,3.641,9.801,9.315,11.315,15.979
                                                                                        c1.515,6.662,0.343,13.516-3.301,19.301c-4.711,7.483-12.813,11.953-21.671,11.953c-4.811,0-9.517-1.361-13.609-3.938
                                                                                        c-5.782-3.642-9.8-9.315-11.313-15.979C50.876,264.995,52.049,258.14,55.688,252.358z M137.62,100.414
                                                                                        c4.713-7.485,12.815-11.954,21.673-11.954c4.809,0,9.514,1.361,13.604,3.937c11.937,7.516,15.533,23.344,8.019,35.28
                                                                                        c-4.715,7.486-12.817,11.955-21.675,11.955c-4.81,0-9.515-1.361-13.605-3.938c-5.781-3.64-9.799-9.314-11.313-15.979
                                                                                        C132.807,113.052,133.979,106.198,137.62,100.414z" />

                                                                                    </svg>


                                                                                    <h3 class="font-762333 h4 font-weight-800 fontspace-781688">Design
                                                                                        et Ergonomie iOS</h3>
                                                                                </div>
                                                                                <p class="text-top-reduced text-lead">Maîtriser
                                                                                    les principaux concepts de Design UX d'une application mobile
                                                                                    sur les smartphones iPhones
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Article 3 -->
                                                    <div class="pos-top pos-center align_left column_parent col-lg-3 boomapps_vccolumn mobile-hidden col-md-33 single-internal-gutter">
                                                        <div class="uncol style-light">
                                                            <div class="uncoltable">
                                                                <div class="uncell  boomapps_vccolumn no-block-padding">
                                                                    <div class="uncont">
                                                                        <div class="animate_when_almost_visible zoom-out icon-box icon-box-top start_animation"
                                                                            data-delay="600">
                                                                            <div class="icon-box-icon fa-container">
                                                                                <span class="text-default-color btn-disable-hover"></span>
                                                                            </div>
                                                                            <div class="icon-box-content">
                                                                                <div class="icon-box-heading icon-box-fa-2x">

                                                                                    <svg id="my-svg-three" x="0px"
                                                                                        y="0px"  
                                                                                        viewBox="0 0 512 512" width="80">
                                                                                        <path stroke-width="5" fill="none" stroke="#e9168c" d="M358.75,0H114.061C97.555,0,84.128,13.428,84.128,29.934v412.944c0,16.505,13.428,29.934,29.934,29.934H358.75   c16.506,0,29.934-13.428,29.934-29.934V29.934C388.683,13.428,375.256,0,358.75,0z M99.128,75.236h274.556v312.687H99.128V75.236z    M114.061,15H358.75c8.234,0,14.934,6.699,14.934,14.934v35.302H99.128V29.934C99.128,21.699,105.827,15,114.061,15z    M358.75,457.811H114.061c-8.234,0-14.934-6.699-14.934-14.934v-44.955h274.556v44.955   C373.683,451.112,366.984,457.811,358.75,457.811z"/>
                                                                                        <path stroke-width="5" fill="none" stroke="#e9168c" d="m236.406,404.552c-13.545,0-24.564,11.02-24.564,24.565s11.02,24.564 24.564,24.564 24.564-11.02 24.564-24.564-11.019-24.565-24.564-24.565zm0,39.129c-8.031,0-14.564-6.534-14.564-14.564 0-8.031 6.533-14.565 14.564-14.565s14.564,6.534 14.564,14.565c0,8.03-6.533,14.564-14.564,14.564z"/>
                                                                                        <path stroke-width="5" fill="none" stroke="#e9168c" d="m202.406,47.645h68c2.762,0 5-2.239 5-5s-2.238-5-5-5h-68c-2.762,0-5,2.239-5,5s2.238,5 5,5z"/>
                                                                                        <path stroke-width="5" fill="none" stroke="#e9168c" d="m184.409,47.645c1.31,0 2.6-0.53 3.53-1.46 0.93-0.94 1.47-2.22 1.47-3.54s-0.54-2.6-1.47-3.54c-0.931-0.93-2.221-1.46-3.53-1.46-1.32,0-2.601,0.53-3.54,1.46-0.93,0.93-1.46,2.22-1.46,3.54s0.53,2.6 1.46,3.54c0.93,0.93 2.22,1.46 3.54,1.46z"/>
                                                                                    </svg>

                                                                                    <h3 class="font-762333 h4 font-weight-800 fontspace-781688">Composants
                                                                                        natifs
                                                                                        iOS</h3>
                                                                                </div>
                                                                                <p class="text-top-reduced text-lead">Développer
                                                                                    avec
                                                                                    les composants natifs iOS pour iPhone et
                                                                                    stocker les données  MVC
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Article 4 -->
                                                    <div class="pos-top pos-center align_left column_parent col-lg-3 boomapps_vccolumn tablet-hidden mobile-hidden col-md-clear single-internal-gutter">
                                                        <div class="uncol style-light">
                                                            <div class="uncoltable">
                                                                <div class="uncell  boomapps_vccolumn no-block-padding">
                                                                    <div class="uncont">
                                                                        <div class="animate_when_almost_visible zoom-out icon-box icon-box-top start_animation"
                                                                            data-delay="800">
                                                                            <div class="icon-box-icon fa-container">
                                                                                <span class="text-default-color btn-disable-hover"></span>
                                                                            </div>
                                                                            <div class="icon-box-content">
                                                                                <div class="icon-box-heading icon-box-fa-2x">
                                                                                    <svg id="my-svg-four" x="0px" y="0px"
                                                                                    width="80"
                                                                                        viewBox="0 0 512 512">
                                                                                       <path stroke-width="5"  fill="none" stroke="#e9168c"
                                                                                        d="m426.492188 348.875h-.03125c-14.722657-.007812-23.035157-7.648438-27.792969-25.53125-4.863281-18.289062-5.027344-44.8125-5.199219-72.894531-.207031-34.023438-.441406-72.585938-8.898438-107.074219-1-4.078125-5.121093-6.574219-9.199218-5.574219-4.074219 1-6.570313 5.117188-5.574219 9.195313 8.035156 32.75 8.261719 70.363281 8.464844 103.546875.179687 29.078125.34375 56.542969 5.707031 76.707031 2.332031 8.769531 5.675781 15.976562 9.996094 21.625h-316.855469c4.320313-5.648438 7.664063-12.855469 9.996094-21.625 5.363281-20.164062 5.53125-47.628906 5.707031-76.707031.269531-44.394531.578125-94.710938 18.742188-133.21875 20.445312-43.347657 61-64.421875 123.984374-64.421875 34.589844 0 62.894532 6.5 84.125 19.324218 18.410157 11.117188 31.925782 26.917969 41.320313 48.304688 1.6875 3.84375 6.175781 5.59375 10.019531 3.902344 3.84375-1.6875 5.59375-6.171875 3.90625-10.019532-10.550781-24.015624-26.492187-42.589843-47.382812-55.207031-13.335938-8.054687-28.996094-13.863281-46.832032-17.402343-1.796874-23.347657-21.355468-41.804688-45.15625-41.804688-23.800781 0-43.363281 18.460938-45.148437 41.8125-17.015625 3.371094-32.058594 8.804688-44.96875 16.285156-20.773437 12.039063-36.796875 29.785156-47.625 52.738282-19.59375 41.542968-19.914063 93.644531-20.191406 139.613281-.171875 28.082031-.332031 54.605469-5.199219 72.894531-4.757812 17.882812-13.070312 25.523438-27.792969 25.53125h-.03125c-24.582031 0-44.582031 20-44.582031 44.585938 0 24.582031 20 44.582031 44.582031 44.582031h48.128907c4.199218 0 7.605468-3.40625 7.605468-7.605469s-3.40625-7.601562-7.605468-7.601562h-48.128907c-16.195312 0-29.375-13.179688-29.375-29.375 0-16.195313 13.175781-29.371094 29.371094-29.375h.003906.027344 381.851563.027343.007813c16.191406.003906 29.367187 13.179687 29.367187 29.375 0 16.195312-13.179687 29.375-29.375 29.375h-303.359375c-4.199218 0-7.601562 3.402343-7.601562 7.601562s3.402344 7.605469 7.601562 7.605469h31.214844c3.847656 41.421875 38.785156 73.957031 81.195312 73.957031 42.40625 0 77.34375-32.535156 81.191407-73.957031h109.761719c24.582031 0 44.582031-20 44.582031-44.582031 0-24.585938-20-44.585938-44.582031-44.585938zm-190.953126-333.667969c14.5625 0 26.742188 10.402344 29.503907 24.164063-9.335938-1.101563-19.164063-1.675782-29.503907-1.675782-10.339843 0-20.167968.570313-29.5 1.671876 2.761719-13.761719 14.9375-24.160157 29.5-24.160157zm0 481.585938c-34.015624 0-62.121093-25.734375-65.90625-58.75h131.808594c-3.785156 33.015625-31.890625 58.75-65.902344 58.75zm0 0"/>
                                                                                        <path stroke-width="5" fill="none" stroke="#e9168c" 
                                                                                        d="m357.632812 47.722656c.136719.074219 13.675782 7.800782 26.996094 25.75 17.84375 24.039063 26.886719 54.070313 26.886719 89.261719 0 4.199219 3.40625 7.605469 7.605469 7.605469 4.199218 0 7.605468-3.40625 7.605468-7.605469 0-48.445313-16.542968-80.601563-30.421874-99.042969-15.25-20.265625-30.644532-28.910156-31.292969-29.269531-3.667969-2.023437-8.269531-.695313-10.308594 2.960937-2.039063 3.660157-.722656 8.285157 2.929687 10.339844zm0 0"/>
                                                                                        <path stroke-width="5" fill="none" stroke="#e9168c" d="m415.003906 50.511719c1.222656.800781 29.96875 20.09375 29.96875 68.632812 0 4.199219 3.40625 7.601563 7.605469 7.601563s7.601563-3.402344 7.601563-7.601563c0-57.25-35.464844-80.480469-36.976563-81.441406-3.527344-2.246094-8.191406-1.207031-10.457031 2.3125-2.265625 3.515625-1.246094 8.210937 2.257812 10.496094zm0 0"/>
                                                                                        <path stroke-width="5" fill="none" stroke="#e9168c" d="m51.949219 170.339844c4.199219 0 7.605469-3.40625 7.605469-7.605469 0-35.191406 9.046874-65.222656 26.886718-89.261719 13.238282-17.835937 26.695313-25.578125 26.992188-25.75 3.660156-2.035156 4.988281-6.652344 2.960937-10.320312-2.035156-3.675782-6.660156-5.007813-10.335937-2.980469-.648438.359375-16.042969 9.003906-31.292969 29.269531-13.875 18.441406-30.417969 50.597656-30.417969 99.042969 0 4.199219 3.402344 7.605469 7.601563 7.605469zm0 0"/>
                                                                                        <path stroke-width="5" fill="none" stroke="#e9168c" d="m18.496094 126.746094c4.199218 0 7.601562-3.402344 7.601562-7.601563 0-48.5 28.703125-67.804687 29.96875-68.628906 3.515625-2.261719 4.546875-6.945313 2.300782-10.476563-2.253907-3.542968-6.953126-4.585937-10.5-2.332031-1.507813.960938-36.976563 24.1875-36.976563 81.4375 0 4.199219 3.40625 7.601563 7.605469 7.601563zm0 0"/>
                                                                                    </svg>

                                                                                    <h3 class="font-762333 h4 font-weight-800 fontspace-781688">Capteurs
                                                                                        et Réseaux</h3>
                                                                                </div>
                                                                                <p class="text-top-reduced text-lead">
                                                                                    Utiliser des services tiers iOS
                                                                                    et
                                                                                    communiquer sur des
                                                                                    applications existantes sur
                                                                                    l'Apple Store</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Formation -->
                                        <div data-parent="true" class="vc_row row-container boomapps_vcrow" style="z-index: 2;"
                                            data-section="3">
                                            <div class="row  quad-bottom-padding single-h-padding limit-width row-parent"
                                                data-imgready="true">
                                                <div class="row-inner">
                                                    <div class="pos-middle pos-center align_center align_center_mobile column_parent col-lg-12 boomapps_vccolumn single-internal-gutter">
                                                        <div class="uncol style-light animate_when_almost_visible zoom-out start_animation"
                                                            data-delay="200">
                                                            <div class="uncoltable">
                                                                <div class="uncell  boomapps_vccolumn">
                                                                    <div class="uncont no-block-padding col-custom-width">
                                                                        <div class="row-internal row-container boomapps_vcrow">
                                                                            <div class="row row-child">
                                                                                <div class="row-inner">
                                                                                    <div class="pos-top pos-center align_center column_child col-lg-12 boomapps_vccolumn half-internal-gutter">
                                                                                        <div class="uncol style-light">
                                                                                            <div class="uncoltable">
                                                                                                <div class="uncell  boomapps_vccolumn no-block-padding">
                                                                                                    <div class="uncont">
                                                                                                        <div class="heading-text el-text">
                                                                                                            <h2
                                                                                                            data-wow-delay="100ms" class="wow fadeInUp font-762333 h1 fontheight-357766 fontspace-111509 font-weight-800">
                                                                                                                <span>Une
                                                                                                                    formation
                                                                                                                    intensive
                                                                                                                    100%
                                                                                                                    présentielle
                                                                                                                    sur
                                                                                                                    iOS
                                                                                                                    pour iPhone
                                                                                                                </span>
                                                                                                            </h2>
                                                                                                        </div>
                                                                                                        <div class="clear"></div>
                                                                                                        <div class="clear"></div>

                                                                                                    </div>
                                                                                                    <div class="clear"></div>

                                                                                                    <div data-wow-delay="300ms" class="wow fadeInUp">
                                                                                                        <a target="_blank"
                                                                                                            title="Programme de la formation intensive iOS"
                                                                                                            href="uploads/programme.pdf"
                                                                                                            class="custom-link btn btn-lg border-width-0 btn-accent btn-flat btn-icon-left"
                                                                                                        ><i
                                                                                                                class="material-icons"
                                                                                                                style="vertical-align: middle">cloud_download</i> Voir le programme</a>
                                                                                                        <a 
                                                                                                            title="Contactez la formation iOS sur Lyon"
                                                                                                            href="#contactez-nous"
                                                                                                            class="contactez custom-link btn btn-lg border-width-0 btn-accent btn-flat btn-icon-left"
                                                                                                            ><i
                                                                                                                class="material-icons"
                                                                                                                style="vertical-align: middle">email</i> Prise de contact</a>

                                                                                                    </div>
                                                                                                    <div class="empty-space empty-quart">
                                                                                                        <span class="empty-space-inner"></span>
                                                                                                    </div>
                                                                                                    <div class="clear"></div>
                                                                                                    <h4 style="color: #888"><i>Prochaine session le 1<sup>er</sup> Janvier 2019</i></h4>

                                                                                                    <div class="clear"></div>

                                                                                                    <ul class="icons">
                                                                                                        <li data-wow-delay="900ms" class="wow fadeInUp"><b>Format:</b>
                                                                                                            Plus de 70h. de
                                                                                                            cours
                                                                                                            intensifs
                                                                                                            et concrets</li>
                                                                                                        <li data-wow-delay="1000ms" class="wow fadeInUp"><b>Nature:</b>Formation
                                                                                                            100%
                                                                                                            présentiel 
                                                                                                            à Lyon
                                                                                                            3e (le café est offert)</li>
                                                                                                        <li data-wow-delay="1100ms" class="wow fadeInUp"><b>Connaissance</b>
                                                                                                            sur un
                                                                                                            langage
                                                                                                            de
                                                                                                            programmation (si possible orientré-objet)</li>

                                                                                                        <li data-wow-delay="1200ms" class="wow fadeInUp"><b>Coût:</b>
                                                                                                            1500€
                                                                                                            HT (remise de 100€ pour les 5 premiers inscrits)</li>
                                                                                                        
                                                                                                        <li data-wow-delay="1300ms" class="wow fadeInUp"><b>Materiel:</b>
                                                                                                                MacBook
                                                                                                                (l'iPhone
                                                                                                                est
                                                                                                                optionel)</li>

                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Caroussel -->
                                    <div class="text-center">
                                        <h2 data-wow-delay="200ms" class="wow fadeInUp font-762333 h1 fontheight-357766 fontspace-111509 font-weight-800"><span><b>Objectif
                                                    N°1</b><br /> Développez une application iOS de A-Z pour iPhone</span></h2>
                                        <h3 data-wow-delay="500ms" style="margin: 15px;margin-bottom: 50px;" class="wow fadeInDown  font-762333 h1 fontheight-357766 fontspace-111509 font-weight-100">Apprendre
                                            à développer une application iOS déployer sur Apple
                                            Store</h3>
                                        <div class="clear"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="owl-carousel">
                                        <div style="width: 300px"> <img alt="Formation iOS à Lyon pour iPhone et iPad" src="slider/app-calendar-min.jpg" /> </div>
                                        <div style="width: 300px"> <img alt="Cours iOS à Lyon pour iPhone et iPad Apple" src="slider/app-home-min.jpg" /> </div>
                                        <div style="width: 300px"> <img alt="Tutoriaux iOS à Lyon pour iPhone" src="slider/app-navigation-min.jpg" />
                                        </div>
                                        <div style="width: 300px"> <img alt="Formation iOS 12 à Lyon" src="slider/app-profile-min.jpg" /> </div>
                                        <div style="width: 300px"> <img alt="Formation 70h. sur iOS 12 à Lyon 3" src="slider/app-signup-min.jpg" /> </div>
                                        <div style="width: 300px"> <img alt="Formation de iOS 10 jours à Lyon Apple" src="slider/app-shop-min.jpg" /> </div>
                                        <div style="width: 300px"> <img alt="Formation de iOS à Lyon pour iPhone" src="slider/app-login-min.jpg" /> </div>
                                    </div>

                                    <!-- Background SVG -->
                                    <div data-parent="true" class="vc_row gradient style-color-wayh-bg row-container with-parallax has-dividers boomapps_vcrow"
                                        data-section="4">
                                        <div class="row-background background-element">
                                            <div class="background-wrapper" style="transform: translate3d(0px, -199.25px, 0px);">
                                                <div class="background-inner" style="background-image: url(uploads/2018/04/image-placeholder-27-min.jpg);background-repeat: no-repeat;background-position: center bottom;background-size: cover;"></div>
                                                <div class="block-bg-overlay style-color-105898-bg" style="opacity: 0.7;"></div>
                                            </div>
                                        </div>

                                        <!-- svg -->
                                        <div class="uncode-divider-wrap uncode-divider-wrap-top z_index_0 uncode-divider-relative"
                                            style="height: 200px;" data-height="400" data-unit="px">
                                            <svg version="1.1" class="uncode-row-divider uncode-row-divider-swoosh-opacity"
                                                x="0px" y="0px" width="240px" height="24px" viewBox="0 0 240 24"
                                                enable-background="new 0 0 240 24" xml:space="preserve"
                                                preserveAspectRatio="none">
                                                <path fill="#ffffff" fill-opacity="0.33" d="M240,24V0c-51.797,0-69.883,13.18-94.707,15.59c-24.691,2.4-43.872-1.17-63.765-1.08
                                            c-19.17,0.1-31.196,3.65-51.309,6.58C15.552,23.21,4.321,22.471,0,22.01V24H240z"></path>
                                                <path fill="#ffffff" fill-opacity="0.33" d="M240,24V2.21c-51.797,0-69.883,11.96-94.707,14.16
                                            c-24.691,2.149-43.872-1.08-63.765-1.021c-19.17,0.069-31.196,3.311-51.309,5.971C15.552,23.23,4.321,22.58,0,22.189V24h239.766H240
                                            z"></path>
                                                <path fill="#ffffff" d="M240,24V3.72c-51.797,0-69.883,11.64-94.707,14.021c-24.691,2.359-43.872-3.25-63.765-3.17
                                            c-19.17,0.109-31.196,3.6-51.309,6.529C15.552,23.209,4.321,22.47,0,22.029V24H240z"></path>
                                            </svg>
                                        </div>



                                        <!-- Contact -->
                                        <div id="contactez-nous" class="row no-top-padding no-bottom-padding single-h-padding limit-width row-parent"
                                            data-imgready="true">
                                            <div class="row-inner">
                                                <div class="pos-middle pos-center align_center column_parent col-lg-12 boomapps_vccolumn half-internal-gutter">
                                                    <div class="uncol style-light">
                                                        <div class="uncoltable">
                                                            <div class="uncell boomapps_vccolumn">
                                                                <div class="uncont no-block-padding col-custom-width"
                                                                    style="max-width:900px;">
                                                                    <div class="row-internal row-container boomapps_vcrow">
                                                                        <div class="row row-child">
                                                                            <div class="row-inner">
                                                                                <div class="pos-top pos-center align_center column_child col-lg-12 boomapps_vccolumn half-internal-gutter">
                                                                                    <div class="uncol style-dark">
                                                                                        <div class="uncoltable">
                                                                                            <div class="uncell  boomapps_vccolumn no-block-padding">
                                                                                                <div class="uncont">
                                                                                                    <div class="mobile-hide heading-text el-text">
                                                                                                        <h2 class="font-762333 fontsize-160000 fontspace-210350 text-color-xsdn-color text-uppercase">
                                                                                                            <span>Contactez-nous</span>
                                                                                                        </h2>
                                                                                                    <div class="clear"></div>
                                                                                                    </div>
                                                                                                    <div class="heading-text el-text">
                                                                                                        <h2 class="font-762333 h1 fontspace-111509 font-weight-800 text-color-xsdn-color">
                                                                                                            <span>Interessé
                                                                                                                par
                                                                                                                la
                                                                                                                formation?
                                                                                                                <br />
                                                                                                                Besoin
                                                                                                                de
                                                                                                                renseignements?
                                                                                                            </span>
                                                                                                        </h2>
                                                                                                    </div>
                                                                                                    <div class="clear"></div>
                                                                                                    <div class="empty-space empty-single">
                                                                                                        <span class="empty-space-inner"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row-internal row-container boomapps_vcrow">
                                                                        <div class="row row-child">
                                                                            <div class="row-inner" >
                                                                                <div class="pos-top pos-center align_center column_child col-lg-12 boomapps_vccolumn single-internal-gutter">
                                                                                    <div class="uncol style-light">
                                                                                        <div class="uncoltable">
                                                                                            <div class="uncell  boomapps_vccolumn no-block-padding">
                                                                                                <div class="uncont">
                                                                                                    <div role="form"
                                                                                                        class="wpcf7"
                                                                                                        id="wpcf7-f61789-p72416-o1"
                                                                                                        lang="en-US"
                                                                                                        dir="ltr">
                                                                                                        <div class="screen-reader-response"></div>
                                                                                                        <form
                                                                                                            action=""
                                                                                                            method="post"
                                                                                                            class="wpcf7-form">
                                                                                                            <div
                                                                                                                class="wpcf7-inline-wrapper">
                                                                                                                <p
                                                                                                                    class="wpcf7-inline-field">
                                                                                                                    <span
                                                                                                                        class="wpcf7-form-control-wrap your-name">
                                                                                                                        <input
                                                                                                                        
                                                                                                                            id="name"
                                                                                                                            type="text"
                                                                                                                            name="name"
                                                                                                                            size="40"
                                                                                                                            data-wow-delay="100ms" 
                                                                                                                            class="wow fadeInUp wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-xl"
                                                                                                                            aria-required="true"
                                                                                                                            aria-invalid="false"
                                                                                                                            placeholder="Nom et Prénom *">
                                                                                                                    </span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="wpcf7-inline-field">
                                                                                                                    <span
                                                                                                                        class="wpcf7-form-control-wrap your-company">
                                                                                                                        <select
                                                                                                                            name="subject"
                                                                                                                            id="subject"
                                                                                                                            data-wow-delay="300ms" 
                                                                                                                            class="wow fadeInUp wpcf7-form-control form-xl">
                                                                                                                            <option value="formation_1">Interessé
                                                                                                                                par
                                                                                                                                la
                                                                                                                                formation
                                                                                                                                du
                                                                                                                                1
                                                                                                                                Janvier
                                                                                                                                2019</option>
                                                                                                                            <option value="formation_2">Interessé
                                                                                                                                par
                                                                                                                                la
                                                                                                                                formation
                                                                                                                                du
                                                                                                                                1
                                                                                                                                Février
                                                                                                                                2019</option>
                                                                                                                                <option value="formation_3">Interessé
                                                                                                                                    par
                                                                                                                                    la
                                                                                                                                    formation
                                                                                                                                    du
                                                                                                                                    1
                                                                                                                                    Mars
                                                                                                                                    2019</option>
                                                                                                                            <option value="contact">Prendre contact</option>
                                                                                                                            <option  value="autre">Autre</option>
                                                                                                                        </select>
                                                                                                                    </span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="wpcf7-inline-wrapper">
                                                                                                                <p
                                                                                                                    class="wpcf7-inline-field">
                                                                                                                    <span
                                                                                                                        class="wpcf7-form-control-wrap your-email">
                                                                                                                        <input
                                                                                                                            type="email"
                                                                                                                            name="email"
                                                                                                                            id="email"
                                                                                                                            size="40"
                                                                                                                            data-wow-delay="500ms" 
                                                                                                                            class="wow fadeInUp wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-xl"
                                                                                                                            aria-required="true"
                                                                                                                            aria-invalid="false"
                                                                                                                            placeholder="Email *">
                                                                                                                    </span>
                                                                                                                </p>
                                                                                                                <p
                                                                                                                    class="wpcf7-inline-field">
                                                                                                                    <span
                                                                                                                        class="wpcf7-form-control-wrap your-tel">
                                                                                                                        <input
                                                                                                                            type="phone"
                                                                                                                            name="phone"
                                                                                                                            id="phone"
                                                                                                                            size="40"
                                                                                                                            data-wow-delay="600ms" 
                                                                                                                            class="wow fadeInUp  wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-xl"
                                                                                                                            placeholder="Téléphone">
                                                                                                                    </span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <p>
                                                                                                                <span
                                                                                                                    class="wpcf7-form-control-wrap your-message">
                                                                                                                    <textarea
                                                                                                                        name="message"
                                                                                                                        id="message"
                                                                                                                        cols="40"
                                                                                                                        rows="10"
                                                                                                                        data-wow-delay="700ms" 
                                                                                                                        class="wow fadeInUp  wpcf7-form-control wpcf7-textarea form-xl"
                                                                                                                        aria-invalid="false"
                                                                                                                        placeholder="Message"></textarea>
                                                                                                                </span>
                                                                                                            </p>
                                                                                                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                                                                                                            <br/>

                                                                                                            <p>
                                                                                                                <button
                                                                                                                    type="submit"
                                                                                                                    data-wow-delay="1200ms" 
                                                                                                                    class="wow fadeInUp wpcf7-form-control wpcf7-submit btn btn-accent btn-lg btn-flat btn-shadow-sm">
                                                                                                                    <i
                                                                                                                        style="vertical-align: middle;"
                                                                                                                        class="material-icons">
                                                                                                                        mail
                                                                                                                    </i>
                                                                                                                    Envoyer
                                                                                                                    mon
                                                                                                                    message
                                                                                                                </button>
                                                                                                              
                                                                                                            </p>
                                                                                           
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- svg -->
                                        <div class="uncode-divider-wrap uncode-divider-wrap-bottom z_index_0 uncode-divider-relative uncode-divider-flip"
                                            style="height: 200px;" data-height="400" data-unit="px">
                                            <svg version="1.1" class="uncode-row-divider uncode-row-divider-swoosh-opacity"
                                                x="0px" y="0px" width="240px" height="24px" viewBox="0 0 240 24"
                                                enable-background="new 0 0 240 24" xml:space="preserve"
                                                preserveAspectRatio="none">
                                                <path fill="#ffffff" fill-opacity="0.33" d="M240,24V0c-51.797,0-69.883,13.18-94.707,15.59c-24.691,2.4-43.872-1.17-63.765-1.08
                                            c-19.17,0.1-31.196,3.65-51.309,6.58C15.552,23.21,4.321,22.471,0,22.01V24H240z"></path>
                                                <path fill="#ffffff" fill-opacity="0.33" d="M240,24V2.21c-51.797,0-69.883,11.96-94.707,14.16
                                            c-24.691,2.149-43.872-1.08-63.765-1.021c-19.17,0.069-31.196,3.311-51.309,5.971C15.552,23.23,4.321,22.58,0,22.189V24h239.766H240
                                            z"></path>
                                                <path fill="#ffffff" d="M240,24V3.72c-51.797,0-69.883,11.64-94.707,14.021c-24.691,2.359-43.872-3.25-63.765-3.17
                                            c-19.17,0.109-31.196,3.6-51.309,6.529C15.552,23.209,4.321,22.47,0,22.029V24H240z"></path>
                                            </svg>
                                        </div>


                                        <!-- Map -->
                                        <div class="row">

                                            <div class="wow fadeInUp" id="map"></div>

                                        </div>


                                    </div>



                                </div>
                            </div>
                        </div>
                <!-- sections container -->

                    </article>
                </div>
            <!-- page wrapper -->


                     <!-- footer -->
            <footer id="colophon" class="site-footer">
                <div data-parent="true" class="vc_row style-color-rgdb-bg row-container mobile-hidden boomapps_vcrow"
                    data-section="7">
                    <div class="row double-top-padding double-bottom-padding single-h-padding limit-width row-parent"
                        data-imgready="true">
                        <div class="row-inner cols-md-responsive">
                            <div class="pos-top pos-left align_left column_parent col-lg-3 boomapps_vccolumn col-md-33 half-internal-gutter">
                                <div class="uncol style-dark">
                                    <div class="uncoltable">
                                        <div class="uncell  boomapps_vccolumn no-block-padding">
                                            <div class="uncont">
                                                <div class="wpb_widgetised_column wpb_content_element">
                                                    <div class="wpb_wrapper">
                                                        <aside id="text-3" class="widget widget_text widget-container sidebar-widgets">
                                                            <h3 class="widget-title">A propos</h3>
                                                            <div class="textwidget">
                                                                <p>Copyright © 2018 - Digital Online est un centre
                                                                    de formations digitales et mobiles par cours
                                                                    intensifs pour iOS et Android.</p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pos-top pos-left align_left column_parent col-lg-3 boomapps_vccolumn tablet-hidden col-md-25 single-internal-gutter">
                                <div class="uncol style-dark">
                                    <div class="uncoltable">
                                        <div class="uncell  boomapps_vccolumn no-block-padding">
                                            <div class="uncont">
                                                <div class="wpb_widgetised_column wpb_content_element">
                                                    <div class="wpb_wrapper">
                                                        <aside id="most-recommended-posts-2" class="widget widget_most-recommended-posts widget-container sidebar-widgets">
                                                            <h3 class="widget-title">Mots-Clefs</h3>
                                                            <ul class="mostrecommendedposts">
                                                                <li>
                                                                    <a>Formation iOS</a>
                                                                </li>
                                                                <li>
                                                                    <a>Formation Mobile</a>
                                                                </li>
                                                                <li>
                                                                    <a>Formation Apple</a>
                                                                </li>
                                                                <li>
                                                                    <a>Formation XCode</a>
                                                                </li>
                                                                <li>
                                                                    <a>Formation Swift</a>
                                                                </li>
                                                                </li>
                                                            </ul>
                                                        </aside>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pos-top pos-left align_left column_parent col-lg-3 boomapps_vccolumn col-md-33 single-internal-gutter">
                                <div class="uncol style-dark">
                                    <div class="uncoltable">
                                        <div class="uncell  boomapps_vccolumn no-block-padding">
                                            <div class="uncont">
                                                <div class="wpb_widgetised_column wpb_content_element">
                                                    <div class="wpb_wrapper">
                                                        <aside id="recent-posts-5" class="widget widget_recent_entries widget-container sidebar-widgets">
                                                            <h3 class="widget-title">Articles</h3>
                                                            <ul>
                                                                <li>
                                                                    <a title="Documentation de Swift iOS" href="https://docs.swift.org/swift-book/GuidedTour/GuidedTour.html">Documentation
                                                                        de Swift</a>
                                                                </li>
                                                                <li>
                                                                    <a title="Getting Started de Swift iOS" href="https://swift.org/getting-started/">Getting
                                                                        Started on Swift</a>
                                                                </li>
                                                                <li>
                                                                    <a title="GuideLines de Swift iOS" href="http://localhost:8888/wordpress/2017/03/22/inspired-by-clouds/">Api
                                                                        Design Guidelines</a>
                                                                </li>
                                                                <li>
                                                                    <a title="Tutoriaux du langage Swift iOS" href="https://openclassrooms.com/fr/courses/1823851-apprenez-a-programmer-en-swift">Swift
                                                                        Tutorial OpenClassRoom</a>
                                                                </li>
                                                                <li>
                                                                    <a title="Book Swift iOS" hreh="https://itunes.apple.com/us/book/swift-programming-language/id881256329?mt=11">Apple
                                                                        Swift Book</a>
                                                                </li>
                                                            </ul>
                                                        </aside>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pos-top pos-left align_left column_parent col-lg-3 boomapps_vccolumn col-md-33 single-internal-gutter">
                                <div class="uncol style-dark">
                                    <div class="uncoltable">
                                        <div class="uncell  boomapps_vccolumn no-block-padding">
                                            <div class="uncont">
                                                <div class="wpb_widgetised_column wpb_content_element">
                                                    <div class="wpb_wrapper">
                                                        <aside id="recent-posts-5" class="widget widget_recent_entries widget-container sidebar-widgets">
                                                            <h3 class="widget-title">Pour bien commencer</h3>
                                                            <ul>
                                                                <li>
                                                                    <a  title="Tutoriaux de Swift iOS OpenClassRoom" href="https://openclassrooms.com/fr/courses/1823851-apprenez-a-programmer-en-swift">Apprendre
                                                                        Swift sur OpenClassRoom</a>
                                                                </li>
                                                                <li>
                                                                    <a  title="Swift iOS sur OpenClassRoom"  href="https://openclassrooms.com/fr/courses/4206426-introduction-a-ios-plongez-dans-le-developpement-mobile">Introduction
                                                                        iOS sur OpenClassRoom</a>
                                                                </li>
                                                                <li>
                                                                    <a title="Application Swift iOS sur OpenClassRoom" href="https://openclassrooms.com/fr/courses/2582746-developpez-votre-premiere-application-pour-ios">Développez
                                                                        Votre première application pour iOS sur OpenClassRoom</a>
                                                                </li>
                                                                <li><a title="Swift Language" href="https://github.com/allenwong/30DaysofSwift">30
                                                                        Days of Swift Language</a></li>
                                                            </ul>
                                                        </aside>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pos-top pos-left align_left column_parent col-lg-3 boomapps_vccolumn col-md-33 single-internal-gutter">
                                <div class="uncol style-dark">
                                    <div class="uncoltable">
                                        <div class="uncell  boomapps_vccolumn no-block-padding">
                                            <div class="uncont">
                                                <div class="wpb_widgetised_column wpb_content_element">
                                                    <div class="wpb_wrapper">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-container style-dark-bg footer-last">
                    <div class="row row-parent style-dark limit-width no-top-padding no-h-padding no-bottom-padding">
                        <div class="site-info uncell col-lg-6 pos-middle text-left">© 2018-2019 Digital Online |
                            Tous droits réservés.</div>
                        <!-- site info -->
                        <div class="uncell col-lg-6 pos-middle text-right">
                            <div class="social-icon icon-box icon-box-top icon-inline">
                                <a title="Facebook de iOS Formation" href="https://www.facebook.com/undsgn/" target="_blank">
                                    <i class="fa fa-social-facebook"></i>
                                </a>
                            </div>
                            <div class="social-icon icon-box icon-box-top icon-inline">
                                <a title="Twitter de iOS Formation" href="https://twitter.com/undsgndotcom" target="_blank">
                                    <i class="fa fa-social-twitter"></i>
                                </a>
                            </div>
                            <div class="social-icon icon-box icon-box-top icon-inline">
                                <a  title="Linkedin de iOS Formation" href="https://www.linkedin.com/" target="_blank">
                                    <i class="fa fa-social-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


            </div>
            <!-- main wrapper -->

       
        </div>
        <!-- main container -->
    </div>
    <!-- main wrapper -->
</div>
<!-- box container -->
</div>
<div class="style-light footer-scroll-top" style="display: none;">
    <a title="iOS Formation à Lyon" href="#" class="scroll-top">
        <i class="fa fa-angle-up fa-stack fa-rounded btn-default btn-hover-nobg"></i>
    </a>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbdCiAUiZiteBaEkTnCQa6jEZsuDFRgh8&callback=initMap"> </script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/vivus.min.js"></script>
<script src="js/waypoint.min.js"></script>
<script src="js/main.js"></script>

<!-- <script src='https://www.google.com/recaptcha/api.js?render=6LfDhXMUAAAAAKVXsBhebunGC0eh3aSDfWxYLJ9Z'></script> -->


</body>

</html>

