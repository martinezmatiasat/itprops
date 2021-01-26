$(document).ready(function () {

   // variable declaration
   var usersTable;
   var usersDataArray = [];
   // datatable initialization
   if ($(".list-datatable").length > 0) {
      usersTable = $(".list-datatable").DataTable({
         responsive: false,
         'columnDefs': [{
            "orderable": false,
            //"targets": [7]
         }]
      });
   };

   // page users list verified filter
   $(".list-verified").on("change", function () {
      var usersVerifiedSelect = $(".list-verified").val();
      usersTable.search(usersVerifiedSelect).draw();
   });
   // page users list role filter
   $(".list-role").on("change", function () {
      var usersRoleSelect = $(".list-role").val();
      // console.log(usersRoleSelect);
      usersTable.search(usersRoleSelect).draw();
   });
   // page users list status filter
   $(".list-status").on("change", function () {
      var usersStatusSelect = $(".list-status").val();
      // console.log(usersStatusSelect);
      usersTable.search(usersStatusSelect).draw();
   });
   // page users list clear filter
   $(".list-clear").on("click", function () {
      usersTable.search("").draw();
   });

});

