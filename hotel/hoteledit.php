<?php include 'header.php' ?>
<?php require 'mysql_connect.php'; ?>

<!-- Updating hotel information -->

<?php $id=$_GET['id'];
		$sql = "SELECT * FROM hotel where id=".$id;
		$result = $conn->query($sql);
		if ($result->num_rows > 0) { 
		$row = $result->fetch_assoc();
	}

?>

<div class="row container center">
	<div class="cols s12 l4 offset-l4">
		<form class="hoteform" method="post" action='updatehotel.php' enctype="multipart/form-data">
			<h2 class="black-text center">Edit hotel details</h2>
			<input type="hidden" name="id"  value='<?php echo $row['id'];?>'/><br/>
			<input type="text" name="name" placeholder="Hotel name" value='<?php echo $row['name'];?>' /><br/>
			<input type="text" name="price" placeholder="Min price" value='<?php echo $row['price'];?>'/><br/>
			<input type="text" name="description" placeholder="Hotel description" value='<?php echo $row['description'];?>' /><br/>
			<input type="text" name="facility" placeholder="Facilities" value='<?php echo $row['facility'];?>' /><br/>
			<input type="text" name="location" placeholder="location" value='<?php echo $row['location'];?>' /><br/>
			<input type="text" name="contact"  placeholder="contact" value='<?php echo $row['contact'];?>'/><br/>
			<input type="file" name="file" id="fileToUpload"><br/> 
			<!-- <input type="submit" class="btn" value="Upload Image" name="submit"><br/> -->
			<div class="input-field">
				<button type="submit" name="submit" class="btn waves-effect">Update</button>
			</div>
		</form>
	</div>
</div>

<?php include 'footer.php' ?>