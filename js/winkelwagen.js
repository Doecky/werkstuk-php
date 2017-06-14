$(document).ready( function() {
    winkelwagen();

});

function compressArray(original) {

    var compressed = [];
    // make a copy of the input array
    var copy = original.slice(0);

    // first loop goes over every element
    for (var i = 0; i < original.length; i++) {

        var myCount = 0;
        // loop over every element in the copy and see if it's the same
        for (var w = 0; w < copy.length; w++) {
            if (original[i] == copy[w]) {
                // increase amount of times duplicate is found
                myCount++;
                // sets item to undefined
                delete copy[w];
            }
        }

        if (myCount > 0) {
            var a = new Object();
            a.value = original[i];
            a.count = myCount;
            compressed.push(a);
        }
    }

    return compressed;
};

function deleteItem(id) {

}

function winkelwagen() {


    var items = [];
    var items2 = [];


    $.getJSON("php/addCart.php", function(data) {


        items = $.map(data, function(el) { return el });

        items2= compressArray(items);
        })




    $.getJSON("php/fetchProd.php", function(data) {
        console.log(items2);
    var totaalp = 0;
    var totaalpr = 0;
    $.each(items2, function (i,li) {

        $.each(data.result, function (ii,li2) {
            if(li['value'] == li2['ID']){

                $('#target').append("<tr><td>"+li2['NAME']+"</td><td>"+li2['DESCRIPTION']+"</td><td>€ "+li2['PRICE']+"</td><td>"+li['count']+"</td><td class='remove'><span  onclick='deleteItem("+i+")' class='glyphicon glyphicon-remove'></span></td></tr>")
                totaalp += parseFloat(li2['PRICE'] * li['count'] );
                totaalpr += parseFloat(li['count']);
            }
        })

        })
        $('#target').append('<tr class="bg-info"><td><b>totaal: </td> <td> </td> <td><b> € '+Math.round(totaalp*100) /100+'</b> </td><td> <b>'+Math.round(totaalpr*100) /100+'</b></td><td> </td></tr>')






});
}
