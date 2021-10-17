
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "nav2.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="Controller/findProfile.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="uname" />
      <input type="submit" name="findProfile" value="Search"/>
    </form>


 
  </body>
</html>