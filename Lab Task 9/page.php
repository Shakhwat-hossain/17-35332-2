<?php 
 session_start();
    if(!isset($_SESSION["uname"])){
        header("Location:login.php");
    }
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Search</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script type="text/javascript" src="../js/page.js"></script>
</head>
<body>
    <div class="container">
    	<h2 class="text-center mt-4 mb-4">Search</h2>
    	
    	<div class="card">
    		<div class="card-header">
    			<div class="row">
    				<div class="col-md-6">Product data</div>
    				<div class="col-md-3 text-right"><b>Total Data - <span id="total_data"></span></b></div>
    				<div class="col-md-3">
    					<input type="text" name="search" class="form-control" id="search" placeholder="Search Here" onkeyup="load_data(this.value);" />
    				</div>
    			</div>
    		</div>
    		<div class="card-body">
    			<table class="table table-bordered">
    				<thead>
    					<tr>
    						<th width="5%">ID</th>
    						<th width="35%">Product Name</th>
    						<th width="35%">Buying price</th>
                            <th width="5%">Selling Price</th>
               
    					</tr>
    				</thead>
    				<tbody id="post_data"></tbody>
    			</table>
    			<div id="pagination_link"></div>
    		</div>
    	</div>
    	
    </div>
</body>
</html>