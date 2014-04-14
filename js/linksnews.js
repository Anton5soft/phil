$(document).ready(function(){
    $(".yourll").click(function() {
        var link = $(this).data('url');
        $.ajax({
            url: link,
            type: "GET",
            dataType: "html",
            async: false,
            success: function(data){
                    $('#ajaxcontmenu').html(data);

            }
        }).fail(function(){
            alert("Error");
        });
    });
});