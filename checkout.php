<?php
  include_once('db/connect.php');
?>
 <?php
  if(isset($_POST['themgiohang'])) {
    $tensanpham = $_POST['tensanpham'];
    $sanpham_id = $_POST['sanpham_id'];
    $motasanpham = $_POST['motasanpham'];
    $giasanpham = $_POST['giasanpham'];
    $hinhanh = $_POST['hinhanh'];
    $soluong = $_POST['soluong'];
    $sql_select_giohang = mysqli_query($con, "SELECT * FROM tbl_cart WHERE product_id = $sanpham_id");
    $count = mysqli_num_rows($sql_select_giohang);
    if($count == 0) {
      mysqli_query($con, "INSERT INTO tbl_cart(product_name,product_id,product_image,product_discrip,product_price,product_amount) VALUES ('$tensanpham','$sanpham_id','$hinhanh','$motasanpham','$giasanpham','$soluong')");
    }  
    else {
      $row_select_cart = mysqli_fetch_array($sql_select_giohang);
      $soluong = $row_select_cart['product_amount'] + 1;
      mysqli_query($con, "UPDATE tbl_cart SET product_amount =  $soluong WHERE product_id =  $sanpham_id");
    }   
  } 
 ?>

 <?php
  $sql_giohang = mysqli_query($con, "SELECT * FROM tbl_cart");

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'> 
  </head>
  <body>
    <header class="header">
      <div class="header_left">
        <a href="index.html"><img src="img/logo.png" /></a>
      </div>
      <div class="header_right">
        <a href="index.html">HOME</a>
        <a href="about.html">ABOUT US</a>
        <a href="catalogue.html">CATALOGUE</a>
        <a href="blog.html">BLOG</a>
        <a href="contact.html">CONTACT</a>
        <a href="login.html">LOGIN</a>
        <a href = "checkout.html"><i class="fas fa-shopping-cart"></i></a>
      </div>
    </header>

    
    <!-- Checkout Section -->
    <section class="checkout">
      <header id="site-header">
        <div class="container">
          <h1>Shopping cart</h1>
        </div>
      </header>
      <div class="container">
        <section id="cart"> 
          <?php while($row_giohang = mysqli_fetch_array($sql_giohang)) {?>
          <article class="product">
            <header>
              <a class="remove">
                <img src="img/<?php echo $row_giohang['product_image']?>" alt="">
                <h3>Remove product</h3>
              </a>
            </header>
            <div class="content">
              <h1><?php echo $row_giohang['product_name']?></h1>
              <?php echo $row_giohang['product_discrip']?>
            </div>
            <footer class="content">
              <span class="qt-minus">-</span>
              <span class="qt"><?php echo $row_giohang['product_amount']?></span>
              <span class="qt-plus">+</span>
              <h2 class="full-price">
              <?php echo $row_giohang['product_price']."€"?>
              </h2>
              <h2 class="price">
              <?php echo $row_giohang['product_price']."€"?>
              </h2>
            </footer>
          </article>
            <?php
          }
            ?>
        </section>
      </div>
      <footer id="site-footer">
        <div class="container clearfix">
          <div class="left">
            <h2 class="subtotal">Subtotal: <span>163.96</span>€</h2>
            <h3 class="tax">Taxes (5%): <span>8.2</span>€</h3>
            <h3 class="shipping">Shipping: <span>9.99</span>€</h3>
          </div>
          <div class="right">
            <h1 class="total">Total: <span>182.15</span>€</h1>
            <a class="btn" id="checkout-btn">Checkout</a>
          </div>
    
        </div>
      </footer>
    </section>
    <!-- //Checkout Section -->

  
  
    <section class="contact"></section>

    <footer class="footer">
      <div class="contain">
        <div class="footer_left">
          
          <i class="fa fa-home _home">
          </i>
          <div class = "_text">
          <p>28 Jackson Blvd Ste 1020</p>
          <p>Chicago</p>
          <p>IL 60604-2340</p>
          </div>
        </div>
        <div class="footer_right">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-google-plus-square"></i>
        </div>
      </div>
    </footer>

    <!-- Payment Modal -->
    <section class="payment-modal">
      <div class="payment-modal-overlay"></div>
      <div class="payment-modal-body">
        <div id="Checkout" class="inline">
            <div class="payment-modal-close">+</div>
            <h1>Pay Invoice</h1>
            <div class="card-row">
                <span class="visa"></span>
                <span class="mastercard"></span>
                <span class="amex"></span>
                <span class="discover"></span>
            </div>
            <form>
                <div class="form-group">
                    <label for="PaymentAmount">Payment amount</label>
                    <div class="amount-placeholder">
                        <span class="total">182.15</span>
                        <span>€</span>
                    </div>
                </div>
                <div class="form-group">
                    <label or="NameOnCard">Name on card</label>
                    <input id="NameOnCard" class="form-control" type="text" maxlength="255"></input>
                </div>
                <div class="form-group">
                    <label for="CreditCardNumber">Card number</label>
                    <input id="CreditCardNumber" class="null card-image form-control" type="text"></input>
                </div>
                <div class="expiry-date-group form-group">
                    <label for="ExpiryDate">Expiry date</label>
                    <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7"></input>
                </div>
                <div class="security-code-group form-group">
                    <label for="SecurityCode">Security code</label>
                    <div class="input-container" >
                        <input id="SecurityCode" class="form-control" type="text" ></input>
                        <i id="cvc" class="fa fa-question-circle"></i>
                    </div>
                    <div class="cvc-preview-container two-card hide">
                        <div class="amex-cvc-preview"></div>
                        <div class="visa-mc-dis-cvc-preview"></div>
                    </div>
                </div>
                <div class="zip-code-group form-group">
                    <label for="ZIPCode">ZIP/Postal code</label>
                    <div class="input-container">
                        <input id="ZIPCode" class="form-control" type="text" maxlength="10"></input>
                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
                    </div>
                </div>
                <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">
                    <span class="submit-button-lock"></span>
                    <span class="align-middle">Pay €<span class="total">182.15</span></span>
                </button>
            </form>
        </div>
      </div>
    </section>
    <!-- //Payment Modal -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/checkout1.js"></script>
  </body>
</html>