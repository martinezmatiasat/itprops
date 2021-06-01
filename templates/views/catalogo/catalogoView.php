<?php
$vendorCss = ['datatables/dataTables.bootstrap4.min.css', 'switchery.min.css'];
$apexCss = ['plugins/switchery.css'];
$pageLevelCss = ['css/pages/page-users.css'];
require_once INCLUDES . 'header.php';
require_once INCLUDES . 'catalogoHeader.php';
?>

<div id="table-container">

</div>

<?php
$pageLevelJs = ['js/ajax/module-render.js'];
require_once INCLUDES . 'catalogoFooter.php';
require_once INCLUDES . 'footer.php';
?>