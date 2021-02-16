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
   <!-- END VENDOR CSS-->
   <!-- BEGIN APEX CSS-->
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/bootstrap.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/bootstrap-extended.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/colors.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/components.css"; ?>>
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/themes/layout-dark.css"; ?>>
   <link rel="stylesheet" href=<?php echo APPASSETS . "css/plugins/switchery.css"; ?>>
   <!-- END APEX CSS-->
   <!-- BEGIN Page Level CSS-->
   <link rel="stylesheet" type="text/css" href=<?php echo APPASSETS . "css/core/menu/horizontal-menu.css"; ?>>
   <link rel="stylesheet" href=<?php echo APPASSETS . "css/pages/authentication.css"; ?>>
   <!-- END Page Level CSS-->
   <!-- BEGIN: Custom CSS-->
   <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
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
               <!--Login Page Starts-->
               <section id="login" class="auth-height">
                  <div class="row full-height-vh m-0">
                     <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="card overflow-hidden">
                           <div class="card-content">
                              <div class="card-body auth-img">
                                 <div class="row m-0">
                                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center auth-img-bg p-3">
                                       <img src=<?= APPASSETS . "img/gallery/login.png"; ?> alt="" class="img-fluid" width="300" height="230">
                                    </div>
                                    <div class="col-lg-6 col-12 px-4 py-3">
                                       <h4 class="mb-2 card-title">Login</h4>
                                       <p>Welcome back, please login to your account.</p>
                                       <form action=<?= URL . "login/login"; ?> method="post">
                                          <input type="text" name="email" class="form-control mb-3" placeholder="E-mail">
                                          <input type="password" name="pass" class="form-control mb-2" placeholder="Password">
                                          <div class="d-sm-flex justify-content-between mb-3 font-small-2">
                                             <div class="remember-me mb-2 mb-sm-0">
                                                <div class="checkbox auth-checkbox">
                                                   <input type="checkbox" id="auth-ligin">
                                                   <label for="auth-ligin"><span>Remember Me</span></label>
                                                </div>
                                             </div>
                                             <a href="auth-forgot-password.html">Forgot Password?</a>
                                          </div>
                                          <div class="d-flex justify-content-between flex-sm-row flex-column">
                                             <a href="auth-register.html" class="btn bg-light-primary mb-2 mb-sm-0">Register</a>
                                             <input type="submit" class="btn btn-primary" value="Login">
                                          </div>
                                          <div class="mt-3 d-flex justify-content-between align-items-center">
                                             <?= Alert::catch_login_msg(); ?>
                                          </div>
                                       </form>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!--Login Page Ends-->
            </div>
         </div>
         <!-- END : End Main Content-->
      </div>
   </div>
   <!-- ////////////////////////////////////////////////////////////////////////////-->

   <!-- BEGIN VENDOR JS-->
   <script src=<?php echo APPASSETS . "vendors/js/vendors.min.js"; ?>></script>
   <script src=<?php echo APPASSETS . "vendors/js/switchery.min.js"; ?>></script>
   <!-- BEGIN VENDOR JS-->
   <!-- BEGIN PAGE VENDOR JS-->
   <!-- END PAGE VENDOR JS-->
   <!-- BEGIN APEX JS-->
   <script src=<?php echo APPASSETS . "js/core/app-menu.js"; ?>></script>
   <script src=<?php echo APPASSETS . "js/core/app.js"; ?>></script>
   <script src=<?php echo APPASSETS . "js/calendario-sidebar.js"; ?>></script>
   <script src=<?php echo APPASSETS . "js/consultas-sidebar.js"; ?>></script>
   <script src=<?php echo APPASSETS . "js/customizer.js"; ?>></script>
   <script src=<?php echo APPASSETS . "js/scroll-top.js"; ?>></script>
   <!-- END APEX JS-->
   <!-- BEGIN PAGE LEVEL JS-->
   <!-- END PAGE LEVEL JS-->
   <!-- BEGIN: Custom CSS-->
   <script src=<?php echo ASSETS . "js/scripts.js"; ?>></script>
   <!-- END: Custom CSS-->


</body>
<!-- END : Body-->

</html>