


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
						Categories
					</h4>

					<ul class="p-b-54">
						<li class="p-t-4">
							<a href="#" class="s-text13 active1">
								All
							</a>
						</li>

						<li class="p-t-4">
							<a href="#" class="s-text13">
								Women
							</a>
						</li>

						<li class="p-t-4">
							<a href="#" class="s-text13">
								Men
							</a>
						</li>

						<li class="p-t-4">
							<a href="#" class="s-text13">
								Anak-anak
							</a>
						</li>

						<li class="p-t-4">
							<a href="#" class="s-text13">
								Accesories
							</a>
						</li>

						<li class="p-t-4">
							<a href="#" class="s-text13">
								Perabot
							</a>
						</li>
					</ul>

					<!--  -->
					<h4 class="m-text14 p-b-32">
						Filters
					</h4>

					<div class="filter-price p-t-22 p-b-50 bo3">
						<div class="m-text15 p-b-17">
							Harga
						</div>

						<div class="wra-filter-bar">
							<div id="filter-bar"></div>
						</div>

						<div class="flex-sb-m flex-w p-t-16">
							<div class="w-size11">
								<!-- Button -->
								<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
									Filter
								</button>
							</div>

							<div class="s-text3 p-t-10 p-b-10">
								Rp.<span id="value-lower">0</span> - Rp.<span id="value-upper">0</span>
							</div>
						</div>
					</div>



					<div class="search-product pos-relative bo4 of-hidden">
						<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Cari Produk...">

						<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
							<i class="fs-12 fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!--  -->
				<div class="flex-sb-m flex-w p-b-35">
					<div class="flex-w">
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-2" name="sorting">
								<option>Default Sorting</option>
								<option>Popularity</option>
								<option>Price: low to high</option>
								<option>Price: high to low</option>
							</select>
						</div>
					</div>

					<span class="s-text8 p-t-5 p-b-5">
						Showing 1–12 of 16 results
					</span>
				</div>

				<!-- Product -->
				<div class="row">
					<?php foreach ($product as $product): ?>
					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative ">
								<img src="<?php echo base_url().'upload/product/'.$product->product_image ?>" alt="IMG-PRODUCT">
								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<input class="quantity size8 m-text18 t-center num-product" id="<?php echo $product->product_id;?>" type="hidden" name="quantity" value="1">									
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="add flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" data-id="<?php echo $product->product_id;?>" data-name="<?php echo $product->product_name;?>" data-price="<?php echo $product->product_price;?>">
												Add to Cart
											</button>
										</div>
															
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?php echo base_url().'web/product_detail/'?><?php echo $product->product_id ?>" class="block2-name dis-block s-text3 p-b-5">
									<?php echo $product->product_name ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									<!-- $75.00 -->
									<?php 
									echo "Rp " . number_format($product->product_price , 2, ",", ".");
									?>
									
								</span>
							</div>
						</div>
					</div>
					<?php endforeach;?>
				</div>

				<div class="col-md-4">
						<h4>Shopping Cart</h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Items</th>
									<th>Price</th>
									<th>Qty</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody id="detail_cart">
							</tbody>
						</table>
					</div>

				<!-- Pagination -->
				<div class="pagination flex-m flex-w p-t-26">
					<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
					<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
				</div>
			</div>
		</div>
	</div>
</section>

