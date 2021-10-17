<?php

    $q=$_GET["q"];
    


    $con = mysqli_connect('localhost','root','','shop_db');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM products WHERE Productname LIKE '%{$q}%'";
    $result = mysqli_query($con,$sql);

    
    echo "<table>
    <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Buy Price</th>
    <th>Sell Price</th>
    <th>Image</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
        //echo "succes";
    echo "<tr>";

        echo "<td>" . $row['Id'] . "</td>";
        echo "<td>" . $row['Productname'] . "</td>";
        echo "<td>" . $row['Buyingprice'] . "</td>";
        echo "<td>" . $row['Sellingprice'] . "</td>";
        //echo "<td>" . $row['image'] . "</td>";
        echo '<td>'.'<img width="100px" src="../Picture/'.$row['image'].'" >'.'</td>';
        echo "</tr>";
    }
    echo "</table>";
    

    mysqli_close($con);

  ?>