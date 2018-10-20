<?php 
		$pagetitle = 'Dorra | Contact'; 
		include 'includes/header.php';
		include 'includes/nav.php';
	  ?>


<div role="main" class="main">
	<section class="section section-tertiary section-no-border pb-3 mt-0">
		<div class="container">
			<div class="row justify-content-end mt-4">
				<div class="col-lg-10 pt-4 mt-4 text-right">
					<h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Contact</h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row pt-4 mb-4">
			<div class="col-lg-7">

				<h2 class="mb-0">Send Us a Message</h2>

				<p class="lead mb-4 mt-1">Contact us or give us a call to discover how we can help.</p>

				<div class="alert alert-success d-none mt-4" id="contactSuccess">
					<strong>Success!</strong> Your message has been sent to us.
				</div>

				<div class="alert alert-danger d-none mt-4" id="contactError">
					<strong>Error!</strong> There was an error sending your message.
					<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
				</div>

				<form id="contactForm" action="" method="POST">
					<div class="form-row">
						<div class="form-group col">
							<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control name=" email"="" id="email" required="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required=""></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input type="submit" value="Send Message" class="btn btn-lg btn-primary mb-4" data-loading-text="Loading...">
						</div>
					</div>
				</form>

			</div>
			<div class="col-lg-4 col-lg-offset-1">

				<h4 class="text-color-dark mb-1 pb-3">Corporate Headquarters</h4>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map small"></div>

				<ul class="list list-icons mt-4 mb-4">
					<li><i class="icon-pin icons"></i> <strong>Address:</strong> 1234 Street Name, City Name</li>
					<li><i class="icon-call-end icons"></i> <strong>Phone:</strong> (123) 456-789</li>
					<li><i class="icon-envelope icons"></i> <strong>Email:</strong> <a href="mailto:info@dorra.com">info@dorra.com</a></li>
				</ul>

			</div>
		</div>

	</div>
</div>

<?php include 'includes/footer.php'; ?> 