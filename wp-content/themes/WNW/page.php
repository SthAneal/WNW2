<?php
get_header();
?>
<main id="page">
  <?php
  while (
    have_posts()
  ):
    the_post();
    ?>
    <section class="container <?php echo basename(get_permalink()); ?>">
      <h2 class="main">
        <?php echo the_title(); ?>
      </h2>
      <?php if(basename(get_permalink()) === 'gallery'): ?>
      <div>
        <?php
        echo the_content();
        ?>
      </div>
      <?php endif; ?>
    </section>
    <?php
  endwhile;
  ?>

</main>

<?php
get_footer();