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
									<li class="active"><a href="#autoboek">1. Automerk</a></li>
									<li><a href="autoboek-2.php#autoboek">2. Model</a></li>
									<li><a href="autoboek-3.php#autoboek">3. Productoverzicht</a></li>
									<li><a href="autoboek-4.php#autoboek">4. Productdetails</a></li>
								</ul>
							</div>
							<?php
								for ( $i=0; $i<27; $i++ ){
									?>
									<div class="col-md-2 col-sm-3 col-xs-6">
										<a href="autoboek-2.php#autoboek" class="brand-holder">
											<img src="<?= $root_url; ?>assets/img/brand-alfa-romeo.png" alt="" />
										</a>
									</div>
									<?php
								}
							?>

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