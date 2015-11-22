</div><!-- .wrapper -->
	<div id="footer">
		<?php if ( is_active_sidebar( 'footer-1-widget' ) ) : ?>
			<div id="footer1" class="styled-footer">
				<div class="wrapper">
					<div class="row">
						<div class="col-md-4">
							<?php if ( is_active_sidebar( 'footer-1-widget' ) ) : ?>
								<div id="footer-1-widget" class="footer-widget footer-1-widget widget-area" role="complementary">
									<?php dynamic_sidebar( 'footer-1-widget' ); ?>
								</div><!-- #sidebar -->
							<?php endif; ?>
						</div>
						<div class="col-md-4">
							<?php if ( is_active_sidebar( 'footer-2-widget' ) ) : ?>
								<div id="footer-2-widget" class="footer-widget footer-2-widget widget-area" role="complementary">
									<?php dynamic_sidebar( 'footer-2-widget' ); ?>
								</div><!-- #sidebar -->
							<?php endif; ?>
						</div>
						<div class="col-md-4">
							<?php if ( is_active_sidebar( 'footer-3-widget' ) ) : ?>
								<div id="footer-3-widget" class="footer-widget footer-3-widget widget-area" role="complementary">
									<?php dynamic_sidebar( 'footer-3-widget' ); ?>
								</div><!-- #sidebar -->
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div id="footer2" class="styled-footer">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-12">
						<p>Copyright &copy; 2015 <?php echo get_bloginfo ( 'name' );  ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script>
	$(".wc-tabs").addClass("nav");
	$(".wc-tabs").addClass("nav-tabs");
	$(".wc-tabs li a").attr("data-toggle","tab");
	$(".wc-tabs li:nth-of-type(1)").addClass("active");
	$(".wc-tabs").removeClass("wc-tabs");
	$(".woocommerce-tabs").addClass("tab-content");
	$(".tab-content div").attr("role","tabpanel");
	$(".tab-content div").addClass("tab-pane");
	$(".tab-content div:nth-of-type(1)").addClass("active");
	$(".wc-tabs li a").click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});
	$(".thumbnails").removeClass("columns-3");
	$(".onsale").html($(".onsale").html()+"<div class='overhang'></div>");
	$(".quantity").addClass("input-group");
	$(".quantity input").addClass("form-control");
	$(".cart button").wrap("<div class='input-group-btn'></div>").parent().appendTo(".cart .quantity");
	$(".cart button").addClass("btn btn-default");
	$(".shop_table").addClass("table table-striped table-bordered table-hover");
	$(".shop_table img").removeAttr("height");
	$(".shop_table img").removeAttr("width");
	$(".coupon").html('<div class="input-group pull-left"><input type="text" name="coupon_code" class="form-control" placeholder="Coupon Code"><span class="input-group-btn"><input name="apply_coupon" value="Apply Coupon" class="btn btn-default" type="button"></span></div><!-- /input-group -->');
	$(".actions .button").addClass("pull-right btn btn-default");
	$(".attachment-shop_catalog").removeAttr("height");
	$(".attachment-shop_catalog").removeAttr("width");
	$(".products .add_to_cart_button").addClass("btn btn-primary pull-right");
	$(".products .add_to_cart_button").removeClass("button");
	$(".woocommerce-message").addClass("alert alert-info");
	$(".woocommerce-message a").addClass("btn btn-sm btn-default");
	$(".orderby").addClass("form-control pull-right");
	$(".attachment-shop_single").attr("original-src",$(".attachment-shop_single").attr("src"));
	$(".attachment-shop_thumbnail").hover(function(){
		$(".attachment-shop_single").attr("src",$(this).attr("src").substring(0, $(this).attr("src").length - 12)+"-600x600.jpg");
	}, function(){
		if($(".attachment-shop_single").attr("selected-src") == null){
			$(".attachment-shop_single").attr("src", $(".attachment-shop_single").attr("original-src"));
		}else{
			$(".attachment-shop_single").attr("src", $(".attachment-shop_single").attr("selected-src"));
		}
	});
	$(".attachment-shop_thumbnail").click(function(e){
		e.preventDefault();
		$(".shop-thumbnail-selected").removeClass("shop-thumbnail-selected");
		$(this).addClass("shop-thumbnail-selected");
		$(".attachment-shop_single").attr("selected-src", ($(this).attr("src").substring(0, $(this).attr("src").length - 12)+"-600x600.jpg").replace("--", "-"));
	})
</script>

<?php wp_footer(); ?>

</body>
</html>