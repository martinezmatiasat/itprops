<!DOCTYPE html>
<html class="loading" lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
   <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
   <meta name="author" content="PIXINVENT">
   <title>ItProps - </title>
   <link rel="shortcut icon" type="image/x-icon" href=<?php echo APPASSETS . "img/ico/favicon.ico"; ?>>
   <link rel="shortcut icon" type="image/png" href=<?php echo APPASSETS . "img/ico/favicon-32.png"; ?>>
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="apple-touch-fullscreen" content="yes">
   <meta name="apple-mobile-web-app-status-bar-style" content="default">
   <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
   <!-- BEGIN VENDOR CSS-->
   <!-- font icons-->
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "fonts/feather/style.min.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "fonts/simple-line-icons/style.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "fonts/font-awesome/css/font-awesome.min.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "vendors/css/perfect-scrollbar.min.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "vendors/css/prism.min.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "vendors/css/switchery.min.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "vendors/css/toastr.css"; ?>>
   <?php
   if (isset($vendorCss)) {
      foreach ($vendorCss as $file) {
         echo '<link rel=' . '"' . 'stylesheet' . '"' . ' type=' . '"' . 'text/css' . '"' . ' href=' . '"' . APPASSETS . 'vendors/css/' . $file . '";>';
      }
   }
   ?>
   <!-- END VENDOR CSS-->
   <!-- BEGIN APEX CSS-->
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/bootstrap.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/bootstrap-extended.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/colors.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/components.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/themes/layout-dark.css"; ?>>
   <link rel="stylesheet" href=<?php echo APPASSETS . "css/plugins/switchery.css"; ?>>
   <?php
   if (isset($apexCss)) {
      foreach ($apexCss as $file) {
         echo '<link rel=' . '"' . 'stylesheet' . '"' . ' type=' . '"' . 'text/css' . '"' . ' href=' . '"' . APPASSETS . 'css/' . $file . '";>';
      }
   }
   ?>
   <!-- END APEX CSS-->
   <!-- BEGIN Page Level CSS-->
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/core/menu/horizontal-menu.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/pages/ex-component-toastr.css"; ?>>
   <?php
   if (isset($pageLevelCss)) {
      foreach ($pageLevelCss as $file) {
         echo '<link rel=' . '"' . 'stylesheet' . '"' . ' type=' . '"' . 'text/css' . '"' . ' href=' . '"' . APPASSETS . $file . '";>';
      }
   }
   ?>
   <!-- END Page Level CSS-->
   <!-- BEGIN: Custom CSS-->
   <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . "css/style.css"; ?>>
   <?php
   if (isset($customCss)) {
      foreach ($customCss as $file) {
         echo '<link rel=' . '"' . 'stylesheet' . '"' . ' type=' . '"' . 'text/css' . '"' . ' href=' . '"' . ASSETS . 'css/' . $file . '";>';
      }
   }
   ?>
   <!-- END: Custom CSS-->
