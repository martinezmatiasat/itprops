<?php require_once INCLUDES . 'header.php'; ?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <section id="basic-hidden-label-form-layouts">
         <div class="row match-height justify-content-center">

            <div class="col-lg-8 col-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">Api</h4>
                  </div>
                  <div class="card-content">
                     <div class="card-body">
                        <p>This is the most basic and default form having inputs, labels and buttons.</p>
                        <form>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Usuario</label>
                              <input type="text" id="basic-form-5" class="form-control" name="company" placeholder="Razón social de la empresa sin espacios ni caracteres especiales">
                           </div>
                           <div class="form-group mb-2">
                              <label for="basic-form-5">Api Key</label>
                              <input type="text" id="basic-form-5" class="form-control" readonly="readonly" name="company">
                           </div>
                           <div class="form-group mb-4">
                              <label for="basic-form-5">Api Secret</label>
                              <input type="text" id="basic-form-5" class="form-control" readonly="readonly" name="company">
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