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
$('.btn-del-confirm').click(function(){
    let url = $(this).data('url');
    if(!confirm('Bạn có chắc chắn xoá không?'))
    {
        return ;
    }
    window.location.href = url;
});