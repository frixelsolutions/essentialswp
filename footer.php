</div><!-- .wrapper -->
	<div id="footer">
<<<<<<< HEAD
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
=======
		<div class="wrapper">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy; 2015 <?php echo get_bloginfo ( 'name' );  ?></p>
>>>>>>> refs/remotes/origin/master
				</div>
			</div>
		</div>
	</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

</body>
</html>