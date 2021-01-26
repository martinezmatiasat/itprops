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
                        <h4 class="card-title">Sincronizaci&oacute;n</h4>
                     </div>
                     <div class="card-content">
                        <div class="card-body">
                           <!-- Datatable starts -->
                           <div class="table-responsive">
                              <table class="table list-datatable">
                                 <thead>
                                    <tr>
                                       <th>Nombre</th>
                                       <th>URL</th>
                                       <th>Autorizaci&oacute;n</th>
                                       <th>Sincronizar</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Nombre de la Web</td>
                                       <td>
                                          <span>
                                             https://direccion.com.ar
                                          </span>
                                       </td>
                                       <td>
                                          <a href="page-users-edit.html" class="btn btn-sm btn-outline-primary">
                                             <i class="ft-unlock"></i>
                                             Generar
                                          </a>
                                       </td>
                                       <td>
                                          <div class="custom-switch custom-switch-primary custom-control-inline mb-1 mb-xl-0">
                                             <input type="checkbox" class="custom-control-input" id="color-switch-1" checked>
                                             <label class="custom-control-label mr-1" for="color-switch-1">
                                                <span>-</span>
                                             </label>
                                          </div>
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