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
                        <p class="w-100 text-dark">LOGIN HERE</p>    
                    </div>
                    <div class="body-form row no-gutter w-100 text-white">
                        <div class="col l-1"></div>
                        <div class="col l-10">
                            <div class="row no-gutter input-form">
                                <input type="text" class="type-input w-100 col l-9" placeholder="User Name">
                                <div class="col l-1"></div>
                                <i class="fas fa-user col l-2 icon-input"></i>
                            </div>
                            <div class="row no-gutter input-form">
                                <input type="password" class="type-input w-100 col l-9" placeholder="Password">
                                <div class="col l-1"></div>
                                <i class="fas fa-unlock col l-2 icon-input"></i>
                            </div>
                            <div class="row no-gutter container-checkbox ">
                                <input id="save-account" class="col l-1 pointer check-input" type="checkbox" value="Remember Me" >
                                <label  for="save-account" class="check-label pointer col l-4 text-white"> Remember Me </label>
                                <div class="col l-2"></div>
                                <a href="" class="col l-5 ">Forgot Password</a>
                                
                            </div>

                            <div class="row no-gutter">
                                <div class="col l-3"></div>
                                <div class="col l-6"><input type="submit" value="Log In" class="btn-form w-100 pointer"></div>
                                <div class="col l-3"></div>
                            </div>
                            <div class="row ">
                                <div class="col l-3 "></div>
                                <div class="col l-6 signup-link">
                                    <label for="" class="signup-label text-white">New user?</label>
                                    <a href="./signup.html" >Sign up here</a>
                                </div>
                                <div class="col l-3"></div>
                            </div>
                            <div class="row social-list-login">
                                <label for="" class="col l-3">Or login with</label>
                                <div class="col l-1"></div>
                                <div class="col l-8">
                                    <a href=""><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in text-white"></i></a>
                                    <a href=""><i class="fab fa-pinterest-p text-white"></i></a>
                                    <a href=""><i class="fab fa-google-plus-g text-white"></i></a>
                                </div>
                            </div>
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