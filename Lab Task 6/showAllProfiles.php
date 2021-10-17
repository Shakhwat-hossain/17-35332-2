<?php  
require_once 'Controller/profileInfo.php';

$profiles = fetchAllProfiles();


    include "nav2.php";


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
			<th>Role</th>
			<th>Name</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th>Gender</th>
			<th>Date of Birth</th>



		</tr>
	</thead>
	<tbody>
		<?php foreach ($profiles as $i => $shop_db): ?>
			<tr>
				<td><a href="showProfile.php?id=<?php echo $shop_db['Id'] ?>"><?php echo $shop_db['Role'] ?></a></td>
				<td><?php echo $shop_db['Name'] ?><br></td>
				<td><?php echo $shop_db['Email'] ?></td>
				<td><?php echo $shop_db['Username'] ?></td>
				<td><?php echo $shop_db['Password'] ?></td>
				<td><?php echo $shop_db['Gender'] ?></td>
				<td><?php echo $shop_db['DOB'] ?></td>
				<td><?php echo $shop_db['photo'] ?></td>
				
				<td><img width="100px" src="Photos/<?php echo $shop_db['photo'] ?>" alt="<?php echo $shop_db['Name'] ?>"></td>
				<td><a href="editProfile.php?id=<?php echo $shop_db['Id'] ?>">Edit</a>&nbsp<a href="shop_db['Id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>