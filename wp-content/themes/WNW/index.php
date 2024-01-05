<?php
get_header();
?>
<main id="home">
    <div class="slider" id="slider" active-item="1" slider-direction="next">

        <?php
        $args = array(
            'post_type' => 'slider',
            'post_status' => 'publish',
            'order' => 'asc',
            'post_per_page' => '99'
        );

        $query = new WP_Query($args);

        while ($query->have_posts()):
            $query->the_post();
            ?>

            <div class="item <?php echo ($query->current_post === 0 ? 'active' : 'hide'); ?>"
                style="background-image:url(<?php the_field('background_image'); ?>)">
                <?php
                if (get_field('side_image')):
                    ?>
                    <img src="<?php echo get_field('side_image')['url'] ?>"
                        alt="<?php echo get_field('side_image')['alt']; ?>" />
                <?php endif; ?>
                <div class="info">
                    <h1>
                        <?php the_field('title'); ?>
                    </h1>
                    <?php
                    if (get_field('show_button')):
                        ?>
                        <a href="<?php the_field('button_link');?>" class="btn">
                            <?php the_field('button_label'); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <?php
        endwhile;
        ?>

        <img src="<?php path_to('/assets/images/icons/prev.png') ?>" alt="previous icon" id="prev" />
        <img src="<?php path_to('/assets/images/icons/next.png') ?>" alt="next icon" id="next" />
    </div>

    <div>
        <div class="container">
            <div class="services"></div>
            <div class="hours"></div>
        </div>
    </div>
</main>

<?php
get_footer();