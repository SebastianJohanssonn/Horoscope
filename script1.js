$(document).ready(function(){
    
    function showHoroscope(){
        $.ajax(
            {
                url: "./viewHoroscope.php",
                method: 'GET',
                success: function(data){
                    $('.result').html(data);
                }
            }
        );
    }
        
    showHoroscope();

    $("#save").on("click", function(){ saveHoroscope(); });
    
    //Function to save your birthdate via AJAX using the POST method, if successfull, show your sign.
    function saveHoroscope(){
        var birthDate = $("#date").val();
            
        $.ajax(
            {
                url: './addHoroscope.php',
                method: 'POST',
                data: {
                    birthDate: birthDate
                },
                success: function(data){
                    showHoroscope();
                }
            }
        );
    }    

    $("#delete").on("click", function(){ deleteHoroscope(); });

    //Function that makes you delete the current horoscope using the DELETE method.
    function deleteHoroscope(){
        $.ajax(
            {
                url: "./deleteHoroscope.php",
                method: 'DELETE',
                success: function(data){
                    $('.result').html(data);

                }
            }
        );
    }

    $("#update").on("click", function(){ updateHoroscope(); });

    //Function that updates the current horoscope to a new one.
    function updateHoroscope(){
        var birthDate = $("#date").val();
            $.ajax(
                {
                    url: "./updateHoroscope.php",
                    method: "PUT",
                    data: {
                        birthDate: birthDate
                    },
                    success: function(data){
                        showHoroscope();
                    }
                }
            );
        }
});