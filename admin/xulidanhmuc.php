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
    if(isset($_POST['themdanhmuc'])){
        $danhmuc = $_POST['danhmuc'];

        $sql_insert = mysqli_query($con, "INSERT INTO tbl_category(category_name) VALUES('$danhmuc')");
    }
?>
<?php
    if(isset($_POST['suadanhmuc'])){
        $danhmuc = $_POST['danhmuc'];
        $danhmuc_id = $_GET['sua'];
        $sql_edit = mysqli_query($con, "UPDATE tbl_category SET category_name = '$danhmuc' WHERE category_id = '$danhmuc_id'");
    }
?>

<?php
    if(isset($_GET['xoa'])){
        $danhmuc_id = $_GET['xoa'];

        $sql_delete = mysqli_query($con, "DELETE FROM tbl_category WHERE category_id =  $danhmuc_id");
    }
?>


<?php 
    $sql_category = mysqli_query($con, "SELECT * FROM tbl_category");
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
<p>Admin here</p>
<a href = "dashboard.php?login=dangxuat">Đăng xuất</a>
<?php
 include_once('nav.php');
?>

<div class = "container">
    <div class="row">
        <div class = "col-md-4">
        <?php
        if(isset($_GET['sua'])){
        $danhmuc_id = $_GET['sua'];
        $sql_danhmuc_edit = mysqli_query($con, "SELECT * FROM tbl_category WHERE category_id = '$danhmuc_id'");
        $danhmuc_edit = mysqli_fetch_array($sql_danhmuc_edit);
        ?>
            <h4>Edit category</h4>
            <form action="?sua=<?php echo  $danhmuc_edit['category_id']?>" method = "POST" >
                <div class = "form-group" >
                
                
                <input type = "text" name = "danhmuc" class = "form-control" placeholder = "Enter name category" value = "<?php echo $danhmuc_edit['category_name']?>"required/>
                </div>

                <button type = "submit" class = "btn btn-success" name = "suadanhmuc">Edit</button>
            </form>
            <?php
            } 
            ?>

        <?php
        if(isset($_GET['themdanhmuc'])){
        ?>
            <h4>Add category</h4>
            <form action="" method = "POST" >
                <div class = "form-group" >
                <input type = "text" name = "danhmuc" class = "form-control" placeholder = "Enter name category" required/>
                </div>
                <button type = "submit" class = "btn btn-success" name = "themdanhmuc">Add</button>
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
                <input type = "text" name = "danhmuc" class = "form-control" placeholder = "Enter name category" required/>
                </div>
                <button type = "submit" class = "btn btn-success" name = "themdanhmuc">Add</button>
            </form>
            <?php
            } 
            ?>
        </div>
            <div class = "col-md-8">
            <h4>List category</h4>
            <table class = "table table-resonsive table-bordered table-tripped">
                <tr>
                    <th>STT</th>
                    <th>Category name</th>
                    <th>Manage</th>
                </tr>

                <tbody>
                <?php 
                    $i = 1;
                    while($row_category = mysqli_fetch_array($sql_category)) {
                ?>
                   <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row_category['category_name']?></td>
                        <td><a href = "?xoa=<?php echo $row_category['category_id']?>">Delete</a></td>
                        <td><a href = "?sua=<?php echo $row_category['category_id']?>">Edit</a></td>
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