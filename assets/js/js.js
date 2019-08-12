$(document).ready(function () {


    $('.btnkaydet').click(function () {

        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }

        var dataString = $("#admin-form").serialize();
        $.ajax({
            type: "POST",
            url: "islemler.php",
            data: dataString,
            cache: false,
            success: function (html)
            {
                $(".uyari").removeClass("d-none");
                $(".alert-info").html(html);
                setTimeout(function(){ $(".uyari").addClass('d-none') }, 3000);
            }
        });
    });

})