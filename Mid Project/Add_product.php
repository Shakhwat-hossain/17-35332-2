<?php
session_start();
if(isset())
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
      <h2>ADD PRODUCTS</h2>
</div>
<div class="header middle" style=" color:blueviolet;">
   


     <span style="color: darkviolet; text-align:center; font-style: Arial;"><b> <h1>SHOP MANAGEMENT SYSTEM</h1></b></span>
     <span style="background-color:; color: purple; text-align:right">Logged in as <a href="profile.php"><?php echo $_SESSION['uname'] ?> </span><br>
      <span style="text-align:right;"> <a href="dashboard.php">Dashboard</a> </span>

     <span style="text-align:right;"> <a href="logout.php">Logout</a> </span>
      

</div>
<div class="row">
  <div class="column side" style="background-color:lightskyblue; font-size: 18px; text-align: left; padding-left: 80px;  width: 25%; ">
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       <span style="text-align:center; margin-bottom: 20px;">
        
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
    <br> <br> 


    
    <span style="text-align:center; "> <a href="Product_Management.php"><h2>back to Product Management</h2></a></span>
  
   

</form>
     
      
    
  </div>

  
 
  <div class="columnr middle" style="background-color:white;  text-align: left;  width: 75%; padding-left: 20px;" >

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


<?php 

      
 $name =  "" ;
 $nameErr='';
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["productname"]))  
      {  
           $error = "<label class='text-danger'>Enter Product Name</label>";  
      }else{
    $name = test_input($_POST["productname"]);
    if(!preg_match("/^[a-zA-Z-' ]/",$name))  {
      $nameErr = "Only letters and white space allowed";
      $name="";

    }
     
     else{
          
          if(str_word_count($_POST["productname"])<2)
     {
          $nameErr= "<label class='text-danger'>    [Product Name must contain minimum 2 words]</label>";
          $name="";

     }
     // check if name only contains letters and whitespace
     }
}

      if(empty($_POST["type"]))  
      {  
           $error = "<label class='text-danger'>Enter Type of Product</label>";  
      }  
      else if(empty($_POST["id"]))  
      {  
           $error = "<label class='text-danger'>Enter ID</label>";  
      }  
      else if(empty($_POST["buying_price"]))  
      {  
           $error = "<label class='text-danger'>Enter Price</label>";  
      }
       else if(empty($_POST["selling_price"]))  
      {  
           $error = "<label class='text-danger'>Enter Price</label>";  
      }
     
      else if(empty($_POST["category"]))  
      {  
           $error = "<label class='text-danger'>Category cannot be empty</label>";  
      } 
      
       
      else  
      {  
           if(file_exists('productdata.json'))  
           {  
                $current_data = file_get_contents('productdata.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'productname'               =>     $_POST['productname'],  
                     'type'          =>     $_POST["type"],  
                     'id'     =>     $_POST["id"],
                     'buying_price'     =>     $_POST["buying_price"],
                     'selling_price'     =>     $_POST["selling_price"],  
                     'category'     =>     $_POST["category"],  
                    
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('productdata.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 
  
 } 

 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
                <h3 align="">Append Product Data to JSON File</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     if(isset($nameErr))  
                     {  
                          echo $nameErr;  
                     }
                     ?> 
                   
                     <br />   

                     <label>Product Name</label>  
                     <input type="text" name="productname" required="productname" class="form-control" /> 
                     <br>

                     <label>Product Type</label>
                     <input type="text" name = "type" class="form-control" /><br />

                     <label>ID</label>
                     <input type="text" name = "id" class="form-control" /><br />

                     <label>Buying Price</label>
                     <input type="text" name = "buying_price" class="form-control" /><br />

                     <label>Selling Price</label>
                     <input type="text" name = "selling_price" class="form-control" /><br />


                     <form action="/action_page.php">
          

                  <span style=" color:blueviolet; "> <fieldset>
                    <legend>Category</legend>
                    <select name="category" >
                    <option value="Computer Hardware"></option>
                    

                    
                    <option value="Software"></option>
                    

                   
                    <option value="Accessories"></option>
                    </select> 
                   




                    </fieldset> <br></span>   
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />   



                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;

                     }  
                     ?>  

                </form>  
                

           </div>  
           <br />  
      </body>  
 </html>  
    

 
</div>

<div class="footer" style="border-style: groove; color:blueviolet;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>