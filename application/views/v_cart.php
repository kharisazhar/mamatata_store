	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Subtotal</th>
						</tr>
						
						<!-- <tbody id="table_cart"> -->
						<tbody>
							<?php foreach ($this->cart->contents() as $items): ?>
								<tr class="table-row">
									<td class="column-1">
										<div class="cart-img-product b-rad-4 o-f-hidden">
											<img src="<?php echo base_url()?>assets/images/item-10.jpg" alt="IMG-PRODUCT">
										</div>
									</td>
									<td class="column-2"><?php echo $items['name']; ?></td>
									<td class="column-3"><?php echo $items['price']; ?></td>
									<td class="column-4">
										<div class="flex-w bo5 of-hidden w-size17">
											<button class="update_cart btn-num-product-down color1 flex-c-m size7 bg8 eff2" id="<?php echo $items['rowid'] ?>">
												<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
											</button>

											<input class="size8 m-text18 t-center num-product" id="<?php echo $items['rowid'] ?>" type="number" name="" value="<?php echo $items['qty'] ?>" >

											<button class="update_cart btn-num-product-up color1 flex-c-m size7 bg8 eff2 " id="<?php echo $items['rowid'] ?>">							
												<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
											</button>
											
										</div>
									</td>
									<td class="column-5"> Rp. <?php echo $items['subtotal']; ?> </td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<!-- <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button> -->
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a class="update_cart flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" href="">
						Update Cart
					</a>
				</div>

				<!-- <?php foreach ($this->cart->contents() as $items): ?>
					<?php echo $items["name"]; ?>
				<?php endforeach; ?> -->
			</div>

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<?php echo  "Rp " . number_format($this->cart->total()); ?>
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<a id="checkout" href="<?php echo base_url('cart/check_out') ?>">
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Proceed to Checkout
						</button>
					</a>
				</div>
			</div>
		</div>
	</section>