<?php  
require_once 'Controller/profileInfo.php';

$profile = fetchProfile($_GET['id']);


    include "nav2.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>

	<tr>
		    <th>Role</th>
		    <th>ID</th>
			<th>Name</th>
			<th>Email</th>
		    <th>Password</th>
			<th>Date of Birth</th>

			
	</tr>
	<?php foreach ($profile as $i => $shop_db): ?>
	<tr>
		<td><a href="showProfile.php?id=<?php echo $shop_db['Id'] ?>"><?php echo $profile['Role'] ?></a></td>
		<td><?php echo $profile['Name'] ?></td>
		<td><?php echo $profile['Email'] ?></td>
		<td><?php echo $profile['Password'] ?></td>
		<td><?php echo $profile['DOB'] ?></td>
		<td><?php echo $profile['photo'] ?></td>
		
		<td><img width="100px" src="Picture/<?php echo $profile['photo'] ?>" alt="<?php echo $profile['Name'] ?>"></td>
	</tr>
<?php endforeach; ?>
</table>


</body>
</html>