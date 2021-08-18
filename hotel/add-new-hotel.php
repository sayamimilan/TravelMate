<?php include 'header.php' ?>
<div class="row center">
	<div class="col s12 m8 offset-m2 l6 offset-l3">
		<form action="addnewhotel.php" method='post'>
			<h2 class="black-text">Add new hotel</h2>
			<div class="input-field">
				<input type="text" name="name" id="hotelname" required>
				<label for="hotelname">Hotel Name</label>
			</div>
			<div class="input-field">
				<input type="text" name="price" id="hotelprice" required>
				<label for="hotelprice">Price in NRs</label>
			</div>
			<div class="input-field">
				<input type="text" name="description" id="hoteldescription" required>
				<label for="hoteldescription">Hotel Description</label>
			</div>
			<div class="input-field">
				<input type="text" name="facility" id="hotelfacility" required>
				<label for="hotelfacility">Facilities</label>
			</div>
			<div class="input-field">
				<input type="text" name="location" id="hotellocation" required>
				<label for="hotellocation">Location</label>
			</div>
			<div class="input-field">
				<input type="text" name="contact" id="hotelcontact" required>
				<label for="hotelcontact">Contact No.</label>
			</div>
			<div class="input-field">
				<input type="file" name="file" id="fileToUpload">
				<!-- <label for="fileToUpload"></label> -->
			</div>
			<div class="input-field">
				<button type="submit" class="btn-floating btn-large waves-effect waves-light pulse black"><i class="material-icons">add</i></button>
			</div>
		</form>
	</div>
</div>
<?php 
include 'footer.php' 
?>