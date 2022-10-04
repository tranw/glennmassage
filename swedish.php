<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
	$pagetitle="Swedish Massage | Natural Healthy &amp; Strong Massage";
	$metadesc="Natural Healthy & Strong™ provides quality, affordable Swedish massages. Call or set up an appointment online today.";
	$metakeywords="Massage, Massage Therapy, Massage Therapist, Health, Pain Relief, Stress Relief, Wellness, Swedish, Swedish Massage";
//===========================CALLBACK FUNCTION============================//
	function callback($buffer){return ($buffer);}  // return complete page
	ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>
    
<main>
	<div class="container">
		<section class="section-inner body main-inner-body">
			<h2 class="page-title">Swedish Massage</h2>
			<div class="container-fluid container-fluid-zero main-body">
				<div class="row">
					<div class="col-sm-12">
						<article class="inner-body body-copy">
							<h5 class="sr-only">About the Swedish Massage</h5>
							<p>Realize true relaxation with a traditional Swedish massage. The soothing powers of Swedish massage helps blood circulation, relieve scar tissue and general tense muscles.</p>
							
							<p>Swedish massage uses soft, long strokes and special massage techniques such as effleurage,	petrissage, friction and tapotement.
							<p>This commonly utilized massage therapy is known to be 
									beneficial to relieving muscle tension, improving circulatio and helping with scar tissue.</p>
								
							<p>Swedish massage was originally developed by a Swedish doctor, Dr. Pehr Henrik Ling in the 1800s, and it is still used widely today.</p>

							<p>Set up an appointment and learn the benefits of Swedish massage yourself!&nbsp;</p>
							
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