
<!DOCTYPE html>
<html lang="en">
<head>

<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
    
               <a href="login.php" style=" color: blue; ">Login</a> </span>

</div>
   
<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
        
      <span  style="text-align:center; " >
     
   <li><a href="registration.php" style="text-align:center; color: blue; "><h2>Need an Account?</h2></a></li>
   <li><a href="login.php" style="text-align:center; color: blue; "><h2>Login </h2></a></li>
  

   </a></li>
        
   </span>
    </ul>
  </div>


   

      
 <span style="text-align:center;">
 <div class="col-6 col-s-9">

    <h1 style="text-align: center; color: blue;">Welcome to E Shop</h1>
    <span style="photo:right; text-align:center;">

      <p>Eshop is one of the most reliable computer and computer parts retail shops in Bangladesh. E Shop was established in 2016 with the theme Best Price, Best Service & Authentic Product] as its motto and gained the trust of millions of users nationwide.E shop has come up with the widest and versatile collection of tech products considering every customer’s choice. E Shop is also considered as the most popular E-Commerce for buying computer and electronic goods just by tapping www.eshop.com  </p> <br>


       <h1 style="text-align: center; color: blue; font-size: 30px;">Why E Shop?</h1>

<p> E Shop has gained the trust and popularity of millions by providing industry-leading after-sale service, wise advocacy, and unbeatable price in the market. E Shop has many partnership affiliations with world-renowned tech brands like HP, Dell, Asus, MSI, Corsair, Samsung, LG and etc. and E Shop is the registered partner of BCS (Bangladesh Computer Samity), ECS (Elephant Road Computer Samity), and e-Cab (E-Commerce Association of Bangladesh) which ensures the quality and authenticity of product and services provided to the customer.</p>

   
 
  
</span>
  </div>
  </span>
  <div class="col-3 col-s-12">
    <div class="aside">
     <span style="text-align:center">
      <h2 id="date"></h2>
   <h3 id="time"></h3></b>
  
   </span>
    </div>
  </div>
</div>

<div class="footer">
  <p>Copyright © 2021.</p>
</div>


</body>
</html>
