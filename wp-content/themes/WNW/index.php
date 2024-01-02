<?php
get_header();
?>
<main id="home">
    <div class="slider" id="slider" active-item="1" slider-direction="next">
        <div class="item active"><h1>Item1</h1></div>
        <div class="item hide"><h1>Item2</h1></div>
        <div class="item hide"><h1>Item3</h1></div>
        <div class="item hide"><h1>Item4</h1></div>
        <div class="item hide"><h1>Item5</h1></div>
        
        <img src="<?php path_to('/assets/images/icons/prev.png') ?>" alt="previous icon" id="prev" />
        <img src="<?php path_to('/assets/images/icons/next.png') ?>" alt="next icon" id="next" />
    </div>
</main>

<?php
get_footer();