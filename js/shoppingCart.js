$(document).ready( function() {
    updateCart();



});
function addToCart(id) {
    $.post( "php/addCart.php", { item: id } );
    updateCart();

}
function updateCart(){
    $.getJSON("php/addcart.php", function(data) {
        $("#shoppingcart").empty();
        teller= 0;
        $.each(data.result, function(){
            teller++;

        });
        $("#shoppingcart").append(teller)

    });


}