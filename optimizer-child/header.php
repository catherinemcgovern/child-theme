<?php 

/**

 * The Header for Optimizer

 *

 * Displays all of the <head> section and everything

 *

 * @package Optimizer

 * 

 * @since Optimizer 1.0

 */

/*OPTION DEFAULTS*/ 

global $optimizer;

$optimizer = optimizer_option_defaults();

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo( 'charset' ); ?>" />	

<?php // Google Chrome Frame for IE ?>

<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="profile" href="http://gmpg.org/xfn/11"/>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 
	<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Slab:700&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
<?php wp_head(); ?>

</head>



<body>

<!--HEADER-->

<div class="header_wrap layer_wrapper" style="background-color: orange">

	<?php get_template_part('template_parts/head','type1'); ?>

</div><!--layer_wrapper class END-->



	<!--Slider START-->

		<?php if (is_home() && is_front_page()) { ?>

        

            

            

          <?php } ?> 

      <!--Slider END-->

