<?php
    session_start();
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
 if(isset($_POST['dangnhap'])) {
     $taikhoan = $_POST['taikhoan'];
     $matkhau = md5($_POST['matkhau']);
     $sql_select_admin  = mysqli_query($con, "SELECT * FROM tbl_admin WHERE email = '$taikhoan' AND password = '$matkhau'");
     $count = mysqli_num_rows($sql_select_admin);
     $row_dangnhap = mysqli_fetch_array($sql_select_admin);
     if($count>0) {
         $_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
         $_SESSION['admin_id'] = $row_dangnhap['admin_id'];
        header('Location: dashboard.php');
     }else {
         echo "<p>Tai khoan hoac mat khau sai</p>";
     }
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
    <h5 align = "center">LOGIN FOR ADMIN</h5>
    <form action="" method = "POST" class = "container" style = "width: 50%;" >
    <div class = "form-group" >
            <label>Account</label>
            <input type = "text" name = "taikhoan" class = "form-control" placeholder = "Enter email" required/>
    </div>

    <div class = "form-group" >
            <label>Password</label>
            <input type = "password" name = "matkhau" class = "form-control" placeholder = "Enter password" required/>
    </div>
    <button type = "submit" class = "btn btn-success" name = "dangnhap">Login</button>
</form>

        <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>