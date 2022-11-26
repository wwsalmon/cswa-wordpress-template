<?php get_header();
?>
    <div class="post-container">
        <?php get_template_part("template_parts/back-to-all-updates"); ?>
        <?php
        while (have_posts()) : the_post(); ?>
            <?php

            if (sizeof(get_the_category()) > 0) {
                echo "<div class=\"article-categories\">";
                foreach (get_the_category() as $cat) {
                    ?>
                    <a class="article-category"
                       href="<?php echo get_category_link($cat) ?>">#<?php echo $cat->name ?></a>
                    <?php
                }
                echo "</div>";
            }
            ?>
            <h1 class="single-title"><?php the_title(); ?></h1>
            <div class="single-date" style="margin-bottom: 32px;"><?php echo the_date("F d, Y"); ?></div>
<!--            <div class="single-author"><span>--><?php //echo cswa_author_with_link(get_the_author_meta("ID")); ?><!--</span></div>-->
            <?php
            the_content();
        endwhile;
        ?>
    </div>
<?php
get_footer();