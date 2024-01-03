<?php
get_header();
?>
<main id="home">
    <div class="slider" id="slider" active-item="1" slider-direction="next">
        <div class="item active" style="background-image:url(<?php path_to('/assets/images/haircut-1.jpeg'); ?>)">
            <img src="<?php path_to('/assets/images/logo.png');?>" alt="whiskey & whiskers logo"/>
            <div class="info">
                <h1>the utmost experience</h1>
                <a href="/" class="btn">book now</a>
            </div>
        </div>
        <div class="item active" style="background-image:url(<?php path_to('/assets/images/haircut-2.jpeg'); ?>)">
            <img src="<?php path_to('/assets/images/logo.png');?>" alt="whiskey & whiskers logo"/>
            <div class="info">
                <h1>the utmost experience</h1>
                <a href="/" class="btn">book now</a>
            </div>
        </div>
        <div class="item active" style="background-image:url(<?php path_to('/assets/images/haircut-3.jpeg'); ?>)">
            <img src="<?php path_to('/assets/images/logo.png');?>" alt="whiskey & whiskers logo"/>
            <div class="info">
                <h1>the utmost experience</h1>
                <a href="/" class="btn">book now</a>
            </div>
        </div>
        <div class="item active" style="background-image:url(<?php path_to('/assets/images/haircut-4.jpeg'); ?>)">
            <img src="<?php path_to('/assets/images/logo.png');?>" alt="whiskey & whiskers logo"/>
            <div class="info">
                <h1>the utmost experience</h1>
                <a href="/" class="btn">book now</a>
            </div>
        </div>
        <div class="item active" style="background-image:url(<?php path_to('/assets/images/haircut-1.jpeg'); ?>)">
            <img src="<?php path_to('/assets/images/logo.png');?>" alt="whiskey & whiskers logo"/>
            <div class="info">
                <h1>the utmost experience</h1>
                <a href="/" class="btn">book now</a>
            </div>
        </div>

        
        <img src="<?php path_to('/assets/images/icons/prev.png') ?>" alt="previous icon" id="prev" />
        <img src="<?php path_to('/assets/images/icons/next.png') ?>" alt="next icon" id="next" />
    </div>
</main>

<?php
get_footer();