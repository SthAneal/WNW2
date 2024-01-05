<footer class="main">
    <div class="container">
        <!-- <a class="logo" href="/"><img src="<?php path_to('/assets/images/logo.png') ?>"
                alt="Whiskey & Whiskers logo" /></a> -->

        <dl class="in-touch">
            <dt>contact us</dt>
            <dd><a href="https://goo.gl/maps/pdoapPQsFM6iykhK7" target="_blank">
                    104 Murray St, Hobart TAS, 7000
                </a></dd>
            <dd><a href="tel:+61451147736">Phone: +61451147736</a></dd>
            <dd><a href="mailto:www.wnwbarbers.com">Email: www.wnwbarbers.com</a></dd>
        </dl>

        <dl class="social">
            <dt>follow us on</dt>
            <dd>
                <?php
                $args = array(
                    'post_type' => 'social-links',
                    'post_status' => 'publish',
                    'order' => 'asc',
                    'post_per_page' => '3'
                );

                $query = new WP_Query($args);
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <a href="<?php the_field('link'); ?>" target="_blank"><img src="<?php  echo get_field('image')['url']; ?>"
                            alt="<?php echo get_field('image')['alt']; ?>" /></a>
                    <?php
                endwhile;
                ?>
            </dd>
        </dl>

        <div class="other-links-wrapper">
            <h3>other links</h3>
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container_class' => ' ',
                    'menu_id' => 'other-links',
                    'menu_class' => 'other-links',
                    'fallback_cb' => '',
                    'depth' => 0
                )
            ); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>