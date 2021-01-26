<?php
$vendorCss = ['fullcalendar.min.css', 'daygrid.min.css', 'timegrid.min.css', 'pickadate/pickadate.css'];
$pageLevelCss = ['css/pages/app-calendar.css'];
require_once INCLUDES . 'header.php';
?>

<div class="main-content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <!-- Filter starts -->
      <div class="users-list-filter px-2">
         <form>
            <div class="row border rounded py-2 mb-2 mx-n2">
               <div class="col-12 col-sm-6 col-lg-3">
                  <label for="calendar-user">Usuario</label>
                  <fieldset class="form-group">
                     <select name="" id="calendar-user" class="form-control">
                        <option value="1">Usuario 1</option>
                        <option value="2">Usuario 2</option>
                        <option value="3">Usuario 3</option>
                     </select>
                  </fieldset>
               </div>

               <div class="col-12 col-sm-6 col-lg-3">
                  <div class="form-group">
                     <label>Fecha desde</label>
                     <div class="input-group">
                        <input type='text' class="form-control pickadate-translations" placeholder="Seleccionar">
                        <div class="input-group-append">
                           <span class="input-group-text">
                              <span class="ft-calendar font-medium-2"></span>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-12 col-sm-6 col-lg-3">
                  <div class="form-group">
                     <label>Fecha hasta</label>
                     <div class="input-group">
                        <input type='text' class="form-control pickadate-translations" placeholder="Seleccionar">
                        <div class="input-group-append">
                           <span class="input-group-text">
                              <span class="ft-calendar font-medium-2"></span>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-12 col-sm-6 col-lg-3">
                  <label for="users-list-status">Tipo de evento</label>
                  <fieldset class="form-group">
                     <select id="users-list-status" class="form-control">
                        <option value="Any">Any</option>
                        <option value="Active">Active</option>
                        <option value="Close">Close</option>
                        <option value="Banned">Banned</option>
                     </select>
                  </fieldset>
               </div>
               <!--
               <div class="col-12 col-sm-6 col-lg-2 d-flex align-items-center">
                  <button type="reset" class="btn btn-primary btn-block users-list-clear glow mb-0">Clear</button>
               </div>
               -->
            </div>
         </form>
      </div>
      <!-- Filter ends -->
      <!--Calendar Starts-->
      <section id="calendar">

         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">External Dragging</h4>
                  </div>
                  <div class="card-content">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-3 mb-3 mb-md-0">
                              <div id='external-events'>
                                 <h4 class="mt-2">Draggable Events</h4>
                                 <div class="fc-events-container">
                                    <div class='fc-event' data-color='#975AFF'>All Day Event</div>
                                    <div class='fc-event' data-color='#40C057'>Long Event</div>
                                    <div class='fc-event' data-color='#2F8BE6'>Meeting</div>
                                    <div class='fc-event' data-color='#F77E17'>Birthday party</div>
                                    <div class='fc-event' data-color='#F55252'>Lunch</div>
                                    <div class='fc-event' data-color='#FCC173'>Conference Meeting</div>
                                    <div class='fc-event' data-color='#465375'>Party</div>
                                    <div class='fc-event' data-color='#BDBDBD'>Happy Hour</div>
                                    <div class="checkbox mb-2">
                                       <input type="checkbox" id="drop-remove">
                                       <label for="drop-remove"><span>Remove after drop</span></label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-9">
                              <div id='fc-external-drag'></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">Calendario</h4>
                     <p></p>

                  </div>
                  <div class="card-content">
                     <div class="card-body">
                        <div id='fc-default'></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Calendar Ends-->

   </div>
</div>

<?php
$pageVendorJs = [
   'moment.min.js',
   'fullcalendar.min.js',
   'daygrid.min.js',
   'timegrid.min.js',
   'interactions.min.js',
   'jquery-ui.min.js',
   'pickadate/picker.js',
   'pickadate/picker.date.js',
   'pickadate/picker.time.js',
   'pickadate/legacy.js'
];
$pageLevelJs = [
   'js/app-calendar.js',
   'js/form-datetimepicker.js'
];
require_once INCLUDES . 'footer.php';
?>