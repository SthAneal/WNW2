<?php
get_header();
?>
<main id="contactus">
  <?php
  if (have_posts()):
    the_post();
    ?>
    <div class="feature-img-wrapper">
      <img src="<?php echo get_field('feature_image')['url']; ?>" alt="<?php get_field('feature_image')['alt']; ?>" />
      <h1>
        <?php echo the_title(); ?>
      </h1>
    </div>

    <div class="info">
      <div class="container">
        <dl class="in-touch">
          <dt>Get in touch</dt>
          <dd>
            <a href=" <?php the_field('map_redirect_link'); ?>" target="_blank">
              <?php the_field('location'); ?>
            </a>
          </dd>
          <dd>
            <a href="tel:<?php the_field('phone'); ?>">Phone:
              <?php the_field('phone'); ?>
            </a>
          </dd>
          <dd>
            <a href="mailto:<?php the_field('email'); ?>">Email:
              <?php the_field('email'); ?>
            </a>
          </dd>
        </dl>

        <dl class="hours">
          <dt>Hours</dt>
          <dd>
            <?php
            the_field('opening_hours');
            ?>
          </dd>
        </dl>

        <dl class="social">
          <dt>follow us</dt>
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
              <a href="<?php the_field('link'); ?>" target="_blank"><img src="<?php echo get_field('image')['url']; ?>"
                  alt="<?php echo get_field('image')['alt']; ?>" /></a>
              <?php
            endwhile;
            wp_reset_query();
            ?>
          </dd>
        </dl>
      </div>
      <div class="map">
        <?php
        the_field('google_map');
        ?>
      </div>
    </div>
    <?php
  endif;
  ?>

</main>

<?php
get_footer();