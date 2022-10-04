<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
	$pagetitle="Trigger Point Massage | Natural Healthy &amp; Strong Massage";
	$metadesc="Natural Healthy & Strong™ provides quality, affordable trigger massages. Call or set up an appointment online today.";
	$metakeywords="Massage, Massage Therapy, Massage Therapist, Health, Pain Relief, Stress Relief, Wellness, Trigger Point, Trigger Point Massage";
//===========================CALLBACK FUNCTION============================//
	function callback($buffer){return ($buffer);}  // return complete page
	ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>
    
<main>
	<div class="container">
		<section class="section-inner body main-inner-body">
			<h2 class="page-title">Trigger Point Massage</h2>
			<div class="container-fluid container-fluid-zero main-body">
				<div class="row">
					<div class="col-sm-12">
						<article class="inner-body body-copy">
							<h5 class="sr-only">About the Swedish Massage</h5>
							<p>Trigger point massage therapy is a soothing method used to alleviate specific sources of the pain through targeted use of pressure and release.</p>
							<p>Trigger point isolates and unlocks problem areas within the network of muscles and tissues of the body, whether chronic or injury-related.</p>
							
							<p>Tissues can wear over time and may harden into little nodules that trigger point therapy can soften and smooth out using pulsating pressure applied in a targeted fashion.</P>
				
							
							<p>It is often advisable to combing multiple massage techniques with Trigger Point for maximum relaxion and effectivenss. </p>
								
							<p>Trigger point therapy has many benefits and can be very effective for treating many common myofascial and
									muscular conditions such as:</p>
							<ul>
							<li> Sciatica pain</li>
							
							<li>Plantar	fasciitis</a></li>
							
							<li> Shin splints</li>
							
							<li> Migraines</li>
							
							<li> Computer shoulder</li>
							
							<li>Chronic pain in joints such as stiff neck and back</li>
							
							<li> Rotator cuff injuries and/or immobility</li>
							</ul>
							
							<p>Contact us today to start your trigger point therapy!</p>

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