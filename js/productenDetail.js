/**
 * Created by Wart on 08/04/2017.
 */

$(document).ready( function() {

    loadProd()
});

function submitRating(id, rating) {
    $.post( "php/submitRating.php", { id: id, rating: rating }, function( data ) {
        console.log(data);
    } );
    document.getElementById("rating-input-1-5").disabled = true;
    document.getElementById("rating-input-1-4").disabled = true;
    document.getElementById("rating-input-1-3").disabled = true;
    document.getElementById("rating-input-1-2").disabled = true;
    document.getElementById("rating-input-1-1").disabled = true;


}

function loadRating(id) {
    console.log(id)
    $.getJSON("php/fetchRating.php", function(data) {
        var array = new Array;
        var sum;
        var avg;
        $.each(data.result, function() {

                if(id == this['ID']){
                    array.push(parseInt(this['RATING']))

                }



        });
        console.log(array);
        sum = array.reduce(function (a,b) {return a+b;});
        console.log(sum)
        avg   = sum / array.length;

        $("#ratingTarget").append((Math.round(avg * 2) / 2).toFixed(1) + '/5');
    });

}


function loadProd() {
    var url = document.URL;
    var id = url.substring(url.lastIndexOf('=') + 1);


    $.getJSON("php/fetchProd.php", function(data) {
        $("#target").empty();

        $.each(data.result, function(){
        if ( this['ID']== id)
        {

                $("#target").append('<div class="product col-md-4 service-image-left">' +
                   ' <img id="item-display" src="'+this['PICTURE']+'" alt=""></img>' +
           '</div>'+
            '<div class="col-md-8">'+
            '<div class="product-title" id="title">'+this['NAME']+'</div>'+
            '<div class="product-desc" id="desc">'+this['DESCRIPTION']+'</div>'+
            '<span class="rating">'+
            '<input type="radio" class="rating-input" id="rating-input-1-5" onclick="submitRating('+ this['ID'] +', 5)" name="rating-input-1">'+
            '<label for="rating-input-1-5" class="rating-star"></label>'+
            '<input type="radio" class="rating-input" id="rating-input-1-4" onclick="submitRating('+ this['ID'] +', 4)" name="rating-input-1">'+
            '<label for="rating-input-1-4" class="rating-star"></label>'+
            '<input type="radio" class="rating-input" id="rating-input-1-3" onclick="submitRating('+ this['ID'] +', 3)" name="rating-input-1">'+
            '<label for="rating-input-1-3" class="rating-star"></label>'+
            '<input type="radio" class="rating-input" id="rating-input-1-2 " onclick="submitRating('+ this['ID'] +', 2)" name="rating-input-1">'+
            '<label for="rating-input-1-2" class="rating-star"></label>'+
            '<input type="radio" class="rating-input" id="rating-input-1-1" onclick="submitRating('+ this['ID'] +', 1)" name="rating-input-1">'+
            '<label for="rating-input-1-1" class="rating-star"></label>'+
            '</span>'+
                        ' <br/><span id="ratingTarget"></span>'+
            '<hr>'+
            '<div class="product-price" id="price">'+this['PRICE']+'</div>'+
            '<hr>'+
            '<div class="btn-group cart">'+
            '<button type="button" onclick="addToCart('+this['ID']+')" class="btn btn-success">Add to cart</button>'+
            '</div></div>')



        }
        });
});
    loadRating(id);
}
