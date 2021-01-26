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
                     <div class="card-header">
                        <h4 class="card-title">Sucursales</h4>
                     </div>
                     <div class="card-content">
                        <div class="card-body">
                           <!-- Datatable starts -->
                           <div class="table-responsive">
                              <table class="table list-datatable">
                                 <thead>
                                    <tr>
                                       <th>Nombre</th>
                                       <th>Contacto</th>
                                       <th>E-mail</th>
                                       <th>Tel&eacute;fono</th>
                                       <th>Horario</th>
                                       <th>Direcci&oacute;n</th>
                                       <th>Acciones</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Villa Pueyrredón</td>
                                       <td>Dean Stanley</td>
                                       <td>dean@inmobiliaria.com</td>
                                       <td>1234-5678</td>
                                       <td>9 a 18 hs.</td>
                                       <td>Avenida 123, CABA</td>
                                       <td>
                                          <a href="page-users-edit.html">
                                             <i class="ft-edit font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href="page-users-edit.html">
                                             <i class="ft-trash-2 font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href="page-users-edit.html">
                                             <i class="ft-star font-medium-2"></i>
                                          </a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- Datatable ends -->
                           <a href=<?= URL . "catalogo/nueva-sucursal"; ?> type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-plus mr-1"></i>Nueva Sucursal</a>
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