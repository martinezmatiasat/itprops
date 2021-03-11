<!DOCTYPE html>
<html class="loading" lang="en">
<!-- BEGIN : Head-->

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
   <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
   <meta name="author" content="PIXINVENT">
   <title>Lock Screen Page - Apex responsive bootstrap 4 admin template</title>
   <link rel="shortcut icon" type="image/x-icon" href=<?= APPASSETS . "img/ico/favicon.ico" ?>>
   <link rel="shortcut icon" type="image/png" href=<?= APPASSETS . "img/ico/favicon-32.png" ?>>
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="apple-touch-fullscreen" content="yes">
   <meta name="apple-mobile-web-app-status-bar-style" content="default">
   <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
   <!-- BEGIN VENDOR CSS-->
   <!-- font icons-->
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "fonts/feather/style.min.css" ?>>
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "fonts/simple-line-icons/style.css" ?>>
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "fonts/font-awesome/css/font-awesome.min.css" ?>>
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "vendors/css/perfect-scrollbar.min.css" ?>>
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "vendors/css/prism.min.css" ?>>
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "vendors/css/switchery.min.css" ?>>
   <!-- END VENDOR CSS-->
   <!-- BEGIN APEX CSS-->
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "css/bootstrap.css" ?>>
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "css/bootstrap-extended.css" ?>>
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "css/colors.css" ?>>
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "css/components.css" ?>>
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "css/themes/layout-dark.css" ?>>
   <link rel="stylesheet" href=<?= APPASSETS . "css/plugins/switchery.css" ?>>
   <!-- END APEX CSS-->
   <!-- BEGIN Page Level CSS-->
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "css/core/menu/horizontal-menu.css" ?>>
   <link rel="stylesheet" href=<?= APPASSETS . "css/pages/authentication.css" ?>>
   <!-- END Page Level CSS-->
   <!-- BEGIN: Custom CSS-->
   <link rel="stylesheet" type="text/css" href=<?= APPASSETS . "css/style.css" ?>>
   <!-- END: Custom CSS-->
</head>
<!-- END : Head-->

<!-- BEGIN : Body-->

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 1-column auth-page navbar-sticky blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
   <!-- ////////////////////////////////////////////////////////////////////////////-->
   <div class="wrapper">
      <div class="main-panel">
         <!-- BEGIN : Main Content-->
         <div class="main-content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
               <!--Lock Screen Starts-->
               <section id="lock-screen" class="auth-height">
                  <div class="row full-height-vh m-0">
                     <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="card overflow-hidden">
                           <div class="card-content">
                              <div class="card-body auth-img">
                                 <div class="row m-0">
                                    <div class="col-lg-6 d-lg-flex justify-content-center align-items-center d-none text-center auth-img-bg p-3">
                                       <img src="../../../app-assets/img/gallery/lock.png" alt="" class="img-fluid" height="230" width="310">
                                    </div>
                                    <div class="col-lg-6 col-md-12 py-3 px-4">
                                       <h4 class="card-title mb-3">Cambio de clave</h4>
                                       <form action=<?= URL . "login/change_pass/".$data['administrador_id']?> method="post">
                                          <input type="password" name="actual" class="form-control mb-2" placeholder="Clave Actual">
                                          <input type="password" name="nueva" class="form-control mb-2" placeholder="Nueva Clave">
                                          <input type="password" name="confirma" class="form-control mb-2" placeholder="Confirme Nueva Clave">
                                          <input type="submit" class="btn btn-block btn-primary mt-2" value="Aceptar">
                                       </form>
                                       <div class="mt-3">
                                          <?= Alert::catch_login_msg(); ?>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!--Lock Screen Ends-->

            </div>
         </div>
         <!-- END : End Main Content-->
      </div>
   </div>
   <!-- ////////////////////////////////////////////////////////////////////////////-->

   <!-- BEGIN VENDOR JS-->
   <script src=<?= APPASSETS . "vendors/js/vendors.min.js" ?>></script>
   <script src=<?= APPASSETS . "vendors/js/switchery.min.js" ?>></script>
   <!-- BEGIN VENDOR JS-->
   <!-- BEGIN PAGE VENDOR JS-->
   <!-- END PAGE VENDOR JS-->
   <!-- BEGIN APEX JS-->
   <script src=<?= APPASSETS . "js/core/app-menu.js" ?>></script>
   <script src=<?= APPASSETS . "js/core/app.js" ?>></script>
   <script src=<?= APPASSETS . "js/notification-sidebar.js" ?>></script>
   <script src=<?= APPASSETS . "js/customizer.js" ?>></script>
   <script src=<?= APPASSETS . "js/scroll-top.js" ?>></script>
   <!-- END APEX JS-->
   <!-- BEGIN PAGE LEVEL JS-->
   <!-- END PAGE LEVEL JS-->
   <!-- BEGIN: Custom JS-->
   <script src=<?= APPASSETS . "js/scripts.js" ?>></script>
   <!-- END: Custom JS-->
</body>
<!-- END : Body-->

</html>