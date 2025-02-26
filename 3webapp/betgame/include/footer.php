
<script src="assets/js/jquery.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/js/dz.carousel.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>

<script>
	$(".select-amount").click(function(event) {
        	$(".select-amount").removeClass("selected");
        	$(this).addClass("selected");
	    	final_amount = amount = $(this).data('amt');
	        $('#bet-amount').val(amount);
	        $(".amount-selected").html(final_amount);
	        amount_calculate();
	    }); 
</script>












</body>
</html>