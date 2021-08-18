<?php include 'header.php' ?>
<?php include 'search-form.php' ?>
<?php require 'mysql_connect.php'; ?>

<!-- STYELESHEET -->
<style>
	.hotels{
		margin-top: 30px;
	}
</style>

<!-- Displaying all hotels -->
<div class="container hotels">	
	<?php
        $sql = "SELECT * FROM hotel ORDER BY id desc";
		$result = $conn->query($sql);
		if($result){
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {   
		    	$name_slug=  preg_replace('#[ -]+#', '-', strtolower($row['name']));
      ?>
	
	<div class="row">
		<div class="col s12 l8 offset-l2">
			<div class="card z-depth-3">
				<div class="card-image">
					<a href="hotel.php?id=<?php echo $row['id']; ?>">
						<div>
							<img src="assets/hotel_img/<?php echo $name_slug; ?>/<?php echo $row['img'];?>"/>
						</div>
					</a>
				</div>
					
				<div class="card-content grey lighten-2 center">
						<span>Hotel Name : <?php echo $row['name']; ?></span><br/>
						<span>Price : NRs. <?php echo $row['price']; ?></span>
				</div>				
			</div>			
		</div>
	</div>		
	 	<?php }}
		} else {
		    echo "<h2 style='color:red;'>No Hotels Found</div>";
		}		
        ?>	
</div>

<?php include 'footer.php' ?>