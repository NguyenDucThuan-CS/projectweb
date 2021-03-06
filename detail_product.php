<?php
  include_once('db/connect.php');
?>

<?php
  if(isset($_GET['product_id'])) {
    $id = $_GET['product_id'];
    $sql_product = mysqli_query($con, "SELECT * FROM tbl_product WHERE product_id = $id");
    $product = mysqli_fetch_array($sql_product);
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <link rel="stylesheet" href="css/style.css" />
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
<div class = "catalogue_title">
    <div class = "_contain">
        <div class = "symbol"><i class="fa fa-shopping-cart"></i></i></div>
        <h1>Product Detail</h1>
    </div>
</div>
<div class="detail_product" style = "width:60%;height: 250px;margin:auto">
  <div class="_contain">
    <div class="image">
      <img src = "img/<?php echo $product['product_image1']?>" id="img-large"/>
    </div>
    <div class="slider">
      <div class="sm-img-wrapper">
        <a onclick = "changImg('image2')"><img id = "image2" src="img/<?php echo $product['product_image2']?>" alt="Product detail"></a>
      </div>
      <div class="sm-img-wrapper">
        <a onclick = "changImg('image3')" ><img id = "image3" src="img/<?php echo $product['product_image3']?>" alt="Product detail"></a>
      </div>
      <div class="sm-img-wrapper">
        <a onclick = "changImg('image4')" ><img id = "image4" src="img/<?php echo $product['product_image4']?>" alt="Product detail"></a>
      </div>
    </div>
    <div class="content">
      <div class = "content_top">
        <p><span>Product name:</span> <?php echo $product['product_name']?></p>
        <p><span>Price:</span> <?php echo $product['product_price']."$"?></p>
        <form action = "checkout.php" method = "POST">
          <input type = "hidden" name = "tensanpham" value = "<?php echo $product['product_name'] ?>"/>
          <input type = "hidden" name = "sanpham_id" value = "<?php echo $product['product_id'] ?>"/>
          <input type = "hidden" name = "motasanpham" value = "<?php echo $product['product_discrip'] ?>"/>
          <input type = "hidden" name = "giasanpham" value = "<?php echo $product['product_price'] ?>"/>
          <input type = "hidden" name = "hinhanh" value = "<?php echo $product['product_image1'] ?>"/>
          <input type = "hidden" name = "soluong" value = "1"/>
          <input type = "submit" name = "themgiohang" value = "Add to cart" style = "padding: 5px;background-color:green;border-radius: 2px"/>
        </form>
        
      </div>
      <hr />
      <div class = "content_bottom">
          <p><?php echo $product['product_discrip']?></p>
      </div>
    </div>
  </div>
</div>

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

  <script src="js/product_detail1.js"></script>
</body>
</html>
