<div class="card">
   <div class="card-content">
      <div class="card-body">
         <!-- Datatable starts -->
         <div class="table-responsive">
            <table class="table list-datatable">
               <thead>
                  <tr>
                     <th>Nombre (Caracter&iacute;stica)</th>
                     <th>Tipo de dato</th>
                     <th>Es filtro</th>
                     <th>Edit</th>
                     <th>Modal</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($data['caracteristicas'] as $c) { ?>
                     <tr>
                        <td><?= $c->getNombre(); ?></td>
                        <td>N&uacute;mero</td>
                        <td>
                           <div class="form-group">
                              <label for="switcherySize11" class="mr-1">NO</label>
                              <input type="checkbox" id="switcherySize11" class="switchery switchery-primary" checked>
                              <label for="switcherySize11" class="ml-1">S&Iacute;</label>
                           </div>
                        </td>
                        <td>
                           <a href="#"  data-toggle="modal" data-target="#danger">
                              <i class="ft-trash-2 font-medium-2"></i>
                           </a>
                        </td>
                        <td>
                           <!-- Eliminar caracteristica modal -->
                           <button type="button" class="btn bg-light-danger" data-toggle="modal" data-target="#danger"><?= $c->getCatalogoId() ?></button>
                           <!-- Modal -->
                           <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header bg-danger">
                                       <h4 class="modal-title" id="myModalLabel10">Eliminar caracter&iacute;stica</h4>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true"><i class="ft-x font-medium-2 text-bold-700"></i></span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       <p>¿Est&aacute; seguro de realizar esta acci&oacute;n?</p>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn bg-light-secondary" data-dismiss="modal">No</button>
                                       <a class="btn btn-danger action-catalogo" id=<?= $c->getCatalogoId(); ?> href=<?= URL . "catalogo/caracteristicas/eliminar/" ?>  data-toggle="modal" data-target="#danger">S&iacute;</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                  <?php } ?>

               </tbody>
            </table>
         </div>
         <!-- Datatable ends -->
         <a href=<?= URL . "catalogo/nuevo-tipo-prop"; ?> type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-plus mr-1"></i>Nueva Caracter&iacute;stica</a>
      </div>
   </div>
</div>
<?= Alert::catch_msg(); ?>

<script src=<?php echo APPASSETS . "js/core/app.js"; ?>></script>
<script src=<?php echo APPASSETS . "vendors/js/datatable/jquery.dataTables.min.js"; ?>></script>
<script src=<?php echo APPASSETS . "vendors/js/datatable/dataTables.bootstrap4.min.js"; ?>></script>
<script src=<?php echo APPASSETS . "js/list-datatable.js"; ?>></script>
<script src=<?php echo APPASSETS . "js/page-users.js"; ?>></script>
<script src=<?php echo APPASSETS . "js/components-modal.min.js"; ?>></script>
<script src=<?php echo APPASSETS . "js/ajax/ajaxPrueba.js"; ?>></script>