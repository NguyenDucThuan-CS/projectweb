
<?php
    session_start();
?>
<?php
 if(!isset($_SESSION['dangnhap'])){
     header('Location: index.php');
 } 
?>

<?php
$con = mysqli_connect("localhost:3307","root","","donoithat");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>

<?php
    if(isset($_GET['khachhang_id'])){
        $khachhang_id = $_GET['khachhang_id'];
        $sql_giaodich = mysqli_query($con, "SELECT * FROM tbl_donhang,tbl_product,tbl_customer WHERE tbl_donhang.khachhang_id = tbl_customer.customer_id AND tbl_donhang.sanpham_id = tbl_product.product_id AND khachhang_id = '$khachhang_id'");

    }
?>
 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php
 include_once('nav.php');
?>

<div>
    <div class = "container" >
       
        <div>
            <div class = "col-md-12">
            <h4>Deatail transaction</h4>
            
            <table class = "table table-resonsive table-bordered table-tripped">
                <tr>
                    <th>No</th>
                    <th>Customer Name</th>
                    <th>Code</th>
                    <th>Product name</th>
                    <th>Date</th>
                  
                </tr>

                <tbody>
                <?php 
                    $i = 1;
                    while($row_giaodich = mysqli_fetch_array($sql_giaodich)) {
                ?>
                   <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row_giaodich['name']?></td>
                        <td><?php echo $row_giaodich['mahang']?></td>
                        <td><?php echo $row_giaodich['product_name']?></td>
                        <td><?php echo $row_giaodich['ngaythang']?></td>
                    </tr>
                <?php
                    $i++;
                    } 
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>