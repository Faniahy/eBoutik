/**
 * Created by faniahy on 5/31/20.
 */
$(document).ready(function() {
    $('.modal').modal({
        inDuration: 400,
        outDuration: 400
    });
});

function confirmDeleteUser() {
    var href = '/app/user/deleteUser.php';
    window.location = href;
}
