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
    <script type="text/javascript">
    window.onload = setInterval(clock,1000);

    function clock()
    {
      var d = new Date();
      
      var date = d.getDate();
      
      var month = d.getMonth();
      var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
      month=montharr[month];
      
      var year = d.getFullYear();
      
      var day = d.getDay();
      var dayarr =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
      day=dayarr[day];
      
      var hour =d.getHours();
      var min = d.getMinutes();
      var sec = d.getSeconds();
    
      document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
      document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
    }
  </script>
  
<link rel="stylesheet" type="text/css" href="style.css">

<p></p>

<div class="header" style="text-align:right;" >

 

  <h1 style="text-align: center;">SHOP MANAGEMENT SYSTEM</h1>
  <span style="background-color:; color: white; text-align:right; font-size: 20px;">        
              Logged in as <a href="myProfile.php" style="color:blue;"> <?php echo  $_SESSION['uname']; ?> 

              </span>

</div>
   
<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
        
      <span  style="text-align:center; " >
  
  
<p id="demo"></p>
        
   </span>
    </ul>
  </div>


   

      
 <span style="text-align:center;">
 <div class="col-6 col-s-9">

 
 
<!DOCTYPE html>
<html>
<head>
	<title></title>

	
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
          

	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>
<div class="container" style="width:1000px;"> 

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Gender</th>
			<th>Position</th>
			<th>Date of Birth</th>
		    <th>Photo</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $shop_db): ?>
			<tr>
				<td><a href="../showProfile.php?id=<?php echo $shop_db['Id'] ?>"><?php echo $shop_db['Id'] ?></a></td>
				<td><?php echo $shop_db['Name'] ?></td>
				<td><?php echo $shop_db['Email'] ?></td>
				<td><?php echo $shop_db['Password'] ?></td>
				<td><?php echo $shop_db['Gender'] ?></td>
                <td><?php echo $shop_db['Role'] ?></td>
                <td><?php echo $shop_db['DOB'] ?></td>
				<td><img width="100px" src="Photos/<?php echo $shop_db['photo'] ?>" ></td>
			
				<td><a href="../editProfile.php?id=<?php echo $shop_db['Id'] ?>">Edit</a>&nbsp<a href="deleteProfile.php?id=<?php echo $shop_db['Id'] ?>">Delete</a></td>
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

