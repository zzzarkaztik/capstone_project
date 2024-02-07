setTimeout(hide_notif, 4000);

function hide_notif() {
    $(document).ready(function () {
        $("#notif").slideUp();
        $(".notif").slideUp();
    });
}
