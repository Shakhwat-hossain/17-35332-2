
<!DOCTYPE html>
<html>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="Controller/findUser.php">
      <div class="container" style="width:500px;"> 

      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="uname" class="form-control" />
      <input type="submit" name="findUser" value="Search" class="form-control" />
    </div>
    </form>


 
  </body>
</html>