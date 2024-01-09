<?php
get_header();
?>
<main id="aboutus">
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
        <h2>
          <?php the_field('title'); ?>
        </h2>
        <img src="<?php echo get_field('sub_image')['url']; ?>" alt="<?php get_field('sub_image')['alt']; ?>" />
        <div>
          <?php
          echo the_content();
          ?>
        </div>
      </div>
    </div>
    <?php
  endif;
  ?>

</main>

<?php
get_footer();