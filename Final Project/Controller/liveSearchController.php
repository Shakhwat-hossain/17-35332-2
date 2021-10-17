<?php 
$data = "k";
$output = '';
if(isset($_GET['q'])){
    $data = $_GET['q'];
}
$db = mysqli_connect("localhost", "root", "", "shop_db");
if($db->connect_error){
    exit('DB not connected');
}
$x = "SELECT * FROM products WHERE Productname LIKE '%".$data."%' OR Buyingprice LIKE '%".$data."%' OR Sellingprice LIKE '%".$data."%'";
$y = $db->query($x);




if(mysqli_num_rows($y) > 0)
{
    $output .= '<div class="table-responsive">
                    <table class="table table bordered">
                        <tr>
                            <th>Product Name</th>
                            <th>Buying Price</th>
                            <th>Selling Price</th>
                            <th></th>
                        </tr>';
    while($row = mysqli_fetch_array($y))
    {
        $output .= '
            <tr>
                <td>'.$row["Productname"].'</td>
                <td>'.$row["Buyingprice"].'</td>
                <td>'.$row["Sellingprice"].'</td>
                <td>'.$row[""].'</td>
            </tr>
        ';
    }
    echo $output;
}
else
{
    echo 'Data Not Found';
}
?>