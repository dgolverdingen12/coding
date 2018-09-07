<footer class="footer">
	<div class="footer--container">
		<div class="footer__item1">
			<?php dynamic_sidebar( 'footer1_widget' ); ?>
		</div>
		<div class="footer__item2">
			<h4 class="footer__item-head">Highlighted Projects</h4>
			<ul class="footer__menu">
				<?php dynamic_sidebar('footer2_widget'); ?>
			</ul>
		</div>
		<div class="footer__item3">
			<?php dynamic_sidebar('footer3_widget'); ?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
