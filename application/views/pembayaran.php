		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html">Home</a>
							<i>|</i>
						</li>
						<li>Payment </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--// header_top -->
		<!--Payment-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">Payment </h3>
					<div class="btn btn-sm btn-dark">
						<?php
						$grand_total = 0;
						if ($keranjang = $this->cart->contents()) {
							foreach ($keranjang as $items) {
								$grand_total = $grand_total + $items['subtotal'];
							}
							echo "<h4>Total payment : Rp " . number_format($grand_total, 0, ',', '.');

						?>
					</div>

					<!--/tabs-->
					<div class="responsive_tabs">
						<div id="horizontalTab">
							<div class="resp-tabs-container">
								<div class="vertical_post check_box_agile">
									<h4 style="text-align: center">Add a new Details</h4>
									<form action="<?= base_url('dashboard/bayar') ?>" method="post" class="creditly-card-form agileinfo_form">
										<section class="creditly-wrapper wrapper">
											<div class="information-wrapper">
												<div class="first-row form-group">
													<div class="controls">
														<label class="control-label">Full name : </label>
														<input class="billing-address-name form-control" type="text" name="nama" placeholder="Full name" required>
													</div>
													<div class="card_number_grids">
														<div class="card_number_grid_left">
															<div class="controls">
																<label class="control-label">Mobile number :</label>
																<input class="form-control" type="text" name="number" placeholder="Mobile number" required>
															</div>
														</div>
														<div class="card_number_grid_right">
															<div class="controls">
																<label class="control-label">Address : </label>
																<input class="form-control" type="text" name="alamat" placeholder="Landmark" required>
															</div>
														</div>
														<div class="clear"> </div>
													</div>
													<div class="controls">
														<label class="control-label">Type shipping : </label>
														<select class="form-control option-w3ls" name="kirim">
															<option>JNE</option>
															<option>JNT</option>
															<option>TIKI</option>
															<option>POS INDONESIA</option>
														</select>
													</div><br>
													<div class="controls">
														<label class="control-label">Select BANK : </label>
														<select class="form-control option-w3ls">
															<option>BCA - 33435436576576</option>
															<option>BNI - 365767879654</option>
															<option>BRI- 89765543</option>
															<option>MANDIRI - 56588467364</option>
														</select>
													</div>
												</div>
												<button class="submit check_out">Payment </button>
											</div>
										</section>
									</form>
								<?php
							} else {
								echo "<h4>You haven't selected the item";
							} ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>