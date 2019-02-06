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
        
        $('#detail_cart').load("<?php echo site_url('cart/load_cart');?>");
		
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
<script>
    $(document).ready(function(){
            /*[ +/- num product ]
        ===========================================================*/
        $('.btn-num-product-down').on('click', function(e){
            e.preventDefault();
            var numProduct = Number($(this).next().val());
            if(numProduct > 1) $(this).next().val(numProduct - 1);
        });

        $('.btn-num-product-up').on('click', function(e){
            e.preventDefault();
            var numProduct = Number($(this).prev().val());
            $(this).prev().val(numProduct + 1);
        });
    });
</script>

</body>

</html>