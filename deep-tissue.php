<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
	$pagetitle="Deep Tissue Massage | Natural Healthy &amp; Strong Massage";
	$metadesc="Natural Healthy & Strong™ provides quality and affordable deep tissue massages. Call or set up an appointment online today.";
	$metakeywords="Massage, Massage Therapy, Massage Therapist, Health, Pain Relief, Stress Relief, Wellness, Deep Tissue, Deep Tissue Massage";
//===========================CALLBACK FUNCTION============================//
	function callback($buffer){return ($buffer);}  // return complete page
	ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>
    
<main>
	<div class="container">
		<section class="section-inner body main-inner-body">
			<h2 class="page-title">Deep Tissue Massage</h2>
			<div class="container-fluid container-fluid-zero main-body">
				<div class="row">
					<div class="col-sm-12">
						<article class="inner-body body-copy">
							<h5 class="sr-only">About the Deep Tissue Massage</h5>
							<p>Deep Tissue massage is a highly therapeutic therapy designed to apply pressure deep under the skin, through layers of muscle. It can be very effective at relieving chronic problem areas.
							</p><p>Whether you are an athlete or working a 9-5 desk job, repetetive, intense motions and poor posture or seats can cause pain and strain deep under layers of muscle that is hard to reach.</p>
							</p><p>Deep tissue is one of the most popular massage thearpies at Natural Healthy & Strong Massage studios and our massage
								therapists excel in this form of massage.
								</p><p>We pride ourselves on finding the right massage for your specific needs at Natural Healthy & Strong
								Massage in order to meet your needs and make your feel comfortable and relaxed.</p>
							</p><p>Issues of chronic pain or general tense knots that need therapeutic relief are frequently treated deep tissue massage.
							</p><p>Natural Healthy & Strong Wellness Program is an affordable and professional office that you can trust with your health and wellness. &nbsp;</p>
							<p>If you are looking for a customized deep tissue massage, look no further than Natural Healthy & Strong Massage.&nbsp;</p>
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