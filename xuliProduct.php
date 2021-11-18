
<?php
  include_once('db/connect.php');
?>
<?php 
    if(isset($_GET['product_category']))
    {
        $category_id = $_GET['product_category'];
        if($category_id == "0") {
            $sql_product_category = mysqli_query($con, "SELECT * FROM tbl_product");
        }
        else $sql_product_category = mysqli_query($con, "SELECT * FROM tbl_product WHERE product_category = $category_id");
    
?>
<?php 
    while($row_product_category = mysqli_fetch_array($sql_product_category)) {?>
        <div class = "item" style = "padding:10px">
          <div class = "image" style = "height: 200px;">
            <img src = "./img/<?php echo $row_product_category['product_image1']?>" style = "height:100%"/>
          </div>
          <div class = "content" style = "height: 100px;padding:10px">
            <h3><?php echo $row_product_category['product_name']?></h3>
            <p style = "margin-top: 10px;margin-bottom: 10px;"><?php echo $row_product_category['product_price']."$"?></p>
            <a href="detail_product.php?product_id=<?php echo $row_product_category['product_id']?>">More</a>
          </div>
        </div>
      <?php
              } 
            }
      ?>

 

<div class ="clear"></div>