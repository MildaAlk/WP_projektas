<?php

/* Template Name: Landing page */

get_header();

?>

<!-- Start Point -->

<?php 
    
    get_template_part('partials/popup');
    get_template_part('partials/intro');
    get_template_part('partials/features');
    get_template_part('partials/responsive');
    get_template_part('partials/testimonials');
    get_template_part('partials/features2');
    get_template_part('partials/registration');

?>

<?php get_footer(); ?>