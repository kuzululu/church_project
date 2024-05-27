<section id="contact" class="parallax-window" data-parallax="scroll" data-image-src="img/img/contact.jpg">
	
	<div class="container">
		<div class="row text-center">
			<div class="fs-1 text-uppercase fw-bolder text-light animated fadeIn infinite">Contact</div>
		</div>

		<div class="row">
			<div class="col-md-6 msg-contact p-md-3">
				<?php require_once "map.php"; ?>
				<div class="row mt-3 fs-5">
					<div class="col-md-4">
						<i class="fa-solid fa-phone"></i>: 0906 271 2197
					</div>
					<div class="col-md-8">
						<i class="fa-solid fa-envelope"></i>: sacredheart_kamuning@yahoo.com
					</div>
				</div>

				<div class="row mt-3 fs-5">
					<div class="col-md-12">
						<i class="fa-solid fa-church"></i>: 28 Scout Ybardolaza Street, Barangay Sacred Heart, Kamuning, Philippines
					</div>
				</div>

			</div>

			<div class="col-md-6 contact-msg">
				<form class="row needs-validation" method="POST" novalidate="" action="<?php htmlspecialchars("PHP_SELF"); ?>">

				<div class="col-md-12 mb-3">
					<label>Name:</label>
					<div class="input-group">
						<span class="input-group-text"><i class="fas fa-user text-primary"></i></span>
						<input type="text" name="name" class="form-control" placeholder="Name" required="">
					</div>
				</div>

				<div class="col-md-12 mb-3">
					<label>Email:</label>
					<div class="input-group">
						<span class="input-group-text"><i class="fas fa-envelope-square text-primary"></i></span>
						<input type="email" name="email" class="form-control" placeholder="Email" required="">
					</div>
				</div>

				<div class="col-md-12 mb-3">
					<label>Message</label>
					<textarea class="form-control textarea" rows="9" name="message" required=""></textarea>
				</div>

				<div class="col-md-12 mb-3 text-end">
					<input type="submit" name="btnSend" class="btn btn-lg btn-primary" value="Send">
				</div>
					
				</form>
			</div>
		</div>
	</div>

</section>