$(document).ready(function(){
    $(".adminpanel").click(function() {
        var link = $(this).data('url');
        $.ajax({
            url: link,
            type: "GET",
            dataType: "html",
            async:false,
            success: function(data){
                $('.ajaxcont').html(data);
            }
        }).fail(function(){
            alert("Error");
        });
    });
});