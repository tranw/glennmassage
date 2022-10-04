<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
	$pagetitle="Stretch Massage | Natural Healthy &amp; Strong Massage";
	$metadesc="Natural Healthy & Strong™ provides quality, affordable stretch massages. Call or set up an appointment online today.";
	$metakeywords="Massage, Massage Therapy, Massage Therapist, Health, Pain Relief, Stress Relief, Wellness, Stretch, Stretch Massage";
//===========================CALLBACK FUNCTION============================//
	function callback($buffer){return ($buffer);}  // return complete page
	ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>
    
<main>
	<div class="container">
		<section class="section-inner body main-inner-body">
			<h2 class="page-title">Stretch Massage</h2>
			<div class="container-fluid container-fluid-zero main-body">
				<div class="row">
					<div class="col-sm-12">
						<article class="inner-body body-copy">
							<h5 class="sr-only">About the Stretch Massage</h5>
							<p>For tight muscles or joints with a limited range of motion, stretch massage can help you recover and loosen your limbs.</p>
							
							<p>On top of  alleviating strain on your joints, stretch massage has other benefits, including:</p>
							<ul>
							<li>Better flexibility</li>
							
							<li>Enhanced posture</li>
							
							<li>Inproved range of motion</li>
							
							<li>Better circulation</li>
							
							</ul>
							
							<p>At Natural Healthy and Strong Massage, our therapists are certified and trained in using stretch massage
								techniques that are safe and effecitve, so you can feel comfortable during your entire session.</p>
							
							<p>Talk to your therapist about adding stretching into your massage session and feel the
									benefits for yourself!</p>
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