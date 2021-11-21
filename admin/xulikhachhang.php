
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
    $sql_customer = mysqli_query($con, "SELECT * FROM tbl_customer");
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
            <h4>List customer</h4>
            
            <table class = "table table-resonsive table-bordered table-tripped">
                <tr>
                    <th>No</th>
                    <th>Customer name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Manage</th>
                </tr>

                <tbody>
                <?php 
                    $i = 1;
                    while($row_customer = mysqli_fetch_array($sql_customer)) {
                ?>
                   <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row_customer['name']?></td>
                        <td><?php echo $row_customer['phone']?></td>
                        <td><?php echo $row_customer['address']?></td>
                        <td><?php echo $row_customer['email']?></td>
                        <td><a href = "xulikhachhang1.php?khachhang_id=<?php echo $row_customer['customer_id']?>?>">View transaction</a></td>
                       
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