<?php  
require_once 'Controller/productInfo.php';

$products = fetchAllProducts();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Product Name</th>
			<th>Buying Price</th>
			<th>Selling Price</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product_db): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $product_db['Id'] ?>"><?php echo $product_db['Productname'] ?></a></td>
				<td><?php echo $product_db['Buyingprice'] ?></td>
				<td><?php echo $product_db['Sellingprice'] ?></td>
				
				<td><img width="100px" src="Picture/<?php echo $product_db['image'] ?>" alt="<?php echo $product_db['Productname'] ?>"></td>
				<td><a href="editProduct.php?id=<?php echo $product_db['Id'] ?>">Edit</a>&nbsp<a href="Controller/deleteProduct.php?id=<?php echo $product_db['Id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>