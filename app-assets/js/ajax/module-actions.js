$(document).ready(initEvents);

function initEvents() {
   $("#table-container").on("click", ".delete-catalogo", setModalHref);
   $("#table-container").on("click", ".action-catalogo", deleteElement);
}

function setModalHref(e) {
   e.preventDefault();
   link = $(this).attr('href');
   console.log(link);
   $('#modal-confirm').attr('href', link);
}

function deleteElement(e) {
   e.preventDefault();
   action = $(this).attr('id');
   console.log($(this).attr('id'));
   $.ajax({
      url: $(this).attr('href'),
      type: 'post',
      data: { action },
      /*
      cache: false,
      dataType: 'json',
      */
   }).done(function (template) {
      $('#table-container').html(template);
   }).fail(function () {
      console.log('Error');
   }).always(function () {
      console.log('Complete');
   });
}