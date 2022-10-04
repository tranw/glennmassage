<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
	$pagetitle="Hot Stone Massage | Natural Healthy &amp; Strong Massage";
	$metadesc="Natural Healthy & Strong™ provides quality, affordable hot stone massages. Call or set up an appointment online today.";
	$metakeywords="Massage, Massage Therapy, Massage Therapist, Health, Pain Relief, Stress Relief, Wellness, Hot Stone, Hot Stone Massage";
//===========================CALLBACK FUNCTION============================//
	function callback($buffer){return ($buffer);}  // return complete page
	ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>
    
<main>
	<div class="container">
		<section class="section-inner body main-inner-body">
			<h2 class="page-title">Hot Stone Massage</h2>
			<div class="container-fluid container-fluid-zero main-body">
				<div class="row">
					<div class="col-sm-12">
						<article class="inner-body body-copy">
							<h5 class="sr-only">About the Hot Stone Massage</h5>
							<p>Using warmed basalt stones to apply heat and pressure, this calming technique will melt your muscle tension away. This unique experience is a must-try for everyone!</p>
							<p>Before using the stones, your practitioner will use traditional <a href="swedish.php">Swedish massage</a> to prepare your body and relax your muscles.
							</p><p>The stones will be heated to approximately 125 to 135 degrees farenheit then pressed against your body to massage your muscles. 
								</p><p>The pressure and heat are very soothing and therapeutic. You will feel a release of tension and stress during the session.</p>
							<p>Hot stone massage can be very beneficial for circulation and mood elevation. Utilizing the hot stone technique also can help relieve
								chronic aches and pains.&nbsp;</p>
							<p>Come try this unique and effective massage today!</p>
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