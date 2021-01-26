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
                                       <th>Nombre (Caracter&iacute;stica)</th>
                                       <th>Tipo de dato</th>
                                       <th>Es filtro</th>
                                       <th>Edit</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>M2</td>
                                       <td>N&uacute;mero</td>
                                       <td>
                                          <div class="form-group">
                                             <label for="switcherySize11" class="mr-1">NO</label>
                                             <input type="checkbox" id="switcherySize11" class="switchery switchery-primary" checked>
                                             <label for="switcherySize11" class="ml-1">S&Iacute;</label>
                                          </div>
                                          
                                       </td>
                                       <td>
                                          <a href=<?php echo URL . "catalogo/eliminar_caracteristica"; ?>>
                                             <i class="ft-trash-2 font-medium-2"></i>
                                          </a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- Datatable ends -->
                           <a href=<?= URL . "catalogo/nuevo-tipo-prop"; ?> type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-plus mr-1"></i>Nueva Caracter&iacute;stica</a>
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