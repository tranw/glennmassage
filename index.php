<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
	$pagetitle="Natural Healthy &amp; Strong Massage";
	$metadesc="Natural Healthy & Strong™ provides quality, affordable massages to support your health and overall wellbeing. Call or set up an appointment online today.";
	$metakeywords="Massage, Massage Therapy, Massage Therapist, Health, Pain Relief, Stress Relief, Wellness";
	
//===========================CALLBACK FUNCTION============================//
	function callback($buffer){return ($buffer);}  // return complete page
	ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>

<?php include('includes/header.php'); ?>

<main>
	<div class="container" style="padding-bottom:20px;margin-top:-60px;">
		<h1 class="page-title">Get to know our Specialty Massages!</h1>
		<h3 class="page-title">At this time, we are offering as an introductory special all of our specialty massages at the same price as our basic massage therapy prices!</h3>
		<br />
		<ul class="page-title" style="list-style-type: none;">
				<li>1 Hour &mdash; $70.00</li>
				<li>90 Minutes &mdash; $90.00</li>
				<li>2 Hours &mdash; $120.00</li>
			</ul>
	</div>
	<div class="container-full" style="background-image: url(media/graphics/background-location.png);padding: 0px 0px;background-repeat: round;">
		<div class="container">
		<section class="location-wrapper">
			<div class="section-inner">
				<div class="container-fluid container-fluid-zero-padding location-wrapper-inner">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="location-wrapper-info matchheight-set1">
								<h3 class="location-shopping-center font-weight-bold">Natural Healthy &amp; Strong Massage</h3>
								<p class="location-address">
									Grandview Business Park Building 1<br />
									7052 Portal Way Unit 120<br />
									Ferndale, WA&nbsp;98248
								</p>
								<p class="location-hours">
									<span class="font-weight-bold">Tues &ndash; Fri:</span> 8am &ndash; 5pm<br />
									<span class="font-weight-bold">Sat &ndash; Sun:</span> Closed
								</p>
								<button type="button" class="btn btn-lg btn-dark book-button mb-3"><i class="fa fa-calendar"></i>&ensp;Book an Appointment</button>
								<p class="location-number">
									Or call to book: <a class="font-weight-bold" href="tel:+13602091973">360.209.1973</a>
								</p>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 embed-responsive embed-responsive-16by9">
							<div class="map matchheight-set1 align-self-center" id="map" style="height: 200px;">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.008330314289!2d-122.60981081982239!3d48.8961784061006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485b92eb6ce22c9%3A0x2074c6b1e1bf4940!2s7052+Portal+Way+Unit+120%2C+Ferndale%2C+WA+98248!5e0!3m2!1sen!2sus!4v1549651214615"
								 width="550" height="465" class="embed-responsive-item" style="border: 1px solid black" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>	
	</div>
	<br />
    <?php include('includes/services.php') ?>
	<br />
	<hr>

	<div class="container">
		<h3 class="page-title">Testimonials</h3>
		<div class="row mb-3">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:100%;text-align:center;">
  				<div class="carousel-inner">
   					<div class="carousel-item active">
      					<div class="card">
							<div class="card-body testimonial-body">
								<h5 class="card-title d-none">Testimonial 1</h5>
								<p class="card-text testimonial">&ldquo;The service was great! I really enjoyed the experience!
								I've been telling everyone I know to try it out. Can't wait to do it again!&rdquo;</p>
							</div>
							<div class="card-footer text-center testimonial-author">
								<p>&mdash; Richard K.</p>
							</div>
						</div>
    				</div>
    				<div class="carousel-item">
     					<div class="card">
							<div class="card-body testimonial-body">
								<h5 class="card-title d-none">Testimonial 2</h5>
								<p class="card-text testimonial">&ldquo;I really felt a difference in my body following the massage.
								I truly needed it. Thanks again for the excellent service!&rdquo;</p>
							</div>
							<div class="card-footer text-center testimonial-author">
								<p>&mdash; Xavier R.</p>
							</div>
						</div>
    				</div>
    				<div class="carousel-item">
      					<div class="card">
							<div class="card-body testimonial-body">
								<h5 class="card-title d-none">Testimonial 3</h5>
								<p class="card-text testimonial">&ldquo;As an active athlete, I've seen improvements in my performance,
									and my body feels more healthy and less painful thanks to Glenn.&rdquo;
								</p>
							</div>
							<div class="card-footer text-center testimonial-author">
								<p>- Richelle S.</p>
							</div>
						</div>
    				</div>
  				</div>
  				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="background-color:#444;color:#444;width:5%;">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="background-color:#444;color:#444;width:5%;">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  				</a>
			</div>
		</div>
	</div>

</main>

<?php
//============================END PAGE CONTENT=============================//
	$MAINCONTENT=ob_get_contents();
	ob_end_clean();
	include_once('template.php');
	ob_end_flush();
?>