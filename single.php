<?php get_header(); ?>

<?php
if (have_posts()) :
	while (have_posts()) : the_post();

		get_template_part('inc/template_article');

	endwhile;

else :
	echo '<p>Ci spiace ma non abbiamo trovato nessun articolo</p>';

endif;
?>

<?php get_footer(); ?>