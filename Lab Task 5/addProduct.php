<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="Controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="productname">Product Name:</label><br>
  <input type="text" id="productname" name="productname"><br>
  <label for="buyingprice">Buying Price:</label><br>
  <input type="text" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice">Selling Price:</label><br>
  <input type="text" id="sellingprice" name="sellingprice"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createProduct" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>
