<?php get_header(); ?>
<?php mwd_bootstrap_breadcrumb() ?>
<?php
if (have_posts()) :
	while (have_posts()) : the_post();

		get_template_part('inc/template_page');

	endwhile;

else :
	echo '<p>Ci spiace ma non abbiamo trovato nessuna pagina</p>';

endif;
?>

<?php get_footer(); ?>