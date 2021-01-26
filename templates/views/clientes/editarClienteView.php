<?php
$vendorCss = ['select2.min.css', 'pickadate/pickadate.css'];
require_once INCLUDES . 'header.php';
?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <section class="users-edit">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-content">
                     <div class="card-body">
                        <!-- Nav-tabs -->
                        <div class="tab-content">
                           <!-- Account content starts -->
                           <div class="tab-pane fade mt-2 show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                              <!-- Media object starts -->
                              <div class="media">
                                 <img src="../../../app-assets/img/portrait/small/avatar-s-2.png" alt="user edit avatar" class="users-avatar-shadow avatar mr-3 rounded-circle" height="64" width="64">
                                 <div class="media-body">
                                    <h4>Avatar</h4>
                                    <div class="d-flex flex-sm-row flex-column justify-content-start px-0 mb-sm-2">
                                       <button class="btn btn-sm btn-primary mb-1 mb-sm-0">Change</button>
                                       <button class="btn btn-sm bg-light-secondary ml-sm-2">Reset</button>
                                    </div>
                                 </div>
                              </div>
                              <!-- Media object ends -->

                              <!-- Account form starts -->
                              <form novalidate>
                                 <div class="row">
                                    <div class="col-6 col-md-6">
                                       <div class="form-group">
                                          <div class="controls">
                                             <label for="users-edit-name">Nombre</label>
                                             <input type="text" id="users-edit-name" class="form-control" placeholder="Name" value="Dean Stanley" required aria-invalid="false">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                       <div class="form-group">
                                          <div class="controls">
                                             <label for="users-edit-username">Apellido</label>
                                             <input type="text" id="users-edit-surname" class="form-control" placeholder="Surname" value="dean3004" required aria-invalid="false">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-6 col-md-6">
                                       <div class="form-group">
                                          <div class="controls">
                                             <label for="users-edit-dni">DNI</label>
                                             <input type="text" id="users-edit-name" class="form-control" placeholder="Name" value="12.345.678" required aria-invalid="false">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                       <div class="form-group">
                                          <div class="controls">
                                             <label for="users-edit-cuil">CUIL / CUIT</label>
                                             <input type="text" id="users-edit-surname" class="form-control" placeholder="Surname" value="00-12345678-9" required aria-invalid="false">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-6 col-md-6">
                                       <div class="form-group">
                                          <div class="controls">
                                             <label for="users-edit-dni">Direcci&oacute;n</label>
                                             <input type="text" id="users-edit-adress" class="form-control" placeholder="Name" value="Calle 123" required aria-invalid="false">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                       <div class="form-group">
                                          <div class="controls">
                                             <label for="users-edit-cuil">Email</label>
                                             <input type="text" id="users-edit-email" class="form-control" placeholder="Surname" value="algo@mail.com" required aria-invalid="false">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12 col-md-12">
                                       <label for="users-edit-dni">Tel&eacute;fono</label>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-2 col-md-2">
                                       <div class="form-group">
                                          <div class="controls">
                                             <select class="form-control" name="" id="">
                                                <option value="1">Particular</option>
                                                <option value="2">Casa</option>
                                                <option value="3">Trabajo</option>
                                                <option value="4">Celular</option>
                                                <option value="5">Otro</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                       <div class="form-group">
                                          <div class="controls">
                                             <input type="text" id="users-edit-email" class="form-control" placeholder="1234-5678" value="" required aria-invalid="false">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                       <button type="button" class="btn btn-primary">Agregar Otro</button>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-6 col-md-6">
                                       <div class="form-group">
                                          <div class="controls">
                                             <label for="users-edit-username">N&uacute;mero Interno</label>
                                             <input type="text" id="users-edit-surname" class="form-control" placeholder="Surname" value="dean3004" required aria-invalid="false">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                       <div class="form-group">
                                          <div class="controls">
                                             <label for="">Estado</label>
                                             <select class="form-control" name="" id="">
                                                <option value="1">Activo</option>
                                                <option value="2">Bloqueado Consultas</option>
                                                <option value="3">Bloqueado Chat</option>
                                                <option value="4">Bloqueado App</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-6 col-md-12 mb-4">
                                       <div class="form-goup">
                                          <label for="observ">Notas u Observaciones</label>
                                          <textarea name="" id="observ" cols="30" rows="5" class="form-control"></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-3 mt-sm-2">
                                       <button type="submit" class="btn btn-primary mb-2 mb-sm-0 mr-sm-2">Save
                                          Changes</button>
                                       <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                 </div>
                              </form>
                              <!-- Account form ends -->
                           </div>
                           <!-- Account content ends -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>

<?php
$includeVendors = [
   'select2.full.min.js', 'jqBootstrapValidation.js', 'pickadate/picker.js',
   'pickadate/picker.date.js', 'pickadate/picker.time.js'
];
$includeFiles = ["list-datatable.js"];
require_once INCLUDES . 'footer.php';
?>