<?php  
require_once 'Controller/myInfo.php';

$myprofile = fetchmyProfile($_GET['uname']);


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
	<?php foreach ($myprofile as $i => $shop_db): ?>
	<tr>
		<td><a href="../showmyProfile.php?uname=<?php echo $shop_db['Username'] ?>">
		    <?php echo $myprofile['Id'] ?></a></td>
		<td><?php echo $myprofile['Role'] ?></td>
		<td><?php echo $myprofile['Name'] ?></td>
		<td><?php echo $myprofile['Email'] ?></td>
		<td><?php echo $myprofile['Username'] ?></td>
		<td><?php echo $myprofile['Password'] ?></td>
		<td><?php echo $myprofile['Gender'] ?></td>
		<td><?php echo $myprofile['DOB'] ?></td>
		<td><img width="100px" src="Photos/<?php echo $myprofile['photo'] ?>" ></td>
			</tr>
	
<?php endforeach; ?>
</tbody>
	

</table>
</div>

</body>
</html>