<?php 
		$pagetitle = 'Dorra | Services'; 
		include 'includes/header.php';
		include 'includes/nav.php';
	  ?>
	  
<div role="main" class="main">
	<section class="section section-tertiary section-no-border pb-3 mt-0">
		<div class="container">
			<div class="row justify-content-end mt-4">
				<div class="col-lg-10 pt-4 mt-4 text-right">
					<h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Services</h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row pt-2">
			<div class="col-lg-3">
				<aside class="sidebar">

					<ul class="nav nav-list flex-column mb-4 show-bg-active">
						<li class="nav-item"><a class="nav-link active" href="demo-construction-services.htm">Overview</a></li>
						<li class="nav-item"><a class="nav-link" href="demo-construction-services-detail.htm">High-rise buildings</a></li>
						<li class="nav-item"><a class="nav-link" href="demo-construction-services-detail.htm">Large residential integrated compounds</a></li>
						<li class="nav-item"><a class="nav-link" href="demo-construction-services-detail.htm">Residential buildings</a></li>
						<li class="nav-item"><a class="nav-link" href="demo-construction-services-detail.htm">Governmental and public buildings</a></li>
					</ul>

					<h4 class="pt-4 mb-3 text-color-dark">Contact Us</h4>
					<p>Contact us or give us a call to discover how we can help.</p>

					<form id="contactForm" action="php/contact-form.php" method="POST" class="mb-4">
						<div class="form-row">
							<div class="form-group col">
								<label>Your name *</label>
								<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col">
								<label>Your email address *</label>
								<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col">
								<label>Subject</label>
								<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required="">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col">
								<label>Message *</label>
								<textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="message" required=""></textarea>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col">
								<input type="submit" value="Send Message" class="btn btn-primary mb-4" data-loading-text="Loading...">

								<div class="alert alert-success d-none" id="contactSuccess">
									Message has been sent to us.
								</div>

								<div class="alert alert-danger d-none" id="contactError">
									Error sending your message.
								</div>
							</div>
						</div>
					</form>

				</aside>

			</div>
			<div class="col-lg-9">

				<div class="row mt-4">
					<div class="col">
						<div class="feature-box feature-box-style-2 custom-feature-box mb-4 ml-lg-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
							<div class="feature-box-icon">
								<img src="img\demos\construction\icons\ground-construction.png" alt="" class="img-fluid">
							</div>
							<div class="feature-box-info ml-2">
								<h4 class="mb-2">High-rise buildings</h4>
								<p>Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra</p>
								<a class="mt-3" href="demo-construction-services-detail.htm">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col">
						<div class="feature-box feature-box-style-2 custom-feature-box mb-4 ml-lg-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
							<div class="feature-box-icon">
								<img src="img\demos\construction\icons\construction.png" alt="" class="img-fluid">
							</div>
							<div class="feature-box-info ml-2">
								<h4 class="mb-2">Large residential integrated compounds</h4>
								<p>Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra</p>
								<a class="mt-3" href="demo-construction-services-detail.htm">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col">
						<div class="feature-box feature-box-style-2 custom-feature-box mb-4 ml-lg-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
							<div class="feature-box-icon">
								<img src="img\demos\construction\icons\ground-construction.png" alt="" class="img-fluid">
							</div>
							<div class="feature-box-info ml-2">
								<h4 class="mb-2">Residential buildings</h4>
								<p>Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra</p>
								<a class="mt-3" href="demo-construction-services-detail.htm">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col">
						<div class="feature-box feature-box-style-2 custom-feature-box mb-4 ml-lg-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
							<div class="feature-box-icon">
								<img src="img\demos\construction\icons\construction.png" alt="" class="img-fluid">
							</div>
							<div class="feature-box-info ml-2">
								<h4 class="mb-2">Governmental and public buildings</h4>
								<p>Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra Dorra</p>
								<a class="mt-3" href="demo-construction-services-detail.htm">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

<?php include 'includes/footer.php'; ?> 