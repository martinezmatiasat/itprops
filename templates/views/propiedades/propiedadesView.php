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
                     <label for="list-verified">Verified</label>
                     <fieldset class="form-group">
                        <select id="list-verified" class="form-control list-verified">
                           <option value="Any">Any</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3">
                     <label for="users-list-role">Role</label>
                     <fieldset class="form-group">
                        <select id="users-list-role" class="form-control">
                           <option value="Any">Any</option>
                           <option value="User">User</option>
                           <option value="Staff">Staff</option>
                        </select>
                     </fieldset>
                  </div>

                  <div class="col-12 col-sm-6 col-lg-3">
                     <label for="users-list-status">Status</label>
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