<?php include 'header.php';?>
<div class="container">

<h1 class="title">Contact Us</h1>

<!-- form -->
<div class="contact">

       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">
       	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.616840680215!2d72.84003951493563!3d21.20737478590192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04efa1c1260d9%3A0x774339446a9c3ba7!2sHotel%20Hospice!5e0!3m2!1sen!2sin!4v1600614555577!5m2!1sen!2sin" width="100%" height="300" frameborder="0"></iframe>	
       	</div>

		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Inquiry</h4>
       	
			<form role="form" onsubmit="myFunction()">
			<div class="form-group">	
			<input type="text" class="form-control" id="name" placeholder="Name">
			</div>
			<div class="form-group">
			<input type="email" class="form-control" id="email" placeholder="Enter email">
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" id="phone" placeholder="Phone">
			</div>
			<div class="form-group">
			<textarea type="email" class="form-control"  placeholder="Message" rows="4"></textarea>
			</div>
					
			<button type="submit" class="btn btn-default">Send</button>
			</form>
			</div>

       	</div>


       </div>
</div>
</div>
<!-- form -->
<script>
function myFunction() {
  alert("Thank You for your Inquiry");
}
</script>
</div>
<?php include 'footer.php';?>