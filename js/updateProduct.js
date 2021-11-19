$(".qt-minus").click(function(){
    var x = $(".qt-minus");
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "capnhatgiohang.php?id="+x, false);
    xmlhttp.send(null);
  /*   $("#list_item").html(xmlhttp.responseText); */
})




