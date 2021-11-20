
<?php
$con = mysqli_connect("localhost:3307","root","","donoithat");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>



<?php
    if(isset($_GET['detail'])){
        $donhang_mahang = $_GET['detail'];
        $sql_donhang = mysqli_query($con, "SELECT * FROM tbl_donhang, tbl_product, tbl_customer WHERE tbl_donhang.sanpham_id = tbl_product.product_id AND tbl_donhang.khachhang_id = tbl_customer.customer_id AND tbl_donhang.mahang = '$donhang_mahang' ");
    }
?>

<?php
    if(isset($_GET['process'])){
        $donhang_mahang_process = $_GET['process'];
        $sql_donhang_process = mysqli_query($con,"UPDATE tbl_donhang SET status = 1 WHERE mahang = '$donhang_mahang_process' ");
        header('Location: xulidonhang.php');
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
    <div style ="width: 60%;margin-top: 20px;margin: auto">
        <table class = "table table-resonsive table-bordered table-tripped">
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Product</th>
                <th>Amount</th>
                <th>Price</th>

                <th>Date</th>
                <th>Code</th>
                <th>Status</th>

         
            </tr>
            <tbody>
            <?php 
                $i = 1;
                $sum = 0;
                
                while($row_donhang = mysqli_fetch_array($sql_donhang)) {
            ?>
                <tr> 
                    <td><?php echo $i?></td>
                    <td><?php echo $row_donhang['name']?></td>

                    <td><?php echo $row_donhang['product_name']?></td>
                    <td><?php echo $row_donhang['soluong']?></td>
                    <td><?php echo $row_donhang['product_price']."$"?></td>
                    <td><?php echo $row_donhang['ngaythang']?></td>
                    <td><?php echo $row_donhang['mahang']?></td>
                    <td><?php if($row_donhang['status'] == 0) echo "Not processed";else echo "processed";?></td>
                </tr>
            <?php 
            $sum =$sum +  $row_donhang['soluong']*$row_donhang['product_price'];
             $i++;

                }
            ?>

            <p>Total amount: <?php echo $sum*1.05+9.99."$"?></p>
            </tbody>
        </table>
        <button class = "btn btn-success"><a href = "?process=<?php echo $donhang_mahang?>">Process</a></button>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>