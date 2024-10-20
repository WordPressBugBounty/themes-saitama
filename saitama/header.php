<?php
/**
 * The header for our theme.
 *
 * @package  saitama
 * @license  GNU General Public License v2.0
 * @since    saitama 1.0
 */

$options = get_option('saitama_theme_options');
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>

<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head();?>
</head>

<body <?php body_class();?> id="cc-<?php get_template();?>">
<?php wp_body_open(); ?>
<div class="wrapper">

	<div class="header header-v1 header-sticky">
		<div class="topbar-v1">
			<div class="container">
				<div class="row">

					<div class="col-md-6">
						<?php saitama_rtn_head_text();?>
					</div>

					<div class="col-md-6">
						<ul class="list-inline top-v1-data">
							<li><a href="<?php echo esc_url(home_url()); ?>"><i class="fa fa-home"></i></a></li>
							<?php if (get_bloginfo('description')): ?>
							<li><?php bloginfo('description');?></li>
							<?php endif;?>
						</ul>
					</div>

				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .topbar-v1 -->

		<div class="navbar navbar-default mega-menu" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle cc-keyColor" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="fa fa-bars"></span>
					</button>
					<a href="<?php echo esc_url(home_url()); ?>" rel="home">
					<?php if (!empty($options['site_logo_image'])): ?>
						<img id="logo-header" src="<?php echo $options['site_logo_image']; ?>" alt="<?php bloginfo('name');?>" />
					<?php else: ?>
						<span id="title-header"><?php echo bloginfo('name'); ?></span>
					<?php endif;?>
					</a>
				</div><!-- .navbar-header -->

				<?php
$args = array(
    'theme_location' => 'GlobalNav',
    'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
    'menu_class' => 'nav navbar-nav',
    'fallback_cb' => '',
    'echo' => false,
    'walker' => new saitama_walker(),
);
if ( has_nav_menu('GlobalNav') ):
	$gMenu = wp_nav_menu($args);
    $gMenu = apply_filters('saitama_gMenu', $gMenu);
    echo $gMenu;

else:
?>
					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<?php wp_list_pages(array('title_li' => '', 'walker' => new saitama_walker_page()));?>
						</ul>
					</div>
				<?php endif;?>

			</div><!-- .container -->
		</div><!-- .navbar .navbar-default .mega-menu -->

	</div><!-- .header -->
