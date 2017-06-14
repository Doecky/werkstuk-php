/**
 * Created by Wart on 18/04/2017.
 */
$(document).ready( function() {

    loadPayment();


});
function loadPayment() {

    $.getJSON("php/fetchPayment.php", function(data) {


        $.each(data.result, function() {
            $("#paymentSelect").append( '<option value= ' + this['NAME'] + '> ' + this['NAME'] + ' </option>')

        });
    });

}