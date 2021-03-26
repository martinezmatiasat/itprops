<?php
$vendorCss = ['datatables/dataTables.bootstrap4.min.css'];
$pageLevelCss = ['css/pages/page-users.css'];
require_once INCLUDES . 'header.php';
?>
<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="row">
         <div class="col-12">
            <div class="content-header"><?= $data["title"] ?></div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-2 mt-3">
            <!-- Nav tabs -->
            <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">
                     <i class="ft-settings mr-1 align-middle"></i>
                     <span class="align-middle">General</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="change-password-tab" data-toggle="tab" href="#change-password" role="tab" aria-controls="change-password" aria-selected="false">
                     <i class="ft-lock mr-1 align-middle"></i>
                     <span class="align-middle">Change Password</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">
                     <i class="ft-info mr-1 align-middle"></i>
                     <span class="align-middle">Info</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="social-links-tab" data-toggle="tab" href="#social-links" role="tab" aria-controls="social-links" aria-selected="false">
                     <i class="ft-twitter mr-1 align-middle"></i>
                     <span class="align-middle">Social Links</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="connections-tab" data-toggle="tab" href="#connections" role="tab" aria-controls="connections" aria-selected="false">
                     <i class="ft-link mr-1 align-middle"></i>
                     <span class="align-middle">Connections</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab" aria-controls="notifications" aria-selected="false">
                     <i class="ft-bell mr-1 align-middle"></i>
                     <span class="align-middle">Notifications</span>
                  </a>
               </li>
            </ul>
         </div>
         <!--
         <div class="col-5 col-md-5">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Contextual Action</h4>
               </div>
               <div class="card-content">
                  <div class="card-body">
                     <ul class="list-group">
                        <li class="list-group-item list-group-item-action"><a href="javascript:;" class="active">Cras justo odio</a></li>
                        <li class="list-group-item list-group-item-action"><a href="javascript:;" class="">Dapibus ac facilisis in</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         -->
         <div class="col-4 col-md-4 col-lg-4">
            <div class="card">
               <div class="card-header">
                  <div class="row">
                     <div class="col-8">
                        <h4 class="card-title">Linked items</h4>
                     </div>
                     <div class="col-4">
                        <button type="button" class="btn btn-sm btn-outline-primary">
                           Agregar
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-danger">
                           Cerrar
                        </button>
                     </div>
                  </div>
               </div>
               <div class="card-content">
                  <div class="card-body">
                     <div class="table-responsive">
                        <table id="" class="table list-datatable table-sm table-hover">
                           <thead>
                              <tr>
                                 <th>Nombre</th>
                                 <th>Acci&oacute;n</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Algo</td>
                                 <td>
                                    <a href="page-users-edit.html">
                                       <i class="ft-edit"></i>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Algo</td>
                                 <td>
                                    <a href="page-users-edit.html">
                                       <i class="ft-edit"></i>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Algo</td>
                                 <td>
                                    <a href="page-users-edit.html">
                                       <i class="ft-edit"></i>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Algo</td>
                                 <td>
                                    <a href="page-users-edit.html">
                                       <i class="ft-edit"></i>
                                    </a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>



      </div>
      <!-- Account Settings ends -->

   </div>
</div>



<?php
$pageVendorJs = ['datatable/jquery.dataTables.min.js', 'datatable/dataTables.bootstrap4.min.js'];
$pageLevelJs = ['js/list-datatable.js', 'js/page-users.js'];
require_once INCLUDES . 'footer.php';
?>