    <!-- footer navigation box -->

        <footer class="nav flexbox">
            <div class="navbox flexbox">

                <div class="company_info">

                <!-- company logo, directs to home page -->
                <?php $image = get_field('lf_company_logo');?>

                    <figure class="company_logo">
                        <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo $image['sizes']['thumbnail'] ?>" alt="<?php bloginfo('name'); ?>"></a>
                    </figure>

                    <div class="content">

                        <?php the_field('lf_company_details'); ?>
                        
                    </div>    
                </div>

                <!-- footer menus -->

                <nav class="support">
                    <h5><?php the_field('1st_menu_name'); ?></h5>
                        <?php 
                        $args = [
                            'container' => false,
                            'theme_location'=> 'primary-navigation'
                        ];
                        echo wp_nav_menu($args);
                    ?> 
                </nav>

                <nav class="aboutus">
                    <h5><?php the_field('2nd_menu_name'); ?></h5>
                    <?php 
                        $args = [
                            'container' => false,
                            'theme_location'=> 'new-menu'
                        ];
                        echo wp_nav_menu($args);
                    ?> 
                </nav>
                
                <!-- subscribe section -->

                <div class="newsletter">
                    <h5><?php the_field('subscribe_heading'); ?></h5>
                       
                    <?php echo do_shortcode(get_field('newsletter_form')); ?>
                    
                    <!-- social media menu -->

                    <ul class="social flexbox">

                        <?php
                            if( have_rows('social_menu_repeater') ):
                                while ( have_rows('social_menu_repeater') ) : the_row();
                                        $link = get_sub_field('link');
                                    ?>

                                    <li>
                                        <a href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>">
                                        <span class="<?php the_sub_field('icon'); ?>"></span></a>
                                    </li>
                                    
                                    <?php
                                    the_sub_field('sub_field_name');

                                endwhile;
                            endif;
                        ?>

                    </ul>
                
                </div>
            </div>
            
            <div class="triangle_topright"></div>

        </footer>

        <?php wp_footer(); ?>	

    </body>
</html>
