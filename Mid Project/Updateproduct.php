<?php
session_start();
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

<div class="header side" style=" color:blueviolet; background-color: lightskyblue;">
      <h2>PROFILE</h2>
</div>
<div class="header middle" style=" color:blueviolet;">
     <span style="color: darkviolet; text-align:center; font-style: Arial;"><b> <h1>SHOP MANAGEMENT SYSTEM</h1></b></span>
     <span style="background-color:; color: purple; text-align:right">Logged in as <a href="profile.php"><?php echo $_SESSION['uname'] ?> </span><br>
      <span style="text-align:right;"> <a href="dashboard.php">Dashboard</a> </span>
      <span style="text-align:right;"> <a href="profile.php">Profile</a> </span>

     <span style="text-align:right;"> <a href="logout.php">Logout</a> </span>
      

</div>
<div class="row">
  <div class="column side" style="background-color:lightskyblue; font-size: 15px; text-align: center; padding-left: 80px;  width: 25%; ">
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<b>
      
    <span style="text-align: center; margin-bottom: 20px;">
        
<html>
<head>
 
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
</head>


<body>
    <div style=" color:darkblue;

      ">
   <br>
   <br><b>
   <h2 id="date"></h2>
   <h3 id="time"></h3></b>
</div>
 </body>
</html>
    </span>

    <hr>
     


    <span style="text-align:center; "> <a href=".php"><h2></h2></a></span>

   <span style="text-align:center; "><h2> <a href="Login.php">Login from another account</a></h2>  </span>
   

</form>
     
      
    
  </div>

  
 
  <div class="columnr middle" style="background-color:deepskyblue;  text-align: left;  width: 75%; font-size: 20px; color:blueviolet; " >

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

 <?php

    $nameErr = $buying_priceErr = $selling_priceErr  = "";
    $productname = $buying_price = $selling_price = "";
   
    if(isset($_POST['buying_price']) && isset($_POST['productname'])&& isset($_POST['selling_price']) )
    {
        if(isset($_POST['update'])){
        $data = file_get_contents('productdata.json');
        $myJSON = json_decode($data, true);

            $update_arr = array(
                $myJSON[$key]['productname'] = $_POST['productname'],
                $myJSON[$key]['buying_price'] = $_POST['buying_price'],
                $myJSON[$key]['selling_price'] = $_POST['selling_price']);
                $myJSON[] = $update_arr;
                $newJSON = json_encode($myJSON);
                file_put_contents('productdata.json', $newJSON);
            
        }

        echo "Success";
    }






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
           <br />  
           <div class="container" style="width:500px;">  


<form style="border:3px;   padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">    <table align="center"> 
        <fieldset>
            <td width='70%'>
            <legend style="font-weight: bold;font-size: 18px">UPDATE PRODUCT</legend>
            <table align="center">
                <tr>
                    <td align="center"> Product Name </td>
                    <td> : </td>
                    <td> <input type="text" name="productname" value="<?php echo $productname;?>"> <br><span style="color:red"><?php echo $nameErr;?></span> </td>
                </tr>
                <br>

                <tr>
                    <td align="center"> Buying Price </td>
                    <td> : </td>
                    <td> <input type="text" name="buying_price" value="<?php echo $buying_price;?>"> <br><span style="color:red"><?php echo $buying_priceErr;?></span> </td>
                </tr>

                <tr>
                    <td align="center"> Selling Price </td>
                    <td> : </td>
                    <td> <input type="text" name="selling_price" value="<?php echo $selling_price;?>"> <br><span style="color:red"><?php echo $selling_priceErr;?></span> </td>
                </tr>

            
            <td colspan="2" align="center"><input type="submit" value="Update" name="Update"> </td>
        </tr>
    
   
    </table>
</fieldset>

</form>
    
   
    
 </div>
</div>


</body>
</html>
