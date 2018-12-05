<?php
$this->load->library('session');
?>
    <!doctype html>
    <html lang="en">

    <!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jul 2018 13:04:37 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"/>
        <link rel="icon" type="image/png" href="<?= base_url('assets/images/ucscLogo.jpg') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

        <title>UCSC</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
        <meta name="viewport" content="width=device-width"/>

        <link rel="canonical" href="http://www.creative-tim.com/product/material-dashboard-pro"/>

        <!--  Social tags      -->
        <meta name="keywords"
              content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">

        <meta name="description"
              content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
        <meta itemprop="description"
              content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
        <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@creativetim">
        <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
        <meta name="twitter:description"
              content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
        <meta name="twitter:creator" content="@creativetim">
        <meta name="twitter:image"
              content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">

        <!-- Open Graph data -->
        <meta property="fb:app_id" content="655968634437471">
        <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro"/>
        <meta property="og:image"
              content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg"/>
        <meta property="og:description"
              content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design."/>
        <meta property="og:site_name" content="Creative Tim"/>

        <!-- Bootstrap core CSS     -->
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"/>


        <!--  Material Dashboard CSS    -->
        <link href="<?= base_url('assets/css/material-dashboard98f3.css?v=1.3.0') ?>" rel="stylesheet"/>

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="<?= base_url('assets/css/demo.css') ?>" rel="stylesheet"/>


        <!--     Fonts and icons     -->
        <link href="<?= base_url('assets/font-awesome/latest/css/font-awesome.min.css') ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">

        <!--    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>-->
        <!--    <script type="text/javascript">-->
        <!--        //<![CDATA[-->
        <!--        bkLib.onDomLoaded(function () {-->
        <!--            new nicEditor({fullPanel: true}).panelInstance('txtDetails');-->
        <!--        });-->
        <!--        //]]>-->
        <!--    </script>-->
        <!--    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>-->
        <!--    <script>tinymce.init({ selector:'textarea' });</script>-->
        <script src="<?= base_url('assets/ckeditor/ckeditor.js')?>"></script>
    </head>


<body>

<div style="background-color: #eeeeee">




    <div class="main-panel" style="width: 100%">

    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <a href="<?= base_url('login')?>" style="color: inherit">
            <div style="right: 15px;position: absolute;padding-right: 50px;font-weight: bold;top: 20px;color: #352c24;margin-top:0px;background-color: #e9b500;padding:9px;border-radius: 18px;display: inline-block;cursor: pointer">
                <?php
                if (!isset($_SESSION["accountType"])) {
                    ?>
                    Offline - Click Here To Login
                    <?php
                } else {
                    ?>
                    Online -
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo $_SESSION["username"];
                    }
                }
                ?>
            </div>
            </a>

        </div>
    </nav>

<div class="content">
    <div class="container-fluid">
        <div class="row" style="text-align: center;font-weight: 400;font-size: 35px">
            <p>University of Colombo School of Computing</p>
            <p style="padding-top: 40px">Academic Staff Recruitment</p>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>