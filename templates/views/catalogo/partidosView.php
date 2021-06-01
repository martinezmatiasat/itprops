<div class="card">
   <div class="card-content">
      <div class="card-body">
         <!-- Datatable starts -->
         <div class="table-responsive">
            <table id="" class="table list-datatable table-hover">
               <thead>
                  <tr>
                     <th>Nombre</th>
                     <th>Acci&oacute;n</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($data[''] as $) { ?>
                     <tr>
                        <td><?= $z->getNombre(); ?></td>
                        <td>
                           <a href="page-users-edit.html">
                              <i class="ft-edit"></i>
                           </a>
                        </td>
                     </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
         <!-- Datatable ends -->
         <a href=<?= URL . "catalogo/"; ?> type="button" class="btn btn-primary mt-4 mr-2"><i class="ft-plus mr-1"></i>Nuevo</a>
      </div>
   </div>
</div>

<?=
Alert::catch_msg();
require_once INCLUDES . "catalogoScripts.php";
?>