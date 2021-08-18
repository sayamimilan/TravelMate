<?php include 'header.php' ?>
<?php require 'mysql_connect.php'; ?>

<style>
	.section{
		padding-top: 2vw;
		padding-bottom: 4vw;
	}
</style>

<?php $id=$_GET['id'];

/* Fetching data from database based on selected id*/

$sql = "SELECT * FROM hotel where id=".$id;
$result = $conn->query($sql);
	if ($result->num_rows > 0) { 
		$row = $result->fetch_assoc();
		$name_slug=  preg_replace('#[ -]+#', '-', strtolower($row['name']));
?>
<section class="container section">
	<div class="row">	
		<div class="col s12 l8 offset-l4" style="padding-bottom: 2vw;">
			<h2 class="indigo-text text-darken-4"><?php echo $row['name'];?></h2>
		</div>
		<div class="col s12 l6">
			<img src="assets/hotel_img/<?php echo $name_slug; ?>/<?php echo $row['img'];?>" style="border-radius: 3px;" class="responsive-img materialboxed"/>
		</div>
		<div class="col s12 l6">					     	
			<p><b>Price :</b> NRs. <?php echo $row['price'];?></p>
			<p><b>Description :</b><br><?php echo $row['description'];?></p>
			<p><b>Facility : </b><br><?php echo $row['facility'];?> </p>
			<p><b>Location : </b><?php echo ucfirst($row['location']);?> </p>
			<p><b>Contact : </b><?php echo $row['contact'];?></p>
		</div>
			
		<div class="row">
			<div class="col s12 l8 offset-l2">
				<?php if($_SESSION['is_logged_in']=="true"){ ?>					
					<h3 class="indigo-text text-darken-4">Write a review..</h3>
					<form method=POST action='review.php'>
						<div style="margin-top:-20px;float:left;">
							<input class="star star-5" id="star-5" type="radio" name="rating" value='5'/>
							<label class="star star-5" for="star-5"></label>
							<input class="star star-4" id="star-4" type="radio" name="rating" value='4'/>
							<label class="star star-4" for="star-4"></label>
							<input class="star star-3" id="star-3" type="radio" name="rating" value='3'/>
							<label class="star star-3" for="star-3"></label>
							<input class="star star-2" id="star-2" type="radio" name="rating" value='2'/>
							<label class="star star-2" for="star-2"></label>
							<input class="star star-1" id="star-1" type="radio" name="rating" value='1'/>
							<label class="star star-1" for="star-1"></label>
						</div>
						<div style="clear:both;"></div>
						<input type='hidden' name="hotelid" value="<?php echo $id;?>"/>
						<input type='hidden' name="username" value="<?php echo $_SESSION['id'];?>"/>
				
						<div class="input-field">
							<textarea  class="materialize-textarea"  name="reviews" id="reviewd"></textarea>
							<label for="reviewd">Write something..</label>
						</div>
						<div class="input-field">
							<button type="submit" class="btn waves-effect btn-medium">Submit</button>
						</div>
					</form> 					
				<?php } ?>

				<!-- Fetching reviews based on id  -->
				<?php

				$hotel_id=$row['id'];
				$sql1 = "SELECT * FROM reviews where hotel_id='$hotel_id' ORDER BY id desc" ;
				$result1 = $conn->query($sql1);

				if ($result1->num_rows > 0){ ?>
					<h3 class="indigo-text text-darken-4">Reviews by users : </h3>	
				<?php } else{ ?>
					<h3 class="red-text"> No reviews available</h3>     
				<?php	}  

				if ($result1->num_rows > 0) { 
					$i=0;
					while($row1 = $result1->fetch_assoc()) { 
						$userid=$row1['username'];
						$sql2 = "SELECT username FROM users where id='$userid' LIMIT 1 "; 	
						$result3 = $conn->query($sql2);
						$row2 = $result3->fetch_assoc();
				?>	
					<p style="font-size:19px;">
						<b style="font-size:22px;">Reviewed by</b> <b class="purple-text text-darken-3"  style="font-size:22px;"><?php echo ucwords($row2['username']);?>: </b>
						<?php 
							echo $row1['reviews'];
						?>						
					</p>

					<?php
						$max=$row1['rating']; 
						if($max==0){$max=1;} 
						for($j=0;$j<$max;$j++){ 
					?> 
						<img src="assets/star.png" style="width:25px;height:25px;"/>
					<?php  }?>
				<?php if($i>=4) break;  
				$i++; } 
				} 
				?>
				<?php
				} else {
					echo "<h3 class='red-text'>No reviews available</h3>";
				}
				?>
			</div>
		</div>					
	</div>	
</section>

<!-- Hotel suggestions based on location and price selected by user -->

<div class="row">		
	<?php
	$location=strtolower($row['location']);
	$price=$row['price'];
	$sql = "SELECT * FROM hotel where id!='$id' AND location='$location' AND price < '$price' LIMIT 5";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	?>

	<div class="col s12 l6 offset-l3">
		<h4 class="center indigo-text text-darken-4">Recommended Hotels</h4>
		<?php
			// output data of each row
			while($row = $result->fetch_assoc()) {   
				$name_slug=  preg_replace('#[ -]+#', '-', strtolower($row['name']));
				$hotel_id=$row['id'];
				$sql3 = "SELECT rating FROM reviews where hotel_id='$hotel_id' LIMIT 5";
				$result3 = $conn->query($sql3);
				$sum = 0;
				$usercount=0;
				while($row3 = $result3->fetch_assoc()) {						
					$sum+=($row3['rating']);
					$usercount++;
				}
				if($usercount=='0'){
					$usercount=1;
				}
				$averating=round($sum/$usercount);     
				?>
				<div class="card z-depth-3">
					<div class="card-title">
						<a href="hotel.php?id=<?php echo $row['id']; ?>">
							<h4 class="center indigo-text"><?php echo ucwords($row["name"]); ?></h4>
					</div>
					<div class="card-image">
						
							<img src="assets/hotel_img/<?php echo $name_slug; ?>/<?php echo $row['img'];?>"/>
						</a>
					</div>
					<div class="card-content grey lighten-1 center">
						<span>
							<b style="float:left; padding-left: 20px;">Rating: </b>
							<div style="float:left; margin-right:5px;margin-left:5px;">
								<?php  
									$max=$averating; 
									if($max==0){$max=1;} 
									for($j=0;$j<$max;$j++){ 
								?> 		<img src="assets/star.png" style="width:15px;height:15px;"/>
								<?php  }?>
							</div>
							<b>Price: </b> NRs<?php echo $row['price']; ?>  | <b><?php echo ucfirst($row['location']); ?></b>				
						</span>
					</div>
				</div>							
				<?php }
				} else {
					echo "<h3 style='color:indigo; text-align: center;''>Enjoy your stay...</h3>";
				}
				?>
	</div>
</div>

<?php include 'footer.php' ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
	$(document).ready(function(){
		$('.materialboxed').materialbox();
	});
</script>