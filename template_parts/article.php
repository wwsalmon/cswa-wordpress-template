<div class="article-item">
    <?php
    $first_image = catch_that_image(get_the_ID());
    if ($first_image != false) {
        ?>
        <img class="article-image" src="<?php echo $first_image ?>">
        <?php
    }

    ?>
    <div>
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
        <h3 class="article-title"><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h3>
        <div class="article-date"><span><?php the_time("F d, Y"); ?></span></div>
        <!--    <div class="article-author"><span>-->
        <?php //echo cswa_author_with_link(get_the_author_meta("ID")); ?><!--</span></div>-->
        <!--    <div class="article-content">-->
        <?php //echo cswa_get_snippet(cswa_stripall(get_the_content()), 100) ?><!--</div>-->
    </div>
</div>