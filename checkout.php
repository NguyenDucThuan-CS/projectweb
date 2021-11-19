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
  $row_effect = mysqli_num_rows($sql_giohang);
  $sum = 0;
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
  <?php
  include_once('header.php');
  ?>
    
    <!-- Checkout Section -->
    <section class="checkout">
      <header id="site-header">
        <div class="container">
          <h1>Shopping cart</h1>
        </div>
      </header>
      <div class="container">
        <section id="cart"> 
          <?php while($row_giohang = mysqli_fetch_array($sql_giohang)) {
            $sum = $sum + $row_giohang['product_amount']*$row_giohang['product_price'];
            ?>
            
          <article class="product">
            <header>
              <a class="remove">
                <img src="img/<?php echo $row_giohang['product_image']?>" alt="">
                <a href = "capnhatgiohang.php?remove=<?php echo $row_giohang['product_id']?>"><h3>Remove product</h3></a>
              </a>
            </header>
            <div class="content">
              <h1><?php echo $row_giohang['product_name']?></h1>
              <?php echo $row_giohang['product_discrip']?>
            </div>
            <footer class="content">
              <a href = "capnhatgiohang.php?id_decrease=<?php echo $row_giohang['product_id']?>"><span class="qt-minus">-</span></a>
              <span class="qt"><?php echo $row_giohang['product_amount']?></span>
              <a href = "capnhatgiohang.php?id_increase=<?php echo $row_giohang['product_id']?>"><span class="qt-plus">+</span></a>
              <h2 class="full-price">
              <?php echo $row_giohang['product_price']*$row_giohang['product_amount']."€"?>
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
            <h2 class="subtotal">Subtotal: <span><?php echo $sum?></span>€</h2>
            <h3 class="tax">Taxes (5%): <span> <?php echo $sum*5/100 ?></span>€</h3>
            <h3 class="shipping">Shipping: <span><?php if($row_effect) echo "9.99€"; else echo "0"  ;?></span></h3>
          </div>
          <div class="right">
            <h1 class="total">Total: <span><?php echo $sum*105/10 + 9.99 ?></span>€</h1>
            <a class="btn" id="checkout-btn">Checkout</a>
          </div>
    
        </div>
      </footer>
    </section>
    <!-- //Checkout Section -->

  
  
    <section class="contact"></section>

    <?php
  include_once('footer.php');
  ?>

    <!-- Payment Modal -->
    <section class="payment-modal">
      <div class="payment-modal-overlay"></div>
      <div class="payment-modal-body">
        <div id="Checkout" class="inline">
            <div class="payment-modal-close">+</div>
            <h1>Information</h1>
           
            <form action = "customer.php" method = "POST">
                <div class="form-group">
                    <label for="PaymentAmount">Payment amount</label>
                    <div class="amount-placeholder">
                        <span class="total"><?php echo $sum*105/10 + 9.99 ?></span>
                        <span>€</span>
                    </div>
                </div>
                <div class="form-group">
                    <label or="name">Name</label>
                    <input name="name" class="form-control" type="text" maxlength="255" required></input>
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input name="phone" class="null card-image form-control" type="text" required></input>
                </div>
                <div class=" form-group">
                    <label for="address">Address</label>
                    <input name="address" class="form-control" type="text" placeholder="" required></input>
                </div>
                <div class=" form-group">
                    <label for="email">Email</label>
                    <input name="email" class="form-control" type="text" placeholder=""  required></input>
                </div>
                <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit" name = "themkhachhang">
                    <span class="submit-button-lock"></span>
                    <span class="align-middle">CONFIRM</span>
                </button>
            </form>
        </div>
      </div>
    </section>
    <!-- //Payment Modal -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/checkout2.js"></script>
    <script  src="js/updateProduct.js"></script>
  </body>
</html>