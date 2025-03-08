<?php

// Theme Title
add_theme_support('title-tag');

// Thumbnil Image Area
add_theme_support( 'post-thumbnails', array('page', 'post') );
// add_image_size('post-thumbnails', 970, 350, true);


// Except to 40 Word

function excerpt_read_more($more) {
    return '<br> <br> <a class="redmore" href="' . get_permalink(get_the_ID()) . '">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'excerpt_read_more');

function excerpt_lenght_func($length) {
    return 40; // Set the excerpt length to 40 words
}
add_filter('excerpt_length', 'excerpt_lenght_func', 999);
