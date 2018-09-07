<?php require_once('sections/section-navigation-blue.php'); ?>

<?php get_header(); ?>
	<section class="intro intro-white" id="intro">
		<div class="container">
			<h2 class="portfolio__title"><?php the_title();?></h2>
			<?php 
				$postType = 'code';
				include(locate_template('code-content.php'))
			?>
			
		</div>
	</section>
<?php get_footer(); ?>