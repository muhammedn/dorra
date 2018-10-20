<?php 
		$pagetitle = 'Dorra | Home'; 
		include 'includes/header.php';
		include 'includes/nav.php';
	  ?>

<div role="main" class="main">
<div class="header-edit">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12"><div class="edit-head-text"><!-- DORRA --> 
					<!-- <video autoplay loop >
					  <source src="video/dorra-logo.mp4" type="video/mp4">
					  <source src="video/dorra-logo.ogg" type="video/ogg">
					  <source src="video/dorra-logo.webm" type="video/webm">
						
					</video> -->
					<img src="img/dorra-logo.gif">
			</div>
		</div>
	</div>
			<div class="row">
				<div class="col-md-4 col-sm-12"><div class="text-edit"><a href="contracting">CONTRACTING</a></div></div>
				<div class="col-md-4 col-sm-12"><div class="text-edit"><a href="developments">DEVELOPMENTS</a></div></div>
				<div class="col-md-4 col-sm-12"><div class="text-edit"><a href="interiors">INTERIORS</a></div></div>
			</div>
	</div>
</div>

<div class="container-fluid full-width-fluid">
	<div class="row">
		<div class="col-md-12">
				
			
		</div>
	</div>
</div>
<div class="container">
	<div class="row mt-4 mt-lg-5 mb-4 py-4">
		<div class="col-lg-4">
			<h2 class="mb-0 text-color-dark">Who We Are</h2>
			<p class="lead"></p><br>
			<?php
		    $stmt = $con->prepare("SELECT text FROM who ");
	        $stmt -> execute (array());
	        $row = $stmt ->fetch();
		  
		    ?>
			<p> <?= $row[0]; ?> </p>
			<a class="mt-3" href="about">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
		</div>
		<div class="col-lg-2 text-center d-none d-lg-block">
		<br>	<img src="img\dotted-line-angle.png" class="img-fluid">
		</div>
		<div class="col-lg-6">
			<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/153924859?autoplay=1&loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
			
		</div>
	</div>
</div>

<section class="section section-tertiary section-no-border section-custom-construction">
	<div class="container">
		<div class="row pt-4">
			<div class="col">
				<h2 class="mb-0 text-color-dark">Portfolio</h2>
				<p class="lead"></p>
			</div>
		</div>

		<div class="row ">
			<?php
		    foreach (getReco('info') as $info) {
		    ?>
			<div class="col-lg-6">
				<div class="feature-box feature-box-style-2 custom-feature-box mb-4 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
					<div class="feature-box-icon">
						<img src="admin\manager\uploads\info\<?= $info['info_image']; ?>" alt="" class="img-fluid">
					</div>
					<div class="feature-box-info ml-3">
						<h4 class="mb-2"><?= $info['info_name']; ?> </h4>
						<p><?= $info['info_desc']; ?>  </p>
						<a class="mt-3" href="#">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
			</div>
			<?php } ?>
			
		<!-- </div> -->

		<!-- <div class="row mt-3 mb-4"> -->
			
			

		</div>
	</div>
</section>
				
<div class="container">

<div class="row pt-2">
	<div class="col">
		<h2 class="mb-0 text-color-dark">Highlighted Projects</h2>

		<ul class="nav nav-pills sort-source mb-3 pb-2" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
			<li style="display: none;" class="nav-item active" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
		</ul>

		<div class="sort-destination-loader sort-destination-loader-showing">
			<div class="row mb-4 pt-1 portfolio-list sort-destination" data-sort-id="portfolio">
				<?php
			    foreach (getHigh('project_highlight' ,'highlight' , 'yes') as $high) {
			    ?>
				<div class="col-md-6 col-lg-4 isotope-item mb-4 ">
					<a href="project-details">
						<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
							<span class="thumb-info-wrapper">
								<img src="admin\manager\uploads\project\<?= $high['p_image']; ?>" class="img-fluid" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner">View Project...</span>
								</span>
							</span>
						</span>
					</a>
					<h4 class="mt-3 mb-0"><?= $high['p_name']; ?></h4>
					<p class="mb-0"><?= $high['location']; ?></p>
				</div>
			<?php } ?>
				
				
			</div>
		</div>
	</div>
</div>

</div>

<section class="section section-background mb-4" style="background-image: url(img/demos/construction/testimonials/testimonials-bg.jpg); background-position: 50% 100%; min-height: 540px; background-size: cover;">
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-lg-6">
				
				<div class="owl-carousel owl-theme nav-bottom rounded-nav mt-4 pt-4 mb-4 pb-4" data-plugin-options="{'items': 1, 'loop': false}">
					<?php
				    foreach (getReco('testimonial') as $testimonial) {
				    ?>
					<div>
						<div class="col">
							<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
								<blockquote>
									<p><?= $testimonial['test_text']; ?></p>
								</blockquote>
								<div class="testimonial-author">
									<p><strong> <?= $testimonial['test_name']; ?></strong><span> <?= $testimonial['test_position']; ?></span></p>
								</div>
							</div>
						</div>
					</div>
					<?php
				    }
				    ?>
					
				</div>

			</div>
		</div>
	</div>
</section>

<?php include 'includes/footer.php'; ?> 