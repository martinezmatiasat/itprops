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
                              <label for="basicInputFile">Logo</label>
                              <input type="file" class="form-control-file" id="basicInputFile">
                           </div>
                           <div class="form-group mb-2">
                              <label for="basicInputFile">Icono</label>
                              <input type="file" class="form-control-file" id="basicInputFile">
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Nombre</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company">
                           </div>
                           <div class="form-group mb-2">
                              <label for="hex">Color Primario</label>
                              <div class="row">
                                 <div class="col-md-2">
                                    <input type="color" id="color" class="form-control">
                                 </div>
                                 <div class="col-md-10">
                                    <input type="text" id="hex" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mb-3">
                           <label for="hex2">Color Secundario</label>
                              <div class="row">
                                 <div class="col-md-2">
                                    <input type="color" id="color2" class="form-control">
                                 </div>
                                 <div class="col-md-10">
                                    <input type="text" id="hex2" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mb-2">
                              <label class="mb-1">Filtrar por</label>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck1" id="custom-check-1">
                                       <label class="custom-control-label" for="custom-check-1"><span>Precio</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck2" id="custom-check-2">
                                       <label class="custom-control-label" for="custom-check-2"><span>Zona</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck3" id="custom-check-3">
                                       <label class="custom-control-label" for="custom-check-3"><span>Partido</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck4" id="custom-check-4">
                                       <label class="custom-control-label" for="custom-check-4"><span>Barrio</span></label>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck5" id="custom-check-5">
                                       <label class="custom-control-label" for="custom-check-5"><span>Tipo de operaci&oacute;n</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck6" id="custom-check-6">
                                       <label class="custom-control-label" for="custom-check-6"><span>Estado de la propiedad</span></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck7" id="custom-check-7">
                                       <label class="custom-control-label" for="custom-check-7"><span>Mostrar filtros vac&iacute;os</span></label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mb-2">
                              <label class="mb-1">Mapa</label>
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" checked name="customCheck8" id="custom-check-8">
                                       <label class="custom-control-label" for="custom-check-8"><span>Activo</span></label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mb-4">
                              <label for="basic-form-5">Mail de consulta</label>
                              <input type="text" id="basic-form-5" class="form-control mb-2" name="company">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" checked name="customCheck9" id="custom-check-9">
                                 <label class="custom-control-label" for="custom-check-9"><span>Activar consultas</span></label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" checked name="customCheck10" id="custom-check-10">
                                 <label class="custom-control-label" for="custom-check-10"><span>Activar chat</span></label>
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