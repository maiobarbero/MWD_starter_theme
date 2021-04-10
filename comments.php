<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage mwd
 * @since mws 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<div id="comments" class="comments-area pt-5">

    <?php if ( have_comments() ) : ?>
    <h4 class="comments-title">
        <?php
                printf( _nx( 'Un commento per "%2$s"', '%1$s commenti su "%2$s"', get_comments_number(), 'comments title', 'mwd-theme' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
    </h4>

    <ol class="comment-list pt-3">
        <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => false,
                    'avatar_size' => 70,
                    'reverse_top_level' => true,
                ) );
            ?>
    </ol><!-- .comment-list -->
    <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
    <div class="navigation comment-navigation" role="navigation">
        <p class="screen-reader-text section-heading"><?php _e( 'Ultimi commenti', 'orange-starter-theme' ); ?></p>
        <div class="nav-previous">
            <?php previous_comments_link( __( '&larr; Commenti più vecchi', 'orange-starter-theme' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'orange-starter-theme' ) ); ?>
        </div>
    </div><!-- .comment-navigation -->
    <?php endif; // Check for comment navigation ?>


    <?php
 

     if ( ! comments_open() && get_comments_number() ) : ?>
    <p class="no-comments"><?php _e( 'Comments are closed.' , 'mwd-theme' ); ?></p>
    <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php comment_form(array(
        'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="submit_comment"><i class="fas fa-comment"></i></button>',
    )); ?>

</div><!-- #comments -->