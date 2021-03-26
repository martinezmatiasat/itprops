$(document).ready(function () {
   // capturar evento
   $('.zona').on('click', function () {
      var zona = this.attr();

      window.location = $('#search_link').attr('href');
   })

   // cargar template
   function cargarTabla() {
      $.ajax({
         url: "../../framework/controllers/ajax/barriosView.php",
         data: {
            id:
         },
         method: "GET",
         dataType: "json",
         success: function (json) {

         },
         error: function () {

         }
      })
   }

}