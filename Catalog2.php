<?php
include("database.php");
if(!isset($_SESSION['id'])|| empty($_SESSION['id'])){
  $must_login="You must login first to access this page";
  header("location:login.php?msg2=$must_login");
}

?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8"></meta>
        <link rel="stylesheet" href="header_styles.css">
      <!--  <link rel="stylesheet" href="index_styles.css"> -->
        <style>
        /*    .blank-section {
  margin-bottom: 15px;
  margin-top: 15PX;
}

.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
  flex-direction: row;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, .125);
  border-radius: .25rem;
  margin-bottom: 15px;*/
/* } */
        </style>
        <title>South Balance - Catalog</title>
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'header.php' ?>

<!---
  <div id="searchBar">
    <input type="text" id="search" placeholder="Search">
</div> -->

<center>
			<div class="jumbotron">
				<h3>Catalog of Items</h3>
			</div>
			<!-- <div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
			<table class="table">
				<tr>
					<th>Item Name</th>
					<th>Color</th>
					<th>Size</th>
					<th>Price</th>
					<th>Date of birth</th>
					<th></th>
				</tr>
				<?php
				/*$query="SELECT * from inventory_items";
					$result=mysqli_query($conn,$query);
				while($row= mysqli_fetch_assoc($result)){
				?>
				<tr>
					<td>
						<?php
						echo $row['Item_Name'];
						?>
					</td>
					<td>
						<?php
						echo $row['Item_Color'];
						?>
					</td>
					<td>
						<?php
						echo $row['Item_Size'];
						?>
					</td>
					<td>
						<?php
						echo $row['Item_Unit_Price']; 
						?>
					</td>
					<td>
						<a href="addToCart.php?add='<?php echo $row['Item_ID'];?>'"><strong>X</strong></a>
					</td>
				</tr>
				<?php
			} */
				?>
			</table>
		</div>
		<div class="col-md-3"></div>
	</div> -->
		</center>
        <div class="container">
    <div class="row">
		
   <?php 
      $query="SELECT * from inventory_items";
      $result=mysqli_query($conn,$query);
  while($row= mysqli_fetch_assoc($result)){
      ?>
	  <form action="cart2.php?action=add&Item_ID=<?php echo $row['Item_ID'];?>" method="post">
      <div class="col-md-3">
        <div class="card" style="">
         <img src="<?php echo $row['Image'] ?>" class="img-box" alt="..." style="width:150px; height:150px">
         <div class="card-body">
            <h5 class="card-title"><?php
						echo $row['Item_Name'];
						?></h5>
              <p class="card-text">
              <?php
						echo $row['Item_Unit_Price']; 
                        echo "<br>";
                        echo $row['Item_Color'];
                        echo "<br>";
                        echo $row['Item_Size'];
						?>
              </p>
		 <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="bt btn-primary" /></div>
  </div>
	</form>
	&nbsp;
  </div>
  </div>
	<?php
}
    ?>
    </div>
</div>
</div>
</body>
</html>