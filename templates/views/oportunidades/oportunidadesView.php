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
                  <div class="col-12 col-sm-6 col-lg-3">
                     <label for="list-verified">Estado</label>
                     <fieldset class="form-group">
                        <select id="list-verified" class="form-control list-verified">
                           <option value="Seleccionar">Seleccionar</option>
                           <option value="Activo">Activo</option>
                           <option value="Inactivo">Inactivo</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3">
                     <label for="users-list-role">Fecha desde</label>
                     <fieldset class="form-group">
                        <select id="users-list-role" class="form-control">
                           <option value="Any">Any</option>
                           <option value="User">User</option>
                           <option value="Staff">Staff</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3">
                     <label for="users-list-status">Fecha hasta</label>
                     <fieldset class="form-group">
                        <select id="users-list-status" class="form-control">
                           <option value="Any">Any</option>
                           <option value="Active">Active</option>
                           <option value="Close">Close</option>
                           <option value="Banned">Banned</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
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
                     <div class="card-header">
                        <h4 class="card-title">Oportunidades</h4>
                     </div>
                     <div class="card-content">
                        <div class="card-body">
                           <!-- Datatable starts -->
                           <div class="table-responsive">
                              <table class="table list-datatable">
                                 <thead>
                                    <tr>
                                       <th>T&iacute;tulo</th>
                                       <th>Estado</th>
                                       <th>Descripci&oacute;n</th>
                                       <th>Flujo</th>
                                       <th>Comentarios</th>
                                       <th>Fecha alta</th>
                                       <th>Asignado a</th>
                                       <th>Acciones</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Oportunidad1</td>
                                       <td>Activo</td>
                                       <td>Algo</td>
                                       <td>Venta</td>
                                       <td>Algo</td>
                                       <td>16/03/2019</td>
                                       <td>Pepito</td>
                                       <td>
                                          <a href=<?php echo URL . "oportunidades/editar"; ?>>
                                             <i class="ft-edit font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href="<?php echo URL . "oportunidades/tarea"; ?>">
                                             <i class="ft-file-plus font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href="<?php echo URL . "oportunidades/historial"; ?>">
                                             <i class="ft-list font-medium-2"></i>
                                          </a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- Datatable ends -->
                           <button type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-plus mr-1"></i>Nueva Oportunidad</button>
                           <a href=<?= URL."oportunidades/flujos" ?> class="btn btn-primary mt-4 mr-2"><i class="ft-git-merge mr-1"></i>Flujos</a>
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