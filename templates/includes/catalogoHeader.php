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
                  <a class="nav-link nav-catalogo" id="general-tab" data-toggle="tab" name="zonas" href=<?= URL . "catalogo/zonas"; ?> role="tab" aria-controls="" aria-selected="false">
                     <i class="ft-globe mr-1 align-middle"></i>
                     <span class="align-middle">Zonas</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link nav-catalogo" id="change-password-tab" data-toggle="tab" name="tipos-propiedad" href=<?= URL . "catalogo/tipos-propiedad"; ?> role="tab" aria-controls="" aria-selected="false">
                     <i class="ft-home mr-1 align-middle"></i>
                     <span class="align-middle">Tipos de propiedad</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link nav-catalogo" id="info-tab" data-toggle="tab" name="tipos-operacion" href=<?= URL . "catalogo/tipos-operacion"; ?> role="tab" aria-controls="" aria-selected="false">
                     <i class="ft-dollar-sign mr-1 align-middle"></i>
                     <span class="align-middle">Tipos de operaci&oacute;n</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link nav-catalogo" id="social-links-tab" data-toggle="tab" name="caracteristicas" href=<?= URL . "catalogo/caracteristicas"; ?> role="tab" aria-controls="" aria-selected="false">
                     <i class="ft-list mr-1 align-middle"></i>
                     <span class="align-middle">Caracter&iacute;sticas</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link nav-catalogo" id="connections-tab" data-toggle="tab" name="tipos-documento" href=<?= URL . "catalogo/tipos-documento"; ?> role="tab" aria-controls="" aria-selected="false">
                     <i class="ft-file mr-1 align-middle"></i>
                     <span class="align-middle">Tipos de documento</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link nav-catalogo" id="notifications-tab" data-toggle="tab" name="bloques-info" href=<?= URL . "catalogo/bloques-info"; ?> role="tab" aria-controls="" aria-selected="false">
                     <i class="ft-grid mr-1 align-middle"></i>
                     <span class="align-middle">Bloques de informaci&oacute;n</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link nav-catalogo" id="notifications-tab" data-toggle="tab" name="procedencias" href=<?= URL . "catalogo/procedencias"; ?> role="tab" aria-controls="" aria-selected="false">
                     <i class="ft-monitor mr-1 align-middle"></i>
                     <span class="align-middle">Procedencias</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link nav-catalogo" id="notifications-tab" data-toggle="tab" name="tipos-tarea" href=<?= URL . "catalogo/tipos-tarea"; ?> role="tab" aria-controls="" aria-selected="false">
                     <i class="ft-inbox mr-1 align-middle"></i>
                     <span class="align-middle">Tipos de tarea</span>
                  </a>
               </li>
            </ul>
            <!-- Nav tabs ends-->
         </div>
         <div class="col-10 col-md-10 col-lg-10">
            <!-- Card -->