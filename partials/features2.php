<!-- More features box -->

<section class="more flexbox flexcolumn">
    <div>
        <h3 class="pink_heading"><?php the_field('ff_section_preheading');?></h3>
    </div>
    <div>
        <h2 class="heading"><?php the_field('ff_section_heading');?></h2>
    </div>
    <div class="content">
        <p><?php the_field('ff_section_content');?></p>
    </div>
    <div class="window">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/icons/browser.png" alt="<?php _e('browser');?>">
    </div>
</section>