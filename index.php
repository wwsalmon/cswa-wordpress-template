<?php get_header();
?>
    <div class="container">
        <h1>Latest updates</h1>
        <?php
        if (have_posts()):
            while (have_posts()) : the_post();
                get_template_part("template_parts/article");
            endwhile;
            the_posts_pagination();
        endif;
        ?>
    </div>
<?php
get_footer();