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
    if(isset($_GET['xoa'])){
        $donhang_mahang = $_GET['xoa'];
        $sql_delete_donhang = mysqli_query($con, "DELETE FROM tbl_donhang WHERE mahang = $donhang_mahang");
    }
?>
<?php
    $sql_donhang = mysqli_query($con, "SELECT DISTINCT mahang,name,ngaythang,status FROM tbl_donhang, tbl_product, tbl_customer WHERE tbl_donhang.sanpham_id = tbl_product.product_id AND tbl_donhang.khachhang_id = tbl_customer.customer_id");
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
    <div style ="width: 60%;margin-top: 20px;margin: auto">
        <table class = "table table-resonsive table-bordered table-tripped">
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Code</th>
                <th>Status</th>
                
                <th>Manage</th>
            </tr>
            <tbody>
            <?php 
                $i = 1;
                while($row_donhang = mysqli_fetch_array($sql_donhang)) {
            ?>
                <tr> 
                    <td><?php echo $i?></td>
                    <td><?php echo $row_donhang['name']?></td>
                    <td><?php echo $row_donhang['ngaythang']?></td>
                    <td><?php echo $row_donhang['mahang']?></td>
                    <td><?php if($row_donhang['status'] == 0) echo "Not processed";else echo "processed";?></td>
                    
                    <td><a href = "?xoa=<?php echo $row_donhang['mahang']?>">Delete</a></td>
                    <td><a href = "chitietdonhang.php?detail=<?php echo $row_donhang['mahang']?>">Detail</a></td>

                </tr>
            <?php 
             $i++;
                }
            ?>
            </tbody>
            

        </table>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>