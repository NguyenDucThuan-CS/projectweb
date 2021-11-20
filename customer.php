<?php
$con = mysqli_connect("localhost:3307","root","","donoithat");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>



<?php
  if(isset($_POST['themkhachhang'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      
      $sql_khachhang = mysqli_query($con, "INSERT INTO tbl_customer(name,email,phone,address) VALUES('$name','$email','$phone','$address')");
      if($sql_khachhang) {
        $sql_select_khachhang = mysqli_query($con, "SELECT * FROM tbl_customer ORDER BY customer_id DESC LIMIT 1");
        $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
        $id_khachhang = $row_khachhang['customer_id'];
        $sql_giohang_khachhang =  mysqli_query($con, "SELECT * FROM tbl_cart");
        $t = time();
        $d = date("Y-m-d");
        $mahang = $t + $d;
        while($row_giohang_khachhang = mysqli_fetch_array($sql_giohang_khachhang)) {
          $sanpham_id = $row_giohang_khachhang['product_id'];
          $sanpham_soluong = $row_giohang_khachhang['product_amount'];
          mysqli_query($con,"INSERT INTO tbl_donhang(sanpham_id,soluong,mahang,khachhang_id) VALUES('$sanpham_id','$sanpham_soluong','$mahang','$id_khachhang')");
        }
      }
      mysqli_query($con, "DELETE FROM tbl_cart");
      header('Location: checkout.php');
  }
?>