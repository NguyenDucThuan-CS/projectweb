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
      
      mysqli_query($con, "INSERT INTO tbl_customer(name,email,phone,address) VALUES('$name','$email','$phone','$address')");
      mysqli_query($con, "DELETE FROM tbl_cart");
      header('Location: checkout.php');
  }
?>