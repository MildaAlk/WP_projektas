 <!-- Intro box -->

<section class="flexbox">
    <div class="intro_textbox flexbox flexcolumn">
        <div class="description">
            <h3 class="pink_heading"><?php the_field('if_section_preheading');?></h3>
        </div>
        <div>
            <h2 class="heading"><?php the_field('if_section_heading');?> <span class="pink ">....</span></h2>
        </div>
        <div class="content">
            <?php the_field('if_section_content');?>
        </div>
    </div>

    <div class="triangle-bottomright">
    </div>
    
</section>