(function( $ ){
         $.ajax({
           url: 'http://alltrade.kz/lessonsjs/status.php',
           dataType: 'json',
           success: function(data){
             console.log(data);
           }
         });
})( jQuery );
