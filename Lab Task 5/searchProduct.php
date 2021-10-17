<!DOCTYPE html>
<html>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="Controller/findProduct.php">
      <h1>SEARCH FOR PRODUCTS</h1>
      <input type="text" name="productname" />
      <input type="submit" name="findProduct" value="Search"/>
    </form>


 
  </body>
</html>