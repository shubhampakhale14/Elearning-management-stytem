<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width-device-width,initial-scale=1.0">
	<title>Responsive contact us page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php require 'partials/_nav.php' ?>
	<section class="contact">
		<div class="content">
			<h2>contact us</h2>
			<p>lorem ispum dolor sit amet,constructor adipiscation elit,sed to eiusemed
				temoe
			inciduent ut albore at dolre aliqua.ut enium ad minim veniam</p>
		</div>
		<div class="container">
			<div class="contactinfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Address</h3>
						<p>indira nagar camp road,<br>cisco park,<br>58687</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Phone</h3>
						<p>507-475-6094</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fas fa-envelope"  aria-hidden="true"></i></div>
					<div class="text">
						<h3>Email</h3>
						<p>shubham.v.pakhale@gmail.com</p>
                      </div>
                  </div>
              </div>
          
      <div class="contactform">
      <form>
      	<h2>Send message</h2>
      	<div class="inputBox">
      		<input type="text" name="" required="required">
      		<span>Full Name</span>
      	</div>
      	<div class="inputBox">
      		<input type="text" name="" required="required">
      		<span>Email</span>
      	</div>
      	<div class="inputBox">
      		<textarea required="required"></textarea>
      		<span>Type your Message...</span>
      	</div>
      	<div class="inputBox">
      		<input type="submit" name="" value="send">
      	</div>
      </form>
  </div>
</div>
</section>
</body>
</html>
