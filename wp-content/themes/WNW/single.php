<?php
get_header();
?>
<main id="aboutus">
  <?php
  if (have_posts()):
    the_post();
    ?>
    <div class="info">
      <div class="container">
        <h2>
          <?php echo the_title(); ?>
        </h2>
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