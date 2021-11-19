<?php
$con = mysqli_connect("localhost:3307","root","","donoithat");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>



<?php
 if(isset($_GET['id_decrease'])) {
     $id = $_GET['id_decrease'];
     $sql_soluong_decr = mysqli_query($con, "SELECT * FROM tbl_cart WHERE product_id = $id");
     $soluong_decr = mysqli_fetch_array($sql_soluong_decr);
     $count_dcr =  $soluong_decr['product_amount'] - 1;
     mysqli_query($con, "UPDATE tbl_cart SET product_amount = $count_dcr WHERE product_id = $id");
     header('Location: checkout.php');
 }

 if(isset($_GET['id_increase'])) {
    $id = $_GET['id_increase'];
    $sql_soluong_decr = mysqli_query($con, "SELECT * FROM tbl_cart WHERE product_id = $id");
    $soluong_decr = mysqli_fetch_array($sql_soluong_decr);
    $count_dcr =  $soluong_decr['product_amount'] + 1;
    mysqli_query($con, "UPDATE tbl_cart SET product_amount = $count_dcr WHERE product_id = $id");
    header('Location: checkout.php');
}
?>