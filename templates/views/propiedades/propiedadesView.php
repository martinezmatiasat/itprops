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
                  <div class="col-6 col-sm-3 col-lg-2">
                     <label for="list-verified">Nombre</label>
                     <fieldset class="form-group">
                        <select class="form-control list-verified">
                           <option value="Any">Any</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-6 col-sm-3 col-lg-2">
                     <label for="users-list-role">C&oacute;digo (Interno)</label>
                     <fieldset class="form-group">
                        <select class="form-control">
                           <option value="Any">Any</option>
                           <option value="User">User</option>
                           <option value="Staff">Staff</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-6 col-sm-3 col-lg-2">
                     <label for="users-list-status">Estado</label>
                     <fieldset class="form-group">
                        <select class="form-control">
                           <option value="Any">Any</option>
                           <option value="Active">Active</option>
                           <option value="Close">Close</option>
                           <option value="Banned">Banned</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-6 col-sm-3 col-lg-2">
                     <label for="users-list-role">Habilitado</label>
                     <fieldset class="form-group">
                        <select class="form-control">
                           <option value="Any">Any</option>
                           <option value="User">User</option>
                           <option value="Staff">Staff</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-6 col-sm-3 col-lg-2">
                     <label for="users-list-status">Tipo de Propiedad</label>
                     <fieldset class="form-group">
                        <select class="form-control">
                           <option value="Any">Any</option>
                           <option value="Active">Active</option>
                           <option value="Close">Close</option>
                           <option value="Banned">Banned</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-6 col-sm-3 col-lg-2">
                     <label for="users-list-role">Tipo de Operaci&oacute;n</label>
                     <fieldset class="form-group">
                        <select class="form-control">
                           <option value="Any">Any</option>
                           <option value="User">User</option>
                           <option value="Staff">Staff</option>
                        </select>
                     </fieldset>
                  </div>
                  <!--
                  <div class="col-6 col-sm-3 col-lg-1 d-flex align-items-center">
                     <button type="reset" class="btn btn-primary btn-block users-list-clear glow mb-0">Clear</button>
                  </div>-->
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
                                       <th>Seleccion</th>
                                       <th>ID</th>
                                       <th>Img principal</th>
                                       <th>T&iacute;tulo</th>
                                       <th>T&iacute;tulo de propiedad</th>
                                       <th>T&iacute;tulo de operaci&oacute;n</th>
                                       <th>Visitas</th>
                                       <th>Estado</th>
                                       <th>Habilitado</th>
                                       <th>Acciones</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Check</td>
                                       <td>300</td>
                                       <td class="text-truncate">
                                          <a href="page-users-view.html">
                                             <img src=<?= APPASSETS."img/portrait/small/avatar-s-2.png" ?> class="avatar mr-2" alt="avatar" width="30" height="30">
                                          </a>
                                       </td>
                                       <td class="text-truncate">Prop</td>
                                       <td>Algo</td>
                                       <td>Algo</td>
                                       <td>50</td>
                                       <td><span class="badge bg-light-success">Activa</span></td>
                                       <td>S&iacute;</td>
                                       <td>
                                          <a href=<?= URL."propiedades/nueva" ?>>
                                             <i class="ft-edit"></i>
                                          </a>
                                          <span>|</span>
                                          <a href="page-users-edit.html">
                                             <i class="ft-file"></i>
                                          </a>
                                          <span>|</span>
                                          <a href="page-users-edit.html">
                                             <i class="ft-image"></i>
                                          </a>
                                          <span>|</span>
                                          <a href="page-users-edit.html">
                                             <i class="ft-monitor"></i>
                                          </a>
                                          <span>|</span>
                                          <a href="page-users-edit.html">
                                             <i class="ft-refresh-cw"></i>
                                          </a>
                                          <span>|</span>
                                          <a href="page-users-edit.html">
                                             <i class="ft-trash-2"></i>
                                          </a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- Datatable ends -->
                           <button type="button" class="btn btn-primary mt-4 mr-2" id="position-bottom-right"><i class="ft-plus mr-1"></i>Nueva Propiedad</button>
                           <button type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-download mr-1"></i>Importar</button>
                           <button type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-upload mr-1"></i>Exportar</button>
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