<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
	$pagetitle="Gua Sha Massage | Natural Healthy &amp; Strong Massage";
	$metadesc="Natural Healthy & Strong™ provides quality and affordable Gua Sha massages. Call or set up an appointment online today.";
	$metakeywords="Massage, Massage Therapy, Massage Therapist, Health, Pain Relief, Stress Relief, Wellness, Gua Sha, Gua Sha Massage";
//===========================CALLBACK FUNCTION============================//
	function callback($buffer){return ($buffer);}  // return complete page
	ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>
	
<main>
	<div class="container">
		<section class="section-inner body main-inner-body">
			<h2 class="page-title">Gua Sha Massage</h2>
			<div class="container-fluid container-fluid-zero main-body">
				<div class="row">
					<div class="col-sm-12">
						<article class="inner-body body-copy">
							<h5 class="sr-only">About the Gua Sha Massage</h5>
							<p>Gua Sha is an ancient technique originating in China and used throughout Asia that is finally gaining attention in the West.
							</p><p>It is a scraping-type massage used to relieve pain and stiffness, as well as other symptoms such as fevers, chills, and coughs.
							</p><p>The cutaeous stimulation that occurs with each pressured stroke with a round-edged tool results in small red petechiae.
							</p><p>The petechiae will dissappear within 2-3 days, and the process will promote circulation and other metabolic processes. 
							</p><p>Gua Sha is reported to prevent and treat illnesses including upper respiratory and digestive problems, and many other acute or chronic
							disorders.</p>
							<div class="text-center">
								<button type="button" class="btn btn-lg btn-success" onclick="window.open('media/forms/gua-sha-release-form.pdf', '_blank')">Gua Sha Release Form</button>
							</div>
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