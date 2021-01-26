<?php require_once INCLUDES . 'header.php'; ?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <section id="basic-hidden-label-form-layouts">
         <div class="row match-height justify-content-center">

            <div class="col-lg-8 col-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">Datos Generales</h4>
                  </div>
                  <div class="card-content">
                     <div class="card-body">
                        <p>This is the most basic and default form having inputs, labels and buttons.</p>
                        <form>
                           <div class="form-group mb-3">
                              <label for="basic-form-5">Raz&oacute;n Social</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-3">
                              <label for="basic-form-5">Nombre y Apellido del Contacto</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-3">
                              <label for="basic-form-5">E-Mail principal</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                              <small class="text-muted">Si se ingresa uno nuevo, se enviar&aacute; un email a la casilla anterior para confirmar el cambio.</small>
                           </div>

                           <div class="form-row">
                              <!--
                              <div class="col-md-2 col-12">
                                 <div class="form-group mb-2">
                                    <label>Tel&eacute;fono</label>
                                    <select id="basic-form-6" name="interested" class="form-control">
                                       <option value="none" selected disabled>Tipo</option>
                                       <option value="design">Design</option>
                                       <option value="development">Development</option>
                                       <option value="illustration">Illustration</option>
                                       <option value="branding">Branding</option>
                                       <option value="video">Video</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-10 col-12">
                                 <div class="form-group mb-2">
                                    <label class="text-muted">.</label>
                                    <input type="text" id="basic-form-5" class="form-control" name="company" placeholder="N&uacute;mero">
                                 </div>
                              </div>
                              -->
                              <div class="col-md-2 col-12 mb-2">
                                 <label>Tel&eacute;fonos</label>
                              </div>
                              <div class="col-md-12 col-12  mb-4">
                                 <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-2">
                                       <label for="last-name" class="col-form-label">Principal</label>
                                    </div>
                                    <div class="col-lg-10 col-10">
                                       <input type="text" id="last-name" class="form-control" name="fname">
                                    </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-2">
                                       <label for="last-name" class="col-form-label">Tipo 2</label>
                                    </div>
                                    <div class="col-lg-10 col-10">
                                       <input type="text" id="last-name" class="form-control" name="fname">
                                    </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-2">
                                       <label for="last-name" class="col-form-label">Tipo 3</label>
                                    </div>
                                    <div class="col-lg-10 col-10">
                                       <input type="text" id="last-name" class="form-control" name="fname">
                                    </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-2">
                                       <label for="last-name" class="col-form-label">Tipo 4</label>
                                    </div>
                                    <div class="col-lg-10 col-10">
                                       <input type="text" id="last-name" class="form-control" name="fname">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <button type="button" class="btn btn-primary mr-2"><i class="ft-check mr-1"></i>Guardar Cambios</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </section>
   </div>
</div>

<?php require_once INCLUDES . 'footer.php'; ?>