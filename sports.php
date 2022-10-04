<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
	$pagetitle="Sports Massage | Natural Healthy &amp; Strong Massage";
	$metadesc="Natural Healthy & Strong™ provides quality, affordable sports massages. Call or set up an appointment online today.";
	$metakeywords="Massage, Massage Therapy, Massage Therapist, Health, Pain Relief, Stress Relief, Wellness, Sports, Sports Massage";
//===========================CALLBACK FUNCTION============================//
	function callback($buffer){return ($buffer);}  // return complete page
	ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>	

<main>
	<div class="container">
		<section class="section-inner body main-inner-body">
			<h2 class="page-title">Sports Massage</h2>
			<div class="container-fluid container-fluid-zero main-body">
				<div class="row">
					<div class="col-sm-12">
						<article class="inner-body body-copy">
						<h5 class="sr-only">About the Sports Massage</h5>
							<p>For casual or serious atheletes looking to improve their performance or relieve stiffness, muscle pain, or become more limber. Regular massage can help you reach your goals.</p>
							<p>Runners, yoga practicers, weight-lifters, bikers and swimmers will all benefits from a consulation with our professional massage therapists.</p>
							<p>Call us today to schedule an appointment and get started!</p>
						</article>
						<div class="text-center my-2">
							<button type="button" class="btn btn-lg btn-dark book-button"><i class="fa fa-calendar"></i>&ensp;Book an Appointment</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<hr>
	   <?php include('includes/services.php') ?>
	<br />
</main>

<?php
//============================END PAGE CONTENT=============================//
	$MAINCONTENT=ob_get_contents();
	ob_end_clean();
	include_once('template.php');
	ob_end_flush();
?>