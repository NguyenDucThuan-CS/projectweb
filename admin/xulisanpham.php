
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
    $sql_product = mysqli_query($con, "SELECT * FROM tbl_product");
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
       
        </div>
            <div class = "col-md-12">
            <h4>List category</h4>
            <button class = "btn btn-success"><a href = "xulisanpham1.php?themsanpham">Thêm sản phẩm</a></button>
            <table class = "table table-resonsive table-bordered table-tripped">
                <tr>
                    <th>STT</th>
                    <th>Product name</th>
                    <th>Product category</th>
                    <th>Product amount</th>
                    <th>Product discription</th>
                    <th>Product image 1</th>
                    <th>Product image 2</th>
                    <th>Product image 3</th>
                    <th>Product image 4</th>
                    <th>Product price</th>
                    <th>Manage</th>
                </tr>

                <tbody>
                <?php 
                    $i = 1;
                    while($row_product = mysqli_fetch_array($sql_product)) {
                ?>
                   <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row_product['product_name']?></td>
                        <td><?php echo $row_product['product_category']?></td>
                        <td><?php echo $row_product['product_amount']?></td>
                        <td><?php echo $row_product['product_discrip']?></td>
                        <td><?php echo $row_product['product_image1']?></td>
                        <td><?php echo $row_product['product_image2']?></td>
                        <td><?php echo $row_product['product_image3']?></td>
                        <td><?php echo $row_product['product_image4']?></td>
                        <td><?php echo $row_product['product_price']?></td>
                        <td><a href = "xulisanpham1.php?xoa=<?php echo $row_product['product_id']?>">Delete</a></td>
                        <td><a href = "xulisanpham1.php?sua=<?php echo $row_product['product_id']?>">Edit</a></td>
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