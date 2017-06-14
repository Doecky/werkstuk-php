/**
 * Created by Wart on 15/04/2017.
 */



    $.getJSON("php/fetchCat.php", function(data) {


        $.each(data.result, function() {
            $("#categories").append('<option value=\''+ this['NAME'] +'\' >');

        });
        });

