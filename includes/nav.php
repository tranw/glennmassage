<nav class="navbar navbar-light bg-light navbar-expand-sm fixed-top">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="/"><img src="media/logos/massage_logo_color_trans.png" alt="Natural Healthy & Strong Massage logo" height="97" width="150" /></a>
		<div class="collapse navbar-collapse" id="Navbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link <?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">Home</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?= ($activePage != 'index') ? 'active':''; ?>" href="#" id="serviceDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					 aria-expanded="false">Services</a>
					<div class="dropdown-menu" aria-labelledby="serviceDropdown">
						<a class="nav-link" href="deep-tissue.php">Deep Tissue</a>
						<a class="nav-link" href="sports.php">Sports</a>
						<a class="nav-link" href="stretch.php">Stretch</a>
						<a class="nav-link" href="swedish.php">Swedish</a>
						<a class="nav-link" href="trigger-point.php">Trigger Point</a>
						<div class="dropdown-divider"></div>
						<a class="nav-link" href="gua-sha.php">Gua Sha</a>
						<a class="nav-link" href="hot-stone.php">Hot Stone</a>
						<a class="nav-link" href="prenatal.php">Prenatal</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link font-weight-bold book-button">Book Now!</a>
				</li>
			</ul>
		</div>
		<span class="navbar-text">
			<a class="font-weight-bold" href="tel:+13602091973">360.209.1973</a><br />
			<small>7052&nbsp;Portal&nbsp;Way,&nbsp;Unit&nbsp;120<br />
				Ferndale,&nbsp;WA&nbsp;98248</small>
		</span>
	</div>
</nav>