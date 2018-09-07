<?php 
/**
 * Template Name: Design portfolio
 */
?>

<?php get_header(); ?>
<?php require_once('sections/section-navigation-blue.php'); ?>
	<section class="intro intro-white" id="intro">
		<div class="container">
			<h2 class="portfolio__title"><?php the_title();?></h2>
			<?php
				$getLastPost = true;
				$postType = 'design';
				include(locate_template('design-content.php')) 
			?>
		</div>
	</section>
<?php get_footer(); ?>