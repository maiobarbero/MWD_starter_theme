<?php
get_header();
?>


<h2 class="fw-light">
    Ricerca per: <span class="uppercase fw-bold"><?php the_search_query(); ?></span>
</h2>


<?php
if (have_posts()) :
	?>

<div class="row ">

    <?php

	while (have_posts()) : the_post();
		?>

    <?php get_template_part('inc/template_article_list'); ?>

    <?php
	endwhile;?>

</div>

<?php else :
	echo '<p>Nessun articolo trovato...</p>';

endif;
?>


<?php
get_footer();
?>