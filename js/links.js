$(document).ready(function(){
    $(".menu").click(function() {
        $('#cont').hide(300);
        $( "body" ).addClass( "news" );
        $( ".news" ).animate({opacity: 0.7}, 'slow', function() {
            $(this).css({'background-image': 'url(./themes/phil/css/img/Backgroundnews.jpg)'})
                .animate({opacity: 1}
            );
        });
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