</head>

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns  navbar-sticky" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
   <nav class="navbar navbar-expand-lg navbar-light header-navbar navbar-fixed">
      <div class="container-fluid navbar-wrapper">
         <div class="navbar-header d-flex">
            <div class="navbar-toggle menu-toggle d-xl-none d-block float-left align-items-center justify-content-center" data-toggle="collapse">
               <i class="ft-menu font-medium-3"></i>
            </div>
            <ul class="navbar-nav">
               <li class="nav-item mr-2 d-none d-lg-block">
                  <a class="nav-link apptogglefullscreen" id="navbar-fullscreen" href="javascript:;">
                     <i class="ft-maximize font-medium-3"></i>
                  </a>
               </li>
               <li class="nav-item nav-search">
                  <a class="nav-link nav-link-search" href="javascript:">
                     <i class="ft-search font-medium-3"></i>
                  </a>
                  <div class="search-input">
                     <div class="search-input-icon">
                        <i class="ft-search font-medium-3"></i>
                     </div>
                     <input class="input" type="text" placeholder="Explore Apex..." tabindex="0" data-search="starter-search">
                     <div class="search-input-close">
                        <i class="ft-x font-medium-3"></i>
                     </div>
                     <ul class="search-list">

                     </ul>
                  </div>
               </li>
            </ul>
            <div class="navbar-brand-center">
               <div class="navbar-header">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <div class="logo">
                           <a class="logo-text" href="index.html">
                              <div class="logo-img" style="max-width: 50px;">
                                 <img class="logo-img" alt="Apex logo" src=<?php echo APPASSETS . "img/logo-itprops.png"; ?>>
                              </div>
                              <span class="text"></span>
                           </a>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="navbar-container">
            <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="dropdown nav-item">
                     <a class="nav-link notification-sidebar-toggle p-0 mt-2" id="calendario-sidebar-toggle" href=<?= URL . "calendario"; ?>>
                        <i class="fa fa-calendar font-medium-3"></i>
                        <span class="notification badge badge-pill badge-danger">4</span>
                     </a>
                  </li>
                  <li class="dropdown nav-item">
                     <a class="nav-link notification-sidebar-toggle p-0 mt-2" id="consultas-sidebar-toggle" href=<?= URL . "consultas"; ?>>
                        <i class="icon-bubbles font-medium-3"></i>
                        <span class="notification badge badge-pill badge-danger">4</span>
                     </a>
                  </li>
                  <li class="dropdown nav-item">
                     <a class="nav-link dropdown-toggle user-dropdown d-flex align-items-end mt-1" id="config-button" href="javascript:;" data-toggle="dropdown">
                        <div class="user d-md-flex d-none mr-2">
                           <span class="text-right"><i class="icon-settings font-medium-3"></i></span>
                        </div>
                     </a>
                     <div class="dropdown-menu text-left dropdown-menu-right m-0 pb-0" aria-labelledby="dropdownBasic2">
                        <a class="dropdown-item" href=<?= URL . "administradores" ?>>
                           <div class="d-flex align-items-center">
                              <i class="ft-briefcase mr-2"></i>
                              <span>Administradores</span>
                           </div>
                        </a>
                        <a class="dropdown-item" href=<?php echo URL . "tickets"; ?>>
                           <div class="d-flex align-items-center">
                              <i class="ft-file mr-2"></i>
                              <span>Tickets</span>
                           </div>
                        </a>
                        <a class="dropdown-item" href=<?php echo URL . "tickets"; ?>>
                           <div class="d-flex align-items-center">
                              <i class="ft-file-text mr-2"></i>
                              <span>Facturaci&oacute;n</span>
                           </div>
                        </a>
                        <a class="dropdown-item" href=<?php echo URL . "catalogo/zona"; ?>>
                           <div class="d-flex align-items-center">
                              <i class="ft-layers mr-2"></i>
                              <span>Cat&aacute;logo</span>
                           </div>
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                           <div class="d-flex align-items-center">
                              <i class="ft-settings mr-2"></i>
                              <span>Configuraci&oacute;n</span>
                           </div>
                        </a>
                     </div>
                  </li>
                  <li class="dropdown nav-item mr-1">
                     <a class="nav-link dropdown-toggle user-dropdown d-flex align-items-end" id="dropdownBasic2" href="javascript:;" data-toggle="dropdown">
                        <div class="user d-md-flex d-none mr-2">
                           <span class="text-right">John Doe</span>
                           <span class="text-right text-muted font-small-3">Available</span>
                        </div>
                        <img class="avatar" src=<?php echo APPASSETS . "img/portrait/small/avatar-s-1.png"; ?> alt="avatar" height="35" width="35">
                     </a>
                     <div class="dropdown-menu text-left dropdown-menu-right m-0 pb-0" aria-labelledby="dropdownBasic2">
                        <a class="dropdown-item" href="javascript:void(0)">
                           <div class="d-flex align-items-center">
                              <i class="ft-edit mr-2"></i>
                              <span>Mi Perfil</span>
                           </div>
                        </a>
                        <a class="dropdown-item" href=<?= URL . "login/logout" ?>>
                           <div class="d-flex align-items-center">
                              <i class="ft-power mr-2"></i>
                              <span>Salir</span>
                           </div>
                        </a>
                     </div>
                  </li>
                  <li class="nav-item d-none d-lg-block mr-2 mt-1">
                     <a class="nav-link notification-sidebar-toggle" href="javascript:;">
                        <i class="ft-align-right font-medium-3"></i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </nav>

   <div class="wrapper">

      <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-shadow menu-border navbar-brand-center" role="navigation" data-menu="menu-wrapper">
         <div class="navbar-container main-menu-content center-layout" data-menu="menu-container">
            <ul class="navigation-main nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
               <li class="dropdown nav-item">
                  <a class="nav-link" href=<?php echo URL . "dashboard"; ?>>
                     <i class="ft-bar-chart"></i>
                     <span data-i18n="Menu Levels">Dashboard</span>
                  </a>
               </li>
               <li class="dropdown nav-item">
                  <a class="nav-link" href=<?php echo URL . "propiedades"; ?>>
                     <i class="ft-home"></i>
                     <span data-i18n="Menu Levels">Propiedades</span>
                  </a>
               </li>
               <li class="dropdown nav-item">
                  <a class="nav-link" href=<?php echo URL . "oportunidades"; ?>>
                     <i class="ft-gift"></i>
                     <span data-i18n="Menu Levels">Oportunidades</span>
                  </a>
               </li>
               <li class="dropdown nav-item">
                  <a class="nav-link" href=<?php echo URL . "clientes"; ?>>
                     <i class="ft-users"></i>
                     <span data-i18n="Dashboard">Clientes</span>
                  </a>
               </li>
               <li class="dropdown nav-item">
                  <a class="nav-link" href=<?php echo URL . "reportes"; ?>>
                     <i class="ft-bar-chart-2"></i>
                     <span data-i18n="Page1">Reportes</span>
                  </a>
               </li>
            </ul>
         </div>
      </div>

      <div class="main-panel">
         <!-- BEGIN : Main Content-->