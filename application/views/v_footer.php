<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
	<div class="flex-w p-b-90">
		<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				GET IN TOUCH
			</h4>

			<div>
				<p class="s-text7 w-size27">
					Ada pertanyaan ? silahkan datang ke kantor kami di Jalan X atau hubungi 0900000
				</p>

				<div class="flex-m p-t-30">
					<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
					<a href="https://www.instagram.com/perabotrumahtangga.murah" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
				</div>
			</div>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">

		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Links
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Search
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						About Us
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						Contact Us
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Help
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="#" class="s-text7">
						Complain
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						How to use
					</a>
				</li>

				<li class="p-b-9">
					<a href="#" class="s-text7">
						FAQs
					</a>
				</li>
			</ul>
		</div>

		<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				Newsletter
			</h4>

			<form>
				<div class="effect1 w-size9">
					<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="mamatata@gmail.com">
					<span class="effect1-line"></span>
				</div>

				<div class="w-size2 p-t-20">
					<!-- Button -->
					<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
						Subscribe
					</button>
				</div>

			</form>
		</div>
	</div>

	<div class="t-center p-l-15 p-r-15">
		<div class="t-center s-text8 p-t-20">
			Copyright © 2018 All rights reserved.
		</div>
	</div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>




<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/select2/select2.min.js"></script>
<script type="text/javascript">
	$(".selection-1").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect1')
	});

	$(".selection-2").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect2')
	});
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/sweetalert/sweetalert.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
	$('.block2-btn-addcart').each(function () {
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function () {
			swal(nameProduct, "is added to cart !", "success");
		});
	});

	$('.block2-btn-addwishlist').each(function () {
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function () {
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});
</script>
<!--================================= DETAIL PRODUCT PAGE ============================================-->
<script type="text/javascript">
	$('.add_cart').each(function () {
		var nameProduct = $(this).parent().parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function () {
			swal(nameProduct, "is added to cart !", "success");
		});
	});

	$('.block2-btn-addwishlist').each(function () {
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function () {
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});
</script>
<!--===============================================================================================-->
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click','.add',function(){
			var product_id    = $(this).data("id");
			var product_name  = $(this).data("name");
			var product_price = $(this).data("price");
			var quantity   	  = $('#' + product_id).val();
			$.ajax({
				url : "<?php echo site_url('cart/add_to_cart');?>",
				method : "POST",
				data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				},
				error: function(data) {
             		alert('Exception:', exception);
         		}
			});
		});

		$(document).on('click','.update_cart',function(){
			var row_id=$(this).attr("id"); 
			var quantity   	  = $('#' + row_id).val();
			$.ajax({
				url : "<?php echo site_url('cart/update_cart');?>",
				method : "POST",
				data : {row_id: row_id, quantity: quantity},
				success: function(data){
					$('#table_cart').html(data);
				}
			});
		});

		$('#detail_cart').load("<?php echo site_url('cart/load_cart');?>");
		$('#table_cart').load("<?php echo site_url('cart/load_detail_cart');?>");
		
		$(document).on('click','.romove_cart',function(){
			var row_id=$(this).attr("id"); 
			$.ajax({
				url : "<?php echo site_url('cart/hapus_cart');?>",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
				}
			});
		});
	});
</script>
<!--===============================================================================================-->
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click','.check_out',function(){
			$.ajax({
				url : "<?php echo site_url('cart/check_out');?>",
				method : "GET",
				data : 'hello',
				success :function(data){
					// $('#checkout').html(data);
					// window.location.href = 'main.html';
				}
			});
		});
	});
</script>
<!--===============================================================================================-->
<script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>