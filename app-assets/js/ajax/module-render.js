$(document).ready(initEvents);

function initEvents() {
   $("#myTab").on("click", ".nav-catalogo", renderModule);
   /*
   $("#table-container").on("click", ".delete-catalogo", setModalHref);
   $("#table-container").on("click", "#modal-confirm", deleteElement);
   */
}

function renderModule(e) {
   e.preventDefault();
   action = $(this).attr('name');

   $.ajax({
      url: $(this).attr('href'),
      type: 'post',
      data: { action },
   }).done(function (template) {
      $('#table-container').html(template);
   }).fail(function () {
      console.log('Error');
   }).always(function () {
      console.log('Complete');
   });
}