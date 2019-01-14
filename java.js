$(document).ready(function(){

    function showHoroscope(){
        $.ajax(
            {
            method: 'GET',
            url: "php/viewHoroscope.php",
            }
        )
        .done(function(data){
            $('.result').html(data);
        })
    };
    showHoroscope();
    

    $("#save").on("click", function(){ saveHoroscope(); });
    var birthDate = $("#date").val();
    
    //Function to save your birthdate via AJAX using the POST method, if sucessfull, show your sign.
    function saveHoroscope(){
        if (birthDate !== ""){
            $.ajax(
                {
                    method: 'POST',
                    url: 'php/addHoroscope.php',
                    data: {
                        birthDate: birthDate
                    }
                }
            )
            .done(function(data){
                showHoroscope();
                
            });
        }
    }
    

    $("#delete").on("click", function(){ deleteHoroscope(); });

    //Function that makes you delete the current horoscope using the DELETE method.
    function deleteHoroscope(){
        $.ajax(
            {
                method: 'DELETE',
                url: "php/deleteHoroscope.php"
            }
        )
        .done(function(data){
            showHoroscope();
        });
        
    }
});