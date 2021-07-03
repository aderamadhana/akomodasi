<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 09:04:26 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>E-Survei</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link href="<?= base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>

<body>
    <div class="app-container app-theme-gray">
        <div class="app-main">
            <div class="app-sidebar-wrapper">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="E-Survei"
                            class="logo-src"></a>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                    <div class="scrollbar-sidebar scrollbar-container">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menu</li>
                                <li class="">
                                    <a href="<?php echo site_url('DashboardAdmin')?>">
                                        <i class="metismenu-icon fa fa-area-chart"></i>
                                        Dashboards
                                    </a>
                                    
                                </li>
                                
                                <li>
                                    <a href="<?php echo site_url('Lokasi')?>">
                                        <i class="metismenu-icon fa fa-map-marker"></i>
                                        Lokasi Akomodasi
                                    </a>
                                    
                                </li>
                                
                                <li>
                                    <a href="<?php echo site_url('Petugas')?>">
                                        <i class="metismenu-icon fa fa-group"></i>
                                        Petugas
                                    </a>
                                    
                                </li>
                                

                                <li>
                                    <a href="<?php echo site_url('JobDesc')?>">
                                        <i class="metismenu-icon fa fa-group"></i>
                                        Job Desc Petugas
                                    </a>
                                    
                                </li>
                                <li>
                                    <a href="<?php echo site_url('HasilSurvei')?>">
                                        <i class="metismenu-icon fa fa-list"></i>
                                        Hasil Survei
                                    </a>
                                    
                                </li>

                                <li class="">
                                    <a href="<?php echo site_url('Kuisioner')?>">
                                        <i class="metismenu-icon fa fa-tasks"></i>
                                        Kuisioner
                                    </a>
                                    
                                </li>
                                
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Bosa Admin"
                                class="logo-src"></a>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            <div class="app-header__menu">
                                <span>
                                    <button type="button"
                                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                        <span class="btn-icon-wrapper">
                                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                                        </span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-header">
                        <div class="page-title-heading">
                            E-Survei Jasa Akomodasi Kota Batu
                            <div class="page-title-subheading">
                                Selamat Datang di Halaman Admin
                            </div>
                        </div>
                        <div class="app-header-right">
                            <div class="search-wrapper">
                                <i class="search-icon-wrapper fa fa-search" style="font-size:16px"></i>
                                <input type="text" placeholder="Search...">
                            </div>
                            
                            <div class="header-btn-lg pr-0">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="btn-group">
                                            <a href="<?= base_url(); ?>login/logout" class="mr-2 btn-pill btn-transition btn btn-outline-primary">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-header-overlay d-none animated fadeIn"></div>
                    </div>
                    <div class="app-inner-layout app-inner-layout-page">
                        
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content">
                                    <div class="container-fluid">
                                    
                                       
