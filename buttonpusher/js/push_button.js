/**
 * Created by albertosalazarpalomo on 23/09/15.
 */

$( document ).ready(function() {

    $( "#pushbutton" ).click(function () {
        $.ajax({
            url: "push_button.php",
            beforeSend: function(){
                $( "#loading" ).show();
                $( ".buttonAlert" ).hide();

                $( '#pushbutton' ).addClass( 'disabled' ).prop( 'disabled', true);
            },
            success: function (result) {
                if (result == "OK") {
                    $( "#buttonOK" ).show( "fast" );
                } else {
                    $( "#buttonError" ).show( "fast" );
                }
            },
            error: function (result) {
                $( "#buttonError" ).show( "fast" );
            },
            complete: function(){
                $( "#loading" ).hide();
                $( '#pushbutton').removeClass( 'disabled' ).prop( 'disabled', false);
            }
        });
    });

});
