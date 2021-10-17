<?php  



    include "nav2.php";


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>


<table>
	<thead>
		<tr>
			<th>User_id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Position</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allsearchedProfile as $i => $shop_db): ?>
			<tr>
				<td><a href="../showProfile.php?id=<?php echo $shop_db['Username'] ?>"><?php echo $shop_db['Id'] ?></a></td>
				<td><?php echo $shop_db['Name'] ?></td>
				<td><?php echo $shop_db['Email'] ?></td>
				<td><?php echo $shop_db['Gender'] ?></td>
                <td><?php echo $shop_db['Role'] ?></td>
				
				
				<td><a href="../Editprofile.php?id=<?php echo $shop_db['Id'] ?>">Edit</a>&nbsp<a href="deleteProfile.php?id=<?php echo $shop_db['Id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>