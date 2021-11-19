<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./assets/css/gird.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body id="container-contact"> 
    <div class="gird wide">
        <!--Header Contact-->
        <?php
  include_once('header.php');
  ?>
        <!--Content Contact-->
        <div id="content-contact">
            <!--Contact Map-->
            <div class="row ">
                <!--Content Heading-->
                <div class="row w-100">
                    <div class="col l-1"></div>
                    <div class="heading col l-10 w-100"><h1>MAP</h1></div>
                    <div class="col l-1"></div>
                </div>
                <!--Content Map-->
                <div class="row w-100">
                    <div class="col l-1"></div>
                    <iframe class="google-map col l-10 "
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193747.6573484943!2d-74.08508233527728!3d40.645159362544774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24416947c2109%3A0x82765c7404007886!2sBrooklyn%2C%20NY!5e0!3m2!1sen!2sus!4v1632845649580!5m2!1sen!2sus"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    <div class="col l-1"></div>
                </div>
            </div>
            <!--Contact Form-->
            <div class="contact-form row">
                <div class="row w-100">
                    <div class="col l-1"></div>
                    <div class="heading col l-10 w-100"><h1>CONTACT US</h1></div>
                    <div class="col l-1"></div>
                </div>
                <div class="content-form row w-100">
                    <form class="w-100" action="">
                        <div class="row">
                            <div class="col l-6 w-100">
                                <input type="text" placeholder="Full Name" required class="input-form-contact ">
                            </div>
                            <div class="col l-6 w-100">
                                <input type="text" placeholder="Phone Number" required class="input-form-contact ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col l-12 w-100">
                                <input type="email" placeholder="Email" required class="input-form-contact ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col l-12 w-100">
                                <input type="text" placeholder="Message" required class="input-form-contact ">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col l-5"></div>
                            <div class="col l-2"><input type="submit" value="Send Message" class="btn-input pointer "></div>      
                            <div class="col l-5"></div>
                        </div>
                        
                    </form>
                </div>
            </div>
            <!--Contact Info-->
            <div class="contact-info row">
                <div class="row w-100">
                    <div class="col l-1"></div>
                    <div class="heading col l-10 w-100"><h1>CONTACT INFORMATION</h1></div>
                    <div class="col l-1"></div>
                </div>
                <div class="content-info row w-100">
                    <div class="col l-1"></div>
                    <div class="col l-5 company-info ">
                        <h3 class="p-8">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h3>
                        <p class="p-8">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia</p>  
                    </div>
                    <div class="col l-5 company-info ">
                        <p class="p-8">The Company Name Inc.
                            9870 St Vincent Place,
                            Glasgow, DC 45 Fr 45.</p> 
                        <p class="p-8 w-100"><i class="fas fa-phone-alt "> Telephone: +1 800 603 6035 </i></p>
                        <p class="p-8 w-100"><i class="fas fa-fax "> Fax: +1 800 603 6035</i></p>
                        <p class="p-8 w-100"><i class="fas fa-envelope "> Mail: +1 800 603 6035</i></p>  
                    </div>
                    <div class="col l-1"></div>
                </div>
            </div>
            <!--Footer Navigation-->
            <?php
  include_once('header.php');
  ?>
        </div>

        
    </div>
</body>
</html>