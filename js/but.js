$(document).ready(function(){
    $(".myButton").click(function() {
        var link = $(this).data('url');
        $.ajax({
            url: link,
            type: "POST",
            dataType: "html",
            success: function(data){
                $('#ajaxcont').html(data);

            }
        }).fail(function(){
            alert("Error");
        });
    });

});