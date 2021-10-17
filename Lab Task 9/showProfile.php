<?php  
require_once 'Controller/userInfo.php';

$profile = fetchProfile($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
          
</head>
<body>
	<div class="container" style="width:1800px;"> 

<table>
<thead>
	<tr>
		    
		    <th>ID</th>
		    <th>Position</th>
			<th>Name</th>
			<th>Email</th>
			<th>Username</th>
		    <th>Password</th>
		    <th>Gender</th>
			<th>Date of Birth</th>
			<th>Photo</th>

			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($profile as $i => $shop_db): ?>
	<tr>
		<td><a href="../showProfile.php?id=<?php echo $shop_db['Id'] ?>">
		    <?php echo $profile['Id'] ?></a></td>
		<td><?php echo $profile['Role'] ?></td>
		<td><?php echo $profile['Name'] ?></td>
		<td><?php echo $profile['Email'] ?></td>
		<td><?php echo $profile['Username'] ?></td>
		<td><?php echo $profile['Password'] ?></td>
		<td><?php echo $profile['Gender'] ?></td>
		<td><?php echo $profile['DOB'] ?></td>
		<td><img width="100px" src="Photos/<?php echo $profile['photo'] ?>" ></td>
			</tr>
	
<?php endforeach; ?>
</tbody>
	

</table>
</div>

</body>
</html>