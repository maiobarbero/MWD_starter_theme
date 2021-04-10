<h2 class="widget-title">cerca nel sito</h2>
<form action="<?php echo home_url('/'); ?>" method="get" class="search__form">
    <input type="text" name="s" id="search" class="search__bar" placeholder="<?php the_search_query(); ?>">
    <button type='submit' class="search__btn"><i class="fas fa-search"></i></button>
</form>