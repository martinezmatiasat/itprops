$(document).ready(function () {

   // Notification sidebar toggle & close button click events  [Remove code from production]
   $('#calendario-sidebar-toggle').on('click', function (e) {
      $('#calendario-sidebar').toggleClass('open');
      $(".main-content").css("cursor", "pointer");
   });
   $('#calendario-sidebar-close').on('click', function () {
      $('#calendario-sidebar').removeClass('open');
      $(".main-content").css("cursor", "auto");
   });

   // Perfect Scrollbar for the nav tab content
   if ($('#calendario-sidebar-content').length > 0) {
      var notification_sidebar_content = new PerfectScrollbar('#calendario-tab-content', {
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
