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
                        <h4 class="card-title">Flujos</h4>
                     </div>
                     <div class="card-content">
                        <div class="card-body">
                           <!-- Datatable starts -->
                           <div class="table-responsive">
                              <table class="table list-datatable">
                                 <thead>
                                    <tr>
                                       <th>Nombre</th>
                                       <th>Descripci&oacute;n</th>
                                       <th>Permisos</th>
                                       <th>Usar por defecto</th>
                                       <th>Acciones</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Venta</td>
                                       <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                                       <td>Vendedor</td>
                                       <td>Sí</td>
                                       <td>
                                          <a href=<?php echo URL . "oportunidades/flujos/ver"; ?>>
                                             <i class="ft-zoom-in font-medium-2"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Alquiler</td>
                                       <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                       <td>Vendedor y Comprador</td>
                                       <td>Sí</td>
                                       <td>
                                          <a href=<?php echo URL . "oportunidades/flujos/ver"; ?>>
                                             <i class="ft-zoom-in font-medium-2"></i>
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>Otro</td>
                                       <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                       <td>Comprador</td>
                                       <td>No</td>
                                       <td>
                                          <a href=<?php echo URL . "oportunidades/flujos/editar"; ?>>
                                             <i class="ft-edit font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href="<?php echo URL . "oportunidades/flujos/eliminar"; ?>">
                                             <i class="ft-trash-2 font-medium-2"></i>
                                          </a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- Datatable ends -->
                           <button type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-plus mr-1"></i>Nuevo Flujo</button>
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