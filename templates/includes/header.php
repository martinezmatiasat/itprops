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
   <?php
   if (isset($vendorCss)) {
      foreach ($vendorCss as $file) {
         echo '<link rel='.'"'.'stylesheet'.'"'.' type='.'"'.'text/css'.'"'.' href='.'"'.APPASSETS.'vendors/css/'.$file.'";>';
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
         echo '<link rel='.'"'.'stylesheet'.'"'.' type='.'"'.'text/css'.'"'.' href='.'"'.APPASSETS.'css/'.$file.'";>';
      }
   }
   ?>
   <!-- END APEX CSS-->
   <!-- BEGIN Page Level CSS-->
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/core/menu/horizontal-menu.css"; ?>>
   <?php
   if (isset($pageLevelCss)) {
      foreach ($pageLevelCss as $file) {
         echo '<link rel='.'"'.'stylesheet'.'"'.' type='.'"'.'text/css'.'"'.' href='.'"'.APPASSETS.$file.'";>';
      }
   }
   ?>
   <!-- END Page Level CSS-->
   <!-- BEGIN: Custom CSS-->
   <link rel="stylesheet" type="text/css" href=<?php echo ASSETS . "css/style.css"; ?>>
   <?php
   if (isset($customCss)) {
      foreach ($customCss as $file) {
         echo '<link rel='.'"'.'stylesheet'.'"'.' type='.'"'.'text/css'.'"'.' href='.'"'.ASSETS.'css/'.$file.'";>';
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
                        <a class="dropdown-item" href="javascript:void(0)">
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
                        <div class="dropdown-divider">
                        </div>
                        <a class="dropdown-item" href="javascript:void(0)">
                           <div class="d-flex align-items-center">
                              <i class="ft-power mr-2"></i>
                              <span>Cerrar Sesi&oacute;n</span>
                           </div>
                        </a>
                     </div>
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
               <li class="dropdown nav-item" data-menu="dropdown">
                  <a class="dropdown-toggle nav-link d-flex align-items-center" href="javascript:;" data-toggle="dropdown">
                     <i class="ft-home"></i>
                     <span data-i18n="Menu Levels">Propiedades</span>
                  </a>
                  <ul class="dropdown-menu">
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "propiedades"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Listado</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "propiedades/importar"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Importar</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "propiedades/exportar"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Exportar</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="dropdown nav-item" data-menu="dropdown">
                  <a class="dropdown-toggle nav-link d-flex align-items-center" href="javascript:;" data-toggle="dropdown">
                     <i class="ft-gift"></i>
                     <span data-i18n="Menu Levels">Oportunidades</span>
                  </a>
                  <ul class="dropdown-menu">
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "oportunidades"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Oportunidades</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "oportunidades/flujos"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Flujos</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="dropdown nav-item">
                  <a class="nav-link" href=<?php echo URL . "clientes"; ?>>
                     <i class="ft-users"></i>
                     <span data-i18n="Dashboard">Clientes</span>
                  </a>
               </li>
               <li class="dropdown nav-item">
                  <a class="nav-link" href=<?php echo URL . "administradores"; ?>>
                     <i class="ft-briefcase"></i>
                     <span data-i18n="Dashboard">Administradores</span>
                  </a>
               </li>
               <li class="dropdown nav-item">
                  <a class="nav-link" href=<?php echo URL . "reportes"; ?>>
                     <i class="ft-bar-chart-2"></i>
                     <span data-i18n="Page1">Reportes</span>
                  </a>
               </li>
               <li class="dropdown nav-item">
                  <a class="nav-link" href=<?php echo URL . "tickets"; ?>>
                     <i class="ft-file"></i>
                     <span data-i18n="Page1">Tickets</span>
                  </a>
               </li>
               <li class="dropdown nav-item" data-menu="dropdown">
                  <a class="dropdown-toggle nav-link d-flex align-items-center" href="javascript:;" data-toggle="dropdown">
                     <i class="ft-file-text"></i>
                     <span data-i18n="Menu Levels">Facturaci&oacute;n</span>
                  </a>
                  <ul class="dropdown-menu">
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "facturacion/facturas"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Mis Facturas</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "facturacion/datos"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Datos de Facturaci&oacute;n</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="dropdown nav-item" data-menu="dropdown">
                  <a class="dropdown-toggle nav-link d-flex align-items-center" href="javascript:;" data-toggle="dropdown">
                     <i class="ft-layers"></i>
                     <span data-i18n="Menu Levels">Cat&aacute;logo</span>
                  </a>
                  <ul class="dropdown-menu">
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/zona"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Zona</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/partido"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Partido</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/barrio"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Barrio</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/tipos-propiedades"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Tipos de Propiedades</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/estado-propiedad"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Estado Propiedad</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/tipo-operacion"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Tipo de Operaci&oacute;n</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/caracteristicas"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Caracter&iacute;sticas</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/bloques"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Bloques de Informaci&oacute;n</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/tipos-documentos"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Tipos de Documentos</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/procedencia"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Procedencia</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "catalogo/tipos-tareas"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Tipos de Tareas</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="dropdown nav-item" data-menu="dropdown">
                  <a class="dropdown-toggle nav-link d-flex align-items-center" href="javascript:;" data-toggle="dropdown">
                     <i class="ft-settings"></i>
                     <span data-i18n="Menu Levels">Configuraci&oacute;n</span>
                  </a>
                  <ul class="dropdown-menu">
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "configuracion/sucursales"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Sucursales</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "configuracion/sincronizacion"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Sincronizaci&oacute;n</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "configuracion/api"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Api</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "configuracion/datos"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Datos Generales</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "configuracion/general"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Config. General</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "configuracion/app"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Config. App</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "configuracion/ficha"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Config. Ficha</span>
                        </a>
                     </li>
                     <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href=<?php echo URL . "configuracion/cartelera"; ?> data-toggle="dropdown">
                           <i class="ft-arrow-right submenu-icon"></i>
                           <span data-i18n="Second Level">Config. Cartelera</span>
                        </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>

      <div class="main-panel">
         <!-- BEGIN : Main Content-->