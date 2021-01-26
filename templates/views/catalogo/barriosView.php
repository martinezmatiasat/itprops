<?php
$vendorCss = ['datatables/dataTables.bootstrap4.min.css'];
$pageLevelCss = ['css/pages/page-users.css'];
require_once INCLUDES . 'header.php';
?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <section class="users-list-wrapper">
         <!-- Table starts -->
         <div class="users-list-table">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="card-content">
                        <div class="card-body">
                           <!-- Datatable starts -->
                           <div class="table-responsive">
                              <table id="users-list-datatable" class="table">
                                 <thead>
                                    <tr>
                                       <th>Nombre (Barrio)</th>
                                       <th>Edit</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Santa Fe</td>
                                       <td>
                                          <a href=<?php echo URL . "catalogo/eliminar_barrio"; ?>>
                                             <i class="ft-trash-2 font-medium-2"></i>
                                          </a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- Datatable ends -->
                           <a href=<?= URL . "catalogo/nuevo-barrio"; ?> type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-plus mr-1"></i>Nuevo Barrio</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Table ends -->
      </section>

   </div>
</div>

<?php
$pageVendorJs = ['datatable/jquery.dataTables.min.js', 'datatable/dataTables.bootstrap4.min.js'];
$pageLevelJs = ['js/list-datatable.js', 'js/page-users.js'];
require_once INCLUDES . 'footer.php';
?>