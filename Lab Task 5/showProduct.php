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

<table>

	<tr>
		<th>Product Name</th>
			<th>Buying Price</th>
			<th>Selling Price</th>
			<th>Image</th>
			
	</tr>
	<?php foreach ($product as $i => $product_db): ?>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product_db['Id'] ?>"><?php echo $product['Productname'] ?></a></td>
		<td><?php echo $product['Buyingprice'] ?></td>
		<td><?php echo $product['Sellingprice'] ?></td>
		<td><img width="100px" src="Picture/<?php echo $product['image'] ?>" alt="<?php echo $product['Productname'] ?>"></td>
	</tr>
<?php endforeach; ?>
</table>


</body>
</html>