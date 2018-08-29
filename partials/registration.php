<!-- Register box -->

<section class="register flexbox flexcolumn" id="register" style="background-color: <?php the_field('mf_section_background'); ?>">
    <div>
        <h3 class="pink_heading"><?php the_field('rf_section_preheading'); ?></h3>
    </div>
    <div>
        <h2 class="white heading"><?php the_field('rf_section_heading'); ?></h2>
    </div>
           
        <div class="register_form">

            <span class="try_text flexbox"> 
                <img class="arrow" src="<?php bloginfo('stylesheet_directory'); ?>/assets/icons/arrow.png" alt=" "> 
                <?php the_field('rf_trial_note'); ?>
            </span> 

            <?php echo do_shortcode(get_field('registration_form')); ?>
        </div>

    <div class="terms_text">

        <div>
            <?php the_field('terms_and_services_note'); ?> 
            <?php $link = get_field('terms_and_services_link') ?>
            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?>.</a>
        </div>
    
    </div>
</section>