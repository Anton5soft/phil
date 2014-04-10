$(document).ready(function(){
    $(".menu").click(function() {
        $('#cont').hide(300);
        $( "body" ).addClass( "news" );
        $( ".news" ).animate({opacity: 0.7}, 'slow', function() {
            $(this).css({'background-image': 'url(/phil/themes/phil/css/img/Backgroundnews.jpg)'})
                .animate({opacity: 1}
            );
        });
        var link = $(this).data('url');
        $.ajax({
            url: link,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                    $('#ajaxcontmenu').append(data);//Paste JSON error lang do not work and pagination too(

            }
        }).fail(function(){
            alert("Error");
        });
    });
});