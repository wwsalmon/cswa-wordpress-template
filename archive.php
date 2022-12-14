<?php get_header();
?>
    <div class="container">
        <?php get_template_part("template_parts/back-to-all-updates"); ?>
        <h1><?php the_archive_title(); ?></h1>
        <?php
        if (have_posts()):
            while (have_posts()) : the_post();
                get_template_part("template_parts/article");
            endwhile;
        endif;
        ?>
    </div>
<?php
get_footer();