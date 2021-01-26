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
                        <p>Front</p>
                        <form>
                           <div class="form-group mb-2">
                              <label for="basicInputFile">Logo</label>
                              <input type="file" class="form-control-file" id="basicInputFile">
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">T&iacute;tulo</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Keywords</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Descripci&oacute;n</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Nombre de la Empresa</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-3">
                              <label for="basic-form-5">Url (&uacute;nica)</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-2">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" checked name="customCheck" id="custom-check-1">
                                 <label class="custom-control-label" for="custom-check-1"><span>Mostrar direcci&oacute;n</span></label>
                              </div>
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Color Primario</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-4">
                              <label for="basic-form-5">Color Secundario</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <p>Back</p>
                           <div class="form-group mb-2">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" checked name="customCheck" id="custom-check-2">
                                 <label class="custom-control-label" for="custom-check-2"><span>Mostrar c&oacute;digo QR</span></label>
                              </div>
                           </div>
                           <div class="form-group mb-2">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" checked name="customCheck" id="custom-check-3">
                                 <label class="custom-control-label" for="custom-check-3"><span>Mostrar banner</span></label>
                              </div>
                           </div>
                           <div class="form-group mb-4">
                              <label for="basic-form-5">Establecer tiempo de anticipaci&oacute;n con que se notificar&aacute; una tarea o evento</label>
                              <select id="basic-form-5" class="form-control">
                                 <option value="0">Sin anticipaci&oacute;n</option>
                                 <option value="10">10 minutos</option>
                                 <option value="30">30 minutos</option>
                                 <option value="60">1 hora</option>
                                 <option value="120">2 horas</option>
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

<?php require_once INCLUDES . 'footer.php'; ?>