<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from elitelayers.net/html/greta/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2017 16:23:24 GMT -->
<head>
    <meta charset="utf-8">
    <title>Greta - Personal Blog HTML Template</title>
    <meta name="description" content="">

    <!-- Stylesheets -->
    <link href="<?php echo base_url()?>public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/responsive.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url()?>public/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url()?>public/images/favicon.ico" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="<?php echo base_url()?>public/js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="outer-container clearfix">
                    <!--Logo Outer-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index-2.html"><img src="<?php echo base_url()?>public/images/logo.png" alt="" title=""></a></div>
                    </div>

                    <div class="top-left info-block left-aligned">
                        <div class="inner">
                            <!-- Hidden Nav Toggler -->
                            <div class="nav-toggler">
                                <a class="hidden-bar-opener"><i class="icon_menu"><img src="<?php echo base_url()?>public/images/icons/menu-icon.png" alt="" /></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="top-right info-block right-aligned">
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="public/images/icons/search-icon.png" alt="" /></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="http://elitelayers.net/html/greta/blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <div class="header-lower">
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <!--Nav-->
                            <ul class="navigation clearfix">
                                <li><a href="#">Home</a>

                                </li>
                                <li class="dropdown"><a href="#">Categories</a>
                                    <ul>
                                        <?php
                                            foreach ($news_list as $item)
                                            {?>
                                                <li class=""><a href=""> <?php echo $item->name; ?> </a></li>
                                            <?php }
                                        ?>
                                    </ul>
                                </li>
                                
                                <li class="dropdown"><a href="featured.html">features</a>
                                    <ul>
                                    </ul>
                                </li>
                                <li><a href="#">About Me</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
