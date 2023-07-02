$('#change-password').change(function(){
    let status = !$(this).is(":checked");
    ShowChangePassword(status);
});
$('#btn-reset-edit-user').click(function(){
    ShowChangePassword(true);
});
function ShowChangePassword (status){
    $('#password').attr('readonly', status);
    $('#password-confirm').attr('readonly', status);

    $('#password').val(" ");
    $('#password-confirm').val("");
}