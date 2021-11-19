<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./assets/css/gird.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="css/style.css" />

</head>
<body >
<?php
  include_once('header.php');
  ?>
        <div class="gird wide ">
            <div  class="row container-form w-100">
                <div class="col l-2 "></div>
                <div class="col l-8 w-100 form">
                    <div class="header-form row no-gutter w-100 ">
                        <p class="w-100 text-white">SIGN UP HERE</p>    
                    </div>
                    <div class="body-form row no-gutter w-100 text-white">
                        <div class="col l-1"></div>
                        <div class="col l-10">
                            <div class="row no-gutter input-form input-signup">
                                <div class="col l-6 w-100">
                                    <input type="text" class="type-input " placeholder="Full Name">
                                    <i class="fas fa-user icon-input"></i>
                                </div>
                                <div class="col l-6 w-100 pull-right">
                                    <input type="text" class="type-input " placeholder="Phone Number">
                                    <i class="fas fa-mobile icon-input"></i>
                                </div>  
                            </div>
                            <div class="row no-gutter input-form input-signup">
                                <div class="col l-6 w-100">
                                    <input type="text" class="type-input " placeholder="Your Birthday: dd/mm/yyyy">
                                    <i class="fas fa-calendar-alt icon-input"></i>
                                </div>
                                <div class="col l-6 w-100 pull-right">
                                    <select name="Gender" id="gender" class="pointer menu-select">
                                        <option value="None" >--None--</option>
                                        <option value="F">Female</option>
                                        <option value="M">Male</option>
                                    </select>
                                    <i class="fas fa-venus-mars icon-input"></i>
                               
                                </div>  
                            </div>
                            <div class="row no-gutter input-form input-signup">
                                <div class="col l-6 w-100">
                                    <input type="password" class="type-input " placeholder="Password">
                                    <i class="fas fa-unlock icon-input"></i>
                                </div>
                                <div class="col l-6 w-100 pull-right">
                                    <input type="password" class="type-input " placeholder="Confirm Password">
                                <i class="fas fa-unlock-alt icon-input"></i>
                                </div>  
                            </div>
                            <div class="row no-gutter container-checkbox checkbox-signup ">
                                <input id="save-account" class="col l-1 pointer check-input" type="checkbox" value="Remember Me" >
                                <label  for="save-account" class="check-label pointer col l-2 text-white"> I accept the  </label>
                                <a href="" class="col l-6"> Terms of Service and Privacy Policy </a> 
                                
                            </div>

                            <div class="row no-gutter">
                                <div class="col l-3"></div>
                                <div class="col l-6"><input type="submit" value="Sign up" class="btn-form w-100 pointer"></div>
                                <div class="col l-3"></div>
                            </div>
                            <div class="row ">
                                <div class="col l-3 "></div>
                                <div class="col l-6 signup-link">
                                    <label for="" class="signup-label text-white">Already have an account?</label>
                                    <a href="./login.html" >Log in here</a>
                                </div>
                                <div class="col l-3"></div>
                            </div>
                            
                        </div>
                        <div class="col l-1"></div>
                    </div>
                </div>
                <div class="col l-2 "></div>
            </div>
        </div>
    </div>
    <?php
  include_once('header.php');
  ?>
</body>
</html>