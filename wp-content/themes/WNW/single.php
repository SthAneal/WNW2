<?php
get_header();
?>
<div>
   <?php
   while (have_posts()):
      the_post();
      echo the_title().'<br/>';
      echo the_content();
   endwhile;
   ?>
</div>

<?php
get_footer();