$(document).ready(function () {

   // Notification sidebar toggle & close button click events  [Remove code from production]
   $('#consultas-sidebar-toggle').on('click', function (e) {
      $('#consultas-sidebar').toggleClass('open');
      $(".main-content").css("cursor", "pointer");
   });
   $('#consultas-sidebar-close').on('click', function () {
      $('#consultas-sidebar').removeClass('open');
      $(".main-content").css("cursor", "auto");
   });

   // Perfect Scrollbar for the nav tab content
   if ($('#consultas-sidebar-content').length > 0) {
      var notification_sidebar_content = new PerfectScrollbar('#consultas-tab-content', {
         wheelPropagation: false
      });
   }

   // Click on main-content closes the notification drawer and ends pointer cursor
   /*
   $(".main-content").on("click", function () {
      if ($(".notification-sidebar.open").length) {
         $('.notification-sidebar').removeClass('open');
         $(".main-content").css("cursor", "auto");
      }
   })
   */

});
