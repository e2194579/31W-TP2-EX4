<?php get_header(); ?> 

<h1>front-pafe.php</h1>



<section class='section_cours'>

<?php



if (have_posts()):

    while(have_posts()) : the_post(); ?>

    <div class='div_cours'>

        <h2><?php the_title(); ?></h2>

        <p><?= wp_trim_words(get_the_content(), 20, " ... ") ?></p>

<?php $lien = "<a class='button' href='" . get_permalink() . "'>". substr(get_the_title(),0,8). "</a>";

echo $lien;?>

    </div>

    <?php endwhile; ?>

<?php endif; ?>

</section>





<?php get_footer(); ?>