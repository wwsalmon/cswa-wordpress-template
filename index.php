<?php get_header();
?>
    <div class="hero">
        <div class="left-col">
            <p class="h-uppercase">We are the</p>
            <h1 style="font-weight: 400; font-size: 42px; margin: 16px 0">Claremont Student Worker Alliance</h1>
            <p class="p-content" style="opacity: 0.75">Students working in thoughtful solidarity with organized labor fights at the 5Cs and Inland Empire</p>
        </div>
        <img class="right-col" src="<?php echo get_template_directory_uri() . '/img/hero.jpg'; ?>">
    </div>
    <div class="container">
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