<?php get_header();
?>
    <div class="hero">
        <div class="hero-left">
            <p class="h-uppercase">We are the</p>
            <h1 style="font-weight: 400; font-size: 42px; margin: 16px 0">Claremont Student Worker Alliance</h1>
            <p class="p-content" style="opacity: 0.75">Students working in thoughtful solidarity with organized labor
                fights at the 5Cs and Inland Empire</p>
        </div>
        <img class="hero-right" src="<?php echo wp_get_attachment_url(get_theme_mod('cswa-home-image'))?>">
    </div>
    <div class="home-container">
        <div class="home-left">
            <p class="h-uppercase">Latest updates</p>
            <?php
            $query = new WP_Query(array(
                'posts_per_page'   => 10,
                'post_type' => 'post',
            ));
            if ($query->have_posts()):
                while ($query->have_posts()) : $query->the_post();
                    get_template_part("template_parts/article");
                endwhile;
            endif;
            ?>
            <a href="<?php echo get_site_url() . "/updates"; ?>" style="margin-bottom: 32px; display: block; color: var(--accent-color); text-align: right; font-weight: 700;">All updates ></a>
        </div>
        <div class="home-right">
            <?php if ( is_active_sidebar( 'home_right_1' ) ) : dynamic_sidebar( 'home_right_1' ); endif; ?>
        </div>
    </div>
<?php
get_footer();