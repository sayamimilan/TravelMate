<?php include 'header.php' ?>
<?php require 'mysql_connect.php'; ?>

<?php

$city=strtolower($_POST['city']);
// $checkin=$_POST['checkin'];
// $checkout=$_POST['checkout'];
$hotelprice=($_POST['price']);
 
?>
 

<!-- Displaying results based on search -->

 <div class="container">
		<h2 class="center">Recommended Hotels</h2>
        <?php
        $sql = "SELECT * FROM hotel WHERE hotel.location = '$city' AND price <= '$hotelprice'";
		$result = $conn->query($sql);
		if($result){
			if ($result->num_rows > 0){
			    // output data of each row
		    while($row = $result->fetch_assoc()) 
			    {   
			    	$name_slug = preg_replace('#[ -]+#', '-', strtolower($row['name']));
				 ?>	
				 	            
		     	
			        <div class="row">
						<div class="col s12 l8 offset-l2">
							<div class="card z-depth-3">
								<div class="card-title center indigo-text text-darken-4">
									<h4> 
										<?php 
											echo ucwords($row["name"]); 
										?> 
									</h4>
								</div>
								<div class="card-image">
									<a href="hotel.php?id=<?php echo $row['id']; ?>">
										<img src="assets/hotel_img/<?php echo $name_slug; ?>/<?php echo $row['img'];?>"/>
									</a> 
								</div>
								
								<div class="card-content grey lighten-2 center">	 
									<span> Price : NRs <?php echo $row['price']; ?> </span> <br>
									<span> Location : <?php echo ucfirst($row['location']); ?></span>
								</div>
							</div>
							
						</div>
			        	
		        	</div>
			      	
				<?php 
				}
			}
		
		else {
		    echo "<h2 style='color:red;'>No Hotels Found Matching Your requirements</div>";
			}
		} 
        ?>


</div>

<?php include 'footer.php' ?>