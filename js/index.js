/**
 * Created by Wart on 19/04/2017.
 */

$(document).ready( function() {
    updates();



});
//code voor te shuffelen
function shuffle(sourceArray) {
    for (var i = 0; i < sourceArray.length - 1; i++) {
        var j = i + Math.floor(Math.random() * (sourceArray.length - i));

        var temp = sourceArray[j];
        sourceArray[j] = sourceArray[i];
        sourceArray[i] = temp;
    }
    return sourceArray;
}

function updates() {
// laad nieuwe producten
    $.getJSON("php/fetchProd.php", function(data) {
        var counter = 0;
        console.log(data.result.length);
        $.each(  data.result, function(){

            if(counter >( data.result.length - 5)){

                $("#target").append('<div class=\'col-xs-6 col-sm-3 prods \' >' +
                    " <img src= " + this['PICTURE'] +" width='200' height='200' class='img-responsive'>" +
                    "<h4>"+ this['NAME'] +", €" + this['PRICE'] +"  </h4>" +
                    "<span class='text-muted'> "+ this['DESCRIPTION'] + "</span>" +
                    " <br> <button type ='button' onclick='post( " +this['ID']+")'  class = 'btn btn-default'>Details</button>"+
                    "        <button type='button'onclick='addToCart( " +this['ID']  +")' class='btn btn-default btn-sm plus'> <span class='glyphicon glyphicon-plus'></span></button></div>");

            }
            counter++;
    });
    });



//laad uitgelichte
    $.getJSON("php/fetchUitgelicht.php", function(data) {
        //randomize
        var shuffledJson = shuffle(data.result)
        var counter = 0;
        $.each(  data.result, function(){

            if(counter >( data.result.length - 5)){

                $("#target2").append('<div class=\'col-xs-6 col-sm-3 prods \' >' +
                    " <img src= " + this['PICTURE'] +" width='200' height='200' class='img-responsive'>" +
                    "<h4>"+ this['NAME'] +", €" + this['PRICE'] +"  </h4>" +
                    "<span class='text-muted'> "+ this['DESCRIPTION'] + "</span>" +
                    " <br> <button type ='button' onclick='post( " +this['ID']+")'  class = 'btn btn-default'>Details</button>"+
                    "        <button type='button'onclick='addToCart( " +this['ID']  +")' class='btn btn-default btn-sm plus'> <span class='glyphicon glyphicon-plus'></span></button></div>");

            }
            counter++;
        });

    });



}