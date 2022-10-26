<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Results</title>
	<style>
	.btn button{
		font-size:20px;
		background: black;
		color: white;
		
	}
	.btn a{
		color:white;
	}
	</style>	
</head>
<body>
<?php
/**
 * The template for displaying search results pages.
 *
 * @link http://labreportacf.local/?elementor_library=search
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


$file = get_field('lab_report_');
$filename = $file['filename'];
$fileurl = $file['url'];
get_header(); ?>





<div id="primary" <?php astra_primary_class(); ?>>

<?php if ($file):?>
    <H2>Download your lab reports here!</H2>
<?php endif ?>




<?php astra_content_loop(); ?>	
<div class="btn">
	<?php if ($file):?>
	<button> <a href="<?php echo $fileurl;?>" download><?php echo "Download";?></a></button> 
	
    <?php endif ?>

</div><!-- #primary -->
	


<?php get_footer(); ?>





</body>
</html>





 



