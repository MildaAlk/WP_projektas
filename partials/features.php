<!-- Features box -->

<section class="features_container flexbox flexcolumn"style="background-image: url(<?php echo get_field('mf_section_background')['url']; ?>);">
    <div>
        <h3 class="pink_heading"><?php the_field('mf_section_preheading'); ?></h3>
    </div>
    <div>
        <h2 class="heading"><?php the_field('mf_section_heading'); ?></h2>
    </div>
    <ul class="list features flexbox flexwrap">
        <?php
            // check if the repeater field has rows of data
            if( have_rows('mf_features_repeater') ):
                // loop through the rows of data
                while ( have_rows('mf_features_repeater') ) : the_row();
                ?>

                  <li>
                    <img class="icon" src="<?php the_sub_field('icon'); ?>" alt="">
                    <h4><?php the_sub_field('feature'); ?></h4>
                    <p class="content"><?php the_sub_field('description'); ?></p>
                </li>              

                <?php  
                
                endwhile;
            endif;
        ?>
      
    </ul>

</section>