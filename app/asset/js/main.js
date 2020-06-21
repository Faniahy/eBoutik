/**
 * Created by faniahy on 5/31/20.
 */
$(document).ready(function() {
    $('.modal').modal({
        inDuration: 400,
        outDuration: 400
    });
});

function confirmDeleteUser(id_user) {
    var href = '/app/user/deleteUser.php';
    //window.location = href;
    $.confirm({
      title: 'Confirmation!',
      content: 'Vous voulez vraiment supprimer?',
      icon: 'fa fa-warning',
      theme: 'material',
      closeIcon: true,
      animation: 'scale',
      type: 'red',
      columnClass: 'col s4 offset-s4',
      buttons: {
          valider: {
              text: 'OK',
              btnClass: 'btn-red',
              action: function () {
                  $.ajax({
                      type: 'DELETE',
                      url: href + '/?id_user='+id_user,
                      success: function (result) {
                          window.location = '/app/user/listUser.php';
                      }
                  });
              }
          },
          cancel: function () {
          },
      }
    });
}
