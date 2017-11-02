<?php include('includes/header.php'); ?>

<main>
	<div class="container">
		<!-- BIG HEADER IMAGE -->
		<div class="row">
			<div class="col-md-12">
				<section>
					<div class="header-bg" style="background-image: url('<?= $root_url; ?>assets/img/hdr-img-1.jpg');">
						<div class="col-md-10 col-md-push-1">
							<div class="txt-holder">
								Al meer dan 25 jaar de specialist op het gebied van hydraulische en elektrische stuurbekrachtiging.
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!-- 5 USP ICONS -->
		<div class="row">
			<section>
				<div class="usp-holder">
					<!---->
					<div class="col-md-custom col-sm-custom col-xs-custom">
						<div class="usp-icon hydraulics"></div>
						<div class="usp-txt">
							Hydraulische stuurbekrachtiging
						</div>
					</div>
					<!---->
					<div class="col-md-custom col-sm-custom col-xs-custom">
						<div class="usp-icon electric"></div>
						<div class="usp-txt">
							Elektrische stuurbekrachtiging
						</div>
					</div>
					<!---->
					<div class="col-md-custom col-sm-custom col-xs-custom">
						<div class="usp-icon electric-hydra"></div>
						<div class="usp-txt">
							Elektrische hydraulische stuurbekrachtiging
						</div>
					</div>
					<!---->
					<div class="col-md-custom col-sm-custom col-xs-custom">
						<div class="usp-icon sensors"></div>
						<div class="usp-txt">
							Automotive sensoren
						</div>
					</div>
					<!---->
					<div class="col-md-custom col-sm-custom col-xs-custom">
						<div class="usp-icon airco"></div>
						<div class="usp-txt">
							Air conditioning
						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- SITE WIDE DIDIVER -->
		<div class="row">
			<div class="col-md-12">
				<section>
					<div class="divider6"></div>
				</section>
			</div>
		</div>
		<!-- CONTENT AREA -->
		<div class="row">
			<section>
				<div class="inset-holder gen-txt-area">
					<div class="col-md-12">
						<h2 id="autoboek">Autoboek</h2>
						<div class="autoboek">

							<div class="col-md-12">
								<ul class="progress">
									<li><a href="autoboek.php#autoboek">1. Automerk</a></li>
									<li><a href="autoboek-2.php#autoboek">2. Model</a></li>
									<li class="active"><a href="#autoboek">3. Productoverzicht</a></li>
									<li><a href="autoboek-4.php#autoboek">4. Productdetails</a></li>
								</ul>
							</div>

							<div class="clearfix"></div>

							<div class="intro-txt-area">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<img src="<?= $root_url; ?>assets/img/aside-img-1.jpg" alt="" />
								</div>
								<div class="col-md-8">
									<p>BMW is een merk dat gelijk staat aan hoge kwaliteit. Om deze kwaliteit te handhaven heeft Auto Elect - Hydroline een groot assortiment aan airco compressoren, EPS stuurhuizen, gewone stuurhuizen en producten voor de stuurbekrachtiging van uw BMW. Bij ons vindt u altijd een ruime voorraad tegen scherpe prijzen. Kies hieronder uw BMW model en de beschikbare producten verschijnen in beeld. Staat het door uw gewenste BMW product er niet bij? Informeer naar de beschikbaarheid of de alternatieven bij één van onze medewerkers.</p>
								</div>
							</div>

							<div class="clearfix"></div>

							<div class="product-holder">
								<div class="col-xs-12">
									<h2 class="top-title">Productoverzicht</h2>
								</div>
								<div class="clearfix"></div>

								<?php
									for ( $i=0; $i<3; $i++ ) {
										?>
										<div class="product-box">
											<div class="col-md-3 col-sm-2 col-xs-12">
												<img src="<?= $root_url; ?>assets/img/product-img-stuurhuis-1.jpg" alt="" />
											</div>
											<div class="col-md-9 col-sm-10 col-xs-12">
												<h4 class="product-title">EPS stuurhuis <span>BMW-22-320 1 serie</span></h4>
												<p>Een elektronisch stuurhuis voor de BMW 1 Serie is de voorloper van de elektrische auto. Een EPS stuurhuis zorgt voor een zuiniger brandstofverbruik. Daarnaast helpt het systeem bij het rijden en parkeren in de stad met de vaak ingestelde 'citymode'. Wij reviseren EPS stuurhuizen voor de BMW 1 Serie. Onder meer informatie vindt u de mogelijkheden voor het EPS stuurhuis van uw BMW 1 Serie.</p>
												<a class="readmore-btn" href="autoboek-4.php#autoboek">Meer informatie</a>
											</div>
										</div>
										<div class="clearfix"></div>
										<?php
									}
								?>

							</div>

						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- SITE WIDE DIDIVER -->
		<div class="row">
			<div class="col-md-12">
				<section>
					<div class="divider6"></div>
				</section>
			</div>
		</div>
	</div>
</main>

<?php include('includes/footer.php'); ?>