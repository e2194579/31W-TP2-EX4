<?php get_header(); ?>
<section class="site__main">
    <!-- <h1>front-page.php</h1> -->
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>

            <?php $lien = "<br><a class='bouto' href='"
                . get_permalink()
                . "'>"
                . substr(get_the_title(), 0, 8)
                . "</a>";

            ?>

            <p><?= wp_trim_words(get_the_content(), 0, $lien) ?></p>


        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>