<?php
  include_once('db/connect.php');
?>


<?php
  $sql_category = mysqli_query($con, 'SELECT * FROM tbl_category ORDER BY category_id DESC');
  $sql_product = mysqli_query($con, 'SELECT * FROM tbl_product');
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
<?php
  include_once('header.php');
  ?>
  <div class = "catalogue_title">
    <div class = "_contain">
        <h1>Catalogue</h1>
        <div class="filter-bar">
          <form class="product-cate" id="cate-filter" name="cate-filter">
            <div class="select-wrapper">
              <select name="category" id="filter" class="filter">
              <option value= "0">All Categories</option>
                <?php 
                  while($row_category = mysqli_fetch_array($sql_category)) {
                ?>
                <option value="<?php echo $row_category['category_id']?>"><a href = "catalogue.php?category=<?php echo $row_category['category_id']?>"><?php echo $row_category['category_name']?></a></option>
               <?php
                  } 
               ?>
              </select>
            </div>
          </form>

        
        </div>
        <div class="filter-bar">
          <form action="#" class="product-cate" id="price-filter" name="price-filter">
            <div class="select-wrapper">
              <select name="" id="filter1" class="filter">
                <option value="0">All Prices</option>
                <option value="price1">Under 100$</option>
                <option value="price2">100$-200$</option>
                <option value="price3">200$-300$</option>
                <option value="price4">Over 300$</option>
              </select>
            </div>
          </form>
        </div>
    </div>
  </div>

  <div class = "list_product">
    <div class = "_contain">
      <hr />
      <div class = "list_item" id = "list_item">
      <?php 
      while($row_product = mysqli_fetch_array($sql_product)) {
      ?>
        <div class = "item" style = "padding:10px">
          <div class = "image" style = "height: 200px;">
            <img src = "./img/<?php echo $row_product['product_image1']?>" style = "height:100%"/>
          </div>
          <div class = "content" style = "height: 100px;padding:10px">
            <h3><?php echo $row_product['product_name']?></h3>
            <p style = "margin-top: 10px;margin-bottom: 10px;"><?php echo $row_product['product_price']."$"?></p>
            <a href="detail_product.php?product_id=<?php echo $row_product['product_id']?>">More</a>
          </div>
        </div>
      <?php
              } 
    ?>
        <div class ="clear"></div>
      </div>
    </div>
  </div>

  <?php
  include_once('header.php');
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script src = "js/chooseCategory.js"></script>
  </script><script src = "js/choosePrice.js"></script>
</body>

</html>