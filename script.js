$(document).ready(function(){

    function showHoroscope(){
        $.ajax({
            method: 'GET',
            url: "php/viewHoroscope.php",
        })
        .done(function(data){
            $('.result').html(data);
        })
    };
    showHoroscope();
});