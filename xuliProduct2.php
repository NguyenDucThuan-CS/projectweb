
<?php
  include_once('db/connect.php');
?>
<?php
   if(isset($_GET['product_price'])) {
        $price = $_GET['product_price'];
        if($price == "0"){
            $sql_product_price = mysqli_query($con, "SELECT * FROM tbl_product");
          
        }
        elseif($price == "price1") {
            $sql_product_price = mysqli_query($con, "SELECT * FROM tbl_product WHERE tbl_product.product_price < 100");
        }
        elseif($price == "price2") {
            $sql_product_price = mysqli_query($con, "SELECT * FROM tbl_product WHERE tbl_product.product_price > 100 AND tbl_product.product_price < 200");
        }
        elseif($price == "price3") {
            $sql_product_price = mysqli_query($con, "SELECT * FROM tbl_product WHERE tbl_product.product_price > 200 AND tbl_product.product_price < 300");
        }
        else {
            $sql_product_price = mysqli_query($con, "SELECT * FROM tbl_product WHERE tbl_product.product_price > 300");
        }
?>


<?php 
    while($row_product_price = mysqli_fetch_array($sql_product_price)) {?>
        <div class = "item" style = "padding:10px">
          <div class = "image" style = "height: 200px;">
            <img src = "./img/<?php echo $row_product_price['product_image1']?>" style = "height:100%"/>
          </div>
          <div class = "content" style = "height: 100px;padding:10px">
            <h3><?php echo $row_product_price['product_name']?></h3>
            <p style = "margin-top: 10px;margin-bottom: 10px;"><?php echo $row_product_price['product_price']."$"?></p>
            <a href="detail_product.php?product_id = <?php echo $row_product_price['product_id']?>">More</a>
          </div>
        </div>
<?php
    } 
}
?>

<div class ="clear"></div>