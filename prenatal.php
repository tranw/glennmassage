<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
	$pagetitle="Prenatal Massage | Natural Healthy &amp; Strong Massage";
	$metadesc="Natural Healthy & Strong™ provides quality, affordable prenatal massages. Call or set up an appointment online today.";
	$metakeywords="Massage, Massage Therapy, Massage Therapist, Health, Pain Relief, Stress Relief, Wellness, Prenatal, Prenatal Massage";
//===========================CALLBACK FUNCTION============================//
	function callback($buffer){return ($buffer);}  // return complete page
	ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>
    
<main>
	<div class="container">
		<section class="section-inner body main-inner-body">
			<h2 class="page-title">Prenatal Massage</h2>
			<div class="container-fluid container-fluid-zero main-body">
				<div class="row">
					<div class="col-sm-12">
						<article class="inner-body body-copy">
							<h5 class="sr-only">About the Prenatal Massage</h5>
							<p>Nothing is more exciting than learning that you are pregnant. But also there nothing can prepare you for the changes that happen in your body.</p>
							<p>Pregnancy causes shifts in carried weight, which can result in aches, pains, muscle tension and general stress. Relief is possible with certified and trained professional prenatal massage. </p>
							<p>We hold your health and safety during pregnancy in the utmost importants and deliver the care and attention needed.a</p>
							<p>You will only ever be given a massage therapist with proper certification and training, so you can feel at ease.</p>
							<p>For the best results, we recomend you schedule a few appoints over the course of your pregnancy.</p>
							<p>Get your session booked today. You deserve it!&nbsp;</p>
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
	<div class="container mt-10">
		<div class="container-fluid container-fluid-zero-padding service-list-wrapper">
			<h3 class="page-title">Other Specialty Services</h3>
			<p class="page-subtitle-descr">Enhance your session with any of these premium services:</p>
			<div class="row">
				<div class="card-deck">
					<div id="gua-sha" class="card">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<h5 class="card-title">Gua Sha</h5>
							<p class="card-text">A healing technique which removes pathogenic blood stagnation, to promote normal circulation and
								metabolic processes.
								Relieves pain, stiffness, fever, chill, cough, and nausea. It is valuable in the prevention and treatment of acute
								infectious illnesses, upper respiratory and digestive problems, and other acute or chronic disorders.</p>
						</div>
						<div class="card-footer text-center">
							<a href="gua-sha.php" class="btn btn-success">Learn More</a>
						</div>
					</div>
					<div id="hot-stone" class="card">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<h5 class="card-title">Hot Stone Massage</h5>
							<p class="card-text">Warm basalt stones are used in this ancient technique. The stones will warm your body and loosen
								your muscles to allow
								for a release of tension and stress without adding extra pressure.</p>
						</div>
						<div class="card-footer text-center">
							<a href="hot-stone.php" class="btn btn-success">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<br />
			<h3 class="page-title">Standard Services</h3>
			<p class="page-subtitle-descr">Your massage should be as unique as you are. Our therapists will tailor your session
				to fit your exact needs. Click below to learn more about some of the most popular:</p>
			<div class="row">
				<div class="card-deck">
					<div id="deep-tisue" class="card">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<h5 class="card-title">Deep Tissue Massage</h5>
							<p class="card-text">Traditionally designed to apply pressure to layers of muscle, tendons and other tissues deep
								under the skin, deep
								tissue massage can be very effective in relieving problem areas and is highly therapeutic.</p>
						</div>
						<div class="card-footer text-center">
							<a href="deep-tissue.php" class="btn btn-success">Learn More</a>
						</div>
					</div>
					<div id="sports" class="card">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<h5 class="card-title">Sports Massage</h5>
							<p class="card-text">Whether you're a serious or occasional athlete, enjoying less muscle pain and stiffness, as
								well as improved
								performance is a good reason to get regular massage.</p>
						</div>
						<div class="card-footer text-center">
							<a href="sports.php" class="btn btn-success">Learn More</a>
						</div>
					</div>
					<div id="stretch" class="card">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<h5 class="card-title">Stretch Massage</h5>
							<p class="card-text">If your muscles are tight or your joints have limited range of motion, consider incorporating
								stretching into your
								massage. When combined with massage, stretching can help your Massage Therapist work more effectively with less
								restriction.</p>
						</div>
						<div class="card-footer text-center">
							<a href="stretch.php" class="btn btn-success">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="card-deck">
					<div id="swedish" class="card">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<h5 class="card-title">Swedish Massage</h5>
							<p class="card-text">The Swedish modality has one main focus: relaxation. However, Swedish is also beneficial by
								relieving muscle tension,
								increasing blood flow to critical areas and breaking down scar tissue.</p>
						</div>
						<div class="card-footer text-center">
							<a href="swedish.php" class="btn btn-success">Learn More</a>
						</div>
					</div>
					<div id="trigger-point" class="card">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<h5 class="card-title">Trigger Point Massage</h5>
							<p class="card-text">Trigger point therapy taps into the body’s internal web of muscles and tissues to unlock
								common chronic and injury-
								related pains caused by tension and stress.</p>
						</div>
						<div class="card-footer text-center">
							<a href="trigger-point.php" class="btn btn-success">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br />
</main>

<?php
//============================END PAGE CONTENT=============================//
	$MAINCONTENT=ob_get_contents();
	ob_end_clean();
	include_once('template.php');
	ob_end_flush();
?>