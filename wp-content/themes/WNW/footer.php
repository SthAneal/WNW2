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
                <a href="/"><img src="<?php path_to('/assets/images/icons/facebook.png') ?>" alt="facebook" /></a>
                <a href="/"><img src="<?php path_to('/assets/images/icons/instagram.png') ?>" alt="instagram" /></a>
                <a href="/"><img src="<?php path_to('/assets/images/icons/tik-tok.png') ?>" alt="tick tok" /></a>
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