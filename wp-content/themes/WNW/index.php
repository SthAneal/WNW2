<?php
get_header();
?>
<main id="home">
    <?php
    $args = array(
        'post_type' => 'slider',
        'post_status' => 'publish',
        'order' => 'asc',
        'post_per_page' => '99'
    );

    $query = new WP_Query($args);
    if ($query->have_posts()):
        ?>
        <div class="slider" id="slider" active-item="1" slider-direction="next">
            <?php
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
                            <a href="<?php the_field('button_link'); ?>" class="btn">
                                <?php the_field('button_label'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

            <?php endwhile; ?>
            <img src="<?php path_to('/assets/images/icons/prev.png') ?>" alt="previous icon" id="prev" />
            <img src="<?php path_to('/assets/images/icons/next.png') ?>" alt="next icon" id="next" />
        </div>
        <?php
    endif;
    wp_reset_query();
    ?>

    <div class="services-hours-wrapper container">
        <div class="services">
            <h2>Services</h2>
            <?php
            echo do_shortcode('[salon_booking_services]');
            ?>
        </div>

        <div class="hours">
            <h2>Hours</h2>
            <?php
            // $contactPage = get_page_by_path('contact');
            the_field('opening_hours', get_page_by_path('contact-us')->ID);
            ?>
        </div>
    </div>

    <?php
    $args = array(
        'post_type' => 'products',
        // 'post_type' => 'products1',
        'post_status' => 'publish',
        'order' => 'asc',
        'post_per_page' => '99'
    );

    $query = new WP_Query($args);
    if ($query->have_posts()):
        ?>

    <div class="products">
        <div class="container">
            <h2>some stock we have for you</h2>
            <ul>
                <?php
                    while($query->have_posts()):
                        $query->the_post();
                ?>
                <li>
                    <img src="<?php echo get_field('image')['url'] ?>" alt="<?php echo get_field('image')['alt'];  ?>"/>
                    <span><?php the_title(); ?></span>
                    <strong><?php the_field('price'); ?></strong>
                </li>

                <?php
                    endwhile;
                ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
</main>

<?php
get_footer();