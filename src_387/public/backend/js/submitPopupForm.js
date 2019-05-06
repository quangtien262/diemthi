
$('.btn-submit').click(function () {
    $(".form-edit").ajaxForm({
        target: '.result-submit',
        success: function (data) {
            location.reload();
            $('.bs-modal-lg').modal('toggle');
        }
    }).submit();
});
