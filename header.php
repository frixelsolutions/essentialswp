<html>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="<?php echo get_bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<title><?php echo get_bloginfo ( 'name' );  ?></title>
	<link rel="icon" href="<?php echo get_bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="<?php echo get_bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon"/>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>
	
	<div id="header">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-8">
					<a href="<?php echo get_bloginfo('url'); ?>"><h1><?php echo get_bloginfo('name'); ?></h1></a>
					<h2><?php echo get_bloginfo ( 'description' );  ?></h2>
				</div>
				<div class="col-md-4">
					<?php if ( is_active_sidebar( 'header-widget' ) ) : ?>
					<div id="header-widget" class="header-widget widget-area" role="complementary">
						<?php dynamic_sidebar( 'header-widget' ); ?>
					</div><!-- #sidebar -->
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div id="navigation">
		<nav class="navbar navbar-default" role="navigation">
			<div class="wrapper">
				<div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-nav">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>

			        <?php
			            wp_nav_menu( array(
			                'menu'              => 'Primary Menu',
			                'theme_location'    => 'primary-menu',
			                'depth'             => 2,
			                'container'         => 'div',
			                'container_class'   => 'collapse navbar-collapse',
			        		'container_id'      => 'responsive-nav',
			                'menu_class'        => 'nav navbar-nav',
			                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                'walker'            => new wp_bootstrap_navwalker())
			            );
			        ?>
			    </div>
			</div>
		</nav>
	</div>