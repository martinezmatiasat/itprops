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
                        <form>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Nombre</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Descripci&oacute;n</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Algun titulo</label>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" checked name="customCheck9" id="custom-check-9">
                                 <label class="custom-control-label" for="custom-check-9"><span>Vendedor</span></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" checked name="customCheck10" id="custom-check-10">
                                 <label class="custom-control-label" for="custom-check-10"><span>Comprador</span></label>
                              </div>
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Otro titulo</label>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" checked name="customCheck9" id="custom-check-9">
                                 <label class="custom-control-label" for="custom-check-9"><span>Usar por defecto</span></label>
                              </div>
                           </div>
                           <div class="form-group mb-4">
                              <label class="mb-1">Pasos</label>
                              <div class="col-lg-12 mb-2">
                                 <input type="text" id="last-name" class="form-control" name="fname" placeholder="T&iacute;tulo">
                              </div>
                              <div class="col-lg-12 mb-2">
                                 <input type="text" id="last-name" class="form-control" name="fname" placeholder="Descripci&oacute;n">
                              </div>
                              <div class="col-lg-12 mb-2">
                                 <input type="text" id="last-name" class="form-control" name="fname" placeholder="Color">
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck1" id="custom-check-1">
                                       <label class="custom-control-label" for="custom-check-1"><span>Orden con drag & drop</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck2" id="custom-check-2">
                                       <label class="custom-control-label" for="custom-check-2"><span>Perdido o ganado</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck3" id="custom-check-3">
                                       <label class="custom-control-label" for="custom-check-3"><span>Cambiar autom&aacute;ticamente de estado</span></label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <button type="button" class="btn btn-primary mr-2"><i class="ft-check mr-1"></i>Enviar datos</button>
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