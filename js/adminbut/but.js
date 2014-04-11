$(document).ready(function(){
    $(".update").click(function() {
        $.ajax({
            url: 'news/create',
            type: "GET",
            dataType: "html",
            success: function(data){
                $('#ajaxcont').html(data);

            }
        }).fail(function(){
            alert("Error");
        });
    });

});