$("#filter1").change(function(){
    var y = $("#filter1").val();
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "xuliProduct2.php?product_price="+y, false);
    xmlhttp.send(null);
    $("#list_item").html(xmlhttp.responseText);
})