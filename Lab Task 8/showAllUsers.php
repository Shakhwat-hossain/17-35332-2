<?php
session_start();

if (isset($_SESSION['flag'])) 
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>



 img{
      float: left;
    }


</style>
</head>
<body>
 
  
<link rel="stylesheet" type="text/css" href="style.css">

<p></p>

<div class="header" style="text-align:right;" >

 

  <h1 style="text-align: center;">SHOP MANAGEMENT SYSTEM</h1>
  <span style="background-color:; color: white; text-align:right; font-size: 20px;">        
              Logged in as <a href="myProfile.php" style="color:blue;"> <?php echo  $_SESSION['uname']; ?> 

              <br>
               <a href="logout.php" style=" color: blue; ">Logout</a>  
               <a href="home.php" style=" color: blue; ">Home</a> </span>

</div>
   
<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
        
      <span  style="text-align:center; " >
   <li><a href="dashboard.php" style="text-align:center; color: blue; "> <h2>Dashboard </h2> 
   <li><a href="addUser.php" style="text-align:center; color: blue; "><h2>Create Profile</h2></a></li>
   <li><a href="SearchUser.php" style="text-align:center; color: blue; "><h2> Search Profile</h2></a></li>
   <li><a href="showAllUsers.php" style="text-align:center; color: blue; "> <h2> Show all Profiles</h2>
  
<p id="demo"></p>
        
   </span>
    </ul>
  </div>


   

      
 <span style="text-align:center;">
 <div class="col-6 col-s-9">

 
 
  <?php  
require_once 'Controller/userInfo.php';

$profiles = fetchAllProfiles();


 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>

		table,td,th{
			border:1px solid black ;


		}
	</style>
</head>
<body>





<div class="container" style="width:1000px;"> 
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Role</th>
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
		<?php foreach ($profiles as $i => $shop_db): ?>
			<tr>
				<td><a href="showProfile.php?id=<?php echo $shop_db['Id'] ?>"><?php echo $shop_db['Id'] ?></a></td>
				<td><?php echo $shop_db['Role'] ?><br></td>
				<td><?php echo $shop_db['Name'] ?><br></td>
				<td><?php echo $shop_db['Email'] ?></td>
				<td><?php echo $shop_db['Username'] ?></td>
				<td><?php echo $shop_db['Password'] ?></td>
				<td><?php echo $shop_db['Gender'] ?></td>
				<td><?php echo $shop_db['DOB'] ?></td>
				
				
				<td><img width="100px" src="Photos/<?php echo $shop_db['photo'] ?>" alt="<?php echo $shop_db['Name'] ?>"></td>
				<td><a href="editProfile.php?id=<?php echo $shop_db['Id'] ?>">Edit</a>&nbsp<a href="Controller/deleteProfile.php?id=<?php echo $shop_db['Id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>

</div>
</body>
</html>
  
</span>
  </div>
  </span>
 
  </div>
</div>

<div class="footer">
  <p>Copyright © 2021.</p>
</div>


</body>
</html>
