/**
 * Created by faniahy on 5/31/20.
 */
$(document).ready(function() {
    $('.modal').modal({
        inDuration: 400,
        outDuration: 400
    });
});

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

function confirmDeleteUser(elm,id_user) {
    var href = '/app/user/deleteUser.php';
    $.confirm({
      title: 'Confirmation!',
      content: 'Vous voulez vraiment supprimer?',
      icon: 'fa fa-warning',
      theme: 'material',
      closeIcon: true,
      animation: 'scale',
      type: 'red',
      columnClass: 'col s4 offset-s4',
      draggable: true,
      buttons: {
          valider: {
              text: 'OK',
              btnClass: 'btn-red',
              action: function () {
                  $.ajax({
                      type: 'DELETE',
                      url: href + '/?id_user='+id_user,
                      success: function (result) {
                          toastr.success('<b>L\'utilisateur a été supprimer!</b>');
                          elm.closest('tr').remove();
                      }
                  });
              }
          },
          cancel: function () {
          },
      }
    });
}
