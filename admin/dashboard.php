<?php
    session_start();
?>


<?php
 if(!isset($_SESSION['dangnhap'])){
     header('Location: index.php');
 } 
?>
<?php 
    if(isset($_GET['login'])){
        if($_GET['login'] == 'dangxuat') {
            unset($_SESSION['dangnhap']);
            header('Location: index.php');
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
<p>Admin here</p>
<a href = "?login=dangxuat">Đăng xuất</a>
<?php
 include_once('nav.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>