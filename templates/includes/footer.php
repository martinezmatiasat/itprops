<!-- END : End Main Content-->

<footer class="footer undefined undefined">
   <p class="clearfix text-muted m-0">
      <span>Copyright &copy; 2020 &nbsp;</span>
      <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank">ItProps</a>
      <span class="d-none d-sm-inline-block">, todos los derechos reservados.</span>
   </p>
</footer>
<button class="btn btn-primary scroll-top" type="button">
   <i class="ft-arrow-up"></i>
</button>
</div> <!-- END Main Content-->
</div> <!-- END Wrapper-->

<?php //require_once INCLUDES . 'calendario-sidebar.php'; ?>
<?php //require_once INCLUDES . 'consultas-sidebar.php'; ?>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN VENDOR JS-->
<script src=<?php echo APPASSETS . "vendors/js/vendors.min.js"; ?>></script>
<script src=<?php echo APPASSETS . "vendors/js/switchery.min.js"; ?>></script>
<?php
if (isset($vendorJs)) {
   foreach ($vendorJs as $file) {
      echo '<script src=' . APPASSETS . 'vendors/js/' . $file . '></script>';
   }
}
?>
<!-- END VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<?php
if (isset($pageVendorJs)) {
   foreach ($pageVendorJs as $file) {
      echo '<script src=' . APPASSETS . 'vendors/js/' . $file . '></script>';
   }
}
?>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src=<?php echo APPASSETS . "js/core/app-menu.js"; ?>></script>
<script src=<?php echo APPASSETS . "js/core/app.js"; ?>></script>
<script src=<?php echo APPASSETS . "js/calendario-sidebar.js"; ?>></script>
<script src=<?php echo APPASSETS . "js/consultas-sidebar.js"; ?>></script>
<script src=<?php echo APPASSETS . "js/customizer.js"; ?>></script>
<script src=<?php echo APPASSETS . "js/scroll-top.js"; ?>></script>
<?php
if (isset($apexJs)) {
   foreach ($apexJs as $file) {
      echo '<script src=' . APPASSETS . 'js/' . $file . '></script>';
   }
}
?>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<?php
if (isset($pageLevelJs)) {
   foreach ($pageLevelJs as $file) {
      echo '<script src=' . APPASSETS . $file . '></script>';
   }
}
?>
<!-- END PAGE LEVEL JS-->
<!-- BEGIN: Custom JS-->
<script src=<?php echo ASSETS . "js/scripts.js"; ?>></script>
<?php
if (isset($customJs)) {
   foreach ($customJs as $file) {
      echo '<script src=' . ASSETS . 'js/' . $file . '></script>';
   }
}
?>
<!-- END: Custom JS-->

<?php
// echo Alert::catch_msg();
?>
</body>

</html>