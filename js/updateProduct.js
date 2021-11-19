$("#filter").change(function(){
    var x = $("#filter").val();
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "xuliProduct.php?product_category="+x, false);
    xmlhttp.send(null);
    $("#list_item").html(xmlhttp.responseText);
})




