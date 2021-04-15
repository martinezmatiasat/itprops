$(document).ready(function () {
   $('.nav-catalogo').click(function (e) {
      e.preventDefault();
      $(this).addClass('active');
      action = $(this).attr('name');
      $.ajax({
         url: $(this).attr('href'),
         type: 'post',
         data: {action},
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
   })

   $('.action-catalogo').click(function (e) {
      e.preventDefault();
      action = $(this).attr('id');
      $.ajax({
         url: $(this).attr('href'),
         type: 'post',
         data: {action},
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
   })
})
