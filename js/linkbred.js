$(document).ready(function(){
    $(".link").click(function() {
        $.ajax({
            url: 'news',
            type: "html",
            dataType: "html",
            success: function(data){
                $('#ajaxcontmenu').html(data);

            }
        }).fail(function(){
            alert("Error");
        });
    });
});