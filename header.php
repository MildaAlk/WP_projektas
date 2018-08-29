<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/icons/fav.png">
        <title><?php wp_title(); ?></title>

        <?php wp_head();?>
    </head>

    <body>

        <!-- main hero page box -->

        <header>
            <!-- separate background div for image to be fixed on top and an origina size to keep the quality of a picture-->
            <div class="backround" style="background-image: url(<?php echo get_field('lr_hero_background')['url']; ?>);"></div>
          
            <div class="content_container flexbox flexcolumn">
                <div class="mainpage_heading">
                    <?php the_field('lr_hero_heading'); ?>
                </div>
                
                <!-- play button will not be allowed to edit in admin -->
                <figure class="play_icon">
                    <span class="icon-Play-Video-Icon"><span class="path1"></span><span class="path2"></span></span>
                </figure>

                <!-- TRY NOW button scrolls down to register form -->
                <?php $link = get_field('lr_hero_button'); ?>

                <div class="trynow_button">
                    <a class="head_button button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ?>">
                    <?php echo $link['title'] ?></a>
                </div>

                <div class="content">
                    <p><?php the_field('lr_hero_note'); ?></p>
                </div>
            </div>
        </header>