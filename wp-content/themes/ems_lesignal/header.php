<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<title>L'instant gâteau</title>

	<meta name="description" content="Pâtisserie, Cake Design">

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport"
	      content="initial-scale=1, width=device-width, minimum-scale=1, user-scalable=no, maximum-scale=1, width=device-width, minimal-ui">
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

<header>

	<div class="content">
		<a id="logo" href="/"></a>

		<a id="logo_mobile" href="/">
			<div class="icon"></div>
		</a>
		<div id="burger">
			<div class="icon"></div>
		</div>


		<?php if ( has_nav_menu( 'header-menu' ) ) : ?>

			<nav id="site-navigation" class="main-navigation" role="navigation"
			     aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class'     => 'primary-menu',
				) );
				?>
			</nav>

		<?php endif; ?>

	</div>
</header>

<div class="content">
<?php if ( get_field( 'header' ) ): ?>
<section class="slideheader">

	<?php if ( $post->post_name == "accueil" ): ?>

		<!--<div class="logowhite"></div>-->

	<?php endif; ?>

	<?php

	$images = get_field( 'header' );

	$body_class = get_body_class();

	$height = 600;

	$home = "";


	if ( in_array( "home", $body_class ) ) {
		$home = "home";
		$height = 600;
	}

	if ( count( $images ) == 1 ):

		$image = $images[0];

		$thumb = $image['sizes']['header-slide'];

		if ( in_array( "home", $body_class ) ) {
			$thumb = $image['sizes']['header-home'];
			$thumb_mob = $image['sizes']['header-home_mob'];

			?>

			<div class="oneimage mobile <?php echo $home; ?>"
			     style="background-image: url('<?php echo $thumb_mob; ?>')" data-width="600"
			     data-height="<?php echo $height; ?>" data-height-mobile="600"></div>

			<?php

		}

		?>

		<div class="oneimage <?php echo $home; ?>"
		     style="background-image: url('<?php echo $thumb; ?>')" data-width="1320"
		     data-height="<?php echo $height; ?>" data-height-mobile="1320"></div>

	<?php else: ?>


		<div id="slides" class="slidesjs" data-size="<?php echo count( $images ); ?>"
		     data-height="<?php echo $height; ?>">
			<?php foreach ( $images as $image ):

				$thumb = $image['sizes']['header-slide'];

				if ( in_array( "home", $body_class ) ) {
					$thumb = $image['sizes']['header-home'];
				}

				?>

				<div style="background-image: url('<?php echo $thumb; ?>')"></div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<div class="gradient"></div>

</section>
<?php endif; ?>