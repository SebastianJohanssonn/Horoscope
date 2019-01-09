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
    
    //Function to save your birthdate via AJAX using the POST method, if sucessfull, show your sign.
    function saveHoroscope(){
        var birthDate = $("#date").val();
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
                console.log(data);
            })
        }
    }
});