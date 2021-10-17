 <!DOCTYPE html>
<html>
<head>
     
          <header>
               <style>
                    img{

                         float: left;
                    }
   


                  
               </style>
    
     
  <meta charset="utf-8">
  <title></title>
     <li><a href="home.php">Home  |</a>  <a href="login.php">Login  |</a> <a href="Ifnotregistered.php"  > Registration</a> </li>
     <p><img src="x_company.png" alt="x_company.png" style="width:100px;height:50px; margin-top: -45px;  ">

  
<link rel="stylesheet" type="text/css" href="A.css">
</head>
<body>  
</header>
<section>
  <nav>
    <ul>
        
     
      
    </ul>
  </nav>
  </section>

<article>
    


    
 
<?php


if (isset($_POST['submit'])) {
    $inp = file_get_contents('data.json');
    $temp = json_decode($inp, true);

    if (empty($_POST['e-mail']))
     {
        echo "Email is required";
    } else {
        $bool = 0;
        foreach ($temp as $key1 => $value1)
         {
            if ($temp[$key1]["e-mail"] == $_POST['e-mail']) {
                $bool = 1;
            }
        }
        if ($bool == 1) {
            echo "Email exits in database, a code will be sent to you";
        } else {
            echo "This is not a registered e-mail";
        }
    }
}
?>


       
      <body>  
        <div >

                <form method="post"  >
                   
                        <legend><b>FORGOT PASSWORD</b></legend>
                       
                        <label>E-mail </label>
                     <input type="text" name = "e-mail" class="form-control" /><br />
                     <br>
                     <br>
                      <input type="submit" align="center" name="submit" value="Submit" <span class="forms"></span> 
                       
                </form>
                 <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           
           
                <br />      


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
          

     



</div></span>
</article>

<footer>
     <div style="padding:-1px;">
  <p> Copyright © 2017</p>


</footer>