<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("inc/htmlhead.php"); ?>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
	<script>
		$(document).ready(function(){
    		$("#contacthank").validate();
		});
	</script>
	<title>Hank's Hankies - Contact</title>
</head>
<body id="contact">
	<?php include("inc/nav.php"); ?>

	<div class="jumbotron">
        <h2>Thanks for your interest in Hank's Hankies.</h2>
        <p>We guarantee a response to your questions or comments within one business day.</p>
    </div>

	<!-- form inspired by http://www.tudor-anghelina.com/2013/09/how-to-create-php-bootstrap-3-contact.html -->
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title">Contact Hank</h2>
			</div>
			<div class="panel-body">
				<form id="contacthank" method="post" action="http://morpheus.dce.harvard.edu/cgi-bin/echo.cgi" class="form-horizontal" role="form">
					<div class="form-group">
						<label for="inputName" class="col-lg-2 control-label">Name</label>
						<div class="col-lg-10">
							<input type="text" class="form-control required" id="inputName" name="inputName" placeholder="Your Name">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail" class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="text" class="form-control required email" id="inputEmail" name="inputEmail" placeholder="Your Email">
						</div>
					</div>
					<div class="form-group">
						<label for="inputSubject" class="col-lg-2 control-label">Subject</label>
						<div class="col-lg-10">
							<input type="text" class="form-control required" id="inputSubject" name="inputSubject" placeholder="Subject of message">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-lg-2 control-label">Message</label>
						<div class="col-lg-10">
							<textarea class="form-control required" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> &nbsp;Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include("inc/footer.php"); ?>
</body>
</html>