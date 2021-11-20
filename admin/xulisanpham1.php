<?php
$con = mysqli_connect("localhost:3307","root","","donoithat");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>

<?php
    if(isset($_POST['themsanpham'])){
        $sanpham_name = $_POST['sanpham_name'];
        $sanpham_category = $_POST['sanpham_category'];
        $sanpham_amount = $_POST['sanpham_amount'];
        $sanpham_discrip = $_POST['sanpham_discrip'];
        $sanpham_image1 = $_POST['sanpham_image1'];
        $sanpham_image2 = $_POST['sanpham_image2'];
        $sanpham_image3 = $_POST['sanpham_image3'];
        $sanpham_image4 = $_POST['sanpham_image4'];
        $sanpham_price = $_POST['sanpham_price'];
        $sql_insert = mysqli_query($con, "INSERT INTO tbl_product(product_name,product_category,product_amount,product_discrip,product_image1,product_image2,product_image3,product_image4,product_price) VALUES('$sanpham_name','$sanpham_category','$sanpham_amount','$sanpham_discrip','$sanpham_image1','$sanpham_image2','$sanpham_image3','$sanpham_image4','$sanpham_price')");
        header('Location:xulisanpham.php');
    }
?>
<?php
    if(isset($_POST['suasanpham'])){
        $sanpham_name = $_POST['sanpham_name'];
        $sanpham_category = $_POST['sanpham_category'];
        $sanpham_amount = $_POST['sanpham_amount'];
        $sanpham_discrip = $_POST['sanpham_discrip'];
        $sanpham_image1 = $_POST['sanpham_image1'];
        $sanpham_image2 = $_POST['sanpham_image2'];
        $sanpham_image3 = $_POST['sanpham_image3'];
        $sanpham_image4 = $_POST['sanpham_image4'];
        $sanpham_price = $_POST['sanpham_price'];
        $sanpham_id = $_GET['sua'];
        mysqli_query($con, "UPDATE tbl_product SET product_name = '$sanpham_name' WHERE product_id = '$sanpham_id'");
        mysqli_query($con, "UPDATE tbl_product SET product_category = '$sanpham_id' WHERE product_id = '$sanpham_id'");
        mysqli_query($con, "UPDATE tbl_product SET product_amount = '$sanpham_amount' WHERE product_id = '$sanpham_id'");
        mysqli_query($con, "UPDATE tbl_product SET product_discrip = '$sanpham_discrip' WHERE product_id = '$sanpham_id' ");
        mysqli_query($con, "UPDATE tbl_product SET product_image1 = '$sanpham_image1' WHERE product_id = '$sanpham_id'");
        mysqli_query($con, "UPDATE tbl_product SET product_image2 = '$sanpham_image2' WHERE product_id = '$sanpham_id'");
        mysqli_query($con, "UPDATE tbl_product SET product_image3 = '$sanpham_image3' WHERE product_id = '$sanpham_id'");
        mysqli_query($con, "UPDATE tbl_product SET product_image4 = '$sanpham_image1' WHERE product_id = '$sanpham_id'");
        mysqli_query($con, "UPDATE tbl_product SET product_price = '$sanpham_price' WHERE product_id = '$sanpham_id'");
        header('Location:xulisanpham.php');
    }
?>

<?php
    if(isset($_GET['xoa'])){
        $product_id = $_GET['xoa'];

        $sql_delete = mysqli_query($con, "DELETE FROM tbl_product WHERE product_id =  $product_id");
        header('Location:xulisanpham.php');
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


<div class = "col-md-12" style = "width: 60%; margin: auto" >
        <?php
        if(isset($_GET['sua'])){
        $sanpham_id = $_GET['sua'];
        $sql_sanpham_edit = mysqli_query($con, "SELECT * FROM tbl_product WHERE product_id = '$sanpham_id'");
        $sanpham_edit = mysqli_fetch_array($sql_sanpham_edit);
        ?>
            <h4>Edit category</h4>
            <form action="?sua=<?php echo  $sanpham_edit['product_id']?>" method = "POST" >
                <div class = "form-group" >
                <input type = "text" name = "sanpham_name" class = "form-control" placeholder = "Enter product name" value = "<?php echo $sanpham_edit['product_name']?>"required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_category" class = "form-control" placeholder = "Enter name category" value = "<?php echo $sanpham_edit['product_category']?>"required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_amount" class = "form-control" placeholder = "Enter amount" value = "<?php echo $sanpham_edit['product_amount']?>"required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_discrip" class = "form-control" placeholder = "Enter discription" value = "<?php echo $sanpham_edit['product_discrip']?>"required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image1" class = "form-control" placeholder = "Enter image 1 name" value = "<?php echo $sanpham_edit['product_image1']?>"required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image2" class = "form-control" placeholder = "Enter image 2 name" value = "<?php echo $sanpham_edit['product_image2']?>"required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image3" class = "form-control" placeholder = "Enter image 3 name" value = "<?php echo $sanpham_edit['product_image3']?>"required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image4" class = "form-control" placeholder = "Enter image 4 name" value = "<?php echo $sanpham_edit['product_image4']?>"required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_price" class = "form-control" placeholder = "Enter price" value = "<?php echo $sanpham_edit['product_price']?>"required/>
                </div>
                <button type = "submit" class = "btn btn-success" name = "suasanpham">Edit</button>
            </form>
            <?php
            } 
            ?>

        <?php
        if(isset($_GET['themsanpham'])){
        ?>
            <h4>Add category</h4>
            <form action="" method = "POST" >
                <div class = "form-group" >
                <input type = "text" name = "sanpham_name" class = "form-control" placeholder = "Enter product name" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_category" class = "form-control" placeholder = "Enter name category" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_amount" class = "form-control" placeholder = "Enter amount" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_discrip" class = "form-control" placeholder = "Enter discription" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image1" class = "form-control" placeholder = "Enter image 1 name" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image2" class = "form-control" placeholder = "Enter image 2 name" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image3" class = "form-control" placeholder = "Enter image 3 name" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image4" class = "form-control" placeholder = "Enter image 4 name" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image3" class = "form-control" placeholder = "Enter image 3 name" required/>
                </div>

                <div class = "form-group" >
                <input type = "text" name = "sanpham_price" class = "form-control" placeholder = "Enter price" required/>
                </div>
                
                <button type = "submit" class = "btn btn-success" name = "themsanpham">Add</button>
            </form>
            <?php
            } 
            ?>
        <?php
        if(isset($_GET['xoa'])){
        ?>
            <h4>Add category</h4>
            <form action="" method = "POST" >
                <div class = "form-group" >
                <input type = "text" name = "sanpham_id" class = "form-control" placeholder = "Enter product name" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_category" class = "form-control" placeholder = "Enter name category" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_amount" class = "form-control" placeholder = "Enter amount" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_discrip" class = "form-control" placeholder = "Enter discription" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image1" class = "form-control" placeholder = "Enter image 1 name" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image2" class = "form-control" placeholder = "Enter image 2 name" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image3" class = "form-control" placeholder = "Enter image 3 name" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image4" class = "form-control" placeholder = "Enter image 4 name"required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_image3" class = "form-control" placeholder = "Enter image 3 name" required/>
                </div>
                <div class = "form-group" >
                <input type = "text" name = "sanpham_price" class = "form-control" placeholder = "Enter price" required/>
                </div>
                <button type = "submit" class = "btn btn-success" name = "themsanpham">Add</button>
            </form>
            <?php
            } 
            ?>
        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>