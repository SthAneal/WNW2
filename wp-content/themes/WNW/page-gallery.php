<?php
get_header();
?>
<main id="gallerypage">
  <?php
  while (
    have_posts()
  ):
    the_post();
    ?>
    <div class="container">
      <h2 class="main">
        <?php echo the_title(); ?>
      </h2>

      <?php
      echo the_content();
      ?>

      <dialog id="galleryDialog">
        <img src="" />
        <h3 class="image-caption"></h3>
        <div class="controls">
          <button value="prev">
            <img src="<?php path_to('/assets/images/icons/prev.png') ?>" alt="previous icons" />
          </button>
          <button value="close">
            <img src="<?php path_to('/assets/images/icons/close.png') ?>" alt="close icons" />
          </button>
          <button value="next">
            <img src="<?php path_to('/assets/images/icons/next.png') ?>" alt="next icons" />
          </button>
        </div>
      </dialog>
    </div>
    <?php
  endwhile;
  ?>

</main>

<?php
get_footer();