<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
	<div class="flex-w flex-sb">
		<div class="w-size13 p-t-30 respon5">
			<div class="wrap-slick3 flex-sb flex-w">
				<div class="wrap-slick3-dots"></div>

				<div class="slick3">
					<div class="item-slick3" 
						data-thumb="../../upload/product/
								<?php foreach ($detail as $array => $row){
								echo ($row['product_image']);
								} ?>">
						<div class="wrap-pic-w">		
							<img 
								src="../../upload/product/
									<?php foreach ($detail as $array => $row){
									echo ($row['product_image']);
							} ?>" 
							alt="IMG-PRODUCT">
						</div>
					</div>

					<div class="item-slick3" data-thumb="<?php echo base_url()?>upload/product/default.jpg">
						<div class="wrap-pic-w">
							<img src="<?php echo base_url()?>assets/images/product-detail-02.jpg" alt="IMG-PRODUCT">
						</div>
					</div>

					<div class="item-slick3" data-thumb="<?php echo base_url()?>upload/product/default.jpg">
						<div class="wrap-pic-w">
							<img src="<?php echo base_url()?>assets/images/product.jpg" alt="IMG-PRODUCT">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="w-size14 p-t-30 respon5">
			<h4 class="block2-name product-detail-name m-text16 p-b-13">
				<!-- Boxy T-Shirt with Roll Sleeve Detail -->
				<!-- Jas Hujan Anak -->
				<?php foreach ($detail as $array => $row){
					// print_r($row);
					echo ($row['product_name']);
				} ?>
			</h4>

			<span class="m-text17">
				<?php foreach ($detail as $array => $row){
					// echo ($row['product_price']);
					echo "Rp " . number_format($row['product_price'], 2, ",", ".");
				} ?>
			</span>

			<p class="s-text8 p-t-10">
				<?php foreach ($detail as $array => $row){
					echo ($row['product_description']);
				} ?>
			</p>

			<!--  -->
			<div class="p-t-33 p-b-60">
				<div class="flex-m flex-w p-b-10">
					<div class="s-text15 w-size15 t-center">
						Size
					</div>

					<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
						<select class="selection-2" name="size">
							<option>Choose an option</option>
							<option>Size S</option>
							<option>Size M</option>
							<option>Size L</option>
							<option>Size XL</option>
						</select>
					</div>
				</div>

				<div class="flex-m flex-w">
					<div class="s-text15 w-size15 t-center">
						Color
					</div>

					<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
						<select class="selection-2" name="color">
							<option>Choose an option</option>
							<option>Gray</option>
							<option>Red</option>
							<option>Black</option>
							<option>Blue</option>
						</select>
					</div>
				</div>

				<div class="flex-r-m flex-w p-t-10">
					<div class="w-size16 flex-m flex-w">
						<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
							<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
								<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
							</button>

							<input class="quantity size8 m-text18 t-center num-product" id="<?php foreach ($detail as $array => $row){
									echo ($row['product_id']);
								} ?>" type="number" name="quantity" value="1">

							<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
								<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
							</button>
						</div>

						<button class="add btn btn-success btn-block" 
								data-id="<?php foreach ($detail as $array => $row){
									echo ($row['product_id']);
								} ?>" 
								data-name="<?php foreach ($detail as $array => $row){
									echo ($row['product_name']);
								} ?>" 
								data-price="<?php foreach ($detail as $array => $row){
									echo ($row['product_price']);
								} ?>"
								>Add To Cart</button>
					</div>

					<div class="col-md-4">
						<h4>Shopping Cart</h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Items</th>
									<th>Price</th>
									<th>Qty</th>
									<th>Total</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody id="detail_cart">
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="p-b-45">
				<!-- <span class="s-text8 m-r-35">SKU: MUG-01</span> -->
				<!-- <span class="s-text8">Categories: Mug, Design</span> -->
			</div>

			<!--  -->
			<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Description
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						<?php foreach ($detail as $array => $row){
							echo ($row['product_description']);
						} ?>
					</p>
				</div>
			</div>

			<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Informasi Tambahan
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						CANTUMKAN SIZE YANG DIORDER DI KOLOM KETERANGAN !! YANG DIJUAL HANYA JAS HUJAN, TIDAK BERIKUT SEPATU !! Detail
						Size :
						- M : LD 96 cm, P 67 cm
						- L : LD 100 cm, P 74 cm
						- XL : LD 104, P 81 cm
						- XXL : LD 108, P 86 cm
					</p>
				</div>
			</div>

			<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Reviews (0)
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin
						gravida arcu nisl, a dignissim mauris placerat
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Related Products
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				<?php foreach ($product as $product): ?>
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="<?php echo base_url().'upload/product/'.$product->product_image ?>" alt="IMG-PRODUCT">
								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div>
								</div>
							</div>
							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									<?php echo $product->product_name ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									<?php
										echo "Rp " . number_format($product->product_price, 2, ",", ".");	
									?>
								</span>
							</div>
						</div>
					</div>
				<?php endforeach;?>	
			</div>
		</div>
	</div>
</section>