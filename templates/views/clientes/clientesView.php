
<?php
$vendorCss = ['datatables/dataTables.bootstrap4.min.css'];
$pageLevelCss = ['css/pages/page-users.css'];
require_once INCLUDES . 'header.php';
?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <section class="users-list-wrapper">
         <!-- Filter starts -->
         <div class="users-list-filter px-2">
            <form>
               <div class="row border rounded py-2 mb-2 mx-n2">

                  <div class="col-md-5 col-12 mt-2">
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="users-list-role">Tiene App</label>
                        <div class="col-md-8">
                           <select id="users-list-role" class="form-control">
                              <option value="Any">Seleccionar</option>
                              <option value="YES">S&iacute;</option>
                              <option value="No">No</option>
                           </select>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-5 col-12 mt-2">
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="users-list-role">Prop. Activas</label>
                        <div class="col-md-8">
                           <select id="users-list-role" class="form-control">
                              <option value="Any">Seleccionar</option>
                              <option value="YES">S&iacute;</option>
                              <option value="No">No</option>
                           </select>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-2 col-12 mt-2">
                     <button type="reset" class="btn btn-primary btn-block users-list-clear glow mb-0">Clear</button>
                  </div>
               </div>
            </form>
         </div>
         <!-- Filter ends -->

         <!-- Table starts -->
         <div class="users-list-table">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="card-content">
                        <div class="card-body">
                           <!-- Datatable starts -->
                           <div class="table-responsive">
                              <table class="table list-datatable">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Nombre completo</th>
                                       <th>Email</th>
                                       <th>Tel&eacute;fono</th>
                                       <th>Propiedades</th>
                                       <th>App</th>
                                       <th>Acciones</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>300</td>
                                       <td>Juan P&eacute;rez</td>
                                       <td>jp@mail.com</td>
                                       <td>12-3456-7890</td>
                                       <td>
                                          <a href=<?php echo URL . "clientes/propiedades"; ?> class="btn btn-success bg-light-success btn-sm">3</a>
                                       </td>
                                       <td>S&iacute;</td>
                                       <td>
                                          <a href=<?php echo URL . "clientes/ver"; ?>>
                                             <i class="ft-zoom-in font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href=<?php echo URL . "clientes/editar"; ?>>
                                             <i class="ft-edit font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href=<?php echo URL . "clientes/exportar"; ?>>
                                             <i class="ft-upload font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href=<?php echo URL . "clientes/importar"; ?>>
                                             <i class="ft-download font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href=<?php echo URL . "clientes/alertas"; ?>>
                                             <i class="ft-alert-triangle font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href=<?php echo URL . "clientes/favorito"; ?>>
                                             <i class="ft-star font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href=<?php echo URL . "clientes/cambio-clave"; ?>>
                                             <i class="ft-lock font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href=<?php echo URL . "clientes/eliminar"; ?>>
                                             <i class="ft-trash-2 font-medium-2"></i>
                                          </a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- Datatable ends -->
                           <button type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-plus mr-1"></i>Nuevo Cliente</button>
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