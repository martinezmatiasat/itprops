<?php require_once INCLUDES . 'header.php'; ?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <section class="users-list-wrapper">
         <div class="row">
            <div class="col-12">
               <div class="content-header">Calendar</div>
            </div>
         </div>
         <!-- Table starts -->
         <div class="users-list-table">
            <div class="row">
               <div class="col-2">
                  <ul>
                     <li>algo</li>
                     <li>algo</li>
                     <li>algo</li>
                     <li>algo</li>
                     <li>algo</li>
                  </ul>
               </div>
               <div class="col-10">
                  <div class="card">
                     <div class="card-content">
                        <div class="card-body">
                           <!-- Datatable starts -->
                           <div class="table-responsive">
                              <table id="users-list-datatable" class="table">
                                 <thead>
                                    <tr>
                                       <th>Nombre (Provincia)</th>
                                       <th>Edit</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Santa Fe</td>
                                       <td>
                                          <a href=<?php echo URL . "catalogo/partido"; ?>>
                                             <i class="ft-zoom-in font-medium-2"></i>
                                          </a>
                                          <span>|</span>
                                          <a href=<?php echo URL . "catalogo/eliminar_zona"; ?>>
                                             <i class="ft-trash-2 font-medium-2"></i>
                                          </a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- Datatable ends -->
                           <a href=<?= URL . "catalogo/nueva-zona"; ?> type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-plus mr-1"></i>Nuevo Partido</a>
                           <button type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-download mr-1"></i>Importar Excel</button>
                           <button type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-upload mr-1"></i>Exportar Excel</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Table ends -->
      </section>

   </div>
</div>

<?php
$pageLevelJs = ["js/catalogo-zonas.js"];
require_once INCLUDES . 'footer.php';
?>