<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 */

get_header();
?>

<main id="primary" class="site-main section">
    <div class="container text-center fade-up">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <h1 class="heading-secondary"><?php echo get_the_title(); ?></h1>
                <div style="margin-top: 2rem;">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile;
        else :
            ?>
            <p>No content found.</p>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
