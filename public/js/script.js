$(document).ready(function () {

    $(".confirm-delete").click(function (e) {
        var info = $(this).data('info');
        if (confirm("Вы действительно хотите удалить: " + info)) {
            return true;
        }
        return false;
    });

    $('.datepicker').datepicker({
        language: "ru",
        format: 'yyyy-mm-dd',
        todayHighlight: true
    });
});
