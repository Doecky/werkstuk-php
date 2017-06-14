



$(document).ready( function() {
    updates('all');
    loadCat();


});

function post(id) {
    document.getElementById("id").value = id;
    document.getElementById('theForm').submit()


}

function loadCat(){

    $.getJSON("php/fetchCat.php", function(data) {

        $("#catTarget").append('<li role="presentation"  class="active"><a onclick="updates( \'all\') " >All</a></li>')
        $.each(data.result, function() {
            $("#catTarget").append('<li role="presentation"><a onclick="updates(\''+ this['NAME'] +'\')" > '+ this['NAME'] +' </a></li>');

        });
        });

}



function updates(categorie) {



    var selector = '.nav li';

    $(selector).on('click', function(){
        $(selector).removeClass('active');
        $(this).addClass('active');
    });
    $.getJSON("php/fetchProd.php", function(data) {
        $("#target").empty();


           if (categorie == 'all')
           {
               $.each(data.result, function(){
               $("#target").append('<div class=\'col-xs-6 col-sm-3 prods \' >' +
                   " <img src= " + this['PICTURE'] +" width='200' height='200' class='img-responsive'>" +
                   "<h4>"+ this['NAME'] +", €" + this['PRICE'] +"  </h4>" +
                   "<span class='text-muted'> "+ this['DESCRIPTION'] + "</span>" +
                   " <br> <button type ='button' onclick='post( " +this['ID']+")'  class = 'btn btn-default'>Details</button>"+
                   "        <button type='button'onclick='addToCart( " +this['ID']  +")' class='btn btn-default btn-sm plus'> <span class='glyphicon glyphicon-plus'></span></button></div>");

           });
           }
           else
           {
               switch (categorie)
               {
                   case 'eten':
                       $.each(data.result, function(){
                           if (this['CATEGORY'] == categorie){


                           $("#target").append('<div class=\'col-xs-6 col-sm-3 prods \' >' +
                               " <img src= " + this['PICTURE'] +" width='200' height='200' class='img-responsive'>" +
                               "<h4>"+ this['NAME'] +", €" + this['PRICE'] +"  </h4>" +
                               "<span class='text-muted'> "+ this['DESCRIPTION'] + "</span>" +
                               " <br> <button type ='button' onclick='post( " + this['ID']  +")'  class = 'btn btn-default'>Details</button>"+
                               "        <button type='button'onclick='addToCart( " + this['ID']  +")' class='btn btn-default btn-sm plus'> <span class='glyphicon glyphicon-plus'></span></button></div>");
                           }
                       });
                       break;
                   case 'drank':
                       $.each(data.result, function(){
                           if (this['CATEGORY'] == categorie){


                               $("#target").append('<div class=\'col-xs-6 col-sm-3 prods \' >' +
                                   " <img src= " + this['PICTURE'] +" width='200' height='200' class='img-responsive'>" +
                                   "<h4>"+ this['NAME'] +", €" + this['PRICE'] +"  </h4>" +
                                   "<span class='text-muted'> "+ this['DESCRIPTION'] + "</span>" +
                                   " <br> <button type ='button' onclick='post( " + this['ID']  +")'  class = 'btn btn-default'>Details</button>"+
                                   "        <button type='button'onclick='addToCart( " + this['ID']  +")' class='btn btn-default btn-sm plus'> <span class='glyphicon glyphicon-plus'></span></button></div>");
                           }
                       });
                       break;
                   case 'stoelen':
                       $.each(data.result, function(){
                           if (this['CATEGORY'] == categorie){


                               $("#target").append('<div class=\'col-xs-6 col-sm-3 prods \' >' +
                                   " <img src= " + this['PICTURE'] +" width='200' height='200' class='img-responsive'>" +
                                   "<h4>"+ this['NAME'] +", €" + this['PRICE'] +"  </h4>" +
                                   "<span class='text-muted'> "+ this['DESCRIPTION'] + "</span>" +
                                   " <br> <button type ='button' onclick='post( " + this['ID']  +")'  class = 'btn btn-default'>Details</button>"+
                                   "        <button type='button'onclick='addToCart( " + this['ID']  +")' class='btn btn-default btn-sm plus'> <span class='glyphicon glyphicon-plus'></span></button></div>");
                           }
                       });
                       break;
                   case 'lepels':
                       $.each(data.result, function(){
                           if (this['CATEGORY'] == categorie){


                               $("#target").append('<div class=\'col-xs-6 col-sm-3 prods \' >' +
                                   " <img src= " + this['PICTURE'] +" width='200' height='200' class='img-responsive'>" +
                                   "<h4>"+ this['NAME'] +", €" + this['PRICE'] +"  </h4>" +
                                   "<span class='text-muted'> "+ this['DESCRIPTION'] + "</span>" +
                                   " <br> <button type ='button' onclick='post( " + this['ID']  +")'  class = 'btn btn-default'>Details</button>"+
                                   "        <button type='button'onclick='addToCart( " + this['ID']  +")' class='btn btn-default btn-sm plus'> <span class='glyphicon glyphicon-plus'></span></button></div>");
                           }
                       });
                       break;
               }

           }








    });




}

