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
    $.ajax({
        type: 'DELETE',
        url: href + '/?id_user='+id_user,
        success: function (result) {
            window.location = '/app/user/listUser.php';
        }
    });
}
