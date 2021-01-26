<?php
$pageLevelCss = ['css/pages/page-users.css'];
require_once INCLUDES . 'header.php';
?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <section class="users-view">
         <!-- Media object starts -->
         <div class="row">
            <div class="col-12 col-sm-7">
               <div class="media d-flex align-items-center">
                  <a href="javascript:;">
                     <img src=<?php echo APPASSETS . "img/portrait/small/avatar-s-2.png"; ?> alt="user view avatar" class="users-avatar-shadow rounded" height="64" width="64">
                  </a>
                  <div class="media-body ml-3">
                     <h4>
                        <span class="users-view-name">Dean Stanley</span>
                        <span class="text-muted font-medium-1">
                           <span>@</span>
                           <span class="users-view-username">dean3004</span>
                        </span>
                     </h4>
                     <span>ID:</span>
                     <span class="users-view-id">305</span>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-5 d-flex justify-content-end align-items-center">
               <a href="javaScript:void(0);" class="btn btn-sm bg-light-secondary mr-2 px-3 py-1"><i class="ft-mail"></i></a>
               <a href="javaScript:void(0);" class="btn btn-sm bg-light-secondary mr-2 px-3 py-1">Profile</a>
               <a href="page-users-edit.html" class="btn btn-sm btn-primary px-3 py-1">Edit</a>
            </div>
         </div>
         <!-- Media object ends -->

         <div class="row">
            <div class="col-12">

            </div>
            <div class="col-12">
               <!-- User detail starts -->
               <div class="card">
                  <div class="card-content">
                     <div class="card-body">
                        <div class="row bg-primary bg-lighten-4 rounded mb-3 mx-1 text-center text-lg-left">
                           <div class="col-12 col-sm-4 p-3 d-flex align-itms-center">
                              <h6 class="primary align-self-center mb-0 mx-1">Posts:</h6>
                              <span class="font-large-1 primary">125</span>
                           </div>
                           <div class="col-12 col-sm-4 p-3 d-flex align-itms-center">
                              <h6 class="primary align-self-center mb-0 mx-1">Followers:</h6>
                              <span class="font-large-1 primary">534</span>
                           </div>
                           <div class="col-12 col-sm-4 p-3 d-flex align-itms-center">
                              <h6 class="primary align-self-center mb-0 mx-1">Following:</h6>
                              <span class="font-large-1 primary">256</span>
                           </div>
                        </div>

                        <div class="col-12">
                           <div class="row">
                              
                              <div class="col">
                                 <div class="table-responsive">
                                    <table class="table table-borderless">
                                       <tbody>
                                          <tr>
                                             <td>Nombre:</td>
                                             <td>Juan</td>
                                          </tr>
                                          <tr>
                                             <td>Apellido:</td>
                                             <td>Perez</td>
                                          </tr>
                                          <tr>
                                             <td>DNI:</td>
                                             <td>12.345.678</td>
                                          </tr>
                                          <tr>
                                             <td>CUIL:</td>
                                             <td>20-12345678-0</td>
                                          </tr>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="table-responsive">
                                    <table class="table table-borderless">
                                       <tbody>
                                          <tr>
                                             <td>Tel&eacute;fono/s:</td>
                                             <td>12-3456-7890</td>
                                          </tr>
                                          <tr>
                                             <td>Email:</td>
                                             <td>jp@mail.com</td>
                                          </tr>
                                          <tr>
                                             <td>Bloque dirección:</td>
                                             <td>?</td>
                                          </tr>
                                          <tr>
                                             <td>Numero interno:</td>
                                             <td>123</td>
                                          </tr>
                                          
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="table-responsive">
                                    <table class="table table-borderless">
                                       <tbody>
                                          <tr>
                                             <td>Observaciones:</td>
                                             <td>Juan</td>
                                          </tr>
                                          <tr>
                                             <td>Estado:</td>
                                             <td><span class="badge bg-light-success users-view-status">Activo</span></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>


                        </div>
                     </div>
                  </div>
               </div>
               <!-- User detail ends -->
            </div>
         </div>
      </section>
   </div>
</div>

<?php
$pageLevelJs = ['js/page-users.js'];
require_once INCLUDES . 'footer.php';
?>