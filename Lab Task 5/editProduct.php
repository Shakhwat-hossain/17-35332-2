<?php 

require_once 'Controller/productInfo.php';
$product = fetchProduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="Controller/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="productname">Product Name:</label><br>
  <input value="<?php echo $product['Productname'] ?>" type="text" id="productname" name="productname"><br>
  <label for="buyingprice">Buying Price:</label><br>
  <input value="<?php echo $product['Buyingprice'] ?>" type="text" id="buyingprice" name="buyingprice"><br>

   <label for="sellingprice">Selling Price:</label><br>
  <input value="<?php echo $product['Sellingprice'] ?>" type="text" id="sellingprice" name="sellingprice"><br>
   
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

