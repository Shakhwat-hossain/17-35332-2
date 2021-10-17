




<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="aqua">
  <table border="1" width="100%" cellpadding="10">
    <tr>
      <td align="center" colspan="2" bgcolor="dimgray">
        <h1>
     
        </h1>
      </td>
    </tr>
    <tr>
      <td colspan="3">
      
      </td>
    </tr>
    <tr height="360px">
      <td width="25%">
      
      </td>
      <td align="center" bgcolor="cadetblue">
      
        <table width="100%">
          <tr>
            <td align="right">
              <input type="text" name="search" placeholder="Search.." onkeyup="fetchProductByName(this.value)" >
            </td>
          </tr>
        </table><br>
        <div id="dataTable">
          
        </div>
        <table width="100%" border="1" cellpadding="5" id="mainTable">
          <tr>
            <th width="1%">Sl. No</th>
            <th width="9%">Image</th>
            <th width="50%">Product Name</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
      <?php
      $productDatas = fetchProductMenu($conn);
     
      $i=0;
      if (count($productDatas)==0) {
        echo "<tr><td colspan='9' align='center'>No product found...</td></tr>";
      }
      foreach ($productDatas as $productData) {
      ?>
          <tr>
            <td><?=++$i?></td>
            <td><img width="100px" src="../<?=$productData['photo']?>"></td>
            <td><?=$productData['Productname']?></td>
            <td><?=$productData['Buyingprice']?> Tk.</td>
            <td>[<a href="editProduct.php?id=<?php echo $product_db['Id'] ?>">Edit</a>] [<a href="Controller/deleteProduct.php?id=<?php echo $product_db['Id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>]</td>
          </tr>
          <?php } ?>
        </table>
      </td>
    </tr>
    <tr>
      <td height="65px" bgcolor="dimgray" colspan="3">
        <center>Copyright &copy;</center>
      </td>
    </tr>
  </table>
<script type="text/javascript">
  function fetchProductByName(Productname) {
    if (Productname.trim().length!=0) {
      xhttp = new XMLHttpRequest();
      xhttp.open("POST", "../Controller/fetchDataUsingAjax.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("Productname="+Productname);

      xhttp.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200){
            //alert(email);
            var jsonData = JSON.parse(this.responseText);
            //console.log(jsonData.Data);
            
            if (jsonData.success==true) {
              var dataTable = tableHeader();
              if (jsonData.have==true) {
                var x=0;
                for(i in jsonData.Data){
                  //alert(jsonData.Data[i].uname);
                  dataTable += "<tr><td>"+(++x)+"</td>"+
                        "<td><img width='100px' src='../"+jsonData.Data[i].photo+"'></td>"+
                        "<td>"+jsonData.Data[i].Productname+"</td>"+
                        "<td>"+jsonData.Data[i].Buyingprice+" Tk.</td>"+
                        '<td>[<a href="edit_menu.php?menuId='+jsonData.Data[i].id+'">Edit</a>] [<a href="../Controller/delete_menu.php?menuId='+jsonData.Data[i].id+'">Delete</a>]</td></tr></table>';

                }

              }else{
                dataTable +="<tr><td colspan='5'>"+jsonData.Data+"</td></tr></table>";
              }
              document.getElementById('mainTable').style = "display:none;";
              document.getElementById('dataTable').innerHTML = dataTable;
              document.getElementById('dataTable').style = "display:block;";
          
            }else{
              alert('Wrong....');
            }
          //returnFunc(jsonData.success);
        }
        }
    }else{
      document.getElementById('dataTable').style = "display:block;";
      document.getElementById('ajaxData').style = "display:none;";
      document.getElementById('mainTable').style = "display:block;";
    }
    
  }


  function tableHeader() {
    var head = "<table width='100%' border='1' cellpadding='5' id='ajaxData'>"+
              "<tr>"+
            "<th width='1%'>Sl. No</th>"+
            "<th width='9%'>Image</th>"+
            "<th width='50%'>product Name</th>"+
            "<th>Product Price</th>"+
            "<th>Action</th>"+
          "</tr>";
    return head;
  }
</script>
</body>
</html>
