<?php include('includes/header.php'); ?>

<main>
	<div class="container">
		<!-- BIG HEADER IMAGE -->
		<div class="row">
			<div class="col-md-12">
				<section>
					<div class="header-bg" style="background-image: url('<?= $root_url; ?>assets/img/hdr-img-2.jpg');"></div>
				</section>
			</div>
			<!-- CONTACT FORM -->
			<div class="col-md-10 col-md-push-1">
				<div class="txt-holder indent">
					<div class="no-border-block"></div>
					<div class="border-block">
						<div class="content">
							<h2 class="title">Contactformulier</h2>
							<form onsubmit="">
								<div class="form-group row">
									<div class="col-md-4 col-sm-6 col-xs-12">
										<input class="form-control" id="name" type="text" placeholder="Naam">
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12">
										<input class="form-control" id="mail" type="email" placeholder="E-mail adres">
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<input class="form-control" id="subject" type="text" placeholder="Onderwerp">
									</div>
									<div class="col-xs-12">
										<select class="form-control">
											<option>Optie 1</option>
											<option>Optie 2 Optie 2</option>
											<option>Optie 3 Optie 3 Optie 3</option>
										</select>
									</div>
									<div class="col-xs-12">
										<textarea class="form-control" id="message" rows="6" placeholder="Bericht"></textarea>
									</div>
									<div class="col-xs-12">
										<input type="submit" name="send-msg" id="sens-msg" value="Verstuur" />
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="general-content">
				<div class="col-md-10 col-md-push-1">
					<div class="col-md-5 text-center no-side-padding">
						<h2>Contactgegevens</h2>
						<p>
							Auto Elect B.V.<br />
							Marsweg 23<br />
							3893 GB Zeewolde<br />
							+31 (0)36 202 20 10<br />
							www.auto-elect.nl<br /><br />
						</p>
					</div>
					<div class="col-md-7">
						<div class="google-maps">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2437.7078023500503!2d5.5190904158007426!3d52.33944677978049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6309625e8026f%3A0x17220f851c26eb54!2sMarsweg+23%2C+3893+GB+Zeewolde!5e0!3m2!1sen!2snl!4v1494700258986" width="600" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>						</div>
					</div>
				</div>
			</div>
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