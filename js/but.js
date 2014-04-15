$(document).ready(function(){
    $(".myButton").click(function() {
        var link = $(this).data('url');
        $.ajax({
            url: link,
            type: "POST",
            success: function(data){
                $('.ajaxcont').html(data);
alert('Your image was uploaded');
            }
        }).fail(function(){
            alert("Error");
        });
    });

});