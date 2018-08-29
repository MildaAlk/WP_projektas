<!-- Responsive design box --> 

<section class="flexbox">
    <div class="triangle-bottomleft flexbox">
        <figure> 
            <img class="mac_pic" src="<?php bloginfo('stylesheet_directory'); ?>/assets/icons/macbook.png" alt="<?php _e('laptop');?>">
        </figure> 
    </div>
    <div class="responsive_box flexbox flexcolumn">
        <div>
            <h3 class="pink_heading"><?php the_field('rd_section_preheading');?></h3>
        </div>
        <div>
            <h2 class="heading"><?php the_field('rd_section_heading');?> <span class="pink ">....</span></h2>
        </div>
        <div class="content">
            <p><?php the_field('rd_section_content');?></p>
        </div>
    </div>    
</section>