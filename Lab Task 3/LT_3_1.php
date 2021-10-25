<?php  
 $message = '';  
 $error = '';  
 $name =  "" ;
 $nameErr='';

 if(isset($_POST["submit"]))  
 {   
 
      if (empty($_POST["name"])) {
     $error = "<label class='text-danger'>Enter Name</label>"; 
  }

   

  else {
    $name = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$name))  {
      $nameErr = "Only letters and white space allowed";
      $name="";

    }
     
     else{
          
          if(str_word_count($_POST["name"])<2)
     {
          $nameErr= "<label class='text-danger'>Minimum 2 words</label>";
          $name="";

     }

     // check if name only contains letters and whitespace
     }

   
    
      if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label><br>";  
      }
     else{
        
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data2.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                    
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
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
                <h3 align="">Append Data to JSON File</h3><br />                 
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
                     
                     <label>User Name</label>
                     <input type="text" name = "name"  class="form-control" />
                     <span class="error">* <?php echo $nameErr;?></span><br />
                     <label>Password</label>
                     <input type="password" name = "pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control" /><br />
                    

                  
                     
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