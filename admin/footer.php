</div><!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
		   <div class="clearfix"></div>
		 </div>		 
	 </div>
</div>

<div class="copywrite">
	 <div class="container">
			 <p> © 2015 Goaway. All rights reserved | Design by onlinetripplanner</p>
	 </div>
</div>

<!---->
<script src="../js/lightbox-plus-jquery.min.js"></script>
<!---->
<!--/animatedcss-->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--script-->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
<script src="../js/responsiveslides.min.js"></script>
</body>
</html>