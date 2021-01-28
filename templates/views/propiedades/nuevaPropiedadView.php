<?php
$vendorCss = ['pickadate/pickadate.css', 'select2.min.css'];
$pageLevelCss = ['css/pages/form-wizard.css'];
require_once INCLUDES . 'header.php';
?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Nueva Propiedad</h4>
               </div>
               <div class="card-content">
                  <div class="card-body">
                     Getting start with your project custom requirements using a ready template which is quite difficult and
                     time

                     <!--
                     <ul class="nav nav-tabs my-3" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-selected="true">
                              <i class="ft-search mr-1"></i>
                              <span class="d-none d-sm-inline-block">All</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="images-tab" data-toggle="tab" href="#images" role="tab" aria-selected="false">
                              <i class="ft-image mr-1"></i>
                              <span class="d-none d-sm-inline-block">Images</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-selected="false">
                              <i class="ft-trending-up mr-1"></i>
                              <span class="d-none d-sm-inline-block">News</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-selected="false">
                              <i class="ft-video mr-1"></i>
                              <span class="d-none d-sm-inline-block">Videos</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="tool-tab" data-toggle="tab" href="#tool" role="tab" aria-selected="false">
                              <i class="ft-edit-2 mr-1"></i>
                              <span class="d-none d-sm-inline-block">Tools</span>
                           </a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                              <i class="ft-settings mr-1"></i>
                              <span class="d-none d-sm-inline-block">Settings</span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#" data-toggle="tab" aria-expanded="true">
                                 Privacy
                              </a>
                              <a class="dropdown-item" href="#" data-toggle="tab" aria-expanded="true">
                                 Filter
                              </a>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                              <i class="ft-grid mr-1"></i>
                              <span class="d-none d-sm-inline-block">More</span>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" id="dropdown12-tab" href="#dropdown12" data-toggle="tab" aria-expanded="true">
                                 <span>Image Search</span>
                              </a>
                              <a class="dropdown-item" id="dropdown13-tab" href="#dropdown13" data-toggle="tab" aria-expanded="true">
                                 <span>Advance Search</span>
                              </a>
                           </div>
                        </li>
                     </ul>
                     -->


                     <form action="" class="mt-3 icons-tab-steps">

                        <h6>Datos de propiedad</h6>
                        <fieldset>

                           <div class="form-row">
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">T&iacute;tulo</label>
                                    <input type="text" id="" class="form-control" name="fname">
                                 </div>
                              </div>
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">C&oacute;digo interno</label>
                                    <input type="text" id="" class="form-control" name="fname">
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">URL Direcci&oacute;n</label>
                                    <input type="text" id="" class="form-control" name="fname">
                                 </div>
                              </div>
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">URL</label>
                                    <input type="text" id="" class="form-control" name="fname" disabled>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">Foto principal</label>
                                    <input type="file" id="" class="form-control-file" name="fname">
                                 </div>
                              </div>
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">Portada</label>
                                    <input type="file" id="" class="form-control-file" name="fname">
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12 mb-2">
                                 <div class="form-group">
                                    <label for="">Im&aacute;genes</label>
                                    <input type="file" id="" class="form-control-file" name="fname">
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12 mb-1">
                                 <div class="form-group">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="" class="ml-1">Apto profesional</label>
                                 </div>
                              </div>
                              <div class="col-md-6 col-12 mb-1">
                                 <div class="form-group">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="" class="ml-1">Apto cr&eacute;dito</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-12 col-12">
                                 <div class="form-group">
                                    <label for="">Descripci&oacute;n completa</label>
                                    <textarea name="" id="" class="form-control" rows="4"></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-12 col-12">
                                 <div class="form-group">
                                    <label for="">Bloque de direcci&oacute;n</label>
                                    <div class="input-group">
                                       <input type="text" class="form-control" placeholder="">
                                       <div class="input-group-append">
                                          <button class="btn btn-primary" type="button">Validar con Google</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12 mt-2 mb-2">
                                 <div class="form-group">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="" class="ml-1">Mostrar direcci&oacute;n</label>
                                 </div>
                              </div>
                              <div class="col-md-6 col-12 mt-2 mb-2">
                                 <div class="form-group">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="" class="ml-1">Habilitar Street View</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">Mapa</label>
                                    <select name="" id="" class="form-control">
                                       <option value="">Direcci&oacute;n Completa</option>
                                       <option value="">Cercan&iacute;a</option>
                                       <option value="">No mostrar</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">Tipo de inmueble</label>
                                    <select name="" id="" class="form-control">
                                       <option value="">Direcci&oacute;n Completa</option>
                                       <option value="">Cercan&iacute;a</option>
                                       <option value="">No mostrar</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">Estado de inmueble</label>
                                    <select name="" id="" class="form-control">
                                       <option value="">Direcci&oacute;n Completa</option>
                                       <option value="">Cercan&iacute;a</option>
                                       <option value="">No mostrar</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">Tipo de operaci&oacute;n</label>
                                    <select name="" id="" class="form-control">
                                       <option value="">Algo</option>
                                       <option value="">Algo</option>
                                       <option value="">Algo</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">Local</label>
                                    <select id="" class="select2 form-control" multiple aria-hidden="true">
                                       <option value="Rock" selected>Rock</option>
                                       <option value="Jazz">Jazz</option>
                                       <option value="Disco">Disco</option>
                                       <option value="Pop">Pop</option>
                                       <option value="Techno">Techno</option>
                                       <option value="Folk">Folk</option>
                                       <option value="Hip Hop" selected>Hip Hop</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12 mt-2 mb-2">
                                 <div class="form-group">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="" class="ml-1">Habilitado</label>
                                 </div>
                              </div>
                              <div class="col-md-6 col-12 mt-2 mb-2">
                                 <div class="form-group">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="" class="ml-1">Mostrar precio</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">Datos del due&ntilde;o</label>
                                    <select name="" id="" class="form-control">
                                       <option value="">Algo</option>
                                       <option value="">Algo</option>
                                       <option value="">Algo</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-3 col-6">
                                 <div class="form-group">
                                    <label for=""></label>
                                    <button type="button" id="" class="btn btn-primary" name="fname">
                                       Nuevo cliente
                                    </button>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-4 col-12 mt-2 mb-2">
                                 <div class="form-group">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="">Destacado</label>
                                 </div>
                              </div>
                              <div class="col-md-4 col-12 mt-2 mb-2">
                                 <div class="form-group">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="">Consultas web</label>
                                 </div>
                              </div>
                              <div class="col-md-4 col-12 mt-2 mb-2">
                                 <div class="form-group">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="">Consultas app</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">Asignado a</label>
                                    <select name="" id="" class="form-control">
                                       <option value="">Algo</option>
                                       <option value="">Algo</option>
                                       <option value="">Algo</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6 col-12">
                                 <div class="form-group">
                                    <label for="">Fecha de publicaci&oacute;n</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="col-md-6 col-12  mt-2 mb-2">
                                 <div class="form-group">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="">Consultas a Responsable</label>
                                 </div>
                              </div>
                           </div>
                           
                        </fieldset>
                        <h6>Caracteristicas del inmueble</h6>
                        <fieldset>
                           <div class="form-row">
                              <div class="col-md-4 col-12 mt-2 mb-2">
                                 <div class="form-group mt-1">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="">Destacado</label>
                                 </div>
                              </div>
                              <div class="col-md-8 col-12 mt-2 mb-2">
                                 <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                       <label for="last-name" class="col-form-label">Last Name</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                       <input type="text" id="last-name" class="form-control" name="fname" placeholder="Last Name">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                        <h6>Ambiente</h6>
                        <fieldset>
                           <div class="form-row">
                              <div class="col-md-4 col-12 mt-2 mb-2">
                                 <div class="form-group mt-1">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="">Destacado</label>
                                 </div>
                              </div>
                              <div class="col-md-8 col-12 mt-2 mb-2">
                                 <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                       <label for="last-name" class="col-form-label">Last Name</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                       <input type="text" id="last-name" class="form-control" name="fname" placeholder="Last Name">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                        <h6>Sincronización</h6>
                        <fieldset>
                           <div class="form-row">
                              <div class="col-md-4 col-12 mt-2 mb-2">
                                 <div class="form-group mt-1">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="">Destacado</label>
                                 </div>
                              </div>
                              <div class="col-md-8 col-12 mt-2 mb-2">
                                 <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                       <label for="last-name" class="col-form-label">Last Name</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                       <input type="text" id="last-name" class="form-control" name="fname" placeholder="Last Name">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                        <h6>Documentos</h6>
                        <fieldset>
                           <div class="form-row">
                              <div class="col-md-4 col-12 mt-2 mb-2">
                                 <div class="form-group mt-1">
                                    <input type="checkbox" id="" class="switchery" checked>
                                    <label for="">Destacado</label>
                                 </div>
                              </div>
                              <div class="col-md-8 col-12 mt-2 mb-2">
                                 <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                       <label for="last-name" class="col-form-label">Last Name</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                       <input type="text" id="last-name" class="form-control" name="fname" placeholder="Last Name">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>

                     </form>

                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
</div>

<?php
$pageVendorJs = ['jquery.steps.min.js', 'pickadate/picker.js', 'pickadate/picker.date.js', 'pickadate/picker.time.js', 'pickadate/legacy.js', 'select2.full.min.js'];
$pageLevelJs = ['js/select2.js', 'js/form-wizard.js'];
require_once INCLUDES . 'footer.php';
?>