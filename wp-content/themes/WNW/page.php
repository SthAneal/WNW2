<?php
get_header();
?>
<main>
  <h1>Page</h1>
  <?php
  while (have_posts()):
    the_post();
    echo the_title() . '<br/>';
    echo the_content();
  endwhile;
  ?>

</main>

<?php
get_footer();