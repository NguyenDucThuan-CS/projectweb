<?php
$con = mysqli_connect("localhost:3307","root","","donoithat");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>

<?php
  if(isset($_POST['dangki'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $sql_insert_client = mysqli_query($con, "INSERT INTO tbl_client(client_email,client_password,username) VALUES('$email','$matkhau', '$username')");
    $count = mysqli_num_rows($sql_insert_client);
    echo "<script>alert('Sign up successfully!!')</script>";
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./assets/css/gird.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
  include_once('header.php');
  ?>
    <div class="gird wide ">
            <div  class="row container-form w-100">
                <div class="col l-3 "></div>
                <div class="col l-6 w-100 form">
                    <div class="header-form row no-gutter w-100 ">
                        <p class="w-100 text-dark">SIGN UP HERE</p>    
                    </div>
                    <div class="body-form row no-gutter w-100 text-white">
                        <div class="col l-1"></div>
                        <div class="col l-10">
                            <form action="" method = "POST">
                            <div class="row no-gutter input-form">
                                    <input type="text" class="type-input w-100 col l-9" placeholder="User name" name="name">
                                    <div class="col l-1"></div>
                                    <i class="fas fa-user col l-2 icon-input"></i>
                                </div>
                                <div class="row no-gutter input-form">
                                    <input type="text" class="type-input w-100 col l-9" placeholder="Email" name="email">
                                    <div class="col l-1"></div>
                                    <i class="fas fa-user col l-2 icon-input"></i>
                                </div>
                                <div class="row no-gutter input-form">
                                    <input type="password" class="type-input w-100 col l-9" placeholder="Password" name="matkhau">
                                    <div class="col l-1"></div>
                                    <i class="fas fa-unlock col l-2 icon-input"></i>
                                </div>
                          
                            <!-- <div class="row no-gutter container-checkbox ">
                                <input id="save-account" class="col l-1 pointer check-input" type="checkbox" value="Remember Me" >
                                <label  for="save-account" class="check-label pointer col l-4 text-white"> Remember Me </label>
                                <div class="col l-2"></div>
                                <a href="" class="col l-5 ">Forgot Password</a>
                                
                            </div> -->

                            <div class="row no-gutter">
                                <div class="col l-3"></div>
                                <div class="col l-6"><input type="submit" value="Sign up" class="btn-form w-100 pointer" name="dangki"></div>
                                <div class="col l-3"></div>
                            </div>
                            </form>
                           
                            <!-- div class="row social-list-login">
                                <label for="" class="col l-3">Or login with</label>
                                <div class="col l-1"></div>
                                <div class="col l-8">
                                    <a href=""><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in text-white"></i></a>
                                    <a href=""><i class="fab fa-pinterest-p text-white"></i></a>
                                    <a href=""><i class="fab fa-google-plus-g text-white"></i></a>
                                </div>
                            </div> -->
                        </div>
                        <div class="col l-1"></div>
                    </div>
                </div>
                <div class="col l-3 "></div>
            </div>
        </div>
    </div>
    <?php
  include_once('header.php');
  ?>
</body>
</html>