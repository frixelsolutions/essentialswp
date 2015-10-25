<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<div class="input-group">
	    <input type="text" class="form-control" placeholder="Search..." value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s">
	    <span class="input-group-btn">
	        <button class="btn btn-default" type="submit" id="searchsubmit" value="Search">Search</button>
	    </span>
	</div><!-- /input-group -->
</form>