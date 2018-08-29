<!-- Testimonials box -->

<section class="testimonials flexbox flexcolumn">
    <div class="contacts_box">
        <ul class="list flexbox flexwrap">

            <?php
                // check if the repeater field has rows of data
                if( have_rows('review_field_repeater') ):
                    // loop through the rows of data
                    while ( have_rows('review_field_repeater') ) : the_row();
                    ?>
                      
                    <li>
                        <img class="portrait_pic" src="<?php echo get_sub_field('foto')['sizes']['thumbnail']; ?>" alt="<?php bloginfo('name'); ?>">
                        <h4><?php the_sub_field('name'); ?></h4>
                        <h5><?php the_sub_field('role'); ?></h5>
                        <p class="content"><?php the_sub_field('comment'); ?></p>
                    </li>

                    <?php  
                    
                    endwhile;
                endif;
            ?>
                   
        </ul>
    </div>

    <div class="client_logos">
        <ul class="logos_list flexbox">

            <?php
                // check if the repeater field has rows of data
                if( have_rows('partner_logos_repeater') ):
                    // loop through the rows of data
                    while ( have_rows('partner_logos_repeater') ) : the_row();
                    $link = get_sub_field('link');
                    ?>
                    
                    <li>
                        <a href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>">
                        <img class="logo" src="<?php echo get_sub_field('logo')['sizes']['thumbnail']; ?>" alt="<?php bloginfo('name'); ?>"></a>
                    </li>

                    <?php  
                    
                    endwhile;
                endif;
            ?>
        
        </ul>

    </div>
</section>