<?php get_header();
?>
    <div class="container">
        <h1>Search results for "<?php echo get_search_query() ?>"</h1>
        <?php
        get_search_form();
        if (have_posts()):
            while (have_posts()) : the_post();
                get_template_part("template_parts/article");
            endwhile;
            the_posts_pagination();
        else:
            ?><p style="margin-top: 16px;">No results found for search query.</p><?php
        endif;
        ?>
    </div>
<?php
get_footer();