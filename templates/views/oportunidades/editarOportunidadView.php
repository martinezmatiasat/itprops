<?php
$vendorCss = ['select2.min.css', 'pickadate/pickadate.css'];
$pageLevelCss = ['css/pages/page-users.css', 'css/plugins/form-validation.css'];
require_once INCLUDES . 'header.php';
?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <section id="basic-hidden-label-form-layouts">
         <div class="row match-height justify-content-center">

            <div class="col-lg-8 col-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">Editar Oportunidad</h4>
                  </div>
                  <div class="card-content">
                     <div class="card-body">
                        <form>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">T&iacute;tulo</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Descripci&oacute;n</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-row">
                              <div class="col-md-12 col-12">
                                 <div class="form-group mb-2">
                                    <label for="basic-form-6">Flujo (Vendedor)</label>
                                    <select id="basic-form-6" name="interested" class="form-control">
                                       <option value="none" selected disabled>Seleccionar</option>
                                       <option value="design">Propiedad 1</option>
                                       <option value="development">Propiedad 2</option>
                                       <option value="illustration">Propiedad 3</option>
                                       <option value="branding">Propiedad 4</option>
                                       <option value="video">Propiedad 5</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Flujo (Comprador)</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group">
                              <label for="users-edit-music">Operaci&oacute;n</label>
                              <select id="users-edit-music" class="select2 form-control" multiple aria-hidden="true">
                                 <option value="Rock" selected>Rock</option>
                                 <option value="Jazz">Jazz</option>
                                 <option value="Disco">Disco</option>
                                 <option value="Pop">Pop</option>
                                 <option value="Techno">Techno</option>
                                 <option value="Folk">Folk</option>
                                 <option value="Hip Hop" selected>Hip Hop</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="users-edit-movies">Tipo de propiedad</label>
                              <select id="users-edit-movies" class="select2 form-control" multiple aria-hidden="true">
                                 <option value="Avatar">Avatar</option>
                                 <option value="The Dark Knight" selected>The Dark Knight</option>
                                 <option value="Harry Potter">Harry Potter</option>
                                 <option value="Iron Man" selected>Iron Man</option>
                                 <option value="Spider Man">Spider Man</option>
                                 <option value="Perl Harbour">Perl Harbour</option>
                                 <option value="Airplane!">Airplane!</option>
                              </select>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12">
                                 <div class="form-group mb-2">
                                    <label for="basic-form-1">Monto maximo</label>
                                    <input type="text" id="basic-form-1" class="form-control" name="fname">
                                 </div>
                              </div>
                              <div class="col-md-6 col-12">
                                 <div class="form-group mb-2">
                                    <label for="basic-form-2">Monto minimo</label>
                                    <input type="text" id="basic-form-2" class="form-control" name="lname">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="users-edit-zonas">Zonas</label>
                              <select id="users-edit-zonas" class="select2 form-control" multiple aria-hidden="true">
                                 <option value="Avatar">Avatar</option>
                                 <option value="The Dark Knight" selected>The Dark Knight</option>
                                 <option value="Harry Potter">Harry Potter</option>
                                 <option value="Iron Man" selected>Iron Man</option>
                                 <option value="Spider Man">Spider Man</option>
                                 <option value="Perl Harbour">Perl Harbour</option>
                                 <option value="Airplane!">Airplane!</option>
                              </select>
                           </div>
                           <div class="form-group mb-2">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" checked name="customCheck" id="custom-check-1">
                                 <label class="custom-control-label" for="custom-check-1"><span>Apto cr&eacute;dito</span></label>
                              </div>
                           </div>
                           <div class="form-group mb-2">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" checked name="customCheck" id="custom-check-1">
                                 <label class="custom-control-label" for="custom-check-1"><span>Apto profesional</span></label>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-12 col-12">
                                 <div class="form-group mb-2">
                                    <label for="basic-form-6">Estado actual del flujo</label>
                                    <select id="basic-form-6" name="interested" class="form-control">
                                       <option value="none" selected disabled>Seleccionar</option>
                                       <option value="design">Opc 1</option>
                                       <option value="development">Opc 2</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-9">Comentarios</label>
                              <textarea id="basic-form-9" rows="4" class="form-control" name="comment"></textarea>
                           </div>
                           <div class="form-row">
                              <div class="col-md-12 col-12">
                                 <div class="form-group position-relative">
                                    <label for="form-action-3">Fecha de alta</label>
                                    <input type="text" id="form-action-3" class="form-control pickadate" placeholder="Seleccionar fecha" name="date-opened">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mb-5">
                              <label for="basic-form-6">Asignado a</label>
                              <select id="basic-form-6" name="interested" class="form-control">
                                 <option value="none" selected disabled>Seleccionar</option>
                                 <option value="design">Propiedad 1</option>
                                 <option value="development">Propiedad 2</option>
                                 <option value="illustration">Propiedad 3</option>
                                 <option value="branding">Propiedad 4</option>
                                 <option value="video">Propiedad 5</option>
                              </select>
                           </div>
                           <button type="button" class="btn btn-primary mr-2"><i class="ft-plus mr-1"></i>Generar</button>
                           <button type="button" class="btn btn-primary mr-2"><i class="ft-rotate-cw mr-1"></i>Refrescar</button>
                           <button type="button" class="btn btn-secondary mr-2"><i class="ft-check mr-1"></i>Habilitar</button>
                           <button type="button" class="btn btn-secondary"><i class="ft-x mr-1"></i>Deshabilitar</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </section>
   </div>
</div>

<?php
$pageVendorJs = ['select2.full.min.js', 'jqBootstrapValidation.js', 'pickadate/picker.js', 'pickadate/picker.date.js', 'pickadate/picker.time.js', 'pickadate/legacy.js'];
$pageLevelJs = ['js/page-users.js', 'js/datetime-picker.js', 'js/select2.js', 'js/form-validation.js'];
require_once INCLUDES . 'footer.php';
?>